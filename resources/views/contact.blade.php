<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Premium Contact Layouts</title>
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
            --gradient-rainbow: linear-gradient(45deg, #667eea 0%, #764ba2 25%, #f093fb 50%, #f5576c 75%, #4facfe 100%);
            --gradient-glow: linear-gradient(135deg, rgba(59, 130, 246, 0.3) 0%, rgba(124, 58, 237, 0.3) 50%, rgba(236, 72, 153, 0.3) 100%);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: var(--text-primary);
            line-height: 1.6;
            overflow-x: hidden;
        }

        /* Animated Background */
        .bg-animation {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            background: linear-gradient(45deg, #667eea, #764ba2, #f093fb, #f5576c, #4facfe);
            background-size: 400% 400%;
            animation: gradientShift 15s ease infinite;
        }

        .bg-animation::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="grain" width="100" height="100" patternUnits="userSpaceOnUse"><circle cx="25" cy="25" r="1" fill="rgba(255,255,255,0.1)"/><circle cx="75" cy="75" r="1.5" fill="rgba(255,255,255,0.05)"/><circle cx="50" cy="10" r="0.5" fill="rgba(255,255,255,0.1)"/></pattern></defs><rect width="100" height="100" fill="url(%23grain)"/></svg>');
            animation: float 20s ease-in-out infinite;
        }

        @keyframes gradientShift {
            0%, 100% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
        }

        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
        }

        .container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 2rem;
            position: relative;
            z-index: 1;
        }

        .header {
            text-align: center;
            margin-bottom: 4rem;
            position: relative;
        }

        .header h1 {
            font-size: 4rem;
            font-weight: 800;
            background: linear-gradient(135deg, #ffffff 0%, rgba(255,255,255,0.8) 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 1rem;
            text-shadow: 0 0 30px rgba(255,255,255,0.5);
            animation: glow 3s ease-in-out infinite alternate;
        }

        @keyframes glow {
            from { filter: drop-shadow(0 0 20px rgba(255,255,255,0.3)); }
            to { filter: drop-shadow(0 0 30px rgba(255,255,255,0.6)); }
        }

        .header p {
            font-size: 1.3rem;
            color: rgba(255,255,255,0.9);
            max-width: 700px;
            margin: 0 auto;
            text-shadow: 0 2px 10px rgba(0,0,0,0.2);
        }

        /* Floating Layout Selector */
        .layout-selector {
            position: fixed;
            top: 50%;
            right: 2rem;
            transform: translateY(-50%);
            display: flex;
            flex-direction: column;
            gap: 1rem;
            z-index: 1000;
            backdrop-filter: blur(20px);
            background: rgba(255,255,255,0.1);
            padding: 1rem;
            border-radius: 2rem;
            border: 1px solid rgba(255,255,255,0.2);
        }

        .layout-btn {
            width: 60px;
            height: 60px;
            background: rgba(255,255,255,0.2);
            border: 2px solid rgba(255,255,255,0.3);
            border-radius: 50%;
            cursor: pointer;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            overflow: hidden;
            backdrop-filter: blur(10px);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.2rem;
        }

        .layout-btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: var(--gradient-primary);
            opacity: 0;
            transition: opacity 0.3s ease;
            border-radius: 50%;
        }

        .layout-btn:hover {
            transform: scale(1.1);
            box-shadow: 0 10px 30px rgba(255,255,255,0.3);
        }

        .layout-btn:hover::before {
            opacity: 1;
        }

        .layout-btn.active {
            background: var(--gradient-primary);
            transform: scale(1.15);
            box-shadow: 0 15px 40px rgba(255,255,255,0.4);
        }

        .layout-btn span {
            position: relative;
            z-index: 2;
            color: white;
            font-weight: 600;
        }

        .layout-container {
            display: none;
            animation: slideInUp 0.8s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .layout-container.active {
            display: block;
        }

        @keyframes slideInUp {
            from { 
                opacity: 0; 
                transform: translateY(50px) scale(0.95);
            }
            to { 
                opacity: 1; 
                transform: translateY(0) scale(1);
            }
        }

        /* Layout 1: Glassmorphism Cards with Floating Elements */
        .layout-1 {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 4rem;
            align-items: center;
            min-height: 80vh;
        }

        .contact-hero {
            position: relative;
            z-index: 2;
        }

        .hero-card {
            background: rgba(255,255,255,0.15);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255,255,255,0.2);
            border-radius: 3rem;
            padding: 4rem;
            position: relative;
            overflow: hidden;
            box-shadow: 0 25px 50px rgba(0,0,0,0.1);
            transition: all 0.4s ease;
        }

        .hero-card::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(255,255,255,0.1) 0%, transparent 70%);
            animation: rotate 20s linear infinite;
        }

        @keyframes rotate {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        .hero-card h2 {
            font-size: 3rem;
            font-weight: 800;
            color: white;
            margin-bottom: 1.5rem;
            position: relative;
            z-index: 2;
            text-shadow: 0 0 20px rgba(255,255,255,0.5);
        }

        .hero-card p {
            font-size: 1.3rem;
            color: rgba(255,255,255,0.9);
            margin-bottom: 3rem;
            position: relative;
            z-index: 2;
            line-height: 1.8;
        }

        .floating-contacts {
            position: relative;
            z-index: 2;
        }

        .contact-bubble {
            background: rgba(255,255,255,0.2);
            backdrop-filter: blur(15px);
            border: 1px solid rgba(255,255,255,0.3);
            border-radius: 2rem;
            padding: 2rem;
            margin-bottom: 2rem;
            position: relative;
            overflow: hidden;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            cursor: pointer;
        }

        .contact-bubble:hover {
            transform: translateY(-10px) scale(1.02);
            box-shadow: 0 20px 40px rgba(255,255,255,0.2);
            background: rgba(255,255,255,0.25);
        }

        .contact-bubble::after {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.3), transparent);
            transition: left 0.5s ease;
        }

        .contact-bubble:hover::after {
            left: 100%;
        }

        .bubble-icon {
            width: 4rem;
            height: 4rem;
            background: var(--gradient-primary);
            border-radius: 1.5rem;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 1rem;
            font-size: 1.5rem;
            box-shadow: 0 10px 25px rgba(0,0,0,0.2);
            position: relative;
            z-index: 2;
        }

        .bubble-content {
            position: relative;
            z-index: 2;
        }

        .bubble-content h3 {
            font-size: 1.4rem;
            color: white;
            margin-bottom: 0.5rem;
            font-weight: 600;
        }

        .bubble-content p {
            color: rgba(255,255,255,0.8);
            margin: 0;
        }

        .mega-cta {
            grid-column: span 2;
            text-align: center;
            margin-top: 4rem;
        }

        .mega-button {
            display: inline-block;
            padding: 2rem 4rem;
            background: var(--gradient-primary);
            color: white;
            text-decoration: none;
            border-radius: 2rem;
            font-weight: 700;
            font-size: 1.5rem;
            position: relative;
            overflow: hidden;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            box-shadow: 0 20px 40px rgba(0,0,0,0.2);
            text-transform: uppercase;
            letter-spacing: 2px;
        }

        .mega-button::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.3), transparent);
            transition: left 0.5s ease;
        }

        .mega-button:hover {
            transform: translateY(-5px) scale(1.05);
            box-shadow: 0 30px 60px rgba(0,0,0,0.3);
        }

        .mega-button:hover::before {
            left: 100%;
        }

        /* Layout 2: 3D Perspective Cards */
        .layout-2 {
            perspective: 1000px;
            min-height: 80vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .card-3d-container {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 3rem;
            max-width: 1200px;
            width: 100%;
        }

        .card-3d {
            height: 500px;
            position: relative;
            transform-style: preserve-3d;
            transition: transform 0.6s cubic-bezier(0.4, 0, 0.2, 1);
            cursor: pointer;
        }

        .card-3d:hover {
            transform: rotateY(10deg) rotateX(5deg) translateZ(20px);
        }

        .card-face {
            position: absolute;
            width: 100%;
            height: 100%;
            backface-visibility: hidden;
            border-radius: 2rem;
            overflow: hidden;
            box-shadow: 0 25px 50px rgba(0,0,0,0.2);
        }

        .card-front {
            background: rgba(255,255,255,0.1);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255,255,255,0.2);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 3rem 2rem;
            text-align: center;
            position: relative;
        }

        .card-front::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: var(--gradient-primary);
        }

        .card-icon-3d {
            width: 5rem;
            height: 5rem;
            background: var(--gradient-primary);
            border-radius: 2rem;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
            margin-bottom: 2rem;
            box-shadow: 0 15px 30px rgba(0,0,0,0.2);
            animation: bounce 2s ease-in-out infinite;
        }

        @keyframes bounce {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-10px); }
        }

        .card-front h3 {
            font-size: 1.8rem;
            color: white;
            margin-bottom: 1rem;
            font-weight: 700;
        }

        .card-front p {
            color: rgba(255,255,255,0.8);
            line-height: 1.6;
            margin-bottom: 2rem;
        }

        .pulse-button {
            padding: 1rem 2rem;
            background: rgba(255,255,255,0.2);
            border: 2px solid rgba(255,255,255,0.3);
            border-radius: 1rem;
            color: white;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .pulse-button::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 0;
            height: 0;
            background: rgba(255,255,255,0.3);
            border-radius: 50%;
            transform: translate(-50%, -50%);
            transition: width 0.3s ease, height 0.3s ease;
        }

        .pulse-button:hover::before {
            width: 300px;
            height: 300px;
        }

        .pulse-button span {
            position: relative;
            z-index: 2;
        }

        /* Layout 3: Holographic Contact Hub */
        .layout-3 {
            min-height: 80vh;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
        }

        .holographic-container {
            width: 600px;
            height: 600px;
            position: relative;
            perspective: 1000px;
        }

        .hologram-card {
            width: 100%;
            height: 100%;
            background: rgba(255,255,255,0.05);
            backdrop-filter: blur(25px);
            border: 2px solid;
            border-image: linear-gradient(45deg, 
                rgba(255,255,255,0.3) 0%, 
                rgba(255,0,150,0.3) 25%, 
                rgba(0,255,255,0.3) 50%, 
                rgba(255,255,0,0.3) 75%, 
                rgba(255,255,255,0.3) 100%) 1;
            border-radius: 3rem;
            position: relative;
            overflow: hidden;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding: 4rem;
            animation: hologramGlow 4s ease-in-out infinite alternate;
        }

        @keyframes hologramGlow {
            from { 
                box-shadow: 0 0 30px rgba(255,255,255,0.2),
                           inset 0 0 30px rgba(255,255,255,0.1);
            }
            to { 
                box-shadow: 0 0 60px rgba(255,255,255,0.4),
                           inset 0 0 60px rgba(255,255,255,0.2);
            }
        }

        .hologram-card::before {
            content: '';
            position: absolute;
            top: -2px;
            left: -2px;
            right: -2px;
            bottom: -2px;
            background: linear-gradient(45deg, 
                #ff0080, #00ffff, #ffff00, #ff0080);
            background-size: 400% 400%;
            border-radius: 3rem;
            z-index: -1;
            animation: rainbowBorder 3s ease infinite;
        }

        @keyframes rainbowBorder {
            0%, 100% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
        }

        .hologram-title {
            font-size: 3rem;
            font-weight: 800;
            background: linear-gradient(45deg, #ff0080, #00ffff, #ffff00);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 2rem;
            animation: textShimmer 3s ease-in-out infinite;
        }

        @keyframes textShimmer {
            0%, 100% { filter: hue-rotate(0deg); }
            50% { filter: hue-rotate(180deg); }
        }

        .orbital-contacts {
            position: relative;
            width: 300px;
            height: 300px;
            margin: 2rem auto;
        }

        .orbital-center {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 80px;
            height: 80px;
            background: var(--gradient-primary);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
            box-shadow: 0 0 30px rgba(255,255,255,0.5);
            animation: centerPulse 2s ease-in-out infinite;
        }

        @keyframes centerPulse {
            0%, 100% { transform: translate(-50%, -50%) scale(1); }
            50% { transform: translate(-50%, -50%) scale(1.1); }
        }

        .orbital-item {
            position: absolute;
            width: 60px;
            height: 60px;
            background: rgba(255,255,255,0.2);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255,255,255,0.3);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.3rem;
            cursor: pointer;
            transition: all 0.3s ease;
            animation: orbit 8s linear infinite;
        }

        .orbital-item:nth-child(2) {
            animation-delay: -2s;
            top: 0;
            left: 50%;
            transform: translateX(-50%);
        }

        .orbital-item:nth-child(3) {
            animation-delay: -4s;
            top: 50%;
            right: 0;
            transform: translateY(-50%);
        }

        .orbital-item:nth-child(4) {
            animation-delay: -6s;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
        }

        .orbital-item:nth-child(5) {
            animation-delay: 0s;
            top: 50%;
            left: 0;
            transform: translateY(-50%);
        }

        @keyframes orbit {
            0% { transform: rotate(0deg) translateX(120px) rotate(0deg); }
            100% { transform: rotate(360deg) translateX(120px) rotate(-360deg); }
        }

        .orbital-item:hover {
            transform: scale(1.2);
            background: var(--gradient-primary);
            box-shadow: 0 10px 30px rgba(255,255,255,0.3);
        }

        .quantum-button {
            padding: 1.5rem 3rem;
            background: transparent;
            border: 2px solid;
            border-image: linear-gradient(45deg, #ff0080, #00ffff, #ffff00, #ff0080) 1;
            border-radius: 1.5rem;
            color: white;
            font-weight: 700;
            font-size: 1.2rem;
            cursor: pointer;
            position: relative;
            overflow: hidden;
            transition: all 0.4s ease;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .quantum-button::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
            transition: left 0.5s ease;
        }

        .quantum-button:hover::before {
            left: 100%;
        }

        .quantum-button:hover {
            box-shadow: 0 0 30px rgba(255,255,255,0.5);
            transform: translateY(-2px);
        }

        /* Responsive Design */
        @media (max-width: 1024px) {
            .layout-selector {
                position: static;
                transform: none;
                flex-direction: row;
                justify-content: center;
                margin-bottom: 3rem;
                backdrop-filter: none;
                background: transparent;
                padding: 0;
                border: none;
            }

            .layout-1 {
                grid-template-columns: 1fr;
                gap: 3rem;
            }

            .card-3d-container {
                grid-template-columns: 1fr;
                gap: 2rem;
            }

            .holographic-container {
                width: 90vw;
                height: 80vh;
                max-width: 500px;
            }
        }

        @media (max-width: 768px) {
            .header h1 {
                font-size: 2.5rem;
            }

            .hero-card {
                padding: 2rem;
            }

            .hero-card h2 {
                font-size: 2rem;
            }

            .mega-button {
                padding: 1.5rem 3rem;
                font-size: 1.2rem;
            }

            .hologram-card {
                padding: 2rem;
            }

            .hologram-title {
                font-size: 2rem;
            }
        }
    </style>
</head>
<body>
    <div class="bg-animation"></div>
    
    <div class="container">
        <div class="header">
            <h1>Connect With Us</h1>
            <p>Experience the future of communication. Choose your preferred style and let's create something extraordinary together.</p>
        </div>

        <div class="layout-selector">
            <button class="layout-btn active" onclick="showLayout(1)">
                <span>✨</span>
            </button>
            <button class="layout-btn" onclick="showLayout(2)">
                <span>🎯</span>
            </button>
            <button class="layout-btn" onclick="showLayout(3)">
                <span>🚀</span>
            </button>
        </div>

        <!-- Layout 1: Glassmorphism Paradise -->
        <div id="layout-1" class="layout-container active">
            <div class="layout-1">
                <div class="contact-hero">
                    <div class="hero-card">
                        <h2>Let's Create Magic</h2>
                        <p>Step into a world where communication meets innovation. We're not just here to help – we're here to transform your vision into reality.</p>
                    </div>
                </div>

                <div class="floating-contacts">
                    <div class="contact-bubble">
                        <div class="bubble-icon">📧</div>
                        <div class="bubble-content">
                            <h3>Email Lightning</h3>
                            <p>hello@futuristic.com</p>
                        </div>
                    </div>
                    
                    <div class="contact-bubble">
                        <div class="bubble-icon">🚀</div>
                        <div class="bubble-content">
                            <h3>Instant Connect</h3>
                            <p>+1 (555) FUTURE</p>
                        </div>
                    </div>
                    
                    <div class="contact-bubble">
                        <div class="bubble-icon">🌟</div>
                        <div class="bubble-content">
                            <h3>Visit Our Galaxy</h3>
                            <p>123 Innovation Drive</p>
                        </div>
                    </div>
                </div>

                <div class="mega-cta">
                    <a href="#contact-form" class="mega-button">Launch Contact Portal</a>
                </div>
            </div>
        </div>

        <!-- Layout 2: 3D Contact Cards -->
        <div id="layout-2" class="layout-container">
            <div class="layout-2">
                <div class="card-3d-container">
                    <div class="card-3d">
                        <div class="card-face card-front">
                            <div class="card-icon-3d">💬</div>
                            <h3>Chat With Us</h3>
                            <p>Real-time conversations that spark innovation and bring ideas to life instantly.</p>
                            <button class="pulse-button" onclick="redirectToForm()">
                                <span>Start Chat</span>
                            </button>
                        </div>
                    </div>

                    <div class="card-3d">
                        <div class="card-face card-front">
                            <div class="card-icon-3d">📞</div>
                            <h3>Voice Connect</h3>
                            <p>Direct line to our experts. Every call is a step towards your next breakthrough.</p>
                            <button class="pulse-button" onclick="redirectToForm()">
                                <span>Call Now</span>
                            </button>
                        </div>
                    </div>

                    <div class="card-3d">
                        <div class="card-face card-front">
                            <div class="card-icon-3d">✉️</div>
                            <h3>Email Portal</h3>
                            <p>Send us your thoughts, dreams, and projects. We'll turn them into digital reality.</p>
                            <button class="pulse-button" onclick="redirectToForm()">
                                <span>Send Message</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Layout 3: Holographic Contact Hub -->
        <div id="layout-3" class="layout-container">
            <div class="layout-3">
                <div class="holographic-container">
                    <div class="hologram-card">
                        <h2 class="hologram-title">Contact Hub</h2>
                        <p style="color: rgba(255,255,255,0.9); font-size: 1.2rem; margin-bottom: 2rem;">
                            Welcome to the quantum realm of communication
                        </p>
                        
                        <div class="orbital-contacts">
                            <div class="orbital-center">🌟</div>
                            <div class="orbital-item">📧</div>
                            <div class="orbital-item">📱</div>
                            <div class="orbital-item">💬</div>
                            <div class="orbital-item">🎥</div>
                        </div>
                        
                        <button class="quantum-button" onclick="redirectToForm()">
                            Enter Portal
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function showLayout(layoutNumber) {
            // Hide all layouts
            const layouts = document.querySelectorAll('.layout-container');
            layouts.forEach(layout => layout.classList.remove('active'));
            
            // Remove active class from all buttons
            const buttons = document.querySelectorAll('.layout-btn');
            buttons.forEach(btn => btn.classList.remove('active'));
            
            // Show selected layout
            document.getElementById(`layout-${layoutNumber}`).classList.add('active');
            
            // Add active class to clicked button
            event.target.closest('.layout-btn').classList.add('active');
        }

        function redirectToForm() {
            // Add a cool loading effect before redirect
            const button = event.target.closest('button') || event.target.closest('a');
            const originalText = button.textContent;
            
            button.style.transform = 'scale(0.95)';
            button.textContent = 'Launching...';
            
            setTimeout(() => {
                // Replace with your actual form URL
                alert('🚀 Redirecting to contact form...\n\nReplace this with your actual form URL in the JavaScript code.\n\nExample: window.location.href = "https://your-contact-form.com";');
                
                // Reset button
                button.style.transform = '';
                button.textContent = originalText;
                
                // Uncomment and replace with your actual form URL:
                // window.location.href = 'https://your-contact-form-url.com';
                // or for new tab: window.open('https://your-contact-form-url.com', '_blank');
            }, 1000);
        }

        // Add click event to all contact form buttons and links
        document.querySelectorAll('.mega-button, .pulse-button, .quantum-button').forEach(element => {
            element.addEventListener('click', function(e) {
                e.preventDefault();
                redirectToForm();
            });
        });

        // Add hover sound effect simulation
        document.querySelectorAll('.contact-bubble, .card-3d, .orbital-item').forEach(element => {
            element.addEventListener('mouseenter', function() {
                this.style.transition = 'all 0.4s cubic-bezier(0.4, 0, 0.2, 1)';
            });
        });

        // Parallax effect for floating elements
        document.addEventListener('mousemove', function(e) {
            const mouseX = e.clientX / window.innerWidth;
            const mouseY = e.clientY / window.innerHeight;
            
            document.querySelectorAll('.contact-bubble').forEach((bubble, index) => {
                const speed = (index + 1) * 0.5;
                const x = mouseX * speed;
                const y = mouseY * speed;
                bubble.style.transform = `translate(${x}px, ${y}px)`;
            });
        });

        // Add random sparkle effects
        function createSparkle() {
            const sparkle = document.createElement('div');
            sparkle.style.position = 'fixed';
            sparkle.style.width = '4px';
            sparkle.style.height = '4px';
            sparkle.style.background = 'white';
            sparkle.style.borderRadius = '50%';
            sparkle.style.pointerEvents = 'none';
            sparkle.style.zIndex = '9999';
            sparkle.style.boxShadow = '0 0 10px white';
            sparkle.style.left = Math.random() * window.innerWidth + 'px';
            sparkle.style.top = Math.random() * window.innerHeight + 'px';
            sparkle.style.animation = 'sparkleFloat 3s ease-out forwards';
            
            document.body.appendChild(sparkle);
            
            setTimeout(() => {
                sparkle.remove();
            }, 3000);
        }

        // Add sparkle animation keyframes
        const sparkleStyle = document.createElement('style');
        sparkleStyle.textContent = `
            @keyframes sparkleFloat {
                0% {
                    opacity: 1;
                    transform: translateY(0) scale(0);
                }
                10% {
                    transform: translateY(-10px) scale(1);
                }
                100% {
                    opacity: 0;
                    transform: translateY(-100px) scale(0);
                }
            }
        `;
        document.head.appendChild(sparkleStyle);

        // Create sparkles periodically
        setInterval(createSparkle, 2000);

        // Smooth scrolling for better UX
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Add keyboard navigation
        document.addEventListener('keydown', function(e) {
            if (e.key >= '1' && e.key <= '3') {
                showLayout(parseInt(e.key));
            }
        });

        // Initialize with a welcome effect
        window.addEventListener('load', function() {
            document.body.style.opacity = '0';
            document.body.style.transform = 'scale(0.9)';
            
            setTimeout(() => {
                document.body.style.transition = 'all 1s ease';
                document.body.style.opacity = '1';
                document.body.style.transform = 'scale(1)';
            }, 100);
        });
    </script>
</body>
</html>