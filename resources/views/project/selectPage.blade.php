@extends('main-layout')
@section('title', 'Select how to procced')
@section('style')
<style>
        :root {
            /* Enhanced Color Palette */
            --primary-gradient: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            --secondary-gradient: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
            --success-gradient: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
            --warning-gradient: linear-gradient(135deg, #43e97b 0%, #38f9d7 100%);
            --error-gradient: linear-gradient(135deg, #fa709a 0%, #fee140 100%);
            --glass-gradient: linear-gradient(135deg, rgba(255, 255, 255, 0.1) 0%, rgba(255, 255, 255, 0.05) 100%);
            --template-gradient: linear-gradient(135deg, #667eea 0%, #f093fb 50%, #43e97b 100%);
            --custom-gradient: linear-gradient(135deg, #fa709a 0%, #fee140 50%, #4facfe 100%);
            
            /* Core Colors */
            --primary-color: #667eea;
            --primary-hover: #5a6fd8;
            --primary-light: rgba(102, 126, 234, 0.1);
            --secondary-color: #764ba2;
            --accent-color: #f093fb;
            
            /* Modern Background */
            --bg-primary: linear-gradient(135deg, #f5f8ff 0%, #e8f4fd 100%);
            --bg-secondary: #ffffff;
            --bg-glass: rgba(255, 255, 255, 0.25);
            --bg-card: rgba(255, 255, 255, 0.9);
            --text-primary: #1a202c;
            --text-secondary: #4a5568;
            --text-muted: #718096;
            --border-color: #e2e8f0;
            --border-focus: #667eea;
            
            /* Advanced Shadows */
            --shadow-sm: 0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px 0 rgba(0, 0, 0, 0.06);
            --shadow-md: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
            --shadow-lg: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
            --shadow-xl: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
            --shadow-glow: 0 0 40px rgba(102, 126, 234, 0.3);
            --shadow-card: 0 8px 32px rgba(0, 0, 0, 0.08);
            --shadow-hover: 0 16px 48px rgba(0, 0, 0, 0.12);
        }

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
        body::before {
            content: '';
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: 
                radial-gradient(circle at 20% 50%, rgba(102, 126, 234, 0.08) 0%, transparent 50%),
                radial-gradient(circle at 80% 20%, rgba(118, 75, 162, 0.08) 0%, transparent 50%),
                radial-gradient(circle at 40% 80%, rgba(240, 147, 251, 0.08) 0%, transparent 50%);
            animation: backgroundMove 20s ease-in-out infinite;
            z-index: -1;
        }

        @keyframes backgroundMove {
            0%, 100% { opacity: 1; }
            50% { opacity: 0.6; }
        }

        /* Progress Header */
        .progress-header {
            background: var(--bg-card);
            backdrop-filter: blur(20px);
            padding: 25px 0;
            position: sticky;
            top: 0;
            z-index: 100;
            border-bottom: 1px solid rgba(255, 255, 255, 0.2);
            box-shadow: var(--shadow-md);
        }

        .project-info {
            display: flex;
            align-items: center;
            gap: 15px;
            margin-bottom: 20px;
        }

        .project-name {
            font-size: 1.5rem;
            font-weight: 700;
            background: var(--primary-gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .project-badge {
            background: var(--success-gradient);
            color: white;
            padding: 6px 16px;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.05); }
        }

        /* Progress Steps */
        .progress-steps {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
        }

        .progress-step {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 10px 20px;
            border-radius: 25px;
            transition: all 0.3s ease;
            text-decoration: none;
            color: var(--text-secondary);
        }

        .progress-step.active {
            background: var(--primary-light);
            color: var(--primary-color);
            font-weight: 600;
        }

        .step-number {
            width: 35px;
            height: 35px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            font-size: 0.9rem;
            background: var(--border-color);
            color: var(--text-muted);
            transition: all 0.3s ease;
        }

        .step-number.active {
            background: var(--primary-gradient);
            color: white;
            box-shadow: var(--shadow-glow);
        }

        .step-divider {
            width: 30px;
            height: 2px;
            background: var(--border-color);
            border-radius: 1px;
        }

        /* Main Content */
        .main-content {
            padding: 80px 0;
            position: relative;
            z-index: 2;
        }

        .page-title {
            text-align: center;
            margin-bottom: 80px;
        }

        .page-title h1 {
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

        .page-title p {
            font-size: 1.3rem;
            color: var(--text-secondary);
            max-width: 600px;
            margin: 0 auto;
            line-height: 1.6;
            animation: slideInUp 1s ease-out 0.2s both;
        }

        /* Option Cards */
        .option-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(500px, 1fr));
            gap: 40px;
            margin-bottom: 80px;
        }

        .option-card {
            background: var(--bg-card);
            backdrop-filter: blur(20px);
            border-radius: 24px;
            padding: 40px;
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

        .option-card:nth-child(1) { animation-delay: 0.1s; }
        .option-card:nth-child(2) { animation-delay: 0.3s; }

        .option-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: var(--glass-gradient);
            opacity: 0;
            transition: opacity 0.3s ease;
            border-radius: 24px;
        }

        .option-card:hover::before {
            opacity: 1;
        }

        .option-card:hover {
            transform: translateY(-15px) scale(1.02);
            box-shadow: var(--shadow-hover);
            border-color: var(--primary-color);
        }

        .option-card.selected {
            background: linear-gradient(135deg, rgba(102, 126, 234, 0.1) 0%, rgba(118, 75, 162, 0.1) 100%);
            border-color: var(--primary-color);
            box-shadow: var(--shadow-glow);
            transform: translateY(-10px);
        }

        .option-card.selected::after {
            content: '✓';
            position: absolute;
            top: 20px;
            right: 20px;
            width: 40px;
            height: 40px;
            background: var(--primary-gradient);
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            font-size: 18px;
            animation: checkMarkPop 0.4s ease-out;
        }

        @keyframes checkMarkPop {
            0% { transform: scale(0) rotate(180deg); }
            100% { transform: scale(1) rotate(0deg); }
        }

        .option-image {
            width: 100%;
            height: 180px;
            border-radius: 16px;
            margin-bottom: 30px;
            position: relative;
            overflow: hidden;
            transition: all 0.3s ease;
        }

        .template-image {
            background: var(--template-gradient);
            position: relative;
        }

        .template-image::before {
            content: '🎨';
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 4rem;
            opacity: 0.8;
        }

        .custom-image {
            background: var(--custom-gradient);
            position: relative;
        }

        .custom-image::before {
            content: '⚡';
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 4rem;
            opacity: 0.8;
        }

        .option-card:hover .option-image {
            transform: scale(1.05);
        }

        .option-title {
            font-size: 1.8rem;
            font-weight: 700;
            color: var(--text-primary);
            margin-bottom: 15px;
            transition: color 0.3s ease;
        }

        .option-card:hover .option-title {
            color: var(--primary-color);
        }

        .option-description {
            font-size: 1.1rem;
            color: var(--text-secondary);
            line-height: 1.6;
            margin-bottom: 25px;
        }

        .option-features {
            list-style: none;
            padding: 0;
        }

        .option-features li {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-bottom: 12px;
            font-size: 1rem;
            color: var(--text-secondary);
        }

        .feature-icon {
            color: var(--primary-color);
            flex-shrink: 0;
        }

        /* Template Gallery */
        .template-gallery {
            background: var(--bg-card);
            backdrop-filter: blur(20px);
            border-radius: 24px;
            padding: 40px;
            margin-bottom: 60px;
            box-shadow: var(--shadow-card);
            border: 1px solid rgba(255, 255, 255, 0.2);
            display: none;
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.5s ease;
        }

        .template-gallery.active {
            display: block;
            opacity: 1;
            transform: translateY(0);
        }

        .gallery-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 40px;
            flex-wrap: wrap;
            gap: 20px;
        }

        .gallery-title {
            font-size: 2rem;
            font-weight: 700;
            color: var(--text-primary);
            position: relative;
        }

        .gallery-title::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: -8px;
            width: 60px;
            height: 4px;
            background: var(--primary-gradient);
            border-radius: 2px;
        }

        .template-filters {
            display: flex;
            gap: 10px;
            flex-wrap: wrap;
        }

        .filter-button {
            background: transparent;
            border: 2px solid var(--border-color);
            color: var(--text-secondary);
            padding: 10px 20px;
            border-radius: 25px;
            cursor: pointer;
            transition: all 0.3s ease;
            font-weight: 500;
        }

        .filter-button:hover {
            border-color: var(--primary-color);
            color: var(--primary-color);
        }

        .filter-button.active {
            background: var(--primary-gradient);
            border-color: transparent;
            color: white;
            box-shadow: var(--shadow-md);
        }

        .template-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 25px;
        }

        .template-card {
            background: var(--bg-secondary);
            border-radius: 16px;
            overflow: hidden;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: var(--shadow-sm);
            border: 2px solid transparent;
        }

        .template-card:hover {
            transform: translateY(-8px);
            box-shadow: var(--shadow-lg);
            border-color: var(--primary-color);
        }

        .template-card.selected {
            border-color: var(--primary-color);
            box-shadow: var(--shadow-glow);
            transform: translateY(-5px);
        }

        .template-preview {
            width: 100%;
            height: 200px;
            background: linear-gradient(45deg, #f0f2f5, #e1e8ed);
            position: relative;
            overflow: hidden;
        }

        .template-preview::before {
            content: '';
            position: absolute;
            top: 20px;
            left: 20px;
            right: 20px;
            height: 40px;
            background: var(--primary-gradient);
            border-radius: 8px;
            opacity: 0.7;
        }

        .template-preview::after {
            content: '';
            position: absolute;
            top: 80px;
            left: 20px;
            right: 20px;
            bottom: 20px;
            background: repeating-linear-gradient(
                0deg,
                rgba(0,0,0,0.05) 0px,
                rgba(0,0,0,0.05) 2px,
                transparent 2px,
                transparent 12px
            );
            border-radius: 8px;
        }

        .template-info {
            padding: 20px;
        }

        .template-name {
            font-weight: 600;
            color: var(--text-primary);
            margin-bottom: 5px;
        }

        .template-category {
            font-size: 0.9rem;
            color: var(--text-muted);
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        /* Action Buttons */
        .actions-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 20px;
            flex-wrap: wrap;
        }

        .back-button, .continue-button {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 15px 30px;
            border-radius: 50px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
            border: none;
            font-size: 1rem;
        }

        .back-button {
            background: transparent;
            color: var(--text-secondary);
            border: 2px solid var(--border-color);
        }

        .back-button:hover {
            background: var(--bg-secondary);
            color: var(--text-primary);
            border-color: var(--primary-color);
        }

        .continue-button {
            background: var(--primary-gradient);
            color: white;
            box-shadow: var(--shadow-lg);
            position: relative;
            overflow: hidden;
        }

        .continue-button:disabled {
            opacity: 0.5;
            cursor: not-allowed;
            transform: none !important;
        }

        .continue-button:not(:disabled):hover {
            background: var(--secondary-gradient);
            transform: translateY(-2px);
            box-shadow: var(--shadow-xl);
        }

        .continue-button::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: left 0.5s;
        }

        .continue-button:hover::before {
            left: 100%;
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

        /* Responsive Design */
        @media (max-width: 768px) {
            .main-content {
                padding: 40px 20px;
            }

            .page-title h1 {
                font-size: 2.5rem;
            }

            .option-container {
                grid-template-columns: 1fr;
                gap: 30px;
            }

            .option-card {
                padding: 30px;
            }

            .progress-steps {
                gap: 10px;
                justify-content: flex-start;
                overflow-x: auto;
                padding: 10px 0;
            }

            .step-divider {
                width: 20px;
            }

            .gallery-header {
                flex-direction: column;
                align-items: flex-start;
            }

            .actions-container {
                justify-content: center;
            }
        }

        @media (max-width: 480px) {
            .page-title h1 {
                font-size: 2rem;
            }

            .option-card {
                padding: 25px;
            }

            .template-gallery {
                padding: 25px;
            }

            .template-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
@endsection
@section('content')
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
{{-- <header class="progress-header">
        <div class="container">
            <div class="project-info">
                <div class="project-name">My Awesome Website</div>
                <div class="project-badge">In Progress</div>
            </div>
            <div class="progress-steps">
                <div class="progress-step">
                    <div class="step-number">1</div>
                    <span>Project Info</span>
                </div>
                <div class="step-divider"></div>
                <div class="progress-step active">
                    <div class="step-number active">2</div>
                    <span>Choose Approach</span>
                </div>
                <div class="step-divider"></div>
                <div class="progress-step">
                    <div class="step-number">3</div>
                    <span>Layout Selection</span>
                </div>
                <div class="step-divider"></div>
                <div class="progress-step">
                    <div class="step-number">4</div>
                    <span>Edit Content</span>
                </div>
                <div class="step-divider"></div>
                <div class="progress-step">
                    <div class="step-number">5</div>
                    <span>Finish</span>
                </div>
            </div>
        </div>
    </header> --}}

    <!-- Main Content -->
    <main class="main-content">
        <div class="container">
            <div class="page-title">
                <h1>Choose Your Website Approach</h1>
                <p>Would you like to start with a pre-designed template or build a custom website from scratch?</p>
            </div>

            <div class="option-container">
                <div class="option-card" id="templateOption">
                    <div class="option-image template-image"></div>
                    <div class="option-body">
                        <h2 class="option-title">Use a Template</h2>
                        <p class="option-description">Get started quickly with a professionally designed template that you can customize to fit your needs.</p>
                        <ul class="option-features">
                            <li>
                                <i class="fas fa-check-circle feature-icon"></i>
                                <span>Quick setup with professionally designed layouts</span>
                            </li>
                            <li>
                                <i class="fas fa-check-circle feature-icon"></i>
                                <span>Responsive designs that work on all devices</span>
                            </li>
                            <li>
                                <i class="fas fa-check-circle feature-icon"></i>
                                <span>Customizable content, colors, and images</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="option-card" id="customOption">
                    <div class="option-image custom-image"></div>
                    <div class="option-body">
                        <h2 class="option-title">Create Custom Website</h2>
                        <p class="option-description">Build your website from scratch with complete control over layout and design elements.</p>
                        <ul class="option-features">
                            <li>
                                <i class="fas fa-check-circle feature-icon"></i>
                                <span>Full creative control over page layouts</span>
                            </li>
                            <li>
                                <i class="fas fa-check-circle feature-icon"></i>
                                <span>Start with a blank canvas or basic structure</span>
                            </li>
                            <li>
                                <i class="fas fa-check-circle feature-icon"></i>
                                <span>Add custom sections and functionality</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="template-gallery" id="templateGallery">
                <div class="gallery-header">
                    <h3 class="gallery-title">Select a Template</h3>
                    <div class="template-filters">
                        <button class="filter-button active" data-filter="all">All</button>
                        <button class="filter-button" data-filter="business">Business</button>
                        <button class="filter-button" data-filter="portfolio">Portfolio</button>
                        <button class="filter-button" data-filter="blog">Blog</button>
                        <button class="filter-button" data-filter="ecommerce">E-commerce</button>
                    </div>
                </div>
                <div class="template-grid" id="templateGrid">
                    <!-- Templates will be generated by JavaScript -->
                </div>
            </div>

            <div class="actions-container">
                <button class="back-button">
                    <i class="fas fa-arrow-left"></i>
                    Back
                </button>
                <button class="continue-button" id="continueButton" disabled>
                    Continue
                    <i class="fas fa-arrow-right"></i>
                </button>
            </div>
        </div>
    </main>

@endsection   

@section('script')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    const templates = [
        {id: 'modern-business', name: 'Modern Business', category: 'business', preview: 'linear-gradient(135deg, #667eea, #764ba2)'},
        {id: 'creative-portfolio', name: 'Creative Portfolio', category: 'portfolio', preview: 'linear-gradient(135deg, #f093fb, #f5576c)'},
        {id: 'minimal-blog', name: 'Minimal Blog', category: 'blog', preview: 'linear-gradient(135deg, #4facfe, #00f2fe)'},
        {id: 'online-store', name: 'Online Store', category: 'ecommerce', preview: 'linear-gradient(135deg, #43e97b, #38f9d7)'},
        {id: 'agency-pro', name: 'Agency Pro', category: 'business', preview: 'linear-gradient(135deg, #fa709a, #fee140)'},
        {id: 'photo-gallery', name: 'Photo Gallery', category: 'portfolio', preview: 'linear-gradient(135deg, #667eea, #f093fb)'},
        {id: 'tech-startup', name: 'Tech Startup', category: 'business', preview: 'linear-gradient(135deg, #4facfe, #43e97b)'},
        {id: 'fashion-blog', name: 'Fashion Blog', category: 'blog', preview: 'linear-gradient(135deg, #f093fb, #764ba2)'}
    ];

    let selectedOption = null;
    let selectedTemplate = null;

    // Generate template cards
    function generateTemplateCards() {
        const grid = document.getElementById('templateGrid');
        
        templates.forEach(template => {
            const card = document.createElement('div');
            card.className = 'template-card';
            card.dataset.templateId = template.id;
            card.dataset.category = template.category;
            
            card.innerHTML = `
                <div class="template-preview" style="background: ${template.preview}"></div>
                <div class="template-info">
                    <div class="template-name">${template.name}</div>
                    <div class="template-category">${template.category}</div>
                </div>
            `;

            card.addEventListener('click', () => {
                document.querySelectorAll('.template-card').forEach(c => c.classList.remove('selected'));
                card.classList.add('selected');
                selectedTemplate = template.id;
                updateContinueButton();
            });

            grid.appendChild(card);
        });
    }

    // Handle option selection
    document.getElementById('templateOption').addEventListener('click', function() {
        selectedOption = 'template';
        document.querySelectorAll('.option-card').forEach(card => card.classList.remove('selected'));
        this.classList.add('selected');
        
        const gallery = document.getElementById('templateGallery');
        gallery.style.display = 'block';
        setTimeout(() => {
            gallery.classList.add('active');
            gallery.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
        }, 100);
        
        updateContinueButton();
    });

    document.getElementById('customOption').addEventListener('click', function() {
        selectedOption = 'custom';
        document.querySelectorAll('.option-card').forEach(card => card.classList.remove('selected'));
        this.classList.add('selected');
        
        const gallery = document.getElementById('templateGallery');
        gallery.classList.remove('active');
        setTimeout(() => {
            gallery.style.display = 'none';
        }, 500);
        
        selectedTemplate = null;
        updateContinueButton();
    });

    // Handle filter buttons
    document.querySelectorAll('.filter-button').forEach(button => {
        button.addEventListener('click', function() {
            document.querySelectorAll('.filter-button').forEach(btn => btn.classList.remove('active'));
            this.classList.add('active');
            
            const filter = this.dataset.filter;
            const cards = document.querySelectorAll('.template-card');
            
            cards.forEach(card => {
                if (filter === 'all' || card.dataset.category === filter) {
                    card.style.display = 'block';
                    setTimeout(() => {
                        card.style.opacity = '1';
                        card.style.transform = 'translateY(0)';
                    }, 100);
                } else {
                    card.style.opacity = '0';
                    card.style.transform = 'translateY(20px)';
                    setTimeout(() => {
                        card.style.display = 'none';
                    }, 300);
                }
            });
        });
    });

    // Update continue button state
    function updateContinueButton() {
        const continueBtn = document.getElementById('continueButton');
        if (!continueBtn) return;
        
        if (selectedOption === 'custom' || (selectedOption === 'template' && selectedTemplate)) {
            continueBtn.disabled = false;
            continueBtn.classList.add('active');
        } else {
            continueBtn.disabled = true;
            continueBtn.classList.remove('active');
        }
    }

    // Handle continue button click
    function handleContinue() {
        if (selectedOption === 'custom') {
            console.log('Proceeding with custom design');
            // Redirect to custom design flow
            window.location.href = '/custom-design';
        } else if (selectedOption === 'template' && selectedTemplate) {
            console.log('Proceeding with template:', selectedTemplate);
            // Redirect to template customization
            window.location.href = `/template/${selectedTemplate}`;
        }
    }

    // Initialize on DOM load
    document.addEventListener('DOMContentLoaded', function() {
        generateTemplateCards();
        
        const continueBtn = document.getElementById('continueButton');
        if (continueBtn) {
            continueBtn.addEventListener('click', handleContinue);
        }
        
        // Set initial filter to 'all'
        const allFilterBtn = document.querySelector('.filter-button[data-filter="all"]');
        if (allFilterBtn) {
            allFilterBtn.classList.add('active');
        }
    });

    // Search functionality
    function handleSearch() {
        const searchInput = document.getElementById('searchInput');
        if (!searchInput) return;
        
        const searchTerm = searchInput.value.toLowerCase();
        const cards = document.querySelectorAll('.template-card');
        
        cards.forEach(card => {
            const templateName = card.querySelector('.template-name').textContent.toLowerCase();
            const templateCategory = card.querySelector('.template-category').textContent.toLowerCase();
            
            if (templateName.includes(searchTerm) || templateCategory.includes(searchTerm)) {
                card.style.display = 'block';
                card.style.opacity = '1';
                card.style.transform = 'translateY(0)';
            } else {
                card.style.opacity = '0';
                card.style.transform = 'translateY(20px)';
                setTimeout(() => {
                    card.style.display = 'none';
                }, 300);
            }
        });
    }

    // Add search event listener if search input exists
    document.addEventListener('DOMContentLoaded', function() {
        const searchInput = document.getElementById('searchInput');
        if (searchInput) {
            searchInput.addEventListener('input', handleSearch);
        }
    });

    // Preview template function
    function previewTemplate(templateId) {
        const template = templates.find(t => t.id === templateId);
        if (template) {
            console.log('Previewing template:', template);
            // Open preview in modal or new window
            window.open(`/preview/${templateId}`, '_blank', 'width=1200,height=800');
        }
    }

    // Add preview buttons to template cards
    function addPreviewButtons() {
        const cards = document.querySelectorAll('.template-card');
        cards.forEach(card => { 
            const previewBtn = document.createElement('button');
            previewBtn.className = 'preview-btn';
            previewBtn.innerHTML = '<i class="fas fa-eye ps-3 mb-3"></i> Preview';
            previewBtn.onclick = (e) => {
                e.stopPropagation();
                previewTemplate(card.dataset.templateId);
            };
            card.appendChild(previewBtn);
        });
    }

    // Call addPreviewButtons after generating cards
    document.addEventListener('DOMContentLoaded', function() {
        setTimeout(addPreviewButtons, 100);
    });
</script>
    @endsection