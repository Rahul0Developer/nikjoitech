/**
 * Nikoji Technologies - Main JavaScript
 * Modern, High-Performance Enterprise Platform
 */

(function() {
  'use strict';

  // ── DOM Ready ──
  document.addEventListener('DOMContentLoaded', function() {
    initPageLoader();
    initNavbar();
    initMobileMenu();
    initThemeToggle();
    initRevealAnimations();
    initContactForm();
    initNewsletterForm();
    initSmoothScroll();
  });

  // ── Page Loader ──
  function initPageLoader() {
    const loader = document.getElementById('page-loader');
    if (loader) {
      window.addEventListener('load', function() {
        setTimeout(function() {
          loader.classList.add('hidden');
          setTimeout(function() {
            loader.style.display = 'none';
          }, 600);
        }, 500);
      });
    }
  }

  // ── Navbar Scroll Effect ──
  function initNavbar() {
    const navbar = document.querySelector('.navbar');
    if (navbar) {
      window.addEventListener('scroll', function() {
        if (window.scrollY > 50) {
          navbar.classList.add('scrolled');
        } else {
          navbar.classList.remove('scrolled');
        }
      });
    }
  }

  // ── Mobile Menu ──
  function initMobileMenu() {
    const hamburger = document.querySelector('.hamburger');
    const mobileMenu = document.querySelector('.mobile-menu');
    
    if (hamburger && mobileMenu) {
      hamburger.addEventListener('click', function() {
        hamburger.classList.toggle('open');
        mobileMenu.classList.toggle('open');
        document.body.style.overflow = mobileMenu.classList.contains('open') ? 'hidden' : '';
      });

      // Close menu on link click
      const links = mobileMenu.querySelectorAll('a');
      links.forEach(link => {
        link.addEventListener('click', function() {
          hamburger.classList.remove('open');
          mobileMenu.classList.remove('open');
          document.body.style.overflow = '';
        });
      });

      // Close menu on outside click
      document.addEventListener('click', function(e) {
        if (!hamburger.contains(e.target) && !mobileMenu.contains(e.target)) {
          hamburger.classList.remove('open');
          mobileMenu.classList.remove('open');
          document.body.style.overflow = '';
        }
      });
    }
  }

  // ── Theme Toggle ──
  function initThemeToggle() {
    const themeToggle = document.querySelector('.theme-toggle');
    const html = document.documentElement;
    
    // Load saved theme
    const savedTheme = localStorage.getItem('theme') || 'light';
    html.setAttribute('data-theme', savedTheme);
    updateThemeIcon(themeToggle, savedTheme);

    if (themeToggle) {
      themeToggle.addEventListener('click', function() {
        const currentTheme = html.getAttribute('data-theme');
        const newTheme = currentTheme === 'dark' ? 'light' : 'dark';
        html.setAttribute('data-theme', newTheme);
        localStorage.setItem('theme', newTheme);
        updateThemeIcon(themeToggle, newTheme);
      });
    }
  }

  function updateThemeIcon(toggle, theme) {
    if (!toggle) return;
    if (theme === 'dark') {
      toggle.innerHTML = '☀️';
    } else {
      toggle.innerHTML = '🌙';
    }
  }

  // ── Reveal Animations ──
  function initRevealAnimations() {
    const reveals = document.querySelectorAll('.reveal, .reveal-left, .reveal-right');
    
    if (reveals.length === 0) return;

    const revealOnScroll = function() {
      const triggerBottom = window.innerHeight * 0.85;
      
      reveals.forEach(element => {
        const box = element.getBoundingClientRect();
        const top = box.top;
        
        if (top < triggerBottom) {
          element.classList.add('visible');
        }
      });
    };

    // Initial check
    revealOnScroll();
    
    // Scroll listener
    window.addEventListener('scroll', revealOnScroll);
  }

  // ── Contact Form AJAX ──
  function initContactForm() {
    const contactForm = document.getElementById('contact-form');
    if (!contactForm) return;

    contactForm.addEventListener('submit', function(e) {
      e.preventDefault();
      
      const submitBtn = contactForm.querySelector('button[type="submit"]');
      const originalText = submitBtn.innerHTML;
      const formData = new FormData(contactForm);
      
      // Disable button during submission
      submitBtn.disabled = true;
      submitBtn.innerHTML = '<span class="spinner"></span> Sending...';
      
      // Remove previous messages
      const prevMsg = contactForm.querySelector('.form-msg');
      if (prevMsg) prevMsg.remove();
      
      // Validate form
      const name = formData.get('name');
      const email = formData.get('email');
      const message = formData.get('message');
      
      if (!name || !email || !message) {
        showFormMessage(contactForm, 'Please fill in all required fields.', 'error');
        submitBtn.disabled = false;
        submitBtn.innerHTML = originalText;
        return;
      }
      
      // Email validation
      const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      if (!emailRegex.test(email)) {
        showFormMessage(contactForm, 'Please enter a valid email address.', 'error');
        submitBtn.disabled = false;
        submitBtn.innerHTML = originalText;
        return;
      }
      
      // Submit via AJAX
      fetch('contact.php', {
        method: 'POST',
        body: formData,
        headers: {
          'X-Requested-With': 'XMLHttpRequest'
        }
      })
      .then(response => response.text())
      .then(html => {
        // Parse response to check for success
        const parser = new DOMParser();
        const doc = parser.parseFromString(html, 'text/html');
        const successBanner = doc.querySelector('.success-banner');
        
        if (successBanner) {
          showFormMessage(contactForm, 'Message sent successfully! We\'ll get back to you within 24 hours.', 'success');
          contactForm.reset();
        } else {
          showFormMessage(contactForm, 'Thank you! Your message has been received.', 'success');
          contactForm.reset();
        }
      })
      .catch(error => {
        console.error('Error:', error);
        showFormMessage(contactForm, 'An error occurred. Please try again later.', 'error');
      })
      .finally(() => {
        submitBtn.disabled = false;
        submitBtn.innerHTML = originalText;
      });
    });
  }

  function showFormMessage(form, message, type) {
    const existingMsg = form.querySelector('.form-msg');
    if (existingMsg) existingMsg.remove();
    
    const msgDiv = document.createElement('div');
    msgDiv.className = `form-msg ${type}`;
    msgDiv.textContent = message;
    
    const firstFormGroup = form.querySelector('.form-group');
    if (firstFormGroup) {
      firstFormGroup.parentNode.insertBefore(msgDiv, firstFormGroup);
    } else {
      form.insertBefore(msgDiv, form.firstChild);
    }
    
    // Auto-hide success messages after 5 seconds
    if (type === 'success') {
      setTimeout(() => {
        msgDiv.style.opacity = '0';
        msgDiv.style.transition = 'opacity 0.3s ease';
        setTimeout(() => msgDiv.remove(), 300);
      }, 5000);
    }
  }

  // ── Newsletter Form AJAX ──
  function initNewsletterForm() {
    const newsletterForms = document.querySelectorAll('.newsletter-form');
    
    newsletterForms.forEach(form => {
      form.addEventListener('submit', function(e) {
        e.preventDefault();
        
        const emailInput = form.querySelector('input[type="email"]');
        const submitBtn = form.querySelector('button[type="submit"]');
        const msgDiv = form.querySelector('.newsletter-msg') || createNewsletterMsg(form);
        
        const email = emailInput.value.trim();
        
        if (!email) {
          msgDiv.textContent = 'Please enter your email address.';
          msgDiv.style.color = '#f87171';
          return;
        }
        
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(email)) {
          msgDiv.textContent = 'Please enter a valid email address.';
          msgDiv.style.color = '#f87171';
          return;
        }
        
        // Disable button
        const originalText = submitBtn.textContent;
        submitBtn.disabled = true;
        submitBtn.textContent = 'Subscribing...';
        
        // Create form data
        const formData = new FormData();
        formData.append('email', email);
        formData.append('action', 'newsletter_subscribe');
        
        // Submit via AJAX
        fetch('newsletter.php', {
          method: 'POST',
          body: formData,
          headers: {
            'X-Requested-With': 'XMLHttpRequest'
          }
        })
        .then(response => response.json())
        .then(data => {
          if (data.success) {
            msgDiv.textContent = '✓ Welcome aboard! Check your inbox for confirmation.';
            msgDiv.style.color = 'var(--gold-primary)';
            emailInput.value = '';
          } else {
            msgDiv.textContent = data.message || 'Subscription failed. Please try again.';
            msgDiv.style.color = '#f87171';
          }
        })
        .catch(error => {
          console.error('Error:', error);
          msgDiv.textContent = 'An error occurred. Please try again.';
          msgDiv.style.color = '#f87171';
        })
        .finally(() => {
          submitBtn.disabled = false;
          submitBtn.textContent = originalText;
          
          // Clear message after 5 seconds
          setTimeout(() => {
            msgDiv.textContent = '';
          }, 5000);
        });
      });
    });
  }

  function createNewsletterMsg(form) {
    const msgDiv = document.createElement('div');
    msgDiv.className = 'newsletter-msg';
    form.appendChild(msgDiv);
    return msgDiv;
  }

  // ── Smooth Scroll for Anchor Links ──
  function initSmoothScroll() {
    const anchorLinks = document.querySelectorAll('a[href^="#"]');
    
    anchorLinks.forEach(link => {
      link.addEventListener('click', function(e) {
        const href = this.getAttribute('href');
        if (href === '#') return;
        
        const target = document.querySelector(href);
        if (target) {
          e.preventDefault();
          const navHeight = document.querySelector('.navbar')?.offsetHeight || 0;
          const targetPosition = target.getBoundingClientRect().top + window.pageYOffset - navHeight;
          
          window.scrollTo({
            top: targetPosition,
            behavior: 'smooth'
          });
        }
      });
    });
  }

  // ── Counter Animation for Stats ──
  function animateCounter(element, target, duration = 2000) {
    const start = 0;
    const increment = target / (duration / 16); // 60fps
    let current = start;
    
    const timer = setInterval(() => {
      current += increment;
      if (current >= target) {
        element.textContent = target.toLocaleString();
        clearInterval(timer);
      } else {
        element.textContent = Math.floor(current).toLocaleString();
      }
    }, 16);
  }

  // ── Expose utilities globally ──
  window.NikojiUtils = {
    animateCounter,
    showFormMessage
  };

})();
