<?php
/* ==========================================
   PORTFOLIO PAGE
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
        <i data-lucide="briefcase" style="width: 14px; height: 14px;"></i>
        <span>Our Work</span>
      </div>
      <h1>Our <span class="gradient-text">Portfolio</span></h1>
      <p style="max-width: 600px; margin: 0 auto;">Explore some of the premium applications, websites, and business systems we have engineered.</p>
    </div>
  </section>

  <!-- Portfolio -->
  <section class="portfolio" id="portfolio" style="padding-top: 0;">
    <div class="container">
      <!-- Filters -->
      <div class="portfolio-filters">
        <button class="filter-btn active" data-filter="all">All Projects</button>
        <button class="filter-btn" data-filter="websites">Websites</button>
        <button class="filter-btn" data-filter="ecommerce">E-commerce</button>
        <button class="filter-btn" data-filter="saas">SaaS Products</button>
        <button class="filter-btn" data-filter="management">Management Systems</button>
      </div>

      <!-- Grid -->
      <div class="portfolio-grid">
        <?php foreach ($config['projects'] as $project): ?>
        <div class="portfolio-card" data-category="<?php echo htmlspecialchars($project['category_slug']); ?>">
          <div class="portfolio-img-wrapper">
            <img src="<?php echo htmlspecialchars($project['image']); ?>" alt="<?php echo htmlspecialchars($project['title']); ?>">
          </div>
          <div class="portfolio-info">
            <div class="portfolio-meta">
              <span class="portfolio-category"><?php echo htmlspecialchars($project['category_name']); ?></span>
            </div>
            <a href="#" class="portfolio-title"><?php echo htmlspecialchars($project['title']); ?></a>
            <p class="portfolio-desc"><?php echo htmlspecialchars($project['desc']); ?></p>
            <div class="portfolio-tech">
              <?php foreach ($project['tech'] as $techItem): ?>
              <span><?php echo htmlspecialchars($techItem); ?></span>
              <?php endforeach; ?>
            </div>
          </div>
        </div>
        <?php endforeach; ?>
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
