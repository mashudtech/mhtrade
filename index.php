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
        <i class="fas fa-shield-halved"></i> Trade Finance • Banking Instruments • Project Finance • Commodity Trade
      </div>

      <h1 class="hero-title">Structured Trade Finance & <br>
        <span>Capital Solutions</span>
      </h1>

      <p class="hero-subtitle">Connecting Real Transactions with the Right Financial Solutions
        <br>Dubai-Based | 40+ Banking Relationships Worldwide | 11+ Years of Experience
      </p>

      <div class="hero-actions">
        <button class="btn-gold open-inquiry-modal" data-vertical="general"
          style="padding: 14px 32px; font-size: 15px; border-radius: 10px;">
          <i class="fas fa-paper-plane"></i> Submit Requirement
        </button>
      </div>
    </div>
  </div>

  <a href="#requirement-ingestion" class="hero-scroll-hint">
    <span>Explore</span>
    <i class="fas fa-chevron-down"></i>
  </a>
</section>

</div>

<!-- Main Content -->
<main>


  <!-- Core Business Verticals Showcase Section (Our Core Capabilities) -->
  <?php require_once 'includes/solutions_data.php';
  $homeSolutions = getSolutionsData(); ?>
  <section class="container verticals-section" id="verticals">
    <div class="section-header-wrapper">
      <div class="section-header text-left">
        <div class="section-subtitle">Our Core Capabilities</div>




        <h2 class="section-title">Select Your Business Requirement</h2>
        <p class="section-desc">Choose the service area that best matches your business, financing, trade or banking
          requirement.</p>
      </div>
      <div class="slider-controls">
        <button class="slider-btn" id="verticals-prev" aria-label="Previous vertical"><i
            class="fas fa-chevron-left"></i></button>
        <button class="slider-btn" id="verticals-next" aria-label="Next vertical"><i
            class="fas fa-chevron-right"></i></button>
      </div>
    </div>

    <div class="verticals-grid-wrapper">
      <div class="verticals-grid" id="verticals-slider">

        <?php foreach ($homeSolutions as $solId => $sol): ?>
          <a href="solution-detail.php?id=<?php echo htmlspecialchars($solId); ?>" class="vertical-card"
            style="text-decoration: none; display: flex; flex-direction: column; cursor: pointer;">
            <div class="v-card-img-wrapper">
              <img src="<?php echo htmlspecialchars($sol['image']); ?>"
                alt="<?php echo htmlspecialchars($sol['title']); ?>" class="v-card-img">
              <div class="v-card-badge"><?php echo htmlspecialchars($sol['num']); ?> — Solution</div>
            </div>
            <div class="v-card-body" style="display: flex; flex-direction: column; flex: 1;">
              <h3 class="v-title" style="font-size: 20px; color: #FFFFFF; margin-bottom: 10px;">
                <?php echo htmlspecialchars($sol['title']); ?>
              </h3>
              <p class="v-desc" style="font-size: 14px; color: var(--text-muted); line-height: 1.6; margin: 0;">
                <?php echo htmlspecialchars($sol['shortDesc']); ?>
              </p>
            </div>
          </a>
        <?php endforeach; ?>

      </div>
    </div>

    <!-- Bottom Action Button to Browse All Capabilities -->
    <div class="verticals-bottom-action">
      <a href="solutions.php" class="btn-gold" style="display: inline-flex; text-decoration: none;">
        <i class="fas fa-layer-group"></i> Browse All Capabilities
      </a>
    </div>
  </section>

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
                  <option value="lc">Trade Finance & Banking Instruments</option>
                  <option value="uae-banking">UAE Business Setup & Corporate Banking</option>
                  <option value="project">Project Finance</option>
                  <option value="commodity">Commodity Trade Solutions</option>
                  <option value="general">General Business Inquiry</option>
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
          <div class="section-subtitle">Company Introduction</div>
          <h2 class="section-title">Built Around Relationships. Driven by Transactions.</h2>
          <p class="about-desc-text">
            MH Trade Capital Solutions is a Dubai-based trade and capital solutions firm supporting international
            businesses with trade finance, banking solutions, commodity trade assistance and structured financing
            requirements.
          </p>
          <p class="about-desc-text">
            With more than 11 years of professional experience and 40+ banking relationships worldwide, we take a
            transaction-first approach—understanding the underlying commercial activity, counterparties, documentation
            and requirements before identifying the appropriate financial or banking pathway.
          </p>
          <p class="about-desc-text" style="font-weight: 600; color: #FFFFFF;">
            Our focus is simple: understand the transaction, structure the requirement, and coordinate the appropriate
            solution.
          </p>

          <div class="about-highlights-grid">
            <div class="about-highlight-card">
              <div class="about-highlight-icon"><i class="fas fa-award"></i></div>
              <div class="about-highlight-info">
                <h4>11+ Years of Experience</h4>
                <p>Professional experience across trade finance and financial solutions.</p>
              </div>
            </div>
            <div class="about-highlight-card">
              <div class="about-highlight-icon"><i class="fas fa-building-columns"></i></div>
              <div class="about-highlight-info">
                <h4>40+ Banking Relationships</h4>
                <p>A broad network of banking relationships across international markets.*</p>
              </div>
            </div>
            <div class="about-highlight-card">
              <div class="about-highlight-icon"><i class="fas fa-globe"></i></div>
              <div class="about-highlight-info">
                <h4>Global Market Reach</h4>
                <p>Supporting cross-border business and commercial activity across international markets.</p>
              </div>
            </div>
            <div class="about-highlight-card">
              <div class="about-highlight-icon"><i class="fas fa-landmark"></i></div>
              <div class="about-highlight-info">
                <h4>Dubai-Based</h4>
                <p>Strategically positioned in Dubai, a global hub connecting Asia, Africa, Europe and the Middle East.
                </p>
              </div>
            </div>
          </div>

          <a href="about-us.php" class="btn-gold" style="display: inline-flex; margin-top: 10px;">
            <i class="fas fa-building"></i> Read Full Corporate Profile <i class="fas fa-arrow-right"></i>
          </a>
        </div>

        <div class="about-img-container">
          <img src="images/about_us_dubai.png" alt="MH Trade Capital Solutions Boardroom Dubai" class="about-img">
          <div class="about-experience-badge">
            <div class="about-badge-icon"><i class="fas fa-award"></i></div>
            <div class="about-badge-text">
              <h4>11+ Years Experience</h4>
              <p>40+ Global Banking Relationships</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Step-by-Step Process Flow -->
  <!-- <section class="process-section" id="process">
    <div class="container">
      <div class="section-header">
        <div class="section-subtitle">Frictionless Execution</div>
        <h2 class="section-title">How Our Requirement Engine Works</h2>
        <p class="section-desc">Every trade requirement is processed through a structured non-date tracking pipeline for
          maximum confidentiality and operational speed.</p>
      </div>

      <div class="process-grid">
        <div class="process-step">
          <div class="step-num">01</div>
          <h3 class="step-title">Submit Requirement</h3>
          <p class="step-desc">Select your target vertical and input required specs, instrument size, or commodity
            quantity.</p>
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
          <p class="step-desc">Our specialists evaluate requirements, banking parameters, and compliance feasibility.
          </p>
        </div>

        <div class="process-step">
          <div class="step-num">04</div>
          <h3 class="step-title">Execution & Facilitation</h3>
          <p class="step-desc">Direct execution with partner banks, allocation holders, or UAE institutional setup
            teams.</p>
        </div>
      </div>
    </div>
  </section> -->

  <!-- Client Testimonials & Institutional Trust Section (Single-Item Slider) -->
  <section class="testimonials-section" id="testimonials">
    <div class="container">
      <div class="section-header-wrapper">
        <div class="section-header text-left">
          <div class="section-subtitle">Client Endorsements & Proof of Trust</div>
          <h2 class="section-title">Global Capital & Trade Success Stories</h2>
          <p class="section-desc">Read how institutional buyers, sellers, energy developers, and corporate entities
            execute high-value transactions through MH Trade Capital Solutions.</p>
        </div>
        <div class="slider-controls">
          <button class="slider-btn" id="testimonial-prev" aria-label="Previous testimonial"><i
              class="fas fa-chevron-left"></i></button>
          <button class="slider-btn" id="testimonial-next" aria-label="Next testimonial"><i
              class="fas fa-chevron-right"></i></button>
        </div>
      </div>

      <div class="testimonials-slider-wrapper">
        <div class="testimonials-slider" id="testimonials-track">

          <!-- Testimonial Slide 1 -->
          <div class="testimonial-slide">
            <div class="testimonial-card single-testimonial">
              <i class="fas fa-quote-right quote-watermark"></i>
              <div class="testimonial-grid-body">
                <!-- Left Aligned User Image & Author Info -->
                <div class="testimonial-author-left">
                  <div class="author-avatar-initials">MV</div>
                  <div class="author-info">
                    <h4>Marcus Vance</h4>
                    <p>Managing Director, Global Energy Logistics Ltd</p>
                    <div class="author-deal-size"><i class="fas fa-circle-check"></i> $45,000,000 DLC Instrument</div>
                  </div>
                </div>
                <!-- Middle Aligned Testimonial Quote & Rating -->
                <div class="testimonial-content-middle">
                  <div class="testimonial-top">
                    <div class="testimonial-stars">
                      <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                        class="fas fa-star"></i><i class="fas fa-star"></i>
                    </div>
                    <div class="testimonial-badge"><i class="fas fa-shield-halved"></i> Verified LC Facility</div>
                  </div>
                  <p class="testimonial-quote">
                    "MH Trade Capital structured our $45M Letter of Credit facility within 4 banking days when
                    conventional lenders dragged for weeks. Their non-date reference tracking gave us complete
                    confidentiality and flawless counterparty acceptance."
                  </p>
                </div>
              </div>
            </div>
          </div>

          <!-- Testimonial Slide 2 -->
          <div class="testimonial-slide">
            <div class="testimonial-card single-testimonial">
              <i class="fas fa-quote-right quote-watermark"></i>
              <div class="testimonial-grid-body">
                <!-- Left Aligned User Image & Author Info -->
                <div class="testimonial-author-left">
                  <div class="author-avatar-initials">RA</div>
                  <div class="author-info">
                    <h4>Sheikh Rashid Al-Maktoum</h4>
                    <p>Chief Procurement Officer, ME Agri Commodities FZCO</p>
                    <div class="author-deal-size"><i class="fas fa-circle-check"></i> 50,000 MT Bulk Allocation</div>
                  </div>
                </div>
                <!-- Middle Aligned Testimonial Quote & Rating -->
                <div class="testimonial-content-middle">
                  <div class="testimonial-top">
                    <div class="testimonial-stars">
                      <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                        class="fas fa-star"></i><i class="fas fa-star"></i>
                    </div>
                    <div class="testimonial-badge"><i class="fas fa-shield-halved"></i> Verified Commodity Trade</div>
                  </div>
                  <p class="testimonial-quote">
                    "Connecting directly with allocation holders through MH Trade Capital eliminated non-performing
                    intermediaries. We secured 50,000 MT of bulk agri commodities with full Proof of Product
                    verification and seamless banking compliance."
                  </p>
                </div>
              </div>
            </div>
          </div>

          <!-- Testimonial Slide 3 -->
          <div class="testimonial-slide">
            <div class="testimonial-card single-testimonial">
              <i class="fas fa-quote-right quote-watermark"></i>
              <div class="testimonial-grid-body">
                <!-- Left Aligned User Image & Author Info -->
                <div class="testimonial-author-left">
                  <div class="author-avatar-initials">ER</div>
                  <div class="author-info">
                    <h4>Elena Rostova</h4>
                    <p>VP Infrastructure, EuroAsia Energy Group</p>
                    <div class="author-deal-size"><i class="fas fa-circle-check"></i> $120,000,000 Debt Syndication
                    </div>
                  </div>
                </div>
                <!-- Middle Aligned Testimonial Quote & Rating -->
                <div class="testimonial-content-middle">
                  <div class="testimonial-top">
                    <div class="testimonial-stars">
                      <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                        class="fas fa-star"></i><i class="fas fa-star"></i>
                    </div>
                    <div class="testimonial-badge"><i class="fas fa-shield-halved"></i> Verified Project Funding</div>
                  </div>
                  <p class="testimonial-quote">
                    "For our renewable energy power expansion, MH Trade Capital facilitated debt structuring and capital
                    syndication seamlessly out of Dubai. Their international banking relationships provided true
                    institutional execution."
                  </p>
                </div>
              </div>
            </div>
          </div>

          <!-- Testimonial Slide 4 -->
          <div class="testimonial-slide">
            <div class="testimonial-card single-testimonial">
              <i class="fas fa-quote-right quote-watermark"></i>
              <div class="testimonial-grid-body">
                <!-- Left Aligned User Image & Author Info -->
                <div class="testimonial-author-left">
                  <div class="author-avatar-initials">TM</div>
                  <div class="author-info">
                    <h4>Tariq Mansoor</h4>
                    <p>CEO, Apex Shipping & Trade Holding</p>
                    <div class="author-deal-size"><i class="fas fa-circle-check"></i> Dubai Corporate Banking Setup
                    </div>
                  </div>
                </div>
                <!-- Middle Aligned Testimonial Quote & Rating -->
                <div class="testimonial-content-middle">
                  <div class="testimonial-top">
                    <div class="testimonial-stars">
                      <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                        class="fas fa-star"></i><i class="fas fa-star"></i>
                    </div>
                    <div class="testimonial-badge"><i class="fas fa-shield-halved"></i> Verified Corporate Setup</div>
                  </div>
                  <p class="testimonial-quote">
                    "Opening a multi-currency corporate bank account in Dubai used to take months. The advisory team at
                    MH Trade Capital streamlined compliance, documentation, and account setup in just 5 business days!"
                  </p>
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

      <!-- Trust Standards Strip -->
      <div class="testimonial-trust-strip">
        <div class="trust-pill"><i class="fas fa-lock"></i> Confidential Non-Date Reference Tracking</div>
        <div class="trust-pill"><i class="fas fa-building-columns"></i> 40+ Banking Partners Worldwide</div>
        <div class="trust-pill"><i class="fas fa-bolt"></i> Fast Transaction Structuring</div>
        <div class="trust-pill"><i class="fas fa-file-contract"></i> Institutional Compliance Standards</div>
      </div>
    </div>
  </section>

  <!-- Trust Metrics & Institutional Statistics Counter Section -->
  <section class="trust-metrics-section" id="trust-metrics">
    <div class="container">
      <div class="section-header text-center">
        <div class="section-subtitle">Institutional Track Record</div>
        <h2 class="section-title">Proven Global Execution & Metrics</h2>
        <p class="section-desc">Key performance benchmarks and trade facilitation volume executed directly through our
          Dubai operational desk.</p>
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