<?php
$pageTitle = "Contact Us | Dubai Operational Desk — MH Trade Capital Solutions";
$pageDesc = "Get in touch with MH Trade Capital Solutions in Dubai, UAE. Contact our capital desk for trade finance, banking setup, project funding, and commodity sourcing requirements.";
$activePage = "contact";
$pageHeroBg = "images/hero/dubai_hero_bg.png";
include 'includes/header.php';
?>

  <!-- Leaflet.js CSS for Map -->
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin=""/>
  <style>
    /* Hide Leaflet Attribution & Scale Labels */
    .leaflet-control-attribution,
    .leaflet-control-scale {
      display: none !important;
    }
    .leaflet-popup-content-wrapper {
      background: #0F172A;
      color: #FFFFFF;
      border: 1px solid var(--border-gold);
      border-radius: 12px;
    }
    .leaflet-popup-tip {
      background: #0F172A;
    }
    /* Free OpenStreetMap Dark Filter styling */
    #dubai-map .leaflet-tile-container img {
      filter: brightness(0.6) invert(1) contrast(2.2) hue-rotate(180deg) saturate(0.3);
    }
    /* Equal Height Grid for Contact Page */
    .contact-grid-wrapper {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 36px;
      align-items: stretch;
      margin-bottom: 70px;
    }
    .contact-left-card,
    .contact-right-card {
      background: linear-gradient(135deg, rgba(15, 23, 42, 0.95) 0%, rgba(7, 15, 30, 0.98) 100%);
      border: 1px solid var(--border-gold);
      border-radius: 20px;
      padding: 38px 32px;
      backdrop-filter: blur(16px);
      box-shadow: var(--shadow-dark);
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      height: 100%;
    }
    @media (max-width: 992px) {
      .contact-grid-wrapper {
        grid-template-columns: 1fr;
        gap: 32px;
      }
    }
  </style>

  <!-- Page Hero Banner -->
  <section class="page-hero-section" style="background-image: linear-gradient(180deg, rgba(7, 15, 30, 0.40) 0%, rgba(10, 25, 47, 0.40) 100%), url('<?php echo htmlspecialchars($pageHeroBg); ?>');">
    <div class="container">
      <div class="hero-tag" style="margin: 0 0 16px; display: inline-flex;">
        <i class="fas fa-headset"></i> Dubai Commercial Desk & Global Inquiries
      </div>
      <h1 class="page-hero-title">Get in Touch with Our<br><span style="color: var(--gold-primary);">Capital Desk Team</span></h1>
      <p class="page-hero-desc">
        Direct communication channels for international buyers, sellers, corporate entities, and institutional project sponsors. Submit your requirement to receive a tracking reference ID.
      </p>
      <div style="display: flex; gap: 16px; justify-content: flex-start; flex-wrap: wrap;">
        <button class="btn-gold open-inquiry-modal" data-vertical="general">
          <i class="fas fa-paper-plane"></i> Submit Trade Requirement
        </button>
        <a href="https://wa.me/971565837969" target="_blank" rel="noopener noreferrer" class="btn-outline-gold" style="border-color: #25D366; color: #25D366;">
          <i class="fab fa-whatsapp"></i> WhatsApp Direct
        </a>
      </div>
    </div>
  </section>

  <!-- Main Content: Contact Details & Direct Form Grid (Equal Height) -->
  <main class="container" style="padding: 70px 24px;">

    <div class="contact-grid-wrapper">
      
      <!-- Left Column: Equal Height Contact Details Card -->
      <div class="contact-left-card">
        <div>
          <div class="section-header text-left" style="margin-bottom: 24px;">
            <div class="section-subtitle">Operational Headquarters</div>
            <h2 class="section-title" style="font-size: 30px;">Dubai Contact Desk</h2>
            <p class="section-desc">Our team responds directly to structured trade requirements and commercial inquiries.</p>
          </div>

          <div style="display: flex; flex-direction: column; gap: 16px;">
            <!-- Location Card -->
            <div class="advantage-card" style="display: flex; gap: 16px; align-items: flex-start; padding: 16px 18px;">
              <div class="advantage-icon" style="flex-shrink: 0; width: 42px; height: 42px; font-size: 18px; margin-bottom: 0;"><i class="fas fa-location-dot"></i></div>
              <div>
                <h3 style="font-size: 16px; margin-bottom: 4px;">Location</h3>
                <p style="font-size: 13.5px; margin: 0;">Dubai, United Arab Emirates</p>
                <span style="font-size: 11.5px; color: var(--gold-primary); font-weight: 600;">Global Trade & Financial Hub</span>
              </div>
            </div>

            <!-- WhatsApp Card -->
            <div class="advantage-card" style="display: flex; gap: 16px; align-items: flex-start; padding: 16px 18px;">
              <div class="advantage-icon" style="flex-shrink: 0; width: 42px; height: 42px; font-size: 18px; margin-bottom: 0; background: rgba(37, 211, 102, 0.1); border-color: rgba(37, 211, 102, 0.3); color: #25D366;">
                <i class="fab fa-whatsapp"></i>
              </div>
              <div>
                <h3 style="font-size: 16px; margin-bottom: 4px;">WhatsApp Support</h3>
                <p style="font-size: 13.5px; margin-bottom: 2px;">
                  <a href="https://wa.me/971565837969" target="_blank" rel="noopener noreferrer" style="color: #FFFFFF; text-decoration: none; font-weight: 600;">+971 56 583 7969</a>
                </p>
                <span style="font-size: 11.5px; color: #25D366; font-weight: 600;">Instant Commercial Messaging</span>
              </div>
            </div>

            <!-- Email Card -->
            <div class="advantage-card" style="display: flex; gap: 16px; align-items: flex-start; padding: 16px 18px;">
              <div class="advantage-icon" style="flex-shrink: 0; width: 42px; height: 42px; font-size: 18px; margin-bottom: 0;"><i class="fas fa-envelope"></i></div>
              <div>
                <h3 style="font-size: 16px; margin-bottom: 4px;">Email Inquiry</h3>
                <p style="font-size: 13.5px; margin-bottom: 2px;">
                  <a href="mailto:contact@mhtradecap.com" style="color: #FFFFFF; text-decoration: none; font-weight: 600;">contact@mhtradecap.com</a>
                </p>
                <span style="font-size: 11.5px; color: var(--gold-primary); font-weight: 600;">Formal Documentation & Proposals</span>
              </div>
            </div>

            <!-- LinkedIn Card -->
            <div class="advantage-card" style="display: flex; gap: 16px; align-items: flex-start; padding: 16px 18px;">
              <div class="advantage-icon" style="flex-shrink: 0; width: 42px; height: 42px; font-size: 18px; margin-bottom: 0; background: rgba(10, 102, 194, 0.1); border-color: rgba(10, 102, 194, 0.3); color: #0A66C2;">
                <i class="fab fa-linkedin-in"></i>
              </div>
              <div>
                <h3 style="font-size: 16px; margin-bottom: 4px;">Executive LinkedIn</h3>
                <p style="font-size: 13.5px; margin-bottom: 2px;">
                  <a href="https://www.linkedin.com/in/rezwan-shamim-5a5023418/?lipi=urn%3Ali%3Apage%3Ad_flagship3_profile_view_base_contact_details%3BzbmJZIk%2BQ4%2B%2FQ%2B2bnpnwiw%3D%3D" target="_blank" rel="noopener noreferrer" style="color: #FFFFFF; text-decoration: none; font-weight: 600;">Connect on LinkedIn</a>
                </p>
                <span style="font-size: 11.5px; color: #0A66C2; font-weight: 600;">Professional Network & Advisory</span>
              </div>
            </div>

            <!-- Desk Hours Card -->
            <div class="advantage-card" style="display: flex; gap: 16px; align-items: flex-start; padding: 16px 18px;">
              <div class="advantage-icon" style="flex-shrink: 0; width: 42px; height: 42px; font-size: 18px; margin-bottom: 0;"><i class="fas fa-clock"></i></div>
              <div>
                <h3 style="font-size: 16px; margin-bottom: 4px;">Desk Hours</h3>
                <p style="font-size: 13.5px; margin: 0;">Monday – Friday: 9:00 AM – 6:00 PM (GST)</p>
                <span style="font-size: 11.5px; color: var(--text-muted);">Gulf Standard Time (UTC+4)</span>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Right Column: Equal Height Direct Trade Requirement Form Card -->
      <div class="contact-right-card">
        <div>
          <h3 style="font-size: 24px; color: #FFFFFF; margin-bottom: 8px; font-family: 'Outfit', sans-serif;">
            Submit Trade <span style="color: var(--gold-primary);">Requirement</span>
          </h3>
          <p style="color: var(--text-muted); font-size: 14px; margin-bottom: 24px;">
            Fill out the form below to receive your tracking reference ID directly from our Dubai desk.
          </p>

          <form id="contact-page-form">
            <div style="margin-bottom: 18px;">
              <label class="form-label" for="contact-vertical">Requirement Category *</label>
              <select class="form-control" id="contact-vertical" required>
                <option value="lc">Trade Finance & Banking Instruments</option>
                <option value="uae-banking">UAE Business Setup & Corporate Banking</option>
                <option value="project">Project Finance</option>
                <option value="commodity">Commodity Trade Solutions</option>
                <option value="general">General Business Inquiry</option>
              </select>
            </div>

            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 14px; margin-bottom: 18px;">
              <div>
                <label class="form-label" for="contact-name">Full Name *</label>
                <input type="text" class="form-control" id="contact-name" placeholder="John Doe" required>
              </div>
              <div>
                <label class="form-label" for="contact-company">Company Name</label>
                <input type="text" class="form-control" id="contact-company" placeholder="Global Trade Corp">
              </div>
            </div>

            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 14px; margin-bottom: 18px;">
              <div>
                <label class="form-label" for="contact-email">Email Address *</label>
                <input type="email" class="form-control" id="contact-email" placeholder="john@company.com" required>
              </div>
              <div>
                <label class="form-label" for="contact-phone">WhatsApp / Phone *</label>
                <input type="tel" class="form-control" id="contact-phone" placeholder="+971 50 000 0000" required>
              </div>
            </div>

            <div style="margin-bottom: 18px;">
              <label class="form-label" for="contact-amount">Estimated Instrument Value / Quantity</label>
              <input type="text" class="form-control" id="contact-amount" placeholder="e.g. $5,000,000 DLC or 50,000 MT Agri Commodity">
            </div>

            <div style="margin-bottom: 22px;">
              <label class="form-label" for="contact-message">Requirement Details *</label>
              <textarea class="form-control" id="contact-message" rows="3" placeholder="Describe the transaction, counterparties, target timeline, or specific banking requirements..." required></textarea>
            </div>

            <button type="submit" class="btn-gold" style="width: 100%; justify-content: center; padding: 14px; font-size: 15px;">
              <i class="fas fa-paper-plane"></i> Submit Requirement & Get Reference ID
            </button>
          </form>

          <div id="contact-success-msg" style="display: none; margin-top: 18px; background: rgba(37, 211, 102, 0.12); border: 1px solid rgba(37, 211, 102, 0.4); padding: 16px; border-radius: 12px; color: #25D366; font-size: 14px; text-align: center;">
            <i class="fas fa-circle-check fa-lg" style="margin-bottom: 6px; display: block;"></i>
            <strong>Requirement Submitted Successfully!</strong><br>
            Your Reference ID is: <span id="contact-req-id" style="font-family: monospace; font-weight: 700; color: #FFFFFF;">MH-LC-88412</span>.<br>Our Dubai desk will review your submission shortly.
          </div>
        </div>
      </div>

    </div>

  </main>

  <!-- Full Width Interactive Leaflet Map Section -->
  <section style="position: relative; width: 100%;">
    <div class="container" style="margin-bottom: 20px;">
      <div class="section-header text-left">
        <div class="section-subtitle">Operational Hub</div>
        <h2 class="section-title">Dubai Strategic Hub Map</h2>
        <p class="section-desc">Positioned in Dubai connecting commercial trade corridors between East and West.</p>
      </div>
    </div>

    <!-- Full Width Map Div Container -->
    <div id="dubai-map" style="width: 100%; height: 480px; border-top: 1px solid var(--border-gold); border-bottom: 1px solid var(--border-gold); background: #070F1E; z-index: 1;"></div>
  </section>

  <!-- Leaflet.js Library -->
  <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      // Initialize Leaflet Map centered on Dubai
      const dubaiCoords = [25.2048, 55.2708];
      const map = L.map('dubai-map', {
        center: dubaiCoords,
        zoom: 13,
        scrollWheelZoom: false,
        attributionControl: false
      });

      // Free OpenStreetMap Standard Tiles (100% Free, NO API Key needed)
      L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19
      }).addTo(map);

      // Custom Gold Icon Marker
      const goldIcon = L.divIcon({
        className: 'custom-map-pin',
        html: `<div style="background: #D4AF37; width: 26px; height: 26px; border-radius: 50%; border: 3px solid #070F1E; box-shadow: 0 0 15px rgba(212, 175, 55, 0.9); display: flex; align-items: center; justify-content: center;"><i class="fas fa-landmark" style="font-size: 11px; color: #070F1E;"></i></div>`,
        iconSize: [26, 26],
        iconAnchor: [13, 13]
      });

      // Add Marker with Popup
      L.marker(dubaiCoords, { icon: goldIcon }).addTo(map)
        .bindPopup(`
          <div style="padding: 6px 4px; text-align: center;">
            <strong style="color: #D4AF37; font-size: 14px;">MH Trade Capital Solutions</strong><br>
            <span style="font-size: 12px; color: #94A3B8;">Dubai Operational Desk, UAE</span>
          </div>
        `).openPopup();

      // Form Handling for Contact Page
      const contactForm = document.getElementById('contact-page-form');
      const contactSuccess = document.getElementById('contact-success-msg');
      const contactReqId = document.getElementById('contact-req-id');

      contactForm?.addEventListener('submit', function(e) {
        e.preventDefault();
        const categorySelect = document.getElementById('contact-vertical');
        const catCode = categorySelect ? categorySelect.value.toUpperCase() : 'REQ';
        const randomId = 'MH-' + catCode + '-' + Math.floor(10000 + Math.random() * 90000);
        
        if (contactReqId) contactReqId.textContent = randomId;
        contactForm.style.display = 'none';
        if (contactSuccess) contactSuccess.style.display = 'block';
      });
    });
  </script>

<?php include 'includes/footer.php'; ?>
