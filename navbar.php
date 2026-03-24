<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
  <title>Mavixlk | Futuristic Digital Marketing</title>
  <!-- Google Fonts: clean modern sans -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,300;14..32,400;14..32,500;14..32,600;14..32,700&display=swap" rel="stylesheet">
  <!-- Font Awesome 6 -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      background: #f8fafc;
      font-family: 'Inter', sans-serif;
      color: #1e293b;
      scroll-behavior: smooth;
      line-height: 1.5;
    }

    /* soft futuristic gradient background */
    body::before {
      content: "";
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: radial-gradient(circle at 20% 30%, rgba(56, 189, 248, 0.08) 0%, rgba(139, 92, 246, 0.05) 100%);
      pointer-events: none;
      z-index: 0;
    }

    .container {
      max-width: 1200px;
      margin: 0 auto;
      padding: 0 2rem;
      position: relative;
      z-index: 2;
    }

    /* ===== HEADER - CLEAN GLASS ===== */
    header {
      position: sticky;
      top: 20px;
      z-index: 100;
      margin-top: 20px;
    }

    .navbar {
      background: rgba(255, 255, 255, 0.85);
      backdrop-filter: blur(12px);
      border-radius: 2rem;
      padding: 0.7rem 2rem;
      display: flex;
      align-items: center;
      justify-content: space-between;
      flex-wrap: wrap;
      border: 1px solid rgba(56, 189, 248, 0.25);
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.02), 0 1px 2px rgba(0, 0, 0, 0.03);
      transition: all 0.3s ease;
    }

    .navbar:hover {
      background: rgba(255, 255, 255, 0.95);
      border-color: rgba(56, 189, 248, 0.4);
      box-shadow: 0 8px 30px rgba(0, 0, 0, 0.05);
    }

    /* logo image */
    .logo {
      display: flex;
      align-items: center;
      text-decoration: none;
      transition: all 0.2s ease;
    }

    .logo-img {
      height: 42px;
      width: auto;
      max-width: 160px;
      object-fit: contain;
      transition: all 0.2s ease;
    }

    .logo:hover .logo-img {
      transform: scale(1.02);
      filter: drop-shadow(0 2px 6px rgba(56, 189, 248, 0.3));
    }

    .logo-fallback {
      font-weight: 700;
      font-size: 1.4rem;
      letter-spacing: -0.5px;
      background: linear-gradient(135deg, #0ea5e9, #8b5cf6);
      -webkit-background-clip: text;
      background-clip: text;
      color: transparent;
    }

    /* navigation */
    .nav-links {
      display: flex;
      align-items: center;
      gap: 2rem;
      list-style: none;
      flex-wrap: wrap;
    }

    .nav-links li a {
      text-decoration: none;
      font-weight: 500;
      font-size: 0.9rem;
      color: #334155;
      transition: all 0.2s;
      position: relative;
      padding: 0.4rem 0;
    }

    .nav-links li a:not(.btn-outline):after {
      content: '';
      position: absolute;
      bottom: 0;
      left: 0;
      width: 0;
      height: 2px;
      background: linear-gradient(90deg, #0ea5e9, #8b5cf6);
      border-radius: 2px;
      transition: width 0.25s ease;
    }

    .nav-links li a:not(.btn-outline):hover:after {
      width: 100%;
    }

    .nav-links li a:not(.btn-outline):hover {
      color: #0f172a;
    }

    /* light CTA button */
    .btn-outline {
      background: transparent;
      border: 1.5px solid #0ea5e9;
      padding: 0.5rem 1.3rem;
      border-radius: 2rem;
      font-weight: 600;
      font-size: 0.85rem;
      color: #0ea5e9;
      transition: all 0.25s;
      display: inline-block;
    }

    .btn-outline i {
      font-size: 0.75rem;
      margin-left: 6px;
      transition: transform 0.2s;
    }

    .btn-outline:hover {
      background: #0ea5e9;
      border-color: #0ea5e9;
      color: white;
      transform: translateY(-2px);
      box-shadow: 0 4px 12px rgba(14, 165, 233, 0.25);
    }

    .btn-outline:hover i {
      transform: translateX(4px);
    }

    /* ===== HERO SECTION ===== */
    .hero {
      margin-top: 3rem;
      margin-bottom: 4rem;
      padding: 2rem 0 1rem;
      text-align: center;
    }

    .hero-badge {
      background: rgba(14, 165, 233, 0.1);
      padding: 0.4rem 1.2rem;
      border-radius: 40px;
      font-size: 0.75rem;
      font-weight: 500;
      color: #0ea5e9;
      display: inline-block;
      margin-bottom: 1.5rem;
      letter-spacing: 0.3px;
    }

    .hero h1 {
      font-size: 3.5rem;
      font-weight: 700;
      background: linear-gradient(135deg, #0f172a, #0ea5e9, #8b5cf6);
      background-clip: text;
      -webkit-background-clip: text;
      color: transparent;
      max-width: 800px;
      margin: 0 auto 1rem;
      line-height: 1.2;
      letter-spacing: -0.02em;
    }

    .hero p {
      font-size: 1.1rem;
      color: #475569;
      max-width: 550px;
      margin: 0 auto 2rem;
    }

    .hero-cta {
      display: flex;
      gap: 1rem;
      justify-content: center;
      flex-wrap: wrap;
    }

    .btn-primary {
      background: linear-gradient(135deg, #0ea5e9, #8b5cf6);
      border: none;
      padding: 0.75rem 1.8rem;
      border-radius: 2.5rem;
      text-decoration: none;
      font-weight: 600;
      color: white;
      transition: all 0.25s;
      box-shadow: 0 2px 8px rgba(14, 165, 233, 0.25);
    }

    .btn-primary:hover {
      transform: translateY(-2px);
      box-shadow: 0 8px 20px rgba(14, 165, 233, 0.3);
    }

    .btn-secondary {
      background: transparent;
      border: 1.5px solid #cbd5e1;
      padding: 0.75rem 1.8rem;
      border-radius: 2.5rem;
      text-decoration: none;
      color: #475569;
      font-weight: 500;
      transition: all 0.2s;
    }

    .btn-secondary:hover {
      border-color: #0ea5e9;
      color: #0ea5e9;
      transform: translateY(-2px);
    }

    /* stats section - minimal */
    .stats-grid {
      display: flex;
      gap: 2rem;
      justify-content: center;
      flex-wrap: wrap;
      margin: 2rem 0 3rem;
      padding: 1.5rem;
      background: white;
      border-radius: 2rem;
      border: 1px solid #e2e8f0;
      box-shadow: 0 2px 12px rgba(0, 0, 0, 0.02);
    }

    .stat-item {
      text-align: center;
      min-width: 120px;
    }

    .stat-number {
      font-size: 2.2rem;
      font-weight: 800;
      background: linear-gradient(135deg, #0ea5e9, #8b5cf6);
      background-clip: text;
      -webkit-background-clip: text;
      color: transparent;
      letter-spacing: -0.02em;
    }

    .stat-label {
      font-size: 0.75rem;
      text-transform: uppercase;
      letter-spacing: 1px;
      font-weight: 500;
      color: #64748b;
      margin-top: 0.25rem;
    }

    /* sections */
    .section {
      padding: 3rem 0 4rem;
      border-top: 1px solid #eef2ff;
    }

    .section-title {
      font-size: 1.75rem;
      font-weight: 700;
      margin-bottom: 2rem;
      color: #0f172a;
      letter-spacing: -0.3px;
      display: inline-block;
      border-left: 3px solid #0ea5e9;
      padding-left: 1rem;
    }

    .card-grid {
      display: flex;
      gap: 1.8rem;
      flex-wrap: wrap;
      justify-content: center;
    }

    .card {
      background: white;
      border-radius: 1.5rem;
      padding: 1.8rem;
      width: 280px;
      transition: all 0.3s ease;
      border: 1px solid #eef2ff;
      box-shadow: 0 2px 8px rgba(0, 0, 0, 0.02);
    }

    .card:hover {
      transform: translateY(-4px);
      border-color: #cbd5e1;
      box-shadow: 0 12px 24px -12px rgba(0, 0, 0, 0.08);
    }

    .card i {
      font-size: 2rem;
      background: linear-gradient(135deg, #0ea5e9, #8b5cf6);
      background-clip: text;
      -webkit-background-clip: text;
      color: transparent;
      margin-bottom: 1rem;
    }

    .card h3 {
      font-weight: 600;
      margin-bottom: 0.5rem;
      font-size: 1.2rem;
      color: #0f172a;
    }

    .card p {
      font-size: 0.85rem;
      color: #5b6e8c;
      line-height: 1.5;
    }

    /* work cards */
    .work-card {
      background: white;
      border-radius: 1.5rem;
      padding: 1.8rem;
      width: 280px;
      transition: all 0.3s ease;
      border: 1px solid #eef2ff;
    }

    .work-card:hover {
      transform: translateY(-4px);
      border-color: #cbd5e1;
    }

    .work-card i {
      font-size: 1.8rem;
      color: #0ea5e9;
      margin-bottom: 1rem;
    }

    .work-card h3 {
      font-weight: 600;
      margin-bottom: 0.5rem;
    }

    .work-card p {
      font-size: 0.85rem;
      color: #5b6e8c;
    }

    /* contact section */
    .contact-block {
      background: white;
      border-radius: 1.5rem;
      padding: 2rem;
      text-align: center;
      border: 1px solid #eef2ff;
      box-shadow: 0 2px 12px rgba(0, 0, 0, 0.02);
    }

    .contact-block i {
      font-size: 2rem;
      background: linear-gradient(135deg, #0ea5e9, #8b5cf6);
      background-clip: text;
      -webkit-background-clip: text;
      color: transparent;
      margin-bottom: 0.75rem;
    }

    .contact-block h3 {
      font-size: 1.4rem;
      margin-bottom: 0.5rem;
      color: #0f172a;
    }

    .contact-email {
      display: inline-block;
      background: linear-gradient(135deg, #0ea5e9, #8b5cf6);
      padding: 0.7rem 1.8rem;
      border-radius: 2.5rem;
      text-decoration: none;
      color: white;
      font-weight: 600;
      margin-top: 1rem;
      transition: all 0.3s;
      box-shadow: 0 2px 8px rgba(14, 165, 233, 0.25);
    }

    .contact-email:hover {
      transform: translateY(-2px);
      box-shadow: 0 6px 16px rgba(14, 165, 233, 0.3);
    }

    footer {
      text-align: center;
      padding: 2rem 0 3rem;
      font-size: 0.75rem;
      color: #94a3b8;
      border-top: 1px solid #eef2ff;
      margin-top: 1rem;
    }

    /* responsive */
    @media (max-width: 780px) {
      .navbar {
        flex-direction: column;
        gap: 0.8rem;
        padding: 1rem 1.5rem;
      }
      .nav-links {
        gap: 1rem;
        justify-content: center;
      }
      .hero h1 {
        font-size: 2.2rem;
      }
      .container {
        padding: 0 1.2rem;
      }
      .logo-img {
        height: 36px;
      }
      .stats-grid {
        gap: 1rem;
        padding: 1rem;
      }
      .stat-number {
        font-size: 1.6rem;
      }
    }

    @media (max-width: 550px) {
      .nav-links {
        gap: 0.7rem;
      }
      .btn-outline {
        padding: 0.35rem 1rem;
        font-size: 0.75rem;
      }
      .hero h1 {
        font-size: 1.8rem;
      }
      .section-title {
        font-size: 1.4rem;
      }
    }

    /* subtle animation */
    @keyframes fadeUp {
      from {
        opacity: 0;
        transform: translateY(15px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .hero, .stats-grid, .section {
      animation: fadeUp 0.5s ease-out forwards;
    }
  </style>
</head>
<body>

<header>
  <div class="container">
    <nav class="navbar">
      <a href="#" class="logo">
        <img src="mavixlk.png" alt="Mavixlk" class="logo-img" onerror="this.onerror=null; this.parentElement.innerHTML='<span class=\'logo-fallback\'>mavixlk</span>';">
      </a>
      <ul class="nav-links">
        <li><a href="#">Home</a></li>
        <li><a href="#services">Services</a></li>
        <li><a href="#work">Work</a></li>
        <li><a href="#contact">Contact</a></li>
        <li><a href="#" class="btn-outline">Get insights <i class="fas fa-arrow-right"></i></a></li>
      </ul>
    </nav>
  </div>
</header>

<main>
  <div class="container">
    <section class="hero">
      <div class="hero-badge">
        <i class="fas fa-chart-line"></i> AI-POWERED MARKETING
      </div>
      <h1>Future-ready<br>digital marketing</h1>
      <p>Data-driven strategies, creative excellence & measurable growth for brands that think ahead.</p>
      <div class="hero-cta">
        <a href="#" class="btn-primary">Start scaling <i class="fas fa-rocket"></i></a>
        <a href="#work" class="btn-secondary">See our work</a>
      </div>
    </section>

    <!-- stats -->
    <div class="stats-grid">
      <div class="stat-item">
        <div class="stat-number">200+</div>
        <div class="stat-label">Clients</div>
      </div>
      <div class="stat-item">
        <div class="stat-number">3.2B</div>
        <div class="stat-label">Impressions</div>
      </div>
      <div class="stat-item">
        <div class="stat-number">156%</div>
        <div class="stat-label">Avg. ROI</div>
      </div>
      <div class="stat-item">
        <div class="stat-number">24/7</div>
        <div class="stat-label">AI Analytics</div>
      </div>
    </div>

    <section id="services" class="section">
      <h2 class="section-title">Services</h2>
      <div class="card-grid">
        <div class="card">
          <i class="fas fa-chart-simple"></i>
          <h3>Performance Marketing</h3>
          <p>Data-driven ad campaigns with real-time optimization for maximum ROI.</p>
        </div>
        <div class="card">
          <i class="fas fa-brain"></i>
          <h3>AI Analytics</h3>
          <p>Predictive insights & audience intelligence to outsmart competition.</p>
        </div>
        <div class="card">
          <i class="fas fa-bullhorn"></i>
          <h3>Growth Strategy</h3>
          <p>Scalable frameworks that accelerate brand presence across all channels.</p>
        </div>
        <div class="card">
          <i class="fas fa-palette"></i>
          <h3>Creative Studio</h3>
          <p>Immersive content, motion design & futuristic brand storytelling.</p>
        </div>
      </div>
    </section>

    <section id="work" class="section">
      <h2 class="section-title">Selected work</h2>
      <div class="card-grid">
        <div class="work-card">
          <i class="fas fa-chart-line"></i>
          <h3>Nexus Retail</h3>
          <p>+287% sales growth in 6 months through hyper-targeted campaigns.</p>
        </div>
        <div class="work-card">
          <i class="fas fa-users"></i>
          <h3>Velora Beauty</h3>
          <p>1.2M new followers & 42% engagement rate via creator ecosystem.</p>
        </div>
        <div class="work-card">
          <i class="fas fa-globe"></i>
          <h3>Stellar Finance</h3>
          <p>Global expansion with 3.4x increase in qualified leads.</p>
        </div>
      </div>
    </section>

    <section id="contact" class="section">
      <div class="contact-block">
        <i class="fas fa-paper-plane"></i>
        <h3>Let's build something future-proof</h3>
        <p style="color: #5b6e8c; margin-bottom: 0.5rem;">Ready to elevate your brand? Let's talk.</p>
        <a href="#" class="contact-email">hello@mavixlk.com</a>
      </div>
    </section>
  </div>
  <footer>
    <div class="container">
      <p>© 2025 Mavixlk — AI-driven digital marketing. All rights reserved.</p>
    </div>
  </footer>
</main>

<script>
  (function() {
    // smooth scroll for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
      anchor.addEventListener('click', function(e) {
        const targetId = this.getAttribute('href');
        if (targetId === "#" || targetId === "") return;
        const targetElement = document.querySelector(targetId);
        if (targetElement) {
          e.preventDefault();
          targetElement.scrollIntoView({
            behavior: 'smooth',
            block: 'start'
          });
          history.pushState(null, null, targetId);
        }
      });
    });

    // sticky header effect
    const header = document.querySelector('header');
    if (header) {
      window.addEventListener('scroll', () => {
        if (window.scrollY > 20) {
          header.style.marginTop = '12px';
          const navbar = document.querySelector('.navbar');
          if (navbar) navbar.style.background = 'rgba(255, 255, 255, 0.92)';
        } else {
          header.style.marginTop = '20px';
          const navbar = document.querySelector('.navbar');
          if (navbar) navbar.style.background = 'rgba(255, 255, 255, 0.85)';
        }
      });
    }

    // insights button - light toast
    const insightsBtn = document.querySelector('.btn-outline');
    if (insightsBtn) {
      insightsBtn.addEventListener('click', (e) => {
        e.preventDefault();
        const toast = document.createElement('div');
        toast.innerHTML = '<i class="fas fa-chart-line" style="margin-right: 8px;"></i> Insights delivered — let\'s connect soon';
        toast.style.position = 'fixed';
        toast.style.bottom = '30px';
        toast.style.left = '50%';
        toast.style.transform = 'translateX(-50%)';
        toast.style.background = '#1e293b';
        toast.style.color = 'white';
        toast.style.padding = '12px 24px';
        toast.style.borderRadius = '40px';
        toast.style.fontSize = '0.85rem';
        toast.style.fontWeight = '500';
        toast.style.backdropFilter = 'blur(8px)';
        toast.style.zIndex = '999';
        toast.style.boxShadow = '0 4px 20px rgba(0,0,0,0.1)';
        toast.style.fontFamily = "'Inter', sans-serif";
        document.body.appendChild(toast);
        setTimeout(() => {
          toast.style.opacity = '0';
          toast.style.transition = 'opacity 0.3s';
          setTimeout(() => toast.remove(), 350);
        }, 2200);
      });
    }

    // logo image error fallback already handled inline
  })();
</script>
</body>
</html>