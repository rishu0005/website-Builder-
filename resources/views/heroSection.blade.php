@extends('main-layout')
@section('title' , 'Hero section builder')
@section('style')
  <style>
    body {
      font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
      background: var(--bg-primary);
      min-height: 100vh;
      /* padding: 20px; */
      line-height: 1.6;
      overflow-x: hidden;
    }

    /* Animated background elements */
    body::before {
      content: '';
      position: fixed;
      top: -50%;
      left: -50%;
      width: 200%;
      height: 200%;
      background: radial-gradient(circle at 20% 30%, rgba(102, 126, 234, 0.1) 0%, transparent 50%),
                  radial-gradient(circle at 80% 70%, rgba(240, 147, 251, 0.1) 0%, transparent 50%),
                  radial-gradient(circle at 60% 10%, rgba(67, 233, 123, 0.08) 0%, transparent 50%);
      animation: float 20s infinite linear;
      pointer-events: none;
      z-index: -1;
    }

    @keyframes float {
      0% { transform: rotate(0deg) translateX(20px); }
      100% { transform: rotate(360deg) translateX(20px); }
    }

    .container {
      max-width: 1000px;
      margin: 0 auto;
      position: relative;
      z-index: 1;
    }

    .header {
      text-align: center;
      margin-bottom: 3rem;
      position: relative;
    }

    .header h1 {
      font-size: clamp(2.5rem, 5vw, 4rem);
      font-weight: 800;
      background: var(--primary-gradient);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
      margin-bottom: 1rem;
      position: relative;
      animation: slideInUp 1s ease-out;
    }

    .header p {
      font-size: 1.25rem;
      color: var(--text-secondary);
      margin-bottom: 2rem;
      animation: slideInUp 1s ease-out 0.2s both;
    }

    @keyframes slideInUp {
      from {
        opacity: 0;
        transform: translateY(30px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .form-container {
      background: var(--bg-card);
      backdrop-filter: blur(20px);
      border: 1px solid rgba(255, 255, 255, 0.2);
      border-radius: 24px;
      padding: 2.5rem;
      box-shadow: var(--shadow-card);
      position: relative;
      overflow: hidden;
      animation: slideInUp 1s ease-out 0.4s both;
    }

    .form-container::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      height: 1px;
      background: var(--primary-gradient);
      opacity: 0.5;
    }

    .form-grid {
      display: grid;
      gap: 2rem;
    }

    .field-group {
      background: rgba(255, 255, 255, 0.6);
      backdrop-filter: blur(10px);
      border: 1px solid rgba(255, 255, 255, 0.3);
      border-radius: 16px;
      padding: 1.5rem;
      transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
      position: relative;
      overflow: hidden;
    }

    .field-group:hover {
      transform: translateY(-2px);
      box-shadow: var(--shadow-hover);
      background: rgba(255, 255, 255, 0.8);
    }

    .field-group::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      height: 2px;
      background: var(--primary-gradient);
      transform: scaleX(0);
      transition: transform 0.3s ease;
    }

    .field-group:hover::before {
      transform: scaleX(1);
    }

    .field-group h3 {
      font-size: 1.25rem;
      font-weight: 700;
      color: var(--text-primary);
      margin-bottom: 1.5rem;
      display: flex;
      align-items: center;
      gap: 0.5rem;
    }

    .field-group h3::before {
      content: '';
      width: 8px;
      height: 8px;
      border-radius: 50%;
      background: var(--primary-gradient);
    }

    .form-field {
      margin-bottom: 1.5rem;
      /* max-width: 36rem ; */
    }

    .form-field:last-child {
      margin-bottom: 0;
    }

    label {
      display: block;
      font-weight: 600;
      color: var(--text-secondary);
      margin-bottom: 0.5rem;
      font-size: 0.95rem;
    }

    input[type="text"],
    input[type="number"],
    input[type="file"],
    select,
    textarea {
      width: 100%;
      padding: 0.875rem 1rem;
      border: 2px solid transparent;
      background: rgba(255, 255, 255, 0.9);
      border-radius: 12px;
      font-size: 1rem;
      transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
      box-shadow: var(--shadow-sm);
    }

    input[type="text"]:focus,
    input[type="number"]:focus,
    input[type="file"]:focus,
    select:focus,
    textarea:focus {
      outline: none;
      border-color: var(--border-focus);
      background: var(--bg-secondary);
      /* box-shadow: var(--shadow-lg), 0 0 0 4px var(--primary-light); */
      transform: translateY(-1px);
    }

    input[type="color"] {
      width: 60px;
      height: 40px;
      border: none;
      border-radius: 8px;
      cursor: pointer;
      box-shadow: var(--shadow-md);
      transition: all 0.3s ease;
    }

    input[type="color"]:hover {
      transform: scale(1.05);
      box-shadow: var(--shadow-lg);
    }

    .checkbox-group {
      display: flex;
      align-items: center;
      gap: 0.75rem;
      padding: 1rem;
      background: rgba(255, 255, 255, 0.5);
      border-radius: 12px;
      transition: all 0.3s ease;
      cursor: pointer;
    }

    .checkbox-group:hover {
      background: rgba(255, 255, 255, 0.8);
    }

    .checkbox-group input[type="checkbox"] {
      width: 20px;
      height: 20px;
      accent-color: var(--primary-color);
      cursor: pointer;
    }

    .checkbox-group label {
      margin: 0;
      cursor: pointer;
      flex: 1;
    }

    .cta-fields {
      background: rgba(102, 126, 234, 0.05);
      border: 1px solid rgba(102, 126, 234, 0.1);
      border-radius: 12px;
      padding: 1.5rem;
      margin-top: 1rem;
      transition: all 0.3s ease;
    }

    .cta-fields.hidden {
      opacity: 0;
      transform: translateY(-10px);
      max-height: 0;
      padding: 0;
      margin: 0;
      overflow: hidden;
    }

    .submit-btn {
      background: var(--primary-gradient);
      color: white;
      border: none;
      padding: 1rem 2.5rem;
      border-radius: 16px;
      font-size: 1.1rem;
      font-weight: 600;
      cursor: pointer;
      transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
      box-shadow: var(--shadow-lg);
      position: relative;
      overflow: hidden;
      margin-top: 2rem;
      width: 100%;
    }

    .submit-btn::before {
      content: '';
      position: absolute;
      top: 0;
      left: -100%;
      width: 100%;
      height: 100%;
      background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
      transition: left 0.5s;
    }

    .submit-btn:hover {
      transform: translateY(-2px);
      box-shadow: var(--shadow-xl), var(--shadow-glow);
    }

    .submit-btn:hover::before {
      left: 100%;
    }

    .submit-btn:active {
      transform: translateY(0);
    }

    textarea {
      min-height: 120px;
      resize: vertical;
    }

    .two-column {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 1rem;
    }

    .color-input-group {
      display: flex;
      align-items: center;
      gap: 0.75rem;
    }

    .color-input-group label {
      margin-bottom: 0;
      flex: 1;
    }

    .preview-hint {
      background: var(--warning-gradient);
      color: white;
      padding: 1rem;
      border-radius: 12px;
      margin-top: 1rem;
      font-size: 0.9rem;
      text-align: center;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
      .container {
        padding: 0 1rem;
      }
      
      .form-container {
        padding: 1.5rem;
        border-radius: 16px;
      }
      
      .two-column {
        grid-template-columns: 1fr;
      }
      
      .header h1 {
        font-size: 2.5rem;
      }
    }

    /* Loading animation for file inputs */
    .file-input-wrapper {
      position: relative;
    }

    .file-input-wrapper input[type="file"] {
      opacity: 0;
      position: absolute;
      z-index: -1;
    }

    .file-input-label {
      display: block;
      padding: 0.875rem 1rem;
      background: rgba(255, 255, 255, 0.9);
      border: 2px dashed var(--border-color);
      border-radius: 12px;
      text-align: center;
      cursor: pointer;
      transition: all 0.3s ease;
    }

    .file-input-label:hover {
      border-color: var(--primary-color);
      background: var(--primary-light);
    }

    .background-toggle {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 0;
      background: rgba(255, 255, 255, 0.5);
      border-radius: 12px;
      padding: 4px;
      margin-bottom: 1rem;
    }

    .bg-option {
      padding: 0.75rem;
      text-align: center;
      border-radius: 8px;
      cursor: pointer;
      transition: all 0.3s ease;
      font-weight: 600;
      font-size: 0.9rem;
      width:90%;
    }

    .bg-option.active {
      background: var(--primary-gradient);
      color: white;
      box-shadow: var(--shadow-md);
    }

    .bg-option:not(.active):hover {
      background: rgba(255, 255, 255, 0.8);
    }
  </style>
 
@endsection 

@section('content')

  <div class="container">
    <div class="header">
      <h1>Hero Section Builder</h1>
      <p>Create stunning hero sections with our intuitive visual editor</p>
    </div>

    <div class="form-container">
      <form id="hero-builder">
        <div class="form-grid">
          
          <!-- Hero Content -->
          <div class="field-group">
            <h3>Hero Content</h3>
            
            <div class="form-field">
              <label for="hero_title">Hero Title</label>
              <input type="text" id="hero_title" placeholder="Your Amazing Hero Title">
            </div>

            <div class="form-field">
              <label for="hero_subtitle">Subtitle (Optional)</label>
              <input type="text" id="hero_subtitle" placeholder="Compelling subtitle that converts visitors">
            </div>
            <div class="form-field">
              <label for="hero_subtitle">Description</label>
              <input type="text" id="hero_subtitle" placeholder="Description that tells about you">
            </div>
          </div>

          <!-- Background Settings -->
          <div class="field-group">
            <h3>Background & Style</h3>
            
            <div class="form-field" >
              <label>Background Type</label>
              <div class="background-toggle justify-content-between">
                <div class="bg-option active" data-type="color">Solid Color</div>
                <div class="bg-option shadow-sm border" data-type="image">Image</div>
              </div>
            </div>

            <div id="bg_color_group">
              <div class="form-field">
                <div class="color-input-group mb-3" style="max-width:33.6rem;">
                  <label>Background Color</label>
                  <input type="color" id="hero_bg_color" value="#667eea">
                </div>
              </div>
            </div>

            <div id="bg_image_group" class="hidden">
              <div class="form-field">
                <label>Background Image</label>
                <div class="file-input-wrapper">
                  <input type="file" id="hero_bg_image" accept="image/*">
                  <label for="hero_bg_image" class="file-input-label">
                    📁 Choose background image or drag & drop
                  </label>
                </div>
              </div>
            </div>

            <div class="two-column">
              <div class="form-field">
                <div class="color-input-group">
                  <label>Text Color</label>
                  <input type="color" id="hero_text_color" value="#ffffff">
                </div>
              </div>

              <div class="form-field ">
                <label for="hero_height">Height (px)</label>
                <input type="number" id="hero_height" class="shadow-sm border" value="600" min="300" max="1000">
              </div>
            </div>
          </div>

          <!-- Call to Action -->
          <div class="field-group">
            <h3>Call to Action Button</h3>
            
            <div class="form-field">
              <div class="checkbox-group" onclick="toggleCTA()">
                <input type="checkbox" id="add_hero_cta">
                <label for="add_hero_cta">Include CTA Button</label>
              </div>
            </div>

            <div id="hero_cta_fields" class="cta-fields hidden">
              <div class="two-column">
                <div class="form-field">
                  <label for="hero_cta_text">Button Text</label>
                  <input type="text" id="hero_cta_text" placeholder="Get Started">
                </div>

                <div class="form-field">
                  <label for="hero_cta_url">Button Link</label>
                  <input type="text" id="hero_cta_url" placeholder="/get-started">
                </div>
              </div>

              <div class="two-column">
                <div class="form-field">
                  <div class="color-input-group">
                    <label>Button Color</label>
                    <input type="color" id="hero_cta_color" value="#f093fb">
                  </div>
                </div>

                <div class="form-field">
                  <div class="color-input-group">
                    <label>Button Text Color</label>
                    <input type="color" id="hero_cta_text_color" value="#ffffff">
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>

        <button type="submit" class="submit-btn">
          ✨ Save Hero Section
        </button>

        <div class="preview-hint">
         <p class="text-muted">💡 Your hero section will be Save with modern animations and responsive design</p> 
        </div>
      </form>
    </div>
  </div>
@endsection

@section('script')
  <script>
    // Background type toggle
    document.querySelectorAll('.bg-option').forEach(option => {
      option.addEventListener('click', function() {
        // Update active state
        document.querySelectorAll('.bg-option').forEach(opt => opt.classList.remove('active'));
        this.classList.add('active');
        
        // Show/hide appropriate fields
        const type = this.dataset.type;
        const colorGroup = document.getElementById('bg_color_group');
        const imageGroup = document.getElementById('bg_image_group');
        
        if (type === 'color') {
          colorGroup.classList.remove('hidden');
          imageGroup.classList.add('hidden');
        } else {
          colorGroup.classList.add('hidden');
          imageGroup.classList.remove('hidden');
        }
      });
    });

    // CTA toggle function
    function toggleCTA() {
      const checkbox = document.getElementById('add_hero_cta');
      const fields = document.getElementById('hero_cta_fields');
      
      if (checkbox.checked) {
        fields.classList.remove('hidden');
      } else {
        fields.classList.add('hidden');
      }
    }

    // File input enhancement
    document.getElementById('hero_bg_image').addEventListener('change', function(e) {
      const label = document.querySelector('.file-input-label');
      const fileName = e.target.files[0]?.name;
      
      if (fileName) {
        label.textContent = `📷 ${fileName}`;
        label.style.color = 'var(--primary-color)';
      } else {
        label.textContent = '📁 Choose background image or drag & drop';
        label.style.color = '';
      }
    });

    // Form submission
    document.getElementById('hero-builder').addEventListener('submit', function(e) {
      e.preventDefault();
      
      // Create loading state
      const btn = document.querySelector('.submit-btn');
      const originalText = btn.innerHTML;
      btn.innerHTML = '⚡ Saving...';
      btn.disabled = true;
      
      // Simulate processing
      setTimeout(() => {
        btn.innerHTML = '✅ Hero Section Saved!';
        setTimeout(() => {
          btn.innerHTML = originalText;
          btn.disabled = false;
        }, 2000);
      }, 1500);
      
      // Here you would normally process the form data
      console.log('Hero section configuration:', {
        title: document.getElementById('hero_title').value,
        subtitle: document.getElementById('hero_subtitle').value,
        backgroundType: document.querySelector('.bg-option.active').dataset.type,
        backgroundColor: document.getElementById('hero_bg_color').value,
        textColor: document.getElementById('hero_text_color').value,
        height: document.getElementById('hero_height').value,
        includeCTA: document.getElementById('add_hero_cta').checked,
        ctaText: document.getElementById('hero_cta_text').value,
        ctaUrl: document.getElementById('hero_cta_url').value,
        ctaColor: document.getElementById('hero_cta_color').value,
        ctaTextColor: document.getElementById('hero_cta_text_color').value
      });
    });

    // Add some interactive polish
    document.querySelectorAll('input, select, textarea').forEach(input => {
      input.addEventListener('focus', function() {
        this.parentElement.style.transform = 'scale(1.02)';
      });
      
      input.addEventListener('blur', function() {
        this.parentElement.style.transform = 'scale(1)';
      });
    });
  </script>
@endsection