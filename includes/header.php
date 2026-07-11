<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo htmlspecialchars($config['meta_title']); ?></title>
  
  <!-- SEO Meta Tags -->
  <meta name="description" content="<?php echo htmlspecialchars($config['meta_description']); ?>">
  <meta name="keywords" content="<?php echo htmlspecialchars($config['meta_keywords']); ?>">
  <meta name="author" content="<?php echo htmlspecialchars($config['site_name']); ?>">
  
  <!-- Open Graph / Social Meta Tags -->
  <meta property="og:type" content="website">
  <meta property="og:title" content="<?php echo htmlspecialchars($config['meta_title']); ?>">
  <meta property="og:description" content="<?php echo htmlspecialchars($config['meta_description']); ?>">
  <meta property="og:url" content="https://nexytic.com">
  <meta property="og:image" content="assets/images/hero_dashboard_mockup.png">

  <!-- Stylesheet -->
  <link rel="stylesheet" href="styles.css">

  <!-- Lucide Icons CDN -->
  <script src="https://unpkg.com/lucide@latest"></script>
</head>
<body>

  <!-- Ambient Background Floating Shapes -->
  <div class="ambient-bg">
    <div class="blob blob-1"></div>
    <div class="blob blob-2"></div>
    <div class="blob blob-3"></div>
  </div>

  <!-- Header -->
  <header id="header">
    <div class="container">
      <a href="#" class="logo-area">
        <div class="logo-icon">N</div>
        <span><?php echo htmlspecialchars($config['site_name']); ?></span>
      </a>
      
      <nav id="nav-menu">
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="index.php#services">Services</a></li>
          <li><a href="portfolio.php">Portfolio</a></li>
          <li><a href="index.php#pricing">Pricing</a></li>
          <li><a href="index.php#faq">FAQ</a></li>
          <li><a href="index.php#contact">Contact</a></li>
        </ul>
      </nav>

      <div style="display: flex; align-items: center; gap: 1rem;">
        <a href="#contact" class="btn btn-primary" style="padding: 0.6rem 1.5rem; font-size: 0.85rem;">Start Project</a>
        <button class="menu-toggle" id="menu-toggle" aria-label="Toggle Navigation">
          <i data-lucide="menu"></i>
        </button>
      </div>
    </div>
  </header>
