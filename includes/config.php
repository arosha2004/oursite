<?php
/* ==========================================
   NEXYTIC WEBSITE CONFIGURATION DATA
   ========================================== */

$config = [
    // Site Info & Metadata
    'site_name' => 'Nexytic',
    'meta_title' => 'Nexytic | Premium Software Development & Digital Solutions',
    'meta_description' => 'Nexytic is a modern software development agency specializing in custom websites, web/mobile applications, SaaS platforms, and AI-powered solutions for growth.',
    'meta_keywords' => 'Software development company, custom websites, SaaS development, UI/UX design, AI integration, mobile apps, Nexytic',
    'contact_email' => 'hello@nexytic.com',
    'contact_phone' => '+1 (800) 555-6789',
    'contact_address' => '100 Pine Street, Suite 1250, San Francisco, CA 94111',
    'social' => [
        'twitter' => '#',
        'linkedin' => '#',
        'github' => '#',
        'instagram' => '#'
    ],

    // Client marquee partners
    'clients' => [
        ['name' => 'Acme Corp', 'icon' => 'globe'],
        ['name' => 'Apex Systems', 'icon' => 'zap'],
        ['name' => 'Pulse AI', 'icon' => 'cpu'],
        ['name' => 'Stellar Soft', 'icon' => 'layers'],
        ['name' => 'Veloce Solutions', 'icon' => 'activity'],
        ['name' => 'Aether Labs', 'icon' => 'compass'],
    ],

    // Services
    'services' => [
        [
            'icon' => 'layout',
            'title' => 'Custom Website Development',
            'desc' => 'Stunning, highly responsive, and interactive landing pages and corporate sites built for business engagement.'
        ],
        [
            'icon' => 'code-2',
            'title' => 'Web App Development',
            'desc' => 'Complex, highly secure single-page web applications using cutting edge frontends and resilient backends.'
        ],
        [
            'icon' => 'smartphone',
            'title' => 'Mobile App Development',
            'desc' => 'Native-level multi-platform mobile apps designed for smooth gestures and high-performance operations.'
        ],
        [
            'icon' => 'palette',
            'title' => 'UI/UX Design',
            'desc' => 'User experiences mapped to behavioral trends, boasting clean styling guides and fluid layouts.'
        ],
        [
            'icon' => 'database',
            'title' => 'SaaS Development',
            'desc' => 'Multi-tenant architectures, secure user subscriptions, payment setups, and interactive client spaces.'
        ],
        [
            'icon' => 'shopping-cart',
            'title' => 'E-commerce Solutions',
            'desc' => 'Custom online commerce storefronts with fast checkouts, payment systems, inventory syncs, and panels.'
        ],
        [
            'icon' => 'bar-chart-3',
            'title' => 'Management Systems',
            'desc' => 'Custom workflow optimization tools, healthcare records dashboards, hotel reservation panels, and analytics dashboards.'
        ],
        [
            'icon' => 'bot',
            'title' => 'AI Integration',
            'desc' => 'Connect intelligence systems, natural language bots, predictive algorithms, and semantic engines into your processes.'
        ],
        [
            'icon' => 'git-branch',
            'title' => 'API Development',
            'desc' => 'Build and document secure, fast, and structured APIs for custom internal services and user integrations.'
        ],
        [
            'icon' => 'cloud',
            'title' => 'Cloud Solutions',
            'desc' => 'Design modern container microservices, load balances, database setups, and cloud deployments on top infra.'
        ],
        [
            'icon' => 'shield-check',
            'title' => 'Maintenance & Support',
            'desc' => 'Continuous status checks, database security upgrades, server patches, and responsive bug fixing solutions.'
        ],
        [
            'icon' => 'gauge',
            'title' => 'SEO & Performance',
            'desc' => 'Achieve high speed scores, optimized core metrics, and SEO settings for organic user acquisition.'
        ]
    ],

    // Process Timeline
    'process' => [
        [
            'num' => '01',
            'title' => 'Discovery',
            'desc' => 'We analyze your business context, operational challenges, and end-user goals to establish technical scopes.'
        ],
        [
            'num' => '02',
            'title' => 'Planning',
            'desc' => 'Creating architectural plans, detailing schemas, framing timelines, and preparing product roadmaps.'
        ],
        [
            'num' => '03',
            'title' => 'Design',
            'desc' => 'Drafting layout options, interactive mockups, high-fidelity components, and creating the design identity.'
        ],
        [
            'num' => '04',
            'title' => 'Development',
            'desc' => 'Writing clean, production-ready systems using modern frameworks and standard coding guidelines.'
        ],
        [
            'num' => '05',
            'title' => 'Testing',
            'desc' => 'Running functional checks, performance profiling, security tests, and cross-device interface tests.'
        ],
        [
            'num' => '06',
            'title' => 'Deployment',
            'desc' => 'Configuring secure hosting engines, production setups, database pipelines, and releasing to live servers.'
        ],
        [
            'num' => '07',
            'title' => 'Support',
            'desc' => 'Ongoing monitoring, server updates, regular backups, and feature improvements as your user base expands.'
        ]
    ],

    // Case Studies / Projects
    'projects' => [
        [
            'category_slug' => 'ecommerce',
            'category_name' => 'E-commerce',
            'title' => 'Apex Storefront Solutions',
            'desc' => 'High-speed modular online retail platform with live inventory management, cart systems, and secure payments integration.',
            'image' => 'assets/images/portfolio_ecommerce.png',
            'tech' => ['Next.js', 'Stripe', 'PostgreSQL', 'Tailwind']
        ],
        [
            'category_slug' => 'management',
            'category_name' => 'Hospital Management',
            'title' => 'Zenith Healthcare Suite',
            'desc' => 'Secure operations portal for modern medical facilities. Handles booking schedules, patient logs, and staff assignments.',
            'image' => 'assets/images/portfolio_dashboard.png',
            'tech' => ['React', 'Laravel', 'MySQL', 'AWS']
        ],
        [
            'category_slug' => 'websites',
            'category_name' => 'Hotel & Booking',
            'title' => 'Aura Booking Portal',
            'desc' => 'High-end booking application with instant room availability checks, interactive calendar schedules, and notifications.',
            'image' => 'assets/images/portfolio_mobile.png',
            'tech' => ['React', 'Python', 'PostgreSQL', 'AWS']
        ],
        [
            'category_slug' => 'saas',
            'category_name' => 'SaaS Platform',
            'title' => 'Novus Analytics Panel',
            'desc' => 'Analytical dashboard processing high-frequency data inputs into clear trends, visual reports, and data lists.',
            'image' => 'assets/images/hero_dashboard_mockup.png',
            'tech' => ['TypeScript', 'Vue', 'Node.js', 'MongoDB']
        ]
    ],

    // Tech Stack list
    'technologies' => [
        ['name' => 'HTML5', 'icon' => 'html5', 'color' => '#e34c26'],
        ['name' => 'CSS3', 'icon' => 'code', 'color' => '#264de4'],
        ['name' => 'JavaScript', 'icon' => 'file-json-2', 'color' => '#f7df1e'],
        ['name' => 'TypeScript', 'icon' => 'file-code', 'color' => '#3178c6'],
        ['name' => 'React', 'icon' => 'atom', 'color' => '#61dafb'],
        ['name' => 'Next.js', 'icon' => 'layers', 'color' => '#ffffff'],
        ['name' => 'Vue.js', 'icon' => 'box', 'color' => '#4fc08d'],
        ['name' => 'Node.js', 'icon' => 'server', 'color' => '#339933'],
        ['name' => 'PHP', 'icon' => 'terminal', 'color' => '#777bb4'],
        ['name' => 'Laravel', 'icon' => 'package', 'color' => '#ff2d20'],
        ['name' => 'Python', 'icon' => 'binary', 'color' => '#3776ab'],
        ['name' => 'Flutter', 'icon' => 'smartphone', 'color' => '#02569b'],
        ['name' => 'Firebase', 'icon' => 'flame', 'color' => '#ffca28'],
        ['name' => 'MySQL', 'icon' => 'database', 'color' => '#00758f'],
        ['name' => 'PostgreSQL', 'icon' => 'database', 'color' => '#336791'],
        ['name' => 'MongoDB', 'icon' => 'hard-drive', 'color' => '#47a248'],
        ['name' => 'AWS', 'icon' => 'cloud', 'color' => '#ff9900'],
        ['name' => 'Docker', 'icon' => 'container', 'color' => '#2496ed'],
        ['name' => 'Git', 'icon' => 'git-commit', 'color' => '#f05032'],
        ['name' => 'Figma', 'icon' => 'figma', 'color' => '#f24e1e'],
    ],

    // Why Choose Us
    'why_choose' => [
        [
            'icon' => 'zap',
            'title' => 'Fast Delivery',
            'desc' => 'Agile sprints and optimized structures mean launching clean applications with quick, predictable turnarounds.'
        ],
        [
            'icon' => 'check-square',
            'title' => 'Clean Code',
            'desc' => 'Following strict style guides, formatting conventions, and robust commenting systems for future maintainability.'
        ],
        [
            'icon' => 'layout-grid',
            'title' => 'Modern Design',
            'desc' => 'Stunning aesthetic visual designs tailored to contemporary digital patterns and layout trends.'
        ],
        [
            'icon' => 'lock',
            'title' => 'Secure Applications',
            'desc' => 'Ensuring data encryptions, user token authentications, database protections, and secure setups.'
        ],
        [
            'icon' => 'monitor',
            'title' => 'Responsive Layouts',
            'desc' => 'Perfect rendering on any viewport. Fluid sizing structures optimized for smartphones, tablets, and computers.'
        ],
        [
            'icon' => 'search',
            'title' => 'SEO Engineered',
            'desc' => 'Ensuring semantic code layouts, fast loading metrics, page tags, and keywords for search queries.'
        ],
        [
            'icon' => 'git-merge',
            'title' => 'Scalable Systems',
            'desc' => 'Engineering services designed to handle increasing visitor numbers, queries, and server processes seamlessly.'
        ],
        [
            'icon' => 'life-buoy',
            'title' => 'Lifetime Support',
            'desc' => 'We provide long-term application updates, monitoring options, server security reviews, and direct help desk access.'
        ],
        [
            'icon' => 'dollar-sign',
            'title' => 'Affordable Value',
            'desc' => 'Pricing packages sized clearly according to system targets. No unexpected backend fees or setup costs.'
        ],
        [
            'icon' => 'users',
            'title' => 'Experienced Team',
            'desc' => 'Full-stack developers, skilled visual designers, and system architects working directly to realize your projects.'
        ]
    ],

    // Testimonials
    'testimonials' => [
        [
            'stars' => 5,
            'text' => 'Nexytic engineered our custom billing application from scratch. The interface looks incredible, and the API speeds are outstanding. They are our go-to team.',
            'avatar' => 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?fit=crop&w=150&h=150',
            'name' => 'David Carter',
            'role' => 'Director of Tech, Pulse AI'
        ],
        [
            'stars' => 5,
            'text' => 'The storefront built by Nexytic increased our checkout conversion rate by 34%. Sizing changes are fluid, and loading speeds are under a second.',
            'avatar' => 'https://images.unsplash.com/photo-1494790108377-be9c29b29330?fit=crop&w=150&h=150',
            'name' => 'Sarah Jenkins',
            'role' => 'Founder, Aura Retail'
        ],
        [
            'stars' => 5,
            'text' => 'Outstanding communication throughout. Their timeline process mapped stages clearly. Our hospital booking tool launched on time without issues.',
            'avatar' => 'https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?fit=crop&w=150&h=150',
            'name' => 'Marcus Vance',
            'role' => 'Operations Head, Zenith Care'
        ]
    ],

    // Pricing Packages
    'pricing' => [
        [
            'name' => 'Starter Website',
            'price' => '$1,499',
            'period' => ' / one-time',
            'popular' => false,
            'desc' => 'Perfect for small businesses, restaurants, and founders looking to establish a highly professional digital landing portal.',
            'cta' => 'Get Started',
            'features' => [
                '5 Premium custom pages',
                'Fully responsive layout',
                'Contact form integration',
                'Basic SEO Optimization',
                '3 Months post-launch support'
            ]
        ],
        [
            'name' => 'Business Website',
            'price' => '$3,499',
            'period' => ' / one-time',
            'popular' => true,
            'desc' => 'Optimized for corporate firms, hotel systems, and dynamic websites needing inventory checkouts or portals.',
            'cta' => 'Get Started',
            'features' => [
                'Up to 15 custom pages',
                'Custom Admin dashboards',
                'E-commerce/Booking setup',
                'Complete CMS Integration',
                'Advanced SEO & Speed setup',
                '6 Months post-launch support'
            ]
        ],
        [
            'name' => 'Enterprise Solution',
            'price' => 'Custom Price',
            'period' => '',
            'popular' => false,
            'desc' => 'Custom enterprise solutions, SaaS platforms, high-frequency analytical dashboards, and AI automation systems.',
            'cta' => 'Inquire Now',
            'features' => [
                'Multi-tenant SaaS architectures',
                'Custom AI/API integrations',
                'Dedicated cloud hosting setups',
                'Premium level security shields',
                '24/7 Priority support hotline',
                'SLA agreements'
            ]
        ]
    ],

    // FAQ Accordion
    'faqs' => [
        [
            'q' => 'What technologies do you use for web development?',
            'a' => 'We primarily construct applications using HTML5, CSS3, JavaScript, TypeScript, React, Next.js, and Vue on the front end. Our backends are powered by Node.js, Python (Django/FastAPI), PHP (Laravel), with PostgreSQL, MySQL, and MongoDB for database services, hosted securely on AWS or Docker containers.'
        ],
        [
            'q' => 'How long does it take to build a custom website?',
            'a' => 'A standard starter website typically takes between 2 to 4 weeks. High-end e-commerce dashboards or custom SaaS software projects take 6 to 12 weeks depending on database sizes, custom payment models, and specific API integrations.'
        ],
        [
            'q' => 'Do you provide hosting and server setup?',
            'a' => 'Yes, we completely set up and configure your applications on premium cloud servers (AWS, DigitalOcean, or Vercel), map domain routing, set up secure database storage, configure firewall layers, and deploy SSL certificates.'
        ],
        [
            'q' => 'Will my website look good on mobile devices?',
            'a' => 'Absolutely. Every application and page we build follows a mobile-first responsive grid system. We test the interface layouts across various tablet sizes and iPhone/Android viewports before releasing to live servers.'
        ],
        [
            'q' => 'Do you provide maintenance and updates post-launch?',
            'a' => 'Yes, all packages include post-launch warranty support. We also provide ongoing monthly support contracts that cover continuous uptime audits, security patches, regular database backups, and custom feature updates.'
        ]
    ]
];
