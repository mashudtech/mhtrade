<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>How Our Requirement Engine Works | MH Trade Capital Solutions Dubai</title>
  <meta name="description"
    content="Discover how MH Trade Capital Solutions processes B2B trade finance, LC/SBLC issuance, commodity sourcing, and Dubai corporate banking through our frictionless execution engine.">
  <link rel="icon" type="image/png" href="MH-website-logo-package/MH-logo-transparent.png">

  <!-- Google Fonts: Outfit (Brand Logo) & Inter (Body) -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Outfit:wght@500;600;700;800;900&display=swap" rel="stylesheet">

  <!-- FontAwesome Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

  <!-- Main Stylesheets -->
  <link rel="stylesheet" href="css/style.css">
</head>

<body>

  <!-- Dynamic Canvas Background for High-Tech Institutional Feel -->
  <canvas id="bg-canvas"></canvas>

  <div class="site-wrapper">

    <!-- Top Utility Bar -->
    <div class="top-bar">
      <div class="container top-bar-container">
        <div class="top-bar-left">
          <div class="top-bar-info-item">
            <i class="fas fa-location-dot"></i> Dubai International Financial Centre (DIFC) & Dubai World Trade Centre (DWTC), UAE
          </div>
          <div class="top-bar-info-item">
            <i class="fas fa-envelope"></i> inquiry@mhtradecapital.com
          </div>
        </div>

        <div class="top-bar-right">
          <button class="btn-gold open-inquiry-modal btn-topbar" data-vertical="general">
            <i class="fas fa-paper-plane"></i> Submit Requirement
          </button>
        </div>
      </div>
    </div>

    <!-- Main Navigation Header -->
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
            <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
            <li class="nav-item">
              <a href="index.php#verticals" class="nav-link">Business Verticals <i class="fas fa-chevron-down" style="font-size: 10px;"></i></a>
              <ul class="dropdown-menu">
                <li class="dropdown-item"><a href="#" class="open-inquiry-modal" data-vertical="lc">Trade Finance (LC / SBLC / BG)</a></li>
                <li class="dropdown-item"><a href="#" class="open-inquiry-modal" data-vertical="commodity">Commodity Sourcing (Energy/Agri/Metals)</a></li>
                <li class="dropdown-item"><a href="#" class="open-inquiry-modal" data-vertical="project">Project & Infrastructure Finance</a></li>
                <li class="dropdown-item"><a href="#" class="open-inquiry-modal" data-vertical="uae-banking">UAE Business & Corporate Banking</a></li>
              </ul>
            </li>
            <li class="nav-item active"><a href="how-it-works.php" class="nav-link">How It Works</a></li>
            <li class="nav-item"><a href="index.php#why-mh" class="nav-link">Dubai Advantage</a></li>
            <li class="nav-item"><a href="index.php#contact" class="nav-link">Contact Desk</a></li>
          </ul>
        </div>
      </header>
    </div>

    <!-- Page Hero Banner -->
    <section class="page-hero-section">
      <div class="container">
        <div class="hero-tag" style="margin: 0 auto 16px; display: inline-flex;">
          <i class="fas fa-gears"></i> Non-Date Tracking Requirement Architecture
        </div>
        <h1 class="page-hero-title">Frictionless Requirement Engine</h1>
        <p class="page-hero-desc">
          How MH Trade Capital Solutions ingests, evaluates, matches, and executes high-value B2B trade requirements with institutional precision from Dubai.
        </p>
        <div style="display: flex; gap: 16px; justify-content: center; flex-wrap: wrap;">
          <button class="btn-gold open-inquiry-modal" data-vertical="general">
            <i class="fas fa-paper-plane"></i> Initiate Trade Requirement
          </button>
          <a href="index.php#requirement-ingestion" class="btn-outline-gold">
            <i class="fas fa-sliders"></i> Select Requirement on Home
          </a>
        </div>
      </div>
    </section>

    <!-- Main Engine Content -->
    <main class="container" style="padding: 60px 24px;">

      <!-- Detailed 4-Step Engine Architecture -->
      <div class="section-header text-center">
        <div class="section-subtitle">Execution Blueprint</div>
        <h2 class="section-title">The 4-Step Trade Ingestion Engine</h2>
        <p class="section-desc">Designed to protect client anonymity, reduce processing latency, and enforce strict bank compliance standards.</p>
      </div>

      <div class="engine-detail-grid">

        <!-- Step 1 -->
        <div class="engine-card">
          <div class="engine-card-number">STEP 01</div>
          <h3 class="engine-card-title">Structured Requirement Ingestion</h3>
          <p class="engine-card-desc">
            Submit your trade target via our online engine or inquiry desk. Choose your exact financial instrument (LC, SBLC, UPAS) or commodity specs (Grade, Metric Tonnage, Incoterms).
          </p>
          <ul class="engine-checklist">
            <li><i class="fas fa-check-circle"></i> Target Instrument & Amount Selection</li>
            <li><i class="fas fa-check-circle"></i> Issuing / Advising Bank Parameters</li>
            <li><i class="fas fa-check-circle"></i> Preliminary Term Sheet Data Intake</li>
          </ul>
        </div>

        <!-- Step 2 -->
        <div class="engine-card">
          <div class="engine-card-number">STEP 02</div>
          <h3 class="engine-card-title">Non-Date Reference ID Assignment</h3>
          <p class="engine-card-desc">
            To prevent transaction tracking leakage and safeguard confidentiality, our system automatically generates a unique non-date tracking ID (e.g. <code>MH-LC-00842</code>).
          </p>
          <ul class="engine-checklist">
            <li><i class="fas fa-check-circle"></i> 100% Confidentiality & Data Encryption</li>
            <li><i class="fas fa-check-circle"></i> Real-time Reference Tracking ID</li>
            <li><i class="fas fa-check-circle"></i> Automated Dubai Desk Route Tagging</li>
          </ul>
        </div>

        <!-- Step 3 -->
        <div class="engine-card">
          <div class="engine-card-number">STEP 03</div>
          <h3 class="engine-card-title">Dubai Desk Review & Matching</h3>
          <p class="engine-card-desc">
            Our trade specialists analyze your requirement against top-tier international banking rules (UCP 600 / URDG 758), allocation availability, and compliance parameters.
          </p>
          <ul class="engine-checklist">
            <li><i class="fas fa-check-circle"></i> SWIFT Capability & Verification</li>
            <li><i class="fas fa-check-circle"></i> Allocation & Supplier Due Diligence</li>
            <li><i class="fas fa-check-circle"></i> Non-Circumvention Protection (NCNDA)</li>
          </ul>
        </div>

        <!-- Step 4 -->
        <div class="engine-card">
          <div class="engine-card-number">STEP 04</div>
          <h3 class="engine-card-title">Direct Bank & Deal Facilitation</h3>
          <p class="engine-card-desc">
            Upon approval, direct communication is established for bank-to-bank SWIFT transmission (MT799/MT760), allocation contract signing, or UAE corporate account issuance.
          </p>
          <ul class="engine-checklist">
            <li><i class="fas fa-check-circle"></i> Direct Bank-to-Bank Transmission</li>
            <li><i class="fas fa-check-circle"></i> Contract Execution & Escrow Setup</li>
            <li><i class="fas fa-check-circle"></i> Final Settlement & Delivery Audit</li>
          </ul>
        </div>

      </div>

      <!-- Live Reference ID Generator Preview Component -->
      <div style="background: rgba(15, 23, 42, 0.85); border: 1px solid var(--border-gold); border-radius: 20px; padding: 40px; margin: 60px 0; text-align: center; backdrop-filter: blur(16px);">
        <div class="section-subtitle">Interactive Engine Preview</div>
        <h3 style="font-size: 26px; color: #FFFFFF; margin-bottom: 12px;">Test Unique Reference ID Generation</h3>
        <p style="color: var(--text-muted); font-size: 15px; max-width: 640px; margin: 0 auto 24px;">
          Select a vertical below to simulate how our engine formats your confidential non-date tracking reference ID in real time.
        </p>
        <div style="display: flex; gap: 16px; justify-content: center; align-items: center; max-width: 540px; margin: 0 auto; flex-wrap: wrap;">
          <select id="sim-vertical-select" class="ingestion-select" style="max-width: 320px;">
            <option value="LC">Trade Finance — LC / SBLC</option>
            <option value="COMM">Commodity Sourcing</option>
            <option value="PROJ">Project Finance</option>
            <option value="UAE">UAE Business & Banking</option>
          </select>
          <div id="sim-id-display" class="sample-id-tag" style="font-size: 18px; padding: 12px 24px;">MH-LC-00842</div>
        </div>
      </div>

      <!-- Timelines & SLAs Table -->
      <div class="timelines-table-wrapper">
        <div class="section-header text-left" style="margin-bottom: 20px;">
          <div class="section-subtitle">Performance Benchmarks</div>
          <h2 class="section-title">Turnaround Timelines by Vertical</h2>
          <p class="section-desc">Average operational review and execution speed managed from our Dubai desk.</p>
        </div>

        <div class="timelines-grid">
          <div class="timeline-box">
            <div class="timeline-value">24-48 Hours</div>
            <div class="timeline-label">Initial Compliance Review</div>
          </div>
          <div class="timeline-box">
            <div class="timeline-value">2-5 Banking Days</div>
            <div class="timeline-label">LC / SBLC Instrument Pre-Advice</div>
          </div>
          <div class="timeline-box">
            <div class="timeline-value">3-7 Business Days</div>
            <div class="timeline-label">UAE Corporate Banking Setup</div>
          </div>
          <div class="timeline-box">
            <div class="timeline-value">48 Hours</div>
            <div class="timeline-label">Commodity Allocation Verification</div>
          </div>
        </div>
      </div>

      <!-- Bottom Action CTA -->
      <div style="text-align: center; padding: 60px 0 20px;">
        <h2 style="font-size: 30px; color: #FFFFFF; margin-bottom: 16px;">Ready to Submit Your Requirement?</h2>
        <p style="color: var(--text-muted); font-size: 16px; margin-bottom: 28px;">Initiate your requirement through our confidential engine in under 60 seconds.</p>
        <button class="btn-gold open-inquiry-modal" data-vertical="general" style="font-size: 16px; padding: 16px 36px;">
          <i class="fas fa-paper-plane"></i> Submit Requirement Now
        </button>
      </div>

    </main>

    <!-- Footer -->
    <footer class="footer">
      <div class="container">
        <div class="footer-grid">
          <div class="footer-col">
            <a href="index.php" class="brand-logo-link" style="margin-bottom: 16px;">
              <div class="brand-logo-img-box">
                <img src="MH-website-logo-package/MH-logo-transparent.png" alt="MH Trade Capital Solutions Logo" class="brand-logo-img">
              </div>
              <div class="brand-logo-text">
                <span class="brand-logo-row1">MH TRADE CAPITAL</span>
                <span class="brand-logo-row2">SOLUTIONS</span>
              </div>
            </a>
            <p class="footer-desc">
              Dubai-headquartered B2B trade capital facilitator connecting institutional buyers, sellers, corporations, and project developers globally.
            </p>
          </div>

          <div class="footer-col">
            <h4 class="footer-heading">Financial Verticals</h4>
            <ul class="footer-links">
              <li><a href="#" class="open-inquiry-modal" data-vertical="lc">Trade Finance (LC / SBLC)</a></li>
              <li><a href="#" class="open-inquiry-modal" data-vertical="commodity">Commodity Sourcing</a></li>
              <li><a href="#" class="open-inquiry-modal" data-vertical="project">Project Funding</a></li>
              <li><a href="#" class="open-inquiry-modal" data-vertical="uae-banking">UAE Corporate Banking</a></li>
            </ul>
          </div>

          <div class="footer-col">
            <h4 class="footer-heading">Navigation</h4>
            <ul class="footer-links">
              <li><a href="index.php">Home</a></li>
              <li><a href="how-it-works.php">How It Works</a></li>
              <li><a href="index.php#why-mh">Dubai Advantage</a></li>
              <li><a href="index.php#contact">Contact Desk</a></li>
            </ul>
          </div>

          <div class="footer-col">
            <h4 class="footer-heading">Dubai Head Office</h4>
            <div class="footer-contact-info">
              <p><i class="fas fa-location-dot"></i> DIFC & DWTC Tower, Dubai, UAE</p>
              <p><i class="fas fa-envelope"></i> inquiry@mhtradecapital.com</p>
              <p><i class="fas fa-clock"></i> Sun - Thu: 9:00 AM - 6:00 PM (GST)</p>
            </div>
          </div>
        </div>

        <div class="footer-bottom">
          <p>&copy; <?php echo date('Y'); ?> MH Trade Capital Solutions. All Rights Reserved. Non-bank corporate transaction facilitator.</p>
        </div>
      </div>
    </footer>

    <!-- Back to Top Button -->
    <button id="back-to-top" class="back-to-top-btn" aria-label="Back to top">
      <i class="fas fa-arrow-up"></i>
    </button>

    <!-- Modal Drawer Form -->
    <div class="modal-overlay" id="inquiry-modal">
      <div class="modal-card">
        <button class="close-modal" aria-label="Close modal"><i class="fas fa-xmark"></i></button>

        <div id="modal-form-container">
          <div class="modal-header">
            <div class="section-subtitle">Confidential Requirement Intake</div>
            <h3 class="modal-title">Submit Trade Specification</h3>
            <p class="modal-desc">Complete requirement parameters below. Our Dubai compliance desk will issue a tracking ID within 24 hours.</p>
          </div>

          <form id="inquiry-form">
            <div class="form-group">
              <label class="form-label" for="req-vertical">Target Vertical *</label>
              <select class="form-select" id="req-vertical" required>
                <option value="lc">Trade Finance — Letter of Credit (LC / DLC / UPAS)</option>
                <option value="sblc">Trade Finance — SBLC / Bank Guarantee (BG)</option>
                <option value="commodity">Commodity Sourcing — Energy / Agri / Metals</option>
                <option value="project">Project Finance — Infrastructure & Capital</option>
                <option value="uae-banking">UAE Business & Corporate Banking</option>
                <option value="general">General Corporate Inquiry</option>
              </select>
            </div>

            <div class="form-row">
              <div class="form-group">
                <label class="form-label" for="client-name">Full Name / Title *</label>
                <input type="text" id="client-name" class="form-input" placeholder="e.g. Alexander Wright" required>
              </div>
              <div class="form-group">
                <label class="form-label" for="client-email">Corporate Email *</label>
                <input type="email" id="client-email" class="form-input" placeholder="name@company.com" required>
              </div>
            </div>

            <div class="form-row">
              <div class="form-group">
                <label class="form-label" for="company-name">Company / Organization *</label>
                <input type="text" id="company-name" class="form-input" placeholder="Company Legal Name" required>
              </div>
              <div class="form-group">
                <label class="form-label" for="client-phone">Phone / WhatsApp</label>
                <input type="tel" id="client-phone" class="form-input" placeholder="+971 50 000 0000">
              </div>
            </div>

            <div class="form-group">
              <label class="form-label" for="req-details">Requirement Specifications *</label>
              <textarea id="req-details" class="form-textarea" rows="4" placeholder="Detail your target instrument face value, issuing bank preference, commodity grade/quantity, or corporate banking requirements..." required></textarea>
            </div>

            <button type="submit" class="btn-gold" style="width: 100%; justify-content: center; height: 50px; font-size: 15px;">
              <i class="fas fa-paper-plane"></i> Submit & Generate Request ID
            </button>
          </form>
        </div>

        <div id="modal-success-container" class="hidden text-center" style="padding: 20px 0;">
          <div style="font-size: 50px; color: var(--gold-primary); margin-bottom: 16px;">
            <i class="fas fa-circle-check"></i>
          </div>
          <h3 style="font-size: 24px; color: #FFFFFF; margin-bottom: 12px;">Requirement Logged Successfully</h3>
          <p style="color: var(--text-muted); font-size: 14.5px; margin-bottom: 20px;">
            Your non-date tracking reference ID has been assigned to our Dubai Underwriting Desk:
          </p>
          <div id="assigned-request-id" class="sample-id-tag" style="font-size: 20px; padding: 12px 28px; margin-bottom: 24px;">
            MH-LC-00000
          </div>
          <p style="color: var(--text-muted); font-size: 13.5px; margin-bottom: 28px;">
            A senior trade specialist will review your parameters and respond within 24 hours.
          </p>
          <button class="btn-outline-gold close-modal">Close Window</button>
        </div>

      </div>
    </div>

  </div>

  <!-- Main Interactive Scripts -->
  <script src="js/main.js"></script>

  <!-- Interactive Live Simulator Script for how-it-works page -->
  <script>
    document.addEventListener('DOMContentLoaded', () => {
      const simSelect = document.getElementById('sim-vertical-select');
      const simDisplay = document.getElementById('sim-id-display');
      
      simSelect?.addEventListener('change', () => {
        const val = simSelect.value;
        const randNum = Math.floor(10000 + Math.random() * 90000);
        simDisplay.textContent = `MH-${val}-${randNum}`;
      });
    });
  </script>

</body>

</html>
