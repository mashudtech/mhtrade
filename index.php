<?php
$pageTitle = "MH Trade Capital Solutions — B2B Trade Finance, Commodity Sourcing & UAE Banking";
$pageDesc = "Dubai-based B2B Trade Finance (LC / SBLC), Commodity Sourcing, Project Finance, and UAE Corporate Banking. High-converting global financial infrastructure platform.";
$activePage = "home";
$isHeroViewport = true;
include 'includes/header.php';
?>

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

      <!-- About Us Showcase Section (Who We Are) -->
      <section class="about-section" id="about-us">
        <div class="container">
          <div class="about-grid">
            <div class="about-content-box">
              <div class="section-subtitle">Who We Are</div>
              <h2 class="section-title">Engineering Premier B2B Trade & Institutional Financial Facilitation</h2>
              <p class="about-desc-text">
                MH Trade Capital Solutions is a Dubai-based financial infrastructure and trade facilitation desk. We specialize in structuring institutional Letters of Credit (LC / DLC / SBLC), facilitating bulk commodity allocations, syndicating project capital, and setting up corporate banking for global clients.
              </p>

              <div class="about-highlights-grid">
                <div class="about-highlight-card">
                  <div class="about-highlight-icon"><i class="fas fa-building-columns"></i></div>
                  <div class="about-highlight-info">
                    <h4>Top Issuing Banks</h4>
                    <p>Direct alignment with top-tier international banking channels.</p>
                  </div>
                </div>
                <div class="about-highlight-card">
                  <div class="about-highlight-icon"><i class="fas fa-user-shield"></i></div>
                  <div class="about-highlight-info">
                    <h4>Confidential Desk</h4>
                    <p>Non-date reference IDs for complete client transaction privacy.</p>
                  </div>
                </div>
                <div class="about-highlight-card">
                  <div class="about-highlight-icon"><i class="fas fa-handshake"></i></div>
                  <div class="about-highlight-info">
                    <h4>Commodity Hub</h4>
                    <p>Verified allocation holders for bulk energy, agri & metals.</p>
                  </div>
                </div>
                <div class="about-highlight-card">
                  <div class="about-highlight-icon"><i class="fas fa-bolt"></i></div>
                  <div class="about-highlight-info">
                    <h4>24-Hour SLA</h4>
                    <p>Rapid term-sheet evaluation from our Dubai headquarters.</p>
                  </div>
                </div>
              </div>

              <a href="about-us.php" class="btn-gold" style="display: inline-flex;">
                <i class="fas fa-building"></i> Read Full Corporate Profile <i class="fas fa-arrow-right"></i>
              </a>
            </div>

            <div class="about-img-container">
              <img src="images/about_us_dubai.png" alt="MH Trade Capital Solutions Boardroom Dubai" class="about-img">
              <div class="about-experience-badge">
                <div class="about-badge-icon"><i class="fas fa-award"></i></div>
                <div class="about-badge-text">
                  <h4>Dubai Financial Desk</h4>
                  <p>Global Trade & Institutional Gateway</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Core Business Verticals Showcase Section (Our Core Capabilities) -->
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
        </div>
      </section>

      <!-- Trust Metrics & Institutional Statistics Counter Section -->
      <section class="trust-metrics-section" id="trust-metrics">
        <div class="container">
          <div class="section-header text-center">
            <div class="section-subtitle">Institutional Track Record</div>
            <h2 class="section-title">Proven Global Execution & Metrics</h2>
            <p class="section-desc">Key performance benchmarks and trade facilitation volume executed directly through our Dubai operational desk.</p>
          </div>
          <div class="trust-metrics-grid">
            <div class="trust-metric-item">
              <div class="trust-metric-icon"><i class="fas fa-chart-line"></i></div>
              <h3>$1.8B+</h3>
              <p>Trade Volume Facilitated</p>
            </div>
            <div class="trust-metric-item">
              <div class="trust-metric-icon"><i class="fas fa-globe"></i></div>
              <h3>45+</h3>
              <p>Global Trade Destinations</p>
            </div>
            <div class="trust-metric-item">
              <div class="trust-metric-icon"><i class="fas fa-shield-halved"></i></div>
              <h3>99.4%</h3>
              <p>Compliance Execution Rate</p>
            </div>
            <div class="trust-metric-item">
              <div class="trust-metric-icon"><i class="fas fa-clock"></i></div>
              <h3>24 Hours</h3>
              <p>Dubai Desk SLA Response</p>
            </div>
          </div>
        </div>
      </section>

    </main>

<?php include 'includes/footer.php'; ?>
