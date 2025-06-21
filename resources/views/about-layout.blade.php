@extends('main-layout')
@section('title' , 'About section layout')
@section('style')
<style>

        /* Layout Selector Form */
        .layout-selector {
            padding: 30px 20px;
            background: #f8f9fa;
            border-bottom: 1px solid #e9ecef;
        }

        .selector-form {
            max-width: 800px;
            margin: 0 auto;
            text-align: center;
        }

        .form-title {
            font-size: 1.5rem;
            color: #2d3748;
            margin-bottom: 10px;
            font-weight: 700;
        }

        .form-subtitle {
            color: #718096;
            margin-bottom: 30px;
            font-size: 1rem;
        }

        .layout-options {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin-bottom: 30px;
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
            padding: 15px 25px;
            border: 2px solid #6c63ff;
            background: white;
            color: #6c63ff;
            border-radius: 50px;
            cursor: pointer;
            transition: all 0.3s ease;
            font-weight: 600;
            display: block;
            min-width: 140px;
        }

        .layout-btn:hover {
            background: #6c63ff;
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(108, 99, 255, 0.3);
        }

        .layout-radio:checked + .layout-btn {
            background: #6c63ff;
            color: white;
            transform: scale(1.05);
        }

        .form-actions {
            display: flex;
            justify-content: center;
            gap: 20px;
            align-items: center;
        }

        .preview-btn {
            padding: 12px 25px;
            background: #e2e8f0;
            color: #4a5568;
            border: none;
            border-radius: 50px;
            cursor: pointer;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .preview-btn:hover {
            background: #cbd5e0;
            transform: translateY(-2px);
        }

        .redirect-btn {
            padding: 15px 35px;
            background:     linear-gradient(135deg, #6c63ff, #764ba2);
            color: white;
            border: none;
            border-radius: 50px;
            cursor: pointer;
            font-weight: 700;
            font-size: 1rem;
            transition: all 0.3s ease;
            box-shadow: 0 5px 15px rgba(162, 98, 168, 0.3);
        }

        .redirect-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 25px rgba(135, 102, 142, 0.4);
        }

        .redirect-btn:disabled {
            background: #a0aec0;
            cursor: not-allowed;
            transform: none;
            box-shadow: none;
        }

        .selection-info {
            background: #e6fffa;
            border: 1px solid #81e6d9;
            border-radius: 10px;
            padding: 15px;
            margin: 20px 0;
            color: #234e52;
            font-weight: 500;
        }

        /* About Section */
        .about-section {
            padding: 60px 40px;
            min-height: 500px;
        }

        .about-container {
            display: none;
            align-items: center;
            gap: 40px;
            height: 100%;
        }

        .about-container.active {
            display: flex;
        }

        /* Images */
        .images-container {
            flex: 1;
            display: flex;
            gap: 20px;
        }

        .image-box {
            flex: 1;
            height: 400px;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .image-box:hover {
            transform: translateY(-10px);
        }

        .image-box img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        /* Content */
        .content-container {
            flex: 1;
        }

        .heading {
            font-size: 2.5rem;
            font-weight: 700;
            color: #2d3748;
            margin-bottom: 10px;
            background: linear-gradient(135deg, #667eea, #764ba2);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .subheading {
            font-size: 1.3rem;
            color: #6c63ff;
            margin-bottom: 20px;
            font-weight: 600;
        }

        .description {
            font-size: 1.1rem;
            color: #4a5568;
            margin-bottom: 30px;
            line-height: 1.8;
        }

        .stats {
            display: flex;
            gap: 30px;
            margin-bottom: 30px;
        }

        .stat-item {
            text-align: center;
        }

        .stat-number {
            font-size: 1.8rem;
            font-weight: 700;
            color: #6c63ff;
        }

        .stat-label {
            font-size: 0.9rem;
            color: #718096;
            font-weight: 500;
        }

        .cta-button {
            display: inline-block;
            padding: 15px 30px;
            background: linear-gradient(135deg, #6c63ff, #764ba2);
            color: white;
            text-decoration: none;
            border-radius: 50px;
            font-weight: 600;
            transition: all 0.3s ease;
            box-shadow: 0 5px 15px rgba(108, 99, 255, 0.3);
        }

        .cta-button:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 25px rgba(108, 99, 255, 0.4);
        }

        /* Layout 1: Images Left */
        .layout-1 {
            flex-direction: row;
        }

        /* Layout 2: Images Right */
        .layout-2 {
            flex-direction: row-reverse;
        }

        /* Layout 3: Image Center */
        .layout-3 {
            flex-direction: column;
            text-align: center;
        }

        .layout-3 .images-container {
            justify-content: center;
            max-width: 400px;
            margin: 0 auto;
        }

        .layout-3 .content-container {
            max-width: 800px;
            margin: 0 auto;
        }

        .layout-3 .stats {
            justify-content: center;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .about-container {
                flex-direction: column !important;
                text-align: center;
            }

            .layout-selector {
                flex-wrap: wrap;
                gap: 5px;
            }

            .layout-btn {
                padding: 10px 20px;
                font-size: 0.9rem;
            }

            .about-section {
                padding: 40px 20px;
            }

            .heading {
                font-size: 2rem;
            }

            .stats {
                flex-wrap: wrap;
                gap: 20px;
                justify-content: center;
            }

            .images-container {
                flex-direction: column;
                max-width: 300px;
                margin: 0 auto;
            }

            .image-box {
                height: 200px;
            }
        }

        /* Animation */
        .about-container {
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
            border-top: 1px solid #e9ecef;
        }
    </style>
@endsection

@section('content')
    <div class="container p-0 ">

                       <!-- Breadcrumb Navigation -->
    <div class="breadcrumb-container mb-0">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="/">
              Pages
            </a>
          </li>
          <li class="breadcrumb-separator"><i class="fa-solid fa-arrow-right-long"></i></li>
          <li class="breadcrumb-item">
            <a href="/builder">Home Page </a>
          </li>
          <li class="breadcrumb-separator"><i class="fa-solid fa-arrow-right-long"></i></li>
          <li class="breadcrumb-item active badge-primary" aria-current="page">
            Nav Section 
          </li>
        </ol>
      </nav>
    </div>

        <!-- Layout Selector Form -->
        <div class="layout-selector">
            <form class="selector-form" id="layoutForm">
                <h2 class="form-title">Choose Your About Section Layout</h2>
                <p class="form-subtitle">Select a layout style that best represents your brand</p>
                
                <div class="layout-options">
                    <div class="layout-option">
                        <input type="radio" id="layout1" name="layout" value="1" class="layout-radio" checked onchange="switchLayout(1)">
                        <label for="layout1" class="layout-btn">Images Left</label>
                    </div>
                    <div class="layout-option">
                        <input type="radio" id="layout2" name="layout" value="2" class="layout-radio" onchange="switchLayout(2)">
                        <label for="layout2" class="layout-btn">Images Right</label>
                    </div>
                    {{-- <div class="layout-option">
                        <input type="radio" id="layout3" name="layout" value="3" class="layout-radio" onchange="switchLayout(3)">
                        <label for="layout3" class="layout-btn">Image Center</label>
                    </div> --}}
                </div>

                {{-- <div class="selection-info" id="selectionInfo">
                    <strong>Selected:</strong> <span id="selectedLayout">Images Left Layout</span> - Perfect for showcasing your team while maintaining focus on your story.
                </div> --}}

       
            </form>
        </div>

        <!-- About Section -->
        <section class="about-section">
            <!-- Layout 1: Images Left -->
            <div class="about-container layout-1 active" id="layout-1">
                <div class="images-container">
                    {{-- <div class="image-box">
                        <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?w=400&h=300&fit=crop" alt="Team collaboration">
                    </div> --}}
                    <div class="image-box">
                        <img src="https://images.unsplash.com/photo-1556761175-b413da4baf72?w=400&h=300&fit=crop" alt="Modern office">
                    </div>
                </div>
                <div class="content-container">
                    <h2 class="heading">Innovating Tomorrow</h2>
                    <h3 class="subheading">Leading Digital Transformation</h3>
                    <p class="description">
                        We are a forward-thinking company dedicated to creating cutting-edge solutions that empower businesses to thrive in the digital age. With over a decade of experience, our team combines creativity with technical expertise to deliver exceptional results.
                    </p>
                    <div class="stats">
                        <div class="stat-item">
                            <div class="stat-number">150+</div>
                            <div class="stat-label">Team Members</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number">500+</div>
                            <div class="stat-label">Projects Done</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number">12+</div>
                            <div class="stat-label">Years Experience</div>
                        </div>
                    </div>
                    <a href="#" class="cta-button">Learn More About Us</a>
                </div>
            </div>

            <!-- Layout 2: Images Right -->
            <div class="about-container layout-2" id="layout-2">
                <div class="images-container">
                    {{-- <div class="image-box">
                        <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?w=400&h=300&fit=crop" alt="Team collaboration">
                    </div> --}}
                    <div class="image-box">
                        <img src="https://images.unsplash.com/photo-1556761175-b413da4baf72?w=400&h=300&fit=crop" alt="Modern office">
                    </div>
                </div>
                <div class="content-container">
                    <h2 class="heading">Innovating Tomorrow</h2>
                    <h3 class="subheading">Leading Digital Transformation</h3>
                    <p class="description">
                        We are a forward-thinking company dedicated to creating cutting-edge solutions that empower businesses to thrive in the digital age. With over a decade of experience, our team combines creativity with technical expertise to deliver exceptional results.
                    </p>
                    <div class="stats">
                        <div class="stat-item">
                            <div class="stat-number">150+</div>
                            <div class="stat-label">Team Members</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number">500+</div>
                            <div class="stat-label">Projects Done</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number">12+</div>
                            <div class="stat-label">Years Experience</div>
                        </div>
                    </div>
                    <a href="#" class="cta-button">Learn More About Us</a>
                </div>
            </div>

            <!-- Layout 3: Image Center -->
            {{-- <div class="about-container layout-3" id="layout-3">
                <div class="content-container">
                    <h2 class="heading">Innovating Tomorrow</h2>
                    <h3 class="subheading">Leading Digital Transformation</h3>
                </div>
                <div class="images-container">
                    <div class="image-box">
                        <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?w=400&h=300&fit=crop" alt="Team collaboration">
                    </div>
                    <div class="image-box">
                        <img src="https://images.unsplash.com/photo-1556761175-b413da4baf72?w=400&h=300&fit=crop" alt="Modern office">
                    </div>
                </div>
                <div class="content-container">
                    <p class="description">
                        We are a forward-thinking company dedicated to creating cutting-edge solutions that empower businesses to thrive in the digital age. With over a decade of experience, our team combines creativity with technical expertise to deliver exceptional results.
                    </p>
                    <div class="stats">
                        <div class="stat-item">
                            <div class="stat-number">150+</div>
                            <div class="stat-label">Team Members</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number">500+</div>
                            <div class="stat-label">Projects Done</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number">12+</div>
                            <div class="stat-label">Years Experience</div>
                        </div>
                    </div>
                    <a href="#" class="cta-button">Learn More About Us</a>
                </div>
            </div> --}}
        </section>

        <div class="layout-selector top-border">
                     <div class="form-actions">
                    <button type="button" class="preview-btn" onclick="previewLayout()">Preview Changes</button>
                    <a href="{{ route('about' ) }}" style="text-decoration: none" type="button" class="redirect-btn" id="proceedBtn">
                        Use This Layout →
                    </a>
                </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        let selectedLayoutValue = 1;

        function switchLayout(layoutNumber) {
            selectedLayoutValue = layoutNumber;
            
            // Hide all layouts
            const layouts = document.querySelectorAll('.about-container');
            layouts.forEach(layout => layout.classList.remove('active'));

            // Show selected layout
            document.getElementById(`layout-${layoutNumber}`).classList.add('active');

            // Update selection info
            updateSelectionInfo(layoutNumber);
        }

        function updateSelectionInfo(layoutNumber) {
            const selectedLayoutSpan = document.getElementById('selectedLayout');
            const descriptions = {
                1: "Images Left Layout - Perfect for showcasing your team while maintaining focus on your story.",
                2: "Images Right Layout - Great for emphasizing content first with visual support.",
                3: "Image Center Layout - Ideal for creating a balanced, symmetrical presentation."
            };
            
            selectedLayoutSpan.textContent = `Layout ${layoutNumber}`;
            document.querySelector('.selection-info').innerHTML = 
                `<strong>Selected:</strong> ${descriptions[layoutNumber]}`;
        }

        function previewLayout() {
            // Smooth scroll to preview
            document.querySelector('.about-section').scrollIntoView({ 
                behavior: 'smooth',
                block: 'start'
            });
            
            // Add a highlight effect
            const activeLayout = document.querySelector('.about-container.active');
            activeLayout.style.border = '3px solid #6c63ff';
            activeLayout.style.borderRadius = '15px';
            activeLayout.style.padding = '20px';
            
            setTimeout(() => {
                activeLayout.style.border = 'none';
                activeLayout.style.padding = '0';
            }, 2000);
        }

        function proceedWithLayout() {
            const selectedLayout = document.querySelector('input[name="layout"]:checked').value;
            
            // Show confirmation
            if(confirm(`You've selected Layout ${selectedLayout}. Do you want to proceed with this design?`)) {
                // Here you can redirect to your desired page
                // For example: window.location.href = 'customize.html?layout=' + selectedLayout;
                
                // For demo purposes, we'll show an alert
                alert(`Redirecting to customization page with Layout ${selectedLayout}...\n\nIn a real application, this would redirect to:\ncustomize.html?layout=${selectedLayout}`);
                
                // Uncomment the line below to actually redirect
                // window.location.href = `customize.html?layout=${selectedLayout}`;
            }
        }

        // Initialize on page load
        document.addEventListener('DOMContentLoaded', function() {
            updateSelectionInfo(1);
        });
    </script>

@endsection