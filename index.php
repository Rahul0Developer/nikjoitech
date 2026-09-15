<?php
// index.php — Nikoji Technologies Homepage
$pageTitle = "Nikoji Technologies | Industrial Automation & EMS Partner in Delhi NCR";
$pageDescription = "Leading industrial automation company in Delhi NCR offering PLC/SCADA systems, PCB design, electronics manufacturing (EMS), testing solutions & engineering consultancy. 200+ projects delivered.";
$pageKeywords = "industrial automation Delhi, PLC programming, SCADA systems, PCB design India, EMS manufacturer, electronics manufacturing services, ATE testing, VFD integration, control panel design, HMI development";
$canonicalUrl = "https://nikojitechnologies.com/index.php";
?>
<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="<?= htmlspecialchars($pageDescription) ?>">
  <meta name="keywords" content="<?= htmlspecialchars($pageKeywords) ?>">
  <meta name="author" content="Nikoji Technologies Pvt Ltd">
  <meta name="robots" content="index, follow">
  <meta name="geo.region" content="IN-DL">
  <meta name="geo.placename" content="New Delhi">
  <meta name="geo.position" content="28.7041;77.1025">
  <meta name="ICBM" content="28.7041, 77.1025">
  
  <!-- Open Graph / Social Media -->
  <meta property="og:type" content="website">
  <meta property="og:url" content="<?= $canonicalUrl ?>">
  <meta property="og:title" content="<?= htmlspecialchars($pageTitle) ?>">
  <meta property="og:description" content="<?= htmlspecialchars($pageDescription) ?>">
  <meta property="og:image" content="https://nikojitechnologies.com/assets/images/og-image.jpg">
  <meta property="og:locale" content="en_IN">
  
  <!-- Twitter Card -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="<?= htmlspecialchars($pageTitle) ?>">
  <meta name="twitter:description" content="<?= htmlspecialchars($pageDescription) ?>">
  <meta name="twitter:image" content="https://nikojitechnologies.com/assets/images/twitter-card.jpg">
  
  <!-- Canonical URL -->
  <link rel="canonical" href="<?= $canonicalUrl ?>">
  
  <!-- Preconnect for performance -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="dns-prefetch" href="https://fonts.googleapis.com">
  
  <title><?= htmlspecialchars($pageTitle) ?></title>
  
  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="assets/images/favicon.ico">
  <link rel="apple-touch-icon" sizes="180x180" href="assets/images/apple-touch-icon.png">
  
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&family=Space+Grotesk:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/main.css">
  
  <!-- Critical CSS inline for faster FCP -->
  <style>
    /* Critical above-the-fold styles */
    :root{--green:#006B4F;--green-dark:#004d38;--gold:#FFD700;--bg:#F8FAF9;--text:#1a1a1a;--nav-h:72px}
    body{margin:0;font-family:'Space Grotesk',sans-serif;background:var(--bg);color:var(--text)}
    .hero{min-height:100vh;display:flex;align-items:center;padding-top:var(--nav-h);position:relative;overflow:hidden}
    .container{max-width:1280px;margin:0 auto;padding:0 32px}
    .btn{display:inline-flex;align-items:center;gap:8px;padding:13px 28px;font-size:0.9rem;font-weight:600;border-radius:10px;text-decoration:none;transition:all 0.3s}
    .btn-primary{background:var(--green);color:#fff}
    .btn-primary:hover{background:var(--green-dark);transform:translateY(-2px)}
  </style>
  
  <style>
    /* ── Hero ── */
    .hero {
      min-height: 100vh;
      padding-top: var(--nav-h);
      display: flex; align-items: center;
      background: var(--bg);
      position: relative; overflow: hidden;
    }
    .hero::before {
      content: '';
      position: absolute; top: -10%; right: -5%;
      width: 55vw; max-width: 700px; height: 100vh;
      background: radial-gradient(ellipse at center, rgba(0,107,79,0.07) 0%, transparent 70%);
      pointer-events: none;
    }
    .hero-inner {
      display: grid; grid-template-columns: 1fr;
      gap: 0; align-items: center;
    }
    .hero-badge {
      display: inline-flex; align-items: center; gap: 8px;
      background: rgba(0,107,79,0.08);
      border: 1px solid rgba(0,107,79,0.2);
      border-radius: 20px; padding: 7px 16px;
      font-size: 0.75rem; font-weight: 700;
      letter-spacing: 0.1em; text-transform: uppercase;
      color: var(--green); margin-bottom: 24px;
    }
    .hero-badge span { display: inline-block; width: 7px; height: 7px; border-radius: 50%; background: var(--gold); }
    .hero h1 {
      font-family: 'Poppins', sans-serif;
      font-size: clamp(2.2rem, 5vw, 3.8rem);
      font-weight: 800; line-height: 1.12;
      letter-spacing: -0.03em; color: var(--text);
      margin-bottom: 24px;
    }
    .hero h1 .highlight {
      color: var(--green); position: relative;
      display: inline-block;
    }
    .hero h1 .highlight::after {
      content: '';
      position: absolute; bottom: 2px; left: 0; right: 0;
      height: 4px; background: var(--gold);
      border-radius: 2px; opacity: 0.6;
    }
    .hero-desc {
      font-size: 1.05rem; color: var(--text-3);
      max-width: 480px; line-height: 1.8;
      margin-bottom: 36px;
    }
    .hero-actions { display: flex; gap: 14px; flex-wrap: wrap; align-items: center; }
    .hero-trust {
      display: flex; align-items: center; gap: 12px;
      margin-top: 48px; padding-top: 32px;
      border-top: 1px solid var(--border);
    }
    .trust-avatars { display: flex; }
    .trust-avatars div {
      width: 36px; height: 36px; border-radius: 50%;
      border: 2px solid var(--bg);
      background: var(--green);
      display: flex; align-items: center; justify-content: center;
      font-size: 0.75rem; font-weight: 700; color: #fff;
      margin-left: -8px;
    }
    .trust-avatars div:first-child { margin-left: 0; }
    .trust-text { font-size: 0.82rem; color: var(--text-3); }
    .trust-text strong { color: var(--text); }

    /* Hero Video Background */
    .hero-video-wrap {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      overflow: hidden;
      z-index: -1;
    }
    .hero-video {
      width: 100%;
      height: 100%;
      object-fit: cover;
      filter: blur(12px) brightness(0.85);
      transform: scale(1.1);
      animation: subtleZoom 20s ease-in-out infinite alternate;
    }
    @keyframes subtleZoom {
      from { transform: scale(1.05); }
      to { transform: scale(1.15); }
    }
    .hero-video-overlay {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: linear-gradient(135deg, rgba(248,250,249,0.9) 0%, rgba(248,250,249,0.75) 40%, rgba(248,250,249,0.5) 100%);
      backdrop-filter: blur(2px);
    }
    [data-theme="dark"] .hero-video-overlay {
      background: linear-gradient(135deg, rgba(13,31,24,0.95) 0%, rgba(13,31,24,0.85) 40%, rgba(13,31,24,0.6) 100%);
    }
    
    /* ── About ── */
    .about-split {
      display: grid; grid-template-columns: 1fr 1fr;
      gap: 80px; align-items: center;
    }
    .about-visual-grid {
      display: grid; grid-template-columns: 1fr 1fr;
      gap: 16px;
    }
    .about-card {
      background: var(--card-bg);
      border: 1px solid var(--border);
      border-radius: var(--radius);
      padding: 24px; text-align: center;
      transition: all var(--transition);
    }
    .about-card:hover { border-color: rgba(0,107,79,0.3); transform: translateY(-3px); }
    .about-card svg { width: 32px; height: 32px; color: var(--green); margin: 0 auto 12px; }
    .about-card h4 { font-size: 0.9rem; font-weight: 600; color: var(--text); margin-bottom: 4px; }
    .about-card p { font-size: 0.78rem; color: var(--text-3); }
    .about-card.accent { background: var(--green); border-color: var(--green); }
    .about-card.accent svg, .about-card.accent h4, .about-card.accent p { color: #fff !important; }

    /* ── Why Us ── */
    .why-grid {
      display: grid; grid-template-columns: repeat(3,1fr); gap: 24px;
    }
    .why-item {
      padding: 32px 28px;
      border: 1px solid var(--border);
      border-radius: var(--radius-lg);
      background: var(--card-bg);
      transition: all var(--transition);
      position: relative; overflow: hidden;
    }
    .why-item::before {
      content: '';
      position: absolute; top: 0; left: 0; right: 0;
      height: 3px; background: var(--green);
      transform: scaleX(0); transform-origin: left;
      transition: transform var(--transition);
    }
    .why-item:hover::before { transform: scaleX(1); }
    .why-item:hover { box-shadow: var(--shadow-lg); transform: translateY(-4px); }
    .why-number {
      font-family: 'Poppins', sans-serif;
      font-size: 3rem; font-weight: 800;
      color: rgba(0,107,79,0.1); line-height: 1;
      margin-bottom: 16px;
    }
    .why-item h3 {
      font-family: 'Poppins', sans-serif;
      font-size: 1rem; font-weight: 700;
      color: var(--text); margin-bottom: 10px;
    }
    .why-item p { font-size: 0.875rem; color: var(--text-3); line-height: 1.7; }

    /* ── Sectors ── */
    .sectors-grid {
      display: grid; grid-template-columns: repeat(4, 1fr); gap: 20px;
    }
    .sector-card {
      background: var(--card-bg);
      border: 1px solid var(--border);
      border-radius: var(--radius);
      padding: 28px 20px; text-align: center;
      transition: all var(--transition); cursor: default;
    }
    .sector-card:hover {
      background: var(--green); border-color: var(--green);
      transform: translateY(-4px); box-shadow: var(--shadow);
    }
    .sector-card svg { width: 36px; height: 36px; margin: 0 auto 14px; color: var(--green); transition: color var(--transition); }
    .sector-card:hover svg { color: var(--gold); }
    .sector-card h4 { font-size: 0.88rem; font-weight: 600; color: var(--text); transition: color var(--transition); }
    .sector-card:hover h4 { color: #fff; }

    /* ── Services Preview ── */
    .services-preview {
      display: grid; grid-template-columns: repeat(3,1fr); gap: 24px;
    }
    .sp-card {
      background: var(--card-bg);
      border: 1px solid var(--border);
      border-radius: var(--radius-lg);
      overflow: hidden; transition: all var(--transition);
    }
    .sp-card:hover { box-shadow: var(--shadow-lg); transform: translateY(-4px); border-color: rgba(0,107,79,0.25); }
    .sp-card-top {
      padding: 32px 28px 24px;
    }
    .sp-card-icon {
      width: 52px; height: 52px; background: rgba(0,107,79,0.09);
      border-radius: 14px; display: flex; align-items: center; justify-content: center;
      color: var(--green); margin-bottom: 20px;
    }
    .sp-card-icon svg { width: 24px; height: 24px; }
    .sp-card-top h3 {
      font-family: 'Poppins', sans-serif; font-size: 1.05rem; font-weight: 700;
      color: var(--text); margin-bottom: 10px;
    }
    .sp-card-top p { font-size: 0.875rem; color: var(--text-3); line-height: 1.7; }
    .sp-card-footer {
      padding: 16px 28px; border-top: 1px solid var(--border);
      background: rgba(0,107,79,0.03);
    }
    .sp-card-footer a {
      font-size: 0.82rem; font-weight: 700; color: var(--green);
      display: flex; align-items: center; gap: 6px; transition: gap var(--transition);
    }
    .sp-card:hover .sp-card-footer a { gap: 10px; }

    @media(max-width:1024px){
      .hero-inner { grid-template-columns:1fr; }
      .about-split { grid-template-columns:1fr; }
      .why-grid { grid-template-columns:1fr 1fr; }
      .sectors-grid { grid-template-columns:repeat(2,1fr); }
      .services-preview { grid-template-columns:1fr 1fr; }
    }
    @media(max-width:640px){
      .why-grid,.services-preview,.sectors-grid { grid-template-columns:1fr; }
      .about-visual-grid { grid-template-columns:1fr 1fr; }
    }
  </style>
</head>
<body>

<?php include 'inc/navbar.php'; ?>

<!-- ════════════════════════════
     HERO
═════════════════════════════ -->
<section class="hero" id="home" aria-label="Hero">
  <!-- Hero Video Background -->
  <div class="hero-video-wrap">
    <video class="hero-video" autoplay muted loop playsinline>
      <source src="assets/images/Subject_A_cinematic_photorea.mp4" type="video/mp4">
    </video>
    <div class="hero-video-overlay"></div>
  </div>
  
  <div class="container">
    <div class="hero-inner">

      <div class="hero-content">
        <div class="hero-badge">
          <span></span> ISO 9001:2015 Certified Company
        </div>
        <h1>
          Transform Your Business with<br>
          <span class="highlight">Smart Automation</span><br>
          &amp; Electronics Manufacturing
        </h1>
        <p class="hero-desc">
          Nikoji Technologies is Delhi NCR's trusted partner for industrial automation, PCB design, EMS, and testing solutions. We deliver turnkey systems that boost productivity by 40% while reducing operational costs — backed by proven engineering excellence.
        </p>
        <div class="hero-actions">
          <a href="contact.php" class="btn btn-primary btn-lg" aria-label="Get a free consultation">
            Get Free Consultation
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
          </a>
          <a href="tel:+917678334459" class="btn btn-outline" aria-label="Call us now">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 13a19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 3.6 2.18L6.6 2a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L7.91 9.91a16 16 0 0 0 6.08 6.08l.91-.91a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 21.82 17l.1-.08z"/></svg>
            +91 76783 34459
          </a>
        </div>
        <div class="hero-trust">
          <div class="trust-avatars">
            <div style="background:#006B4F">MF</div><div style="background:#004d38">RA</div><div style="background:#008f69">SK</div><div style="background:#FFD700;color:#006B4F">PD</div>
          </div>
          <div class="trust-text">
            Trusted by <strong>50+ manufacturing units</strong> across Delhi NCR, Haryana & Uttar Pradesh
          </div>
        </div>
        <!-- Trust badges -->
        <div style="margin-top:32px;display:flex;gap:20px;flex-wrap:wrap;align-items:center">
          <div style="display:flex;align-items:center;gap:8px;font-size:0.75rem;color:var(--text-3)">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#006B4F" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
            <span>ISO 9001:2015 Certified</span>
          </div>
          <div style="display:flex;align-items:center;gap:8px;font-size:0.75rem;color:var(--text-3)">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#006B4F" stroke-width="2"><rect x="1" y="4" width="22" height="16" rx="2" ry="2"/><line x1="1" y1="10" x2="23" y2="10"/></svg>
            <span>MSME Registered</span>
          </div>
          <div style="display:flex;align-items:center;gap:8px;font-size:0.75rem;color:var(--text-3)">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#006B4F" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
            <span>1-Year Warranty</span>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ════════════════════════════
     STATS
═════════════════════════════ -->
<section class="section-sm" id="stats">
  <div class="container">
    <div class="stats-bar reveal">
      <div class="stat-item">
        <div class="stat-number" data-count="50" data-suffix="+">0+</div>
        <div class="stat-label">Industrial Clients</div>
      </div>
      <div class="stat-item">
        <div class="stat-number" data-count="13" data-suffix="+" >0+</div>
        <div class="stat-label">Years Experience</div>
      </div>
      <div class="stat-item">
        <div class="stat-number" data-count="200" data-suffix="+">0+</div>
        <div class="stat-label">Projects Delivered</div>
      </div>
      <div class="stat-item">
        <div class="stat-number" data-count="99" data-suffix="%">0%</div>
        <div class="stat-label">Client Satisfaction</div>
      </div>
    </div>
  </div>
</section>

<!-- ════════════════════════════
     ABOUT
═════════════════════════════ -->
<section class="section" id="about" style="background:var(--bg)">
  <div class="container">
    <div class="about-split">

      <div class="about-visual-grid reveal-left">
        <!-- B2 Illustration Image 1 -->
        <div class="about-card" style="padding:0;overflow:hidden;">
          <img src="assets/images/B2_Illustration_1789372462492.png" alt="Industrial Automation System" style="width:100%;height:100%;object-fit:cover;">
        </div>
        <div class="about-card accent">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/></svg>
          <h4>Real-Time Systems</h4>
          <p>SCADA, HMI & Control Panels</p>
        </div>
        <div class="about-card accent">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="5" y="2" width="14" height="20" rx="2" ry="2"/><line x1="12" y1="18" x2="12.01" y2="18"/></svg>
          <h4>Embedded Systems</h4>
          <p>PCB design to production</p>
        </div>
        <!-- B2 Illustration Image 2 -->
        <div class="about-card" style="padding:0;overflow:hidden;">
          <img src="assets/images/B2_Illustration_1789372557138.png" alt="Electronics Manufacturing" style="width:100%;height:100%;object-fit:cover;">
        </div>
      </div>

      <div class="reveal-right">
        <div class="section-label">About Nikoji Technologies</div>
        <h2 class="section-title">Engineering Trust.<br>Delivering <em>Results</em>.</h2>
        <p class="section-sub" style="margin-bottom:24px">
          Nikoji Technologies is a New Delhi-based industrial engineering company specializing in automation, electronics manufacturing services, and precision engineering — serving sectors from manufacturing to energy.
        </p>
        <p style="font-size:0.9rem;color:var(--text-3);line-height:1.8;margin-bottom:32px">
          Founded on the principle that great industrial systems must be both technically sound and operationally reliable, we work closely with our clients from initial feasibility to full deployment — ensuring every system performs exactly as designed, day after day.
        </p>
        <div style="display:flex;gap:14px;flex-wrap:wrap">
          <a href="services.php" class="btn btn-primary">Our Services</a>
          <a href="contact.php" class="btn btn-outline">Get in Touch</a>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ════════════════════════════
     SERVICES PREVIEW
═════════════════════════════ -->
<section class="section" id="services" style="background:var(--card-bg)">
  <div class="container">
    <div class="section-header-center" style="margin-bottom:56px">
      <div class="section-label">What We Do</div>
      <h2 class="section-title">Comprehensive Engineering <em>Services</em></h2>
      <p class="section-sub">From PLC programming to full EMS production runs — we cover every stage of the industrial engineering lifecycle.</p>
    </div>

    <div class="services-preview" data-stagger>

      <div class="sp-card">
        <div class="sp-card-top">
          <div class="sp-card-icon">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2"/><line x1="8" y1="21" x2="16" y2="21"/><line x1="12" y1="17" x2="12" y2="21"/></svg>
          </div>
          <h3>Industrial Automation</h3>
          <p>PLC programming, SCADA systems, HMI development, VFD integration, servo drives, and custom motor control panels for complete factory automation.</p>
        </div>
        <div class="sp-card-footer">
          <a href="automation.php">Learn more →</a>
        </div>
      </div>

      <div class="sp-card">
        <div class="sp-card-top">
          <div class="sp-card-icon">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="4" y="4" width="16" height="16" rx="2"/><rect x="9" y="9" width="6" height="6"/><line x1="9" y1="1" x2="9" y2="4"/><line x1="15" y1="1" x2="15" y2="4"/><line x1="9" y1="20" x2="9" y2="23"/><line x1="15" y1="20" x2="15" y2="23"/><line x1="20" y1="9" x2="23" y2="9"/><line x1="20" y1="14" x2="23" y2="14"/><line x1="1" y1="9" x2="4" y2="9"/><line x1="1" y1="14" x2="4" y2="14"/></svg>
          </div>
          <h3>Electronics Design</h3>
          <p>PCB schematic and layout design, embedded systems firmware, CAD mechanical modeling, and UI/UX for industrial interfaces.</p>
        </div>
        <div class="sp-card-footer">
          <a href="design.php">Learn more →</a>
        </div>
      </div>

      <div class="sp-card">
        <div class="sp-card-top">
          <div class="sp-card-icon">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 3H5a2 2 0 0 0-2 2v4m6-6h10a2 2 0 0 1 2 2v4M9 3v11m0 0h10m-10 0a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2m-10 0V9m10 5V9m0 0H9"/></svg>
          </div>
          <h3>Testing & Quality</h3>
          <p>ICT, FCT, ATE, and flying probe testing solutions ensuring your boards and assemblies meet the highest quality standards before deployment.</p>
        </div>
        <div class="sp-card-footer">
          <a href="testing.php">Learn more →</a>
        </div>
      </div>

      <div class="sp-card">
        <div class="sp-card-top">
          <div class="sp-card-icon">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="16 3 21 3 21 8"/><line x1="4" y1="20" x2="21" y2="3"/><polyline points="21 16 21 21 16 21"/><line x1="15" y1="15" x2="21" y2="21"/></svg>
          </div>
          <h3>EMS & Manufacturing</h3>
          <p>SMT, through-hole assembly, box build, and rapid prototyping — complete electronics manufacturing services under one roof.</p>
        </div>
        <div class="sp-card-footer">
          <a href="ems.php">Learn more →</a>
        </div>
      </div>

      <div class="sp-card">
        <div class="sp-card-top">
          <div class="sp-card-icon">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>
          </div>
          <h3>Consultancy</h3>
          <p>Strategic industrial assessment, technology roadmapping, process optimization, and full deployment planning for your operations.</p>
        </div>
        <div class="sp-card-footer">
          <a href="consultancy.php">Learn more →</a>
        </div>
      </div>

      <div class="sp-card">
        <div class="sp-card-top">
          <div class="sp-card-icon">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/></svg>
          </div>
          <h3>Innovation Lab</h3>
          <p>From discovery to prototype — our structured innovation process turns your industrial challenges into working, deployable solutions.</p>
        </div>
        <div class="sp-card-footer">
          <a href="innovation.php">Learn more →</a>
        </div>
      </div>

    </div>

    <div style="text-align:center;margin-top:48px">
      <a href="services.php" class="btn btn-outline">View All Services</a>
    </div>
  </div>
</section>

<!-- ════════════════════════════
     WHY US
═════════════════════════════ -->
<section class="section" id="why-us">
  <div class="container">
    <div class="section-header-center" style="margin-bottom:56px">
      <div class="section-label">Why Nikoji</div>
      <h2 class="section-title">Built on <em>Engineering</em> Excellence</h2>
    </div>

    <div class="why-grid" data-stagger>
      <div class="why-item">
        <div class="why-number">01</div>
        <h3>End-to-End Capability</h3>
        <p>From concept and design to prototyping, testing, and full production — we handle the complete engineering lifecycle so you work with a single accountable partner.</p>
      </div>
      <div class="why-item">
        <div class="why-number">02</div>
        <h3>Industry-Hardened Systems</h3>
        <p>Every solution we deliver is designed for the real industrial environment — vibration, temperature, EMI, and operational demands that lab conditions can't replicate.</p>
      </div>
      <div class="why-item">
        <div class="why-number">03</div>
        <h3>Rapid Deployment</h3>
        <p>Our structured project methodology means faster time-to-commissioning without compromising on quality. Most projects run on schedule and within scope.</p>
      </div>
      <div class="why-item">
        <div class="why-number">04</div>
        <h3>Transparent Communication</h3>
        <p>Weekly progress reports, milestone check-ins, and a dedicated project lead ensure you always know exactly where your project stands.</p>
      </div>
      <div class="why-item">
        <div class="why-number">05</div>
        <h3>Post-Delivery Support</h3>
        <p>We don't disappear after handover. Our support model includes documentation, training, AMC options, and remote diagnostics for ongoing peace of mind.</p>
      </div>
      <div class="why-item">
        <div class="why-number">06</div>
        <h3>Cost-Effective Solutions</h3>
        <p>Competitive pricing built on lean engineering practices — you get the quality of a large firm at the agility and cost structure of a focused specialist team.</p>
      </div>
    </div>
  </div>
</section>

<!-- ════════════════════════════
     INDUSTRY SECTORS
═════════════════════════════ -->
<section class="section" id="sectors" style="background:var(--card-bg)">
  <div class="container">
    <div class="section-header-center" style="margin-bottom:48px">
      <div class="section-label">Industries We Serve</div>
      <h2 class="section-title">Across Every <em>Industrial Sector</em></h2>
    </div>

    <div class="sectors-grid" data-stagger>
      <!-- B2 Illustration Image 3 -->
      <div class="sector-card" style="padding:0;overflow:hidden;">
        <img src="assets/images/B2_Illustration_1789372619824.png" alt="Manufacturing Industry" style="width:100%;height:100%;object-fit:cover;">
      </div>
      <div class="sector-card">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
        <h4>Energy & Power</h4>
      </div>
      <div class="sector-card">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="1" y="3" width="15" height="13"/><polygon points="16 8 20 8 23 11 23 16 16 16 16 8"/><circle cx="5.5" cy="18.5" r="2.5"/><circle cx="18.5" cy="18.5" r="2.5"/></svg>
        <h4>Automotive</h4>
      </div>
      <!-- B2 Illustration Image 4 -->
      <div class="sector-card" style="padding:0;overflow:hidden;">
        <img src="assets/images/B2_Illustration_1789372698935.png" alt="Healthcare Industry" style="width:100%;height:100%;object-fit:cover;">
      </div>
      <div class="sector-card">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg>
        <h4>Healthcare</h4>
      </div>
      <div class="sector-card">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="12" cy="12" r="10"/><path d="M2 12h20M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/></svg>
        <h4>Oil & Gas</h4>
      </div>
      <!-- B2 Illustration Image 5 -->
      <div class="sector-card" style="padding:0;overflow:hidden;">
        <img src="assets/images/B2_Illustration_1789372742731.png" alt="Electronics Industry" style="width:100%;height:100%;object-fit:cover;">
      </div>
      <div class="sector-card">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><polyline points="6 9 6 2 18 2 18 9"/><path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"/><rect x="6" y="14" width="12" height="8"/></svg>
        <h4>Food & Beverage</h4>
      </div>
      <div class="sector-card">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><line x1="22" y1="12" x2="2" y2="12"/><path d="M5.45 5.11L2 12v6a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-6l-3.45-6.89A2 2 0 0 0 16.76 4H7.24a2 2 0 0 0-1.79 1.11z"/></svg>
        <h4>FMCG & Packaging</h4>
      </div>
      <div class="sector-card">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="4" y="4" width="16" height="16" rx="2"/><rect x="9" y="9" width="6" height="6"/><line x1="9" y1="1" x2="9" y2="4"/><line x1="15" y1="1" x2="15" y2="4"/><line x1="9" y1="20" x2="9" y2="23"/><line x1="15" y1="20" x2="15" y2="23"/><line x1="20" y1="9" x2="23" y2="9"/><line x1="20" y1="14" x2="23" y2="14"/><line x1="1" y1="9" x2="4" y2="9"/><line x1="1" y1="14" x2="4" y2="14"/></svg>
        <h4>Electronics</h4>
      </div>
    </div>
  </div>
</section>

<!-- ════════════════════════════
     CTA BANNER
═════════════════════════════ -->
<section class="section">
  <div class="container">
    <div class="cta-banner reveal">
      <h2>Ready to Automate Your Operations?</h2>
      <p>Let's discuss your project requirements. Our engineers are ready to help you find the right technical solution.</p>
      <div class="btn-group">
        <a href="contact.php" class="btn btn-gold btn-lg">Start a Project</a>
        <a href="tel:+917678334459" class="btn btn-white">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 13a19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 3.6 2.18L6.6 2a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L7.91 9.91a16 16 0 0 0 6.08 6.08l.91-.91a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 21.82 17l.1-.08z"/></svg>
          +91 7678334459
        </a>
      </div>
    </div>
  </div>
</section>

<?php include 'inc/footer.php'; ?>
</body>
</html>
