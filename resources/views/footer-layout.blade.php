@extends('main-layout')
@section('title', 'Footer Section Layouts')
@section('style')
<style>
body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            color: var(--text-primary);
            background: var(--bg-primary);
            min-height: 100vh;
        }

        .container {
            max-width: 1400px;
            margin: 0 auto;
            background: var(--bg-secondary);
            box-shadow: var(--shadow-xl);
            min-height: 100vh;
        }

        /* Layout Selector Form */
        .layout-selector {
            padding: 40px 20px;
            background: var(--bg-primary);
            border-bottom: 1px solid var(--border-color);
        }

        .selector-form {
            max-width: 900px;
            margin: 0 auto;
            text-align: center;
        }

        .form-title {
            font-size: 2rem;
            color: var(--text-primary);
            margin-bottom: 12px;
            font-weight: 700;
            background: var(--gradient-primary);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .form-subtitle {
            color: var(--text-secondary);
            margin-bottom: 35px;
            font-size: 1.1rem;
        }

        .layout-options {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-bottom: 35px;
            flex-wrap: wrap;
        }

        .layout-option {
            position: relative;
        }

        .layout-radio {
            position: absolute;
            opacity: 0;
            cursor: pointer;
        }

        .layout-btn {
            padding: 18px 30px;
            border: 2px solid var(--primary-accent);
            background: var(--bg-secondary);
            color: var(--primary-accent);
            border-radius: 50px;
            cursor: pointer;
            transition: all 0.3s ease;
            font-weight: 600;
            display: block;
            min-width: 160px;
            font-size: 1rem;
        }

        .layout-btn:hover {
            background: var(--gradient-primary);
            color: white;
            transform: translateY(-3px);
            box-shadow: var(--shadow-lg);
        }

        .layout-radio:checked + .layout-btn {
            background: var(--gradient-primary);
            color: white;
            transform: scale(1.05);
            box-shadow: var(--shadow-lg);
        }

        .form-actions {
            display: flex;
            justify-content: center;
            gap: 25px;
            align-items: center;
            flex-wrap: wrap;
        }

        .preview-btn {
            padding: 15px 30px;
            background: var(--border-light);
            color: var(--text-secondary);
            border: none;
            border-radius: 50px;
            cursor: pointer;
            font-weight: 600;
            transition: all 0.3s ease;
            font-size: 1rem;
        }

        .preview-btn:hover {
            background: var(--border-color);
            transform: translateY(-2px);
            box-shadow: var(--shadow-md);
        }


        .selection-info {
            background: var(--success-light);
            border: 1px solid var(--success);
            border-radius: 15px;
            padding: 20px;
            margin: 25px 0;
            color: var(--primary-dark);
            font-weight: 500;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }

        /* Footer Section */
        .footer-preview {
            min-height: 300px;
            overflow: hidden;
            position: relative;
        }

        .footer-container {
            display: none;
            min-height: 310px;
        }

        .footer-container.active {
            display: block;
        }

        /* Layout 1: Four Column Classic */
        .footer-layout-1 {
            background: var(--primary-dark);
            color: white;
            padding: 60px 40px 30px;
        }

        .footer-content-1 {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: 2fr 1fr 1fr 1fr;
            gap: 50px;
            margin-bottom: 40px;
        }

        .footer-brand {
            padding-right: 20px;
        }

        .footer-logo {
            font-size: 2rem;
            font-weight: 800;
            background: var(--gradient-secondary);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 15px;
        }

        .footer-description {
            color: var(--text-muted);
            line-height: 1.8;
            margin-bottom: 25px;
        }

        .social-links {
            display: flex;
            gap: 15px;
        }

        .social-link {
            width: 45px;
            height: 45px;
            background: var(--gradient-primary);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .social-link:hover {
            transform: translateY(-3px) scale(1.1);
            box-shadow: var(--shadow-lg);
        }

        .footer-column h4 {
            color: white;
            font-size: 1.2rem;
            margin-bottom: 20px;
            font-weight: 700;
        }

        .footer-links {
            list-style: none;
        }

        .footer-links li {
            margin-bottom: 12px;
        }

        .footer-links a {
            color: var(--text-muted);
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .footer-links a:hover {
            color: var(--secondary-accent);
            padding-left: 5px;
        }

        .footer-bottom {
            border-top: 1px solid var(--primary-medium);
            padding-top: 30px;
            text-align: center;
            color: var(--text-muted);
        }

        /* Layout 2: Minimal Center */
        .footer-layout-2 {
            background: var(--bg-secondary);
            border-top: 1px solid var(--border-color);
            padding: 80px 40px;
            text-align: center;
        }

        .footer-content-2 {
            max-width: 800px;
            margin: 0 auto;
        }

        .footer-layout-2 .footer-logo {
            font-size: 2.5rem;
            color: var(--text-primary);
            margin-bottom: 20px;
        }

        .footer-layout-2 .footer-description {
            color: var(--text-secondary);
            font-size: 1.1rem;
            margin-bottom: 40px;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }

        .footer-nav {
            display: flex;
            justify-content: center;
            gap: 40px;
            margin-bottom: 40px;
            flex-wrap: wrap;
        }

        .footer-nav a {
            color: var(--text-primary);
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
            position: relative;
        }

        .footer-nav a:hover {
            color: var(--primary-accent);
        }

        .footer-nav a:after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: -5px;
            left: 50%;
            background: var(--gradient-primary);
            transition: all 0.3s ease;
        }

        .footer-nav a:hover:after {
            width: 100%;
            left: 0;
        }

        .footer-layout-2 .social-links {
            justify-content: center;
            margin-bottom: 40px;
        }

        .footer-layout-2 .footer-bottom {
            border-top: 1px solid var(--border-color);
            padding-top: 30px;
            color: var(--text-muted);
        }

        /* Layout 3: Newsletter Focus */
        .footer-layout-3 {
            background: var(--gradient-primary);
            color: white;
            padding: 80px 40px 40px;
        }

        .footer-content-3 {
            max-width: 1000px;
            margin: 0 auto;
            text-align: center;
        }

        .newsletter-section {
            margin-bottom: 60px;
        }

        .newsletter-title {
            font-size: 2.2rem;
            font-weight: 700;
            margin-bottom: 15px;
        }

        .newsletter-subtitle {
            font-size: 1.1rem;
            opacity: 0.9;
            margin-bottom: 35px;
            max-width: 500px;
            margin-left: auto;
            margin-right: auto;
        }

        .newsletter-form {
            display: flex;
            max-width: 450px;
            margin: 0 auto;
            gap: 10px;
            margin-bottom: 20px;
        }

        .newsletter-input {
            flex: 1;
            padding: 18px 25px;
            border: none;
            border-radius: 50px;
            font-size: 1rem;
            outline: none;
        }

        .newsletter-btn {
            padding: 18px 30px;
            background: white;
            color: var(--primary-accent);
            border: none;
            border-radius: 50px;
            font-weight: 700;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .newsletter-btn:hover {
            transform: scale(1.05);
            box-shadow: var(--shadow-lg);
        }

        .footer-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 40px;
            margin-bottom: 50px;
        }

        .footer-layout-3 .footer-column h4 {
            margin-bottom: 20px;
            font-size: 1.1rem;
        }

        .footer-layout-3 .footer-links a {
            color: rgba(255, 255, 255, 0.8);
        }

        .footer-layout-3 .footer-links a:hover {
            color: white;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .layout-options {
                flex-direction: column;
                align-items: center;
            }

            .form-actions {
                flex-direction: column;
                gap: 15px;
            }

            .footer-content-1 {
                grid-template-columns: 1fr;
                gap: 30px;
                padding: 0 20px;
            }

            .footer-nav {
                flex-direction: column;
                gap: 20px;
            }

            .newsletter-form {
                flex-direction: column;
                max-width: 300px;
            }

            .footer-grid {
                grid-template-columns: 1fr;
                gap: 30px;
            }

            .social-links {
                justify-content: center;
            }

            .form-title {
                font-size: 1.5rem;
            }
        }

        /* Animation */
        .footer-container {
            animation: fadeIn 0.5s ease-in-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .top-border{
            border-top: 2px solid var(--border-color);
        }
    </style>

@endsection

@section('content')
    <div class="container p-0">
        <!-- Layout Selector Form -->
        <div class="layout-selector">
            <form class="selector-form" id="footerForm">
                <h2 class="form-title">Choose Your Footer Layout</h2>
                <p class="form-subtitle">Select a footer style that complements your website design</p>
                
                <div class="layout-options">
                    <div class="layout-option">
                        <input type="radio" id="footer1" name="footer" value="1" class="layout-radio" checked onchange="switchFooter(1)">
                        <label for="footer1" class="layout-btn">Classic Four Column</label>
                    </div>
                    <div class="layout-option">
                        <input type="radio" id="footer2" name="footer" value="2" class="layout-radio" onchange="switchFooter(2)">
                        <label for="footer2" class="layout-btn">Minimal Center</label>
                    </div>
                    <div class="layout-option">
                        <input type="radio" id="footer3" name="footer" value="3" class="layout-radio" onchange="switchFooter(3)">
                        <label for="footer3" class="layout-btn">Newsletter Focus</label>
                    </div>
                </div>

                {{-- <div class="selection-info" id="selectionInfo">
                    <strong>Selected:</strong> <span id="selectedFooter">Classic Four Column Layout</span> - Traditional footer with comprehensive navigation and branding.
                </div> --}}

          
            </form>
        </div>

        <!-- Footer Preview Section -->
        <div class="footer-preview">
            <!-- Layout 1: Classic Four Column -->
            <footer class="footer-container footer-layout-1 active" id="footer-1">
                <div class="footer-content-1">
                    <div class="footer-brand">
                        <h3 class="footer-logo">YourBrand</h3>
                        <p class="footer-description">
                            We create exceptional digital experiences that help businesses grow and connect with their audiences in meaningful ways.
                        </p>
                        <div class="social-links">
                            <a href="#" class="social-link">f</a>
                            <a href="#" class="social-link">t</a>
                            <a href="#" class="social-link">in</a>
                            <a href="#" class="social-link">ig</a>
                        </div>
                    </div>
                    <div class="footer-column">
                        <h4>Company</h4>
                        <ul class="footer-links">
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Our Team</a></li>
                            <li><a href="#">Careers</a></li>
                            <li><a href="#">News</a></li>
                        </ul>
                    </div>
                    <div class="footer-column">
                        <h4>Services</h4>
                        <ul class="footer-links">
                            <li><a href="#">Web Design</a></li>
                            <li><a href="#">Development</a></li>
                            <li><a href="#">Marketing</a></li>
                            <li><a href="#">Consulting</a></li>
                        </ul>
                    </div>
                    <div class="footer-column">
                        <h4>Support</h4>
                        <ul class="footer-links">
                            <li><a href="#">Help Center</a></li>
                            <li><a href="#">Contact Us</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Terms of Service</a></li>
                        </ul>
                    </div>
                </div>
                <div class="footer-bottom">
                    <p>&copy; 2025 YourBrand. All rights reserved.</p>
                </div>
            </footer>

            <!-- Layout 2: Minimal Center -->
            <footer class="footer-container footer-layout-2" id="footer-2">
                <div class="footer-content-2">
                    <h3 class="footer-logo">YourBrand</h3>
                    <p class="footer-description">
                        Creating beautiful digital experiences that inspire and engage audiences worldwide.
                    </p>
                    <nav class="footer-nav">
                        <a href="#">About</a>
                        <a href="#">Services</a>
                        <a href="#">Portfolio</a>
                        <a href="#">Blog</a>
                        <a href="#">Contact</a>
                    </nav>
                    <div class="social-links">
                        <a href="#" class="social-link">f</a>
                        <a href="#" class="social-link">t</a>
                        <a href="#" class="social-link">in</a>
                        <a href="#" class="social-link">ig</a>
                    </div>
                    <div class="footer-bottom">
                        <p>&copy; 2025 YourBrand. Crafted with care.</p>
                    </div>
                </div>
            </footer>

            <!-- Layout 3: Newsletter Focus -->
            <footer class="footer-container footer-layout-3" id="footer-3">
                <div class="footer-content-3">
                    <div class="newsletter-section">
                        <h3 class="newsletter-title">Stay Connected</h3>
                        <p class="newsletter-subtitle">
                            Get the latest updates, insights, and exclusive content delivered to your inbox.
                        </p>
                        <form class="newsletter-form">
                            <input type="email" class="newsletter-input" placeholder="Enter your email address">
                            <button type="submit" class="newsletter-btn">Subscribe</button>
                        </form>
                        <p style="font-size: 0.9rem; opacity: 0.8;">No spam, unsubscribe anytime.</p>
                    </div>
                    
                    <div class="footer-grid">
                        <div class="footer-column">
                            <h4>Company</h4>
                            <ul class="footer-links">
                                <li><a href="#">About</a></li>
                                <li><a href="#">Team</a></li>
                                <li><a href="#">Careers</a></li>
                            </ul>
                        </div>
                        <div class="footer-column">
                            <h4>Services</h4>
                            <ul class="footer-links">
                                <li><a href="#">Design</a></li>
                                <li><a href="#">Development</a></li>
                                <li><a href="#">Marketing</a></li>
                            </ul>
                        </div>
                        <div class="footer-column">
                            <h4>Resources</h4>
                            <ul class="footer-links">
                                <li><a href="#">Blog</a></li>
                                <li><a href="#">Help</a></li>
                                <li><a href="#">Support</a></li>
                            </ul>
                        </div>
                        <div class="footer-column">
                            <h4>Legal</h4>
                            <ul class="footer-links">
                                <li><a href="#">Privacy</a></li>
                                <li><a href="#">Terms</a></li>
                                <li><a href="#">Cookies</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="social-links">
                        <a href="#" class="social-link">f</a>
                        <a href="#" class="social-link">t</a>
                        <a href="#" class="social-link">in</a>
                        <a href="#" class="social-link">ig</a>
                    </div>

                    <div class="footer-bottom">
                        <p>&copy; 2025 YourBrand. Building the future together.</p>
                    </div>
                </div>
            </footer>
        </div>

        <div class="layout-selector top-border">
                  <div class="form-actions">
                    <button type="button" class="preview-btn" onclick="previewFooter()">Preview Changes</button>
                    <button type="button" class="button" id="proceedBtn" onclick="proceedWithFooter()">
                        Use This Footer →
                    </button>
                </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        let selectedFooterValue = 1;

        function switchFooter(footerNumber) {
            selectedFooterValue = footerNumber;
            
            // Hide all footers
            const footers = document.querySelectorAll('.footer-container');
            footers.forEach(footer => footer.classList.remove('active'));

            // Show selected footer
            document.getElementById(`footer-${footerNumber}`).classList.add('active');

            // Update selection info
            updateSelectionInfo(footerNumber);
        }

        function updateSelectionInfo(footerNumber) {
            const selectedFooterSpan = document.getElementById('selectedFooter');
            const descriptions = {
                1: "Classic Four Column Layout - Traditional footer with comprehensive navigation and branding.",
                2: "Minimal Center Layout - Clean, centered design perfect for modern, minimalist websites.",
                3: "Newsletter Focus Layout - Emphasizes email signup with gradient background and engaging CTAs."
            };
            
            const names = {
                1: "Classic Four Column Layout",
                2: "Minimal Center Layout", 
                3: "Newsletter Focus Layout"
            };
            
            selectedFooterSpan.textContent = names[footerNumber];
            document.querySelector('.selection-info').innerHTML = 
                `<strong>Selected:</strong> ${descriptions[footerNumber]}`;
        }

        function previewFooter() {
            // Smooth scroll to preview
            document.querySelector('.footer-preview').scrollIntoView({ 
                behavior: 'smooth',
                block: 'start'
            });
            
            // Add a highlight effect
            const activeFooter = document.querySelector('.footer-container.active');
            activeFooter.style.outline = '3px solid var(--secondary-accent)';
            activeFooter.style.outlineOffset = '10px';
            
            setTimeout(() => {
                activeFooter.style.outline = 'none';
                activeFooter.style.outlineOffset = '0';
            }, 2500);
        }

        function proceedWithFooter() {
            const selectedFooter = document.querySelector('input[name="footer"]:checked').value;
            
            // Show confirmation
            if(confirm(`You've selected Footer Layout ${selectedFooter}. Do you want to proceed with this design?`)) {
                // Here you can redirect to your desired page
                // For example: window.location.href = 'customize-footer.html?layout=' + selectedFooter;
                
                // For demo purposes, we'll show an alert
                alert(`Redirecting to footer customization page with Layout ${selectedFooter}...\n\nIn a real application, this would redirect to:\ncustomize-footer.html?layout=${selectedFooter}`);
                
                // Uncomment the line below to actually redirect
                // window.location.href = `customize-footer.html?layout=${selectedFooter}`;
            }
        }

        // Initialize on page load
        document.addEventListener('DOMContentLoaded', function() {
            updateSelectionInfo(1);
        });

        // Newsletter form submission
        document.querySelector('.newsletter-form').addEventListener('submit', function(e) {
            e.preventDefault();
            const email = this.querySelector('.newsletter-input').value;
            if(email) {
                alert('Thank you for subscribing! (Demo)');
                this.querySelector('.newsletter-input').value = '';
            }
        });
    </script>

@endsection