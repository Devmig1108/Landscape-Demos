<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>C&A Dumpsters | Junk Removal & Dumpster Rental in El Paso</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Montserrat:wght@800;900&display=swap" rel="stylesheet">
    <style>
        /* =========================================
           0. BRAND VARIABLES (C&A Green & Navy)
           ========================================= */
        :root {
            --brand-green: #16a34a; /* Vibrant, action-oriented green */
            --brand-green-hover: #15803d;
            --brand-navy: #1e3a8a; /* Deep, trustworthy navy */
            --brand-navy-dark: #1e293b;
            --text-main: #334155;
            --surface-light: #f8fafc;
            --white: #ffffff;
            --border-color: #e2e8f0;
            --transition-fast: all 0.2s ease-in-out;
            --shadow-card: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
            --shadow-hover: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
            /* Rugged diagonal stripe pattern for backgrounds */
            --stripe-pattern: repeating-linear-gradient(45deg, transparent, transparent 10px, rgba(0,0,0,0.02) 10px, rgba(0,0,0,0.02) 20px);
        }

        /* =========================================
           1. RESET & BASE
           ========================================= */
        * { margin: 0; padding: 0; box-sizing: border-box; }
        html { scroll-behavior: smooth; }
        body { font-family: 'Inter', sans-serif; background: var(--surface-light); color: var(--text-main); line-height: 1.6; overflow-x: hidden; }
        h1, h2, h3, h4 { font-family: 'Montserrat', sans-serif; color: var(--brand-navy); line-height: 1.1; text-transform: uppercase; }
        .container { max-width: 1300px; margin: 0 auto; padding: 0 5%; }

        /* Animation Classes */
        .reveal-up { opacity: 0; transform: translateY(20px); transition: all 0.5s ease-out; }
        .active-reveal { opacity: 1 !important; transform: translateY(0) !important; }

        /* =========================================
           2. HEADER & UTILITY BAR
           ========================================= */
        .utility-bar { background: var(--brand-navy); color: var(--white); padding: 10px 0; font-size: 0.85rem; font-weight: 600; letter-spacing: 1px; text-transform: uppercase; }
        .utility-container { display: flex; justify-content: space-between; align-items: center; }
        .utility-highlight { color: var(--brand-green); font-weight: 800; }

        .main-header { background: var(--white); border-bottom: 3px solid var(--brand-green); position: sticky; top: 0; z-index: 1000; box-shadow: var(--shadow-card); }
        .nav-wrapper { display: flex; justify-content: space-between; align-items: center; height: 90px; }
        
        /* Logo Placeholder styling */
        .brand-logo { display: flex; align-items: center; text-decoration: none; gap: 10px; }
        .logo-text { font-family: 'Montserrat', sans-serif; font-size: 2rem; font-weight: 900; color: var(--brand-green); line-height: 1; letter-spacing: -1px; display: flex; flex-direction: column;}
        .logo-text span { color: var(--brand-navy); font-size: 1.2rem; letter-spacing: 2px;}

        .nav-actions { display: flex; gap: 30px; align-items: center; }
        .nav-links { display: flex; gap: 25px; align-items: center; }
        .nav-links a { text-decoration: none; color: var(--brand-navy); font-weight: 700; font-size: 0.9rem; text-transform: uppercase; letter-spacing: 1px; transition: var(--transition-fast); }
        .nav-links a:hover { color: var(--brand-green); }
        
        .btn-call { background: var(--brand-green); color: var(--white); text-decoration: none; padding: 14px 28px; border-radius: 4px; font-family: 'Montserrat', sans-serif; font-weight: 900; font-size: 1rem; text-transform: uppercase; letter-spacing: 1px; display: flex; align-items: center; gap: 10px; transition: var(--transition-fast); box-shadow: 0 4px 14px rgba(22, 163, 74, 0.4); }
        .btn-call:hover { background: var(--brand-green-hover); transform: translateY(-2px); }

        /* =========================================
           3. HERO SECTION (High Impact)
           ========================================= */
        .hero { position: relative; padding: 100px 0 140px; background: linear-gradient(to right, rgba(30, 58, 138, 0.95) 0%, rgba(30, 58, 138, 0.7) 100%), url('https://images.unsplash.com/photo-1532996122724-e3c354a0b15b?auto=format&fit=crop&w=1920&q=80') center/cover no-repeat; border-bottom: 6px solid var(--brand-green); }
        .hero-grid { display: grid; grid-template-columns: 1fr; text-align: center; gap: 40px; align-items: center; max-width: 900px; margin: 0 auto; }
        
        .hero h1 { font-size: clamp(3rem, 6vw, 5rem); font-weight: 900; letter-spacing: -2px; margin-bottom: 20px; line-height: 1; color: var(--white); }
        .hero h1 span { color: var(--brand-green); }
        .hero p { font-size: 1.3rem; font-weight: 500; color: rgba(255, 255, 255, 0.9); margin-bottom: 40px; }
        
        .hero-cta { display: flex; gap: 20px; justify-content: center; flex-wrap: wrap; }
        .btn-primary { background: var(--brand-green); color: var(--white); text-decoration: none; padding: 18px 40px; border-radius: 4px; font-family: 'Montserrat', sans-serif; font-weight: 900; font-size: 1.1rem; text-transform: uppercase; letter-spacing: 1px; transition: var(--transition-fast); }
        .btn-primary:hover { background: var(--brand-green-hover); }
        .btn-secondary { background: transparent; color: var(--white); text-decoration: none; padding: 16px 40px; border: 2px solid var(--white); border-radius: 4px; font-family: 'Montserrat', sans-serif; font-weight: 800; font-size: 1.1rem; text-transform: uppercase; letter-spacing: 1px; transition: var(--transition-fast); }
        .btn-secondary:hover { background: var(--white); color: var(--brand-navy); }

        /* =========================================
           4. AUTHORITY / SERVICE AREA BAR
           ========================================= */
        .authority-bar { background: var(--white); padding: 40px 0; border-bottom: 1px solid var(--border-color); margin-top: -50px; position: relative; z-index: 10; box-shadow: var(--shadow-card); max-width: 1200px; margin-left: auto; margin-right: auto; border-radius: 8px; }
        .authority-grid { display: flex; justify-content: space-around; align-items: center; flex-wrap: wrap; gap: 20px; text-align: center; }
        .auth-item h4 { color: var(--brand-navy); font-size: 1.2rem; margin-bottom: 5px; }
        .auth-item p { font-weight: 600; text-transform: uppercase; font-size: 0.85rem; color: var(--text-main); }
        .auth-divider { width: 2px; height: 40px; background: var(--border-color); }

        /* =========================================
           5. COMPREHENSIVE SERVICES GRID
           ========================================= */
        .services-section { padding: 100px 0; background: var(--surface-light); background-image: var(--stripe-pattern); }
        .section-header { text-align: center; margin-bottom: 60px; }
        .section-header h2 { font-size: 3rem; letter-spacing: -2px; margin-bottom: 15px; }
        .section-header p { font-size: 1.1rem; max-width: 700px; margin: 0 auto; font-weight: 500; }

        .service-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px; }
        .service-card { background: var(--white); padding: 40px 30px; border-radius: 6px; border-top: 4px solid var(--brand-navy); transition: var(--transition-fast); box-shadow: var(--shadow-card); }
        .service-card:hover { border-top-color: var(--brand-green); box-shadow: var(--shadow-hover); transform: translateY(-5px); }
        
        .service-card h3 { font-size: 1.5rem; margin-bottom: 20px; letter-spacing: -0.5px; }
        .service-list { list-style: none; }
        .service-list li { margin-bottom: 12px; font-weight: 600; font-size: 0.95rem; display: flex; align-items: center; gap: 10px; color: var(--text-main); }
        .service-list li::before { content: "✔"; color: var(--brand-green); font-weight: bold; }

        /* =========================================
           6. PROJECT GALLERY (Photo Heavy)
           ========================================= */
        .gallery-section { padding: 100px 0; background: var(--brand-navy); color: var(--white); }
        .gallery-section .section-header h2 { color: var(--white); }
        .gallery-section .section-header p { color: rgba(255,255,255,0.8); }
        
        .gallery-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 20px; }
        .gallery-item { aspect-ratio: 1; background: var(--brand-navy-dark); border-radius: 8px; overflow: hidden; position: relative; border: 3px solid rgba(255,255,255,0.1); transition: var(--transition-fast); }
        .gallery-item:hover { border-color: var(--brand-green); transform: scale(1.02); }
        .gallery-item img { width: 100%; height: 100%; object-fit: cover; opacity: 0.8; transition: var(--transition-fast); }
        .gallery-item:hover img { opacity: 1; }
        /* Temporary Placeholder Text */
        .gallery-placeholder { position: absolute; inset: 0; display: flex; align-items: center; justify-content: center; font-family: 'Montserrat', sans-serif; font-weight: 800; color: rgba(255,255,255,0.5); text-align: center; padding: 20px; }

        /* =========================================
           7. CALL TO ACTION STRIP
           ========================================= */
        .cta-strip { background: var(--brand-green); padding: 80px 0; text-align: center; color: var(--white); }
        .cta-strip h2 { color: var(--white); font-size: 3.5rem; letter-spacing: -1px; margin-bottom: 15px; }
        .cta-strip p { font-size: 1.2rem; font-weight: 600; max-width: 800px; margin: 0 auto 30px; }
        .btn-inverse { background: var(--brand-navy); color: var(--white); text-decoration: none; padding: 18px 40px; font-family: 'Montserrat', sans-serif; font-weight: 900; font-size: 1.1rem; text-transform: uppercase; letter-spacing: 1px; border-radius: 4px; transition: var(--transition-fast); display: inline-block; box-shadow: var(--shadow-card); }
        .btn-inverse:hover { background: var(--brand-navy-dark); transform: translateY(-2px); }

        /* =========================================
           8. FOOTER
           ========================================= */
        .main-footer { background: var(--brand-navy-dark); color: var(--white); padding: 80px 0 40px; }
        .footer-grid { display: grid; grid-template-columns: 2fr 1fr 1fr; gap: 60px; margin-bottom: 60px; }
        .footer-logo { font-family: 'Montserrat', sans-serif; font-size: 2.5rem; font-weight: 900; color: var(--brand-green); line-height: 1; letter-spacing: -1px; margin-bottom: 20px; display: block; }
        .footer-logo span { color: var(--white); }
        .footer-about p { color: rgba(255,255,255,0.7); font-size: 0.95rem; max-width: 350px; font-weight: 500; }
        
        .footer-links h4, .footer-contact h4 { font-size: 1.1rem; color: var(--brand-green); margin-bottom: 25px; letter-spacing: 1px; }
        .footer-links ul { list-style: none; }
        .footer-links li { margin-bottom: 12px; }
        .footer-links a { color: rgba(255,255,255,0.8); text-decoration: none; font-weight: 600; font-size: 0.9rem; transition: var(--transition-fast); }
        .footer-links a:hover { color: var(--brand-green); }
        .footer-contact p { color: rgba(255,255,255,0.8); font-size: 0.95rem; font-weight: 600; margin-bottom: 10px; display: flex; align-items: center; gap: 10px; }
        
        .footer-bottom { text-align: center; padding-top: 30px; border-top: 1px solid rgba(255, 255, 255, 0.1); color: rgba(255, 255, 255, 0.5); font-size: 0.85rem; font-weight: 500; }

        /* =========================================
           9. RESPONSIVE
           ========================================= */
        @media (max-width: 900px) {
            .utility-bar { display: none; }
            .nav-links { display: none; }
            .hero { padding: 80px 0 100px; }
            .hero h1 { font-size: 3.5rem; }
            .authority-bar { margin-top: 0; border-radius: 0; max-width: 100%; }
            .auth-divider { display: none; }
            .footer-grid { grid-template-columns: 1fr; gap: 40px; text-align: center; }
            .footer-about p { margin: 0 auto; }
            .footer-contact p { justify-content: center; }
        }
    </style>
</head>

<body>

    <div class="utility-bar">
        <div class="container utility-container">
            <div>📍 PROUDLY SERVING: <span class="utility-highlight">EL PASO, TX & SANTA TERESA, NM</span></div>
            <div>✉️ ca.dumpsters.ep@gmail.com</div>
        </div>
    </div>

    <header class="main-header">
        <div class="container nav-wrapper">
            <a href="/" class="brand-logo">
                <div class="logo-text">C&A <span>DUMPSTERS</span></div>
            </a>

            <div class="nav-actions">
                <nav class="nav-links">
                    <a href="#services">Services</a>
                    <a href="#gallery">Recent Projects</a>
                    <a href="#contact">Contact</a>
                </nav>
                <a href="tel:9153834682" class="btn-call">📞 (915) 383-4682</a>
            </div>
        </div>
    </header>

    <section class="hero">
        <div class="container hero-grid reveal-up">
            <div>
                <h1>Ready to <br><span>Trash It?</span></h1>
                <p>Professional commercial and residential junk removal focused on putting the customer first. Fast, reliable, and hassle-free.</p>
                <div class="hero-cta">
                    <a href="tel:9153834682" class="btn-primary">Call C&A Now</a>
                    <a href="#services" class="btn-secondary">View Services</a>
                </div>
            </div>
        </div>
    </section>

    <div class="authority-bar">
        <div class="container authority-grid reveal-up">
            <div class="auth-item">
                <h4>Locally Owned</h4>
                <p>El Paso & Santa Teresa</p>
            </div>
            <div class="auth-divider"></div>
            <div class="auth-item">
                <h4>Commercial</h4>
                <p>& Residential Services</p>
            </div>
            <div class="auth-divider"></div>
            <div class="auth-item">
                <h4>Professional</h4>
                <p>Customer-First Focus</p>
            </div>
            <div class="auth-divider"></div>
            <div class="auth-item">
                <h4>Full Service</h4>
                <p>We Haul It All</p>
            </div>
        </div>
    </div>

    <section id="services" class="services-section">
        <div class="container">
            <div class="section-header reveal-up">
                <h2>Our Services</h2>
                <p>We handle heavy-duty hauling and junk removal for homes and businesses. If you need it gone, we've got the equipment to handle it.</p>
            </div>

            <div class="service-grid">
                <div class="service-card reveal-up">
                    <h3>Heavy Appliance & Equipment</h3>
                    <ul class="service-list">
                        <li>Appliance Removal</li>
                        <li>Refrigerator Disposal</li>
                        <li>Stove Removal</li>
                        <li>Boilers & Furnaces</li>
                        <li>Hot Water Heaters</li>
                        <li>Exercise Equipment</li>
                    </ul>
                </div>

                <div class="service-card reveal-up" style="transition-delay: 0.1s;">
                    <h3>Home & Furniture</h3>
                    <ul class="service-list">
                        <li>Furniture Removal</li>
                        <li>Mattress Disposal</li>
                        <li>Hot Tub Disposal</li>
                        <li>General Trash Removal</li>
                        <li>Garage Cleanouts</li>
                        <li>Property Junk Hauling</li>
                    </ul>
                </div>

                <div class="service-card reveal-up" style="transition-delay: 0.2s;">
                    <h3>Construction & Yard</h3>
                    <ul class="service-list">
                        <li>Construction Waste Removal</li>
                        <li>Remodel Debris</li>
                        <li>Yard Waste Removal</li>
                        <li>Brush & Branch Clearing</li>
                        <li>Commercial Garbage Removal</li>
                        <li>Dumpster Rentals</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section id="gallery" class="gallery-section">
        <div class="container">
            <div class="section-header reveal-up">
                <h2>Recent Hauls</h2>
                <p>Take a look at our fleet and some of the massive cleanouts we've recently completed in the El Paso area.</p>
            </div>

            <div class="gallery-grid">
                <div class="gallery-item reveal-up">
                    <div class="gallery-placeholder">Client Image 1<br>(e.g., Dumpster in Driveway)</div>
                </div>
                <div class="gallery-item reveal-up" style="transition-delay: 0.1s;">
                    <div class="gallery-placeholder">Client Image 2<br>(e.g., Yard Waste Haul)</div>
                </div>
                <div class="gallery-item reveal-up" style="transition-delay: 0.2s;">
                    <div class="gallery-placeholder">Client Image 3<br>(e.g., Construction Debris)</div>
                </div>
                <div class="gallery-item reveal-up" style="transition-delay: 0.3s;">
                    <div class="gallery-placeholder">Client Image 4<br>(e.g., Furniture Removal)</div>
                </div>
            </div>
        </div>
    </section>

    <section class="cta-strip">
        <div class="container reveal-up">
            <h2>Let's Get Your Property Cleaned Up.</h2>
            <p>Don't let junk pile up. Contact C&A Dumpsters today for professional, customer-focused hauling in El Paso and Santa Teresa.</p>
            <a href="tel:9153834682" class="btn-inverse">Call (915) 383-4682</a>
        </div>
    </section>

    <footer id="contact" class="main-footer">
        <div class="container">
            <div class="footer-grid reveal-up">
                <div class="footer-about">
                    <span class="footer-logo">C&A <span>DUMPSTERS</span></span>
                    <p>We offer professional junk removal services to homes and businesses that focus on putting the customer first!</p>
                </div>

                <div class="footer-links">
                    <h4>Service Areas</h4>
                    <ul>
                        <li>El Paso, TX</li>
                        <li>Santa Teresa, NM</li>
                        <li>Surrounding Borderland Area</li>
                    </ul>
                </div>

                <div class="footer-contact">
                    <h4>Contact Us</h4>
                    <p>📞 (915) 383-4682</p>
                    <p>✉️ ca.dumpsters.ep@gmail.com</p>
                    <p>📱 Follow us on Facebook & Instagram</p>
                </div>
            </div>

            <div class="footer-bottom reveal-up">
                <p>&copy; 2026 C&A Dumpsters. All Rights Reserved. Commercial & Residential Junk Removal.</p>
            </div>
        </div>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            function checkReveals() {
                const reveals = document.querySelectorAll('.reveal-up');
                const windowHeight = window.innerHeight;
                for (let i = 0; i < reveals.length; i++) {
                    const elementTop = reveals[i].getBoundingClientRect().top;
                    if (elementTop < windowHeight - 50) reveals[i].classList.add('active-reveal');
                }
            }
            window.addEventListener('scroll', checkReveals);
            checkReveals(); 
        });
    </script>
</body>
</html>