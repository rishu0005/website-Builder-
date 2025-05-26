<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customize Your Navbar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        :root {
            --primary-gradient: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            --secondary-gradient: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
            --accent-color: #667eea;
            --text-dark: #2d3748;
            --text-light: #718096;
            --border-color: #e2e8f0;
            --shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            --shadow-hover: 0 20px 40px rgba(0, 0, 0, 0.15);
            --glow: 0 0 30px rgba(102, 126, 234, 0.3);
        }

        * { margin: 0; padding: 0; box-sizing: border-box; }

        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            min-height: 100vh;
            color: var(--text-dark);
            position: relative;
            overflow-x: hidden;
        }

        body::before {
            content: '';
            position: fixed;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(102, 126, 234, 0.05) 0%, transparent 70%);
            animation: float 20s ease-in-out infinite;
            z-index: -1;
        }

        @keyframes float {
            0%, 100% { transform: translate(0, 0) rotate(0deg); }
            33% { transform: translate(30px, -30px) rotate(120deg); }
            66% { transform: translate(-20px, 20px) rotate(240deg); }
        }

        .container { max-width: 1400px; margin: 0 auto; padding: 2rem; }

        .header {
            text-align: center;
            margin-bottom: 3rem;
            position: relative;
        }

        .header::after {
            content: '';
            position: absolute;
            bottom: -20px;
            left: 50%;
            transform: translateX(-50%);
            width: 100px;
            height: 4px;
            background: var(--primary-gradient);
            border-radius: 2px;
        }

        .header h1 {
            font-size: 3.5rem;
            font-weight: 800;
            background: var(--primary-gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 1rem;
        }

        .header p {
            font-size: 1.3rem;
            color: var(--text-light);
            max-width: 700px;
            margin: 0 auto;
            line-height: 1.6;
        }

        .main-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 3rem;
            align-items: start;
        }

        .section-card {
            background: white;
            border-radius: 20px;
            padding: 2rem;
            box-shadow: var(--shadow);
            margin-bottom: 2rem;
        }

        .section-title {
            font-size: 1.8rem;
            font-weight: 700;
            margin-bottom: 1.5rem;
            background: var(--primary-gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        /* Layout Selection */
        .layout-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 1.5rem;
            margin-bottom: 2rem;
        }

        .layout-option {
            border: 3px solid var(--border-color);
            border-radius: 15px;
            padding: 1.5rem;
            cursor: pointer;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .layout-option::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: var(--primary-gradient);
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .layout-option:hover::before { opacity: 0.05; }

        .layout-option.selected {
            border-color: var(--accent-color);
            box-shadow: var(--glow);
        }

        .layout-option.selected::before { opacity: 0.1; }

        .layout-preview {
            height: 80px;
            background: #f8f9fa;
            border-radius: 8px;
            margin-bottom: 1rem;
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }

        .layout-name {
            font-weight: 600;
            text-align: center;
            position: relative;
            z-index: 2;
        }

        /* Layout Previews */
        .layout-horizontal .layout-preview::after {
            content: 'LOGO    Home  About  Services  Contact';
            font-size: 0.7rem;
            color: var(--text-dark);
            font-weight: 500;
        }

        .layout-centered .layout-preview::after {
            content: 'Home  About  LOGO  Services  Contact';
            font-size: 0.7rem;
            color: var(--text-dark);
            font-weight: 500;
        }

        .layout-vertical .layout-preview {
            flex-direction: column;
            justify-content: space-around;
            padding: 0.5rem;
        }

        .layout-vertical .layout-preview::after {
            content: 'LOGO\nHome\nAbout\nServices';
            font-size: 0.6rem;
            color: var(--text-dark);
            font-weight: 500;
            white-space: pre-line;
            text-align: center;
        }

        .layout-sidebar .layout-preview {
            position: relative;
        }

        .layout-sidebar .layout-preview::before {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            bottom: 0;
            width: 30%;
            background: var(--accent-color);
            opacity: 0.2;
        }

        .layout-sidebar .layout-preview::after {
            content: 'LOGO\nMenu\nItems';
            font-size: 0.6rem;
            color: var(--text-dark);
            font-weight: 500;
            white-space: pre-line;
            position: absolute;
            left: 10px;
            top: 50%;
            transform: translateY(-50%);
        }

        /* Form Styles */
        .form-group {
            margin-bottom: 2rem;
        }

        .form-label {
            font-weight: 600;
            margin-bottom: 0.8rem;
            color: var(--text-dark);
            display: block;
        }

        .form-input {
            width: 100%;
            padding: 12px 16px;
            border: 2px solid var(--border-color);
            border-radius: 12px;
            font-size: 1rem;
            transition: all 0.3s ease;
            background: white;
        }

        .form-input:focus {
            outline: none;
            border-color: var(--accent-color);
            box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
        }

        .color-input-group {
            display: flex;
            gap: 1rem;
            align-items: center;
        }

        .color-input {
            width: 60px;
            height: 45px;
            border: 2px solid var(--border-color);
            border-radius: 12px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .color-input:hover {
            transform: scale(1.05);
            box-shadow: var(--shadow);
        }

        .nav-links-container {
            border: 2px solid var(--border-color);
            border-radius: 15px;
            padding: 1.5rem;
            margin-top: 1rem;
        }

        .nav-link-item {
            display: grid;
            grid-template-columns: 1fr 1fr auto;
            gap: 1rem;
            align-items: center;
            padding: 1rem;
            background: #f8f9fa;
            border-radius: 10px;
            margin-bottom: 1rem;
        }

        .nav-link-item:last-child { margin-bottom: 0; }

        .remove-link-btn {
            background: #dc3545;
            color: white;
            border: none;
            width: 35px;
            height: 35px;
            border-radius: 50%;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
        }

        .remove-link-btn:hover {
            background: #c82333;
            transform: scale(1.1);
        }

        .add-link-btn {
            background: var(--primary-gradient);
            color: white;
            border: none;
            padding: 12px 24px;
            border-radius: 10px;
            cursor: pointer;
            font-weight: 600;
            transition: all 0.3s ease;
            margin-top: 1rem;
        }

        .add-link-btn:hover {
            transform: translateY(-2px);
            box-shadow: var(--shadow);
        }

        .checkbox-group {
            display: flex;
            align-items: center;
            gap: 0.8rem;
            margin-bottom: 1rem;
        }

        .custom-checkbox {
            width: 20px;
            height: 20px;
            border: 2px solid var(--border-color);
            border-radius: 4px;
            cursor: pointer;
            position: relative;
            transition: all 0.3s ease;
        }

        .custom-checkbox.checked {
            background: var(--accent-color);
            border-color: var(--accent-color);
        }

        .custom-checkbox.checked::after {
            content: '✓';
            color: white;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 0.8rem;
            font-weight: bold;
        }

        /* Preview Section */
        .preview-container {
            position: sticky;
            top: 2rem;
        }

        .navbar-preview {
            border: 2px solid var(--border-color);
            border-radius: 15px;
            overflow: hidden;
            margin-bottom: 2rem;
            background: white;
        }

        .preview-navbar {
            padding: 1rem 2rem;
            display: flex;
            align-items: center;
            justify-content: space-between;
            transition: all 0.3s ease;
        }

        .preview-logo {
            font-weight: 700;
            font-size: 1.3rem;
        }

        .preview-nav-links {
            display: flex;
            gap: 2rem;
            list-style: none;
        }

        .preview-nav-links li {
            cursor: pointer;
            padding: 0.5rem 1rem;
            border-radius: 8px;
            transition: all 0.3s ease;
        }

        .generate-btn {
            width: 100%;
            background: var(--primary-gradient);
            color: white;
            border: none;
            padding: 16px;
            border-radius: 15px;
            font-size: 1.2rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .generate-btn:hover {
            transform: translateY(-3px);
            box-shadow: var(--shadow-hover);
        }

        @media (max-width: 1024px) {
            .main-content {
                grid-template-columns: 1fr;
                gap: 2rem;
            }
            
            .preview-container {
                position: static;
            }
        }

        @media (max-width: 768px) {
            .header h1 { font-size: 2.5rem; }
            .layout-grid { grid-template-columns: 1fr; }
            .nav-link-item { grid-template-columns: 1fr; gap: 0.5rem; }
            .color-input-group { flex-direction: column; align-items: stretch; }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Customize Your Navbar</h1>
            <p>Design the perfect navigation bar for your website. Choose a layout, customize colors, and add your navigation links.</p>
        </div>

        <div class="main-content">
            <!-- Customization Panel -->
            <div class="customization-panel">
                <!-- Layout Selection -->
                <div class="section-card">
                    <h3 class="section-title">Choose Layout</h3>
                    <div class="layout-grid">
                        <div class="layout-option layout-horizontal selected" data-layout="horizontal">
                            <div class="layout-preview"></div>
                            <div class="layout-name">Horizontal</div>
                        </div>
                        <div class="layout-option layout-centered" data-layout="centered">
                            <div class="layout-preview"></div>
                            <div class="layout-name">Logo Centered</div>
                        </div>
                        <div class="layout-option layout-vertical" data-layout="vertical">
                            <div class="layout-preview"></div>
                            <div class="layout-name">Vertical</div>
                        </div>
                        <div class="layout-option layout-sidebar" data-layout="sidebar">
                            <div class="layout-preview"></div>
                            <div class="layout-name">Sidebar</div>
                        </div>
                    </div>
                </div>

                <!-- Brand Settings -->
                <div class="section-card">
                    <h3 class="section-title">Brand Settings</h3>
                    <div class="form-group">
                        <label class="form-label">Company Logo/Name</label>
                        <input type="text" class="form-input" id="companyName" placeholder="Enter your company name" value="Your Brand">
                    </div>
                    
                    <div class="form-group">
                        <label class="form-label">Logo Image URL (Optional)</label>
                        <input type="url" class="form-input" id="logoUrl" placeholder="https://example.com/logo.png">
                    </div>
                </div>

                <!-- Navigation Links -->
                <div class="section-card">
                    <h3 class="section-title">Navigation Links</h3>
                    <div class="nav-links-container" id="navLinksContainer">
                        <div class="nav-link-item">
                            <input type="text" class="form-input" placeholder="Link Text" value="Home">
                            <input type="text" class="form-input" placeholder="Link URL" value="/">
                            <button class="remove-link-btn" onclick="removeNavLink(this)">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                        <div class="nav-link-item">
                            <input type="text" class="form-input" placeholder="Link Text" value="About">
                            <input type="text" class="form-input" placeholder="Link URL" value="/about">
                            <button class="remove-link-btn" onclick="removeNavLink(this)">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                        <div class="nav-link-item">
                            <input type="text" class="form-input" placeholder="Link Text" value="Services">
                            <input type="text" class="form-input" placeholder="Link URL" value="/services">
                            <button class="remove-link-btn" onclick="removeNavLink(this)">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                        <div class="nav-link-item">
                            <input type="text" class="form-input" placeholder="Link Text" value="Contact">
                            <input type="text" class="form-input" placeholder="Link URL" value="/contact">
                            <button class="remove-link-btn" onclick="removeNavLink(this)">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <button class="add-link-btn" onclick="addNavLink()">
                        <i class="fas fa-plus me-2"></i>Add Navigation Link
                    </button>
                </div>

                <!-- Style Settings -->
                <div class="section-card">
                    <h3 class="section-title">Style Settings</h3>
                    
                    <div class="checkbox-group">
                        <div class="custom-checkbox" id="transparentBg" onclick="toggleCheckbox(this)"></div>
                        <label>Transparent Background</label>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Background Color</label>
                        <div class="color-input-group">
                            <input type="color" class="color-input" id="bgColor" value="#ffffff">
                            <input type="text" class="form-input" id="bgColorText" value="#ffffff" placeholder="#ffffff">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Text Color</label>
                        <div class="color-input-group">
                            <input type="color" class="color-input" id="textColor" value="#2d3748">
                            <input type="text" class="form-input" id="textColorText" value="#2d3748" placeholder="#2d3748">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Hover Color</label>
                        <div class="color-input-group">
                            <input type="color" class="color-input" id="hoverColor" value="#667eea">
                            <input type="text" class="form-input" id="hoverColorText" value="#667eea" placeholder="#667eea">
                        </div>
                    </div>

                    <div class="checkbox-group">
                        <div class="custom-checkbox checked" id="stickyNav" onclick="toggleCheckbox(this)"></div>
                        <label>Sticky Navigation</label>
                    </div>

                    <div class="checkbox-group">
                        <div class="custom-checkbox" id="dropShadow" onclick="toggleCheckbox(this)"></div>
                        <label>Drop Shadow</label>
                    </div>
                </div>
            </div>

            <!-- Preview Panel -->
            <div class="preview-container">
                <div class="section-card">
                    <h3 class="section-title">Live Preview</h3>
                    <div class="navbar-preview">
                        <div class="preview-navbar" id="previewNavbar">
                            <div class="preview-logo" id="previewLogo">Your Brand</div>
                            <ul class="preview-nav-links" id="previewNavLinks">
                                <li>Home</li>
                                <li>About</li>
                                <li>Services</li>
                                <li>Contact</li>
                            </ul>
                        </div>
                    </div>
                    
                    <button class="generate-btn" onclick="generateNavbar()">
                        <i class="fas fa-code me-2"></i>
                        Generate Navbar Code
                    </button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

