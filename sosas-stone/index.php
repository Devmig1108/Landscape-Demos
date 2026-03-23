<?php
// index.php
// 1. Define the SEO & Config Variables
$page_title = "Sosa's Veneer Stone | Luxury Stone & Concrete in El Paso";
$page_description = "El Paso's premier masonry and hardscape experts. Specializing in interior and exterior stone installation, custom concrete driveways, wrought iron gates, and pergolas.";
$active_page = 'home';
$page_css = 'css/home.css'; // This triggers the header to load home.css
$base_url = '';

// 2. Include the Header
include 'includes/header.php';
?>

<section class="hero">
    <div class="hero-bg" style="background: var(--hero-overlay), url('<?php echo $base_url; ?>images/hero.jpg') center/cover;"></div>
    <div class="hero-content">
        <span class="hero-label load-1">El Paso, Texas</span>
        <h1 class="hero-title load-2">
            Redefining Your<br><i>Exteriors.</i>
        </h1>
        <p class="hero-desc load-3">
            Sosa's Veneer Stone brings masterful craftsmanship to your home. We specialize in elegant interior and
            exterior stone installations, custom wrought iron gates, premium concrete driveways, and bespoke
            pergolas.
        </p>
        <div class="load-3" style="animation-delay: 0.2s;">
            <a href="<?php echo $base_url; ?>portfolio.php" class="btn-gold hover-target hero-cta"
                style="background: var(--brand-gold); color: #000; border-color: var(--brand-gold);">View
                Services</a>
            <a href="tel:9152828547" class="hover-target phone-num"
                style="font-family: 'Inter'; font-weight: 500; font-size: 0.8rem; letter-spacing: 2px; margin-left: 30px; text-decoration: none; color: var(--text-main); text-transform: uppercase; border-bottom: 1px solid var(--brand-gold); padding-bottom: 5px;">(915)
                282-8547</a>
        </div>

        <div class="trust-badges load-3" style="animation-delay: 0.4s;">
            <div class="trust-badge"><i class="fas fa-file-invoice-dollar"></i> Free Estimates</div>
            <div class="trust-badge"><i class="fas fa-hammer"></i> Fast & Reliable Service</div>
        </div>
    </div>
</section>

<section id="portfolio" class="section-padding bg-sec">
    <div class="section-header reveal-up">
        <span>Our Expertise</span>
        <h2>Architectural <i>Hardscapes</i></h2>
    </div>

    <div class="portfolio-grid">

        <div class="port-card hover-target reveal-up">
            <div class="port-number">01</div>
            <div class="port-img-wrap">
                <img src="<?php echo $base_url; ?>images/front-yard.jpg" alt="White Stone Exterior Installation" class="port-img">
            </div>
            <div class="port-info">
                <h3>Elegant Stone Finishes</h3>
                <p>Transform your interior or exterior with high-quality veneer stone. From striking home facades to
                    custom fireplaces, we deliver flawless, elegant masonry.</p>
                <ul class="service-list">
                    <li>Exterior Stone</li>
                    <li>Interior Veneer</li>
                    <li>Custom Fireplaces</li>
                    <li>Accent Walls</li>
                </ul>
            </div>
        </div>

        <div class="port-card hover-target reveal-up" style="transition-delay: 0.2s;">
            <div class="port-number">02</div>
            <div class="port-img-wrap">
                <img src="<?php echo $base_url; ?>images/concrete-driveway.jpg" alt="Concrete Driveway Upgrade" class="port-img">
            </div>
            <div class="port-info">
                <h3>Custom Concrete Pouring</h3>
                <p>Smooth, high-quality concrete for a clean, durable, and modern look. We handle precise leveling
                    and finishing for long-lasting strength and curb appeal.</p>
                <ul class="service-list">
                    <li>Driveway Replacement</li>
                    <li>Custom Patios</li>
                    <li>Smooth Finish</li>
                    <li>Stamped Designs</li>
                </ul>
            </div>
        </div>

        <div class="port-card hover-target reveal-up">
            <div class="port-number">03</div>
            <div class="port-img-wrap">
                <img src="<?php echo $base_url; ?>images/gates.jpg" alt="Wrought Iron Gates" class="port-img">
            </div>
            <div class="port-info">
                <h3>Iron Gates</h3>
                <p>Enhance your property's security and curb appeal. We design and install custom wrought iron gates
                    built to last.</p>
                <ul class="service-list">
                    <li>Wrought Iron Gates</li>
                    <li>Security Fencing</li>
                    <li>Custom Entryways</li>
                </ul>
            </div>
        </div>

        <div class="port-card hover-target reveal-up" style="transition-delay: 0.2s;">
            <div class="port-number">04</div>
            <div class="port-img-wrap">
                <img src="<?php echo $base_url; ?>images/pergolas.jpg" alt="Custom Wood Pergolas" class="port-img">
            </div>
            <div class="port-info">
                <h3>Custom Pergolas</h3>
                <p>Elevate your outdoor living space. We build beautiful, durable wooden pergolas tailored to your
                    backyard design.</p>
                <ul class="service-list">
                    <li>Wood Pergolas</li>
                    <li>Outdoor Living</li>
                    <li>Patio Covers</li>
                </ul>
            </div>
        </div>

    </div>
</section>

<section id="studio" class="section-padding">
    <div class="about-split">
        <div class="about-text reveal-up">
            <span
                style="color: var(--brand-gold); font-size: 0.7rem; letter-spacing: 5px; text-transform: uppercase; font-weight: 600; display: block; margin-bottom: 20px;">
                The Sosa's Standard
            </span>
            <h2>Professional <br><i>Craftsmanship.</i></h2>
            <p>At Sosa's Veneer Stone, we take pride in delivering professional craftsmanship to every single
                project. Whether it's a full driveway replacement, a brand-new stone facade, or a custom pergola,
                our team executes with absolute precision and care.</p>
            <p>Serving El Paso and the surrounding areas, we guarantee fast, reliable service and durable,
                long-lasting results. We proudly offer <strong>Free Estimates</strong> for all our residential and
                commercial clients to help bring your vision to life.</p>

            <div class="about-stats">
                <div>
                    <div>100%</div>
                    <span>Custom Engineered</span>
                </div>
                <div>
                    <div>0$</div>
                    <span>Free Estimates</span>
                </div>
            </div>
        </div>

        <div class="about-image-collage reveal-up" style="transition-delay: 0.2s;">
            <img src="<?php echo $base_url; ?>images/stone-facade.jpg" alt="Luxury Stone Facade" class="img-large hover-target">
            <img src="<?php echo $base_url; ?>images/concrete.jpg" alt="Concrete Pouring" class="img-small hover-target">
        </div>
    </div>
</section>

<?php
// 3. Include the Footer
include 'includes/footer.php';
?>