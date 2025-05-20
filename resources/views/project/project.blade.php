@extends('main-layout')
@section('title', 'start you prtoject')
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
                        <div class="step-number active">1</div>
                    <a href="{{ route('startProject') }}" class="text-decoration-none active fw-bold"><span>Project Info</span></a> 

                    </div>
                    <div class="step-divider"></div>
                    <div class="progress-step ">
                        <div class="step-number ">2</div>
                       <a href="{{ route('selectSite') }}" class="text-decoration-none"><span>Choose Approach</span></a> 

                        {{-- <span>Choose Approach</span> --}}
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
 <div class="container p-0">
        <div class="form-header">
            <h1>Create New Project</h1>
            <p>Get started by entering your project information</p>
            <div class="form-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                    <polyline points="14 2 14 8 20 8"></polyline>
                    <line x1="16" y1="13" x2="8" y2="13"></line>
                    <line x1="16" y1="17" x2="8" y2="17"></line>
                    <polyline points="10 9 9 9 8 9"></polyline>
                </svg>
            </div>
        </div>

        <div class="form-body">
            <div class="success-message" id="successMessage">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                    <polyline points="22 4 12 14.01 9 11.01"></polyline>
                </svg>
                <span>Project created successfully! Taking you to the next step...</span>
            </div>

            <form id="projectForm">
                <div class="form-group">
                    <label for="projectName">Project Name <span class="form-required">*</span></label>
                    <input type="text" id="projectName" name="projectName" placeholder="Enter project name" required>
                    <div class="error-message">Project name is required</div>
                </div>

                <div class="form-group">
                    <label for="projectDescription">Project Description</label>
                    <textarea id="projectDescription" name="projectDescription" placeholder="Describe what this website is for..."></textarea>
                </div>

                <div class="form-group">
                    <label for="projectCategory">Project Category</label>
                    <select id="projectCategory" name="projectCategory" style="width: 100%; padding: 0.75rem 1rem; border: 1px solid var(--border-color); border-radius: 6px; font-size: 1rem; background-color: white;">
                        <option value="" selected disabled>Select a category</option>
                        <option value="business">Business</option>
                        <option value="portfolio">Portfolio</option>
                        <option value="blog">Blog</option>
                        <option value="ecommerce">E-commerce</option>
                        <option value="personal">Personal</option>
                        <option value="other">Other</option>
                    </select>
                </div>
            </form>
        </div>

        <div class="form-footer d-flex justify-content-between">
            <div class="helper-text me-5">You'll be able to choose layouts in the next step</div>
            <button class="button" id="continueButton" type="submit" form="projectForm">
                Continue
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="5" y1="12" x2="19" y2="12"></line>
                    <polyline points="12 5 19 12 12 19"></polyline>
                </svg>
            </button>
        </div>
    </div>
@endsection