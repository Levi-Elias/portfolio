<!-- ===== HEADER / NAV ===== -->
<header class="header" id="header">
    <div class="header-inner">
        <a class="logo" id="logo" href="index.php"><img src="assets/fotos/bglogo.png" alt="LS Logo" /></a>
        <nav class="nav-desktop" id="nav-desktop">
            <button onclick="smoothScroll('about')">OVER MIJ</button>
            <button onclick="smoothScroll('projects')">PROJECTEN</button>
            <button onclick="smoothScroll('skills')">VAARDIGHEDEN</button>
            <button onclick="smoothScroll('contact')">CONTACT</button>
        </nav>
        <button class="menu-toggle" id="menu-toggle" aria-label="Toggle menu">
            <!-- Hamburger icon -->
            <svg class="icon-menu" id="icon-menu" xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round">
                <line x1="4" x2="20" y1="12" y2="12"></line>
                <line x1="4" x2="20" y1="6" y2="6"></line>
                <line x1="4" x2="20" y1="18" y2="18"></line>
            </svg>
            <!-- Close icon -->
            <svg class="icon-close hidden" id="icon-close" xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round">
                <path d="M18 6 6 18"></path>
                <path d="m6 6 12 12"></path>
            </svg>
        </button>
    </div>
    <!-- Mobile menu -->
    <div class="nav-mobile hidden" id="nav-mobile">
        <button onclick="smoothScroll('about')">OVER MIJ</button>
        <button onclick="smoothScroll('projects')">PROJECTEN</button>
        <button onclick="smoothScroll('skills')">VAARDIGHEDEN</button>
        <button onclick="smoothScroll('contact')">CONTACT</button>
    </div>
</header>