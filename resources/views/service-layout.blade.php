@extends('main-layout')
@section('title', 'service section layout selector')
@section('style')
<style>
    body {
            /* font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif; */
            background: var(--bg-primary);
            color: var(--text-primary);
            line-height: 1.6;
        }

        .container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 2rem;
        }

        .header {
            text-align: center;
            margin-bottom: 4rem;
            padding: 2rem 0;
        }

        .header h1 {
            font-size: 3rem;
            font-weight: 700;
            background: var(--gradient-primary);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 1rem;
        }

        .header p {
            font-size: 1.25rem;
            color: var(--text-secondary);
            max-width: 600px;
            margin: 0 auto;
        }

        .layout-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(500px, 1fr));
            gap: 3rem;
            margin-bottom: 4rem;
        }

        .layout-option {
            background: var(--bg-card);
            border-radius: 20px;
            padding: 2rem;
            box-shadow: var(--shadow-lg);
            border: 2px solid var(--border-light);
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .layout-option:hover {
            transform: translateY(-8px);
            box-shadow: var(--shadow-xl);
            border-color: var(--primary-accent);
        }

        .layout-option::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 5px;
            background: var(--gradient-primary);
        }

        .layout-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 2rem;
        }

        .layout-title {
            font-size: 1.5rem;
            font-weight: 600;
            color: var(--text-primary);
        }

        .layout-badge {
            background: var(--gradient-secondary);
            color: white;
            padding: 0.5rem 1rem;
            border-radius: 20px;
            font-size: 0.875rem;
            font-weight: 500;
        }

        .layout-preview {
            background: var(--bg-primary);
            border-radius: 16px;
            padding: 2rem;
            margin-bottom: 2rem;
            min-height: 300px;
            border: 1px solid var(--border-color);
            display: flex;
            flex-direction: column;
        }

        .layout-description {
            color: var(--text-secondary);
            margin-bottom: 1.5rem;
            font-size: 0.95rem;
        }

        .select-button {
            width: 100%;
            background: var(--gradient-primary);
            color: white;
            border: none;
            padding: 1rem 1.5rem;
            border-radius: 12px;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .select-button:hover {
            transform: translateY(-2px);
            box-shadow: var(--shadow-lg);
        }

        .select-button.selected {
            background: var(--success);
            box-shadow: 0 0 0 4px var(--success-light);
        }

        /* Service Section Previews */
        .service-section {
            display: flex;
            flex-direction: column;
            height: 100%;
        }

        .section-title {
            font-size: 1.2rem;
            font-weight: 600;
            color: var(--text-primary);
            margin-bottom: 0.75rem;
        }

        .section-description {
            font-size: 0.85rem;
            color: var(--text-secondary);
            line-height: 1.5;
            margin-bottom: 1.5rem;
        }

        .service-cards {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 1rem;
            flex: 1;
        }

        .service-card {
            background: white;
            padding: 1.25rem;
            border-radius: 12px;
            box-shadow: var(--shadow-sm);
            border: 1px solid var(--border-light);
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            transition: all 0.2s ease;
        }

        .service-card:hover {
            transform: translateY(-2px);
            box-shadow: var(--shadow-md);
        }

        .service-icon {
            width: 32px;
            height: 32px;
            background: var(--gradient-primary);
            border-radius: 8px;
            margin-bottom: 0.75rem;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .service-card-title {
            font-weight: 600;
            color: var(--text-primary);
            font-size: 0.9rem;
            margin-bottom: 0.5rem;
        }

        .service-card-text {
            color: var(--text-muted);
            font-size: 0.8rem;
            line-height: 1.4;
        }

        /* Layout Variations */
        .centered-layout {
            text-align: center;
        }

        .left-aligned-layout {
            text-align: left;
        }

        

        .stacked-layout .section-header {
            background: white;
            padding: 1.5rem;
            border-radius: 12px;
            margin-bottom: 1.5rem;
            box-shadow: var(--shadow-sm);
        }

        .hero-style .section-title {
            font-size: 1.4rem;
            background: var(--gradient-primary);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .minimal-style .section-title {
            font-size: 1rem;
            font-weight: 500;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .minimal-style .section-description {
            font-size: 0.8rem;
        }

        .boxed-layout {
            background: white;
            border-radius: 12px;
            padding: 1.5rem;
            box-shadow: var(--shadow-sm);
        }

        .cards-with-background .service-cards {
            background: rgba(255, 255, 255, 0.5);
            padding: 1rem;
            border-radius: 12px;
        }

        @media (max-width: 768px) {
            .layout-grid {
                grid-template-columns: 1fr;
                gap: 2rem;
            }
            
            .service-cards {
                grid-template-columns: 1fr;
                gap: 0.75rem;
            }
            
       
            
            .header h1 {
                font-size: 2rem;
            }
            
            .container {
                padding: 1rem;
            }
        }
</style>

@endsection

@section('content')
<div class="container">
        <div class="header">
            <h1>Choose Your Service Section Layout</h1>
            <p>Select the perfect layout for your services section. Each layout includes a title, description, and three service cards arranged horizontally.</p>
        </div>

        <div class="layout-grid">
            <!-- Centered Layout -->
            <div class="layout-option">
                <div class="layout-header">
                    <h3 class="layout-title">Centered Layout</h3>
                    <span class="layout-badge">Classic</span>
                </div>
                <div class="layout-preview">
                    <div class="service-section centered-layout">
                        <h3 class="section-title">Our Services</h3>
                        <p class="section-description">We provide comprehensive solutions tailored to meet your business needs and drive growth.</p>
                        <div class="service-cards">
                            <div class="service-card">
                                <div class="service-icon">🎨</div>
                                <div class="service-card-title">Design</div>
                                <div class="service-card-text">Creative design solutions</div>
                            </div>
                            <div class="service-card">
                                <div class="service-icon">💻</div>
                                <div class="service-card-title">Development</div>
                                <div class="service-card-text">Custom web development</div>
                            </div>
                            <div class="service-card">
                                <div class="service-icon">📈</div>
                                <div class="service-card-title">Marketing</div>
                                <div class="service-card-text">Digital marketing strategies</div>
                            </div>
                        </div>
                    </div>
                </div>
                <p class="layout-description">
                    Clean, centered layout with title and description above the service cards. Perfect for balanced, professional presentation.
                </p>
                <button class="select-button" onclick="selectLayout(this, 'centered')">Select Layout</button>
            </div>

            <!-- Left Aligned Layout -->
            <div class="layout-option">
                <div class="layout-header">
                    <h3 class="layout-title">Left Aligned</h3>
                    <span class="layout-badge">Modern</span>
                </div>
                <div class="layout-preview">
                    <div class="service-section left-aligned-layout">
                        <h3 class="section-title">What We Offer</h3>
                        <p class="section-description">Discover our range of professional services designed to help your business succeed in today's competitive market.</p>
                        <div class="service-cards">
                            <div class="service-card">
                                <div class="service-icon">⚡</div>
                                <div class="service-card-title">Strategy</div>
                                <div class="service-card-text">Business strategy consulting</div>
                            </div>
                            <div class="service-card">
                                <div class="service-icon">🛠️</div>
                                <div class="service-card-title">Implementation</div>
                                <div class="service-card-text">End-to-end execution</div>
                            </div>
                            <div class="service-card">
                                <div class="service-icon">📊</div>
                                <div class="service-card-title">Analytics</div>
                                <div class="service-card-text">Data-driven insights</div>
                            </div>
                        </div>
                    </div>
                </div>
                <p class="layout-description">
                    Left-aligned text with natural reading flow. Great for scannable content and modern web designs.
                </p>
                <button class="select-button" onclick="selectLayout(this, 'left-aligned')">Select Layout</button>
            </div>

            <!-- Split Layout -->
            {{-- <div class="layout-option">
                <div class="layout-header">
                    <h3 class="layout-title">Split Layout</h3>
                    <span class="layout-badge">Dynamic</span>
                </div>
                <div class="layout-preview">
                    <div class="service-section split-layout">
                        <div class="section-header">
                            <h3 class="section-title">Our Expertise</h3>
                            <p class="section-description">We combine years of experience with cutting-edge technology to deliver exceptional results for our clients.</p>
                        </div>
                        <div class="service-cards">
                            <div class="service-card">
                                <div class="service-icon">🚀</div>
                                <div class="service-card-title">Innovation</div>
                                <div class="service-card-text">Next-gen solutions</div>
                            </div>
                            <div class="service-card">
                                <div class="service-icon">🎯</div>
                                <div class="service-card-title">Precision</div>
                                <div class="service-card-text">Targeted approach</div>
                            </div>
                            <div class="service-card">
                                <div class="service-icon">⭐</div>
                                <div class="service-card-title">Excellence</div>
                                <div class="service-card-text">Premium quality</div>
                            </div>
                        </div>
                    </div>
                </div>
                <p class="layout-description">
                    Split design with header content on the left and service cards on the right. Creates visual balance and hierarchy.
                </p>
                <button class="select-button" onclick="selectLayout(this, 'split')">Select Layout</button>
            </div> --}}

            <!-- Stacked with Card Header -->
            <div class="layout-option">
                <div class="layout-header">
                    <h3 class="layout-title">Stacked Cards</h3>
                    <span class="layout-badge">Structured</span>
                </div>
                <div class="layout-preview">
                    <div class="service-section stacked-layout">
                        <div class="section-header">
                            <h3 class="section-title">Professional Services</h3>
                            <p class="section-description">Transform your business with our comprehensive suite of professional services and expert guidance.</p>
                        </div>
                        <div class="service-cards">
                            <div class="service-card">
                                <div class="service-icon">💡</div>
                                <div class="service-card-title">Consulting</div>
                                <div class="service-card-text">Expert advice & guidance</div>
                            </div>
                            <div class="service-card">
                                <div class="service-icon">🔧</div>
                                <div class="service-card-title">Solutions</div>
                                <div class="service-card-text">Custom-built systems</div>
                            </div>
                            <div class="service-card">
                                <div class="service-card">
                                <div class="service-icon">🏆</div>
                                <div class="service-card-title">Support</div>
                                <div class="service-card-text">Ongoing maintenance</div>
                            </div>
                        </div>
                    </div>
                </div>
                <p class="layout-description">
                    Header content in a separate card above the service cards. Provides clear separation and emphasis on the section introduction.
                </p>
                <button class="select-button" onclick="selectLayout(this, 'stacked')">Select Layout</button>
            </div>   
        </div>

        
             <!-- Hero Style -->
            <div class="layout-option">
                <div class="layout-header">
                    <h3 class="layout-title">Hero Style</h3>
                    <span class="layout-badge">Bold</span>
                </div>
                <div class="layout-preview">
                    <div class="service-section hero-style centered-layout">
                        <h3 class="section-title">Exceptional Services</h3>
                        <p class="section-description">Experience the difference with our premium service offerings designed to exceed your expectations and deliver outstanding results.</p>
                        <div class="service-cards">
                            <div class="service-card">
                                <div class="service-icon">💎</div>
                                <div class="service-card-title">Premium</div>
                                <div class="service-card-text">High-end solutions</div>
                            </div>
                            <div class="service-card">
                                <div class="service-icon">🎪</div>
                                <div class="service-card-title">Creative</div>
                                <div class="service-card-text">Innovative designs</div>
                            </div>
                            <div class="service-card">
                                <div class="service-icon">🌟</div>
                                <div class="service-card-title">Exclusive</div>
                                <div class="service-card-text">Unique experiences</div>
                            </div>
                        </div>
                    </div>
                </div>
                <p class="layout-description">
                    Bold, hero-style title with gradient text and centered alignment. Perfect for making a strong first impression.
                </p>
                <button class="select-button" onclick="selectLayout(this, 'hero')">Select Layout</button>
            </div>
        

          <!-- Minimal Style -->
            <div class="layout-option">
                <div class="layout-header">
                    <h3 class="layout-title">Minimal Clean</h3>
                    <span class="layout-badge">Elegant</span>
                </div>
                <div class="layout-preview">
                    <div class="service-section minimal-style">
                        <h3 class="section-title">SERVICES</h3>
                        <p class="section-description">Clean, minimal approach to showcase your core offerings with maximum impact and clarity.</p>
                        <div class="service-cards">
                            <div class="service-card">
                                <div class="service-icon">📝</div>
                                <div class="service-card-title">Planning</div>
                                <div class="service-card-text">Strategic planning</div>
                            </div>
                            <div class="service-card">
                                <div class="service-icon">✨</div>
                                <div class="service-card-title">Execution</div>
                                <div class="service-card-text">Flawless delivery</div>
                            </div>
                            <div class="service-card">
                                <div class="service-icon">📋</div>
                                <div class="service-card-title">Review</div>
                                <div class="service-card-text">Quality assurance</div>
                            </div>
                        </div>
                    </div>
                </div>
                <p class="layout-description">
                    Minimalist design with uppercase title and clean typography. Perfect for modern, sophisticated brands.
                </p>
                <button class="select-button" onclick="selectLayout(this, 'minimal')">Select Layout</button>
            </div>

            <!-- Cards with Background -->
            <div class="layout-option">
                <div class="layout-header">
                    <h3 class="layout-title">Highlighted Cards</h3>
                    <span class="layout-badge">Featured</span>
                </div>
                <div class="layout-preview">
                    <div class="service-section cards-with-background">
                        <h3 class="section-title">Featured Services</h3>
                        <p class="section-description">Our most popular services, carefully selected to provide maximum value and impact for your business growth.</p>
                        <div class="service-cards">
                            <div class="service-card">
                                <div class="service-icon">🔥</div>
                                <div class="service-card-title">Popular</div>
                                <div class="service-card-text">Most requested service</div>
                            </div>
                            <div class="service-card">
                                <div class="service-icon">⚡</div>
                                <div class="service-card-title">Fast</div>
                                <div class="service-card-text">Quick turnaround</div>
                            </div>
                            <div class="service-card">
                                <div class="service-icon">💯</div>
                                <div class="service-card-title">Proven</div>
                                <div class="service-card-text">Guaranteed results</div>
                            </div>
                        </div>
                    </div>
                </div>
                <p class="layout-description">
                    Service cards with subtle background highlighting to draw attention and create visual emphasis.
                </p>
                <button class="select-button" onclick="selectLayout(this, 'highlighted')">Select Layout</button>
            </div>

             <!-- Boxed Layout -->
            <div class="layout-option">
                <div class="layout-header">
                    <h3 class="layout-title">Boxed Content</h3>
                    <span class="layout-badge">Contained</span>
                </div>
                <div class="layout-preview">
                    <div class="service-section boxed-layout">
                        <h3 class="section-title">Core Services</h3>
                        <p class="section-description">Everything you need to succeed, packaged in our comprehensive service portfolio with proven results.</p>
                        <div class="service-cards">
                            <div class="service-card">
                                <div class="service-icon">🎨</div>
                                <div class="service-card-title">Branding</div>
                                <div class="service-card-text">Brand identity design</div>
                            </div>
                            <div class="service-card">
                                <div class="service-icon">📱</div>
                                <div class="service-card-title">Digital</div>
                                <div class="service-card-text">Web & mobile apps</div>
                            </div>
                            <div class="service-card">
                                <div class="service-icon">📢</div>
                                <div class="service-card-title">Promotion</div>
                                <div class="service-card-text">Marketing campaigns</div>
                            </div>
                        </div>
                    </div>
                </div>
                <p class="layout-description">
                    Contained design with background box around the entire section. Great for creating defined sections on busy pages.
                </p>
                <button class="select-button" onclick="selectLayout(this, 'boxed')">Select Layout</button>
            </div>
    </div>
@endsection
@section('script')
<script>
        let selectedLayout = null;

        function selectLayout(button, layoutType) {
            // Remove previous selection
            if (selectedLayout) {
                selectedLayout.classList.remove('selected');
                selectedLayout.textContent = 'Select Layout';
            }

            // Add new selection
            button.classList.add('selected');
            button.textContent = '✓ Selected';
            selectedLayout = button;

            // Store selection
            console.log('Selected layout:', layoutType);
            
            // Visual feedback
            button.style.transform = 'scale(0.95)';
            setTimeout(() => {
                button.style.transform = '';
            }, 150);

            // You can add callback here for integration
            // onLayoutSelected(layoutType);
        }

        // Animate cards on scroll
        document.addEventListener('DOMContentLoaded', function() {
            const options = document.querySelectorAll('.layout-option');
            
            const observer = new IntersectionObserver((entries) => {
                entries.forEach((entry, index) => {
                    if (entry.isIntersecting) {
                        setTimeout(() => {
                            entry.target.style.opacity = '1';
                            entry.target.style.transform = 'translateY(0)';
                        }, index * 100);
                    }
                });
            }, { threshold: 0.1 });

            options.forEach(option => {
                option.style.opacity = '0';
                option.style.transform = 'translateY(30px)';
                option.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
                observer.observe(option);
            });
        });

        // Add micro-interactions to service cards
        document.querySelectorAll('.service-card').forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-4px) scale(1.02)';
            });
            
            card.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(-2px) scale(1)';
            });
        });
    </script>
@endsection