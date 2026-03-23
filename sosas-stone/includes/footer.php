<?php
// includes/footer.php
$base_url = isset($base_url) ? $base_url : '';
?>
<footer class="footer-sec">
    <div class="footer-content">
        <div class="footer-brand reveal-up">
            <img src="<?php echo $base_url; ?>images/logo.png" alt="Sosa's Veneer Stone Logo" class="logo-img dynamic-logo"
                onerror="this.style.display='none'">
            <p>Elevating the standard of custom masonry, concrete, and outdoor living structures in El Paso,
                Texas.</p>
        </div>

        <div class="footer-column reveal-up" style="transition-delay: 0.1s;">
            <h4>Expertise</h4>
            <ul>
                <li><a href="<?php echo $base_url; ?>expertise.php" class="hover-target">Exterior Stone Veneer</a></li>
                <li><a href="<?php echo $base_url; ?>expertise.php" class="hover-target">Premium Concrete Driveways</a></li>
                <li><a href="<?php echo $base_url; ?>expertise.php" class="hover-target">Wrought Iron Gates</a></li>
                <li><a href="<?php echo $base_url; ?>expertise.php" class="hover-target">Custom Pergolas</a></li>
            </ul>
        </div>

        <div class="footer-column reveal-up" style="transition-delay: 0.2s;">
            <h4>Inquiries & Quotes</h4>
            <ul>
                <li><a href="tel:9152828547" class="contact-gold hover-target">(915) 282-8547</a></li>
                <li><span
                        style="color: var(--brand-gold); font-size: 0.8rem; font-weight: bold; letter-spacing: 1px;">FREE
                        ESTIMATES
                        AVAILABLE</span></li>
                <li style="margin-top: 20px; color: var(--text-muted);">El Paso, TX & Surrounding Areas<br>Call or
                    Text for Free Estimate</li>
            </ul>
        </div>
    </div>

    <div class="footer-bottom reveal-up" style="transition-delay: 0.3s;">
        <p>&copy; <?php echo date("Y"); ?> Sosa's Veneer Stone.</p>
        <div class="social-lux">
            <a href="https://www.facebook.com/p/Sosas-Veneer-Stone-100063912197706/" target="_blank"
                class="hover-target"><i class="fab fa-facebook-f"></i></a>
        </div>
    </div>
</footer>

<script>
    document.addEventListener('DOMContentLoaded', function() {

        /* --- 1. Theme Toggle Logic --- */
        const themeToggle = document.getElementById('theme-toggle');
        if (themeToggle) {
            const themeIcon = themeToggle.querySelector('i');

            themeToggle.addEventListener('click', () => {
                const body = document.body;
                if (body.classList.contains('light-theme')) {
                    body.classList.remove('light-theme');
                    themeIcon.classList.remove('fa-moon');
                    themeIcon.classList.add('fa-sun');
                } else {
                    body.classList.add('light-theme');
                    themeIcon.classList.remove('fa-sun');
                    themeIcon.classList.add('fa-moon');
                }
            });
        }

        /* --- 2. Luxury Custom Cursor Logic --- */
        const cursorDot = document.querySelector('.cursor-dot');
        const cursorOutline = document.querySelector('.cursor-outline');
        const hoverTargets = document.querySelectorAll('.hover-target, a, button');

        if (window.matchMedia("(pointer: fine)").matches && cursorDot && cursorOutline) {
            window.addEventListener('mousemove', (e) => {
                const posX = e.clientX;
                const posY = e.clientY;

                cursorDot.style.left = `${posX}px`;
                cursorDot.style.top = `${posY}px`;

                setTimeout(() => {
                    cursorOutline.style.left = `${posX}px`;
                    cursorOutline.style.top = `${posY}px`;
                }, 60);
            });

            hoverTargets.forEach(target => {
                target.addEventListener('mouseenter', () => {
                    cursorOutline.style.transform = 'translate(-50%, -50%) scale(1.8)';
                    cursorOutline.style.backgroundColor = 'rgba(200, 159, 60, 0.1)';
                });
                target.addEventListener('mouseleave', () => {
                    cursorOutline.style.transform = 'translate(-50%, -50%) scale(1)';
                    cursorOutline.style.backgroundColor = 'transparent';
                });
            });
        }

        /* --- 3. Sticky Navbar Glass Effect --- */
        const navbar = document.getElementById('navbar');
        if (navbar) {
            window.addEventListener('scroll', () => {
                if (window.scrollY > 50) {
                    navbar.classList.add('scrolled');
                } else {
                    navbar.classList.remove('scrolled');
                }
            });
        }

        /* --- 4. Cinematic Scroll Reveals --- */
        function checkReveals() {
            var reveals = document.querySelectorAll('.reveal-up');
            var windowHeight = window.innerHeight;

            for (var i = 0; i < reveals.length; i++) {
                var elementTop = reveals[i].getBoundingClientRect().top;
                if (elementTop < windowHeight - 80) {
                    reveals[i].classList.add('active-reveal');
                }
            }
        }

        window.addEventListener('scroll', checkReveals);
        checkReveals();

        // FAILSAFE: Reveal everything after 1.5 seconds if script gets blocked
        setTimeout(function() {
            document.querySelectorAll('.reveal-up').forEach(function(el) {
                el.classList.add('active-reveal');
            });
        }, 1500);

    });
</script>
</body>

</html>