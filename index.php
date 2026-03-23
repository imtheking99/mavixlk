<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
  <title>Mavixlk | Digital Marketing Agency</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,300;14..32,400;14..32,600;14..32,700;14..32,800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Inter', sans-serif;
      background-color: #fefefe;
      color: #1a1e2b;
      line-height: 1.5;
      scroll-behavior: smooth;
    }

    .container {
      max-width: 1280px;
      margin: 0 auto;
      padding: 0 24px;
    }

    /* header & navigation */
    .navbar {
      display: flex;
      align-items: center;
      justify-content: space-between;
      flex-wrap: wrap;
      padding: 10px 0; /* Tight padding */
      gap: 20px;
      min-height: 80px; /* Ensures the bar has enough height for a larger logo */
    }

    .logo {
      display: flex;
      align-items: center;
      text-decoration: none;
    }

    .logo-img {
      height: 65px; /* INCREASED SIZE - Adjust this number if it's still too small */
      width: auto;
      max-width: 220px;
      object-fit: contain;
    }

    .nav-links {
      display: flex;
      gap: 2rem;
      align-items: center;
      flex-wrap: wrap;
      list-style: none;
    }

    .nav-links a {
      text-decoration: none;
      font-weight: 500;
      color: #2d3a5e;
      transition: 0.2s;
      font-size: 1rem;
    }

    .nav-links a:hover {
      color: #4f46e5;
    }

    .btn-outline {
      border: 1.5px solid #4f46e5;
      background: transparent;
      padding: 8px 20px;
      border-radius: 40px;
      font-weight: 600;
      color: #4f46e5;
      transition: 0.2s;
    }

    .btn-outline:hover {
      background: #4f46e5;
      color: white;
    }

    .btn-primary {
      background: #4f46e5;
      color: white;
      border: none;
      padding: 12px 28px;
      border-radius: 40px;
      font-weight: 600;
      font-size: 1rem;
      cursor: pointer;
      transition: 0.25s ease;
      display: inline-block;
      text-decoration: none;
      box-shadow: 0 8px 18px rgba(79, 70, 229, 0.2);
    }

    .btn-primary:hover {
      background: #3730a3;
      transform: translateY(-2px);
    }

    /* hero section */
    .hero {
      display: flex;
      align-items: center;
      justify-content: space-between;
      flex-wrap: wrap;
      gap: 40px;
      padding: 5px 0 60px; /* Minimal top padding to keep text high */
    }

    .hero-content {
      flex: 1;
      min-width: 260px;
    }

    .hero-content h1 {
      font-size: 3.2rem;
      font-weight: 800;
      line-height: 1.2;
      letter-spacing: -0.02em;
      color: #0a0c1a;
      margin-bottom: 1rem;
    }

    .hero-gradient {
      background: linear-gradient(120deg, #1E2A78, #f97316);
      -webkit-background-clip: text;
      background-clip: text;
      color: transparent;
    }

    .hero-content p {
      font-size: 1.2rem;
      color: #4a5568;
      margin: 1.5rem 0 2rem;
      max-width: 540px;
    }

    .hero-stats {
      display: flex;
      gap: 32px;
      margin-top: 2rem;
      flex-wrap: wrap;
    }

    .stat-item h3 {
      font-size: 2rem;
      font-weight: 800;
      color: #1E2A78;
    }

    .hero-image {
      flex: 1;
      background: linear-gradient(145deg, #eef2ff, #ffffff);
      border-radius: 48px;
      padding: 20px;
      text-align: center;
      box-shadow: 0 20px 35px -12px rgba(0,0,0,0.05);
    }

    .hero-image i {
      font-size: 12rem;
      color: #4f46e5;
      opacity: 0.8;
    }

    /* services section */
    .section {
      padding: 70px 0;
    }

    .section-title {
      text-align: center;
      font-size: 2.2rem;
      font-weight: 800;
      margin-bottom: 16px;
      color: #0f172a;
    }

    .section-sub {
      text-align: center;
      color: #5b6e8c;
      max-width: 650px;
      margin: 0 auto 48px auto;
      font-size: 1.1rem;
    }

    .services-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
      gap: 32px;
    }

    .service-card {
      background: white;
      border-radius: 28px;
      padding: 32px 24px;
      transition: all 0.3s;
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.02);
      border: 1px solid #edf2f7;
      text-align: center;
    }

    .service-card:hover {
      transform: translateY(-8px);
      border-color: #e0e7ff;
      box-shadow: 0 20px 30px -15px rgba(79, 70, 229, 0.15);
    }

    .service-icon {
      font-size: 2.8rem;
      color: #4f46e5;
      margin-bottom: 24px;
    }

    .service-card h3 {
      font-size: 1.5rem;
      margin-bottom: 12px;
    }

    .service-card p {
      color: #4b5563;
    }

    /* portfolio showcase / work */
    .showcase-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
      gap: 30px;
      margin-top: 20px;
    }

    .showcase-item {
      border-radius: 24px;
      overflow: hidden;
      background: #fff;
      box-shadow: 0 12px 24px -12px rgba(0,0,0,0.08);
      transition: 0.2s;
      border: 1px solid #f0f2f5;
    }

    .showcase-img {
      background: linear-gradient(130deg, #e9ecff, #ffffff);
      height: 200px;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .showcase-img i {
      font-size: 4.5rem;
      color: #4f46e5;
    }

    .showcase-info {
      padding: 20px;
    }

    .showcase-info h4 {
      font-size: 1.3rem;
      margin-bottom: 6px;
    }

    .showcase-info p {
      color: #5f6c84;
    }

    /* testimonials */
    .testimonial-card {
      background: #fafbff;
      border-radius: 32px;
      padding: 32px;
      border: 1px solid #eef2ff;
      max-width: 500px;
      margin: 0 auto;
      text-align: center;
    }

    .testimonial-flex {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 30px;
      margin-top: 30px;
    }

    .testimonial-card i.fa-quote-left {
      color: #cbd5e1;
      font-size: 2rem;
      margin-bottom: 16px;
    }

    .testimonial-card p {
      font-style: italic;
      color: #2c3e66;
    }

    .client-name {
      margin-top: 20px;
      font-weight: 700;
      color: #1f2937;
    }

    /* CTA Section */
    .cta-section {
      background: linear-gradient(115deg, #0f172a 0%, #1e293b 100%);
      border-radius: 48px;
      padding: 60px 40px;
      text-align: center;
      margin: 40px 0 60px;
    }

    .cta-section h2 {
      color: white;
      font-size: 2rem;
      margin-bottom: 16px;
    }

    .cta-section p {
      color: #cbd5e6;
      max-width: 550px;
      margin: 0 auto 28px auto;
    }

    .btn-cta {
      background: #f97316;
      color: white;
      padding: 14px 38px;
      border-radius: 40px;
      font-weight: 700;
      border: none;
      font-size: 1rem;
      cursor: pointer;
      transition: 0.2s;
      box-shadow: 0 8px 18px rgba(249,115,22,0.3);
    }

    .btn-cta:hover {
      background: #ea580c;
      transform: scale(0.98);
    }

    /* footer */
    footer {
      background: #f8fafc;
      padding: 48px 0 24px;
      border-top: 1px solid #e9edf2;
      margin-top: 20px;
    }

    .footer-grid {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      gap: 40px;
      margin-bottom: 40px;
    }

    .footer-col {
      flex: 1;
      min-width: 160px;
    }

    .footer-col h4 {
      font-size: 1.2rem;
      margin-bottom: 20px;
      font-weight: 700;
    }

    .footer-col ul {
      list-style: none;
    }

    .footer-col li, .footer-col p {
      margin-bottom: 12px;
      color: #4a5a72;
    }

    .footer-col a {
      text-decoration: none;
      color: #4a5a72;
      transition: 0.2s;
    }

    .footer-col a:hover {
      color: #4f46e5;
    }

    .social-icons {
      display: flex;
      gap: 18px;
      margin-top: 16px;
    }

    .social-icons a {
      background: #eef2ff;
      width: 38px;
      height: 38px;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      border-radius: 50%;
      color: #1e293b;
      transition: 0.2s;
    }

    .social-icons a:hover {
      background: #4f46e5;
      color: white;
    }

    .copyright {
      text-align: center;
      padding-top: 28px;
      border-top: 1px solid #e2e8f0;
      font-size: 0.9rem;
      color: #62748c;
    }

    /* responsive tweaks */
    @media (max-width: 900px) {
      .hero-content h1 {
        font-size: 2.5rem;
      }
      .navbar {
        flex-direction: column;
        align-items: stretch;
      }
      .nav-links {
        justify-content: center;
      }
      .hero {
        flex-direction: column-reverse;
        text-align: center;
      }
      .hero-content p {
        margin-left: auto;
        margin-right: auto;
      }
      .hero-stats {
        justify-content: center;
      }
      .section {
        padding: 50px 0;
      }
      .cta-section {
        padding: 40px 24px;
      }
      .logo-img {
        height: 50px;
      }
    }

    @media (max-width: 540px) {
      .container {
        padding: 0 20px;
      }
      .hero-content h1 {
        font-size: 2rem;
      }
      .btn-primary, .btn-outline {
        padding: 8px 18px;
      }
      .section-title {
        font-size: 1.8rem;
      }
      .logo-img {
        height: 40px;
      }
    }

    /* animation on scroll simple */
    .fade-up {
      opacity: 0;
      transform: translateY(20px);
      transition: opacity 0.6s ease, transform 0.6s ease;
    }

    .fade-up.visible {
      opacity: 1;
      transform: translateY(0);
    }
  </style>
</head>
<body>

<header>
  <div class="container">
    <nav class="navbar">
      <a href="#" class="logo">
        <img src="mavixlk for vector not vector.png" alt="Mavixlk Logo" class="logo-img">
      </a>
      <ul class="nav-links">
        <li><a href="#">Home</a></li>
        <li><a href="#services">Services</a></li>
        <li><a href="#work">Work</a></li>
        <li><a href="#contact">Contact</a></li>
        <li><a href="#" class="btn-outline">Get insights</a></li>
      </ul>
    </nav>
  </div>
</header>

<main>
  <div class="container">
    <div class="hero">
      <div class="hero-content">
        <h1>Digital growth that <span class="hero-gradient">scales</span> your brand</h1>
        <p>Mavixlk crafts data-driven marketing strategies, creative campaigns, and measurable results. Turn clicks into loyal customers.</p>
        <a href="#contact" class="btn-primary">Start your project <i class="fas fa-arrow-right" style="margin-left: 8px;"></i></a>
        <div class="hero-stats">
          <div class="stat-item">
            <h3>250+</h3>
            <p>Happy clients</p>
          </div>
          <div class="stat-item">
            <h3>480+</h3>
            <p>Campaigns</p>
          </div>
          <div class="stat-item">
            <h3>3.8x</h3>
            <p>Avg. ROAS</p>
          </div>
        </div>
      </div>
      <div class="hero-image">
        <i class="fas fa-chart-line"></i>
        <p style="margin-top: 12px; font-weight: 500; color: #2d3a5e;">Performance meets creativity</p>
      </div>
    </div>
  </div>

  <div class="section" id="services">
    <div class="container">
      <h2 class="section-title fade-up">What we deliver</h2>
      <p class="section-sub fade-up">End-to-end digital marketing solutions tailored for ambitious businesses.</p>
      <div class="services-grid">
        <div class="service-card fade-up">
          <div class="service-icon"><i class="fas fa-magnifying-glass-chart"></i></div>
          <h3>SEO & Analytics</h3>
          <p>Dominate search rankings with white-hat SEO & deep performance insights.</p>
        </div>
        <div class="service-card fade-up">
          <div class="service-icon"><i class="fas fa-ad"></i></div>
          <h3>Paid Advertising</h3>
          <p>Google Ads, Meta, TikTok — maximize ROI with precision targeting.</p>
        </div>
        <div class="service-card fade-up">
          <div class="service-icon"><i class="fas fa-pen-fancy"></i></div>
          <h3>Content Strategy</h3>
          <p>Story-driven content that builds authority and converts readers.</p>
        </div>
        <div class="service-card fade-up">
          <div class="service-icon"><i class="fas fa-envelope-open-text"></i></div>
          <h3>Email Marketing</h3>
          <p>Automated flows, segmentation, and high-converting newsletters.</p>
        </div>
      </div>
    </div>
  </div>

  <div class="section" id="work" style="background: #fbfdff;">
    <div class="container">
      <h2 class="section-title fade-up">Success stories</h2>
      <p class="section-sub fade-up">Real results for real brands — crafted by Mavixlk.</p>
      <div class="showcase-grid">
        <div class="showcase-item fade-up">
          <div class="showcase-img"><i class="fas fa-store"></i></div>
          <div class="showcase-info">
            <h4>E‑commerce Boost</h4>
            <p>+214% revenue in 6 months for a fashion retailer via integrated ads & CRO.</p>
          </div>
        </div>
        <div class="showcase-item fade-up">
          <div class="showcase-img"><i class="fas fa-chalkboard-user"></i></div>
          <div class="showcase-info">
            <h4>SaaS Growth</h4>
            <p>Increased free trial signups by 158% using LinkedIn & content marketing.</p>
          </div>
        </div>
        <div class="showcase-item fade-up">
          <div class="showcase-img"><i class="fas fa-location-dot"></i></div>
          <div class="showcase-info">
            <h4>Local Brand Scale</h4>
            <p>Multi-location visibility: SEO and local service ads generated 350+ leads.</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="section">
    <div class="container">
      <h2 class="section-title fade-up">What clients say</h2>
      <p class="section-sub fade-up">Trusted by startups, e‑commerce, and enterprises worldwide.</p>
      <div class="testimonial-flex">
        <div class="testimonial-card fade-up">
          <i class="fas fa-quote-left"></i>
          <p>“Mavixlk completely transformed our digital presence. Their strategy boosted organic traffic by 180% in under a year. True partners!”</p>
          <div class="client-name">— Sophia R., CMO of LuminaTech</div>
        </div>
        <div class="testimonial-card fade-up">
          <i class="fas fa-quote-left"></i>
          <p>“Incredible ROI from paid campaigns and the team’s creativity is unmatched. We saw 3x ROAS within the first quarter.”</p>
          <div class="client-name">— Daniel K., Founder of Bloomly</div>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="cta-section fade-up">
      <h2>Ready to accelerate your brand?</h2>
      <p>Let's craft a tailored marketing strategy that drives sustainable growth.</p>
      <button class="btn-cta" id="openContactBtn">Get a free consultation →</button>
    </div>
  </div>

  <footer id="contact">
    <div class="container">
      <div class="footer-grid">
        <div class="footer-col">
          <h4>Mavixlk</h4>
          <p>Digital marketing agency focused on data, creativity, and measurable impact. We grow brands beyond expectations.</p>
          <div class="social-icons">
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-linkedin-in"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-facebook-f"></i></a>
          </div>
        </div>
        <div class="footer-col">
          <h4>Explore</h4>
          <ul>
            <li><a href="#">Services</a></li>
            <li><a href="#">Case studies</a></li>
            <li><a href="#">Careers</a></li>
            <li><a href="#">Blog</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>Contact</h4>
          <p><i class="fas fa-envelope" style="margin-right: 8px;"></i> hello@mavixlk.com</p>
          <p><i class="fas fa-phone-alt"></i> +1 (555) 789-0123</p>
          <p><i class="fas fa-map-marker-alt"></i> 123 Innovation Hub, Austin, TX</p>
        </div>
        <div class="footer-col">
          <h4>Newsletter</h4>
          <p>Get weekly marketing tips</p>
          <div style="display: flex; gap: 10px; flex-wrap: wrap; margin-top: 12px;">
            <input type="email" placeholder="Your email" id="newsEmail" style="padding: 10px 16px; border-radius: 40px; border: 1px solid #cbd5e1; flex:1; min-width: 140px;">
            <button id="subscribeBtn" style="background:#4f46e5; border:none; border-radius:40px; padding:0 20px; color:white; font-weight:600; cursor:pointer;">Subscribe</button>
          </div>
          <p id="subscribeMsg" style="font-size: 0.8rem; margin-top: 8px;"></p>
        </div>
      </div>
      <div class="copyright">
        <p>© 2025 Mavixlk — Digital Marketing Agency. All rights reserved.</p>
      </div>
    </div>
  </footer>
</main>

<script>
  // Same JS as before...
  const fadeElements = document.querySelectorAll('.fade-up');
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('visible');
        observer.unobserve(entry.target);
      }
    });
  }, { threshold: 0.15, rootMargin: "0px 0px -20px 0px" });
  fadeElements.forEach(el => observer.observe(el));

  const contactBtn = document.getElementById('openContactBtn');
  if (contactBtn) {
    contactBtn.addEventListener('click', () => {
      const footerSection = document.getElementById('contact');
      if (footerSection) {
        footerSection.scrollIntoView({ behavior: 'smooth' });
      }
    });
  }
</script>
</body>
</html>