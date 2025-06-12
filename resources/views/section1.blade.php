<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Choose Your Website Sections</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        :root {
            --primary-gradient: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            --secondary-gradient: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
            --accent-color: #667eea;
            --text-dark: #2d3748;
            --text-light: #718096;
            --border-color: #e2e8f0;
            --shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            --shadow-hover: 0 20px 40px rgba(0, 0, 0, 0.15);
            --glow: 0 0 30px rgba(102, 126, 234, 0.3);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            min-height: 100vh;
            color: var(--text-dark);
            position: relative;
            overflow-x: hidden;
        }

        body::before {
            content: '';
            position: fixed;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(102, 126, 234, 0.05) 0%, transparent 70%);
            animation: float 20s ease-in-out infinite;
            z-index: -1;
        }

        @keyframes float {
            0%, 100% { transform: translate(0, 0) rotate(0deg); }
            33% { transform: translate(30px, -30px) rotate(120deg); }
            66% { transform: translate(-20px, 20px) rotate(240deg); }
        }

        .container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 2rem;
        }

        .header {
            text-align: center;
            margin-bottom: 4rem;
            position: relative;
        }

        .header::after {
            content: '';
            position: absolute;
            bottom: -20px;
            left: 50%;
            transform: translateX(-50%);
            width: 100px;
            height: 4px;
            background: var(--primary-gradient);
            border-radius: 2px;
        }

        .header h1 {
            font-size: 3.5rem;
            font-weight: 800;
            background: var(--primary-gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 1rem;
            position: relative;
        }

        .header p {
            font-size: 1.3rem;
            color: var(--text-light);
            max-width: 700px;
            margin: 0 auto;
            line-height: 1.6;
        }

        .progress-bar-container {
            background: white;
            border-radius: 50px;
            padding: 8px;
            margin-bottom: 3rem;
            box-shadow: var(--shadow);
            max-width: 500px;
            margin-left: auto;
            margin-right: auto;
        }

        .progress-bar {
            height: 12px;
            background: var(--primary-gradient);
            border-radius: 50px;
            width: 60%;
            transition: width 0.5s ease;
            position: relative;
            overflow: hidden;
        }

        .progress-bar::after {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.4), transparent);
            animation: shimmer 2s infinite;
        }

        @keyframes shimmer {
            0% { left: -100%; }
            100% { left: 100%; }
        }

        .filter-section {
            margin-bottom: 2rem;
            text-align: center;
        }

        .filter-buttons {
            display: flex;
            justify-content: center;
            gap: 1rem;
            flex-wrap: wrap;
            margin-bottom: 2rem;
        }

        .filter-btn {
            padding: 12px 24px;
            border: 2px solid var(--border-color);
            background: white;
            color: var(--text-dark);
            border-radius: 50px;
            cursor: pointer;
            transition: all 0.3s ease;
            font-weight: 500;
            position: relative;
            overflow: hidden;
        }

        .filter-btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: var(--primary-gradient);
            transition: left 0.3s ease;
            z-index: 1;
        }

        .filter-btn span {
            position: relative;
            z-index: 2;
        }

        .filter-btn:hover::before,
        .filter-btn.active::before {
            left: 0;
        }

        .filter-btn:hover span,
        .filter-btn.active span {
            color: white;
        }

        .filter-btn:hover {
            transform: translateY(-2px);
            box-shadow: var(--shadow);
        }

        .search-container {
            max-width: 400px;
            margin: 0 auto 3rem;
            position: relative;
        }

        .search-input {
            width: 100%;
            padding: 16px 50px 16px 20px;
            border: 2px solid var(--border-color);
            border-radius: 50px;
            font-size: 1.1rem;
            transition: all 0.3s ease;
            background: white;
        }

        .search-input:focus {
            outline: none;
            border-color: var(--accent-color);
            box-shadow: var(--glow);
        }

        .search-icon {
            position: absolute;
            right: 20px;
            top: 50%;
            transform: translateY(-50%);
            color: var(--text-light);
            font-size: 1.2rem;
        }

        .sections-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 2rem;
            margin-bottom: 3rem;
        }

        .section-card {
            background: white;
            border-radius: 20px;
            padding: 0;
            cursor: pointer;
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            border: 3px solid transparent;
            box-shadow: var(--shadow);
            position: relative;
            overflow: hidden;
            opacity: 0;
            transform: translateY(30px);
            animation: fadeInUp 0.6s ease forwards;
        }

        .section-card:nth-child(1) { animation-delay: 0.1s; }
        .section-card:nth-child(2) { animation-delay: 0.2s; }
        .section-card:nth-child(3) { animation-delay: 0.3s; }
        .section-card:nth-child(4) { animation-delay: 0.4s; }
        .section-card:nth-child(5) { animation-delay: 0.5s; }
        .section-card:nth-child(6) { animation-delay: 0.6s; }

        @keyframes fadeInUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .section-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: var(--primary-gradient);
            opacity: 0;
            transition: opacity 0.3s ease;
            z-index: 1;
        }

        .section-card:hover {
            transform: translateY(-15px) scale(1.02);
            box-shadow: var(--shadow-hover);
        }

        .section-card:hover::before {
            opacity: 0.1;
        }

        .section-card.selected {
            border-color: var(--accent-color);
            transform: translateY(-10px) scale(1.02);
            box-shadow: var(--glow), var(--shadow-hover);
        }

        .section-card.selected::before {
            opacity: 0.15;
        }

        .section-preview {
            height: 200px;
            background: var(--primary-gradient);
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 3rem;
            overflow: hidden;
        }

        .section-preview::after {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
            transition: left 0.5s ease;
        }

        .section-card:hover .section-preview::after {
            left: 100%;
        }

        .section-info {
            padding: 2rem;
            position: relative;
            z-index: 2;
        }

        .section-title {
            font-size: 1.5rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
            color: var(--text-dark);
        }

        .section-description {
            color: var(--text-light);
            line-height: 1.6;
            margin-bottom: 1rem;
        }

        .section-features {
            display: flex;
            gap: 0.5rem;
            flex-wrap: wrap;
        }

        .feature-tag {
            background: rgba(102, 126, 234, 0.1);
            color: var(--accent-color);
            padding: 4px 12px;
            border-radius: 20px;
            font-size: 0.85rem;
            font-weight: 500;
        }

        .selection-counter {
            position: fixed;
            bottom: 30px;
            right: 30px;
            background: var(--primary-gradient);
            color: white;
            width: 60px;
            height: 60px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            font-size: 1.2rem;
            box-shadow: var(--shadow-hover);
            z-index: 1000;
            transition: all 0.3s ease;
        }

        .selection-counter:hover {
            transform: scale(1.1);
        }

        .continue-section {
            text-align: center;
            margin-top: 3rem;
            padding: 2rem;
            background: white;
            border-radius: 20px;
            box-shadow: var(--shadow);
        }

        .continue-btn {
            background: var(--primary-gradient);
            color: white;
            border: none;
            padding: 16px 40px;
            border-radius: 50px;
            font-size: 1.2rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .continue-btn:disabled {
            opacity: 0.5;
            cursor: not-allowed;
            transform: none !important;
        }

        .continue-btn:not(:disabled):hover {
            transform: translateY(-3px);
            box-shadow: var(--shadow-hover);
        }

        .continue-btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(45deg, transparent, rgba(255,255,255,0.2), transparent);
            transform: translateX(-100%);
            transition: transform 0.6s ease;
        }

        .continue-btn:hover::before {
            transform: translateX(100%);
        }

        @media (max-width: 768px) {
            .header h1 {
                font-size: 2.5rem;
            }
            
            .sections-grid {
                grid-template-columns: 1fr;
                gap: 1.5rem;
            }
            
            .filter-buttons {
                gap: 0.5rem;
            }
            
            .filter-btn {
                padding: 10px 16px;
                font-size: 0.9rem;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1 class="w-75 d-flex mx-auto">Choose Your Sections for Home Page</h1>
            <p>Select the sections you want to include in your website. Mix and match to create the perfect layout for your needs.</p>
        </div>

        <div class="progress-bar-container">
            <div class="progress-bar"></div>
        </div>

        <div class="filter-section">
            <div class="filter-buttons">
                <button class="filter-btn active" data-filter="all">
                    <span><i class="fas fa-th"></i> All Sections</span>
                </button>
                <button class="filter-btn" data-filter="essential">
                    <span><i class="fas fa-star"></i> Essential</span>
                </button>
                <button class="filter-btn" data-filter="content">
                    <span><i class="fas fa-file-alt"></i> Content</span>
                </button>
                <button class="filter-btn" data-filter="business">
                    <span><i class="fas fa-briefcase"></i> Business</span>
                </button>
                <button class="filter-btn" data-filter="interactive">
                    <span><i class="fas fa-mouse-pointer"></i> Interactive</span>
                </button>
            </div>

            <div class="search-container">
                <input type="text" class="search-input" id="searchInput" placeholder="Search sections...">
                <i class="fas fa-search search-icon"></i>
            </div>
        </div>

        <div class="sections-grid" id="sectionsGrid">
            <!-- Sections will be dynamically generated -->
        </div>

        <div class="continue-section">
            <p class="mb-3">Selected <span id="selectedCount">0</span> sections</p>
            <a href="{{ route('hero-layout') }}" style="text-decoration: none;" class="continue-btn" id="continueBtn" disabled>
                <i class="fas fa-arrow-right me-2"></i>
                Continue with Selected Sections
            </a>
        </div>
    </div>

    <div class="selection-counter" id="selectionCounter">0</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        const sections = [
            {
                id: 'hero',
                name: 'Hero Section',
                category: 'essential',
                description: 'Eye-catching banner with your main message, call-to-action buttons, and stunning visuals to make a powerful first impression.',
                features: ['Responsive Design', 'Animation Effects', 'CTA Buttons'],
                icon: 'fas fa-rocket',
                gradient: 'linear-gradient(135deg, #667eea, #764ba2)'
            },
            {
                id: 'about',
                name: 'About Us',
                category: 'essential',
                description: 'Tell your story with compelling content, team photos, company values, and mission statement to build trust.',
                features: ['Team Showcase', 'Company Story', 'Values Display'],
                icon: 'fas fa-users',
                gradient: 'linear-gradient(135deg, #f093fb, #f5576c)'
            },
            {
                id: 'services',
                name: 'Services',
                category: 'business',
                description: 'Showcase your offerings with detailed service cards, pricing information, and feature comparisons.',
                features: ['Service Cards', 'Pricing Tables', 'Feature Lists'],
                icon: 'fas fa-concierge-bell',
                gradient: 'linear-gradient(135deg, #4facfe, #00f2fe)'
            },
            {
                id: 'portfolio',
                name: 'Portfolio',
                category: 'content',
                description: 'Display your best work with filterable galleries, project details, and case studies to impress visitors.',
                features: ['Image Gallery', 'Project Filters', 'Lightbox View'],
                icon: 'fas fa-images',
                gradient: 'linear-gradient(135deg, #43e97b, #38f9d7)'
            },
            {
                id: 'testimonials',
                name: 'Testimonials',
                category: 'business',
                description: 'Build credibility with customer reviews, ratings, and success stories in an attractive carousel format.',
                features: ['Review Carousel', 'Star Ratings', 'Customer Photos'],
                icon: 'fas fa-quote-right',
                gradient: 'linear-gradient(135deg, #fa709a, #fee140)'
            },
            {
                id: 'contact',
                name: 'Contact Us',
                category: 'essential',
                description: 'Make it easy for visitors to reach you with contact forms, location maps, and multiple contact methods.',
                features: ['Contact Form', 'Google Maps', 'Social Links'],
                icon: 'fas fa-envelope',
                gradient: 'linear-gradient(135deg, #667eea, #f093fb)'
            },
            {
                id: 'blog',
                name: 'Blog',
                category: 'content',
                description: 'Share insights and updates with a modern blog layout, categories, tags, and social sharing options.',
                features: ['Post Grid', 'Categories', 'Social Sharing'],
                icon: 'fas fa-blog',
                gradient: 'linear-gradient(135deg, #a8edea, #fed6e3)'
            },
            {
                id: 'faq',
                name: 'FAQ Section',
                category: 'content',
                description: 'Answer common questions with an expandable FAQ section to reduce support inquiries and improve UX.',
                features: ['Expandable Items', 'Search Function', 'Categories'],
                icon: 'fas fa-question-circle',
                gradient: 'linear-gradient(135deg, #ffecd2, #fcb69f)'
            },
            {
                id: 'pricing',
                name: 'Pricing Plans',
                category: 'business',
                description: 'Present your pricing options clearly with comparison tables, feature highlights, and subscription options.',
                features: ['Price Comparison', 'Feature Matrix', 'CTA Buttons'],
                icon: 'fas fa-tags',
                gradient: 'linear-gradient(135deg, #a1c4fd, #c2e9fb)'
            },
            {
                id: 'newsletter',
                name: 'Newsletter',
                category: 'interactive',
                description: 'Grow your subscriber base with attractive signup forms, incentives, and email capture functionality.',
                features: ['Signup Forms', 'Email Validation', 'Thank You Page'],
                icon: 'fas fa-newspaper',
                gradient: 'linear-gradient(135deg, #fad0c4, #ffd1ff)'
            },
            {
                id: 'team',
                name: 'Team Section',
                category: 'content',
                description: 'Introduce your team members with photos, bios, social profiles, and role descriptions.',
                features: ['Member Cards', 'Social Links', 'Role Descriptions'],
                icon: 'fas fa-user-friends',
                gradient: 'linear-gradient(135deg, #84fab0, #8fd3f4)'
            },
            {
                id: 'stats',
                name: 'Statistics',
                category: 'interactive',
                description: 'Showcase impressive numbers and achievements with animated counters and visual charts.',
                features: ['Animated Counters', 'Progress Bars', 'Achievement Icons'],
                icon: 'fas fa-chart-bar',
                gradient: 'linear-gradient(135deg, #ff9a9e, #fecfef)'
            }
        ];

        let selectedSections = [];

        function generateSectionCards() {
            const grid = document.getElementById('sectionsGrid');
            grid.innerHTML = '';
            
            sections.forEach((section, index) => {
                const card = document.createElement('div');
                card.className = 'section-card';
                card.dataset.sectionId = section.id;
                card.dataset.category = section.category;
                card.style.animationDelay = `${index * 0.1}s`;
                
                card.innerHTML = `
                    <div class="section-preview" style="background: ${section.gradient}">
                        <i class="${section.icon}"></i>
                    </div>
                    <div class="section-info">
                        <div class="section-title">${section.name}</div>
                        <div class="section-description">${section.description}</div>
                        <div class="section-features">
                            ${section.features.map(feature => `<span class="feature-tag">${feature}</span>`).join('')}
                        </div>
                    </div>
                `;

                card.addEventListener('click', () => toggleSection(section.id, card));
                grid.appendChild(card);
            });
        }

        function toggleSection(sectionId, cardElement) {
            const index = selectedSections.indexOf(sectionId);
            
            if (index > -1) {
                selectedSections.splice(index, 1);
                cardElement.classList.remove('selected');
            } else {
                selectedSections.push(sectionId);
                cardElement.classList.add('selected');
            }
            
            updateSelectionCounter();
            updateContinueButton();
        }

        function updateSelectionCounter() {
            const counter = document.getElementById('selectionCounter');
            const selectedCount = document.getElementById('selectedCount');
            
            counter.textContent = selectedSections.length;
            selectedCount.textContent = selectedSections.length;
            
            // Add pulse animation
            counter.style.transform = 'scale(1.2)';
            setTimeout(() => {
                counter.style.transform = 'scale(1)';
            }, 200);
        }

        function updateContinueButton() {
            const continueBtn = document.getElementById('continueBtn');
            continueBtn.disabled = selectedSections.length === 0;
        }

        // Filter functionality
        document.querySelectorAll('.filter-btn').forEach(btn => {
            btn.addEventListener('click', function() {
                document.querySelectorAll('.filter-btn').forEach(b => b.classList.remove('active'));
                this.classList.add('active');
                
                const filter = this.dataset.filter;
                filterSections(filter);
            });
        });

        function filterSections(filter) {
            const cards = document.querySelectorAll('.section-card');
            
            cards.forEach((card, index) => {
                const category = card.dataset.category;
                const shouldShow = filter === 'all' || category === filter;
                
                if (shouldShow) {
                    card.style.display = 'block';
                    setTimeout(() => {
                        card.style.opacity = '1';
                        card.style.transform = 'translateY(0)';
                    }, index * 50);
                } else {
                    card.style.opacity = '0';
                    card.style.transform = 'translateY(30px)';
                    setTimeout(() => {
                        card.style.display = 'none';
                    }, 300);
                }
            });
        }

        // Search functionality
        document.getElementById('searchInput').addEventListener('input', function() {
            const searchTerm = this.value.toLowerCase();
            const cards = document.querySelectorAll('.section-card');
            
            cards.forEach(card => {
                const section = sections.find(s => s.id === card.dataset.sectionId);
                const matches = section.name.toLowerCase().includes(searchTerm) ||
                               section.description.toLowerCase().includes(searchTerm) ||
                               section.features.some(f => f.toLowerCase().includes(searchTerm));
                
                if (matches) {
                    card.style.display = 'block';
                    card.style.opacity = '1';
                    card.style.transform = 'translateY(0)';
                } else {
                    card.style.opacity = '0';
                    card.style.transform = 'translateY(30px)';
                    setTimeout(() => {
                        card.style.display = 'none';
                    }, 300);
                }
            });
        });

        // Continue button functionality
        // document.getElementById('continueBtn').addEventListener('click', function() {
        //     if (selectedSections.length > 0) {
        //         console.log('Selected sections:', selectedSections);
        //         // Redirect to next step or show summary
        //         alert(`Great! You've selected ${selectedSections.length} sections. Proceeding to customization...`);
        //         // In a real application, you would redirect or proceed to the next step
        //         // window.location.href = '/customize?sections=' + selectedSections.join(',');
        //     }
        // });

        // Initialize the page
        document.addEventListener('DOMContentLoaded', function() {
            generateSectionCards();
            
            // Animate progress bar
            setTimeout(() => {
                document.querySelector('.progress-bar').style.width = '75%';
            }, 500);
        });
    </script>
</body>
</html>