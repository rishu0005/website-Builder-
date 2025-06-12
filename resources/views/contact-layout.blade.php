@extends('main-layout')
{{-- @section('title', 'contact layout selection')
@section('style')
  <style>

  </style>
@endsection
@section('content')
  <h1>Select a Contact Us Layout</h1>
  <div class="layouts">
    <!-- Layout 1 -->
    <div class="layout-card">
      <div class="layout-preview">Layout 1: Left Contact Info, Right Form</div>
      <button class="select-btn" onclick="window.location.href='contact-form.html?layout=1'">Use This Layout</button>
    </div>

    <!-- Layout 2 -->
    <div class="layout-card">
      <div class="layout-preview">Layout 2: Top Info, Bottom Form</div>
      <button class="select-btn" onclick="window.location.href='contact-form.html?layout=2'">Use This Layout</button>
    </div>

    <!-- Layout 3 -->
    <div class="layout-card">
      <div class="layout-preview">Layout 3: Form with Background Image</div>
      <button class="select-btn" onclick="window.location.href='contact-form.html?layout=3'">Use This Layout</button>
    </div>
  </div>
@endsection--}}


@section('title','Contact Us - Layout Options')
    <title>Contact Us - Layout Options</title>

@section('style')
    <style>
        :root {
            /* Primary Colors - Deep Blue to Light Blue Gradient */
            --primary-dark: #1e293b;
            --primary-medium: #334155;
            --primary-light: #64748b;
            --primary-accent: #3b82f6;
            --primary-hover: #2563eb;
            
            /* Secondary Colors - Purple to Pink Gradient */
            --secondary-dark: #581c87;
            --secondary-medium: #7c3aed;
            --secondary-light: #a855f7;
            --secondary-accent: #ec4899;
            
            /* Neutral Colors */
            --bg-primary: #f8fafc;
            --bg-secondary: #ffffff;
            --bg-card: #ffffff;
            --text-primary: #1e293b;
            --text-secondary: #64748b;
            --text-muted: #94a3b8;
            --border-color: #e2e8f0;
            --border-light: #f1f5f9;
            
            /* Success/Warning/Error Colors */
            --success: #10b981;
            --success-light: #d1fae5;
            --warning: #f59e0b;
            --warning-light: #fef3c7;
            --error: #ef4444;
            --error-light: #fee2e2;
            
            /* Shadows */
            --shadow-sm: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
            --shadow-md: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
            --shadow-lg: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
            --shadow-xl: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
            
            /* Gradients */
            --gradient-primary: linear-gradient(135deg, var(--primary-accent) 0%, var(--secondary-medium) 100%);
            --gradient-secondary: linear-gradient(135deg, var(--secondary-medium) 0%, var(--secondary-accent) 100%);
            --primary-gradient: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
            background: var(--bg-primary);
            color: var(--text-primary);
            line-height: 1.6;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 2rem;
        }

        .header {
            text-align: center;
            margin-bottom: 3rem;
        }

        .header h1 {
            font-size: 2.5rem;
            font-weight: 700;
            background: var(--gradient-primary);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 1rem;
        }

        .header p {
            font-size: 1.1rem;
            color: var(--text-secondary);
            max-width: 600px;
            margin: 0 auto;
        }

        .layout-selector {
            display: flex;
            justify-content: center;
            gap: 1rem;
            margin-bottom: 3rem;
            flex-wrap: wrap;
        }

        .layout-btn {
            padding: 0.75rem 1.5rem;
            background: var(--bg-secondary);
            border: 2px solid var(--border-color);
            border-radius: 0.75rem;
            cursor: pointer;
            transition: all 0.3s ease;
            font-weight: 600;
            color: var(--text-primary);
        }

        .layout-btn:hover {
            border-color: var(--primary-accent);
            transform: translateY(-2px);
            box-shadow: var(--shadow-md);
        }

        .layout-btn.active {
            background: var(--gradient-primary);
            color: white;
            border-color: transparent;
        }

        .layout-container {
            display: none;
            animation: fadeIn 0.5s ease-in-out;
        }

        .layout-container.active {
            display: block;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        /* Layout 1: Modern Card Style */
        .layout-1 {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 3rem;
            align-items: center;
        }

        .contact-info {
            background: var(--bg-card);
            padding: 2.5rem;
            border-radius: 1.5rem;
            box-shadow: var(--shadow-lg);
            border: 1px solid var(--border-light);
        }

        .contact-info h2 {
            font-size: 2rem;
            margin-bottom: 1rem;
            background: var(--gradient-primary);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .contact-info p {
            color: var(--text-secondary);
            margin-bottom: 2rem;
            font-size: 1.1rem;
        }

        .contact-item {
            display: flex;
            align-items: center;
            margin-bottom: 1.5rem;
            padding: 1rem;
            background: var(--bg-primary);
            border-radius: 0.75rem;
            transition: all 0.3s ease;
        }

        .contact-item:hover {
            transform: translateX(5px);
            box-shadow: var(--shadow-md);
        }

        .contact-icon {
            width: 3rem;
            height: 3rem;
            background: var(--gradient-primary);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 1rem;
            color: white;
            font-size: 1.2rem;
        }

        .contact-details h3 {
            font-size: 1.1rem;
            margin-bottom: 0.25rem;
            color: var(--text-primary);
        }

        .contact-details p {
            color: var(--text-secondary);
            margin: 0;
        }

        .cta-section {
            text-align: center;
        }

        .cta-card {
            background: var(--bg-card);
            padding: 3rem;
            border-radius: 1.5rem;
            box-shadow: var(--shadow-lg);
            border: 1px solid var(--border-light);
        }

        .cta-card h3 {
            font-size: 1.8rem;
            margin-bottom: 1rem;
            color: var(--text-primary);
        }

        .cta-card p {
            color: var(--text-secondary);
            margin-bottom: 2rem;
            font-size: 1.1rem;
        }

        .cta-button {
            display: inline-block;
            padding: 1rem 2rem;
            background: var(--gradient-primary);
            color: white;
            text-decoration: none;
            border-radius: 0.75rem;
            font-weight: 600;
            font-size: 1.1rem;
            transition: all 0.3s ease;
            box-shadow: var(--shadow-md);
        }

        .cta-button:hover {
            transform: translateY(-2px);
            box-shadow: var(--shadow-xl);
        }

        /* Layout 2: Split Hero Style */
        .layout-2 {
            background: var(--gradient-primary);
            border-radius: 2rem;
            overflow: hidden;
            box-shadow: var(--shadow-xl);
        }

        .hero-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            min-height: 500px;
        }

        .hero-text {
            padding: 3rem;
            color: white;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .hero-text h2 {
            font-size: 2.5rem;
            margin-bottom: 1rem;
            font-weight: 700;
        }

        .hero-text p {
            font-size: 1.2rem;
            margin-bottom: 2rem;
            opacity: 0.9;
        }

        .hero-stats {
            display: flex;
            gap: 2rem;
            margin-bottom: 2rem;
        }

        .stat-item {
            text-align: center;
        }

        .stat-number {
            font-size: 2rem;
            font-weight: 700;
            display: block;
        }

        .stat-label {
            font-size: 0.9rem;
            opacity: 0.8;
        }

        .hero-form {
            background: var(--bg-card);
            padding: 3rem;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .hero-form h3 {
            font-size: 1.5rem;
            margin-bottom: 1rem;
            color: var(--text-primary);
        }

        .hero-form p {
            color: var(--text-secondary);
            margin-bottom: 2rem;
        }

        .form-button {
            padding: 1rem 2rem;
            background: var(--gradient-secondary);
            color: white;
            border: none;
            border-radius: 0.75rem;
            font-weight: 600;
            font-size: 1.1rem;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: var(--shadow-md);
        }

        .form-button:hover {
            transform: translateY(-2px);
            box-shadow: var(--shadow-xl);
        }

        /* Layout 3: Minimalist Center */
        .layout-3 {
            max-width: 600px;
            margin: 0 auto;
            text-align: center;
        }

        .minimal-card {
            background: var(--bg-card);
            padding: 4rem 3rem;
            border-radius: 2rem;
            box-shadow: var(--shadow-lg);
            border: 1px solid var(--border-light);
            position: relative;
            overflow: hidden;
        }

        .minimal-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: var(--gradient-primary);
        }

        .minimal-card h2 {
            font-size: 2.2rem;
            margin-bottom: 1rem;
            color: var(--text-primary);
        }

        .minimal-card p {
            color: var(--text-secondary);
            margin-bottom: 2rem;
            font-size: 1.1rem;
        }

        .contact-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
            gap: 1.5rem;
            margin-bottom: 2.5rem;
        }

        .contact-method {
            padding: 1.5rem;
            background: var(--bg-primary);
            border-radius: 1rem;
            transition: all 0.3s ease;
        }

        .contact-method:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-md);
        }

        .method-icon {
            width: 2.5rem;
            height: 2.5rem;
            background: var(--gradient-primary);
            border-radius: 0.5rem;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1rem;
            color: white;
        }

        .method-text {
            font-size: 0.9rem;
            color: var(--text-secondary);
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .layout-1,
            .hero-content {
                grid-template-columns: 1fr;
                gap: 2rem;
            }

            .container {
                padding: 1rem;
            }

            .header h1 {
                font-size: 2rem;
            }

            .contact-info,
            .cta-card,
            .hero-text,
            .hero-form,
            .minimal-card {
                padding: 2rem;
            }

            .contact-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
@endsection

@section('content')
    <div class="container">
        <div class="header">
            <h1>Get In Touch</h1>
            <p>Choose your preferred layout style and connect with us. We're here to help you with any questions or inquiries you may have.</p>
        </div>

        <div class="layout-selector">
            <button class="layout-btn active" onclick="showLayout(1)">Modern Cards</button>
            <button class="layout-btn" onclick="showLayout(2)">Split Hero</button>
            <button class="layout-btn" onclick="showLayout(3)">Minimalist</button>
        </div>

        <!-- Layout 1: Modern Card Style -->
        <div id="layout-1" class="layout-container active">
            <div class="layout-1">
                <div class="contact-info">
                    <h2>Let's Connect</h2>
                    <p>We'd love to hear from you. Choose your preferred way to get in touch and we'll respond as quickly as possible.</p>
                    
                    <div class="contact-item">
                        <div class="contact-icon">📧</div>
                        <div class="contact-details">
                            <h3>Email Us</h3>
                            <p>contact@yourcompany.com</p>
                        </div>
                    </div>
                    
                    <div class="contact-item">
                        <div class="contact-icon">📞</div>
                        <div class="contact-details">
                            <h3>Call Us</h3>
                            <p>+1 (555) 123-4567</p>
                        </div>
                    </div>
                    
                    <div class="contact-item">
                        <div class="contact-icon">📍</div>
                        <div class="contact-details">
                            <h3>Visit Us</h3>
                            <p>123 Business Ave, Suite 100</p>
                        </div>
                    </div>
                </div>

                <div class="cta-section">
                    <div class="cta-card">
                        <h3>Ready to Start?</h3>
                        <p>Fill out our contact form and we'll get back to you within 24 hours with a personalized response.</p>
                        <a href="#contact-form" class="cta-button">Open Contact Form</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Layout 2: Split Hero Style -->
        <div id="layout-2" class="layout-container">
            <div class="layout-2">
                <div class="hero-content">
                    <div class="hero-text">
                        <h2>We're Here to Help</h2>
                        <p>Join thousands of satisfied customers who have trusted us with their business needs.</p>
                        
                        <div class="hero-stats">
                            <div class="stat-item">
                                <span class="stat-number">5K+</span>
                                <span class="stat-label">Happy Clients</span>
                            </div>
                            <div class="stat-item">
                                <span class="stat-number">24/7</span>
                                <span class="stat-label">Support</span>
                            </div>
                            <div class="stat-item">
                                <span class="stat-number">99%</span>
                                <span class="stat-label">Satisfaction</span>
                            </div>
                        </div>
                    </div>

                    <div class="hero-form">
                        <h3>Get Started Today</h3>
                        <p>Ready to take the next step? Our contact form is designed to capture all the details we need to provide you with the best possible service.</p>
                        <button class="form-button" onclick="redirectToForm()">Launch Contact Form</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Layout 3: Minimalist Center -->
        <div id="layout-3" class="layout-container">
            <div class="layout-3">
                <div class="minimal-card">
                    <h2>Contact Us</h2>
                    <p>Simple, direct, and effective. Choose how you'd like to connect with our team.</p>
                    
                    <div class="contact-grid">
                        <div class="contact-method">
                            <div class="method-icon">✉️</div>
                            <div class="method-text">Email Support</div>
                        </div>
                        <div class="contact-method">
                            <div class="method-icon">💬</div>
                            <div class="method-text">Live Chat</div>
                        </div>
                        <div class="contact-method">
                            <div class="method-icon">📞</div>
                            <div class="method-text">Phone Call</div>
                        </div>
                    </div>
                    
                    <a href="#contact-form" class="cta-button">Contact Form</a>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        function showLayout(layoutNumber) {
            // Hide all layouts
            const layouts = document.querySelectorAll('.layout-container');
            layouts.forEach(layout => layout.classList.remove('active'));
            
            // Remove active class from all buttons
            const buttons = document.querySelectorAll('.layout-btn');
            buttons.forEach(btn => btn.classList.remove('active'));
            
            // Show selected layout
            document.getElementById(`layout-${layoutNumber}`).classList.add('active');
            
            // Add active class to clicked button
            event.target.classList.add('active');
        }

        function redirectToForm() {
            // Replace with your actual form URL
            window.location.href = '#contact-form';
            // Or use: window.open('https://your-contact-form-url.com', '_blank');
        }

        // Add click event to all contact form buttons
        document.querySelectorAll('.cta-button').forEach(button => {
            button.addEventListener('click', function(e) {
                e.preventDefault();
                // Replace with your actual form URL
                alert('Redirecting to contact form...\n\nReplace this with your actual form URL in the JavaScript code.');
                // window.location.href = 'https://your-contact-form-url.com';
            });
        });

        // Add smooth scrolling for better UX
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth'
                    });
                }
            });
        });
    </script>
@endsection