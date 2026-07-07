<?php
/* ==========================================
   NEXYTIC DYNAMIC PHP PORTAL INDEX
   ========================================== */

// Include configurations
require_once __DIR__ . '/includes/config.php';

// Include header include
require_once __DIR__ . '/includes/header.php';
?>

  <!-- Hero Section -->
  <section class="hero" id="home">
    <div class="container">
      <div class="hero-content">
        <div class="hero-tag">
          <i data-lucide="sparkles" style="width: 14px; height: 14px;"></i>
          <span>Leading Software Agency</span>
        </div>
        <h1>Transforming Ideas into <span class="gradient-text">Powerful Digital Solutions</span></h1>
        <p>We build beautiful websites, scalable software, mobile applications, and AI-powered solutions that help businesses grow faster.</p>
        <div class="hero-actions">
          <a href="#contact" class="btn btn-primary">Start Your Project <i data-lucide="arrow-right"></i></a>
          <a href="#portfolio" class="btn btn-secondary">View Our Work</a>
        </div>
      </div>
      <div class="hero-visual">
        <div class="hero-image-wrapper">
          <img src="assets/images/hero_dashboard_mockup.png" alt="Nexytic Analytics Platform Mockup">
        </div>
        
        <!-- Floating Code Snippet Card -->
        <div class="code-floating-card">
<pre>
<span class="keyword">const</span> <span class="function">nexytic</span> = () => {
  <span class="keyword">return</span> {
    efficiency: <span class="string">'99.9%'</span>,
    techStack: <span class="string">'Cutting-Edge'</span>,
    growth: <span class="string">'Exponential'</span>
  };
};
</pre>
        </div>
      </div>
    </div>
  </section>

  <!-- Trusted By Marquee -->
  <section class="trusted-by">
    <p>Trusted By Forward-Thinking Teams Worldwide</p>
    <div class="marquee-container">
      <div class="marquee-content">
        <?php 
        // Display client logos in scrolling marquee (rendered twice for seamless looping)
        for ($i = 0; $i < 2; $i++):
            foreach ($config['clients'] as $client): 
        ?>
            <span><i data-lucide="<?php echo htmlspecialchars($client['icon']); ?>"></i> <?php echo htmlspecialchars($client['name']); ?></span>
        <?php 
            endforeach;
        endfor;
        ?>
      </div>
    </div>
  </section>

  <!-- About Nexytic -->
  <section class="about" id="about">
    <div class="container">
      <div class="about-grid">
        <div class="about-text">
          <span class="section-tag">About Us</span>
          <h3>Engineering the future of custom digital platforms</h3>
          <p>At Nexytic, we combine engineering excellence, user-centric UI/UX design, and scalable architecture to build products that deliver business growth. Our vision is to serve as the technological backbone for innovators, enterprise firms, and growth startups.</p>
          <p>Whether you require modern web architectures, cloud-native backend systems, multi-platform mobile apps, or integrated AI systems, we provide comprehensive engineering and maintenance from concept to deployment.</p>
        </div>
        <div class="stats-grid">
          <div class="glass-card stat-card">
            <div class="stat-number" data-count="120">0</div>
            <div class="stat-label">Projects Completed</div>
          </div>
          <div class="glass-card stat-card">
            <div class="stat-number" data-count="98">0</div>
            <div class="stat-label">Happy Clients (%)</div>
          </div>
          <div class="glass-card stat-card">
            <div class="stat-number" data-count="5">0</div>
            <div class="stat-label">Years of Experience</div>
          </div>
          <div class="glass-card stat-card">
            <div class="stat-number" data-count="20">0</div>
            <div class="stat-label">Technologies Used</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Services -->
  <section class="services" id="services">
    <div class="container">
      <div class="section-header">
        <span class="section-tag">Our Services</span>
        <h2>What We Do Best</h2>
        <p>Comprehensive engineering services designed to transform systems and accelerate business value.</p>
      </div>

      <div class="services-grid">
        <?php foreach ($config['services'] as $service): ?>
        <div class="glass-card service-card">
          <div class="service-icon"><i data-lucide="<?php echo htmlspecialchars($service['icon']); ?>"></i></div>
          <h3><?php echo htmlspecialchars($service['title']); ?></h3>
          <p><?php echo htmlspecialchars($service['desc']); ?></p>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- Our Process -->
  <section class="process" id="process">
    <div class="container">
      <div class="section-header">
        <span class="section-tag">Process</span>
        <h2>How We Work</h2>
        <p>A transparent, milestone-driven workflow designed to deliver systems reliably and quickly.</p>
      </div>

      <div class="timeline">
        <?php foreach ($config['process'] as $step): ?>
        <div class="timeline-item">
          <div class="timeline-dot"></div>
          <div class="timeline-number"><?php echo htmlspecialchars($step['num']); ?></div>
          <div class="timeline-content">
            <h3><?php echo htmlspecialchars($step['title']); ?></h3>
            <p><?php echo htmlspecialchars($step['desc']); ?></p>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- Portfolio -->
  <section class="portfolio" id="portfolio">
    <div class="container">
      <div class="section-header">
        <span class="section-tag">Case Studies</span>
        <h2>Our Featured Work</h2>
        <p>Explore some of the premium applications, websites, and business systems we have engineered.</p>
      </div>

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

  <!-- Technologies -->
  <section class="technologies">
    <div class="container">
      <div class="section-header">
        <span class="section-tag">Tech Stack</span>
        <h2>Engineered with Modern Technologies</h2>
        <p>We select robust and scalable programming tools, backend services, and hosting platforms to power your applications.</p>
      </div>
    </div>
    
    <div class="tech-carousel">
      <div class="tech-carousel-track">
        <?php 
        // Display tech items twice for seamless loop scrolling animation
        for ($i = 0; $i < 2; $i++):
            foreach ($config['technologies'] as $tech): 
        ?>
        <div class="tech-item">
          <i data-lucide="<?php echo htmlspecialchars($tech['icon']); ?>" style="color: <?php echo htmlspecialchars($tech['color']); ?>;"></i>
          <span><?php echo htmlspecialchars($tech['name']); ?></span>
        </div>
        <?php 
            endforeach;
        endfor;
        ?>
      </div>
    </div>
  </section>

  <!-- Why Choose Nexytic -->
  <section class="why-choose">
    <div class="container">
      <div class="section-header">
        <span class="section-tag">Value Proposition</span>
        <h2>Why Partner with Us</h2>
        <p>We go beyond coding. We ensure your product aligns with business strategy, functions securely, and loads instantly.</p>
      </div>

      <div class="why-choose-grid">
        <?php foreach ($config['why_choose'] as $item): ?>
        <div class="glass-card why-card">
          <div class="why-icon"><i data-lucide="<?php echo htmlspecialchars($item['icon']); ?>"></i></div>
          <h3><?php echo htmlspecialchars($item['title']); ?></h3>
          <p><?php echo htmlspecialchars($item['desc']); ?></p>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- Testimonials -->
  <section class="testimonials" id="testimonials">
    <div class="container">
      <div class="section-header">
        <span class="section-tag">Testimonials</span>
        <h2>What Our Clients Say</h2>
        <p>Real feedback from businesses and digital leaders who scaled their products with Nexytic.</p>
      </div>

      <div class="testimonials-grid">
        <?php foreach ($config['testimonials'] as $testimonial): ?>
        <div class="glass-card testimonial-card">
          <div>
            <div class="testimonial-stars">
              <?php for ($s = 0; $s < $testimonial['stars']; $s++): ?>
              <i data-lucide="star"></i>
              <?php endfor; ?>
            </div>
            <p class="testimonial-text">"<?php echo htmlspecialchars($testimonial['text']); ?>"</p>
          </div>
          <div class="testimonial-client">
            <img src="<?php echo htmlspecialchars($testimonial['avatar']); ?>" alt="<?php echo htmlspecialchars($testimonial['name']); ?>" class="client-avatar">
            <div class="client-info">
              <h4><?php echo htmlspecialchars($testimonial['name']); ?></h4>
              <span><?php echo htmlspecialchars($testimonial['role']); ?></span>
            </div>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- Pricing -->
  <section class="pricing" id="pricing">
    <div class="container">
      <div class="section-header">
        <span class="section-tag">Pricing Plans</span>
        <h2>Transparent Packages</h2>
        <p>Choose an engineering framework tailored to your business scale. Contact us for custom integration sizes.</p>
      </div>

      <div class="pricing-grid">
        <?php foreach ($config['pricing'] as $plan): ?>
        <div class="glass-card pricing-card <?php echo $plan['popular'] ? 'popular' : ''; ?>">
          <?php if ($plan['popular']): ?>
          <div class="popular-badge">Most Popular</div>
          <?php endif; ?>
          <div class="pricing-header">
            <span class="pricing-name"><?php echo htmlspecialchars($plan['name']); ?></span>
            <div class="pricing-price"><?php echo htmlspecialchars($plan['price']); ?><span><?php echo htmlspecialchars($plan['period']); ?></span></div>
            <p class="pricing-desc"><?php echo htmlspecialchars($plan['desc']); ?></p>
          </div>
          <ul class="pricing-features">
            <?php foreach ($plan['features'] as $feature): ?>
            <li><i data-lucide="check"></i> <?php echo htmlspecialchars($feature); ?></li>
            <?php endforeach; ?>
          </ul>
          <a href="#contact" class="btn <?php echo $plan['popular'] ? 'btn-primary' : 'btn-secondary'; ?>"><?php echo htmlspecialchars($plan['cta']); ?></a>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- FAQ Accordion -->
  <section class="faq" id="faq">
    <div class="container">
      <div class="section-header">
        <span class="section-tag">FAQ</span>
        <h2>Frequently Asked Questions</h2>
        <p>Get answers to common operational questions regarding development timelines, payments, and technologies.</p>
      </div>

      <div class="faq-list">
        <?php foreach ($config['faqs'] as $faq): ?>
        <div class="faq-item">
          <div class="faq-question">
            <span><?php echo htmlspecialchars($faq['q']); ?></span>
            <i data-lucide="plus" class="faq-icon"></i>
          </div>
          <div class="faq-answer">
            <p><?php echo htmlspecialchars($faq['a']); ?></p>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- Contact -->
  <section class="contact" id="contact">
    <div class="container">
      <div class="section-header">
        <span class="section-tag">Contact Us</span>
        <h2>Let's Build Something Exceptional</h2>
        <p>Ready to launch your project? Fill out our form, and our tech consulting team will reach out within 24 hours.</p>
      </div>

      <div class="contact-grid">
        <!-- Form -->
        <div class="glass-card contact-form-wrapper">
          <form class="contact-form" id="consultation-form">
            <div class="form-group">
              <label for="name">Your Name *</label>
              <input type="text" id="name" required placeholder="John Doe">
            </div>
            <div class="form-group">
              <label for="email">Email Address *</label>
              <input type="email" id="email" required placeholder="john@example.com">
            </div>
            <div class="form-group">
              <label for="phone">Phone Number</label>
              <input type="tel" id="phone" placeholder="+1 (555) 000-0000">
            </div>
            <div class="form-group">
              <label for="company">Company Name</label>
              <input type="text" id="company" placeholder="Acme Inc.">
            </div>
            <div class="form-group">
              <label for="service">Service Needed *</label>
              <select id="service" required>
                <option value="" disabled selected>Select a Service</option>
                <option value="website">Custom Website Development</option>
                <option value="webapp">Web Application Development</option>
                <option value="mobileapp">Mobile App Development</option>
                <option value="uiux">UI/UX Graphic Design</option>
                <option value="saas">SaaS Development</option>
                <option value="management">Business Management System</option>
                <option value="ai">AI Integration & APIs</option>
                <option value="other">Other Solution</option>
              </select>
            </div>
            <div class="form-group">
              <label for="budget">Project Budget *</label>
              <select id="budget" required>
                <option value="" disabled selected>Select Budget Range</option>
                <option value="starter">$1,000 - $3,000</option>
                <option value="mid">$3,000 - $10,000</option>
                <option value="enterprise">$10,000 - $30,000</option>
                <option value="custom">$30,000+ / Custom</option>
              </select>
            </div>
            <div class="form-group full-width">
              <label for="message">Project Description *</label>
              <textarea id="message" rows="5" required placeholder="Describe your project goals, key features, and timeline..."></textarea>
            </div>
            <div class="form-group full-width" style="margin-top: 1rem;">
              <button type="submit" class="btn btn-primary" style="width: 100%;">Get a Free Consultation <i data-lucide="send"></i></button>
            </div>
          </form>
        </div>

        <!-- Info details -->
        <div class="contact-info">
          <div class="info-item">
            <div class="info-icon"><i data-lucide="mail"></i></div>
            <div class="info-details">
              <h4>Email Us</h4>
              <p><a href="mailto:<?php echo htmlspecialchars($config['contact_email']); ?>"><?php echo htmlspecialchars($config['contact_email']); ?></a></p>
            </div>
          </div>

          <div class="info-item">
            <div class="info-icon"><i data-lucide="phone"></i></div>
            <div class="info-details">
              <h4>Call Us</h4>
              <p><a href="tel:<?php echo preg_replace('/[^0-9+]/', '', $config['contact_phone']); ?>"><?php echo htmlspecialchars($config['contact_phone']); ?></a></p>
            </div>
          </div>

          <div class="info-item">
            <div class="info-icon"><i data-lucide="map-pin"></i></div>
            <div class="info-details">
              <h4>Our Headquarters</h4>
              <p><?php echo nl2br(htmlspecialchars($config['contact_address'])); ?></p>
            </div>
          </div>

          <!-- Google Maps Static/Interactive Frame (Glass styled) -->
          <div class="map-placeholder">
            <div class="map-glow"></div>
            <!-- Embedded Google Map -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3152.970119102434!2d-122.4019808846819!3d37.792518479756625!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80858062828b03bf%3A0x6339178ec6f4dd51!2s100%20Pine%20St%2C%20San%20Francisco%2C%20CA%2094111!5e0!3m2!1sen!2sus!4v1625695000000!5m2!1sen!2sus" allowfullscreen="" loading="lazy"></iframe>
          </div>

          <div>
            <h4 style="font-size: 1.1rem; margin-bottom: 1rem;">Follow Our Updates</h4>
            <div class="social-links">
              <a href="<?php echo htmlspecialchars($config['social']['twitter']); ?>" class="social-link" aria-label="Nexytic on Twitter"><i data-lucide="twitter"></i></a>
              <a href="<?php echo htmlspecialchars($config['social']['linkedin']); ?>" class="social-link" aria-label="Nexytic on LinkedIn"><i data-lucide="linkedin"></i></a>
              <a href="<?php echo htmlspecialchars($config['social']['github']); ?>" class="social-link" aria-label="Nexytic on GitHub"><i data-lucide="github"></i></a>
              <a href="<?php echo htmlspecialchars($config['social']['instagram']); ?>" class="social-link" aria-label="Nexytic on Instagram"><i data-lucide="instagram"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

<?php
// Include footer include
require_once __DIR__ . '/includes/footer.php';
?>
