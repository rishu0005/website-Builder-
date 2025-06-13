<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Simple Design</title>
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

        .login-container {
            background: var(--bg-card);
            padding: 2.5rem;
            border-radius: 16px;
            box-shadow: var(--shadow-lg);
            width: 100%;
            max-width: 400px;
            border: 1px solid var(--border-light);
        }

        .login-header {
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

        label {
            display: block;
            color: var(--text-primary);
            font-weight: 500;
            margin-bottom: 0.5rem;
            font-size: 0.875rem;
        }

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

        input[type="email"]:focus,
        input[type="password"]:focus {
            outline: none;
            border-color: var(--primary-accent);
        }

        .checkbox-wrapper {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            margin-bottom: 1.5rem;
        }

        input[type="checkbox"] {
            width: 16px;
            height: 16px;
            accent-color: var(--primary-accent);
        }

        .checkbox-label {
            color: var(--text-secondary);
            font-size: 0.875rem;
            cursor: pointer;
        }

        .forgot-password {
            text-align: right;
            margin-bottom: 1.5rem;
        }

        .forgot-password a {
            color: var(--primary-accent);
            text-decoration: none;
            font-size: 0.875rem;
            font-weight: 500;
        }

        .forgot-password a:hover {
            text-decoration: underline;
        }

        .login-btn {
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
        }

        .login-btn:hover {
            opacity: 0.9;
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

        .signup-link {
            text-align: center;
            color: var(--text-secondary);
            font-size: 0.875rem;
        }

        .signup-link a {
            color: var(--primary-accent);
            text-decoration: none;
            font-weight: 500;
        }

        .signup-link a:hover {
            text-decoration: underline;
        }

        @media (max-width: 480px) {
            .login-container {
                padding: 2rem 1.5rem;
                margin: 1rem;
            }
            
            h1 {
                font-size: 1.5rem;
            }
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="login-header">
            <div class="logo">🔐</div>
            <h1>Welcome Back</h1>
            <p class="subtitle">Sign in to your account</p>
        </div>
        
        <form id="loginForm">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            
            <div class="checkbox-wrapper">
                <input type="checkbox" id="rememberMe" name="rememberMe">
                <label class="checkbox-label" for="rememberMe">Remember me</label>
            </div>
            
            <div class="forgot-password">
                <a href="#" id="forgotPassword">Forgot password?</a>
            </div>
            
            <button type="submit" class="login-btn">Sign In</button>
        </form>
        
        <div class="divider">
            <span>or</span>
        </div>
        
        <div class="social-login">
            <button class="social-btn" id="googleLogin">Google</button>
            <button class="social-btn" id="githubLogin">GitHub</button>
        </div>
        
        <div class="signup-link">
            Don't have an account? <a href="#">Sign up</a>
        </div>
    </div>

    <script>
        // Form submission
        document.getElementById('loginForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const email = document.getElementById('email').value;
            const password = document.getElementById('password').value;
            const remember = document.getElementById('rememberMe').checked;
            
            alert(`Login attempted with:\nEmail: ${email}\nRemember: ${remember}`);
        });
        
        // Social login handlers
        document.getElementById('googleLogin').addEventListener('click', () => {
            alert('Google login clicked!');
        });
        
        document.getElementById('githubLogin').addEventListener('click', () => {
            alert('GitHub login clicked!');
        });
        
        document.getElementById('forgotPassword').addEventListener('click', (e) => {
            e.preventDefault();
            alert('Forgot password clicked!');
        });
    </script>
</body>
</html>