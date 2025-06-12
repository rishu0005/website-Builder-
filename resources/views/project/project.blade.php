@extends('main-layout')
@section('title', 'start you prtoject')

@section("style")
<style>
        :root {
            /* Stunning Color Palette */
            --primary-gradient: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            --secondary-gradient: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
            --success-gradient: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
            --warning-gradient: linear-gradient(135deg, #43e97b 0%, #38f9d7 100%);
            --error-gradient: linear-gradient(135deg, #fa709a 0%, #fee140 100%);
            
            /* Enhanced Colors */
            --primary-color: #667eea;
            --primary-hover: #5a6fd8;
            --primary-light: rgba(102, 126, 234, 0.1);
            --secondary-color: #764ba2;
            --accent-color: #f093fb;
            
            /* Sophisticated Neutrals */
            --bg-primary: #fafbfc;
            --bg-secondary: #ffffff;
            --bg-glass: rgba(255, 255, 255, 0.25);
            --text-primary: #1a202c;
            --text-secondary: #4a5568;
            --text-muted: #718096;
            --border-color: #e2e8f0;
            --border-focus: #667eea;
            --light-gray: #f7fafc;
            
            /* Status Colors */
            --success-color: #38a169;
            --error-color: #e53e3e;
            --warning-color: #dd6b20;
            
            /* Advanced Shadows */
            --shadow-sm: 0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px 0 rgba(0, 0, 0, 0.06);
            --shadow-md: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
            --shadow-lg: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
            --shadow-xl: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
            --shadow-2xl: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
            --shadow-glow: 0 0 40px rgba(102, 126, 234, 0.3);
            --shadow-inner: inset 0 2px 4px 0 rgba(0, 0, 0, 0.06);
        }

        /* * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 50%, #f093fb 100%);
            min-height: 100vh;
            padding: 2rem;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
        } */

        /* body::before {
            content: '';
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="grain" width="100" height="100" patternUnits="userSpaceOnUse"><circle cx="50" cy="50" r="0.5" fill="rgba(255,255,255,0.1)"/></pattern></defs><rect width="100" height="100" fill="url(%23grain)"/></svg>');
            pointer-events: none;
            opacity: 0.3;
        } */

        .container-form {
            max-width: 1200px;
            width: 100%;
            /* background: rgba(255, 255, 255, 0.95); */
            backdrop-filter: blur(20px);
            /* border-radius: 24px; */
            box-shadow: var(--shadow-2xl), var(--shadow-glow);
            overflow: hidden;
            border: 1px solid rgba(255, 255, 255, 0.2);
            position: relative;
            animation: slideIn 0.8s ease-out;
        }

        @keyframes slideIn {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .container-form::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: var(--primary-gradient);
        }

        .form-header {
            background: var(--primary-gradient);
            color: white;
            padding: 2.5rem 3rem;
            position: relative;
            overflow: hidden;
        }

        .form-header::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(255,255,255,0.1) 0%, transparent 70%);
            animation: shimmer 3s ease-in-out infinite;
        }

        @keyframes shimmer {
            0%, 100% { transform: translateX(-50%) translateY(-50%) rotate(0deg); }
            50% { transform: translateX(-30%) translateY(-30%) rotate(180deg); }
        }

        .form-header h1 {
            font-size: 2rem;
            font-weight: 800;
            margin-bottom: 0.75rem;
            position: relative;
            z-index: 1;
            background: linear-gradient(45deg, #fff 30%, rgba(255,255,255,0.8) 70%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .form-header p {
            font-size: 1rem;
            opacity: 0.95;
            position: relative;
            z-index: 1;
            font-weight: 400;
        }

        .form-icon {
            position: absolute;
            top: 2rem;
            right: 3rem;
            background: rgba(255, 255, 255, 0.2);
            height: 4rem;
            width: 4rem;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.3);
            font-size: 1.5rem;
            animation: float 3s ease-in-out infinite;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
        }

        .form-body {
            padding: 3rem;
            background: linear-gradient(145deg, #ffffff 0%, #f8fafc 100%);
        }

        .form-group {
            margin-bottom: 2rem;
            position: relative;
        }

        label {
            display: block;
            font-weight: 600;
            margin-bottom: 0.75rem;
            font-size: 0.95rem;
            color: var(--text-primary);
            position: relative;
        }

        .form-required {
            color: var(--error-color);
            margin-left: 0.25rem;
        }

        input, textarea {
            width: 100%;
            padding: 1rem 1.5rem;
            border: 2px solid var(--border-color);
            border-radius: 16px;
            font-size: 1rem;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(10px);
            font-family: inherit;
            position: relative;
        }

        input:focus, textarea:focus {
            outline: none;
            border-color: var(--border-focus);
            box-shadow: 0 0 0 4px var(--primary-light), var(--shadow-lg);
            background: rgba(255, 255, 255, 0.95);
            transform: translateY(-2px);
        }

        input:hover, textarea:hover {
            border-color: var(--primary-color);
            box-shadow: var(--shadow-md);
        }

        textarea {
            resize: vertical;
            min-height: 140px;
            font-family: inherit;
        }

        .form-footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 2.5rem 3rem;
            background: linear-gradient(145deg, #f8fafc 0%, #ffffff 100%);
            border-top: 1px solid rgba(226, 232, 240, 0.5);
        }

        .helper-text {
            font-size: 0.85rem;
            color: var(--text-muted);
            font-weight: 500;
        }

        .button {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 0.75rem;
            background: var(--primary-gradient);
            color: white;
            padding: 1rem 2rem;
            border-radius: 16px;
            font-weight: 600;
            border: none;
            cursor: pointer;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            font-size: 1rem;
            position: relative;
            overflow: hidden;
            box-shadow: var(--shadow-lg);
        }

        .button::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.3), transparent);
            transition: left 0.5s ease;
        }

        .button:hover {
            transform: translateY(-3px);
            box-shadow: var(--shadow-xl), var(--shadow-glow);
        }

        .button:hover::before {
            left: 100%;
        }

        .button:active {
            transform: translateY(-1px);
        }

        .error-message {
            color: var(--error-color);
            font-size: 0.85rem;
            margin-top: 0.75rem;
            display: none;
            font-weight: 500;
            padding: 0.5rem 1rem;
            background: rgba(229, 62, 62, 0.1);
            border-radius: 8px;
            border-left: 3px solid var(--error-color);
        }

        input.error, textarea.error {
            border-color: var(--error-color);
            background: rgba(229, 62, 62, 0.05);
            animation: shake 0.5s ease-in-out;
        }

        @keyframes shake {
            0%, 100% { transform: translateX(0); }
            25% { transform: translateX(-5px); }
            75% { transform: translateX(5px); }
        }

        input.error + .error-message, textarea.error + .error-message {
            display: block;
            animation: slideDown 0.3s ease-out;
        }

        @keyframes slideDown {
            from {
                opacity: 0;
                transform: translateY(-10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .success-message {
            display: none;
            align-items: center;
            gap: 0.75rem;
            background: var(--success-gradient);
            color: white;
            padding: 1.5rem;
            border-radius: 16px;
            margin-bottom: 2rem;
            font-weight: 600;
            box-shadow: var(--shadow-lg);
            animation: successPulse 0.6s ease-out;
        }

        @keyframes successPulse {
            0% {
                opacity: 0;
                transform: scale(0.9);
            }
            50% {
                transform: scale(1.05);
            }
            100% {
                opacity: 1;
                transform: scale(1);
            }
        }

        .success-message.show {
            display: flex;
        }

        /* Enhanced Input States */
        .form-group {
            position: relative;
        }

        .form-group::before {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            width: 0;
            height: 2px;
            background: var(--primary-gradient);
            transition: all 0.3s ease;
            transform: translateX(-50%);
            z-index: 1;
        }

        .form-group:focus-within::before {
            width: 100%;
        }

        /* Floating Labels Effect */
        .floating-label {
            position: relative;
        }

        .floating-label input {
            padding-top: 1.5rem;
        }

        .floating-label label {
            position: absolute;
            top: 1rem;
            left: 1.5rem;
            transition: all 0.3s ease;
            pointer-events: none;
            background: rgba(255, 255, 255, 0.9);
            padding: 0 0.5rem;
            border-radius: 4px;
        }

        .floating-label input:focus + label,
        .floating-label input:not(:placeholder-shown) + label {
            top: -0.5rem;
            font-size: 0.8rem;
            color: var(--primary-color);
            font-weight: 600;
        }

        /* Dark Mode Support */
        @media (prefers-color-scheme: dark) {
            :root {
                --bg-primary: #1a202c;
                --bg-secondary: #2d3748;
                --text-primary: #f7fafc;
                --text-secondary: #e2e8f0;
                --text-muted: #a0aec0;
                --border-color: #4a5568;
                --light-gray: #2d3748;
            }

            .container-form {
                background: rgba(45, 55, 72, 0.95);
            }

            .form-body {
                background: linear-gradient(145deg, #2d3748 0%, #1a202c 100%);
            }

            .form-footer {
                background: linear-gradient(145deg, #1a202c 0%, #2d3748 100%);
            }

            input, textarea {
                background: rgba(45, 55, 72, 0.8);
                color: var(--text-primary);
            }

            input:focus, textarea:focus {
                background: rgba(45, 55, 72, 0.95);
            }
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            body {
                padding: 1rem;
            }
            
            .container-form {
                border-radius: 20px;
            }
            
            .form-header, .form-body, .form-footer {
                padding: 2rem 1.5rem;
            }
            
            .form-icon {
                display: none;
            }

            .form-footer {
                flex-direction: column;
                gap: 1.5rem;
            }

            .helper-text {
                text-align: center;
            }

            .button {
                width: 100%;
                padding: 1.25rem 2rem;
            }

            .form-header h1 {
                font-size: 1.75rem;
            }
        }

        @media (max-width: 480px) {
            .form-header, .form-body, .form-footer {
                padding: 1.5rem 1rem;
            }

            input, textarea {
                padding: 0.875rem 1.25rem;
            }
        }
    </style>
@endsection

@section('content')

 <div class="container-form">
        <div class="form-header">
            <h1> Create New Project</h1>
            <p>Get started by entering your project informations</p>
            <div class="form-icon">
                📝
            </div>
        </div>
        
        <div class="form-body">
            <div class="success-message" id="successMessage">
                <span>✅</span>
                <span>Form submitted successfully! We'll be in touch soon.</span>
            </div>
            
            <div class="form-group floating-label">
                <input type="text" id="fullName"class="p-4" placeholder=" " required>
                <label for="fullName">Project Name  <span class="form-required">*</span></label>
                <div class="error-message">Please enter your full name</div>
            </div>
            
            <div class="form-group floating-label">
                <input type="text" id="email" class="p-4" placeholder=" " required>
                <label for="email">Project Category  <span class="form-required">*</span></label>
                <div class="error-message">Please enter a valid Category </div>
            </div>
            
            {{-- <div class="form-group floating-label">
                <input type="tel" id="phone" class="p-4" placeholder=" ">
                <label for="phone">Phone Number</label>
                <div class="error-message">Please enter a valid phone number</div>
            </div> --}}
            
            <div class="form-group">
                <label for="message">Project Description <span class="form-required">*</span></label>
                <textarea id="message" class="p-3" placeholder="Tell us about your project or inquiry..." required></textarea>
                <div class="error-message">Please enter your message</div>
            </div>
        </div>
        
        <div class="form-footer d-flex justify-content-between">
            <div class="helper-text">
                All fields marked with <span class="form-required">*</span> are required
            </div>
            <a href="{{ route('select-site') }}" class="button" onclick="submitForm()">
                <span>🚀</span>
               Start Your Project
            </a>
        </div>
    </div>
@endsection

@section('script')
<script>
        function submitForm() {
            // Simple validation demo
            const inputs = document.querySelectorAll('input[required], textarea[required]');
            let hasError = false;
            
            inputs.forEach(input => {
                input.classList.remove('error');
                if (!input.value.trim()) {
                    input.classList.add('error');
                    hasError = true;
                }
            });
            
            // if (!hasError) {
            //     document.getElementById('successMessage').classList.add('show');
            //     setTimeout(() => {
            //         document.getElementById('successMessage').classList.remove('show');
            //     }, 5000);
            // }
        }

        // Real-time validation
        document.querySelectorAll('input, textarea').forEach(input => {
            input.addEventListener('blur', function() {
                if (this.hasAttribute('required') && !this.value.trim()) {
                    this.classList.add('error');
                } else {
                    this.classList.remove('error');
                }
            });
            
            input.addEventListener('input', function() {
                if (this.classList.contains('error') && this.value.trim()) {
                    this.classList.remove('error');
                }
            });
        });
    </script>
@endsection