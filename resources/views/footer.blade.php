<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customize Your Footer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        :root {
            --primary-gradient: linear-gradient(135deg, #6366f1 0%, #8b5cf6 100%);
            --secondary-gradient: linear-gradient(135deg, #06b6d4 0%, #3b82f6 100%);
            --accent-color: #6366f1;
            --text-dark: #1f2937;
            --text-light: #6b7280;
            --border-color: #e5e7eb;
            --shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            --shadow-hover: 0 20px 40px rgba(0, 0, 0, 0.15);
            --glow: 0 0 30px rgba(99, 102, 241, 0.3);
        }

        * { margin: 0; padding: 0; box-sizing: border-box; }

        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
            background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);
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
            background: radial-gradient(circle, rgba(99, 102, 241, 0.05) 0%, transparent 70%);
            animation: float 25s ease-in-out infinite;
            z-index: -1;
        }

        @keyframes float {
            0%, 100% { transform: translate(0, 0) rotate(0deg); }
            33% { transform: translate(40px, -40px) rotate(120deg); }
            66% { transform: translate(-30px, 30px) rotate(240deg); }
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
            position: relative;
            overflow: hidden;
        }

        .section-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: var(--primary-gradient);
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
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
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
            height: 100px;
            background: #f8f9fa;
            border-radius: 8px;
            margin-bottom: 1rem;
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            font-size: 0.7rem;
            color: var(--text-dark);
        }

        .layout-name {
            font-weight: 600;
            text-align: center;
            position: relative;
            z-index: 2;
        }

        /* Layout Previews */
        .layout-single .layout-preview::after {
            content: 'LOGO\nCopyright © 2024 Company\nPrivacy | Terms';
            white-space: pre-line;
            text-align: center;
        }

        .layout-columns .layout-preview {
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
            gap: 0.5rem;
            padding: 0.5rem;
        }

        .layout-columns .layout-preview::after {
            content: 'About\nServices\nContact';
            grid-column: 1;
        }

        .layout-columns .layout-preview::before {
            content: 'Links\nHome\nBlog';
            grid-column: 2;
        }

        .layout-wide .layout-preview {
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 1rem;
            padding: 0.5rem;
            align-items: start;
        }

        .layout-wide .layout-preview::after {
            content: 'COMPANY LOGO\nDescription text here\nSocial Links';
        }

        .layout-wide .layout-preview::before {
            content: 'Quick Links\n• Home\n• About\n• Contact';
            font-size: 0.6rem;
        }

        /* Form Styles */
        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-label {
            font-weight: 600;
            margin-bottom: 0.8rem;
            color: var(--text-dark);
            display: block;
        }

        .form-input, .form-textarea {
            width: 100%;
            padding: 12px 16px;
            border: 2px solid var(--border-color);
            border-radius: 12px;
            font-size: 1rem;
            transition: all 0.3s ease;
            background: white;
            font-family: inherit;
        }

        .form-textarea {
            resize: vertical;
            min-height: 80px;
        }

        .form-input:focus, .form-textarea:focus {
            outline: none;
            border-color: var(--accent-color);
            box-shadow: 0 0 0 3px rgba(99, 102, 241, 0.1);
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

        .section-container {
            border: 2px solid var(--border-color);
            border-radius: 15px;
            padding: 1.5rem;
            margin-bottom: 1.5rem;
        }

        .section-item {
            display: grid;
            grid-template-columns: 1fr auto;
            gap: 1rem;
            align-items: start;
            padding: 1rem;
            background: #f8f9fa;
            border-radius: 10px;
            margin-bottom: 1rem;
        }

        .section-content {
            display: grid;
            gap: 0.5rem;
        }

        .section-item:last-child { margin-bottom: 0; }

        .remove-btn {
            background: #ef4444;
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
            flex-shrink: 0;
            align-self: flex-start;
        }

        .remove-btn:hover {
            background: #dc2626;
            transform: scale(1.1);
        }

        .add-btn {
            background: var(--primary-gradient);
            color: white;
            border: none;
            padding: 12px 24px;
            border-radius: 10px;
            cursor: pointer;
            font-weight: 600;
            transition: all 0.3s ease;
            margin-top: 1rem;
            width: 100%;
        }

        .add-btn:hover {
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

        .social-links {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 1rem;
        }

        .social-link-item {
            display: grid;
            grid-template-columns: auto 1fr 1fr auto;
            gap: 0.5rem;
            align-items: center;
            padding: 1rem;
            background: #f8f9fa;
            border-radius: 10px;
        }

        .social-icon-select {
            padding: 8px;
            border: 2px solid var(--border-color);
            border-radius: 8px;
            background: white;
            font-size: 1rem;
        }

        /* Preview Section */
        .preview-container {
            position: sticky;
            top: 2rem;
        }

        .footer-preview {
            border: 2px solid var(--border-color);
            border-radius: 15px;
            overflow: hidden;
            margin-bottom: 2rem;
            background: white;
            min-height: 200px;
        }

        .preview-footer {
            padding: 2rem;
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

        .footer-section {
            margin-bottom: 1.5rem;
        }

        .footer-section h4 {
            margin-bottom: 1rem;
            font-weight: 600;
        }

        .footer-links {
            list-style: none;
            padding: 0;
        }

        .footer-links li {
            margin-bottom: 0.5rem;
        }

        .footer-links a {
            color: inherit;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .footer-links a:hover {
            opacity: 0.7;
        }

        .social-links-preview {
            display: flex;
            gap: 1rem;
            flex-wrap: wrap;
        }

        .social-link {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .social-link:hover {
            transform: scale(1.1);
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
            .color-input-group { flex-direction: column; align-items: stretch; }
            .social-links { grid-template-columns: 1fr; }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Customize Your Footer</h1>
            <p>Design a professional footer for your website. Choose layout, add content sections, social links, and customize the appearance.</p>
        </div>

        <div class="main-content">
            <!-- Customization Panel -->
            <div class="customization-panel">
                <!-- Layout Selection -->
                <div class="section-card">
                    <h3 class="section-title">Choose Layout</h3>
                    <div class="layout-grid">
                        <div class="layout-option layout-single selected" data-layout="single">
                            <div class="layout-preview"></div>
                            <div class="layout-name">Single Column</div>
                        </div>
                        <div class="layout-option layout-columns" data-layout="columns">
                            <div class="layout-preview"></div>
                            <div class="layout-name">Multiple Columns</div>
                        </div>
                        <div class="layout-option layout-wide" data-layout="wide">
                            <div class="layout-preview"></div>
                            <div class="layout-name">Wide Layout</div>
                        </div>
                    </div>
                </div>

                <!-- Company Information -->
                <div class="section-card">
                    <h3 class="section-title">Company Information</h3>
                    <div class="form-group">
                        <label class="form-label">Company Name</label>
                        <input type="text" class="form-input" id="companyName" placeholder="Your Company Name" value="Your Company">
                    </div>
                    
                    <div class="form-group">
                        <label class="form-label">Company Logo URL (Optional)</label>
                        <input type="url" class="form-input" id="logoUrl" placeholder="https://example.com/logo.png">
                    </div>

                    <div class="form-group">
                        <label class="form-label">Company Description</label>
                        <textarea class="form-textarea" id="companyDescription" placeholder="Brief description of your company">We are a leading company providing excellent services to our customers worldwide.</textarea>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Copyright Text</label>
                        <input type="text" class="form-input" id="copyrightText" placeholder="Copyright © 2024 Your Company" value="Copyright © 2024 Your Company">
                    </div>
                </div>

                <!-- Footer Sections -->
                <div class="section-card">
                    <h3 class="section-title">Footer Sections</h3>
                    <div class="section-container" id="footerSectionsContainer">
                        <div class="section-item">
                            <div class="section-content">
                                <input type="text" class="form-input" placeholder="Section Title" value="Quick Links">
                                <textarea class="form-textarea" placeholder="Links (one per line in format: Link Text|URL)" style="min-height: 60px;">Home|/
About|/about
Services|/services
Contact|/contact</textarea>
                            </div>
                            <button class="remove-btn" onclick="removeFooterSection(this)">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                        <div class="section-item">
                            <div class="section-content">
                                <input type="text" class="form-input" placeholder="Section Title" value="Services">
                                <textarea class="form-textarea" placeholder="Links (one per line in format: Link Text|URL)" style="min-height: 60px;">Web Design|/web-design
SEO Services|/seo
Marketing|/marketing
Consulting|/consulting</textarea>
                            </div>
                            <button class="remove-btn" onclick="removeFooterSection(this)">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <button class="add-btn" onclick="addFooterSection()">
                        <i class="fas fa-plus me-2"></i>Add Footer Section
                    </button>
                </div>

                <!-- Social Media Links -->
                <div class="section-card">
                    <h3 class="section-title">Social Media Links</h3>
                    <div class="social-links" id="socialLinksContainer">
                        <div class="social-link-item">
                            <select class="social-icon-select">
                                <option value="fab fa-facebook-f" selected>Facebook</option>
                                <option value="fab fa-twitter">Twitter</option>
                                <option value="fab fa-instagram">Instagram</option>
                                <option value="fab fa-linkedin-in">LinkedIn</option>
                                <option value="fab fa-youtube">YouTube</option>
                                <option value="fab fa-tiktok">TikTok</option>
                                <option value="fab fa-github">GitHub</option>
                            </select>
                            <input type="text" class="form-input" placeholder="Platform Name" value="Facebook">
                            <input type="url" class="form-input" placeholder="Profile URL" value="https://facebook.com/yourpage">
                            <button class="remove-btn" onclick="removeSocialLink(this)">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                        <div class="social-link-item">
                            <select class="social-icon-select">
                                <option value="fab fa-facebook-f">Facebook</option>
                                <option value="fab fa-twitter" selected>Twitter</option>
                                <option value="fab fa-instagram">Instagram</option>
                                <option value="fab fa-linkedin-in">LinkedIn</option>
                                <option value="fab fa-youtube">YouTube</option>
                                <option value="fab fa-tiktok">TikTok</option>
                                <option value="fab fa-github">GitHub</option>
                            </select>
                            <input type="text" class="form-input" placeholder="Platform Name" value="Twitter">
                            <input type="url" class="form-input" placeholder="Profile URL" value="https://twitter.com/yourhandle">
                            <button class="remove-btn" onclick="removeSocialLink(this)">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <button class="add-btn" onclick="addSocialLink()">
                        <i class="fas fa-plus me-2"></i>Add Social Link
                    </button>
                </div>

                <!-- Style Settings -->
                <div class="section-card">
                    <h3 class="section-title">Style Settings</h3>
                    
                    <div class="form-group">
                        <label class="form-label">Background Color</label>
                        <div class="color-input-group">
                            <input type="color" class="color-input" id="bgColor" value="#1f2937">
                            <input type="text" class="form-input" id="bgColorText" value="#1f2937" placeholder="#1f2937">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Text Color</label>
                        <div class="color-input-group">
                            <input type="color" class="color-input" id="textColor" value="#ffffff">
                            <input type="text" class="form-input" id="textColorText" value="#ffffff" placeholder="#ffffff">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Link Hover Color</label>
                        <div class="color-input-group">
                            <input type="color" class="color-input" id="linkHoverColor" value="#6366f1">
                            <input type="text" class="form-input" id="linkHoverColorText" value="#6366f1" placeholder="#6366f1">
                        </div>
                    </div>

                    <div class="checkbox-group">
                        <div class="custom-checkbox" id="showBorder" onclick="toggleCheckbox(this)"></div>
                        <label>Show Top Border</label>
                    </div>

                    <div class="checkbox-group">
                        <div class="custom-checkbox checked" id="centerContent" onclick="toggleCheckbox(this)"></div>
                        <label>Center Content</label>
                    </div>

                    <div class="checkbox-group">
                        <div class="custom-checkbox" id="gradientBg" onclick="toggleCheckbox(this)"></div>
                        <label>Gradient Background</label>
                    </div>
                </div>
            </div>

            <!-- Preview Panel -->
            <div class="preview-container">
                <div class="section-card">
                    <h3 class="section-title">Live Preview</h3>
                    <div class="footer-preview">
                        <div class="preview-footer" id="previewFooter">
                            <!-- Footer content will be generated here -->
                        </div>
                    </div>
                    
                    <button class="generate-btn" onclick="generateFooter()">
                        <i class="fas fa-code me-2"></i>
                        Generate Footer Code
                    </button>
                </div>
            </div>
        </div>
    </div>
 <script>
    // Footer Customizer JavaScript

// Global variables
let currentLayout = 'single';
let footerSections = [];
let socialLinks = [];

// Initialize the application
document.addEventListener('DOMContentLoaded', function() {
    initializeEventListeners();
    loadInitialData();
    updatePreview();
});

// Initialize all event listeners
function initializeEventListeners() {
    // Layout selection
    document.querySelectorAll('.layout-option').forEach(option => {
        option.addEventListener('click', function() {
            selectLayout(this.dataset.layout);
        });
    });

    // Company information inputs
    document.getElementById('companyName').addEventListener('input', updatePreview);
    document.getElementById('logoUrl').addEventListener('input', updatePreview);
    document.getElementById('companyDescription').addEventListener('input', updatePreview);
    document.getElementById('copyrightText').addEventListener('input', updatePreview);

    // Color inputs
    setupColorInput('bgColor', 'bgColorText');
    setupColorInput('textColor', 'textColorText');
    setupColorInput('linkHoverColor', 'linkHoverColorText');

    // Footer sections container
    document.getElementById('footerSectionsContainer').addEventListener('input', updatePreview);
    
    // Social links container
    document.getElementById('socialLinksContainer').addEventListener('input', updatePreview);
    document.getElementById('socialLinksContainer').addEventListener('change', updatePreview);
}

// Setup color input synchronization
function setupColorInput(colorId, textId) {
    const colorInput = document.getElementById(colorId);
    const textInput = document.getElementById(textId);
    
    colorInput.addEventListener('input', function() {
        textInput.value = this.value;
        updatePreview();
    });
    
    textInput.addEventListener('input', function() {
        if (isValidColor(this.value)) {
            colorInput.value = this.value;
            updatePreview();
        }
    });
}

// Validate color format
function isValidColor(color) {
    return /^#([A-Fa-f0-9]{6}|[A-Fa-f0-9]{3})$/.test(color);
}

// Load initial data from the HTML
function loadInitialData() {
    // Load footer sections
    const sectionItems = document.querySelectorAll('#footerSectionsContainer .section-item');
    footerSections = [];
    
    sectionItems.forEach(item => {
        const titleInput = item.querySelector('input[type="text"]');
        const linksTextarea = item.querySelector('textarea');
        
        if (titleInput && linksTextarea) {
            const links = parseLinks(linksTextarea.value);
            footerSections.push({
                title: titleInput.value,
                links: links
            });
        }
    });

    // Load social links
    const socialItems = document.querySelectorAll('#socialLinksContainer .social-link-item');
    socialLinks = [];
    
    socialItems.forEach(item => {
        const iconSelect = item.querySelector('select');
        const nameInput = item.querySelector('input[type="text"]');
        const urlInput = item.querySelector('input[type="url"]');
        
        if (iconSelect && nameInput && urlInput) {
            socialLinks.push({
                icon: iconSelect.value,
                name: nameInput.value,
                url: urlInput.value
            });
        }
    });
}

// Parse links from textarea format
function parseLinks(linksText) {
    if (!linksText.trim()) return [];
    
    return linksText.split('\n')
        .filter(line => line.trim())
        .map(line => {
            const parts = line.split('|');
            return {
                text: parts[0] ? parts[0].trim() : '',
                url: parts[1] ? parts[1].trim() : '#'
            };
        });
}

// Layout selection
function selectLayout(layout) {
    // Remove selected class from all options
    document.querySelectorAll('.layout-option').forEach(option => {
        option.classList.remove('selected');
    });
    
    // Add selected class to clicked option
    document.querySelector(`[data-layout="${layout}"]`).classList.add('selected');
    
    currentLayout = layout;
    updatePreview();
}

// Toggle checkbox
function toggleCheckbox(checkbox) {
    checkbox.classList.toggle('checked');
    updatePreview();
}

// Add footer section
function addFooterSection() {
    const container = document.getElementById('footerSectionsContainer');
    const sectionHtml = `
        <div class="section-item">
            <div class="section-content">
                <input type="text" class="form-input" placeholder="Section Title" value="New Section">
                <textarea class="form-textarea" placeholder="Links (one per line in format: Link Text|URL)" style="min-height: 60px;">Link 1|/link1
Link 2|/link2</textarea>
            </div>
            <button class="remove-btn" onclick="removeFooterSection(this)">
                <i class="fas fa-times"></i>
            </button>
        </div>
    `;
    
    container.insertAdjacentHTML('beforeend', sectionHtml);
    updatePreview();
}

// Remove footer section
function removeFooterSection(button) {
    button.closest('.section-item').remove();
    updatePreview();
}

// Add social link
function addSocialLink() {
    const container = document.getElementById('socialLinksContainer');
    const socialHtml = `
        <div class="social-link-item">
            <select class="social-icon-select">
                <option value="fab fa-facebook-f">Facebook</option>
                <option value="fab fa-twitter">Twitter</option>
                <option value="fab fa-instagram">Instagram</option>
                <option value="fab fa-linkedin-in">LinkedIn</option>
                <option value="fab fa-youtube">YouTube</option>
                <option value="fab fa-tiktok">TikTok</option>
                <option value="fab fa-github">GitHub</option>
            </select>
            <input type="text" class="form-input" placeholder="Platform Name" value="New Platform">
            <input type="url" class="form-input" placeholder="Profile URL" value="https://example.com">
            <button class="remove-btn" onclick="removeSocialLink(this)">
                <i class="fas fa-times"></i>
            </button>
        </div>
    `;
    
    container.insertAdjacentHTML('beforeend', socialHtml);
    updatePreview();
}

// Remove social link
function removeSocialLink(button) {
    button.closest('.social-link-item').remove();
    updatePreview();
}

// Get social media platform color
function getSocialColor(icon) {
    const colors = {
        'fab fa-facebook-f': '#1877f2',
        'fab fa-twitter': '#1da1f2',
        'fab fa-instagram': '#e4405f',
        'fab fa-linkedin-in': '#0077b5',
        'fab fa-youtube': '#ff0000',
        'fab fa-tiktok': '#000000',
        'fab fa-github': '#333333'
    };
    return colors[icon] || '#6366f1';
}

// Update live preview
function updatePreview() {
    // Get current data
    const companyName = document.getElementById('companyName').value || 'Your Company';
    const logoUrl = document.getElementById('logoUrl').value;
    const companyDescription = document.getElementById('companyDescription').value || 'We are a leading company providing excellent services to our customers worldwide.';
    const copyrightText = document.getElementById('copyrightText').value || 'Copyright © 2024 Your Company';
    
    // Get style settings
    const bgColor = document.getElementById('bgColor').value;
    const textColor = document.getElementById('textColor').value;
    const linkHoverColor = document.getElementById('linkHoverColor').value;
    const showBorder = document.getElementById('showBorder').classList.contains('checked');
    const centerContent = document.getElementById('centerContent').classList.contains('checked');
    const gradientBg = document.getElementById('gradientBg').classList.contains('checked');

    // Update current data from form
    updateCurrentData();

    // Generate preview HTML
    const previewHtml = generatePreviewHtml(companyName, logoUrl, companyDescription, copyrightText);
    
    // Update preview container
    const previewFooter = document.getElementById('previewFooter');
    previewFooter.innerHTML = previewHtml;
    
    // Apply styles
    applyPreviewStyles(previewFooter, bgColor, textColor, linkHoverColor, showBorder, centerContent, gradientBg);
}

// Update current data from form inputs
function updateCurrentData() {
    // Update footer sections
    const sectionItems = document.querySelectorAll('#footerSectionsContainer .section-item');
    footerSections = [];
    
    sectionItems.forEach(item => {
        const titleInput = item.querySelector('input[type="text"]');
        const linksTextarea = item.querySelector('textarea');
        
        if (titleInput && linksTextarea) {
            const links = parseLinks(linksTextarea.value);
            footerSections.push({
                title: titleInput.value || 'Section',
                links: links
            });
        }
    });

    // Update social links
    const socialItems = document.querySelectorAll('#socialLinksContainer .social-link-item');
    socialLinks = [];
    
    socialItems.forEach(item => {
        const iconSelect = item.querySelector('select');
        const nameInput = item.querySelector('input[type="text"]');
        const urlInput = item.querySelector('input[type="url"]');
        
        if (iconSelect && nameInput && urlInput) {
            socialLinks.push({
                icon: iconSelect.value,
                name: nameInput.value || 'Platform',
                url: urlInput.value || '#'
            });
        }
    });
}

// Generate preview HTML based on layout
function generatePreviewHtml(companyName, logoUrl, companyDescription, copyrightText) {
    let html = '';

    if (currentLayout === 'single') {
        html = generateSingleColumnLayout(companyName, logoUrl, companyDescription, copyrightText);
    } else if (currentLayout === 'columns') {
        html = generateColumnsLayout(companyName, logoUrl, companyDescription, copyrightText);
    } else if (currentLayout === 'wide') {
        html = generateWideLayout(companyName, logoUrl, companyDescription, copyrightText);
    }

    return html;
}

// Generate single column layout
function generateSingleColumnLayout(companyName, logoUrl, companyDescription, copyrightText) {
    let html = '<div style="text-align: center;">';
    
    // Logo
    if (logoUrl) {
        html += `<img src="${logoUrl}" alt="${companyName}" style="max-height: 60px; margin-bottom: 1rem;">`;
    } else {
        html += `<h3 style="margin-bottom: 1rem; font-size: 1.5rem;">${companyName}</h3>`;
    }
    
    // Description
    html += `<p style="margin-bottom: 1.5rem; opacity: 0.8;">${companyDescription}</p>`;
    
    // Social links
    if (socialLinks.length > 0) {
        html += '<div class="social-links-preview" style="justify-content: center; margin-bottom: 1.5rem;">';
        socialLinks.forEach(social => {
            html += `<a href="${social.url}" class="social-link" style="background-color: ${getSocialColor(social.icon)};" title="${social.name}">
                <i class="${social.icon}"></i>
            </a>`;
        });
        html += '</div>';
    }
    
    // Footer sections (as simple links)
    if (footerSections.length > 0) {
        html += '<div style="margin-bottom: 1.5rem;">';
        footerSections.forEach(section => {
            section.links.forEach(link => {
                html += `<a href="${link.url}" style="margin: 0 1rem; color: inherit; text-decoration: none;">${link.text}</a>`;
            });
        });
        html += '</div>';
    }
    
    // Copyright
    html += `<p style="margin: 0; opacity: 0.7; font-size: 0.9rem;">${copyrightText}</p>`;
    
    html += '</div>';
    return html;
}

// Generate columns layout
function generateColumnsLayout(companyName, logoUrl, companyDescription, copyrightText) {
    let html = '<div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 2rem; margin-bottom: 2rem;">';
    
    // Company section
    html += '<div>';
    if (logoUrl) {
        html += `<img src="${logoUrl}" alt="${companyName}" style="max-height: 50px; margin-bottom: 1rem;">`;
    } else {
        html += `<h4 style="margin-bottom: 1rem;">${companyName}</h4>`;
    }
    html += `<p style="opacity: 0.8; font-size: 0.9rem;">${companyDescription}</p>`;
    html += '</div>';
    
    // Footer sections
    footerSections.forEach(section => {
        html += '<div>';
        html += `<h4 style="margin-bottom: 1rem;">${section.title}</h4>`;
        html += '<ul class="footer-links">';
        section.links.forEach(link => {
            html += `<li><a href="${link.url}">${link.text}</a></li>`;
        });
        html += '</ul>';
        html += '</div>';
    });
    
    html += '</div>';
    
    // Bottom section with social and copyright
    html += '<div style="text-align: center; padding-top: 1.5rem; border-top: 1px solid rgba(255,255,255,0.1);">';
    
    // Social links
    if (socialLinks.length > 0) {
        html += '<div class="social-links-preview" style="justify-content: center; margin-bottom: 1rem;">';
        socialLinks.forEach(social => {
            html += `<a href="${social.url}" class="social-link" style="background-color: ${getSocialColor(social.icon)};" title="${social.name}">
                <i class="${social.icon}"></i>
            </a>`;
        });
        html += '</div>';
    }
    
    html += `<p style="margin: 0; opacity: 0.7; font-size: 0.9rem;">${copyrightText}</p>`;
    html += '</div>';
    
    return html;
}

// Generate wide layout
function generateWideLayout(companyName, logoUrl, companyDescription, copyrightText) {
    let html = '<div style="display: grid; grid-template-columns: 2fr 1fr; gap: 3rem; align-items: start; margin-bottom: 2rem;">';
    
    // Left section - Company info
    html += '<div>';
    if (logoUrl) {
        html += `<img src="${logoUrl}" alt="${companyName}" style="max-height: 60px; margin-bottom: 1rem;">`;
    } else {
        html += `<h3 style="margin-bottom: 1rem; font-size: 1.5rem;">${companyName}</h3>`;
    }
    html += `<p style="margin-bottom: 1.5rem; opacity: 0.8;">${companyDescription}</p>`;
    
    // Social links
    if (socialLinks.length > 0) {
        html += '<div class="social-links-preview" style="margin-bottom: 1rem;">';
        socialLinks.forEach(social => {
            html += `<a href="${social.url}" class="social-link" style="background-color: ${getSocialColor(social.icon)};" title="${social.name}">
                <i class="${social.icon}"></i>
            </a>`;
        });
        html += '</div>';
    }
    
    html += '</div>';
    
    // Right section - Footer sections
    html += '<div>';
    if (footerSections.length > 0) {
        html += '<div style="display: grid; gap: 1.5rem;">';
        footerSections.forEach(section => {
            html += '<div>';
            html += `<h4 style="margin-bottom: 0.8rem; font-size: 1rem;">${section.title}</h4>`;
            html += '<ul class="footer-links" style="font-size: 0.9rem;">';
            section.links.forEach(link => {
                html += `<li><a href="${link.url}">${link.text}</a></li>`;
            });
            html += '</ul>';
            html += '</div>';
        });
        html += '</div>';
    }
    html += '</div>';
    
    html += '</div>';
    
    // Copyright
    html += `<div style="text-align: center; padding-top: 1.5rem; border-top: 1px solid rgba(255,255,255,0.1);">`;
    html += `<p style="margin: 0; opacity: 0.7; font-size: 0.9rem;">${copyrightText}</p>`;
    html += '</div>';
    
    return html;
}

// Apply styles to preview
function applyPreviewStyles(element, bgColor, textColor, linkHoverColor, showBorder, centerContent, gradientBg) {
    // Background
    if (gradientBg) {
        element.style.background = `linear-gradient(135deg, ${bgColor} 0%, ${adjustColorBrightness(bgColor, -20)} 100%)`;
    } else {
        element.style.backgroundColor = bgColor;
    }
    
    // Text color
    element.style.color = textColor;
    
    // Border
    if (showBorder) {
        element.style.borderTop = `3px solid ${linkHoverColor}`;
    } else {
        element.style.borderTop = 'none';
    }
    
    // Content alignment
    if (centerContent && currentLayout !== 'wide') {
        element.style.textAlign = 'center';
    }
    
    // Add hover styles for links
    addLinkHoverStyles(linkHoverColor);
}

// Adjust color brightness
function adjustColorBrightness(hex, percent) {
    const num = parseInt(hex.replace("#", ""), 16);
    const amt = Math.round(2.55 * percent);
    const R = (num >> 16) + amt;
    const G = (num >> 8 & 0x00FF) + amt;
    const B = (num & 0x0000FF) + amt;
    return "#" + (0x1000000 + (R < 255 ? R < 1 ? 0 : R : 255) * 0x10000 +
        (G < 255 ? G < 1 ? 0 : G : 255) * 0x100 +
        (B < 255 ? B < 1 ? 0 : B : 255)).toString(16).slice(1);
}

// Add dynamic hover styles for links
function addLinkHoverStyles(hoverColor) {
    // Remove existing style element
    const existingStyle = document.getElementById('dynamic-hover-styles');
    if (existingStyle) {
        existingStyle.remove();
    }
    
    // Create new style element
    const style = document.createElement('style');
    style.id = 'dynamic-hover-styles';
    style.textContent = `
        #previewFooter a:hover {
            color: ${hoverColor} !important;
            opacity: 1 !important;
        }
        #previewFooter .social-link:hover {
            transform: scale(1.1);
            box-shadow: 0 5px 15px rgba(0,0,0,0.3);
        }
    `;
    document.head.appendChild(style);
}

// Generate footer code
function generateFooter() {
    // Get current values
    const companyName = document.getElementById('companyName').value || 'Your Company';
    const logoUrl = document.getElementById('logoUrl').value;
    const companyDescription = document.getElementById('companyDescription').value || 'We are a leading company providing excellent services to our customers worldwide.';
    const copyrightText = document.getElementById('copyrightText').value || 'Copyright © 2024 Your Company';
    
    const bgColor = document.getElementById('bgColor').value;
    const textColor = document.getElementById('textColor').value;
    const linkHoverColor = document.getElementById('linkHoverColor').value;
    const showBorder = document.getElementById('showBorder').classList.contains('checked');
    const centerContent = document.getElementById('centerContent').classList.contains('checked');
    const gradientBg = document.getElementById('gradientBg').classList.contains('checked');

    // Update current data
    updateCurrentData();

    // Generate complete HTML and CSS
    const footerCode = generateCompleteFooterCode(
        companyName, logoUrl, companyDescription, copyrightText,
        bgColor, textColor, linkHoverColor, showBorder, centerContent, gradientBg
    );

    // Create modal or new window to show the code
    showGeneratedCode(footerCode);
}

// Generate complete footer code
function generateCompleteFooterCode(companyName, logoUrl, companyDescription, copyrightText, bgColor, textColor, linkHoverColor, showBorder, centerContent, gradientBg) {
    const footerHtml = generateFooterHtml(companyName, logoUrl, companyDescription, copyrightText);
    const footerCss = generateFooterCss(bgColor, textColor, linkHoverColor, showBorder, centerContent, gradientBg);
    
    return {
        html: footerHtml,
        css: footerCss,
        complete: `<!-- Footer HTML -->
${footerHtml}

<!-- Footer CSS -->
<style>
${footerCss}
</style>`
    };
}

// Generate footer HTML
function generateFooterHtml(companyName, logoUrl, companyDescription, copyrightText) {
    let html = '<footer class="custom-footer">\n  <div class="footer-container">\n';
    
    if (currentLayout === 'single') {
        html += generateSingleColumnHtml(companyName, logoUrl, companyDescription, copyrightText);
    } else if (currentLayout === 'columns') {
        html += generateColumnsHtml(companyName, logoUrl, companyDescription, copyrightText);
    } else if (currentLayout === 'wide') {
        html += generateWideHtml(companyName, logoUrl, companyDescription, copyrightText);
    }
    
    html += '  </div>\n</footer>';
    return html;
}

// Generate single column HTML
function generateSingleColumnHtml(companyName, logoUrl, companyDescription, copyrightText) {
    let html = '    <div class="footer-content-single">\n';
    
    // Logo or company name
    if (logoUrl) {
        html += `      <img src="${logoUrl}" alt="${companyName}" class="footer-logo">\n`;
    } else {
        html += `      <h3 class="footer-title">${companyName}</h3>\n`;
    }
    
    // Description
    html += `      <p class="footer-description">${companyDescription}</p>\n`;
    
    // Social links
    if (socialLinks.length > 0) {
        html += '      <div class="footer-social">\n';
        socialLinks.forEach(social => {
            html += `        <a href="${social.url}" class="social-link" title="${social.name}" data-platform="${social.icon.split('-').pop()}">\n`;
            html += `          <i class="${social.icon}"></i>\n`;
            html += '        </a>\n';
        });
        html += '      </div>\n';
    }
    
    // Footer sections as inline links
    if (footerSections.length > 0) {
        html += '      <div class="footer-links-inline">\n';
        footerSections.forEach(section => {
            section.links.forEach(link => {
                html += `        <a href="${link.url}">${link.text}</a>\n`;
            });
        });
        html += '      </div>\n';
    }
    
    // Copyright
    html += `      <p class="footer-copyright">${copyrightText}</p>\n`;
    html += '    </div>\n';
    
    return html;
}

// Generate columns HTML
function generateColumnsHtml(companyName, logoUrl, companyDescription, copyrightText) {
    let html = '    <div class="footer-content-columns">\n';
    
    // Company section
    html += '      <div class="footer-section">\n';
    if (logoUrl) {
        html += `        <img src="${logoUrl}" alt="${companyName}" class="footer-logo">\n`;
    } else {
        html += `        <h4 class="footer-section-title">${companyName}</h4>\n`;
    }
    html += `        <p class="footer-description">${companyDescription}</p>\n`;
    html += '      </div>\n';
    
    // Footer sections
    footerSections.forEach(section => {
        html += '      <div class="footer-section">\n';
        html += `        <h4 class="footer-section-title">${section.title}</h4>\n`;
        html += '        <ul class="footer-links">\n';
        section.links.forEach(link => {
            html += `          <li><a href="${link.url}">${link.text}</a></li>\n`;
        });
        html += '        </ul>\n';
        html += '      </div>\n';
    });
    
    html += '    </div>\n';
    
    // Bottom section
    html += '    <div class="footer-bottom">\n';
    
    // Social links
    if (socialLinks.length > 0) {
        html += '      <div class="footer-social">\n';
        socialLinks.forEach(social => {
            html += `        <a href="${social.url}" class="social-link" title="${social.name}" data-platform="${social.icon.split('-').pop()}">\n`;
            html += `          <i class="${social.icon}"></i>\n`;
            html += '        </a>\n';
        });
        html += '      </div>\n';
    }
    
    html += `      <p class="footer-copyright">${copyrightText}</p>\n`;
    html += '    </div>\n';
    
    return html;
}

// Generate wide HTML
function generateWideHtml(companyName, logoUrl, companyDescription, copyrightText) {
    let html = '    <div class="footer-content-wide">\n';
    html += '      <div class="footer-main">\n';
    
    // Left section
    html += '        <div class="footer-company">\n';
    if (logoUrl) {
        html += `          <img src="${logoUrl}" alt="${companyName}" class="footer-logo">\n`;
    } else {
        html += `          <h3 class="footer-title">${companyName}</h3>\n`;
    }
    html += `          <p class="footer-description">${companyDescription}</p>\n`;
    
    // Social links
    if (socialLinks.length > 0) {
        html += '          <div class="footer-social">\n';
        socialLinks.forEach(social => {
            html += `            <a href="${social.url}" class="social-link" title="${social.name}" data-platform="${social.icon.split('-').pop()}">\n`;
            html += `              <i class="${social.icon}"></i>\n`;
            html += '            </a>\n';
        });
        html += '          </div>\n';
    }
    
    html += '        </div>\n';
    
    // Right section
    html += '        <div class="footer-sections">\n';
    footerSections.forEach(section => {
        html += '          <div class="footer-section">\n';
        html += `            <h4 class="footer-section-title">${section.title}</h4>\n`;
        html += '            <ul class="footer-links">\n';
        section.links.forEach(link => {
            html += `              <li><a href="${link.url}">${link.text}</a></li>\n`;
        });
        html += '            </ul>\n';
        html += '          </div>\n';
    });
    html += '        </div>\n';
    
    html += '      </div>\n';
    html += '    </div>\n';
    
    // Copyright
    html += '    <div class="footer-bottom">\n';
    html += `      <p class="footer-copyright">${copyrightText}</p>\n`;
    html += '    </div>\n';
    
    return html;
}

// Generate footer CSS
function generateFooterCss(bgColor, textColor, linkHoverColor, showBorder, centerContent, gradientBg) {
    let css = '';
    
    // Base footer styles
    css += '.custom-footer {\n';
    if (gradientBg) {
        css += `  background: linear-gradient(135deg, ${bgColor} 0%, ${adjustColorBrightness(bgColor, -20)} 100%);\n`;
    } else {
        css += `  background-color: ${bgColor};\n`;
    }
    css += `  color: ${textColor};\n`;
    css += '  padding: 3rem 0 2rem;\n';
    if (showBorder) {
        css += `  border-top: 3px solid ${linkHoverColor};\n`;
    }
    css += '}\n\n';
    
    // Container
    css += '.footer-container {\n';
    css += '  max-width: 1200px;\n';
    css += '  margin: 0 auto;\n';
    css += '  padding: 0 2rem;\n';
    css += '}\n\n';
    
    // Layout-specific styles
    if (currentLayout === 'single') {
        css += generateSingleColumnCss(centerContent);
    } else if (currentLayout === 'columns') {
        css += generateColumnsCss();
    } else if (currentLayout === 'wide') {
        css += generateWideCss();
    }
    
    // Common element styles
    css += generateCommonCss(textColor, linkHoverColor);
    
    return css;
}


 </script>

</body>
</html>