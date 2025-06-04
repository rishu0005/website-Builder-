<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hero Layout Selector</title>
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
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
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
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 2rem;
            margin-bottom: 3rem;
        }

        .layout-card {
            background: var(--bg-card);
            border-radius: 16px;
            overflow: hidden;
            box-shadow: var(--shadow-lg);
            transition: all 0.3s ease;
            cursor: pointer;
            border: 2px solid transparent;
        }

        .layout-card:hover {
            transform: translateY(-4px);
            box-shadow: var(--shadow-xl);
            border-color: var(--primary-accent);
        }

        .layout-card.selected {
            border-color: var(--primary-accent);
            background: linear-gradient(135deg, rgba(59, 130, 246, 0.05) 0%, rgba(124, 58, 237, 0.05) 100%);
        }

        .layout-preview {
            height: 200px;
            position: relative;
            background: linear-gradient(135deg, #f1f5f9 0%, #e2e8f0 100%);
            overflow: hidden;
        }

        .layout-info {
            padding: 1.5rem;
        }

        .layout-title {
            font-size: 1.25rem;
            font-weight: 600;
            color: var(--text-primary);
            margin-bottom: 0.5rem;
        }

        .layout-description {
            color: var(--text-secondary);
            font-size: 0.9rem;
            margin-bottom: 1rem;
        }

        .layout-features {
            display: flex;
            flex-wrap: wrap;
            gap: 0.5rem;
        }

        .feature-tag {
            background: var(--primary-accent);
            color: white;
            padding: 0.25rem 0.75rem;
            border-radius: 20px;
            font-size: 0.75rem;
            font-weight: 500;
        }

        /* Layout Preview Styles */
        .preview-content {
            position: absolute;
            inset: 0;
            padding: 1rem;
            display: flex;
            align-items: center;
            font-size: 0.7rem;
        }

        /* Layout 1 - Right Image, Left Content */
        .layout-1 .preview-content {
            justify-content: space-between;
        }

        .layout-1 .content-area {
            flex: 1;
            background: rgba(59, 130, 246, 0.1);
            border-radius: 8px;
            padding: 0.75rem;
            margin-right: 0.5rem;
            display: flex;
            flex-direction: column;
            gap: 0.25rem;
        }

        .layout-1 .image-area {
            width: 60px;
            height: 60px;
            background: var(--gradient-primary);
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: bold;
        }

        /* Layout 2 - Left Image, Center Content, Right Image */
        .layout-2 .preview-content {
            justify-content: space-between;
            gap: 0.5rem;
        }

        .layout-2 .left-image {
            width: 40px;
            height: 40px;
            background: var(--gradient-secondary);
            border-radius: 6px;
        }

        .layout-2 .content-area {
            flex: 1;
            background: rgba(124, 58, 237, 0.1);
            border-radius: 8px;
            padding: 0.75rem;
            display: flex;
            flex-direction: column;
            gap: 0.25rem;
        }

        .layout-2 .right-image {
            width: 50px;
            height: 50px;
            background: var(--gradient-primary);
            border-radius: 6px;
        }

        /* Layout 3 - Centered Content */
        .layout-3 .preview-content {
            justify-content: center;
        }

        .layout-3 .content-area {
            max-width: 80%;
            background: rgba(236, 72, 153, 0.1);
            border-radius: 8px;
            padding: 1rem;
            text-align: center;
            display: flex;
            flex-direction: column;
            gap: 0.25rem;
        }

        .preview-text {
            height: 8px;
            background: var(--text-muted);
            border-radius: 4px;
            opacity: 0.6;
        }

        .preview-text.title {
            background: var(--text-primary);
            opacity: 0.8;
            margin-bottom: 0.25rem;
        }

        .preview-text.subtitle {
            width: 80%;
            background: var(--text-secondary);
        }

        .preview-text.description {
            width: 90%;
            height: 6px;
        }

        .preview-button {
            width: 40px;
            height: 16px;
            background: var(--primary-accent);
            border-radius: 8px;
            margin-top: 0.25rem;
        }

        .layout-3 .preview-button {
            align-self: center;
        }

        .selected-layout {
            margin-top: 2rem;
            padding: 2rem;
            background: var(--bg-card);
            border-radius: 16px;
            box-shadow: var(--shadow-lg);
            border-left: 4px solid var(--primary-accent);
        }

        .selected-layout h3 {
            color: var(--primary-accent);
            margin-bottom: 1rem;
            font-size: 1.5rem;
        }

        .implementation-preview {
            background: var(--bg-primary);
            border-radius: 12px;
            padding: 2rem;
            margin-top: 1rem;
            border: 1px solid var(--border-color);
        }

        .btn-primary {
            background: var(--gradient-primary);
            color: white;
            border: none;
            padding: 0.75rem 2rem;
            border-radius: 8px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            margin-top: 1rem;
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: var(--shadow-md);
        }

        @media (max-width: 768px) {
            .layout-selector {
                grid-template-columns: 1fr;
            }
            
            .header h1 {
                font-size: 2rem;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Choose Your Hero Layout</h1>
            <p>Select the perfect layout structure for your hero section. Preview how your content will be arranged before making your choice.</p>
        </div>

        <div class="layout-selector">
            <!-- Layout 1: Right Image, Left Content -->
            <div class="layout-card" data-layout="1">
                <div class="layout-preview layout-1">
                    <div class="preview-content">
                        <div class="content-area">
                            <div class="preview-text title"></div>
                            <div class="preview-text subtitle"></div>
                            <div class="preview-text description"></div>
                            <div class="preview-text description" style="width: 70%;"></div>
                            <div class="preview-button"></div>
                        </div>
                        <div class="image-area">IMG</div>
                    </div>
                </div>
                <div class="layout-info">
                    <h3 class="layout-title">Split Layout</h3>
                    <p class="layout-description">Content on the left with a prominent background image on the right. Perfect for showcasing products or featured visuals.</p>
                    <div class="layout-features">
                        <span class="feature-tag">Left Content</span>
                        <span class="feature-tag">Right Image</span>
                        <span class="feature-tag">Classic</span>
                    </div>
                </div>
            </div>

            <!-- Layout 2: Left Image, Center Content, Right Background -->
            <div class="layout-card" data-layout="2">
                <div class="layout-preview layout-2">
                    <div class="preview-content">
                        {{-- <div class="left-image"></div> --}}
                        <div class="content-area">
                            <div class="preview-text title"></div>
                            <div class="preview-text subtitle"></div>
                            <div class="preview-text description"></div>
                            <div class="preview-button"></div>
                        </div>
                        <div class="right-image"></div>
                    </div>
                </div>
                <div class="layout-info">
                    <h3 class="layout-title">Enhanced Split</h3>
                    <p class="layout-description">All elements of the split layout plus an additional left-side image for extra visual impact and storytelling.</p>
                    <div class="layout-features">
                        <span class="feature-tag">Dual Images</span>
                        <span class="feature-tag">Center Content</span>
                        <span class="feature-tag">Premium</span>
                    </div>
                </div>
            </div>

            <!-- Layout 3: Centered Content -->
            <div class="layout-card" data-layout="3">
                <div class="layout-preview layout-3">
                    <div class="preview-content">
                        <div class="content-area">
                            <div class="preview-text title"></div>
                            <div class="preview-text subtitle"></div>
                            <div class="preview-text description"></div>
                            <div class="preview-text description" style="width: 85%;"></div>
                            <div class="preview-button"></div>
                        </div>
                    </div>
                </div>
                <div class="layout-info">
                    <h3 class="layout-title">Centered Focus</h3>
                    <p class="layout-description">All content perfectly centered for maximum impact. Ideal for bold statements and call-to-action focused designs.</p>
                    <div class="layout-features">
                        <span class="feature-tag">Centered</span>
                        <span class="feature-tag">Minimal</span>
                        <span class="feature-tag">Bold</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="selected-layout" id="selectedLayout" style="display: none;">
            <h3>Selected Layout: <span id="layoutName"></span></h3>
            <p id="layoutDetails"></p>
            <div class="implementation-preview" id="implementationPreview"></div>
            <a href="{{ route('hero') }}" class="btn-primary text-decoration-none" onclick="implementLayout()">Use This Layout</a>
        </div>
    </div>

    <script>
        const layouts = {
            1: {
                name: "Split Layout",
                details: "This layout places your content (heading, subheading, description, and CTA button) on the left side, with a prominent background image on the right. It's perfect for showcasing products, services, or creating visual interest while maintaining readability.",
                preview: `
                    <div style="display: flex; align-items: center; gap: 2rem; min-height: 300px;">
                        <div style="flex: 1;">
                            <h2 style="font-size: 2.5rem; font-weight: bold; margin-bottom: 1rem; background: var(--gradient-primary); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">Your Powerful Headline</h2>
                            <h3 style="font-size: 1.5rem; color: var(--text-secondary); margin-bottom: 1rem;">Compelling Subheading</h3>
                            <p style="color: var(--text-secondary); margin-bottom: 2rem; font-size: 1.1rem;">Your detailed description goes here, explaining your value proposition and what makes your offering unique. This layout gives your text plenty of space to breathe.</p>
                            <button style="background: var(--gradient-primary); color: white; border: none; padding: 1rem 2rem; border-radius: 8px; font-weight: 600; cursor: pointer;">Get Started</button>
                        </div>
                        <div style="flex: 1; height: 250px; background: var(--gradient-primary); border-radius: 12px; display: flex; align-items: center; justify-content: center; color: white; font-size: 1.2rem; font-weight: bold;">Background Image Area</div>
                    </div>`
            },
            2: {
                name: "Enhanced Split Layout",
                details: "This enhanced version includes everything from the split layout, plus an additional image on the left side. Perfect for brands that want to showcase multiple visual elements or create a more dynamic, visually rich hero section.",
                preview: `
                    <div style="display: flex; align-items: center; gap: 1.5rem; min-height: 300px;">
                        
                        <div style="flex: 1;">
                            <h2 style="font-size: 2.2rem; font-weight: bold; margin-bottom: 1rem; background: var(--gradient-primary); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">Enhanced Headline</h2>
                            <h3 style="font-size: 1.3rem; color: var(--text-secondary); margin-bottom: 1rem;">Dynamic Subheading</h3>
                            <p style="color: var(--text-secondary); margin-bottom: 2rem;">Your description with extra visual elements for enhanced storytelling and brand presence.</p>
                            <button style="background: var(--gradient-primary); color: white; border: none; padding: 1rem 2rem; border-radius: 8px; font-weight: 600; cursor: pointer;">Learn More</button>
                        </div>
                        <div style="width: 200px; height: 200px; background: var(--gradient-primary); border-radius: 12px; display: flex; align-items: center; justify-content: center; color: white; font-weight: bold;">Main Image</div>
                    </div>`
            },
            3: {
                name: "Centered Focus Layout",
                details: "All content is perfectly centered for maximum impact and focus. This layout is ideal for bold statements, announcements, or when you want to create a strong, focused call-to-action without distractions.",
                preview: `
                    <div style="text-align: center; padding: 3rem 0; min-height: 300px; display: flex; flex-direction: column; justify-content: center;">
                        <h2 style="font-size: 3rem; font-weight: bold; margin-bottom: 1rem; background: var(--gradient-primary); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">Centered Impact</h2>
                        <h3 style="font-size: 1.8rem; color: var(--text-secondary); margin-bottom: 1.5rem;">Powerful Subheading</h3>
                        <p style="color: var(--text-secondary); margin-bottom: 2.5rem; font-size: 1.2rem; max-width: 600px; margin-left: auto; margin-right: auto;">Your compelling description takes center stage, creating focus and driving action with minimal distractions.</p>
                        <div>
                            <button style="background: var(--gradient-primary); color: white; border: none; padding: 1.25rem 3rem; border-radius: 8px; font-weight: 600; cursor: pointer; font-size: 1.1rem;">Take Action Now</button>
                        </div>
                    </div>`
            }
        };

        document.addEventListener('DOMContentLoaded', function() {
            const layoutCards = document.querySelectorAll('.layout-card');
            const selectedLayout = document.getElementById('selectedLayout');
            const layoutName = document.getElementById('layoutName');
            const layoutDetails = document.getElementById('layoutDetails');
            const implementationPreview = document.getElementById('implementationPreview');

            layoutCards.forEach(card => {
                card.addEventListener('click', function() {
                    // Remove selected class from all cards
                    layoutCards.forEach(c => c.classList.remove('selected'));
                    
                    // Add selected class to clicked card
                    this.classList.add('selected');
                    
                    // Get layout data
                    const layoutId = this.dataset.layout;
                    const layout = layouts[layoutId];
                    
                    // Update selected layout info
                    layoutName.textContent = layout.name;
                    layoutDetails.textContent = layout.details;
                    implementationPreview.innerHTML = layout.preview;
                    
                    // Show selected layout section
                    selectedLayout.style.display = 'block';
                    
                    // Smooth scroll to selected layout
                    selectedLayout.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
                });
            });
        });

        function implementLayout() {
            const selectedCard = document.querySelector('.layout-card.selected');
            if (selectedCard) {
                const layoutId = selectedCard.dataset.layout;
                const layout = layouts[layoutId];
                alert(`Great choice! You've selected the ${layout.name}. This layout will now be implemented for your hero section.`);
                
                // Here you would typically send the layout choice to your backend
                // or trigger the next step in your application flow
                console.log('Selected layout:', layoutId, layout);
            }
        }

        // Add some hover animations
        document.querySelectorAll('.layout-card').forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-4px)';
            });
            
            card.addEventListener('mouseleave', function() {
                if (!this.classList.contains('selected')) {
                    this.style.transform = 'translateY(0)';
                }
            });
        });
    </script>
</body>
</html>