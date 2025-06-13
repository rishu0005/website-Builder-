@extends('main-layout')
@section('title', 'gallery layout selector')

@section('style')
    <style>

        .gallery-card {
            /* max-width: 1200px; */
            margin: 0 auto;
            background: var(--bg-card);
            /* border-radius: 24px; */
            box-shadow: var(--shadow-xl);
            overflow: hidden;
            border: 1px solid var(--border-light);
        }

        .card-header {
            background: var(--gradient-primary);
            padding: 2rem;
            color: white;
            text-align: center;
        }

        .card-title {
            font-size: 2.5rem;
            font-weight: 800;
            margin-bottom: 0.5rem;
            letter-spacing: -0.02em;
        }

        .card-subtitle {
            font-size: 1.1rem;
            opacity: 0.9;
        }

        .card-content {
            padding: 2.5rem;
        }

        .layout-selector {
            margin-bottom: 3rem;
        }

        .selector-title {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--text-primary);
            margin-bottom: 1.5rem;
            text-align: center;
        }

        .layout-options {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 1.5rem;
            margin-bottom: 2rem;
        }

        .layout-option {
            border: 2px solid var(--border-color);
            border-radius: 16px;
            padding: 1.5rem;
            cursor: pointer;
            transition: all 0.3s ease;
            background: var(--bg-secondary);
            position: relative;
            overflow: hidden;
        }

        .layout-option:hover {
            border-color: var(--primary-accent);
            transform: translateY(-4px);
            box-shadow: var(--shadow-lg);
        }

        .layout-option.selected {
            border-color: var(--primary-accent);
        }

    
    

        .layout-preview {
            width: 100%;
            height: 120px;
            background: var(--bg-primary);
            border-radius: 8px;
            margin-bottom: 1rem;
            position: relative;
            overflow: hidden;
        }

        .layout-name {
            font-size: 1.25rem;
            font-weight: 600;
            color: var(--text-primary);
            margin-bottom: 0.5rem;
        }

        .layout-description {
            color: var(--text-secondary);
            font-size: 0.95rem;
            line-height: 1.4;
        }

        /* Grid Layout Preview */
        .grid-preview {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 8px;
            padding: 12px;
            height: 100%;
        }

        .grid-item {
            background: var(--gradient-primary);
            border-radius: 6px;
            opacity: 0.7;
        }

        /* Masonry Layout Preview */
        .masonry-preview {
            display: flex;
            gap: 8px;
            padding: 12px;
            height: 100%;
        }

        .masonry-column {
            flex: 1;
            display: flex;
            flex-direction: column;
            gap: 8px;
        }

        .masonry-item {
            background: var(--gradient-secondary);
            border-radius: 6px;
            opacity: 0.7;
        }

        .masonry-item:nth-child(1) { height: 40%; }
        .masonry-item:nth-child(2) { height: 60%; }
        .masonry-item:nth-child(3) { height: 50%; }
        .masonry-item:nth-child(4) { height: 50%; }
        .masonry-item:nth-child(5) { height: 70%; }
        .masonry-item:nth-child(6) { height: 30%; }

        /* Carousel Layout Preview */
        .carousel-preview {
            display: flex;
            align-items: center;
            gap: 8px;
            padding: 12px;
            height: 100%;
            position: relative;
        }

        .carousel-item {
            min-width: 60px;
            height: 80%;
            background: linear-gradient(135deg, var(--primary-accent) 0%, var(--secondary-light) 100%);
            border-radius: 6px;
            opacity: 0.7;
            transition: all 0.3s ease;
        }

        .carousel-item:nth-child(2) {
            transform: scale(1.1);
            opacity: 1;
            box-shadow: var(--shadow-md);
        }

        .selected-layout-display {
            background: var(--bg-primary);
            border-radius: 16px;
            padding: 2rem;
            text-align: center;
            border: 2px dashed var(--border-color);
            transition: all 0.3s ease;
        }

        .selected-layout-display.active {
            border-color: var(--secondary-accent);
            background: linear-gradient(135deg, rgba(236, 72, 153, 0.05) 0%, rgba(124, 58, 237, 0.05) 100%);
        }

        .selected-info {
            font-size: 1.1rem;
            color: var(--text-secondary);
            margin-bottom: 1rem;
        }

        .selected-title {
            font-size: 1.8rem;
            font-weight: 700;
            background: var(--gradient-primary);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 0.5rem;
        }

        .selected-description {
            color: var(--text-secondary);
            max-width: 600px;
            margin: 0 auto;
        }

        .action-buttons {
            display: flex;
            gap: 1rem;
            justify-content: center;
            margin-top: 2rem;
        }

        .btn {
            padding: 0.875rem 2rem;
            border: none;
            border-radius: 12px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            font-size: 1rem;
        }

        .btn-primary {
            background: var(--gradient-primary);
            color: white;
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: var(--shadow-md);
        }

        .btn-secondary {
            background: var(--bg-secondary);
            color: var(--text-secondary);
            border: 2px solid var(--border-color);
        }

        .btn-secondary:hover {
            border-color: var(--primary-accent);
            color: var(--primary-accent);
        }

        @media (max-width: 768px) {
            body {
                padding: 1rem;
            }
            
            .card-header {
                padding: 1.5rem;
            }
            
            .card-title {
                font-size: 2rem;
            }
            
            .card-content {
                padding: 1.5rem;
            }
            
            .layout-options {
                grid-template-columns: 1fr;
            }
            
            .action-buttons {
                flex-direction: column;
                align-items: center;
            }
        }
    </style>
@endsection

@section('content')

    <div class="gallery-card">
        <div class="card-header">
            <h1 class="card-title">Gallery Layout Selector</h1>
            <p class="card-subtitle">Choose your preferred gallery layout style</p>
        </div>
        
        <div class="card-content">
            <div class="layout-selector">
                <h2 class="selector-title">Select Gallery Layout</h2>
                
                <div class="layout-options">
                    <div class="layout-option" data-layout="grid">
                        <div class="layout-preview">
                            <div class="grid-preview">
                                <div class="grid-item"></div>
                                <div class="grid-item"></div>
                                <div class="grid-item"></div>
                                <div class="grid-item"></div>
                                <div class="grid-item"></div>
                                <div class="grid-item"></div>
                            </div>
                        </div>
                        <h3 class="layout-name">Grid Layout</h3>
                        <p class="layout-description">Classic grid arrangement with equal-sized items in neat rows and columns. Perfect for showcasing images with consistent dimensions.</p>
                    </div>
                    
                    <div class="layout-option" data-layout="masonry">
                        <div class="layout-preview">
                            <div class="masonry-preview">
                                <div class="masonry-column">
                                    <div class="masonry-item"></div>
                                    <div class="masonry-item"></div>
                                </div>
                                <div class="masonry-column">
                                    <div class="masonry-item"></div>
                                    <div class="masonry-item"></div>
                                </div>
                                <div class="masonry-column">
                                    <div class="masonry-item"></div>
                                    <div class="masonry-item"></div>
                                </div>
                            </div>
                        </div>
                        <h3 class="layout-name">Masonry Layout</h3>
                        <p class="layout-description">Pinterest-style layout with varying heights creating an organic, flowing arrangement. Ideal for mixed content sizes and creative portfolios.</p>
                    </div>
                    
                    <div class="layout-option" data-layout="carousel">
                        <div class="layout-preview">
                            <div class="carousel-preview">
                                <div class="carousel-item"></div>
                                <div class="carousel-item"></div>
                                <div class="carousel-item"></div>
                                <div class="carousel-item"></div>
                            </div>
                        </div>
                        <h3 class="layout-name">Carousel Layout</h3>
                        <p class="layout-description">Horizontal scrolling layout with focus on one item at a time. Great for storytelling and guided browsing experiences.</p>
                    </div>
                </div>
            </div>
            
            {{-- <div class="selected-layout-display" id="selectedDisplay">
                <div class="selected-info">Please select a layout option above</div>
                <div class="selected-title">No Layout Selected</div>
                <div class="selected-description">Choose one of the three gallery layouts to see more details and customization options.</div>
            </div> --}}
            
            <div class="action-buttons">
                <button class="btn btn-primary">Apply Layout</button>
                <button class="btn btn-secondary">Preview</button>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        const layoutOptions = document.querySelectorAll('.layout-option');
        const selectedDisplay = document.getElementById('selectedDisplay');
        const applyBtn = document.getElementById('applyBtn');
        const previewBtn = document.getElementById('previewBtn');
        
        let selectedLayout = null;
        
        const layoutDetails = {
            grid: {
                title: "Grid Layout Selected",
                description: "You've chosen the classic grid layout. This arrangement displays your gallery items in a clean, organized grid with equal spacing. Perfect for portfolios, product galleries, and image collections where consistency is key."
            },
            masonry: {
                title: "Masonry Layout Selected", 
                description: "You've chosen the masonry layout. This Pinterest-inspired arrangement creates a dynamic, flowing gallery where items of different sizes fit together seamlessly. Ideal for creative portfolios and mixed media content."
            },
            carousel: {
                title: "Carousel Layout Selected",
                description: "You've chosen the carousel layout. This horizontal scrolling design focuses attention on individual items while providing smooth navigation. Perfect for storytelling, featured content, and mobile-friendly galleries."
            }
        };
        
        layoutOptions.forEach(option => {
            option.addEventListener('click', function() {
                // Remove previous selection
                layoutOptions.forEach(opt => opt.classList.remove('selected'));
                
                // Add selection to clicked option
                this.classList.add('selected');
                
                // Get selected layout
                selectedLayout = this.dataset.layout;
                
                // Update display
                updateSelectedDisplay();
                
                // Enable buttons
                applyBtn.disabled = false;
                previewBtn.disabled = false;
                applyBtn.style.opacity = '1';
                previewBtn.style.opacity = '1';
            });
        });
        
        function updateSelectedDisplay() {
            if (selectedLayout && layoutDetails[selectedLayout]) {
                const details = layoutDetails[selectedLayout];
                selectedDisplay.classList.add('active');
                selectedDisplay.innerHTML = `
                    <div class="selected-info">✓ Layout Selected</div>
                    <div class="selected-title">${details.title}</div>
                    <div class="selected-description">${details.description}</div>
                `;
            }
        }
        
        // Button actions
        applyBtn.addEventListener('click', function() {
            if (selectedLayout) {
                this.style.transform = 'scale(0.95)';
                setTimeout(() => {
                    this.style.transform = 'scale(1)';
                }, 150);
                
                alert(`${layoutDetails[selectedLayout].title.replace(' Selected', '')} has been applied to your gallery!`);
            }
        });
        
        previewBtn.addEventListener('click', function() {
            if (selectedLayout) {
                this.style.transform = 'scale(0.95)';
                setTimeout(() => {
                    this.style.transform = 'scale(1)';
                }, 150);
                
                alert(`Opening preview for ${layoutDetails[selectedLayout].title.replace(' Selected', '')}...`);
            }
        });
        
        // Initial button state
        applyBtn.style.opacity = '0.5';
        previewBtn.style.opacity = '0.5';
    </script>
@endsection