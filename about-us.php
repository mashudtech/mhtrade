<?php
$pageTitle = "About Us | MH Trade Capital Solutions Dubai";
$pageDesc = "Learn about MH Trade Capital Solutions — Dubai-based trade and capital solutions firm supporting international businesses with trade finance, banking solutions, commodity trade assistance and structured financing requirements.";
$activePage = "about";
$pageHeroBg = "images/about_us_dubai.png";
include 'includes/header.php';
?>

    <!-- Page Hero Banner -->
    <section class="page-hero-section" style="background-image: linear-gradient(180deg, rgba(7, 15, 30, 0.40) 0%, rgba(10, 25, 47, 0.40) 100%), url('<?php echo htmlspecialchars($pageHeroBg); ?>');">
      <div class="container">
        <div class="hero-tag" style="margin: 0 0 16px; display: inline-flex;">
          <i class="fas fa-building-columns"></i> Corporate Profile & Company Overview
        </div>
        <h1 class="page-hero-title">Built Around Relationships.<br><span style="color: var(--gold-primary);">Driven by Transactions.</span></h1>
        <p class="page-hero-desc">
          MH Trade Capital Solutions is a Dubai-based trade and capital solutions firm supporting international businesses with trade finance, banking solutions, commodity trade assistance and structured financing requirements.
        </p>
        <div style="display: flex; gap: 16px; justify-content: flex-start; flex-wrap: wrap;">
          <button class="btn-gold open-inquiry-modal" data-vertical="general">
            <i class="fas fa-paper-plane"></i> Submit Requirement
          </button>
          <a href="how-it-works.php" class="btn-outline-gold">
            <i class="fas fa-gears"></i> Explore Execution Pipeline
          </a>
        </div>
      </div>
    </section>

    <!-- Main Content -->
    <main class="container" style="padding: 70px 24px;">

      <!-- Corporate Introduction & Narrative Section -->
      <section class="about-section" style="border: none; background: transparent; padding: 0 0 60px;">
        <div class="about-grid">
          <div class="about-content-box">
            <div class="section-subtitle">Company Introduction</div>
            <h2 class="section-title">Built Around Relationships. Driven by Transactions.</h2>
            
            <p class="about-desc-text">
              MH Trade Capital Solutions is a Dubai-based trade and capital solutions firm supporting international businesses with trade finance, banking solutions, commodity trade assistance and structured financing requirements.
            </p>
            
            <p class="about-desc-text">
              With more than 11 years of professional experience and 40+ banking relationships worldwide, we take a transaction-first approach—understanding the underlying commercial activity, counterparties, documentation and requirements before identifying the appropriate financial or banking pathway.
            </p>
            
            <!-- Focus Statement Quote Box -->
            <div style="background: rgba(212, 175, 55, 0.08); border-left: 4px solid var(--gold-primary); padding: 18px 24px; border-radius: 0 12px 12px 0; margin: 24px 0 32px;">
              <p style="font-size: 16px; font-weight: 600; color: #FFFFFF; margin: 0; line-height: 1.5; font-style: italic;">
                "Our focus is simple: understand the transaction, structure the requirement, and coordinate the appropriate solution."
              </p>
            </div>

            <!-- Credentials Grid -->
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
            </div>
          </div>

          <!-- Image & Experience Card -->
          <div class="about-img-container">
            <img src="images/about_us_dubai.png" alt="MH Trade Capital Solutions Boardroom" class="about-img">
            <div class="about-experience-badge">
              <div class="about-badge-icon"><i class="fas fa-landmark"></i></div>
              <div class="about-badge-text">
                <h4>11+ Years Experience</h4>
                <p>40+ Global Banking Relationships</p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Core Philosophy Banner & Global Market Reach Grid -->
      <div style="margin: 30px 0 60px;">
        <div class="section-header text-center" style="margin-bottom: 36px;">
          <div class="section-subtitle" style="letter-spacing: 2px;">Core Philosophy</div>
          <h2 class="section-title core-philosophy-title">
            CONNECTING MARKETS. CREATING VALUE. BUILDING FUTURES.
          </h2>
          <p class="section-desc">Strategic financial facilitation connecting international commercial hubs from Dubai, United Arab Emirates.</p>
        </div>

        <div class="core-philosophy-grid">
          
          <div class="advantage-card">
            <div class="advantage-icon"><i class="fas fa-globe"></i></div>
            <h3 style="font-size: 20px;">Global Market Reach</h3>
            <p style="font-size: 14.5px; line-height: 1.65;">Supporting cross-border business and commercial activity across international markets.</p>
          </div>

          <div class="advantage-card">
            <div class="advantage-icon"><i class="fas fa-location-dot"></i></div>
            <h3 style="font-size: 20px;">Dubai-Based</h3>
            <p style="font-size: 14.5px; line-height: 1.65;">Strategically positioned in Dubai, a global hub connecting Asia, Africa, Europe and the Middle East.</p>
          </div>

        </div>
      </div>

      <!-- Turnaround SLAs Table Wrapper -->
      <div class="timelines-table-wrapper" style="margin-bottom: 60px;">
        <div class="section-header text-left" style="margin-bottom: 24px;">
          <div class="section-subtitle">Execution Benchmark</div>
          <h2 class="section-title">Standard Service Level Benchmarks</h2>
          <p class="section-desc">Average timeline benchmarks maintained across our core business divisions.</p>
        </div>

        <div class="timelines-grid">
          <div class="timeline-box">
            <div class="timeline-value">24-48 Hours</div>
            <div class="timeline-label">Initial Desk Evaluation</div>
          </div>
          <div class="timeline-box">
            <div class="timeline-value">2-5 Banking Days</div>
            <div class="timeline-label">LC / SBLC Instrument Pre-Advice</div>
          </div>
          <div class="timeline-box">
            <div class="timeline-value">3-7 Business Days</div>
            <div class="timeline-label">UAE Corporate Bank Setup</div>
          </div>
          <div class="timeline-box">
            <div class="timeline-value">48 Hours</div>
            <div class="timeline-label">Commodity Allocation Review</div>
          </div>
        </div>
      </div>

      <!-- Official Disclaimer Card -->
      <div style="background: rgba(15, 23, 42, 0.85); border: 1px solid var(--border-gold); border-radius: 18px; padding: 32px 36px; margin-bottom: 60px; backdrop-filter: blur(14px); box-shadow: var(--shadow-dark);">
        <h4 style="font-size: 17px; color: var(--gold-primary); text-transform: uppercase; letter-spacing: 1px; margin-bottom: 14px; display: flex; align-items: center; gap: 10px;">
          <i class="fas fa-shield-halved"></i> Disclaimer
        </h4>
        <p style="font-size: 14px; color: var(--text-muted); line-height: 1.65; margin-bottom: 12px;">
          All financial, banking and trade finance solutions are subject to transaction assessment, KYC/AML and sanctions screening, due diligence, applicable laws and regulations, and the final approval of the relevant bank, financial institution or funding party.
        </p>
        <p style="font-size: 14px; color: var(--text-muted); line-height: 1.65; margin-bottom: 14px;">
          MH Trade Capital Solutions does not guarantee the issuance, acceptance or approval of any financial instrument, financing facility or banking solution.
        </p>
        <p style="font-size: 12.5px; color: rgba(255, 255, 255, 0.55); border-top: 1px solid rgba(255, 255, 255, 0.08); padding-top: 12px; margin-top: 12px; line-height: 1.5;">
          * Banking relationships are subject to the nature of the transaction, applicable compliance requirements and the policies of the relevant institution.
        </p>
      </div>

      <!-- Bottom Action CTA -->
      <div style="text-align: center; padding: 20px 0 20px;">
        <h2 style="font-size: 30px; color: #FFFFFF; margin-bottom: 14px;">Initiate Your Trade Requirement</h2>
        <p style="color: var(--text-muted); font-size: 16px; margin-bottom: 24px;">Connect directly with our Dubai desk specialists to structure your financial requirement.</p>
        <button class="btn-gold open-inquiry-modal" data-vertical="general" style="font-size: 15px; padding: 16px 36px;">
          <i class="fas fa-paper-plane"></i> Submit Requirement Now
        </button>
      </div>

    </main>

<?php include 'includes/footer.php'; ?>
