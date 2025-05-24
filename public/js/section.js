document.addEventListener("DOMContentLoaded", () => {
    const pages = [
        'Navbar', 'Footer', 'Hero Section', 'About Section', 'Services/Features', 'Contact Form', 
        'Portfolio/Gallery', 'Testimonials', 'Blog Section', 'Pricing Table', 'FAQ Section',
        'Call to Action (CTA)', 'Sidebar', 'Breadcrumbs', 'Newsletter Signup', 'Popup Modal', 
        'Video Embed', 'Countdown Timer', 'Map Embed', 'Social Media Feed', 'Custom Code Block', 
        'Product Listing', 'Shopping Cart', 'Search Bar', 'Filter Options', 'Login/Signup Form',
        'Language Selector', 'Dark Mode Toggle', 'Cookie Consent Banner', 'Chat/Support Widget'
    ];

    const container = document.querySelector('main');
    const template = document.getElementById('item-template');
    const selectedCountEl = document.getElementById('selected-count');
    let selectedCount = 0;

    // Check if template exists
    if (!template) {
        console.error('Template not found');
        return;
    }

    pages.forEach(name => {
        const clone = template.content.cloneNode(true);
        const button = clone.querySelector('button');

        if (button) {
            button.textContent = name;
            button.addEventListener('click', () => {
                const isSelected = button.classList.toggle('selected');
                selectedCount += isSelected ? 1 : -1;
                selectedCountEl.textContent = selectedCount;
            });
        }

        container.appendChild(clone);
    });
});