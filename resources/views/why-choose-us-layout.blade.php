<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Why Choose Us - Layout Variations</title>
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
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: var(--bg-primary);
            color: var(--text-primary);
            line-height: 1.6;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .section {
            padding: 80px 0;
            margin-bottom: 40px;
        }

        .section-title {
            text-align: center;
            margin-bottom: 60px;
        }

        .section-title h2 {
            font-size: 2.5rem;
            font-weight: 700;
            background: var(--gradient-primary);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 16px;
        }

        .section-title p {
            font-size: 1.2rem;
            color: var(--text-secondary);
            max-width: 600px;
            margin: 0 auto;
        }

        /* Layout 1: Grid Cards */
        .grid-layout {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin-top: 40px;
        }

        .feature-card {
            background: var(--bg-card);
            border-radius: 16px;
            padding: 40px 30px;
            box-shadow: var(--shadow-md);
            border: 1px solid var(--border-color);
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .feature-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: var(--gradient-primary);
        }

        .feature-card:hover {
            transform: translateY(-8px);
            box-shadow: var(--shadow-xl);
        }

        .feature-icon {
            width: 60px;
            height: 60px;
            border-radius: 12px;
            background: var(--gradient-primary);
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 24px;
            font-size: 24px;
            color: white;
        }

        .feature-card h3 {
            font-size: 1.5rem;
            font-weight: 600;
            margin-bottom: 16px;
            color: var(--text-primary);
        }

        .feature-card p {
            color: var(--text-secondary);
            line-height: 1.6;
        }

        /* Layout 2: Horizontal Cards */
        .horizontal-layout {
            display: flex;
            flex-direction: column;
            gap: 30px;
            margin-top: 40px;
        }

        .horizontal-card {
            background: var(--bg-card);
            border-radius: 16px;
            padding: 40px;
            box-shadow: var(--shadow-md);
            border: 1px solid var(--border-color);
            display: flex;
            align-items: center;
            gap: 40px;
            transition: all 0.3s ease;
        }

        .horizontal-card:hover {
            transform: translateX(8px);
            box-shadow: var(--shadow-lg);
        }

        .horizontal-card:nth-child(even) {
            flex-direction: row-reverse;
        }

        .horizontal-card:nth-child(even):hover {
            transform: translateX(-8px);
        }

        .horizontal-icon {
            width: 80px;
            height: 80px;
            border-radius: 16px;
            background: var(--gradient-secondary);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 32px;
            color: white;
            flex-shrink: 0;
        }

        .horizontal-content h3 {
            font-size: 1.8rem;
            font-weight: 600;
            margin-bottom: 12px;
            color: var(--text-primary);
        }

        .horizontal-content p {
            color: var(--text-secondary);
            font-size: 1.1rem;
            line-height: 1.6;
        }

        /* Layout 3: Centered List */
        .centered-layout {
            max-width: 800px;
            margin: 40px auto 0;
        }

        .centered-item {
            text-align: center;
            margin-bottom: 50px;
            padding: 30px;
            border-radius: 16px;
            background: var(--bg-card);
            box-shadow: var(--shadow-sm);
            border: 1px solid var(--border-light);
            transition: all 0.3s ease;
        }

        .centered-item:hover {
            box-shadow: var(--shadow-md);
            transform: scale(1.02);
        }

        .centered-icon {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            background: var(--gradient-primary);
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 24px;
            font-size: 40px;
            color: white;
        }

        .centered-item h3 {
            font-size: 2rem;
            font-weight: 600;
            margin-bottom: 16px;
            color: var(--text-primary);
        }

        .centered-item p {
            color: var(--text-secondary);
            font-size: 1.1rem;
            line-height: 1.7;
        }

        /* Layout 4: Statistics Cards */
        .stats-layout {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
            margin-top: 40px;
        }

        .stat-card {
            background: var(--bg-card);
            border-radius: 16px;
            padding: 40px 30px;
            text-align: center;
            box-shadow: var(--shadow-md);
            border: 1px solid var(--border-color);
            position: relative;
            overflow: hidden;
            transition: all 0.3s ease;
        }

        .stat-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: var(--gradient-primary);
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .stat-card:hover::before {
            opacity: 0.05;
        }

        .stat-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-xl);
        }

        .stat-number {
            font-size: 3rem;
            font-weight: 700;
            background: var(--gradient-primary);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 12px;
            position: relative;
            z-index: 1;
        }

        .stat-label {
            font-size: 1.2rem;
            font-weight: 600;
            color: var(--text-primary);
            margin-bottom: 16px;
            position: relative;
            z-index: 1;
        }

        .stat-description {
            color: var(--text-secondary);
            font-size: 0.95rem;
            line-height: 1.5;
            position: relative;
            z-index: 1;
        }

        /* Layout 5: Timeline */
        .timeline-layout {
            max-width: 600px;
            margin: 40px auto 0;
            position: relative;
        }

        .timeline-layout::before {
            content: '';
            position: absolute;
            left: 50%;
            top: 0;
            bottom: 0;
            width: 2px;
            background: var(--gradient-primary);
            transform: translateX(-50%);
        }

        .timeline-item {
            position: relative;
            margin-bottom: 50px;
            display: flex;
            align-items: center;
        }

        .timeline-item:nth-child(odd) {
            flex-direction: row-reverse;
        }

        .timeline-content {
            width: 45%;
            padding: 30px;
            background: var(--bg-card);
            border-radius: 12px;
            box-shadow: var(--shadow-md);
            border: 1px solid var(--border-color);
            transition: all 0.3s ease;
        }

        .timeline-content:hover {
            transform: scale(1.05);
            box-shadow: var(--shadow-lg);
        }

        .timeline-icon {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            background: var(--gradient-primary);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            color: white;
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            z-index: 2;
            border: 4px solid var(--bg-primary);
        }

        .timeline-content h3 {
            font-size: 1.4rem;
            font-weight: 600;
            margin-bottom: 12px;
            color: var(--text-primary);
        }

        .timeline-content p {
            color: var(--text-secondary);
            line-height: 1.6;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .section-title h2 {
                font-size: 2rem;
            }

            .horizontal-card {
                flex-direction: column !important;
                text-align: center;
                gap: 24px;
            }

            .timeline-layout::before {
                left: 30px;
            }

            .timeline-item {
                flex-direction: row !important;
                padding-left: 70px;
            }

            .timeline-content {
                width: 100%;
            }

            .timeline-icon {
                left: 30px;
                transform: translateX(-50%);
            }

            .stats-layout {
                grid-template-columns: 1fr;
            }

            .section {
                padding: 60px 0;
            }
        }

        /* Navigation */
        .nav {
            background: var(--bg-card);
            padding: 20px 0;
            box-shadow: var(--shadow-sm);
            position: sticky;
            top: 0;
            z-index: 100;
        }

        .nav-container {
            display: flex;
            justify-content: center;
            gap: 30px;
            flex-wrap: wrap;
        }

        .nav-link {
            padding: 12px 24px;
            border-radius: 8px;
            background: var(--bg-primary);
            color: var(--text-secondary);
            text-decoration: none;
            font-weight: 500;
            transition: all 0.3s ease;
            border: 1px solid var(--border-color);
        }

        .nav-link:hover {
            background: var(--gradient-primary);
            color: white;
            transform: translateY(-2px);
        }

        .section-divider {
            height: 1px;
            background: var(--gradient-primary);
            margin: 60px 0;
            opacity: 0.3;
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="nav">
        <div class="nav-container">
            <a href="#layout1" class="nav-link">Grid Cards</a>
            <a href="#layout2" class="nav-link">Horizontal</a>
            <a href="#layout3" class="nav-link">Centered</a>
            <a href="#layout4" class="nav-link">Statistics</a>
            <a href="#layout5" class="nav-link">Timeline</a>
        </div>
    </nav>

    <!-- Layout 1: Grid Cards -->
    <section id="layout1" class="section">
        <div class="container">
            <div class="section-title">
                <h2>Why Choose Us</h2>
                <p>Discover what makes us the perfect partner for your business success</p>
            </div>
            <div class="grid-layout">
                <div class="feature-card">
                    <div class="feature-icon">🚀</div>
                    <h3>Expert Team</h3>
                    <p>Our team of seasoned professionals brings years of experience and cutting-edge expertise to every project, ensuring exceptional results.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">⚡</div>
                    <h3>Fast Delivery</h3>
                    <p>We understand the importance of time in business. Our streamlined processes ensure rapid delivery without compromising quality.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">🎯</div>
                    <h3>Precision Focus</h3>
                    <p>Every solution is tailored to your specific needs. We focus on what matters most to deliver targeted, effective results.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">🛡️</div>
                    <h3>Reliable Support</h3>
                    <p>Our commitment doesn't end at delivery. We provide ongoing support and maintenance to ensure your continued success.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">💡</div>
                    <h3>Innovation</h3>
                    <p>We stay ahead of the curve with the latest technologies and methodologies to give you a competitive advantage.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">💰</div>
                    <h3>Cost Effective</h3>
                    <p>Maximum value for your investment. Our efficient processes and smart solutions help you achieve more while spending less.</p>
                </div>
            </div>
        </div>
    </section>

    <div class="section-divider"></div>

    <!-- Layout 2: Horizontal Cards -->
    <section id="layout2" class="section">
        <div class="container">
            <div class="section-title">
                <h2>Our Advantages</h2>
                <p>Experience the difference that sets us apart from the competition</p>
            </div>
            <div class="horizontal-layout">
                <div class="horizontal-card">
                    <div class="horizontal-icon">🏆</div>
                    <div class="horizontal-content">
                        <h3>Proven Track Record</h3>
                        <p>With over 500 successful projects and a 98% client satisfaction rate, our results speak for themselves. We've helped businesses across industries achieve their goals.</p>
                    </div>
                </div>
                <div class="horizontal-card">
                    <div class="horizontal-icon">🤝</div>
                    <div class="horizontal-content">
                        <h3>Partnership Approach</h3>
                        <p>We don't just provide services – we become your strategic partner. Our collaborative approach ensures we're aligned with your vision and objectives.</p>
                    </div>
                </div>
                <div class="horizontal-card">
                    <div class="horizontal-icon">🔄</div>
                    <div class="horizontal-content">
                        <h3>Agile Methodology</h3>
                        <p>Our flexible, iterative approach allows us to adapt quickly to changes and deliver solutions that evolve with your business needs.</p>
                    </div>
                </div>
                <div class="horizontal-card">
                    <div class="horizontal-icon">🌐</div>
                    <div class="horizontal-content">
                        <h3>Global Reach</h3>
                        <p>Local expertise with global perspective. We understand diverse markets and can help you expand your reach while maintaining quality standards.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="section-divider"></div>

    <!-- Layout 3: Centered List -->
    <section id="layout3" class="section">
        <div class="container">
            <div class="section-title">
                <h2>What Makes Us Different</h2>
                <p>Core values and principles that drive our exceptional service</p>
            </div>
            <div class="centered-layout">
                <div class="centered-item">
                    <div class="centered-icon">🎨</div>
                    <h3>Creative Excellence</h3>
                    <p>We blend creativity with technical expertise to deliver solutions that are not only functional but also aesthetically pleasing and user-friendly.</p>
                </div>
                <div class="centered-item">
                    <div class="centered-icon">📊</div>
                    <h3>Data-Driven Insights</h3>
                    <p>Every decision is backed by data. We use analytics and market research to ensure our strategies are effective and measurable.</p>
                </div>
                <div class="centered-item">
                    <div class="centered-icon">🔒</div>
                    <h3>Security First</h3>
                    <p>Your data and privacy are paramount. We implement industry-leading security measures to protect your information and maintain trust.</p>
                </div>
                <div class="centered-item">
                    <div class="centered-icon">🌟</div>
                    <h3>Customer Obsession</h3>
                    <p>Your success is our success. We go above and beyond to ensure every interaction exceeds your expectations and delivers real value.</p>
                </div>
            </div>
        </div>
    </section>

    <div class="section-divider"></div>

    <!-- Layout 4: Statistics Cards -->
    <section id="layout4" class="section">
        <div class="container">
            <div class="section-title">
                <h2>Numbers That Speak</h2>
                <p>Quantifiable proof of our commitment to excellence</p>
            </div>
            <div class="stats-layout">
                <div class="stat-card">
                    <div class="stat-number">500+</div>
                    <div class="stat-label">Projects Completed</div>
                    <div class="stat-description">Successfully delivered projects across various industries and scales</div>
                </div>
                <div class="stat-card">
                    <div class="stat-number">98%</div>
                    <div class="stat-label">Client Satisfaction</div>
                    <div class="stat-description">Consistently high ratings and positive feedback from our valued clients</div>
                </div>
                <div class="stat-card">
                    <div class="stat-number">24/7</div>
                    <div class="stat-label">Support Available</div>
                    <div class="stat-description">Round-the-clock assistance to ensure your business never stops</div>
                </div>
                <div class="stat-card">
                    <div class="stat-number">5</div>
                    <div class="stat-label">Years Experience</div>
                    <div class="stat-description">Half a decade of expertise and continuous learning in the industry</div>
                </div>
            </div>
        </div>
    </section>

    <div class="section-divider"></div>

    <!-- Layout 5: Timeline -->
    <section id="layout5" class="section">
        <div class="container">
            <div class="section-title">
                <h2>Our Journey</h2>
                <p>The evolution of our commitment to excellence</p>
            </div>
            <div class="timeline-layout">
                <div class="timeline-item">
                    <div class="timeline-content">
                        <h3>Foundation</h3>
                        <p>Started with a vision to transform businesses through innovative solutions and exceptional service quality.</p>
                    </div>
                    <div class="timeline-icon">🌱</div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-content">
                        <h3>Growth</h3>
                        <p>Expanded our team and capabilities, establishing ourselves as a trusted partner for businesses of all sizes.</p>
                    </div>
                    <div class="timeline-icon">📈</div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-content">
                        <h3>Innovation</h3>
                        <p>Invested in cutting-edge technologies and methodologies to stay ahead of industry trends and client needs.</p>
                    </div>
                    <div class="timeline-icon">🔬</div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-content">
                        <h3>Excellence</h3>
                        <p>Achieved industry recognition and built lasting relationships with clients who trust us with their most important projects.</p>
                    </div>
                    <div class="timeline-icon">🏆</div>
                </div>
            </div>
        </div>
    </section>

    <script>
        // Smooth scrolling for navigation links
        document.querySelectorAll('.nav-link').forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                const targetId = this.getAttribute('href');
                const targetSection = document.querySelector(targetId);
                
                targetSection.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            });
        });

        // Add scroll animation
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, observerOptions);

        // Observe all cards and items
        document.querySelectorAll('.feature-card, .horizontal-card, .centered-item, .stat-card, .timeline-item').forEach(el => {
            el.style.opacity = '0';
            el.style.transform = 'translateY(30px)';
            el.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
            observer.observe(el);
        });

        // Counter animation for statistics
        function animateCounter(element, target) {
            let current = 0;
            const increment = target / 50;
            const timer = setInterval(() => {
                current += increment;
                if (current >= target) {
                    current = target;
                    clearInterval(timer);
                }
                element.textContent = Math.floor(current) + (element.textContent.includes('%') ? '%' : element.textContent.includes('/') ? '/7' : '+');
            }, 30);
        }

        // Trigger counter animation when stat cards come into view
        const statObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const number = entry.target.querySelector('.stat-number');
                    const text = number.textContent;
                    const value = parseInt(text.replace(/\D/g, ''));
                    animateCounter(number, value);
                    statObserver.unobserve(entry.target);
                }
            });
        });

        document.querySelectorAll('.stat-card').forEach(card => {
            statObserver.observe(card);
        });
    </script>
</body>
</html>