<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Simple Design</title>
    <style>
        :root {
            /* Primary Colors - Deep Blue to Light Blue Gradient */
            --primary-dark: #1e293b;
            --primary-medium: #334155;
            --primary-light: #64748b;
            --primary-accent: #3b82f6;
            --primary-hover: #2563eb;
                        
            /* Secondary Colors - Purple to Pink Gradient */
            --secondary-dark: #581c87;
            --secondary-medium: #7c3aed;
            --secondary-light: #a855f7;
            --secondary-accent: #ec4899;
                        
            /* Neutral Colors */
            --bg-primary: #f8fafc;
            --bg-secondary: #ffffff;
            --bg-card: #ffffff;
            --text-primary: #1e293b;
            --text-secondary: #64748b;
            --text-muted: #94a3b8;
            --border-color: #e2e8f0;
            --border-light: #f1f5f9;
                        
            /* Success/Warning/Error Colors */
            --success: #10b981;
            --success-light: #d1fae5;
            --warning: #f59e0b;
            --warning-light: #fef3c7;
            --error: #ef4444;
            --error-light: #fee2e2;
                        
            /* Shadows */
            --shadow-sm: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
            --shadow-md: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
            --shadow-lg: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
            --shadow-xl: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
                        
            /* Gradients */
            --gradient-primary: linear-gradient(135deg, var(--primary-accent) 0%, var(--secondary-medium) 100%);
            --gradient-secondary: linear-gradient(135deg, var(--secondary-medium) 0%, var(--secondary-accent) 100%);
            --primary-gradient: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
            background: var(--bg-primary);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .register-container {
            background: var(--bg-card);
            padding: 2.5rem;
            border-radius: 16px;
            box-shadow: var(--shadow-lg);
            width: 100%;
            max-width: 420px;
            border: 1px solid var(--border-light);
        }

        .register-header {
            text-align: center;
            margin-bottom: 2rem;
        }

        .logo {
            width: 50px;
            height: 50px;
            background: var(--gradient-primary);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1rem;
            font-size: 20px;
        }

        h1 {
            color: var(--text-primary);
            font-size: 1.75rem;
            font-weight: 600;
            margin-bottom: 0.5rem;
        }

        .subtitle {
            color: var(--text-secondary);
            font-size: 0.9rem;
        }

        .form-group {
            margin-bottom: 1.25rem;
        }

        .form-row {
            display: flex;
            gap: 1rem;
        }

        .form-row .form-group {
            flex: 1;
        }

        label {
            display: block;
            color: var(--text-primary);
            font-weight: 500;
            margin-bottom: 0.5rem;
            font-size: 0.875rem;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 0.875rem;
            border: 1px solid var(--border-color);
            border-radius: 8px;
            font-size: 1rem;
            color: var(--text-primary);
            background: var(--bg-secondary);
            transition: border-color 0.2s ease;
        }

        input[type="text"]:focus,
        input[type="email"]:focus,
        input[type="password"]:focus {
            outline: none;
            border-color: var(--primary-accent);
        }

        .password-strength {
            margin-top: 0.5rem;
            font-size: 0.75rem;
        }

        .strength-bar {
            height: 3px;
            background: var(--border-color);
            border-radius: 2px;
            margin: 0.25rem 0;
            overflow: hidden;
        }

        .strength-fill {
            height: 100%;
            border-radius: 2px;
            transition: width 0.3s ease, background-color 0.3s ease;
            width: 0%;
        }

        .strength-weak { background: var(--error); width: 25%; }
        .strength-fair { background: var(--warning); width: 50%; }
        .strength-good { background: var(--primary-accent); width: 75%; }
        .strength-strong { background: var(--success); width: 100%; }

        .checkbox-wrapper {
            display: flex;
            align-items: flex-start;
            gap: 0.5rem;
            margin-bottom: 1.5rem;
        }

        input[type="checkbox"] {
            width: 16px;
            height: 16px;
            accent-color: var(--primary-accent);
            margin-top: 0.125rem;
        }

        .checkbox-label {
            color: var(--text-secondary);
            font-size: 0.875rem;
            cursor: pointer;
            line-height: 1.4;
        }

        .checkbox-label a {
            color: var(--primary-accent);
            text-decoration: none;
        }

        .checkbox-label a:hover {
            text-decoration: underline;
        }

        .register-btn {
            width: 100%;
            padding: 0.875rem;
            background: var(--gradient-primary);
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 1rem;
            font-weight: 500;
            cursor: pointer;
            transition: opacity 0.2s ease;
            margin-bottom: 1.5rem;
        }

        .register-btn:hover {
            opacity: 0.9;
        }

        .register-btn:disabled {
            opacity: 0.6;
            cursor: not-allowed;
        }

        .divider {
            text-align: center;
            margin: 1.5rem 0;
            position: relative;
            color: var(--text-muted);
            font-size: 0.875rem;
        }

        .divider::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 0;
            right: 0;
            height: 1px;
            background: var(--border-color);
        }

        .divider span {
            background: var(--bg-card);
            padding: 0 1rem;
        }

        .social-login {
            display: flex;
            gap: 0.75rem;
            margin-bottom: 1.5rem;
        }

        .social-btn {
            flex: 1;
            padding: 0.75rem;
            border: 1px solid var(--border-color);
            border-radius: 8px;
            background: var(--bg-secondary);
            cursor: pointer;
            transition: border-color 0.2s ease;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1rem;
        }

        .social-btn:hover {
            border-color: var(--primary-accent);
        }

        .login-link {
            text-align: center;
            color: var(--text-secondary);
            font-size: 0.875rem;
        }

        .login-link a {
            color: var(--primary-accent);
            text-decoration: none;
            font-weight: 500;
        }

        .login-link a:hover {
            text-decoration: underline;
        }

        @media (max-width: 480px) {
            .register-container {
                padding: 2rem 1.5rem;
                margin: 1rem;
            }
            
            h1 {
                font-size: 1.5rem;
            }

            .form-row {
                flex-direction: column;
                gap: 0;
            }
        }
    </style>
</head>
<body>
    <div class="register-container">
        <div class="register-header">
            <div class="logo">✨</div>
            <h1>Create Account</h1>
            <p class="subtitle">Join us today - it's free!</p>
        </div>
        
        <form id="registerForm">
            <div class="form-row">
                <div class="form-group">
                    <label for="firstName">First Name</label>
                    <input type="text" id="firstName" name="firstName" required>
                </div>
                <div class="form-group">
                    <label for="lastName">Last Name</label>
                    <input type="text" id="lastName" name="lastName" required>
                </div>
            </div>
            
            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" id="email" name="email" required>
            </div>
            
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
                <div class="password-strength">
                    <div class="strength-bar">
                        <div class="strength-fill" id="strengthFill"></div>
                    </div>
                    <span id="strengthText">Enter a password</span>
                </div>
            </div>
            
            <div class="form-group">
                <label for="confirmPassword">Confirm Password</label>
                <input type="password" id="confirmPassword" name="confirmPassword" required>
            </div>
            
            <div class="checkbox-wrapper">
                <input type="checkbox" id="agreeTerms" name="agreeTerms" required>
                <label class="checkbox-label" for="agreeTerms">
                    I agree to the <a href="#">Terms of Service</a> and <a href="#">Privacy Policy</a>
                </label>
            </div>
            
            <div class="checkbox-wrapper">
                <input type="checkbox" id="newsletter" name="newsletter">
                <label class="checkbox-label" for="newsletter">
                    Send me updates and marketing emails
                </label>
            </div>
            
            <button type="submit" class="register-btn" id="registerBtn">Create Account</button>
        </form>
        
        <div class="divider">
            <span>or sign up with</span>
        </div>
        
        <div class="social-login">
            <button class="social-btn" id="googleRegister">Google</button>
            <button class="social-btn" id="githubRegister">GitHub</button>
        </div>
        
        <div class="login-link">
            Already have an account? <a href="#">Sign in</a>
        </div>
    </div>

    <script>
        // Password strength checker
        const passwordInput = document.getElementById('password');
        const strengthFill = document.getElementById('strengthFill');
        const strengthText = document.getElementById('strengthText');

        function checkPasswordStrength(password) {
            let strength = 0;
            let text = 'Weak';
            let className = 'strength-weak';

            if (password.length >= 8) strength++;
            if (/[a-z]/.test(password)) strength++;
            if (/[A-Z]/.test(password)) strength++;
            if (/[0-9]/.test(password)) strength++;
            if (/[^A-Za-z0-9]/.test(password)) strength++;

            switch (strength) {
                case 0:
                case 1:
                    text = 'Very weak';
                    className = 'strength-weak';
                    break;
                case 2:
                    text = 'Weak';
                    className = 'strength-weak';
                    break;
                case 3:
                    text = 'Fair';
                    className = 'strength-fair';
                    break;
                case 4:
                    text = 'Good';
                    className = 'strength-good';
                    break;
                case 5:
                    text = 'Strong';
                    className = 'strength-strong';
                    break;
            }

            return { text, className };
        }

        passwordInput.addEventListener('input', function() {
            const password = this.value;
            if (password === '') {
                strengthFill.className = 'strength-fill';
                strengthText.textContent = 'Enter a password';
                return;
            }

            const { text, className } = checkPasswordStrength(password);
            strengthFill.className = `strength-fill ${className}`;
            strengthText.textContent = text;
        });

        // Form validation
        const form = document.getElementById('registerForm');
        const confirmPasswordInput = document.getElementById('confirmPassword');
        const registerBtn = document.getElementById('registerBtn');

        function validateForm() {
            const password = passwordInput.value;
            const confirmPassword = confirmPasswordInput.value;
            const agreeTerms = document.getElementById('agreeTerms').checked;
            
            let isValid = true;

            // Check if passwords match
            if (password && confirmPassword && password !== confirmPassword) {
                confirmPasswordInput.style.borderColor = 'var(--error)';
                isValid = false;
            } else {
                confirmPasswordInput.style.borderColor = 'var(--border-color)';
            }

            // Check if terms are agreed
            if (!agreeTerms) {
                isValid = false;
            }

            registerBtn.disabled = !isValid;
        }

        confirmPasswordInput.addEventListener('input', validateForm);
        document.getElementById('agreeTerms').addEventListener('change', validateForm);
        passwordInput.addEventListener('input', validateForm);

        // Form submission
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            
            const formData = new FormData(form);
            const data = Object.fromEntr    ies(formData.entries());
            
            if (data.password !== data.confirmPassword) {
                alert('Passwords do not match!');
                return;
            }
            
            alert(`Registration attempted with:\nName: ${data.firstName} ${data.lastName}\nEmail: ${data.email}\nNewsletter: ${data.newsletter ? 'Yes' : 'No'}`);
        });
        
        // Social registration handlers
        document.getElementById('googleRegister').addEventListener('click', () => {
            alert('Google registration clicked!');
        });
        
        document.getElementById('githubRegister').addEventListener('click', () => {
            alert('GitHub registration clicked!');
        });
    </script>
</body>
</html>