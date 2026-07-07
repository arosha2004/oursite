  <!-- Footer -->
  <footer>
    <div class="container">
      <div class="footer-grid">
        <div class="footer-brand">
          <a href="#" class="logo-area">
            <div class="logo-icon">N</div>
            <span><?php echo htmlspecialchars($config['site_name']); ?></span>
          </a>
          <p>Engineering premium custom software systems, scalable cloud platforms, interactive mobile designs, and automated AI models for growth companies.</p>
        </div>
        
        <div class="footer-column">
          <h4>Company</h4>
          <ul class="footer-links">
            <li><a href="#about">About Nexytic</a></li>
            <li><a href="#">Careers</a></li>
            <li><a href="#">Blog</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </div>

        <div class="footer-column">
          <h4>Services</h4>
          <ul class="footer-links">
            <li><a href="#services">Custom Web Dev</a></li>
            <li><a href="#services">Mobile Applications</a></li>
            <li><a href="#services">AI & APIs</a></li>
            <li><a href="#services">SaaS Solutions</a></li>
          </ul>
        </div>

        <div class="footer-column">
          <h4>Portfolio</h4>
          <ul class="footer-links">
            <li><a href="#portfolio">Apex E-Commerce</a></li>
            <li><a href="#portfolio">Zenith Healthcare</a></li>
            <li><a href="#portfolio">Aura Reservation</a></li>
            <li><a href="#portfolio">Novus Analytics</a></li>
          </ul>
        </div>

        <div class="footer-column">
          <h4>Resources</h4>
          <ul class="footer-links">
            <li><a href="#faq">Client FAQs</a></li>
            <li><a href="#pricing">Pricing Plans</a></li>
            <li><a href="#">Free Consultation</a></li>
            <li><a href="#">Support Hub</a></li>
          </ul>
        </div>
      </div>

      <div class="footer-bottom">
        <p>&copy; <?php echo date('Y'); ?> <?php echo htmlspecialchars($config['site_name']); ?> Software. All rights reserved.</p>
        <div class="footer-bottom-links">
          <a href="#">Privacy Policy</a>
          <a href="#">Terms of Service</a>
        </div>
      </div>
    </div>
  </footer>

  <!-- Toast Notification Container -->
  <div class="toast-container" id="toast-container"></div>

  <!-- GSAP Animation Library and ScrollTrigger CDN -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
  
  <!-- Custom Logic Script -->
  <script src="script.js"></script>
</body>
</html>
