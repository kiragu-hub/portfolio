const menuToggle = document.getElementById('menuToggle');
const navLinks = document.getElementById('navLinks');

if (menuToggle && navLinks) {

    function closeMenu() {
        navLinks.classList.remove('open');
        menuToggle.setAttribute('aria-expanded', 'false');
        menuToggle.setAttribute('aria-label', 'Open navigation menu');
    }

    menuToggle.addEventListener('click', () => {
        const isOpen = navLinks.classList.toggle('open');

        menuToggle.setAttribute('aria-expanded', String(isOpen));

        menuToggle.setAttribute(
            'aria-label',
            isOpen ? 'Close navigation menu' : 'Open navigation menu'
        );
    });

    navLinks.querySelectorAll('a').forEach(link => {
        link.addEventListener('click', closeMenu);
    });

    document.addEventListener('keydown', (event) => {
        if (event.key === 'Escape') {
            closeMenu();
            menuToggle.focus();
        }
    });

    window.addEventListener('resize', () => {
        if (window.innerWidth > 600) {
            closeMenu();
        }
    });
}

const yearElement = document.getElementById('currentYear');

if (yearElement) {
    yearElement.textContent = new Date().getFullYear();
}
