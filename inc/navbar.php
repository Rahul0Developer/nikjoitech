<?php
// inc/navbar.php
$current = basename($_SERVER['PHP_SELF'], '.php');
$current_full = basename($_SERVER['PHP_SELF']);
// Helper function for clean URLs (no .php extension)
function cleanUrl($page) {
  if ($page === 'index') return '/';
  return '/' . $page;
}
?>
<div id="page-loader">
  <div class="loader-inner">
    <svg class="loader-logo" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
      <ellipse cx="40" cy="40" rx="38" ry="28" fill="#FFD700" opacity="0.15"/>
      <ellipse cx="40" cy="40" rx="38" ry="28" stroke="#FFD700" stroke-width="2"/>
      <path d="M40 12 C40 12 20 28 20 40 C20 52 40 68 40 68 C40 68 60 52 60 40 C60 28 40 12 40 12Z" fill="#FFD700" opacity="0.2"/>
      <path d="M12 40 C12 40 28 20 40 20 C52 20 68 40 68 40 C68 40 52 60 40 60 C28 60 12 40 12 40Z" fill="#FFD700" opacity="0.2"/>
    </svg>
    <div class="loader-bar"><div class="loader-bar-fill"></div></div>
  </div>
</div>

<nav class="navbar" role="navigation" aria-label="Main navigation">
  <div class="nav-inner">
    <a href="/" class="nav-logo" aria-label="Nikoji Technologies Home">
      <img src="assets/images/logo.jpg" alt="Nikoji Technologies Logo" width="42" height="42">
      <div class="nav-logo-text">
        <strong>Nikoji Technologies</strong>
        <span>Industrial Automation</span>
      </div>
    </a>

    <div class="nav-links">
      <a href="/" <?= $current==='index'?'class="active"':'' ?>>Home</a>
      <div class="has-dropdown">
        <a href="/services" <?= $current==='services'?'class="active"':'' ?>>Services ▾</a>
        <div class="nav-dropdown">
          <a href="/automation">⚙️ Automation</a>
          <a href="/design">🔧 Design</a>
          <a href="/testing">🔬 Testing</a>
          <a href="/ems">📦 EMS</a>
          <a href="/consultancy">🤝 Consultancy</a>
          <a href="/innovation">🚀 Innovation</a>
        </div>
      </div>
      <a href="/automation" <?= $current==='automation'?'class="active"':'' ?>>Automation</a>
      <a href="/ems" <?= $current==='ems'?'class="active"':'' ?>>EMS</a>
      <a href="/innovation" <?= $current==='innovation'?'class="active"':'' ?>>Innovation</a>
      <a href="/contact" class="nav-cta" <?= $current==='contact'?'style="opacity:0.85"':'' ?>>Let's Talk</a>
    </div>

    <div class="nav-right">
      <button class="theme-toggle" id="theme-toggle" aria-label="Toggle dark mode">
        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"/></svg>
      </button>
      <button class="hamburger" id="hamburger" aria-label="Menu" aria-expanded="false">
        <span></span><span></span><span></span>
      </button>
    </div>
  </div>
</nav>

<div class="mobile-menu" id="mobile-menu">
  <a href="/">Home</a>
  <a href="/automation">Automation</a>
  <a href="/design">Design</a>
  <a href="/testing">Testing</a>
  <a href="/ems">EMS</a>
  <a href="/innovation">Innovation</a>
  <a href="/consultancy">Consultancy</a>
  <a href="/services">All Services</a>
  <a href="/contact" class="mobile-cta">Let's Talk →</a>
</div>
