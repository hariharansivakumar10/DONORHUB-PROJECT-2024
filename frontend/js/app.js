// Main application JavaScript
import { router } from './router.js';
import { authService } from './services/auth.js';
import { donorService } from './services/donors.js';

class App {
    constructor() {
        this.init();
    }

    init() {
        // Initialize router
        window.addEventListener('hashchange', () => this.handleRoute());
        window.addEventListener('load', () => this.handleRoute());

        // Setup navigation
        document.querySelectorAll('.nav-link').forEach(link => {
            link.addEventListener('click', (e) => {
                e.preventDefault();
                const page = link.dataset.page;
                window.location.hash = page;
            });
        });

        // Check authentication status
        this.updateAuthUI();
    }

    async handleRoute() {
        const hash = window.location.hash.slice(1) || 'home';
        const content = await router.loadRoute(hash);
        document.getElementById('app').innerHTML = content;
    }

    updateAuthUI() {
        const token = localStorage.getItem('token');
        const loginLink = document.getElementById('loginLink');
        
        if (token) {
            loginLink.textContent = 'Logout';
            loginLink.addEventListener('click', () => {
                localStorage.removeItem('token');
                window.location.hash = 'home';
                this.updateAuthUI();
            });
        } else {
            loginLink.textContent = 'Login';
        }
    }
}

// Initialize application
new App();