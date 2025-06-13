@extends('main-layout')
@section('title', 'FAQ Layout Selector')

@section('style')
<style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
            line-height: 1.6;
            color: #1a202c;
            /* background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); */
            min-height: 100vh;
            /* padding: 40px    20px; */
        }

        .main-header {
            text-align: center;
            margin-bottom: 60px;
            color:  #667eea;

        }

        .main-header h1 {
            font-size: 3.5rem;
            font-weight: 800;
            margin-bottom: 15px;
            /* text-shadow: 0 4px 20px rgba(0,0,0,0.3); */
        }

        .main-header p {
            font-size: 1.3rem;
            opacity: 0.9;
            font-weight: 300;
        }

        .container {
            max-width: 1400px;
            margin: 0 auto;
        }

        .layouts-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(400px, 1fr));
            gap: 40px;
            margin-bottom: 60px;
        }

        .layout-card {
            background: white;
            border-radius: 24px;
            overflow: hidden;
            box-shadow: 0 25px 60px rgba(0,0,0,0.15);
            transition: all 0.4s ease;
            cursor: pointer;
            position: relative;
            border: 4px solid transparent;
        }

        .layout-card:hover {
            transform: translateY(-10px) scale(1.02);
            box-shadow: 0 35px 80px rgba(0,0,0,0.2);
        }

        .layout-card.selected {
            border-color: var(--primary-accent);
            transform: translateY(-10px) scale(1.02);
            box-shadow: 0 35px 80px rgba(128, 91, 174, 0.3);
        }

        /* .layout-card.selected::after {
            content: '✓';
            position: absolute;
            top: 20px;
            right: 20px;
            width: 40px;
            height: 40px;
            background: var(--primary-accent);
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            font-size: 1.2rem;
            z-index: 10;
        } */

        .layout-header {
            padding: 30px;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .layout-title {
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 8px;
            background: linear-gradient(135deg, #667eea, #764ba2);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .layout-subtitle {
            font-size: 1rem;
            color: #64748b;
            font-weight: 500;
        }

        .layout-preview {
            padding: 30px;
            min-height: 300px;
        }

        /* Layout 1: Modern Accordion Preview */
        .accordion-bg {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }

        .accordion-preview .preview-item {
            background: white;
            border-radius: 12px;
            margin-bottom: 15px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(102, 126, 234, 0.1);
        }

        .accordion-preview .preview-question {
            padding: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-weight: 600;
            color: #1a202c;
            border-left: 4px solid #667eea;
        }

        .accordion-preview .preview-icon {
            width: 20px;
            height: 20px;
            border-radius: 50%;
            background: linear-gradient(135deg, #667eea, #764ba2);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 0.8rem;
        }

        /* Layout 2: Floating Cards Preview */
        .cards-bg {
            background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%);
        }

        .cards-bg .layout-title {
            background: linear-gradient(135deg, #06b6d4, #3b82f6);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .cards-preview .preview-item {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(20px);
            border-radius: 16px;
            padding: 25px;
            margin-bottom: 20px;
            position: relative;
            border-top: 3px solid;
            border-image: linear-gradient(90deg, #06b6d4, #3b82f6) 1;
        }

        .cards-preview .preview-question {
            font-weight: 700;
            color: #0f172a;
            margin-bottom: 10px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .cards-preview .preview-question::before {
            content: '?';
            width: 24px;
            height: 24px;
            border-radius: 50%;
            background: linear-gradient(135deg, #06b6d4, #3b82f6);
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            font-size: 0.9rem;
        }

        .cards-preview .preview-answer {
            color: #475569;
            font-size: 0.9rem;
        }

        /* Layout 3: Minimal Preview */
        .minimal-bg {
            background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);
        }

        .minimal-bg .layout-title {
            background: linear-gradient(135deg, #1e293b, #475569);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .minimal-preview .preview-item {
            padding: 25px 0;
            border-bottom: 1px solid #e2e8f0;
            position: relative;
        }

        .minimal-preview .preview-item:last-child {
            border-bottom: none;
        }

        .minimal-preview .preview-item::before {
            content: '';
            position: absolute;
            left: 0;
            top: 50%;
            transform: translateY(-50%);
            width: 3px;
            height: 60%;
            background: linear-gradient(to bottom, #1e293b, #475569);
        }

        .minimal-preview .preview-question {
            font-weight: 600;
            color: #1e293b;
            margin-bottom: 8px;
            padding-left: 15px;
        }

        .minimal-preview .preview-answer {
            color: #64748b;
            font-size: 0.9rem;
            padding-left: 15px;
        }

        .action-buttons {
            display: flex;
            justify-content: center;
            gap: 30px;
            margin-top: 40px;
        }

        .btn {
            padding: 18px 40px;
            font-size: 1.1rem;
            font-weight: 600;
            border: none;
            border-radius: 50px;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 10px;
            text-align: center;
            box-shadow: 0 8px 25px rgba(0,0,0,0.15);
        }

        .btn:disabled {
            opacity: 0.5;
            cursor: not-allowed;
            transform: none;
        }

        /* .btn-primary {
            background: linear-gradient(135deg, #10b981, #059669);
            color: white;
        } */

        .btn-primary:hover:not(:disabled) {
            transform: translateY(-3px);
            box-shadow: 0 15px 35px rgba(16, 185, 129, 0.4);
        }

        .btn-secondary {
            background: linear-gradient(135deg, #667eea, #764ba2);
            color: white;
        }

        .btn-secondary:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 35px rgba(102, 126, 234, 0.4);
        }

        .selection-info {
            text-align: center;
            margin-top: 30px;
            padding: 20px;
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border-radius: 16px;
            color: white;
            font-size: 1.1rem;
        }

        .selection-info.hidden {
            display: none;
        }

        @media (max-width: 768px) {
            .layouts-grid {
                grid-template-columns: 1fr;
                gap: 30px;
            }

            .main-header h1 {
                font-size: 2.5rem;
            }

            .action-buttons {
                flex-direction: column;
                align-items: center;
                gap: 20px;
            }

            .btn {
                width: 100%;
                max-width: 300px;
            }
        }
</style>
@endsection

@section('content')
<div class="container">
        <div class="main-header">
            <h1>Choose Your FAQ Style</h1>
            <p>Select the layout that best fits your website's design</p>
        </div>

        <div class="layouts-grid">
            <!-- Layout 1: Modern Accordion -->
            <div class="layout-card" onclick="selectLayout('accordion', this)">
                <div class="layout-header accordion-bg">
                    <h3 class="layout-title text-primary">Interactive Accordion</h3>
                    <p class="layout-subtitle" style="color: rgba(255,255,255,0.9);">Expandable sections with animations</p>
                </div>
                <div class="layout-preview accordion-preview">
                    <div class="preview-item">
                        <div class="preview-question">
                            What is your return policy?
                            <div class="preview-icon">+</div>
                        </div>
                    </div>
                    <div class="preview-item">
                        <div class="preview-question">
                            How long does shipping take?
                            <div class="preview-icon">+</div>
                        </div>
                    </div>
                    <div class="preview-item">
                        <div class="preview-question">
                            Do you offer customer support?
                            <div class="preview-icon">+</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Layout 2: Floating Cards -->
            <div class="layout-card" onclick="selectLayout('cards', this)">
                <div class="layout-header cards-bg">
                    <h3 class="layout-title">Floating Cards</h3>
                    <p class="layout-subtitle" style="color: #94a3b8;">Glass morphism with gradients</p>
                </div>
                <div class="layout-preview cards-preview">
                    <div class="preview-item">
                        <div class="preview-question">What is your return policy?</div>
                        <div class="preview-answer">We offer a comprehensive 30-day return policy...</div>
                    </div>
                    <div class="preview-item">
                        <div class="preview-question">How long does shipping take?</div>
                        <div class="preview-answer">Standard shipping takes 3-5 business days...</div>
                    </div>
                </div>
            </div>

            <!-- Layout 3: Minimal Elegant -->
            <div class="layout-card" onclick="selectLayout('minimal', this)">
                <div class="layout-header minimal-bg">
                    <h3 class="layout-title">Minimal Elegant</h3>
                    <p class="layout-subtitle">Clean and sophisticated design</p>
                </div>
                <div class="layout-preview minimal-preview">
                    <div class="preview-item">
                        <div class="preview-question">What is your return policy?</div>
                        <div class="preview-answer">We offer a comprehensive 30-day return policy for all items...</div>
                    </div>
                    <div class="preview-item">
                        <div class="preview-question">How long does shipping take?</div>
                        <div class="preview-answer">Standard shipping takes 3-5 business days within the US...</div>
                    </div>
                    <div class="preview-item">
                        <div class="preview-question">Do you offer customer support?</div>
                        <div class="preview-answer">Yes! We provide 24/7 customer support through multiple channels...</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="selection-info hidden" id="selectionInfo">
            <strong>Great choice!</strong> You've selected the <span id="selectedLayoutName"></span> layout.
        </div>

        <div class="action-buttons">
            <button class="btn btn-primary" id="useLayoutBtn" disabled onclick="useSelectedLayout()">
                ✨Preview
            </button>
            <a href="#customize" class="btn btn-secondary" onclick="customizeLayout()">
                🎨 Use This Layout
            </a>
        </div>
    </div>
@endsection

@section('script')
<script>
        let selectedLayout = null;
        let selectedCard = null;

        const layoutNames = {
            'accordion': 'Interactive Accordion',
            'cards': 'Floating Cards',
            'minimal': 'Minimal Elegant'
        };

        function selectLayout(layoutType, cardElement) {
            // Remove previous selection
            if (selectedCard) {
                selectedCard.classList.remove('selected');
            }

            // Add selection to clicked card
            cardElement.classList.add('selected');
            selectedCard = cardElement;
            selectedLayout = layoutType;

            // Update UI
            document.getElementById('useLayoutBtn').disabled = false;
            document.getElementById('selectionInfo').classList.remove('hidden');
            document.getElementById('selectedLayoutName').textContent = layoutNames[layoutType];

            // Add a nice visual feedback
            // cardElement.style.animation = 'pulse 0.6s ease-in-out';
            // setTimeout(() => {
            //     cardElement.style.animation = '';
            // }, 600);
        }

        function useSelectedLayout() {
            if (!selectedLayout) {
                alert('Please select a layout first!');
                return;
            }

            // Simulate redirect to implementation page
            const layoutUrls = {
                'accordion': 'accordion-faq.html',
                'cards': 'cards-faq.html', 
                'minimal': 'minimal-faq.html'
            };

            // Show confirmation
            const confirmed = confirm(`Redirect to ${layoutNames[selectedLayout]} implementation?\n\nThis will take you to: ${layoutUrls[selectedLayout]}`);
            
            // if (confirmed) {
            //     // In a real scenario, you would redirect:
            //     // window.location.href = layoutUrls[selectedLayout];
                
            //     // For demo purposes, show an alert
            //     alert(`Redirecting to ${layoutNames[selectedLayout]} page...\n\nURL: ${layoutUrls[selectedLayout]}\n\n(In a real implementation, this would navigate to the actual page)`);
            // }
        }

        function customizeLayout() {
            if (!selectedLayout) {
                alert('Please select a layout first to customize it!');
                return;
            }

            alert(`Opening customization panel for ${layoutNames[selectedLayout]}...\n\nHere you would be able to:\n• Change colors and fonts\n• Edit FAQ content\n• Download HTML/CSS code\n• Export as component`);
        }

        // Add CSS animation
        const style = document.createElement('style');
        style.textContent = `
            @keyframes pulse {
                0% { transform: scale(1); }
                50% { transform: scale(1.05); }
                100% { transform: scale(1); }
            }
        `;
        document.head.appendChild(style);
</script>
@endsection