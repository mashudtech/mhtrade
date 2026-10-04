<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MH Trade Capital Solutions — B2B Trade Finance, Commodity Sourcing & UAE Banking</title>
  <meta name="description" content="Dubai-based B2B Trade Finance (LC / SBLC), Commodity Sourcing, Project Finance, and UAE Corporate Banking. High-converting global financial infrastructure platform.">
  
  <!-- Favicon -->
  <link rel="icon" type="image/png" href="MH-website-logo-package/MH-logo-icon-512.png">

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  
  <!-- Luxury Theme Stylesheet -->
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

  <!-- Animated Node Network Background -->
  <canvas id="bg-canvas"></canvas>
  <div class="hero-bg-overlay"></div>

  <div class="app-wrapper">

    <!-- Combined 100vh Viewport Wrapper (Top Bar + Header + Hero Section = 100vh) -->
    <div class="hero-viewport-wrapper" id="hero-viewport" style="background-image: url('images/hero/dubai_hero_bg.png');">
      <div class="hero-viewport-overlay"></div>

      <!-- Top Contact Bar (N. Mohammad Group Style) -->
      <div class="top-bar">
        <div class="container top-bar-content">
          <div class="top-bar-left">
            <div class="top-item">
              <i class="fas fa-location-dot"></i>
              <span>Dubai, United Arab Emirates</span>
            </div>
            <div class="top-item">
              <i class="fas fa-envelope"></i>
              <a href="mailto:contact@mhtradecap.com">contact@mhtradecap.com</a>
            </div>
            <div class="top-item">
              <i class="fab fa-whatsapp" style="color: #25D366;"></i>
              <a href="https://wa.me/?text=Hello%20MH%20Trade%20Capital%20Solutions%20Team" target="_blank">+971 50 000 0000 (Dubai Direct Desk)</a>
            </div>
          </div>

          <div class="top-bar-right">
            <button class="btn-gold open-inquiry-modal btn-topbar" data-vertical="general">
              <i class="fas fa-paper-plane"></i> Submit Requirement
            </button>
          </div>
        </div>
      </div>

      <!-- Main Navigation Header Placeholder Wrapper -->
      <div class="main-header-wrapper">
        <header class="main-header">
          <div class="container navbar">
            <a href="index.php" class="brand-logo-link">
              <div class="brand-logo-img-box">
                <img src="MH-website-logo-package/MH-logo-transparent.png" alt="MH Trade Capital Solutions Logo" class="brand-logo-img">
              </div>
              <div class="brand-logo-text">
                <span class="brand-logo-row1">MH TRADE CAPITAL</span>
                <span class="brand-logo-row2">SOLUTIONS</span>
              </div>
            </a>

            <ul class="nav-links">
              <li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li>
              
              <li class="nav-item">
                <a href="#verticals" class="nav-link">Business Verticals <i class="fas fa-chevron-down" style="font-size: 10px;"></i></a>
                <ul class="dropdown-menu">
                  <li class="dropdown-item"><a href="#trade-finance" class="open-inquiry-modal" data-vertical="lc">Trade Finance (LC / SBLC / BG)</a></li>
                  <li class="dropdown-item"><a href="#commodity" class="open-inquiry-modal" data-vertical="commodity">Commodity Sourcing (Energy/Agri/Metals)</a></li>
                  <li class="dropdown-item"><a href="#project-finance" class="open-inquiry-modal" data-vertical="project">Project & Infrastructure Finance</a></li>
                  <li class="dropdown-item"><a href="#uae-banking" class="open-inquiry-modal" data-vertical="uae-banking">UAE Business & Corporate Banking</a></li>
                </ul>
              </li>

              <li class="nav-item"><a href="how-it-works.php" class="nav-link">How It Works</a></li>
              <li class="nav-item"><a href="#why-mh" class="nav-link">Dubai Advantage</a></li>
              <li class="nav-item"><a href="#contact" class="nav-link">Contact Desk</a></li>
            </ul>
          </div>
        </header>
      </div>

      <!-- Hero Content Section inside Viewport -->
      <section class="hero-section">
        <div class="container hero-content">
          <div class="hero-glass-card">
            <div class="hero-tag">
              <i class="fas fa-shield-halved"></i> Global Trade & Financial Infrastructure
            </div>

            <h1 class="hero-title">Engineering Premier B2B Trade & <span>Capital Solutions</span></h1>

            <p class="hero-subtitle">
              MH Trade Capital Solutions connects global markets, institutional trade finance (LC / SBLC), bulk commodity sourcing, and strategic project funding directly from Dubai, United Arab Emirates.
            </p>

            <div class="hero-scroll-hint">
              <span>Scroll to Select Requirement</span>
              <i class="fas fa-chevron-down"></i>
            </div>
          </div>
        </div>
      </section>

    </div>

    <!-- Main Content -->
    <main>

      <!-- Standalone Trade Requirement Ingestion Section (Under Main Viewport) -->
      <section class="trade-requirement-section" id="requirement-ingestion">
        <div class="container">
          <div class="ingestion-section-card">
            <div class="ingestion-header-text">
              <h3>Select Trade Requirement</h3>
              <p>Choose your target financial vertical or sourcing requirement to get started</p>
            </div>
            <div class="hero-ingestion-widget">
              <form id="hero-ingestion-form">
                <div class="ingestion-form-row">
                  <div class="ingestion-select-group">
                    <label class="ingestion-label" for="hero-vertical-select">Select Trade Requirement</label>
                    <select class="ingestion-select" id="hero-vertical-select">
                      <option value="lc">Trade Finance — Letter of Credit (LC / DLC / UPAS)</option>
                      <option value="sblc">Trade Finance — SBLC / Bank Guarantee (BG)</option>
                      <option value="commodity">Commodity Sourcing — Energy, Petroleum, Agri, Metals</option>
                      <option value="project">Project Finance — Infrastructure & Energy Funding</option>
                      <option value="uae-banking">UAE Corporate Banking & Company Formation</option>
                      <option value="general">General B2B Inquiry</option>
                    </select>
                  </div>
                  <button type="submit" class="btn-gold btn-ingestion-submit">
                    <i class="fas fa-arrow-right"></i> Get Started
                  </button>
                </div>
              </form>
            </div>
            <div class="ingestion-footer-link">
              <span>Unsure how our execution pipeline works?</span>
              <a href="how-it-works.php" class="engine-learn-link">
                Learn How Our Engine Works <i class="fas fa-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>
      </section>

      <!-- Core Business Verticals Showcase Section (Hybrid Grid-Slider) -->
      <section class="container verticals-section" id="verticals">
        <div class="section-header-wrapper">
          <div class="section-header text-left">
            <div class="section-subtitle">Our Core Capabilities</div>
            <h2 class="section-title">Institutional Financial Verticals</h2>
            <p class="section-desc">Specialized business divisions tailored for global buyers, sellers, corporations, and institutional projects.</p>
          </div>
          <div class="slider-controls">
            <button class="slider-btn" id="verticals-prev" aria-label="Previous vertical"><i class="fas fa-chevron-left"></i></button>
            <button class="slider-btn" id="verticals-next" aria-label="Next vertical"><i class="fas fa-chevron-right"></i></button>
          </div>
        </div>

        <div class="verticals-grid-wrapper">
          <div class="verticals-grid" id="verticals-slider">
            
            <!-- Vertical 1: Trade Finance -->
            <div class="vertical-card">
              <div class="v-card-img-wrapper">
                <img src="images/verticals/trade_finance.png" alt="Trade Finance" class="v-card-img">
                <div class="v-card-badge">LC / SBLC / BG</div>
              </div>
              <div class="v-card-body">
                <h3 class="v-title">
                  <a href="#" class="v-title-link open-inquiry-modal" data-vertical="lc">Trade Finance</a>
                </h3>
                <p class="v-desc">Facilitating top-tier LC, DLC, SBLC, and BG banking instruments for global trade.</p>
                <button class="btn-outline-gold open-inquiry-modal" data-vertical="lc">
                  Request Instrument Specs <i class="fas fa-arrow-right"></i>
                </button>
              </div>
            </div>

            <!-- Vertical 2: Commodity Sourcing -->
            <div class="vertical-card">
              <div class="v-card-img-wrapper">
                <img src="images/verticals/commodity.png" alt="Commodity Sourcing" class="v-card-img">
                <div class="v-card-badge">Energy & Agri</div>
              </div>
              <div class="v-card-body">
                <h3 class="v-title">
                  <a href="#" class="v-title-link open-inquiry-modal" data-vertical="commodity">Commodity Sourcing</a>
                </h3>
                <p class="v-desc">Connecting verified buyers with allocation holders for bulk energy, agri, and metals.</p>
                <button class="btn-outline-gold open-inquiry-modal" data-vertical="commodity">
                  Submit Commodity Spec <i class="fas fa-arrow-right"></i>
                </button>
              </div>
            </div>

            <!-- Vertical 3: Project Finance -->
            <div class="vertical-card">
              <div class="v-card-img-wrapper">
                <img src="images/verticals/project_finance.jpg" alt="Project Finance" class="v-card-img">
                <div class="v-card-badge">Capital Syndication</div>
              </div>
              <div class="v-card-body">
                <h3 class="v-title">
                  <a href="#" class="v-title-link open-inquiry-modal" data-vertical="project">Project Finance</a>
                </h3>
                <p class="v-desc">Structuring capital syndication, debt, and equity for large-scale energy and infrastructure.</p>
                <button class="btn-outline-gold open-inquiry-modal" data-vertical="project">
                  Explore Project Funding <i class="fas fa-arrow-right"></i>
                </button>
              </div>
            </div>

            <!-- Vertical 4: UAE Banking & Formation -->
            <div class="vertical-card">
              <div class="v-card-img-wrapper">
                <img src="images/verticals/uae_banking.jpg" alt="UAE Business & Banking" class="v-card-img">
                <div class="v-card-badge">Dubai Corporate</div>
              </div>
              <div class="v-card-body">
                <h3 class="v-title">
                  <a href="#" class="v-title-link open-inquiry-modal" data-vertical="uae-banking">UAE Business & Banking</a>
                </h3>
                <p class="v-desc">End-to-end corporate bank account setup and company formation in Dubai, UAE.</p>
                <button class="btn-outline-gold open-inquiry-modal" data-vertical="uae-banking">
                  Setup Corporate Banking <i class="fas fa-arrow-right"></i>
                </button>
              </div>
            </div>

            <!-- Vertical 5: Supply Chain & Logistics Finance -->
            <div class="vertical-card">
              <div class="v-card-img-wrapper">
                <img src="images/verticals/supply_chain.png" alt="Supply Chain & Logistics" class="v-card-img">
                <div class="v-card-badge">Working Capital</div>
              </div>
              <div class="v-card-body">
                <h3 class="v-title">
                  <a href="#" class="v-title-link open-inquiry-modal" data-vertical="supply-chain">Supply Chain & Logistics</a>
                </h3>
                <p class="v-desc">Optimizing inventory, freight receivables, and global supply chain liquidity solutions.</p>
                <button class="btn-outline-gold open-inquiry-modal" data-vertical="supply-chain">
                  Request Logistics Credit <i class="fas fa-arrow-right"></i>
                </button>
              </div>
            </div>

          </div>
        </div>

        <!-- Bottom Action Button to Browse All Capabilities -->
        <div class="verticals-bottom-action">
          <button class="btn-gold open-inquiry-modal" data-vertical="general">
            <i class="fas fa-layer-group"></i> Browse All Capabilities
          </button>
        </div>
      </section>

      <!-- Step-by-Step Process Flow -->
      <section class="process-section" id="process">
        <div class="container">
          <div class="section-header">
            <div class="section-subtitle">Frictionless Execution</div>
            <h2 class="section-title">How Our Requirement Engine Works</h2>
            <p class="section-desc">Every trade requirement is processed through a structured non-date tracking pipeline for maximum confidentiality and operational speed.</p>
          </div>

          <div class="process-grid">
            <div class="process-step">
              <div class="step-num">01</div>
              <h3 class="step-title">Submit Requirement</h3>
              <p class="step-desc">Select your target vertical and input required specs, instrument size, or commodity quantity.</p>
            </div>

            <div class="process-step">
              <div class="step-num">02</div>
              <h3 class="step-title">Receive Unique Request ID</h3>
              <p class="step-desc">System instantly generates your unique non-date tracking reference ID for follow-up.</p>
              <div class="sample-id-tag">MH-LC-00001</div>
            </div>

            <div class="process-step">
              <div class="step-num">03</div>
              <h3 class="step-title">Dubai Desk Review</h3>
              <p class="step-desc">Our specialists evaluate requirements, banking parameters, and compliance feasibility.</p>
            </div>

            <div class="process-step">
              <div class="step-num">04</div>
              <h3 class="step-title">Execution & Facilitation</h3>
              <p class="step-desc">Direct execution with partner banks, allocation holders, or UAE institutional setup teams.</p>
            </div>
          </div>
        </div>
      </section>

      <!-- Dubai Advantage Section -->
      <!-- Dubai Advantage Section (Strategic Hub) -->
      <section class="container advantage-section" id="why-mh">
        <div class="section-header">
          <div class="section-subtitle">Strategic Hub</div>
          <h2 class="section-title">The Dubai Capital Advantage</h2>
          <p class="section-desc">Positioned at the nexus of East-West trade routes to deliver institutional capital and trade facilitation.</p>
        </div>

        <div class="advantage-cards-grid">
          <div class="advantage-card">
            <div class="advantage-icon"><i class="fas fa-globe"></i></div>
            <h3>Global Trade Connectivity</h3>
            <p>Direct access to major financial hubs, top-rated issuing banks, and international shipping corridors.</p>
          </div>

          <div class="advantage-card">
            <div class="advantage-icon"><i class="fas fa-shield-halved"></i></div>
            <h3>Confidentiality & Compliance</h3>
            <p>Institutional-grade client document security and non-public requirement handling.</p>
          </div>

          <div class="advantage-card">
            <div class="advantage-icon"><i class="fas fa-bolt"></i></div>
            <h3>Rapid Operational Turnaround</h3>
            <p>Dedicated Dubai operational desk for fast term-sheet generation and instrument processing.</p>
          </div>
        </div>
      </section>

      <!-- Client Testimonials & Institutional Trust Section (Single-Item Slider) -->
      <section class="testimonials-section" id="testimonials">
        <div class="container">
          <div class="section-header-wrapper">
            <div class="section-header text-left">
              <div class="section-subtitle">Client Endorsements & Proof of Trust</div>
              <h2 class="section-title">Global Capital & Trade Success Stories</h2>
              <p class="section-desc">Read how institutional buyers, sellers, energy developers, and corporate entities execute high-value transactions through MH Trade Capital Solutions.</p>
            </div>
            <div class="slider-controls">
              <button class="slider-btn" id="testimonial-prev" aria-label="Previous testimonial"><i class="fas fa-chevron-left"></i></button>
              <button class="slider-btn" id="testimonial-next" aria-label="Next testimonial"><i class="fas fa-chevron-right"></i></button>
            </div>
          </div>

          <div class="testimonials-slider-wrapper">
            <div class="testimonials-slider" id="testimonials-track">

              <!-- Testimonial Slide 1 -->
              <div class="testimonial-slide">
                <div class="testimonial-card single-testimonial">
                  <div class="testimonial-top">
                    <div class="testimonial-stars">
                      <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                    </div>
                    <div class="testimonial-badge">Verified LC Facility</div>
                  </div>
                  <p class="testimonial-quote">
                    <i class="fas fa-quote-left"></i> "MH Trade Capital structured our $45M Letter of Credit facility within 4 banking days when conventional lenders dragged for weeks. Their non-date reference tracking gave us complete confidentiality."
                  </p>
                  <div class="testimonial-author">
                    <div class="author-avatar-initials">MV</div>
                    <div class="author-info">
                      <h4>Marcus Vance</h4>
                      <p>Managing Director, Global Energy Logistics Ltd</p>
                      <div class="author-deal-size"><i class="fas fa-circle-check"></i> $45,000,000 DLC Instrument</div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Testimonial Slide 2 -->
              <div class="testimonial-slide">
                <div class="testimonial-card single-testimonial">
                  <div class="testimonial-top">
                    <div class="testimonial-stars">
                      <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                    </div>
                    <div class="testimonial-badge">Verified Commodity Trade</div>
                  </div>
                  <p class="testimonial-quote">
                    <i class="fas fa-quote-left"></i> "Connecting directly with allocation holders through MH Trade Capital eliminated non-performing intermediaries. We secured 50,000 MT of bulk agri commodities with full POP verification."
                  </p>
                  <div class="testimonial-author">
                    <div class="author-avatar-initials">RA</div>
                    <div class="author-info">
                      <h4>Sheikh Rashid Al-Maktoum</h4>
                      <p>Chief Procurement Officer, ME Agri Commodities FZCO</p>
                      <div class="author-deal-size"><i class="fas fa-circle-check"></i> 50,000 MT Bulk Allocation</div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Testimonial Slide 3 -->
              <div class="testimonial-slide">
                <div class="testimonial-card single-testimonial">
                  <div class="testimonial-top">
                    <div class="testimonial-stars">
                      <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                    </div>
                    <div class="testimonial-badge">Verified Project Funding</div>
                  </div>
                  <p class="testimonial-quote">
                    <i class="fas fa-quote-left"></i> "For our renewable energy power expansion, MH Trade Capital facilitated debt structuring and capital syndication seamlessly out of Dubai. True institutional standards."
                  </p>
                  <div class="testimonial-author">
                    <div class="author-avatar-initials">ER</div>
                    <div class="author-info">
                      <h4>Elena Rostova</h4>
                      <p>VP Infrastructure, EuroAsia Energy Group</p>
                      <div class="author-deal-size"><i class="fas fa-circle-check"></i> $120,000,000 Debt Syndication</div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Testimonial Slide 4 -->
              <div class="testimonial-slide">
                <div class="testimonial-card single-testimonial">
                  <div class="testimonial-top">
                    <div class="testimonial-stars">
                      <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                    </div>
                    <div class="testimonial-badge">Verified Corporate Setup</div>
                  </div>
                  <p class="testimonial-quote">
                    <i class="fas fa-quote-left"></i> "Opening a multi-currency corporate bank account in Dubai used to take months. The team at MH Trade Capital streamlined compliance and account setup in just 5 business days!"
                  </p>
                  <div class="testimonial-author">
                    <div class="author-avatar-initials">TM</div>
                    <div class="author-info">
                      <h4>Tariq Mansoor</h4>
                      <p>CEO, Apex Shipping & Trade Holding</p>
                      <div class="author-deal-size"><i class="fas fa-circle-check"></i> Dubai DIFC Corporate Account</div>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>

          <!-- Slide Dots Indicator -->
          <div class="testimonial-dots" id="testimonial-dots">
            <span class="dot active" data-slide="0"></span>
            <span class="dot" data-slide="1"></span>
            <span class="dot" data-slide="2"></span>
            <span class="dot" data-slide="3"></span>
          </div>

          <!-- Trust Metrics Counter -->
          <div class="trust-metrics-grid">
            <div class="trust-metric-item">
              <h3>$1.8B+</h3>
              <p>Trade Volume Facilitated</p>
            </div>
            <div class="trust-metric-item">
              <h3>45+</h3>
              <p>Global Trade Destinations</p>
            </div>
            <div class="trust-metric-item">
              <h3>99.4%</h3>
              <p>Compliance Execution Rate</p>
            </div>
            <div class="trust-metric-item">
              <h3>24 Hours</h3>
              <p>Dubai Desk SLA Response</p>
            </div>
          </div>
        </div>
      </section>

    </main>

    <!-- Footer -->
    <footer class="main-footer" id="contact">
      <div class="container">
        <div class="footer-grid">
          <div class="footer-brand">
            <a href="index.php" class="brand-logo-link" style="margin-bottom: 16px;">
              <div class="brand-logo-img-box">
                <img src="MH-website-logo-package/MH-logo-transparent.png" alt="MH Trade Capital Solutions Logo" class="brand-logo-img">
              </div>
              <div class="brand-logo-text">
                <span class="brand-logo-row1">MH TRADE CAPITAL</span>
                <span class="brand-logo-row2">SOLUTIONS</span>
              </div>
            </a>
            <p>MH Trade Capital Solutions is a Dubai-based B2B trade finance, commodity sourcing, project funding, and UAE corporate banking facilitation platform.</p>
            <div style="display: flex; gap: 12px; margin-top: 16px;">
              <a href="#" style="color: var(--gold-primary);"><i class="fab fa-linkedin fa-lg"></i></a>
              <a href="https://wa.me/?text=Hello%20MH%20Trade%20Capital" target="_blank" style="color: #25D366;"><i class="fab fa-whatsapp fa-lg"></i></a>
              <a href="mailto:contact@mhtradecap.com" style="color: var(--gold-primary);"><i class="fas fa-envelope fa-lg"></i></a>
            </div>
          </div>

          <div>
            <h4 class="footer-title">Financial Verticals</h4>
            <ul class="footer-links-list">
              <li><a href="#" class="open-inquiry-modal" data-vertical="lc">Trade Finance (LC / DLC)</a></li>
              <li><a href="#" class="open-inquiry-modal" data-vertical="sblc">SBLC & Bank Guarantees</a></li>
              <li><a href="#" class="open-inquiry-modal" data-vertical="commodity">Commodity Sourcing</a></li>
              <li><a href="#" class="open-inquiry-modal" data-vertical="project">Project Funding</a></li>
            </ul>
          </div>

          <div>
            <h4 class="footer-title">UAE Services</h4>
            <ul class="footer-links-list">
              <li><a href="#" class="open-inquiry-modal" data-vertical="uae-banking">Corporate Bank Accounts</a></li>
              <li><a href="#" class="open-inquiry-modal" data-vertical="uae-banking">Free Zone & Mainland Setup</a></li>
              <li><a href="#" class="open-inquiry-modal" data-vertical="general">Dubai Commercial Desk</a></li>
            </ul>
          </div>

          <div>
            <h4 class="footer-title">Dubai Headquarters</h4>
            <p style="font-size: 13px; line-height: 1.8;">
              <i class="fas fa-building" style="color: var(--gold-primary);"></i> Dubai, United Arab Emirates<br>
              <i class="fas fa-envelope" style="color: var(--gold-primary);"></i> contact@mhtradecap.com<br>
              <i class="fab fa-whatsapp" style="color: #25D366;"></i> WhatsApp Direct Desk
            </p>
          </div>
        </div>

        <div class="footer-bottom">
          <div>&copy; MH Trade Capital Solutions. All Rights Reserved. Dubai, United Arab Emirates.</div>
          <div>Global B2B Trade & Capital Platform</div>
        </div>
      </div>
    </footer>

  </div>

  <!-- Interactive Early Requirement Ingestion Modal Drawer -->
  <div class="modal-overlay" id="inquiry-modal">
    <div class="modal-card">
      <button class="modal-close close-modal">&times;</button>
      
      <!-- Modal Form Container -->
      <div id="modal-form-container">
        <h2 style="font-size: 26px; margin-bottom: 6px;">Submit Trade <span style="color: var(--gold-primary);">Requirement</span></h2>
        <p style="color: var(--text-muted); font-size: 14px; margin-bottom: 24px;">Submit your requirement directly to our Dubai operational desk to receive your tracking Request ID.</p>

        <form id="inquiry-form">
          <div class="form-group">
            <label class="form-label" for="req-vertical">Requirement Category *</label>
            <select class="form-control" name="vertical" id="req-vertical" required>
              <option value="lc">Trade Finance — Letter of Credit (LC / DLC / UPAS)</option>
              <option value="sblc">Trade Finance — SBLC / Bank Guarantee (BG)</option>
              <option value="commodity">Commodity Sourcing (Energy, Agri, Metals)</option>
              <option value="project">Project & Infrastructure Finance</option>
              <option value="uae-banking">UAE Business & Corporate Banking Setup</option>
              <option value="general">General B2B Inquiry</option>
            </select>
          </div>

          <div class="form-row">
            <div class="form-group">
              <label class="form-label" for="req-name">Full Name *</label>
              <input type="text" class="form-control" name="name" id="req-name" placeholder="John Doe" required>
            </div>
            <div class="form-group">
              <label class="form-label" for="req-company">Company Name</label>
              <input type="text" class="form-control" name="company" id="req-company" placeholder="Global Trade Corp">
            </div>
          </div>

          <div class="form-row">
            <div class="form-group">
              <label class="form-label" for="req-email">Work Email *</label>
              <input type="email" class="form-control" name="email" id="req-email" placeholder="john@company.com" required>
            </div>
            <div class="form-group">
              <label class="form-label" for="req-phone">Phone / WhatsApp</label>
              <input type="tel" class="form-control" name="phone" id="req-phone" placeholder="+971 50 000 0000">
            </div>
          </div>

          <div class="form-group">
            <label class="form-label" for="req-details">Requirement Specifications</label>
            <textarea class="form-control" name="details" id="req-details" rows="3" placeholder="Target instrument amount, commodity tonnage, origin/destination preferences..."></textarea>
          </div>

          <div class="form-group">
            <label class="form-label" for="req-doc">Attach Specification PDF / Document (Optional)</label>
            <input type="file" class="form-control" name="doc" id="req-doc" accept=".pdf,.doc,.docx,.png,.jpg">
          </div>

          <button type="submit" class="btn-gold" style="width: 100%; justify-content: center; height: 50px; margin-top: 10px;">
            <i class="fas fa-paper-plane"></i> Submit Requirement & Receive Request ID
          </button>
        </form>
      </div>

      <!-- Modal Success Screen Container -->
      <div id="modal-success-container" style="display: none;">
        <div class="success-card">
          <div class="success-icon">
            <i class="fas fa-check"></i>
          </div>
          <h2 style="font-size: 26px; margin-bottom: 8px;">Requirement Submitted!</h2>
          <p style="color: var(--text-muted); font-size: 14px;">Your trade requirement has been assigned a unique sequential tracking ID:</p>
          
          <div class="id-badge-big" id="assigned-request-id">MH-LC-00001</div>

          <p style="color: var(--text-muted); font-size: 13px; margin-bottom: 24px;">Our Dubai operational desk will review your specifications and contact you via email/WhatsApp shortly.</p>
          
          <button type="button" class="btn-gold close-modal" style="justify-content: center; width: 100%;">
            <i class="fas fa-check"></i> Done
          </button>
        </div>
      </div>

    </div>
  </div>

  <!-- Floating Back to Top Button -->
  <button id="back-to-top" class="back-to-top-btn" aria-label="Back to top">
    <i class="fas fa-chevron-up"></i>
  </button>

  <!-- JavaScript -->
  <script src="js/main.js"></script>
</body>
</html>
