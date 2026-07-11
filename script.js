/* ==========================================
   NEXYTIC DYNAMIC CLIENT-SIDE INTERACTIONS
   ========================================== */

document.addEventListener('DOMContentLoaded', () => {
  /* --- Theme Toggle --- */
  const themeToggle = document.getElementById('theme-toggle');
  const themeIcon = document.getElementById('theme-icon');
  
  // Set initial icon based on applied theme
  if (document.documentElement.getAttribute('data-theme') === 'dark') {
    themeIcon.setAttribute('data-lucide', 'sun');
  } else {
    themeIcon.setAttribute('data-lucide', 'moon');
  }

  // Register GSAP ScrollTrigger
  if (typeof gsap !== 'undefined' && typeof ScrollTrigger !== 'undefined') {
    gsap.registerPlugin(ScrollTrigger);
  }

  // Initialize Lucide Icons
  if (typeof lucide !== 'undefined') {
    lucide.createIcons();
  }

  if (themeToggle) {
    themeToggle.addEventListener('click', () => {
      const isDark = document.documentElement.getAttribute('data-theme') === 'dark';
      
      if (isDark) {
        document.documentElement.removeAttribute('data-theme');
        localStorage.setItem('theme', 'light');
        themeIcon.setAttribute('data-lucide', 'moon');
      } else {
        document.documentElement.setAttribute('data-theme', 'dark');
        localStorage.setItem('theme', 'dark');
        themeIcon.setAttribute('data-lucide', 'sun');
      }
      lucide.createIcons();
    });
  }

  /* --- Navigation & Header Effects --- */
  const header = document.getElementById('header');
  const navMenu = document.getElementById('nav-menu');
  const menuToggle = document.getElementById('menu-toggle');
  const menuToggleIcon = menuToggle.querySelector('i');

  window.addEventListener('scroll', () => {
    if (window.scrollY > 50) {
      header.classList.add('scrolled');
    } else {
      header.classList.remove('scrolled');
    }
  });

  // Mobile menu toggle
  menuToggle.addEventListener('click', () => {
    navMenu.classList.toggle('open');
    const isOpen = navMenu.classList.contains('open');
    
    // Change menu icon to close icon dynamically
    if (isOpen) {
      menuToggle.innerHTML = '<i data-lucide="x"></i>';
    } else {
      menuToggle.innerHTML = '<i data-lucide="menu"></i>';
    }
    lucide.createIcons();
  });

  // Close mobile menu when clicking nav links
  const navLinks = navMenu.querySelectorAll('a');
  navLinks.forEach(link => {
    link.addEventListener('click', () => {
      navMenu.classList.remove('open');
      menuToggle.innerHTML = '<i data-lucide="menu"></i>';
      lucide.createIcons();
    });
  });

  /* --- Portfolio Category Filter with GSAP --- */
  const filterButtons = document.querySelectorAll('.filter-btn');
  const portfolioCards = document.querySelectorAll('.portfolio-card');

  filterButtons.forEach(button => {
    button.addEventListener('click', () => {
      // Set active button
      filterButtons.forEach(btn => btn.classList.remove('active'));
      button.classList.add('active');

      const filterValue = button.getAttribute('data-filter');

      // Filter cards
      portfolioCards.forEach(card => {
        const category = card.getAttribute('data-category');
        
        if (filterValue === 'all' || category === filterValue) {
          gsap.killTweensOf(card);
          // Make sure it display flex/block and scale up
          gsap.set(card, { display: 'flex' });
          gsap.fromTo(card, 
            { opacity: 0, scale: 0.9 }, 
            { opacity: 1, scale: 1, duration: 0.4, ease: 'power2.out' }
          );
        } else {
          gsap.killTweensOf(card);
          gsap.to(card, {
            opacity: 0,
            scale: 0.9,
            duration: 0.3,
            ease: 'power2.in',
            onComplete: () => {
              card.style.display = 'none';
            }
          });
        }
      });
    });
  });

  /* --- FAQ Accordion --- */
  const faqItems = document.querySelectorAll('.faq-item');

  faqItems.forEach(item => {
    const question = item.querySelector('.faq-question');
    
    question.addEventListener('click', () => {
      const isActive = item.classList.contains('active');

      // Close all other items
      faqItems.forEach(el => {
        el.classList.remove('active');
        el.querySelector('.faq-icon').setAttribute('data-lucide', 'plus');
      });

      // Open clicked item if it wasn't active
      if (!isActive) {
        item.classList.add('active');
        item.querySelector('.faq-icon').setAttribute('data-lucide', 'x');
      }

      lucide.createIcons();
    });
  });

  /* --- Statistics Counter Animation --- */
  const statNumbers = document.querySelectorAll('.stat-number');

  statNumbers.forEach(stat => {
    const target = parseInt(stat.getAttribute('data-count'), 10);
    
    gsap.fromTo(stat, 
      { textContent: 0 }, 
      {
        textContent: target,
        duration: 2.5,
        ease: 'power2.out',
        snap: { textContent: 1 },
        scrollTrigger: {
          trigger: '.about',
          start: 'top 80%',
          toggleActions: 'play none none none'
        },
        onUpdate: function() {
          // Format text with a plus sign if needed
          if (target === 120 || target === 5 || target === 20) {
            stat.innerHTML = Math.floor(stat.textContent) + '+';
          } else if (target === 98) {
            stat.innerHTML = Math.floor(stat.textContent) + '%';
          }
        }
      }
    );
  });

  /* --- Contact Form & Toast Notifications --- */
  const consultationForm = document.getElementById('consultation-form');
  const toastContainer = document.getElementById('toast-container');

  const showToast = (message, type = 'success') => {
    const toast = document.createElement('div');
    toast.className = `toast ${type === 'error' ? 'error' : ''}`;
    
    const iconName = type === 'error' ? 'alert-circle' : 'check-circle';
    toast.innerHTML = `
      <i data-lucide="${iconName}"></i>
      <span>${message}</span>
    `;
    
    toastContainer.appendChild(toast);
    lucide.createIcons();

    // Auto-remove toast after 4 seconds
    setTimeout(() => {
      gsap.to(toast, {
        opacity: 0,
        y: -20,
        duration: 0.4,
        ease: 'power2.in',
        onComplete: () => toast.remove()
      });
    }, 4000);
  };

  consultationForm.addEventListener('submit', (e) => {
    e.preventDefault();

    const name = document.getElementById('name').value.trim();
    const email = document.getElementById('email').value.trim();
    const service = document.getElementById('service').value;
    const budget = document.getElementById('budget').value;
    const message = document.getElementById('message').value.trim();

    if (!name || !email || !service || !budget || !message) {
      showToast('Please fill out all required fields.', 'error');
      return;
    }

    // Simulate API request send
    const submitBtn = consultationForm.querySelector('button[type="submit"]');
    const originalText = submitBtn.innerHTML;
    
    submitBtn.disabled = true;
    submitBtn.innerHTML = 'Sending... <i data-lucide="loader" class="animate-spin"></i>';
    lucide.createIcons();

    setTimeout(() => {
      showToast('Thank you! Your request has been successfully sent. We will get back to you shortly.');
      consultationForm.reset();
      submitBtn.disabled = false;
      submitBtn.innerHTML = originalText;
      lucide.createIcons();
    }, 1500);
  });

  /* --- GSAP ScrollTrigger Animations --- */

  // Hero Section Load Animations
  gsap.from('.hero-tag', {
    y: -30,
    opacity: 0,
    duration: 0.8,
    ease: 'power3.out'
  });

  gsap.from('.hero h1', {
    y: 40,
    opacity: 0,
    duration: 1,
    delay: 0.2,
    ease: 'power3.out'
  });

  gsap.from('.hero p', {
    y: 30,
    opacity: 0,
    duration: 1,
    delay: 0.4,
    ease: 'power3.out'
  });

  gsap.from('.hero-actions', {
    y: 30,
    opacity: 0,
    duration: 1,
    delay: 0.6,
    ease: 'power3.out'
  });

  gsap.from('.hero-visual', {
    scale: 0.95,
    opacity: 0,
    duration: 1.2,
    delay: 0.4,
    ease: 'power3.out'
  });

  // Services Stagger Reveal
  gsap.from('.service-card', {
    y: 50,
    duration: 0.8,
    stagger: 0.1,
    ease: 'power2.out',
    scrollTrigger: {
      trigger: '.services',
      start: 'top 80%',
      toggleActions: 'play none none none'
    }
  });

  // Process Timeline Animating Steps & Auto-Scroll
  const timelineContainer = document.querySelector('.timeline');
  if (timelineContainer) {
    const timelineItems = document.querySelectorAll('.timeline-item');
    
    // Animate items in
    gsap.from(timelineItems, {
      y: 40,
      opacity: 0,
      duration: 0.8,
      stagger: 0.15,
      ease: 'power2.out',
      scrollTrigger: {
        trigger: '.process',
        start: 'top 80%',
        toggleActions: 'play none none none'
      }
    });

    // Auto-scroll functionality
    let scrollInterval;
    const startAutoScroll = () => {
      scrollInterval = setInterval(() => {
        if (!timelineContainer) return;
        
        // Check if we are at the end of the scrollable area
        // Added small tolerance (5px) for fractional pixel values
        if (Math.ceil(timelineContainer.scrollLeft + timelineContainer.clientWidth) >= timelineContainer.scrollWidth - 5) {
          timelineContainer.scrollTo({ left: 0, behavior: 'smooth' });
        } else {
          // Find the width of a single item to scroll by
          const firstItem = timelineItems[0];
          if (firstItem) {
            // Include flex gap approximately (2rem = ~32px)
            const itemWidth = firstItem.offsetWidth + 32;
            timelineContainer.scrollBy({ left: itemWidth, behavior: 'smooth' });
          }
        }
      }, 3500); // 3.5 seconds per slide
    };

    // Pause auto-scroll on hover or touch
    timelineContainer.addEventListener('mouseenter', () => clearInterval(scrollInterval));
    timelineContainer.addEventListener('mouseleave', startAutoScroll);
    timelineContainer.addEventListener('touchstart', () => clearInterval(scrollInterval), { passive: true });
    timelineContainer.addEventListener('touchend', startAutoScroll, { passive: true });

    // Initiate auto-scroll
    startAutoScroll();
  }

  // Portfolio Stagger Reveal
  gsap.from('.portfolio-card', {
    y: 50,
    opacity: 0,
    duration: 0.8,
    stagger: 0.15,
    ease: 'power2.out',
    scrollTrigger: {
      trigger: '.portfolio',
      start: 'top 80%',
      toggleActions: 'play none none none'
    }
  });

  // Why Choose Cards Stagger Reveal
  gsap.from('.why-card', {
    y: 40,
    opacity: 0,
    duration: 0.7,
    stagger: 0.08,
    ease: 'power2.out',
    scrollTrigger: {
      trigger: '.why-choose',
      start: 'top 80%',
      toggleActions: 'play none none none'
    }
  });

  // Testimonials Grid Stagger
  gsap.from('.testimonial-card', {
    y: 40,
    opacity: 0,
    duration: 0.8,
    stagger: 0.15,
    ease: 'power2.out',
    scrollTrigger: {
      trigger: '.testimonials',
      start: 'top 80%',
      toggleActions: 'play none none none'
    }
  });

  // Pricing Cards
  gsap.from('.pricing-card', {
    y: 50,
    opacity: 0,
    duration: 0.9,
    stagger: 0.15,
    ease: 'power2.out',
    scrollTrigger: {
      trigger: '.pricing',
      start: 'top 80%',
      toggleActions: 'play none none none'
    }
  });
});
