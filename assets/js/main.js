/* ===================================
   NIKOJI TECHNOLOGIES — MAIN JS
   =================================== */

document.addEventListener('DOMContentLoaded', () => {

  // ── Page Loader ──
  const loader = document.getElementById('page-loader');
  if (loader) {
    window.addEventListener('load', () => {
      setTimeout(() => loader.classList.add('hidden'), 1800);
    });
  }

  // ── Dark Mode ──
  const toggleBtn  = document.getElementById('theme-toggle');
  const storedTheme = localStorage.getItem('nikoji-theme') || 'light';
  document.documentElement.setAttribute('data-theme', storedTheme);
  updateThemeIcon(storedTheme);
  if (toggleBtn) {
    toggleBtn.addEventListener('click', () => {
      const current = document.documentElement.getAttribute('data-theme');
      const next    = current === 'dark' ? 'light' : 'dark';
      document.documentElement.setAttribute('data-theme', next);
      localStorage.setItem('nikoji-theme', next);
      updateThemeIcon(next);
    });
  }
  function updateThemeIcon(theme) {
    if (!toggleBtn) return;
    toggleBtn.innerHTML = theme === 'dark'
      ? `<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="5"/><line x1="12" y1="1" x2="12" y2="3"/><line x1="12" y1="21" x2="12" y2="23"/><line x1="4.22" y1="4.22" x2="5.64" y2="5.64"/><line x1="18.36" y1="18.36" x2="19.78" y2="19.78"/><line x1="1" y1="12" x2="3" y2="12"/><line x1="21" y1="12" x2="23" y2="12"/><line x1="4.22" y1="19.78" x2="5.64" y2="18.36"/><line x1="18.36" y1="5.64" x2="19.78" y2="4.22"/></svg>`
      : `<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"/></svg>`;
  }

  // ── Navbar Scroll ──
  const navbar = document.querySelector('.navbar');
  if (navbar) {
    window.addEventListener('scroll', () => {
      navbar.classList.toggle('scrolled', window.scrollY > 20);
    });
  }

  // ── Hamburger Menu ──
  const hamburger  = document.getElementById('hamburger');
  const mobileMenu = document.getElementById('mobile-menu');
  if (hamburger && mobileMenu) {
    hamburger.addEventListener('click', () => {
      hamburger.classList.toggle('open');
      mobileMenu.classList.toggle('open');
    });
    document.addEventListener('click', (e) => {
      if (!hamburger.contains(e.target) && !mobileMenu.contains(e.target)) {
        hamburger.classList.remove('open');
        mobileMenu.classList.remove('open');
      }
    });
  }

  // ── Reveal on Scroll ──
  const revealEls = document.querySelectorAll('.reveal, .reveal-left, .reveal-right');
  const revealObs = new IntersectionObserver((entries) => {
    entries.forEach(e => {
      if (e.isIntersecting) {
        e.target.classList.add('visible');
        revealObs.unobserve(e.target);
      }
    });
  }, { threshold: 0.12, rootMargin: '0px 0px -40px 0px' });
  revealEls.forEach(el => revealObs.observe(el));

  // ── Staggered reveal children ──
  document.querySelectorAll('[data-stagger]').forEach(parent => {
    const children = parent.children;
    Array.from(children).forEach((child, i) => {
      child.classList.add('reveal');
      child.style.transitionDelay = `${i * 0.09}s`;
    });
    revealObs.observe(parent);
    // observe children too
    Array.from(children).forEach(child => revealObs.observe(child));
  });

  // ── Animated Counters ──
  const counters = document.querySelectorAll('[data-count]');
  const counterObs = new IntersectionObserver((entries) => {
    entries.forEach(e => {
      if (e.isIntersecting) {
        animateCounter(e.target);
        counterObs.unobserve(e.target);
      }
    });
  }, { threshold: 0.5 });
  counters.forEach(el => counterObs.observe(el));

  function animateCounter(el) {
    const target   = parseFloat(el.getAttribute('data-count'));
    const suffix   = el.getAttribute('data-suffix') || '';
    const prefix   = el.getAttribute('data-prefix') || '';
    const decimals = el.getAttribute('data-decimals') || 0;
    const duration = 1800;
    const start    = performance.now();
    const update = (now) => {
      const elapsed = now - start;
      const progress = Math.min(elapsed / duration, 1);
      const ease = 1 - Math.pow(1 - progress, 3);
      const value = (target * ease).toFixed(decimals);
      el.textContent = prefix + value + suffix;
      if (progress < 1) requestAnimationFrame(update);
    };
    requestAnimationFrame(update);
  }

  // ── Accordion ──
  document.querySelectorAll('.accordion-header').forEach(header => {
    header.addEventListener('click', () => {
      const item = header.parentElement;
      const body = item.querySelector('.accordion-body');
      const inner = body.querySelector('.accordion-body-inner');
      const isOpen = item.classList.contains('open');
      // close all
      document.querySelectorAll('.accordion-item.open').forEach(openItem => {
        openItem.classList.remove('open');
        openItem.querySelector('.accordion-body').style.maxHeight = '0';
      });
      if (!isOpen) {
        item.classList.add('open');
        body.style.maxHeight = inner.scrollHeight + 'px';
      }
    });
  });

  // ── Admin Modal Trigger ──
  const adminTrigger = document.getElementById('admin-trigger');
  const adminModal   = document.getElementById('admin-modal');
  const modalClose   = document.getElementById('modal-close');
  if (adminTrigger && adminModal) {
    let hoverTimer;
    adminTrigger.addEventListener('mouseenter', () => {
      hoverTimer = setTimeout(() => adminModal.classList.add('open'), 1200);
    });
    adminTrigger.addEventListener('mouseleave', () => clearTimeout(hoverTimer));
    if (modalClose) modalClose.addEventListener('click', () => adminModal.classList.remove('open'));
    adminModal.addEventListener('click', (e) => {
      if (e.target === adminModal) adminModal.classList.remove('open');
    });
  }

  // ── Toast ──
  window.showToast = function(msg, type = 'success') {
    let toast = document.getElementById('toast');
    if (!toast) {
      toast = document.createElement('div');
      toast.id = 'toast';
      toast.className = 'toast';
      document.body.appendChild(toast);
    }
    toast.textContent = msg;
    toast.className = `toast ${type === 'error' ? 'error' : ''} show`;
    clearTimeout(toast._timer);
    toast._timer = setTimeout(() => toast.classList.remove('show'), 3500);
  };

  // ── Newsletter Form ──
  const nlForm = document.getElementById('newsletter-form');
  if (nlForm) {
    nlForm.addEventListener('submit', async (e) => {
      e.preventDefault();
      const btn  = nlForm.querySelector('button');
      const msgEl= nlForm.querySelector('.newsletter-msg');
      const data = new FormData(nlForm);
      btn.textContent = 'Subscribing...';
      btn.disabled = true;
      try {
        const res  = await fetch('newsletter.php', { method: 'POST', body: data });
        const json = await res.json();
        msgEl.textContent = json.message;
        msgEl.style.color = json.success ? 'var(--gold)' : '#ff6666';
        if (json.success) {
          nlForm.reset();
          showToast('✓ Subscribed successfully!');
        }
      } catch {
        msgEl.textContent = 'Something went wrong. Try again.';
        msgEl.style.color = '#ff6666';
      }
      btn.textContent = 'Subscribe';
      btn.disabled = false;
    });
  }

  // ── Smooth anchor links ──
  document.querySelectorAll('a[href^="#"]').forEach(link => {
    link.addEventListener('click', (e) => {
      const target = document.querySelector(link.getAttribute('href'));
      if (target) {
        e.preventDefault();
        const offset = parseInt(getComputedStyle(document.documentElement).getPropertyValue('--nav-h')) || 72;
        const top = target.getBoundingClientRect().top + window.scrollY - offset;
        window.scrollTo({ top, behavior: 'smooth' });
      }
    });
  });

  // ── Active nav link ──
  const navLinks = document.querySelectorAll('.nav-links a:not(.nav-cta), .mobile-menu a');
  const currentPath = window.location.pathname.split('/').pop() || 'index.html';
  navLinks.forEach(link => {
    const href = link.getAttribute('href') || '';
    if (href === currentPath || (currentPath === '' && href === 'index.html')) {
      link.classList.add('active');
    }
  });

  // ── Scrollspy (home page sections) ──
  const spySections = document.querySelectorAll('section[id]');
  if (spySections.length) {
    const spyObs = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          navLinks.forEach(link => {
            link.classList.toggle('active',
              link.getAttribute('href') === `#${entry.target.id}`
            );
          });
        }
      });
    }, { rootMargin: '-40% 0px -55% 0px' });
    spySections.forEach(s => spyObs.observe(s));
  }

});

// Scroll Reveal Animation for 2026 Design
document.addEventListener('DOMContentLoaded', function() {
  // Reveal on scroll elements
  const revealElements = document.querySelectorAll('.reveal-on-scroll');
  
  const revealOnScroll = () => {
    revealElements.forEach(el => {
      const elementTop = el.getBoundingClientRect().top;
      const windowHeight = window.innerHeight;
      
      if (elementTop < windowHeight * 0.85) {
        el.classList.add('revealed');
      }
    });
  };
  
  window.addEventListener('scroll', revealOnScroll);
  revealOnScroll(); // Check on load
  
  // Smooth scroll for anchor links
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
      e.preventDefault();
      const target = document.querySelector(this.getAttribute('href'));
      if (target) {
        target.scrollIntoView({ behavior: 'smooth', block: 'start' });
      }
    });
  });
  
  // Animate progress bars when visible
  const progressBars = document.querySelectorAll('.progress-fill, .mini-fill');
  const animateProgress = () => {
    progressBars.forEach(bar => {
      const elementTop = bar.getBoundingClientRect().top;
      const windowHeight = window.innerHeight;
      
      if (elementTop < windowHeight * 0.9) {
        const width = bar.style.width;
        bar.style.width = '0';
        setTimeout(() => {
          bar.style.width = width;
        }, 100);
      }
    });
  };
  
  window.addEventListener('scroll', animateProgress);
});
