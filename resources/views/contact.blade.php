<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            padding: 20px;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
         
        }

        @media (max-width: 768px) {
            .container {
                grid-template-columns: 1fr;
                gap: 30px;
            }
        }

        .form-section, .contact-section {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            padding: 40px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        h2 {
            color: #333;
            margin-bottom: 30px;
            font-size: 2rem;
            text-align: center;
            background: linear-gradient(135deg, #667eea, #764ba2);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .form-group {
            margin-bottom: 25px;
            position: relative;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #555;
            font-weight: 600;
            font-size: 0.95rem;
        }

        input, textarea, select {
            width: 100%;
            padding: 15px 20px;
            border: 2px solid #e1e5e9;
            border-radius: 12px;
            font-size: 16px;
            transition: all 0.3s ease;
            background: #fff;
        }

        input:focus, textarea:focus, select:focus {
            outline: none;
            border-color: #667eea;
            box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
            transform: translateY(-2px);
        }

        textarea {
            resize: vertical;
            min-height: 120px;
        }

        .submit-btn {
            background: linear-gradient(135deg, #667eea, #764ba2);
            color: white;
            border: none;
            padding: 18px 40px;
            border-radius: 12px;
            font-size: 18px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            width: 100%;
            position: relative;
            overflow: hidden;
        }

        .submit-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 25px rgba(102, 126, 234, 0.3);
        }

        .submit-btn:active {
            transform: translateY(0);
        }

        .contact-display {
            min-height: 200px;
        }

        .contact-card {
            background: linear-gradient(135deg, #f8f9ff, #e8ecff);
            border-radius: 15px;
            padding: 25px;
            margin-bottom: 20px;
            border-left: 5px solid #667eea;
            transition: all 0.3s ease;
            opacity: 0;
            transform: translateY(20px);
            animation: slideIn 0.5s ease forwards;
        }

        @keyframes slideIn {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .contact-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(102, 126, 234, 0.15);
        }

        .contact-item {
            display: flex;
            margin-bottom: 15px;
            align-items: center;
        }

        .contact-item:last-child {
            margin-bottom: 0;
        }

        .contact-label {
            font-weight: 600;
            color: #555;
            min-width: 100px;
            margin-right: 15px;
        }

        .contact-value {
            color: #333;
            flex: 1;
        }

        .empty-state {
            text-align: center;
            color: #666;
            font-style: italic;
            padding: 60px 20px;
        }

        .success-message {
            background: linear-gradient(135deg, #4caf50, #45a049);
            color: white;
            padding: 15px;
            border-radius: 10px;
            margin-bottom: 20px;
            text-align: center;
            opacity: 0;
            transform: translateY(-20px);
            animation: successSlide 0.5s ease forwards;
        }

        @keyframes successSlide {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }

        @media (max-width: 600px) {
            .form-row {
                grid-template-columns: 1fr;
            }
        }

        .icon {
            width: 20px;
            height: 20px;
            margin-right: 10px;
            opacity: 0.7;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="d-flex justify-content-center">

            <div class="form-section">
                <h2>📝 Contact Form</h2>
                <form id="contactForm">
                    
                    <div class="form-group">
                        <label for="email">Email Address *</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                
                    <div class="form-group">
                        <label for="firstName">Location *</label>
                        <input type="text" id="firstName" name="firstName" required>
                    </div>
    
                    {{-- <div class="form-row"> --}}
                        <div class="form-group">
                            <label for="phone">Phone Number 1 *</label>
                            <input type="tel" class="number1" id="phone" name="phone">
                        </div>
                        <div class="form-group">
                            <label for="company">Phone Number 2</label>
                            <input type="text" id="company" name="company">
                        </div>
                    {{-- </div> --}}
    
                    {{-- <div class="form-group">
                        <label for="subject">Subject *</label>
                        <select id="subject" name="subject" required>
                            <option value="">Select a subject</option>
                            <option value="general">General Inquiry</option>
                            <option value="support">Technical Support</option>
                            <option value="sales">Sales</option>
                            <option value="partnership">Partnership</option>
                            <option value="feedback">Feedback</option>
                            <option value="other">Other</option>
                        </select>
                    </div> --}}
    
                    <div class="form-group">
                        <label for="message">Description </label>
                        <textarea id="message" name="message" placeholder="Tell us how we can help you..." required></textarea>
                    </div>
    
                    <button type="submit" class="submit-btn">Send Message ✨</button>
                </form>
            </div>
        </div>

    </div>

    <script>
        let contacts = [];

        document.getElementById('contactForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const formData = new FormData(this);
            const contact = {
                id: Date.now(),
                firstName: formData.get('firstName'),
                lastName: formData.get('lastName'),
                email: formData.get('email'),
                phone: formData.get('phone'),
                company: formData.get('company'),
                subject: formData.get('subject'),
                message: formData.get('message'),
                timestamp: new Date().toLocaleString()
            };

            contacts.unshift(contact);
            updateContactDisplay();
            showSuccessMessage();
            this.reset();
        });

      

        function getSubjectText(value) {
            const subjects = {
                'general': 'General Inquiry',
                'support': 'Technical Support',
                'sales': 'Sales',
                'partnership': 'Partnership',
                'feedback': 'Feedback',
                'other': 'Other'
            };
            return subjects[value] || value;
        }

        // Add smooth scrolling and form validation feedback
        document.querySelectorAll('input').forEach(field => {
            field.addEventListener('blur', function() {
                if (this.required && !this.value.trim()) {
                    this.style.borderColor = '#ff6b6b';
                }
                 else if (this.type === 'email' && this.value && !this.validity.valid) {
                    this.style.borderColor = '#ff6b6b';
                } 
                 else if (this.type === 'tel' && this.value && !this.validity.valid) {
                    this.style.borderColor = '#ff6b6b';
                } 
           
            });

            field.addEventListener('input', function() {
                if (this.style.borderColor === 'rgb(255, 107, 107)') {
                    this.style.borderColor = '#e1e5e9';
                }
            });
        });
    </script>
</body>
</html>