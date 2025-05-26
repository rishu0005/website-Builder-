@extends('main-layout')
@section('title', 'Select Page')

@section('style')
<style>
        

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: var(--bg-primary);
            color: var(--text-primary);
            overflow-x: hidden;
        }

        /* Animated Background */
        .add-pages {
            min-height: 100vh;
            padding: 120px 0;
            position: relative;
            background: var(--bg-primary);
        }

        .add-pages::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: 
                radial-gradient(circle at 20% 50%, rgba(102, 126, 234, 0.1) 0%, transparent 50%),
                radial-gradient(circle at 80% 20%, rgba(118, 75, 162, 0.1) 0%, transparent 50%),
                radial-gradient(circle at 40% 80%, rgba(240, 147, 251, 0.1) 0%, transparent 50%);
            animation: backgroundMove 20s ease-in-out infinite;
        }

        @keyframes backgroundMove {
            0%, 100% { opacity: 1; }
            50% { opacity: 0.8; }
        }

        /* Header Section */
        .header-section {
            text-align: center;
            margin-bottom: 80px;
            position: relative;
            z-index: 2;
        }

        .header-section h1 {
            font-size: 3.5rem;
            font-weight: 800;
            background: var(--primary-gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 20px;
            line-height: 1.2;
            animation: slideInUp 1s ease-out;
        }

        .header-section p {
            font-size: 1.2rem;
            color: var(--text-secondary);
            max-width: 600px;
            margin: 0 auto 30px;
            line-height: 1.6;
            animation: slideInUp 1s ease-out 0.2s both;
        }

        .selection-counter {
            display: inline-flex;
            align-items: center;
            gap: 12px;
            background: var(--bg-card);
            backdrop-filter: blur(20px);
            padding: 15px 25px;
            border-radius: 50px;
            box-shadow: var(--shadow-lg);
            border: 1px solid rgba(255, 255, 255, 0.2);
            animation: slideInUp 1s ease-out 0.4s both;
        }

        .counter-icon {
            width: 40px;
            height: 40px;
            background: var(--primary-gradient);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: bold;
            transition: transform 0.3s ease;
        }

        .counter-text {
            font-weight: 600;
            color: var(--text-primary);
        }

        /* Page Cards Grid */
        .pages-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 30px;
            margin-bottom: 60px;
            position: relative;
            z-index: 2;
            padding:30px;
        }

        .page-card {
            background: var(--bg-card);
            backdrop-filter: blur(20px);
            border-radius: 20px;
            padding: 30px;
            text-align: center;
            cursor: pointer;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            border: 2px solid transparent;
            box-shadow: var(--shadow-card);
            position: relative;
            overflow: hidden;
            opacity: 0;
            transform: translateY(30px);
            animation: slideInUp 0.8s ease-out forwards;
        }

        .page-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: var(--glass-gradient);
            opacity: 0;
            transition: opacity 0.3s ease;
            border-radius: 20px;
        }

        .page-card:hover::before {
            opacity: 1;
        }

        .page-card:hover {
            transform: translateY(-10px) scale(1.02);
            box-shadow: var(--shadow-hover);
            border-color: var(--primary-color);
        }

        .page-card.selected {
            background: linear-gradient(135deg, rgba(102, 126, 234, 0.1) 0%, rgba(118, 75, 162, 0.1) 100%);
            border-color: var(--primary-color);
            box-shadow: var(--shadow-glow);
            transform: translateY(-5px);
        }

        .page-card.selected::after {
            content: '✓';
            position: absolute;
            top: 15px;
            right: 15px;
            width: 30px;
            height: 30px;
            background: var(--primary-gradient);
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            font-size: 14px;
            animation: checkMarkPop 0.3s ease-out;
        }

        @keyframes checkMarkPop {
            0% { transform: scale(0) rotate(180deg); }
            100% { transform: scale(1) rotate(0deg); }
        }

        .page-card-image {
            width: 120px;
            height: 120px;
            margin: 0 auto 25px;
            background: rgba(255, 255, 255, 0.8);
            border-radius: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            overflow: hidden;
            transition: all 0.3s ease;
        }

        .page-card:hover .page-card-image {
            transform: scale(1.1);
            background: rgba(255, 255, 255, 1);
        }

        .page-card-image img {
            max-width: 80px;
            max-height: 80px;
            object-fit: contain;
            transition: transform 0.3s ease;
        }

        .page-card:hover .page-card-image img {
            transform: scale(1.1);
        }

        .page-title {
            font-size: 1.25rem;
            font-weight: 700;
            color: var(--text-primary);
            margin-bottom: 8px;
            transition: color 0.3s ease;
        }

        .page-card:hover .page-title {
            color: var(--primary-color);
        }

        .page-badge {
            display: inline-block;
            padding: 6px 12px;
            border-radius: 20px;
            font-size: 0.75rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            margin-top: 5px;
        }

        .badge-required {
            background: var(--error-gradient);
            color: white;
        }

        .badge-popular {
            background: var(--success-gradient);
            color: white;
        }

        .badge-recommended {
            background: var(--warning-gradient);
            color: white;
        }

        /* Submit Button */
        .submit-section {
            text-align: center;
            position: relative;
            z-index: 2;
        }

        .btn-next {
            background: var(--primary-gradient);
            border: none;
            color: white;
            padding: 18px 50px;
            font-size: 1.1rem;
            font-weight: 700;
            border-radius: 50px;
            cursor: pointer;
            transition: all 0.4s ease;
            box-shadow: var(--shadow-lg);
            text-transform: uppercase;
            letter-spacing: 1px;
            position: relative;
            overflow: hidden;
        }

        .btn-next::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: left 0.5s;
        }

        .btn-next:hover::before {
            left: 100%;
        }

        .btn-next:hover {
            background: var(--secondary-gradient);
            transform: translateY(-3px);
            box-shadow: var(--shadow-xl);
        }

        .btn-next:active {
            transform: translateY(-1px);
        }

        /* Progress Indicator */
        .progress-indicator {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 4px;
            background: rgba(255, 255, 255, 0.2);
            z-index: 1000;
        }

        .progress-bar {
            height: 100%;
            background: var(--primary-gradient);
            width: 0%;
            transition: width 0.3s ease;
        }

        /* Animations */
        @keyframes slideInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .page-card:nth-child(1) { animation-delay: 0.1s; }
        .page-card:nth-child(2) { animation-delay: 0.15s; }
        .page-card:nth-child(3) { animation-delay: 0.2s; }
        .page-card:nth-child(4) { animation-delay: 0.25s; }
        .page-card:nth-child(5) { animation-delay: 0.3s; }
        .page-card:nth-child(6) { animation-delay: 0.35s; }
        .page-card:nth-child(7) { animation-delay: 0.4s; }
        .page-card:nth-child(8) { animation-delay: 0.45s; }
        .page-card:nth-child(9) { animation-delay: 0.5s; }
        .page-card:nth-child(10) { animation-delay: 0.55s; }
        .page-card:nth-child(11) { animation-delay: 0.6s; }
        .page-card:nth-child(12) { animation-delay: 0.65s; }

        /* Responsive Design */
        @media (max-width: 768px) {
            .add-pages {
                padding: 60px 20px;
            }

            .header-section h1 {
                font-size: 2.5rem;
            }

            .pages-grid {
                grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
                gap: 20px;
            }

            .page-card {
                padding: 25px;
            }

            .selection-counter {
                padding: 12px 20px;
            }
        }

        @media (max-width: 480px) {
            .header-section h1 {
                font-size: 2rem;
            }

            .pages-grid {
                grid-template-columns: 1fr;
                gap: 15px;
            }

            .page-card {
                padding: 20px;
            }
        }

</style>
@endsection

@section('content')

<div class="progress-indicator">
        <div class="progress-bar" id="progressBar"></div>
    </div>

    <section class="add-pages">
        <div class="container">
            <!-- Header Section -->
            <div class="header-section">
                <h1>Build Your Perfect Website</h1>
                <p>Select the pages you need for your website. Choose up to 5 pages included in your plan, or add more for ₹5,451 each. Click on any page to select or deselect it.</p>
                
                <div class="selection-counter">
                    <div class="counter-icon" id="counterIcon">
                        <span id="selectedCount">0</span>
                    </div>
                    <div class="counter-text">
                        <strong id="countText">0 of 5 pages selected</strong>
                    </div>
                </div>
            </div>

            <!-- Pages Grid -->
            <form id="pageSelectionForm">
                <div class="pages-grid" id="pagesGrid">
                    <!-- Pages will be generated by JavaScript -->
                </div>

                <div class="submit-section">
                    <button type="submit" class="btn-next" id="nextBtn">
                        <i class="fas fa-arrow-right"></i> Continue to Next Step
                    </button>
                </div>
            </form>
        </div>
    </section>

<!-- Hero Section End -->

@endsection

@section('script')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        const pages = [
            {id: 'home', label: 'Home', img: 'https://wordpress.com/calypso/images/home-page-a60466fcbc131c84f248.svg', badge: 'Required', required: true},
            {id: 'about', label: 'About', img: 'https://wordpress.com/calypso/images/about-page-0ce11fb25f0ddca544da.svg', badge: 'Popular'},
            {id: 'contact', label: 'Contact', img: 'https://wordpress.com/calypso/images/contact-page-ef75a906f1368869d8b0.svg', badge: 'Popular'},
            {id: 'blog', label: 'Blog', img: 'https://wordpress.com/calypso/images/blog-page-dc188f7402830e650853.svg', badge: 'Popular'},
            {id: 'gallery', label: 'Photo Gallery', img: 'https://wordpress.com/calypso/images/photo-gallery-639262520bc2121493bc.svg'},
            {id: 'services', label: 'Services', img: 'https://wordpress.com/calypso/images/service-showcase-cedd547f0b1aab43c97c.svg', badge: 'Popular'},
            {id: 'video', label: 'Video Gallery', img: 'https://wordpress.com/calypso/images/video-gallery-4c18c02134e21b8fd4fa.svg'},
            {id: 'pricing', label: 'Pricing', img: 'https://wordpress.com/calypso/images/pricing-page-676cda0f43d3f13f0405.svg'},
            {id: 'portfolio', label: 'Portfolio', img: 'https://wordpress.com/calypso/images/portfolio-3938ea12696ffd783a8d.svg'},
            {id: 'faq', label: 'FAQ', img: 'https://wordpress.com/calypso/images/faq-page-92256fea50ac789db315.svg', badge: 'Recommended'},
            {id: 'testimonials', label: 'Testimonials', img: 'https://wordpress.com/calypso/images/testimonials-2c0603c1bcd73c744aaa.svg'},
            {id: 'team', label: 'Team', img: 'https://wordpress.com/calypso/images/team-page-28d4cdd78cd27cfe3eaf.svg'}
        ];

        let selectedPages = new Set();
        const maxFreePages = 5;

        // Generate page cards
        function generatePageCards() {
            const grid = document.getElementById('pagesGrid');
            
            pages.forEach(page => {
                const card = document.createElement('div');
                card.className = 'page-card';
                card.dataset.pageId = page.id;
                
                let badgeHtml = '';
                if (page.badge) {
                    const badgeClass = page.badge.toLowerCase() === 'required' ? 'badge-required' :
                                     page.badge.toLowerCase() === 'popular' ? 'badge-popular' : 'badge-recommended';
                    badgeHtml = `<div class="page-badge ${badgeClass}">${page.badge}</div>`;
                }

                card.innerHTML = `
                    <div class="page-card-image">
                        <img src="${page.img}" alt="${page.label}">
                    </div>
                    <div class="page-title">${page.label}</div>
                    ${badgeHtml}
                `;

                // Auto-select required pages
                if (page.required) {
                    card.classList.add('selected');
                    selectedPages.add(page.id);
                }

                card.addEventListener('click', () => {
                    if (page.required && selectedPages.has(page.id)) return; // Can't deselect required pages
                    
                    if (selectedPages.has(page.id)) {
                        selectedPages.delete(page.id);
                        card.classList.remove('selected');
                    } else {
                        selectedPages.add(page.id);
                        card.classList.add('selected');
                    }
                    
                    updateCounter();
                    updateProgressBar();
                });

                grid.appendChild(card);
            });
        }

        // Update selection counter
        function updateCounter() {
            const count = selectedPages.size;
            const counterIcon = document.getElementById('counterIcon');
            const selectedCount = document.getElementById('selectedCount');
            const countText = document.getElementById('countText');
            
            selectedCount.textContent = count;
            countText.textContent = `${count} of ${maxFreePages} pages selected`;
            
            // Animate counter icon
            counterIcon.style.transform = 'scale(1.2)';
            setTimeout(() => {
                counterIcon.style.transform = 'scale(1)';
            }, 200);

            // Change color based on selection
            if (count >= maxFreePages) {
                counterIcon.style.background = 'var(--success-gradient)';
            } else {
                counterIcon.style.background = 'var(--primary-gradient)';
            }
        }

        // Update progress bar
        function updateProgressBar() {
            const progress = (selectedPages.size / maxFreePages) * 100;
            document.getElementById('progressBar').style.width = `${Math.min(progress, 100)}%`;
        }

        // Handle form submission
        document.getElementById('pageSelectionForm').addEventListener('submit', (e) => {
            e.preventDefault();
            
            if (selectedPages.size === 0) {
                alert('Please select at least one page for your website.');
                return;
            }
            
            const selectedPagesList = Array.from(selectedPages);
            console.log('Selected pages:', selectedPagesList);
            
            // Here you would typically send the data to your server
            alert(`Great! You've selected ${selectedPages.size} pages. Proceeding to the next step...`);
        });

        // Initialize the page
        document.addEventListener('DOMContentLoaded', () => {
            generatePageCards();
            updateCounter();
            updateProgressBar();
        });

        // Add some interactive effects
        document.addEventListener('mousemove', (e) => {
            const mouseX = e.clientX / window.innerWidth;
            const mouseY = e.clientY / window.innerHeight;
            
            document.documentElement.style.setProperty('--mouse-x', mouseX);
            document.documentElement.style.setProperty('--mouse-y', mouseY);
        });
    </script>

@endsection
