@extends('main-layout')
@section('title' , 'Navbar customizer')
@section('style')
<style>


        .container {
            max-width: 800px;
            margin: 2rem auto;
            padding: 0 1rem;
        }

        .form-container {
            background: var(--bg-card);
            border-radius: 16px;
            box-shadow: var(--shadow-xl);
            border: 1px solid var(--border-color);
            overflow: hidden;
        }

        .form-header {
            background: var(--gradient-primary);
            color: white;
            padding: 2rem;
            text-align: center;
        }

        .form-header h1 {
            font-size: 2rem;
            margin-bottom: 0.5rem;
            font-weight: 700;
        }

        .form-header p {
            opacity: 0.9;
            font-size: 1.1rem;
        }

        .progress-bar {
            background: var(--border-light);
            height: 4px;
            position: relative;
        }

        .progress-fill {
            background: var(--gradient-secondary);
            height: 100%;
            transition: width 0.3s ease;
            width: 50%;
        }

        .form-content {
            padding: 2rem;
        }

        .step {
            display: none;
        }

        .step.active {
            display: block;
            animation: fadeIn 0.3s ease;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .step-title {
            font-size: 1.5rem;
            font-weight: 600;
            color: var(--text-primary);
            margin-bottom: 1.5rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .step-number {
            background: var(--gradient-primary);
            color: white;
            width: 2rem;
            height: 2rem;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            font-size: 0.9rem;
        }

        .layout-options {
            display: grid;
            gap: 1rem;
            margin-bottom: 2rem;
        }

        .layout-option {
            border: 2px solid var(--border-color);
            border-radius: 12px;
            padding: 1.5rem;
            cursor: pointer;
            transition: all 0.2s ease;
            background: var(--bg-secondary);
        }

        .layout-option:hover {
            border-color: var(--primary-accent);
            transform: translateY(-2px);
            box-shadow: var(--shadow-md);
        }

        .layout-option.selected {
            border-color: var(--primary-accent);
            background: linear-gradient(135deg, rgba(59, 130, 246, 0.1), rgba(124, 58, 237, 0.1));
            box-shadow: var(--shadow-lg);
        }

        .layout-option input[type="radio"] {
            display: none;
        }

        .layout-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 1rem;
        }

        .layout-title {
            font-weight: 600;
            color: var(--text-primary);
            font-size: 1.1rem;
        }

        .layout-badge {
            background: var(--gradient-secondary);
            color: white;
            padding: 0.25rem 0.75rem;
            border-radius: 12px;
            font-size: 0.8rem;
            font-weight: 500;
        }

        .layout-description {
            color: var(--text-secondary);
            margin-bottom: 1rem;
        }

        .layout-preview {
            background: var(--border-light);
            border: 1px solid var(--border-color);
            border-radius: 8px;
            padding: 0.75rem;
            display: flex;
            align-items: center;
            font-size: 0.85rem;
            min-height: 3rem;
        }

        .preview-logo {
            background: var(--primary-accent);
            color: white;
            padding: 0.5rem 1rem;
            border-radius: 6px;
            font-weight: 600;
            margin-right: 1rem;
        }

        .preview-nav {
            display: flex;
            gap: 0.75rem;
        }

        .preview-nav span {
            background: var(--border-color);
            padding: 0.25rem 0.75rem;
            border-radius: 4px;
            color: var(--text-secondary);
        }

        .layout-preview.center .preview-nav {
            flex: 1;
            justify-content: center;
        }

        .layout-preview.right {
            justify-content: space-between;
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-label {
            display: block;
            font-weight: 600;
            color: var(--text-primary);
            margin-bottom: 0.5rem;
        }

        .form-input {
            width: 100%;
            padding: 0.75rem 1rem;
            border: 2px solid var(--border-color);
            border-radius: 8px;
            font-size: 1rem;
            transition: border-color 0.2s ease;
            background: var(--bg-secondary);
        }

        .form-input:focus {
            outline: none;
            border-color: var(--primary-accent);
            box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1);
        }

        .nav-links-container {
            border: 2px solid var(--border-color);
            border-radius: 8px;
            padding: 1rem;
            background: var(--bg-secondary);
        }

        .nav-link-item {
            display: flex;
            gap: 0.75rem;
            margin-bottom: 0.75rem;
            align-items: center;
        }

        .nav-link-item:last-child {
            margin-bottom: 0;
        }

        .nav-link-input {
            flex: 1;
            padding: 0.5rem 0.75rem;
            border: 1px solid var(--border-color);
            border-radius: 6px;
            font-size: 0.9rem;
        }

        .remove-link {
            background: var(--error);
            color: white;
            border: none;
            border-radius: 6px;
            padding: 0.5rem;
            cursor: pointer;
            transition: background-color 0.2s ease;
        }

        .remove-link:hover {
            background: #dc2626;
        }

        .add-link {
            background: var(--success);
            color: white;
            border: none;
            border-radius: 6px;
            padding: 0.5rem 1rem;
            cursor: pointer;
            font-size: 0.9rem;
            font-weight: 500;
            transition: background-color 0.2s ease;
            margin-top: 0.75rem;
        }

        .add-link:hover {
            background: #059669;
        }

        .form-actions {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 2rem;
            padding-top: 2rem;
            border-top: 1px solid var(--border-color);
        }

        .btn {
            padding: 0.75rem 2rem;
            border: none;
            border-radius: 8px;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.2s ease;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
        }

        .btn-primary {
            background: var(--gradient-primary);
            color: white;
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: var(--shadow-lg);
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

        .navbar-preview {
            background: var(--bg-card);
            border: 2px solid var(--border-color);
            border-radius: 12px;
            margin-top: 2rem;
            overflow: hidden;
            box-shadow: var(--shadow-md);
        }

        .preview-navbar {
            background: var(--gradient-primary);
            color: white;
            padding: 1rem 2rem;
            display: flex;
            align-items: center;
            min-height: 4rem;
        }

        .preview-navbar.left {
            justify-content: flex-start;
        }

        .preview-navbar.left .preview-nav-links {
            margin-left: 2rem;
        }

        .preview-navbar.center {
            justify-content: space-between;
        }

        .preview-navbar.center .preview-nav-links {
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
        }

        .preview-navbar.right {
            justify-content: space-between;
        }

        .preview-logo-text {
            font-size: 1.25rem;
            font-weight: bold;
        }

        .preview-nav-links {
            display: flex;
            gap: 1.5rem;
            list-style: none;
        }

        .preview-nav-links a {
            color: white;
            text-decoration: none;
            font-weight: 500;
            padding: 0.5rem 1rem;
            border-radius: 6px;
            transition: background-color 0.2s ease;
        }

        .preview-nav-links a:hover {
            background: rgba(255, 255, 255, 0.2);
        }

        .preview-content {
            padding: 2rem;
            text-align: center;
            color: var(--text-secondary);
        }

        @media (max-width: 768px) {
            .container {
                margin: 1rem auto;
                padding: 0 0.5rem;
            }

            .form-content {
                padding: 1.5rem;
            }

            .form-header {
                padding: 1.5rem;
            }

            .form-header h1 {
                font-size: 1.5rem;
            }

            .form-actions {
                flex-direction: column;
                gap: 1rem;
            }

            .btn {
                width: 100%;
                justify-content: center;
            }

            .preview-navbar {
                flex-direction: column;
                gap: 1rem;
                text-align: center;
            }

            .preview-navbar.center .preview-nav-links,
            .preview-navbar.right .preview-nav-links {
                position: static;
                transform: none;
            }
        }
    </style>
@endsection

@section('content')
    <div class="container p-0 my-0">

           <!-- Breadcrumb Navigation -->
    <div class="breadcrumb-container">
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
            Hero Section 
          </li>
        </ol>
      </nav>
    </div>

        <div class="form-container">
            <div class="form-header">
                <h1>Navbar Customizer</h1>
                <p>Create and customize your perfect navigation bar</p>
            </div>
            
            <div class="progress-bar">
                <div class="progress-fill" id="progressFill"></div>
            </div>

            <div class="form-content">
                <!-- Step 1: Layout Selection -->
                <div class="step active" id="step1">
                    <div class="step-title">
                        <div class="step-number">1</div>
                        Choose Your Layout
                    </div>

                    <div class="layout-options">
                        <label class="layout-option selected">
                            <input type="radio" name="layout" value="left" checked>
                            <div class="layout-header">
                                <div class="layout-title">Left Aligned Navigation</div>
                                <div class="layout-badge">Default</div>
                            </div>
                            <div class="layout-description">
                                Logo on the left, navigation links positioned right after the logo
                            </div>
                            <div class="layout-preview left">
                                <div class="preview-logo">Logo</div>
                                <div class="preview-nav">
                                    <span>Home</span>
                                    <span>About</span>
                                    <span>Services</span>
                                    <span>Contact</span>
                                </div>
                            </div>
                        </label>

                        <label class="layout-option">
                            <input type="radio" name="layout" value="center">
                            <div class="layout-header">
                                <div class="layout-title">Center Aligned Navigation</div>
                                <div class="layout-badge">Popular</div>
                            </div>
                            <div class="layout-description">
                                Logo on the left, navigation links centered in the navbar
                            </div>
                            <div class="layout-preview center">
                                <div class="preview-logo">Logo</div>
                                <div class="preview-nav">
                                    <span>Home</span>
                                    <span>About</span>
                                    <span>Services</span>
                                    <span>Contact</span>
                                </div>
                            </div>
                        </label>

                        <label class="layout-option">
                            <input type="radio" name="layout" value="right">
                            <div class="layout-header">
                                <div class="layout-title">Right Aligned Navigation</div>
                                <div class="layout-badge">Modern</div>
                            </div>
                            <div class="layout-description">
                                Logo on the left, navigation links aligned to the right side
                            </div>
                            <div class="layout-preview right">
                                <div class="preview-logo">Logo</div>
                                <div class="preview-nav">
                                    <span>Home</span>
                                    <span>About</span>
                                    <span>Services</span>
                                    <span>Contact</span>
                                </div>
                            </div>
                        </label>
                    </div>

                    <div class="form-actions">
                        <div></div>
                        <a href="{{ route('nav') }}" type="button" class="btn btn-primary" onclick="nextStep()">
                            Next Step →
                        </a>
                    </div>
                </div>

                <!-- Step 2: Customization -->
                {{-- <div class="step" id="step2">
                    <div class="step-title">
                        <div class="step-number">2</div>
                        Customize Your Navbar
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="logoText">Logo Text</label>
                        <input type="text" id="logoText" class="form-input" value="BrandName" placeholder="Enter your brand name">
                    </div>

                    <div class="form-group">
                        <label class="form-label">Navigation Links</label>
                        <div class="nav-links-container" id="navLinksContainer">
                            <div class="nav-link-item">
                                <input type="text" class="nav-link-input" value="Home" placeholder="Link text">
                                <input type="text" class="nav-link-input" value="#home" placeholder="Link URL">
                                <button type="button" class="remove-link" onclick="removeNavLink(this)">×</button>
                            </div>
                            <div class="nav-link-item">
                                <input type="text" class="nav-link-input" value="About" placeholder="Link text">
                                <input type="text" class="nav-link-input" value="#about" placeholder="Link URL">
                                <button type="button" class="remove-link" onclick="removeNavLink(this)">×</button>
                            </div>
                            <div class="nav-link-item">
                                <input type="text" class="nav-link-input" value="Services" placeholder="Link text">
                                <input type="text" class="nav-link-input" value="#services" placeholder="Link URL">
                                <button type="button" class="remove-link" onclick="removeNavLink(this)">×</button>
                            </div>
                            <div class="nav-link-item">
                                <input type="text" class="nav-link-input" value="Contact" placeholder="Link text">
                                <input type="text" class="nav-link-input" value="#contact" placeholder="Link URL">
                                <button type="button" class="remove-link" onclick="removeNavLink(this)">×</button>
                            </div>
                        </div>
                        <button type="button" class="add-link" onclick="addNavLink()">+ Add Link</button>
                    </div>

                    <div class="navbar-preview">
                        <nav class="preview-navbar left" id="previewNavbar">
                            <div class="preview-logo-text" id="previewLogo">BrandName</div>
                            <ul class="preview-nav-links" id="previewNavLinks">
                                <li><a href="#home">Home</a></li>
                                <li><a href="#about">About</a></li>
                                <li><a href="#services">Services</a></li>
                                <li><a href="#contact">Contact</a></li>
                            </ul>
                        </nav>
                        <div class="preview-content">
                            <h3>Live Preview</h3>
                            <p>This is how your navbar will look on your website</p>
                        </div>
                    </div>

                    <div class="form-actions">
                        <button type="button" class="btn btn-secondary" onclick="prevStep()">
                            ← Previous
                        </button>
                        <button type="button" class="btn btn-primary" onclick="generateCode()">
                            Generate Code
                        </button>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        let currentStep = 1;
        let selectedLayout = 'left';

        // Layout selection handlers
        document.querySelectorAll('input[name="layout"]').forEach(radio => {
            radio.addEventListener('change', function() {
                document.querySelectorAll('.layout-option').forEach(option => {
                    option.classList.remove('selected');
                });
                this.closest('.layout-option').classList.add('selected');
                selectedLayout = this.value;
            });
        });

        // Navigation functions
//         function nextStep() {
//             document.getElementById('step1').classList.remove('active');
//             document.getElementById('step2').classList.add('active');
//             document.getElementById('progressFill').style.width = '100%';
//             currentStep = 2;
//             updatePreview();
//         }

//         function prevStep() {
//             document.getElementById('step2').classList.remove('active');
//             document.getElementById('step1').classList.add('active');
//             document.getElementById('progressFill').style.width = '50%';
//             currentStep = 1;
//         }

//         // Navigation links management
//         function addNavLink() {
//             const container = document.getElementById('navLinksContainer');
//             const newLink = document.createElement('div');
//             newLink.className = 'nav-link-item';
//             newLink.innerHTML = `
//                 <input type="text" class="nav-link-input" placeholder="Link text">
//                 <input type="text" class="nav-link-input" placeholder="Link URL">
//                 <button type="button" class="remove-link" onclick="removeNavLink(this)">×</button>
//             `;
//             container.appendChild(newLink);
            
//             // Add event listeners to new inputs
//             const inputs = newLink.querySelectorAll('.nav-link-input');
//             inputs.forEach(input => {
//                 input.addEventListener('input', updatePreview);
//             });
            
//             updatePreview();
//         }

//         function removeNavLink(button) {
//             const container = document.getElementById('navLinksContainer');
//             if (container.children.length > 1) {
//                 button.closest('.nav-link-item').remove();
//                 updatePreview();
//             }
//         }

//         // Preview update function
//         function updatePreview() {
//             const logoText = document.getElementById('logoText').value || 'BrandName';
//             const previewLogo = document.getElementById('previewLogo');
//             const previewNavbar = document.getElementById('previewNavbar');
//             const previewNavLinks = document.getElementById('previewNavLinks');
            
//             // Update logo
//             previewLogo.textContent = logoText;
            
//             // Update layout
//             previewNavbar.className = `preview-navbar ${selectedLayout}`;
            
//             // Update navigation links
//             const navLinkItems = document.querySelectorAll('.nav-link-item');
//             previewNavLinks.innerHTML = '';
            
//             navLinkItems.forEach(item => {
//                 const inputs = item.querySelectorAll('.nav-link-input');
//                 const linkText = inputs[0].value;
//                 const linkUrl = inputs[1].value || '#';
                
//                 if (linkText) {
//                     const li = document.createElement('li');
//                     const a = document.createElement('a');
//                     a.href = linkUrl;
//                     a.textContent = linkText;
//                     li.appendChild(a);
//                     previewNavLinks.appendChild(li);
//                 }
//             });
//         }

//         // Event listeners for real-time preview updates
//         document.getElementById('logoText').addEventListener('input', updatePreview);
        
//         document.querySelectorAll('.nav-link-input').forEach(input => {
//             input.addEventListener('input', updatePreview);
//         });

//         function generateCode() {
//             const logoText = document.getElementById('logoText').value || 'BrandName';
//             const navLinkItems = document.querySelectorAll('.nav-link-item');
            
//             // Collect navigation links
//             const navLinks = [];
//             navLinkItems.forEach(item => {
//                 const inputs = item.querySelectorAll('.nav-link-input');
//                 const linkText = inputs[0].value;
//                 const linkUrl = inputs[1].value || '#';
//                 if (linkText) {
//                     navLinks.push({ text: linkText, url: linkUrl });
//                 }
//             });

//             alert(`Navbar Configuration:
// Layout: ${selectedLayout}
// Logo: ${logoText}
// Links: ${navLinks.map(link => `${link.text} (${link.url})`).join(', ')}

// Your navbar has been configured! In a real application, this would generate the HTML/CSS code for your navbar.`);
//         }
    </script>

@endsection
