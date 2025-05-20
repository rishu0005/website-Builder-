@extends('main-layout')
@section('title', 'Select how to procced')
@section('content')
 
 <header class="page-header">
        <div class="container-select">
            <div class="header-content">
                <div class="project-info">
                    <div class="project-name">My Awesome Website</div>
                    <div class="project-badge">In Progress</div>
                </div>
                <div class="progress-container">
                    <div class="progress-step">
                        <div class="step-number">1</div>
                       <a href="{{ route('startProject') }}" class="text-decoration-none "><span>Project Info</span></a> 
                    </div>
                    <div class="step-divider"></div>
                    <div class="progress-step active">
                        <div class="step-number active">2</div>
                   <a href="{{ route('selectSite') }}" class="text-decoration-none fw-bold"><span>Choose Approach</span></a> 
                    </div>
                    <div class="step-divider"></div>
                    <div class="progress-step">
                        <div class="step-number">3</div>
                        <span>Layout Selection</span>
                    </div>
                    <div class="step-divider"></div>
                    <div class="progress-step">
                        <div class="step-number">4</div>
                        <span>Edit Content</span>
                    </div>
                    <div class="step-divider"></div>
                    <div class="progress-step">
                        <div class="step-number">5</div>
                        <span>Finish</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <main class="container-select">
        <div class="page-title">
            <h1>Choose Your Website Approach</h1>
            <p>Would you like to start with a pre-designed template or build a custom website from scratch?</p>
        </div>

        <div class="option-container">
            <div class="option-card" id="templateOption">
                <div class="option-image template-image"></div>
                <div class="option-body">
                    <h2 class="option-title">Use a Template</h2>
                    <p class="option-description">Get started quickly with a professionally designed template that you can customize to fit your needs.</p>
                    <ul class="option-features">
                        <li>
                            <svg class="feature-icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                <polyline points="22 4 12 14.01 9 11.01"></polyline>
                            </svg>
                            <span>Quick setup with professionally designed layouts</span>
                        </li>
                        <li>
                            <svg class="feature-icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                <polyline points="22 4 12 14.01 9 11.01"></polyline>
                            </svg>
                            <span>Responsive designs that work on all devices</span>
                        </li>
                        <li>
                            <svg class="feature-icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                <polyline points="22 4 12 14.01 9 11.01"></polyline>
                            </svg>
                            <span>Customizable content, colors, and images</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="option-card" id="customOption">
                <div class="option-image custom-image"></div>
                <div class="option-body">
                    <h2 class="option-title">Create Custom Website</h2>
                    <p class="option-description">Build your website from scratch with complete control over layout and design elements.</p>
                    <ul class="option-features">
                        <li>
                            <svg class="feature-icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                <polyline points="22 4 12 14.01 9 11.01"></polyline>
                            </svg>
                            <span>Full creative control over page layouts</span>
                        </li>
                        <li>
                            <svg class="feature-icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                <polyline points="22 4 12 14.01 9 11.01"></polyline>
                            </svg>
                            <span>Start with a blank canvas or basic structure</span>
                        </li>
                        <li>
                            <svg class="feature-icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                <polyline points="22 4 12 14.01 9 11.01"></polyline>
                            </svg>
                            <span>Add custom sections and functionality</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="template-gallery" id="templateGallery">
            <div class="gallery-header">
                <h3 class="gallery-title">Select a Template</h3>
                <div class="template-filters">
                    <button class="filter-button active">All</button>
                    <button class="filter-button">Business</button>
                    <button class="filter-button">Portfolio</button>
                    <button class="filter-button">Blog</button>
                    <button class="filter-button">E-commerce</button>
                </div>
            </div>
            <div class="template-grid">
                <div class="template-card">
                    <div class="template-preview"></div>
                    <div class="template-info">
                        <div class="template-name">Modern Business</div>
                        <div class="template-category">Business</div>
                    </div>
                </div>
                <div class="template-card">
                    <div class="template-preview"></div>
                    <div class="template-info">
                        <div class="template-name">Creative Portfolio</div>
                        <div class="template-category">Portfolio</div>
                    </div>
                </div>
                <div class="template-card">
                    <div class="template-preview"></div>
                    <div class="template-info">
                        <div class="template-name">Minimal Blog</div>
                        <div class="template-category">Blog</div>
                    </div>
                </div>
                <div class="template-card">
                    <div class="template-preview"></div>
                    <div class="template-info">
                        <div class="template-name">Online Store</div>
                        <div class="template-category">E-commerce</div>
                    </div>
                </div>
                <div class="template-card">
                    <div class="template-preview"></div>
                    <div class="template-info">
                        <div class="template-name">Agency Pro</div>
                        <div class="template-category">Business</div>
                    </div>
                </div>
                <div class="template-card">
                    <div class="template-preview"></div>
                    <div class="template-info">
                        <div class="template-name">Photo Gallery</div>
                        <div class="template-category">Portfolio</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="actions-container">
            <button class="back-button">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="19" y1="12" x2="5" y2="12"></line>
                    <polyline points="12 19 5 12 12 5"></polyline>
                </svg>
                Back
            </button>
            <button class="continue-button" id="continueButton" disabled>
                Continue
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="5" y1="12" x2="19" y2="12"></line>
                    <polyline points="12 5 19 12 12 19"></polyline>
                </svg>
            </button>
        </div>
    </main>
@endsection   

@section('script')
 <script>
      $(document).ready(function () {
    const $templateOption = $('#templateOption');
    const $customOption = $('#customOption');
    const $templateGallery = $('#templateGallery');
    const $continueButton = $('#continueButton');
    const $templateCards = $('.template-card');
    const $filterButtons = $('.filter-button');

    let selectedOption = null;
    let selectedTemplate = null;

    // Handle option selection
    $templateOption.on('click', function () {
        selectedOption = 'template';
        $templateOption.addClass('selected');
        $customOption.removeClass('selected');
        $templateGallery.show();
        checkContinueButton();

        // Smooth scroll to template gallery
        setTimeout(() => {
            $templateGallery[0].scrollIntoView({ behavior: 'smooth' });
        }, 100);
    });

    $customOption.on('click', function () {
        selectedOption = 'custom';
        $customOption.addClass('selected');
        $templateOption.removeClass('selected');
        $templateGallery.hide();
        selectedTemplate = null;
        checkContinueButton();
    });

    // Handle template selection
    $templateCards.on('click', function () {
        $templateCards.removeClass('selected');
        $(this).addClass('selected');
        selectedTemplate = $(this);
        checkContinueButton();
    });

    // Handle filter buttons
    $filterButtons.on('click', function () {
        $filterButtons.removeClass('active');
        $(this).addClass('active');
        // In a real application, you would filter the templates here
    });

    // Handle continue button state
    function checkContinueButton() {
        if (selectedOption === 'custom' || (selectedOption === 'template' && selectedTemplate)) {
            $continueButton.prop('disabled', false);
        } else {
            $continueButton.prop('disabled', true);
        }
    }

    // Handle continue button click
    // $continueButton.on('click', function () {
    //     if (selectedOption === 'custom') {
    //         alert('Taking you to custom website builder...');
    //         // Redirect to custom website builder

    //     } else if (selectedOption === 'template' && selectedTemplate) {
    //         const templateName = selectedTemplate.find('.template-name').text();
    //         alert(`You selected the "${templateName}" template. Taking you to layout customization...`);
    //         // Redirect to template customization with the selected template
    //     }
    // });
});

    </script>
    @endsection