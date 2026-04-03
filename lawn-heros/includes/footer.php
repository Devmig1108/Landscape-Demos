<footer class="footer">
        <div class="container footer-grid">
            <div class="footer-brand">
                <a href="<?php echo $basePath; ?>index.php" class="footer-logo-wrapper">
                    <img src="<?php echo $basePath; ?>images/logo.png" alt="Lawn Heros Logo" class="footer-logo" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                    <div class="logo-text" style="display: none;">
                        <span class="title" style="font-size: 2.2rem; color: #FFFFFF;">LAWN HEROS</span>
                        <span class="subtitle">Father & Sons Company</span>
                    </div>
                </a>
                <p>El Paso's trusted, family-operated lawn care team. Providing dependable maintenance, landscaping, and weed control.</p>
            </div>
            
            <div class="footer-col">
                <h4>CONTACT US</h4>
                <ul>
                    <li><i class="fas fa-envelope"></i> <span>Message us for inquiries</span></li>
                    <li><i class="fas fa-map-marker-alt"></i> <span>El Paso</span></li>
                </ul>
            </div>
            
            <div class="footer-col">
                <h4>OUR SERVICES</h4>
                <ul>
                    <li><a href="<?php echo $basePath; ?>weed-control-el-paso/index.php">Non-Selective Weed Control</a></li>
                    <li><a href="<?php echo $basePath; ?>lawn-care-el-paso/index.php">Lawn Care & Fertilization</a></li>
                    <li><a href="<?php echo $basePath; ?>contact/index.php">Exterior Pest Control</a></li>
                </ul>
            </div>
        </div>
        
        <div class="footer-bottom container">
            <p>&copy; 2026 Lawn Heros Father & Sons Company. All Rights Reserved.</p>
            <p>Engineered by <a href="https://www.ervotechep.com" target="_blank" class="agency-credit">Ervotech</a></p>
        </div>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Theme Toggle
            const themeToggle = document.getElementById('theme-toggle');
            const themeIcon = themeToggle.querySelector('i');

            themeToggle.addEventListener('click', () => {
                const body = document.body;
                if (body.classList.contains('dark-theme')) {
                    body.classList.remove('dark-theme');
                    themeIcon.classList.remove('fa-sun');
                    themeIcon.classList.add('fa-moon');
                    localStorage.setItem('lh-theme', 'light');
                } else {
                    body.classList.add('dark-theme');
                    themeIcon.classList.remove('fa-moon');
                    themeIcon.classList.add('fa-sun');
                    localStorage.setItem('lh-theme', 'dark');
                }
            });

            // Persist Theme
            const savedTheme = localStorage.getItem('lh-theme');
            if (savedTheme === 'dark') {
                document.body.classList.add('dark-theme');
                themeIcon.classList.remove('fa-moon');
                themeIcon.classList.add('fa-sun');
            }

            // Navbar Scroll
            const navbar = document.getElementById('navbar');
            window.addEventListener('scroll', () => {
                if (window.scrollY > 50) navbar.classList.add('scrolled');
                else navbar.classList.remove('scrolled');
            });

            // Scroll Reveal
            function checkReveals() {
                const reveals = document.querySelectorAll('.reveal-up');
                const windowHeight = window.innerHeight;
                for (let i = 0; i < reveals.length; i++) {
                    const elementTop = reveals[i].getBoundingClientRect().top;
                    if (elementTop < windowHeight - 80) reveals[i].classList.add('active-reveal');
                }
            }

            window.addEventListener('scroll', checkReveals);
            checkReveals();
            setTimeout(() => document.querySelectorAll('.reveal-up').forEach(el => el.classList.add('active-reveal')), 500);

            // Mobile Menu logic
            const mobileLinks = document.querySelectorAll('.nav-links > a:not(.dropbtn)');
            const menuCheckbox = document.getElementById('menu-toggle');
            mobileLinks.forEach(link => {
                link.addEventListener('click', () => {
                    if (window.innerWidth <= 900) menuCheckbox.checked = false;
                });
            });
            
            const dropbtn = document.querySelector('.dropbtn');
            dropbtn.addEventListener('click', function(e) {
                if (window.innerWidth <= 900) {
                    e.preventDefault();
                    const content = this.nextElementSibling;
                    if (content.style.display === "block") {
                        content.style.display = "none";
                    } else {
                        content.style.display = "block";
                    }
                }
            });
        });
    </script>
</body>
</html>