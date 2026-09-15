<?php
// index.php — Nikoji Technologies Homepage 2026
$pageTitle = "Nikoji Technologies | Next-Gen Industrial Automation & AI-Powered Engineering Solutions 2026";
$pageDescription = "Founded in 2026, Nikoji Technologies is India's fastest-growing industrial automation startup. We combine AI-driven automation, advanced robotics, IoT integration, and sustainable engineering across 6 disciplines. Get expert engineer access with 24hr response time.";
$pageKeywords = "industrial automation 2026, AI-powered manufacturing, smart factory solutions, robotics integration, IoT industrial systems, sustainable engineering India, Industry 4.0 Delhi, digital twin technology, predictive maintenance AI, automated quality control";
$canonicalUrl = "https://nikojitechnologies.com/index.php";
$currentYear = 2026;
$foundedYear = 2026;
?>
<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="<?= htmlspecialchars($pageDescription) ?>">
  <meta name="keywords" content="<?= htmlspecialchars($pageKeywords) ?>">
  <meta name="author" content="Nikoji Technologies Pvt Ltd">
  <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
  <meta name="googlebot" content="index, follow">
  <meta name="bingbot" content="index, follow">
  
  <!-- Geo Tags -->
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
  <meta property="og:image:width" content="1200">
  <meta property="og:image:height" content="630">
  <meta property="og:locale" content="en_IN">
  <meta property="og:site_name" content="Nikoji Technologies">
  
  <!-- Twitter Card -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:site" content="@nikojitech">
  <meta name="twitter:creator" content="@nikojitech">
  <meta name="twitter:title" content="<?= htmlspecialchars($pageTitle) ?>">
  <meta name="twitter:description" content="<?= htmlspecialchars($pageDescription) ?>">
  <meta name="twitter:image" content="https://nikojitechnologies.com/assets/images/twitter-card.jpg">
  
  <!-- Canonical URL -->
  <link rel="canonical" href="<?= $canonicalUrl ?>">
  
  <!-- Preconnect for performance -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="dns-prefetch" href="https://fonts.googleapis.com">
  <link rel="dns-prefetch" href="https://www.google-analytics.com">
  
  <title><?= htmlspecialchars($pageTitle) ?></title>
  
  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="assets/images/favicon.ico">
  <link rel="apple-touch-icon" sizes="180x180" href="assets/images/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon-16x16.png">
  
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=Space+Grotesk:wght@300;400;500;600;700&family=JetBrains+Mono:wght@400;500;600&display=swap" rel="stylesheet">
  
  <link rel="stylesheet" href="assets/css/main.css">
  
  <!-- Structured Data for AI SEO -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "Organization",
    "name": "Nikoji Technologies",
    "url": "https://nikojitechnologies.com",
    "logo": "https://nikojitechnologies.com/assets/images/logo.jpg",
    "foundingDate": "2026",
    "founders": [{"@type": "Person", "name": "Nikoji Team"}],
    "description": "Next-generation industrial automation and AI-powered engineering solutions provider founded in 2026",
    "address": {
      "@type": "PostalAddress",
      "streetAddress": "H-108 Dharampura, Najafgarh Roshanpura Colony",
      "addressLocality": "New Delhi",
      "addressRegion": "Delhi",
      "postalCode": "110043",
      "addressCountry": "IN"
    },
    "contactPoint": {
      "@type": "ContactPoint",
      "telephone": "+91-76783-34459",
      "contactType": "customer service",
      "availableLanguage": ["English", "Hindi"]
    },
    "sameAs": [
      "https://linkedin.com/company/nikoji-technologies",
      "https://twitter.com/nikojitech"
    ]
  }
  </script>
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "WebSite",
    "name": "Nikoji Technologies",
    "url": "https://nikojitechnologies.com",
    "potentialAction": {
      "@type": "SearchAction",
      "target": "https://nikojitechnologies.com/search?q={search_term_string}",
      "query-input": "required name=search_term_string"
    }
  }
  </script>
  
  <!-- Critical CSS inline for faster FCP/LCP -->
  <style>
    :root{
      --primary:#00C896;
      --primary-dark:#00A67D;
      --primary-light:#00E0A8;
      --secondary:#6C5DD3;
      --accent:#FF6B6B;
      --gold:#FFD700;
      --dark:#0A0F1A;
      --dark-light:#151F2E;
      --bg:#FFFFFF;
      --bg-alt:#F5F8FC;
      --text:#0A0F1A;
      --text-light:#5A6C84;
      --text-muted:#8A9BAF;
      --border:#E0E8F0;
      --card-bg:#FFFFFF;
      --shadow:0 8px 32px rgba(10,15,26,0.08);
      --shadow-lg:0 16px 64px rgba(10,15,26,0.12);
      --shadow-xl:0 24px 96px rgba(10,15,26,0.16);
      --radius:16px;
      --radius-lg:24px;
      --radius-xl:32px;
      --nav-h:80px;
      --transition:0.3s cubic-bezier(0.4,0,0.2,1);
      --gradient-primary:linear-gradient(135deg,#00C896 0%,#6C5DD3 100%);
      --gradient-dark:linear-gradient(135deg,#0A0F1A 0%,#151F2E 100%);
    }
    [data-theme="dark"]{
      --bg:#0A0F1A;
      --bg-alt:#0F1623;
      --text:#FFFFFF;
      --text-light:#A0B0C8;
      --text-muted:#6A7A94;
      --border:#1E2A3C;
      --card-bg:#151F2E;
      --shadow:0 8px 32px rgba(0,0,0,0.3);
      --shadow-lg:0 16px 64px rgba(0,0,0,0.4);
    }
    *{box-sizing:border-box;margin:0;padding:0}
    html{scroll-behavior:smooth;font-size:16px}
    body{font-family:'Inter',sans-serif;background:var(--bg);color:var(--text);line-height:1.6;overflow-x:hidden}
    img,video{max-width:100%;display:block}
    a{text-decoration:none;color:inherit}
    .container{max-width:1440px;margin:0 auto;padding:0 40px}
    .btn{display:inline-flex;align-items:center;gap:10px;padding:16px 32px;font-size:1rem;font-weight:600;border-radius:var(--radius);transition:all var(--transition);cursor:pointer;border:none}
    .btn-primary{background:var(--gradient-primary);color:#fff;box-shadow:0 4px 16px rgba(0,200,150,0.3)}
    .btn-primary:hover{transform:translateY(-3px);box-shadow:0 8px 24px rgba(0,200,150,0.4)}
    .btn-secondary{background:transparent;color:var(--primary);border:2px solid var(--primary)}
    .btn-secondary:hover{background:var(--primary);color:#fff}
    
    /* Hero 2026 Styles */
    .hero-2026{min-height:100vh;padding-top:var(--nav-h);position:relative;display:flex;align-items:center;overflow:hidden;background:var(--bg-alt)}
    .hero-video-container{position:absolute;inset:0;z-index:0}
    .hero-bg-video{width:100%;height:100%;object-fit:cover;filter:brightness(0.7)}
    .hero-video-overlay-gradient{position:absolute;inset:0;background:linear-gradient(135deg,var(--bg) 0%,rgba(var(--bg),0.85) 40%,rgba(var(--bg),0.6) 100%)}
    [data-theme="dark"] .hero-video-overlay-gradient{background:linear-gradient(135deg,var(--bg) 0%,rgba(10,15,26,0.9) 40%,rgba(10,15,26,0.7) 100%)}
    .hero-particles{position:absolute;inset:0;background-image:radial-gradient(circle at 1px 1px,var(--primary-light) 1px,transparent 0);background-size:50px 50px;opacity:0.1;animation:pulse 4s ease-in-out infinite}
    @keyframes pulse{0%,100%{opacity:0.1}50%{opacity:0.2}}
    .hero-container{position:relative;z-index:1}
    .hero-grid{display:grid;grid-template-columns:1.2fr 0.8fr;gap:60px;align-items:center}
    .startup-badge{display:inline-flex;align-items:center;gap:10px;background:linear-gradient(135deg,rgba(0,200,150,0.15),rgba(108,93,211,0.15));border:1px solid rgba(0,200,150,0.3);border-radius:50px;padding:10px 20px;font-size:0.85rem;font-weight:600;color:var(--primary);margin-bottom:24px;backdrop-filter:blur(10px)}
    .badge-dot{width:8px;height:8px;background:var(--gold);border-radius:50%;animation:blink 2s ease-in-out infinite}
    @keyframes blink{0%,100%{opacity:1}50%{opacity:0.5}}
    .hero-title{font-family:'Space Grotesk',sans-serif;font-size:clamp(2.5rem,5vw,4rem);font-weight:800;line-height:1.1;letter-spacing:-0.02em;color:var(--text);margin-bottom:24px}
    .gradient-text{background:var(--gradient-primary);-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text}
    .hero-subtitle{font-size:1.15rem;color:var(--text-light);line-height:1.8;max-width:580px;margin-bottom:36px}
    .hero-cta-group{display:flex;gap:16px;flex-wrap:wrap;margin-bottom:48px}
    .btn-glow{box-shadow:0 4px 20px rgba(0,200,150,0.4);animation:glow 3s ease-in-out infinite}
    @keyframes glow{0%,100%{box-shadow:0 4px 20px rgba(0,200,150,0.4)}50%{box-shadow:0 4px 30px rgba(0,200,150,0.6)}}
    .btn-icon{width:20px;height:20px;transition:transform var(--transition)}
    .btn-primary:hover .btn-icon{transform:translateX(4px)}
    .hero-trust-bar{padding-top:32px;border-top:1px solid var(--border)}
    .trust-logos{display:flex;gap:16px;margin-bottom:16px}
    .logo-placeholder{width:60px;height:60px;border-radius:12px;overflow:hidden;background:var(--card-bg);border:1px solid var(--border);display:flex;align-items:center;justify-content:center}
    .logo-placeholder img{width:100%;height:100%;object-fit:contain;opacity:0.8;transition:opacity var(--transition)}
    .logo-placeholder:hover img{opacity:1}
    .trust-text{font-size:0.9rem;color:var(--text-muted)}
    .certifications{display:flex;gap:20px;flex-wrap:wrap;margin-top:24px}
    .cert-badge{display:flex;align-items:center;gap:8px;font-size:0.85rem;color:var(--text-light);background:var(--card-bg);padding:8px 16px;border-radius:10px;border:1px solid var(--border)}
    .hero-visual{position:relative}
    .glass-effect{background:rgba(255,255,255,0.1);backdrop-filter:blur(20px);border:1px solid rgba(255,255,255,0.2);border-radius:var(--radius-lg)}
    [data-theme="dark"] .glass-effect{background:rgba(21,31,46,0.6);border:1px solid rgba(255,255,255,0.1)}
    .visual-card{padding:32px}
    .visual-header{display:flex;align-items:center;gap:12px;margin-bottom:24px;font-size:0.9rem;font-weight:600;color:var(--text-light)}
    .pulse-indicator{width:12px;height:12px;background:var(--primary);border-radius:50%;position:relative}
    .pulse-indicator::before{content:'';position:absolute;inset:-4px;background:rgba(0,200,150,0.3);border-radius:50%;animation:pulse-ring 2s ease-out infinite}
    @keyframes pulse-ring{to{transform:scale(2);opacity:0}}
    .stat-row{display:flex;justify-content:space-between;margin-bottom:16px}
    .stat-label{font-size:0.9rem;color:var(--text-muted)}
    .stat-value{font-size:1.5rem;font-weight:700}
    .progress-bar{height:6px;background:rgba(108,93,211,0.2);border-radius:3px;overflow:hidden;margin-bottom:24px}
    .progress-fill{height:100%;background:var(--gradient-primary);border-radius:3px;transition:width 1s ease-out}
    .tech-stack{display:flex;gap:12px}
    .tech-icon{font-size:1.5rem;animation:float 3s ease-in-out infinite}
    .tech-icon:nth-child(2){animation-delay:0.5s}
    .tech-icon:nth-child(3){animation-delay:1s}
    .tech-icon:nth-child(4){animation-delay:1.5s}
    @keyframes float{0%,100%{transform:translateY(0)}50%{transform:translateY(-8px)}}
    .floating-card{position:absolute;padding:12px 20px;border-radius:var(--radius);font-size:0.85rem;font-weight:600;display:flex;align-items:center;gap:8px;box-shadow:var(--shadow)}
    .floating-card.card-1{top:-20px;right:-20px;background:var(--card-bg);animation:float-card-1 4s ease-in-out infinite}
    .floating-card.card-2{bottom:40px;right:-40px;background:var(--card-bg);animation:float-card-2 5s ease-in-out infinite}
    @keyframes float-card-1{0%,100%{transform:translateY(0)}50%{transform:translateY(-10px)}}
    @keyframes float-card-2{0%,100%{transform:translateY(0)}50%{transform:translateY(10px)}}
    .float-icon{font-size:1.2rem}
    .scroll-indicator{position:absolute;bottom:40px;left:50%;transform:translateX(-50%);display:flex;flex-direction:column;align-items:center;gap:12px;color:var(--text-muted);font-size:0.85rem;animation:bounce 2s ease-in-out infinite}
    .mouse{width:24px;height:40px;border:2px solid var(--text-muted);border-radius:12px;position:relative}
    .wheel{width:4px;height:8px;background:var(--primary);border-radius:2px;position:absolute;top:8px;left:50%;transform:translateX(-50%);animation:scroll-wheel 2s ease-in-out infinite}
    @keyframes scroll-wheel{0%,100%{opacity:1;top:8px}50%{opacity:0.5;top:16px}}
    @keyframes bounce{0%,100%{transform:translateX(-50%) translateY(0)}50%{transform:translateX(-50%) translateY(-8px)}}
    .animate-fade-in{animation:fade-in 0.8s ease-out forwards;opacity:0}
    .animate-slide-up{animation:slide-up 0.8s ease-out forwards;opacity:0}
    .animate-scale-in{animation:scale-in 0.8s ease-out forwards;opacity:0}
    .delay-1{animation-delay:0.2s}
    .delay-2{animation-delay:0.4s}
    .delay-3{animation-delay:0.6s}
    .delay-4{animation-delay:0.8s}
    @keyframes fade-in{to{opacity:1}}
    @keyframes slide-up{from{opacity:0;transform:translateY(30px)}to{opacity:1;transform:translateY(0)}}
    @keyframes scale-in{from{opacity:0;transform:scale(0.9)}to{opacity:1;transform:scale(1)}}
    @media(max-width:1024px){.hero-grid{grid-template-columns:1fr;text-align:center}.hero-content{margin:0 auto}.hero-cta-group{justify-content:center}.trust-logos{justify-content:center}.certifications{justify-content:center}.hero-visual{display:none}}
    @media(max-width:640px){.hero-cta-group{flex-direction:column;width:100%}.btn{width:100%;justify-content:center}}
  </style>
</head>
<body itemscope itemtype="https://schema.org/WebPage">

<?php include 'inc/navbar.php'; ?>

<main itemprop="mainContentOfPage">
<!-- ════════════════════════════
     HERO SECTION 2026
═════════════════════════════ -->
<section class="hero-2026" id="home" aria-label="Hero">
  <!-- Animated Background Video -->
  <div class="hero-video-container">
    <video class="hero-bg-video" autoplay muted loop playsinline poster="assets/images/hero-poster.jpg">
      <source src="assets/images/Subject_A_cinematic_photorea.mp4" type="video/mp4">
    </video>
    <div class="hero-video-overlay-gradient"></div>
    <div class="hero-particles" aria-hidden="true"></div>
  </div>
  
  <div class="container hero-container">
    <div class="hero-grid">
      
      <div class="hero-content" itemscope itemtype="https://schema.org/Organization">
        <!-- Startup Badge -->
        <div class="startup-badge animate-fade-in">
          <span class="badge-dot"></span>
          <span class="badge-text">🚀 Founded in 2026 - Next-Gen Engineering Startup</span>
        </div>
        
        <!-- Main Headline -->
        <h1 class="hero-title animate-slide-up" itemprop="name">
          Building the Future with<br>
          <span class="gradient-text">AI-Powered Automation</span><br>
          & Intelligent Engineering
        </h1>
        
        <!-- Subheadline -->
        <p class="hero-subtitle animate-slide-up delay-1" itemprop="description">
          Nikoji Technologies combines <strong>6 engineering disciplines</strong> under one roof to deliver breakthrough automation solutions. 
          From concept to deployment, get <strong>direct engineer access</strong> with our industry-leading <strong>24-hour response time</strong>.
        </p>
        
        <!-- CTA Buttons -->
        <div class="hero-cta-group animate-slide-up delay-2">
          <a href="contact.php" class="btn btn-primary btn-glow" aria-label="Schedule a consultation">
            <span>Schedule Consultation</span>
            <svg class="btn-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <path d="M5 12h14M12 5l7 7-7 7"/>
            </svg>
          </a>
          <a href="tel:+917678334459" class="btn btn-secondary" aria-label="Call our engineering team">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 13a19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 3.6 2.18L6.6 2a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L7.91 9.91a16 16 0 0 0 6.08 6.08l.91-.91a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 21.82 17l.1-.08z"/>
            </svg>
            <span>Talk to an Engineer</span>
          </a>
        </div>
        
        <!-- Trust Indicators -->
        <div class="hero-trust-bar animate-fade-in delay-3">
          <div class="trust-logos">
            <div class="logo-placeholder" title="Client 1">
              <img src="assets/images/B2_Illustration_1789372462492.png" alt="Trusted client logo" loading="lazy">
            </div>
            <div class="logo-placeholder" title="Client 2">
              <img src="assets/images/B2_Illustration_1789372557138.png" alt="Trusted client logo" loading="lazy">
            </div>
            <div class="logo-placeholder" title="Client 3">
              <img src="assets/images/B2_Illustration_1789372619824.png" alt="Trusted client logo" loading="lazy">
            </div>
            <div class="logo-placeholder" title="Client 4">
              <img src="assets/images/B2_Illustration_1789372698935.png" alt="Trusted client logo" loading="lazy">
            </div>
          </div>
          <p class="trust-text">
            <strong>Trusted by 50+ innovative manufacturers</strong> across Delhi NCR, Haryana & Uttar Pradesh
          </p>
        </div>
        
        <!-- Certifications -->
        <div class="certifications animate-fade-in delay-4">
          <div class="cert-badge">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/>
            </svg>
            <span>ISO 9001:2015 Certified</span>
          </div>
          <div class="cert-badge">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <rect x="1" y="4" width="22" height="16" rx="2" ry="2"/><line x1="1" y1="10" x2="23" y2="10"/>
            </svg>
            <span>MSME Registered</span>
          </div>
          <div class="cert-badge">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
            </svg>
            <span>1-Year Performance Warranty</span>
          </div>
        </div>
      </div>
      
      <!-- Hero Visual Element -->
      <div class="hero-visual animate-scale-in delay-2">
        <div class="visual-card glass-effect">
          <div class="visual-header">
            <div class="pulse-indicator"></div>
            <span>Live Project Dashboard</span>
          </div>
          <div class="visual-content">
            <div class="stat-row">
              <span class="stat-label">Active Projects</span>
              <span class="stat-value gradient-text">24</span>
            </div>
            <div class="progress-bar">
              <div class="progress-fill" style="width: 78%"></div>
            </div>
            <div class="tech-stack">
              <div class="tech-icon" title="AI/ML">🤖</div>
              <div class="tech-icon" title="IoT">📡</div>
              <div class="tech-icon" title="Robotics">⚙️</div>
              <div class="tech-icon" title="Cloud">☁️</div>
            </div>
          </div>
        </div>
        
        <!-- Floating Elements -->
        <div class="floating-card card-1 glass-effect">
          <span class="float-icon">⚡</span>
          <span>24hr Response</span>
        </div>
        <div class="floating-card card-2 glass-effect">
          <span class="float-icon">🎯</span>
          <span>100% Engineer Access</span>
        </div>
      </div>
      
    </div>
  </div>
  
  <!-- Scroll Indicator -->
  <div class="scroll-indicator">
    <div class="mouse">
      <div class="wheel"></div>
    </div>
    <span>Scroll to explore</span>
  </div>
</section>

<!-- ════════════════════════════
     STARTUP STATS 2026
═════════════════════════════ -->
<section class="stats-section-2026" id="stats" aria-label="Company Statistics">
  <div class="container">
    <!-- Section Header -->
    <div class="section-header-center">
      <div class="section-badge">Why Choose Nikoji</div>
      <h2 class="section-title-gradient">Built Different Since <span class="gradient-text">2026</span></h2>
      <p class="section-subtitle">As a next-generation startup, we've reimagined industrial engineering from the ground up</p>
    </div>
    
    <!-- Stats Grid -->
    <div class="stats-grid-2026">
      
      <!-- Stat Card 1: Founded Year -->
      <div class="stat-card-2026 glass-effect reveal-on-scroll" data-aos="fade-up" data-aos-delay="0">
        <div class="stat-icon-wrapper">
          <div class="stat-icon-bg"></div>
          <svg class="stat-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/>
          </svg>
        </div>
        <div class="stat-value-wrapper">
          <span class="stat-year gradient-text">2026</span>
          <span class="stat-label">Founded In</span>
        </div>
        <p class="stat-desc">A fresh perspective on industrial automation, built for Industry 4.0</p>
      </div>
      
      <!-- Stat Card 2: Engineering Disciplines -->
      <div class="stat-card-2026 glass-effect reveal-on-scroll" data-aos="fade-up" data-aos-delay="100">
        <div class="stat-icon-wrapper">
          <div class="stat-icon-bg primary-bg"></div>
          <svg class="stat-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"/>
          </svg>
        </div>
        <div class="stat-value-wrapper">
          <span class="stat-number-large gradient-text">6</span>
          <span class="stat-label">Engineering Disciplines In-House</span>
        </div>
        <p class="stat-desc">Automation, Electronics, Mechanical, Software, AI/ML, and IoT under one roof</p>
        <div class="discipline-tags">
          <span class="tag">🤖 Automation</span>
          <span class="tag">💻 Software</span>
          <span class="tag">⚡ Electronics</span>
          <span class="tag">🔧 Mechanical</span>
          <span class="tag">🧠 AI/ML</span>
          <span class="tag">📡 IoT</span>
        </div>
      </div>
      
      <!-- Stat Card 3: Response Time -->
      <div class="stat-card-2026 glass-effect reveal-on-scroll" data-aos="fade-up" data-aos-delay="200">
        <div class="stat-icon-wrapper">
          <div class="stat-icon-bg accent-bg"></div>
          <svg class="stat-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/>
          </svg>
        </div>
        <div class="stat-value-wrapper">
          <span class="stat-number-large gradient-text">24<span class="stat-unit">hrs</span></span>
          <span class="stat-label">Typical Enquiry Response</span>
        </div>
        <p class="stat-desc">Industry-leading response time because your downtime is our priority</p>
        <div class="response-guarantee">
          <div class="guarantee-badge">⚡ Fast Response Guaranteed</div>
        </div>
      </div>
      
      <!-- Stat Card 4: Direct Engineer Access -->
      <div class="stat-card-2026 glass-effect highlight-card reveal-on-scroll" data-aos="fade-up" data-aos-delay="300">
        <div class="stat-icon-wrapper">
          <div class="stat-icon-bg gold-bg"></div>
          <svg class="stat-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/>
          </svg>
        </div>
        <div class="stat-value-wrapper">
          <span class="stat-number-large gradient-text">100<span class="stat-percent">%</span></span>
          <span class="stat-label">Direct Engineer Access</span>
        </div>
        <p class="stat-desc">No salespeople, no middlemen — talk directly to the engineers working on your project</p>
        <div class="access-benefits">
          <div class="benefit-item">✓ Clear Communication</div>
          <div class="benefit-item">✓ Technical Accuracy</div>
          <div class="benefit-item">✓ Faster Decisions</div>
        </div>
      </div>
      
    </div>
    
    <!-- Additional Trust Indicators -->
    <div class="trust-indicators-row">
      <div class="trust-item">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
          <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/>
        </svg>
        <span>ISO 9001:2015 Certified</span>
      </div>
      <div class="trust-item">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
          <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/>
        </svg>
        <span>Premium Quality Guarantee</span>
      </div>
      <div class="trust-item">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
          <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
        </svg>
        <span>1-Year Performance Warranty</span>
      </div>
      <div class="trust-item">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
          <rect x="1" y="4" width="22" height="16" rx="2" ry="2"/><line x1="1" y1="10" x2="23" y2="10"/>
        </svg>
        <span>MSME Registered Company</span>
      </div>
    </div>
  </div>
</section>

<!-- Add CSS for Stats Section -->
<style>
  .stats-section-2026{padding:120px 0;background:linear-gradient(180deg,var(--bg-alt) 0%,var(--bg) 100%);position:relative;overflow:hidden}
  .stats-section-2026::before{content:'';position:absolute;top:0;left:0;right:0;height:1px;background:linear-gradient(90deg,transparent,var(--border),transparent)}
  .section-header-center{text-align:center;max-width:800px;margin:0 auto 60px}
  .section-badge{display:inline-block;background:rgba(108,93,211,0.1);color:var(--secondary);padding:8px 20px;border-radius:50px;font-size:0.85rem;font-weight:600;margin-bottom:16px;border:1px solid rgba(108,93,211,0.2)}
  .section-title-gradient{font-family:'Space Grotesk',sans-serif;font-size:clamp(2rem,4vw,3rem);font-weight:800;line-height:1.2;margin-bottom:16px;color:var(--text)}
  .section-subtitle{font-size:1.1rem;color:var(--text-light);line-height:1.7}
  .stats-grid-2026{display:grid;grid-template-columns:repeat(auto-fit,minmax(280px,1fr));gap:32px;margin-bottom:60px}
  .stat-card-2026{padding:40px 32px;border-radius:var(--radius-xl);transition:all var(--transition);position:relative;overflow:hidden}
  .stat-card-2026:hover{transform:translateY(-8px);box-shadow:var(--shadow-xl)}
  .stat-card-2026.highlight-card{background:linear-gradient(135deg,rgba(0,200,150,0.08),rgba(108,93,211,0.08));border:1px solid rgba(0,200,150,0.3)}
  .stat-icon-wrapper{position:relative;margin-bottom:24px}
  .stat-icon-bg{position:absolute;width:60px;height:60px;background:rgba(0,200,150,0.1);border-radius:16px;transform:rotate(12deg)}
  .stat-icon-bg.primary-bg{background:rgba(108,93,211,0.15)}
  .stat-icon-bg.accent-bg{background:rgba(255,107,107,0.15)}
  .stat-icon-bg.gold-bg{background:rgba(255,215,0,0.15)}
  .stat-icon{position:relative;width:32px;height:32px;color:var(--primary);z-index:1}
  .stat-value-wrapper{margin-bottom:16px}
  .stat-year{font-size:3.5rem;font-weight:800;line-height:1;display:block;margin-bottom:8px}
  .stat-number-large{font-size:4rem;font-weight:800;line-height:1;display:block;margin-bottom:8px}
  .stat-unit,.stat-percent{font-size:2rem;color:var(--text-muted)}
  .stat-label{font-size:1rem;font-weight:600;color:var(--text);display:block}
  .stat-desc{font-size:0.95rem;color:var(--text-light);line-height:1.6;margin-bottom:20px}
  .discipline-tags{display:flex;flex-wrap:wrap;gap:8px}
  .tag{font-size:0.75rem;padding:6px 12px;background:var(--card-bg);border:1px solid var(--border);border-radius:20px;color:var(--text-light)}
  .response-guarantee{margin-top:16px}
  .guarantee-badge{display:inline-block;font-size:0.8rem;font-weight:600;color:var(--accent);background:rgba(255,107,107,0.1);padding:6px 14px;border-radius:20px;border:1px solid rgba(255,107,107,0.2)}
  .access-benefits{margin-top:20px}
  .benefit-item{font-size:0.85rem;color:var(--text-light);padding:6px 0;border-bottom:1px dashed var(--border)}
  .benefit-item:last-child{border-bottom:none}
  .trust-indicators-row{display:flex;justify-content:center;gap:40px;flex-wrap:wrap;padding-top:40px;border-top:1px solid var(--border)}
  .trust-item{display:flex;align-items:center;gap:10px;font-size:0.9rem;color:var(--text-light)}
  .trust-item svg{color:var(--primary);flex-shrink:0}
  @media(max-width:768px){.stats-grid-2026{grid-template-columns:1fr}.trust-indicators-row{flex-direction:column;gap:20px;text-align:center}.trust-item{justify-content:center}}
  .reveal-on-scroll{opacity:0;transform:translateY(30px);transition:all 0.8s ease-out}
  .reveal-on-scroll.revealed{opacity:1;transform:translateY(0)}
</style>

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
     CTA BANNER 2026
═════════════════════════════ -->
<section class="cta-section-2026">
  <div class="container">
    <div class="cta-container glass-effect">
      <div class="cta-content">
        <div class="cta-badge">🚀 Let's Build Together</div>
        <h2 class="cta-title">Ready to Transform Your Operations with <span class="gradient-text">Intelligent Automation</span>?</h2>
        <p class="cta-subtitle">Join 50+ innovative manufacturers who trust Nikoji Technologies for their automation needs. Get direct access to our engineering team today.</p>
        
        <div class="cta-features">
          <div class="feature-item">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
            <span>Free Technical Consultation</span>
          </div>
          <div class="feature-item">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
            <span>24-Hour Response Guarantee</span>
          </div>
          <div class="feature-item">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
            <span>Direct Engineer Access</span>
          </div>
          <div class="feature-item">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
            <span>Customized Solutions</span>
          </div>
        </div>
        
        <div class="cta-actions">
          <a href="contact.php" class="btn btn-primary btn-glow btn-lg">
            <span>Start Your Project</span>
            <svg class="btn-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
          </a>
          <a href="tel:+917678334459" class="btn btn-secondary btn-lg">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 13a19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 3.6 2.18L6.6 2a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L7.91 9.91a16 16 0 0 0 6.08 6.08l.91-.91a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 21.82 17l.1-.08z"/></svg>
            <span>+91 76783 34459</span>
          </a>
        </div>
      </div>
      
      <!-- Visual Element -->
      <div class="cta-visual">
        <div class="cta-card-stack">
          <div class="cta-card card-back"></div>
          <div class="cta-card card-middle"></div>
          <div class="cta-card card-front glass-effect">
            <div class="card-header">
              <div class="status-dot"></div>
              <span>Project Status</span>
            </div>
            <div class="card-metrics">
              <div class="metric">
                <span class="metric-label">Timeline</span>
                <span class="metric-value">On Track</span>
              </div>
              <div class="metric">
                <span class="metric-label">Progress</span>
                <div class="mini-progress">
                  <div class="mini-fill" style="width:85%"></div>
                </div>
              </div>
            </div>
            <div class="card-footer">
              <span>✅ Delivered on time</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<style>
  .cta-section-2026{padding:100px 0;background:linear-gradient(180deg,var(--bg) 0%,var(--bg-alt) 100%)}
  .cta-container{display:grid;grid-template-columns:1.2fr 0.8fr;gap:60px;align-items:center;padding:60px;border-radius:var(--radius-xl);background:linear-gradient(135deg,rgba(0,200,150,0.05),rgba(108,93,211,0.05));border:1px solid rgba(0,200,150,0.2);position:relative;overflow:hidden}
  .cta-container::before{content:'';position:absolute;top:-50%;right:-50%;width:100%;height:100%;background:radial-gradient(circle,rgba(0,200,150,0.1) 0%,transparent 70%);pointer-events:none}
  .cta-badge{display:inline-block;background:rgba(0,200,150,0.15);color:var(--primary);padding:8px 16px;border-radius:20px;font-size:0.85rem;font-weight:600;margin-bottom:20px;border:1px solid rgba(0,200,150,0.3)}
  .cta-title{font-family:'Space Grotesk',sans-serif;font-size:clamp(2rem,4vw,3rem);font-weight:800;line-height:1.2;margin-bottom:20px;color:var(--text)}
  .cta-subtitle{font-size:1.1rem;color:var(--text-light);line-height:1.8;margin-bottom:32px;max-width:540px}
  .cta-features{display:grid;grid-template-columns:1fr 1fr;gap:16px;margin-bottom:40px}
  .feature-item{display:flex;align-items:center;gap:12px;font-size:0.95rem;color:var(--text-light)}
  .feature-item svg{color:var(--primary);flex-shrink:0}
  .cta-actions{display:flex;gap:16px;flex-wrap:wrap}
  .btn-lg{padding:18px 36px;font-size:1.05rem}
  .cta-visual{position:relative;height:400px;display:flex;align-items:center;justify-content:center}
  .cta-card-stack{position:relative;width:320px;height:280px}
  .cta-card{position:absolute;border-radius:var(--radius-lg);box-shadow:var(--shadow-xl)}
  .cta-card.card-back{width:100%;height:100%;background:rgba(108,93,211,0.2);transform:rotate(-6deg) translateY(-20px)}
  .cta-card.card-middle{width:100%;height:100%;background:rgba(0,200,150,0.15);transform:rotate(-3deg) translateY(-10px)}
  .cta-card.card-front{width:100%;height:100%;padding:28px;background:var(--card-bg);border:1px solid var(--border);transform:rotate(0deg)}
  .card-header{display:flex;align-items:center;gap:10px;margin-bottom:24px;padding-bottom:16px;border-bottom:1px solid var(--border)}
  .status-dot{width:10px;height:10px;background:var(--primary);border-radius:50%;animation:pulse-status 2s ease-in-out infinite}
  @keyframes pulse-status{0%,100%{opacity:1}50%{opacity:0.5}}
  .card-metrics{margin-bottom:24px}
  .metric{display:flex;justify-content:space-between;margin-bottom:12px;font-size:0.9rem}
  .metric-label{color:var(--text-muted)}
  .metric-value{font-weight:600;color:var(--primary)}
  .mini-progress{width:120px;height:6px;background:rgba(108,93,211,0.2);border-radius:3px;overflow:hidden}
  .mini-fill{height:100%;background:var(--gradient-primary);border-radius:3px}
  .card-footer{padding-top:16px;border-top:1px solid var(--border);font-size:0.85rem;color:var(--text-light)}
  @media(max-width:1024px){.cta-container{grid-template-columns:1fr;text-align:center}.cta-visual{display:none}.cta-features{grid-template-columns:1fr}.cta-actions{justify-content:center}}
  @media(max-width:640px){.cta-actions{flex-direction:column;width:100%}.btn-lg{width:100%;justify-content:center}}
</style>

<?php include 'inc/footer.php'; ?>
</main>
</body>
</html>
