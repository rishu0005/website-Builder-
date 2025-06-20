@extends('main-layout')
@section('title', 'About section customizer')
@section('style')
  <style>
    body {
      background: var(--bg-primary);
      /* font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; */
      min-height: 100vh;
      /* padding: 20px 0; */
      overflow-x: hidden;
    }

    /* Animated Background Elements */
    .bg-decoration {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      pointer-events: none;
      z-index: -1;
    }

    .floating-shape {
      position: absolute;
      border-radius: 50%;
      opacity: 0.1;
      animation: float 20s infinite ease-in-out;
    }

    .shape-1 {
      width: 80px;
      height: 80px;
      background: var(--primary-gradient);
      top: 10%;
      left: 10%;
      animation-delay: 0s;
    }

    .shape-2 {
      width: 120px;
      height: 120px;
      background: var(--secondary-gradient);
      top: 60%;
      right: 10%;
      animation-delay: 5s;
    }

    .shape-3 {
      width: 60px;
      height: 60px;
      background: var(--success-gradient);
      bottom: 20%;
      left: 20%;
      animation-delay: 10s;
    }

    @keyframes float {
      0%, 100% { transform: translateY(0px) rotate(0deg); }
      33% { transform: translateY(-30px) rotate(120deg); }
      66% { transform: translateY(15px) rotate(240deg); }
    }

    /* Main Container */
    .main-container {
      max-width: 1200px;
      margin: 0 auto;
      padding: 0 20px;
    }

    /* Header */
    .header {
      text-align: center;
      margin-bottom: 40px;
    }

    .header h1 {
      background: var(--primary-gradient);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
      font-size: 2.5rem;
      font-weight: 700;
      margin-bottom: 10px;
      animation: slideDown 1s ease-out;
    }

    .header p {
      color: var(--text-secondary);
      font-size: 1.1rem;
      animation: slideUp 1s ease-out 0.2s both;
    }

    /* Glass Cards */
    .glass-card {
      background: var(--bg-card);
      backdrop-filter: blur(20px);
      border: 1px solid rgba(255, 255, 255, 0.2);
      border-radius: 20px;
      box-shadow: var(--shadow-card);
      transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
      overflow: hidden;
      position: relative;
    }

    .glass-card::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      height: 1px;
      background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.4), transparent);
    }

    .glass-card:hover {
      transform: translateY(-5px);
      box-shadow: var(--shadow-hover);
    }

    /* Form Styles */
    .form-container {
      padding: 40px;
    }

    .form-group {
      margin-bottom: 25px;
      position: relative;
    }

    .form-label {
      display: block;
      margin-bottom: 8px;
      color: var(--text-primary);
      font-weight: 600;
      font-size: 0.9rem;
      text-transform: uppercase;
      letter-spacing: 0.5px;
    }

    .form-control {
      width: 100%;
      padding: 15px 20px;
      border: 2px solid var(--border-color);
      border-radius: 12px;
      background: rgba(255, 255, 255, 0.8);
      color: var(--text-primary);
      font-size: 1rem;
      transition: all 0.3s ease;
      backdrop-filter: blur(10px);
    }

    .form-control:focus {
      outline: none;
      /* border-color: var(--border-focus); */
      background: rgba(255, 255, 255, 0.95);
      box-shadow: none !important;
      transform: translateY(-2px);
    }

    .form-control::placeholder {
      color: var(--text-muted);
    }

    /* Button Styles */
    .btn-gradient {
      background: var(--primary-gradient);
      border: none;
      color: white;
      padding: 15px 30px;
      border-radius: 12px;
      font-weight: 600;
      font-size: 1rem;
      text-transform: uppercase;
      letter-spacing: 0.5px;
      transition: all 0.3s ease;
      box-shadow: var(--shadow-md);
      cursor: pointer;
      position: relative;
      overflow: hidden;
    }

    .btn-gradient::before {
      content: '';
      position: absolute;
      top: 0;
      left: -100%;
      width: 100%;
      height: 100%;
      background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
      transition: left 0.5s;
    }

    .btn-gradient:hover::before {
      left: 100%;
    }

    .btn-gradient:hover {
      transform: translateY(-2px);
      box-shadow: var(--shadow-lg);
    }

    .btn-gradient:active {
      transform: translateY(0);
    }

    /* Preview Section */
    .preview-container {
      position: sticky;
      top: 20px;
    }

    .about-preview {
      padding: 40px;
      text-align: center;
      background: var(--glass-gradient);
      backdrop-filter: blur(20px);
    }

    .profile-img {
      width: 120px;
      height: 120px;
      border-radius: 50%;
      object-fit: cover;
      border: 4px solid rgba(255, 255, 255, 0.5);
      box-shadow: var(--shadow-lg);
      transition: all 0.3s ease;
      margin-bottom: 20px;
      animation: pulse 2s infinite;
    }

    .profile-img:hover {
      transform: scale(1.05);
      box-shadow: var(--shadow-glow);
    }

    @keyframes pulse {
      0%, 100% { box-shadow: 0 0 0 0 rgba(102, 126, 234, 0.4); }
      50% { box-shadow: 0 0 0 20px rgba(102, 126, 234, 0); }
    }

    .about-name {
      font-size: 2rem;
      font-weight: 700;
      color: var(--text-primary);
      margin-bottom: 8px;
      background: var(--primary-gradient);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
    }

    .about-title {
      font-size: 1.2rem;
      color: var(--text-secondary);
      margin-bottom: 20px;
      font-weight: 500;
    }

    .about-description {
      color: var(--text-secondary);
      line-height: 1.6;
      margin-bottom: 30px;
      font-size: 1rem;
    }

    .about-button {
      background: var(--secondary-gradient);
      color: white;
      padding: 12px 25px;
      border: none;
      border-radius: 8px;
      font-weight: 600;
      text-decoration: none;
      display: inline-block;
      transition: all 0.3s ease;
      box-shadow: var(--shadow-md);
      position: relative;
      overflow: hidden;
    }

    .about-button::before {
      content: '';
      position: absolute;
      top: 50%;
      left: 50%;
      width: 0;
      height: 0;
      background: rgba(255, 255, 255, 0.2);
      border-radius: 50%;
      transform: translate(-50%, -50%);
      transition: width 0.3s, height 0.3s;
    }

    .about-button:hover::before {
      width: 300px;
      height: 300px;
    }

    .about-button:hover {
      transform: translateY(-2px);
      box-shadow: var(--shadow-lg);
    }

    /* Animations */
    @keyframes slideDown {
      from {
        opacity: 0;
        transform: translateY(-30px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    @keyframes slideUp {
      from {
        opacity: 0;
        transform: translateY(30px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .fade-in {
      animation: slideUp 0.6s ease-out both;
    }

    .fade-in:nth-child(1) { animation-delay: 0.1s; }
    .fade-in:nth-child(2) { animation-delay: 0.2s; }
    .fade-in:nth-child(3) { animation-delay: 0.3s; }
    .fade-in:nth-child(4) { animation-delay: 0.4s; }
    .fade-in:nth-child(5) { animation-delay: 0.5s; }

    /* Responsive Design */
    @media (max-width: 768px) {
      .main-container {
        padding: 0 15px;
      }
      
      .form-container, .about-preview {
        padding: 25px;
      }
      
      .header h1 {
        font-size: 2rem;
      }
      
      .profile-img {
        width: 100px;
        height: 100px;
      }
      
      .about-name {
        font-size: 1.5rem;
      }
    }
</style>
@endsection

@section('content')
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
            Nav Section 
          </li>
        </ol>
      </nav>
    </div>

  <!-- Animated Background -->
  <div class="bg-decoration">
    <div class="floating-shape shape-1"></div>
    <div class="floating-shape shape-2"></div>
    <div class="floating-shape shape-3"></div>
  </div>

<div class="main-container mt-4">
    <!-- Header -->
    <div class="header">
      <h1><i class="fas fa-user-edit"></i> About Section Studio</h1>
      <p>Create your perfect about section with live preview</p>
    </div>

    <div class="row g-4 justify-content-center">
      <!-- Form Column -->
      <div class="col-lg-8">
        <div class="glass-card">
          <div class="form-container">
            <h3 class="mb-4" style="color: var(--text-primary); font-weight: 600;">
              <i class="fas fa-edit me-2"></i>Customize About Section  
            </h3>
            
            <form id="aboutForm">
              <div class="form-group fade-in">
                <label class="form-label">
                  <i class="fas fa-user me-2"></i>Heading 
                </label>
                <input type="text" class="form-control" name="name" placeholder="This is Heading">
              </div>

              <div class="form-group fade-in">
                <label class="form-label">
                  <i class="fas fa-briefcase me-2"></i>Sub heading
                </label>
                <input type="text" class="form-control" name="title" placeholder="Customize sub heading ">
              </div>

              <div class="form-group fade-in">
                <label class="form-label">
                  <i class="fas fa-align-left me-2"></i>About Description
                </label>
                <textarea class="form-control" name="description" rows="4" placeholder="Heading Description... What drives you? What are your passions?"></textarea>
              </div>

              <div class="form-group fade-in">
                <label class="form-label">
                  <i class="fas fa-image me-2"></i>About section Image URL
                </label>
                <input type="text" class="form-control" name="image" placeholder="https://example.com/your-photo.jpg">
              </div>

              <div class="form-group fade-in">
                <label class="form-label">
                  <i class="fas fa-mouse-pointer me-2"></i>Button Text
                </label>
                <input type="text" class="form-control" name="button" placeholder="Contact Me">
              </div>

              <button type="button" class="btn-gradient w-100">
                <i class="fas fa-magic me-2"></i>Update Preview
              </button>
            </form>
          </div>
        </div>
      </div>

      <!-- Preview Column -->
      {{-- <div class="col-lg-6">
        <div class="preview-container">
          <div class="glass-card">
            <div class="about-preview">
              <img id="aboutImage" src="" alt="" class="profile-img">
              <h2 id="aboutName" class="about-name">This is heading </h2>
              <p id="aboutTitle" class="about-title">This is sub heading</p>
              <p id="aboutDescription" class="about-description">
                This is where your amazing story begins! Tell people about your journey, your passions, and what makes you unique. Let your personality shine through.
              </p>
              <button id="aboutButton" class="about-button">
                <span style="position: relative; z-index: 1;">Get In Touch</span>
              </button>
            </div>
          </div>
        </div>
      </div> --}}
    </div>
  </div>

@endsection

@section('script')
  <script>
    // Real-time preview updates
    const form = document.getElementById('aboutForm');
    const inputs = form.querySelectorAll('input, textarea');

    // Add real-time listeners
    inputs.forEach(input => {
      input.addEventListener('input', updatePreview);
    });

    function updatePreview() {
      const formData = new FormData(form);
      
      // Update preview elements
      document.getElementById('aboutName').textContent = 
        formData.get('name') || 'This is Heading ';
      
      document.getElementById('aboutTitle').textContent = 
        formData.get('title') || 'This is sub heading  ';
      
      document.getElementById('aboutDescription').textContent = 
        formData.get('description') || 'This is where you can edit your about section! lorem ipsum dolor , your passions, and what makes you unique. Let your personality shine through.';
      
      const imageUrl = formData.get('image') || '';
      document.getElementById('aboutImage').src = imageUrl;
      
      document.getElementById('aboutButton').querySelector('span').textContent = 
        formData.get('button') || 'Get In Touch';
    }

    // Form submission handler
    form.addEventListener('submit', function(e) {
    //   e.preventDefault();
      
      // Add success animation
      const button = e.target.querySelector('.btn-gradient');
      const originalText = button.innerHTML;
      
      button.innerHTML = '<i class="fas fa-check me-2"></i>Updated!';
      button.style.background = 'var(--success-gradient)';
      
      setTimeout(() => {
        button.innerHTML = originalText;
        button.style.background = 'var(--primary-gradient)';
      }, 2000);
    });

    // Image error handling
    document.getElementById('aboutImage').addEventListener('error', function() {
      this.src = 'https://via.placeholder.com/120/667eea/ffffff?text=404';
    });

    // Add floating animation to form elements on focus
    inputs.forEach(input => {
      input.addEventListener('focus', function() {
        this.parentElement.style.transform = 'translateY(-2px)';
      });
      
      input.addEventListener('blur', function() {
        this.parentElement.style.transform = 'translateY(0)';
      });
    });
  </script>
@endsection