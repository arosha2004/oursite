<?php
/* ==========================================
   ABOUT US PAGE
   ========================================== */

// Include configurations
require_once __DIR__ . '/includes/config.php';

// Include header include
require_once __DIR__ . '/includes/header.php';
?>

  <!-- Page Header -->
  <section class="hero" style="min-height: 40vh; padding-top: 150px; padding-bottom: 50px;">
    <div class="container" style="text-align: center;">
      <div class="hero-tag" style="justify-content: center; margin: 0 auto 1.5rem auto;">
        <i data-lucide="info" style="width: 14px; height: 14px;"></i>
        <span>Who We Are</span>
      </div>
      <h1>About <span class="gradient-text"><?php echo htmlspecialchars($config['site_name']); ?></span></h1>
      <p style="max-width: 600px; margin: 0 auto;">We are a team of passionate engineers, designers, and strategists dedicated to transforming ideas into powerful digital solutions.</p>
    </div>
  </section>

  <!-- Mission & Vision -->
  <section class="section" style="padding: 4rem 0;">
    <div class="container">
      <div class="about-grid" style="display: grid; grid-template-columns: 1fr 1fr; gap: 4rem; align-items: center;">
        <div class="mission-text">
          <span class="section-tag">Our Mission</span>
          <h3>Empowering Businesses Through Technology</h3>
          <p>Our mission is to provide cutting-edge software solutions that drive growth, efficiency, and innovation for businesses worldwide. We believe in building sustainable architectures and intuitive user experiences.</p>
        </div>
        <div class="vision-text glass-card" style="padding: 3rem;">
          <span class="section-tag">Our Vision</span>
          <h3>A Digitally Connected Future</h3>
          <p>We envision a world where technology seamlessly integrates into every aspect of business, bridging gaps and creating new opportunities. By leveraging AI, cloud computing, and robust development practices, we aim to be the catalyst for this digital transformation.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Core Values -->
  <section class="section" style="padding: 4rem 0; background: rgba(255,255,255,0.02);">
    <div class="container">
      <div style="text-align: center; margin-bottom: 3rem;">
        <span class="section-tag" style="justify-content: center; margin: 0 auto 1rem auto;">Our Values</span>
        <h2>What Drives Us</h2>
      </div>
      <div class="stats-grid" style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 2rem;">
        <div class="glass-card stat-card" style="text-align: left; padding: 2rem;">
          <i data-lucide="zap" style="color: var(--primary); margin-bottom: 1rem; width: 32px; height: 32px;"></i>
          <h4 style="margin-bottom: 0.5rem; font-size: 1.25rem;">Innovation</h4>
          <p style="color: var(--text-secondary); font-size: 0.9rem;">We constantly explore new technologies to deliver the best solutions.</p>
        </div>
        <div class="glass-card stat-card" style="text-align: left; padding: 2rem;">
          <i data-lucide="shield" style="color: var(--primary); margin-bottom: 1rem; width: 32px; height: 32px;"></i>
          <h4 style="margin-bottom: 0.5rem; font-size: 1.25rem;">Integrity</h4>
          <p style="color: var(--text-secondary); font-size: 0.9rem;">We build trust through transparency, honesty, and reliable delivery.</p>
        </div>
        <div class="glass-card stat-card" style="text-align: left; padding: 2rem;">
          <i data-lucide="users" style="color: var(--primary); margin-bottom: 1rem; width: 32px; height: 32px;"></i>
          <h4 style="margin-bottom: 0.5rem; font-size: 1.25rem;">Collaboration</h4>
          <p style="color: var(--text-secondary); font-size: 0.9rem;">We work closely with our clients as a unified team to achieve success.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Call to Action -->
  <section class="section cta" style="padding: 4rem 0; text-align: center;">
    <div class="container">
      <h2>Ready to Build Something Amazing?</h2>
      <p style="margin-bottom: 2rem; max-width: 600px; margin-left: auto; margin-right: auto;">Let's collaborate to turn your vision into a reality.</p>
      <a href="index.php#contact" class="btn btn-primary">Start Your Project <i data-lucide="arrow-right"></i></a>
    </div>
  </section>

<?php
// Include footer include
require_once __DIR__ . '/includes/footer.php';
?>
