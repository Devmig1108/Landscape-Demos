<!-- FOOTER / CTA -->
    <footer id="contact" class="footer">
        <div class="container">
            <div class="footer-grid">
                
                <!-- Brand -->
                <div class="footer-brand reveal-up">
                    <img src="images/logo.png" alt="G Force Academy Logo" onerror="this.style.display='none';">
                    <p>
                        G Force Academy provides elite aviation training, empowering the next generation of professional and private pilots in West Texas.
                    </p>
                </div>

                <!-- Links -->
                <div class="footer-col reveal-up" style="transition-delay: 100ms;">
                    <h4>Programs</h4>
                    <ul class="footer-links">
                        <li><a href="#">Private Pilot</a></li>
                        <li><a href="#">Instrument Rating</a></li>
                        <li><a href="#">Commercial Pilot</a></li>
                        <li><a href="#">CFI / CFII</a></li>
                    </ul>
                </div>

                <!-- Contact -->
                <div class="footer-col reveal-up" style="transition-delay: 200ms;">
                    <h4>Contact Us</h4>
                    <ul class="footer-contact">
                        <li>
                            <i class="fas fa-map-marker-alt"></i>
                            <span>El Paso, TX<br>United States</span>
                        </li>
                        <li>
                            <i class="fas fa-envelope"></i>
                            <a href="#">info@gforceacademy.com</a>
                        </li>
                    </ul>
                </div>

                <!-- CTA -->
                <div class="footer-col footer-cta reveal-up" style="transition-delay: 300ms;">
                    <h4>Ready For Takeoff?</h4>
                    <p>Contact us today to schedule your discovery flight or request curriculum details.</p>
                    <a href="#" class="btn-gold-sm">Contact Academy</a>
                </div>

            </div>

            <div class="footer-bottom">
                <p>&copy; <?php echo date("Y"); ?> G Force Academy. All rights reserved.</p>
                <div class="footer-bottom-links">
                    <a href="#">Privacy Policy</a>
                    <a href="#">Terms of Service</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- INTERACTIVE SCRIPTS -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            
            // 1. Sticky Solid Navbar
            const navbar = document.getElementById('navbar');
            window.addEventListener('scroll', () => {
                if (window.scrollY > 50) {
                    navbar.classList.add('scrolled');
                } else {
                    navbar.classList.remove('scrolled');
                }
            });

            // 2. Intersection Observer for Scroll Reveals
            const revealElements = document.querySelectorAll('.reveal-up');
            const revealOptions = {
                threshold: 0.15,
                rootMargin: "0px 0px -50px 0px"
            };

            const revealOnScroll = new IntersectionObserver(function(entries, observer) {
                entries.forEach(entry => {
                    if (!entry.isIntersecting) return;
                    entry.target.classList.add('active-reveal');
                    observer.unobserve(entry.target);
                });
            }, revealOptions);

            revealElements.forEach(el => revealOnScroll.observe(el));

            // Force reveal elements currently in viewport on load
            setTimeout(() => {
                revealElements.forEach(el => {
                    const rect = el.getBoundingClientRect();
                    if (rect.top < window.innerHeight) {
                        el.classList.add('active-reveal');
                    }
                });
            }, 300);

            // 3. Mobile Menu Toggle
            const mobileBtn = document.getElementById('mobile-menu-btn');
            mobileBtn.addEventListener('click', () => {
                alert("Mobile menu opened! (Add custom overlay logic here)");
            });
        });
    </script>
</body>
</html>