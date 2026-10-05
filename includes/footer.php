    <!-- Footer -->
    <footer class="main-footer" id="contact">
      <div class="container">
        <div class="footer-grid">
          <div class="footer-brand">
            <a href="index.php" class="brand-logo-link" style="margin-bottom: 16px;">
              <div class="brand-logo-img-box">
                <img src="images/logo/MH-logo-icon-512.png" alt="MH Trade Capital Solutions Logo" class="brand-logo-img">
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
            <ul class="footer-contact-list">
              <li>
                <i class="fas fa-building"></i>
                <span>Dubai International Financial Centre (DIFC) & DWTC, UAE</span>
              </li>
              <li>
                <i class="fas fa-envelope"></i>
                <a href="mailto:contact@mhtradecap.com">contact@mhtradecap.com</a>
              </li>
              <li>
                <i class="fab fa-whatsapp" style="color: #25D366;"></i>
                <a href="https://wa.me/?text=Hello%20MH%20Trade%20Capital" target="_blank">+971 50 000 0000 (WhatsApp Desk)</a>
              </li>
            </ul>
          </div>
        </div>

        <div class="footer-bottom">
          <div>&copy; <?php echo date('Y'); ?> MH Trade Capital Solutions. All Rights Reserved. Dubai, United Arab Emirates.</div>
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
