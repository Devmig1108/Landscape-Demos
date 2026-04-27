<?php
// index.php
// 1. Define the SEO & Config Variables
$page_title = "SL General Contractor | Residential & Commercial Construction in El Paso";
$page_description = "Building quality you can trust. El Paso's experts in residential and commercial construction, specializing in concrete, rockwalls, artificial turf, pergolas, and remodeling.";
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
            Building Quality<br><i>You Can Trust.</i>
        </h1>
        <p class="hero-desc load-3">
            SL General Contractor delivers premium residential and commercial construction. We specialize in expert concrete pouring, custom rockwalls, artificial turf, beautiful pergolas, and complete property remodeling.
        </p>
        <div class="load-3" style="animation-delay: 0.2s;">
            <a href="<?php echo $base_url; ?>portfolio.php" class="btn-gold hover-target hero-cta"
                style="background: var(--brand-gold); color: #000; border-color: var(--brand-gold);">View
                Services</a>
            <a href="tel:9155550199" class="hover-target phone-num"
                style="font-family: 'Inter'; font-weight: 500; font-size: 0.8rem; letter-spacing: 2px; margin-left: 30px; text-decoration: none; color: var(--text-main); text-transform: uppercase; border-bottom: 1px solid var(--brand-gold); padding-bottom: 5px;">(915)
                555-0199</a>
        </div>

        <div class="trust-badges load-3" style="animation-delay: 0.4s;">
            <div class="trust-badge"><i class="fas fa-building"></i> Commercial & Residential</div>
            <div class="trust-badge"><i class="fas fa-hard-hat"></i> General Contracting</div>
        </div>
    </div>
</section>

<section id="portfolio" class="section-padding bg-sec">
    <div class="section-header reveal-up">
        <span>Our Expertise</span>
        <h2>Comprehensive <i>Construction</i></h2>
    </div>

    <div class="portfolio-grid">

        <div class="port-card hover-target reveal-up">
            <div class="port-number">01</div>
            <div class="port-img-wrap">
                <img src="<?php echo $base_url; ?>images/concrete.jpg" alt="concrete" class="port-img">
            </div>
            <div class="port-info">
                <h3>Custom Concrete & Rockwalls</h3>
                <p>Durable, precision-poured concrete for driveways, patios, and foundations. We also build striking custom rockwalls that enhance security and curb appeal.</p>
                <ul class="service-list">
                    <li>Driveway Replacements</li>
                    <li>Custom Patios</li>
                    <li>Structural Foundations</li>
                    <li>Decorative Rockwalls</li>
                </ul>
            </div>
        </div>

        <div class="port-card hover-target reveal-up" style="transition-delay: 0.2s;">
            <div class="port-number">02</div>
            <div class="port-img-wrap">
                <img src="<?php echo $base_url; ?>images/turf.jpg" alt="Artificial Turf Installation" class="port-img">
            </div>
            <div class="port-info">
                <h3>Artificial Turf & Landscaping</h3>
                <p>Transform your outdoor spaces into lush, zero-maintenance retreats with our premium artificial turf installations, perfect for El Paso's climate.</p>
                <ul class="service-list">
                    <li>Premium Synthetic Grass</li>
                    <li>Zero-Maintenance Lawns</li>
                    <li>Pet & Child Safe Turf</li>
                    <li>Complete Yard Overhauls</li>
                </ul>
            </div>
        </div>

        <div class="port-card hover-target reveal-up">
            <div class="port-number">03</div>
            <div class="port-img-wrap">
                <img src="<?php echo $base_url; ?>images/pergola.jpg" alt="Custom Built Wood Pergola" class="port-img">
            </div>
            <div class="port-info">
                <h3>Custom Pergolas</h3>
                <p>Elevate your outdoor living space. We design and build beautiful, durable wooden pergolas tailored to fit your specific backyard architecture.</p>
                <ul class="service-list">
                    <li>Wood Pergolas</li>
                    <li>Patio Covers</li>
                    <li>Outdoor Living Areas</li>
                    <li>Custom Shade Structures</li>
                </ul>
            </div>
        </div>

        <div class="port-card hover-target reveal-up" style="transition-delay: 0.2s;">
            <div class="port-number">04</div>
            <div class="port-img-wrap">
                <img src="<?php echo $base_url; ?>images/backyard.jpg" alt="Interior and Exterior Remodeling" class="port-img">
            </div>
            <div class="port-info">
                <h3>Property Remodeling</h3>
                <p>Complete residential and commercial remodeling services. From updating interiors to overhauling exteriors, we manage your project from start to finish.</p>
                <ul class="service-list">
                    <li>Residential Remodels</li>
                    <li>Commercial Build-outs</li>
                    <li>Exterior Upgrades</li>
                    <li>General Contracting</li>
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
                The SL Standard
            </span>
            <h2>Building Quality <br><i>You Can Trust.</i></h2>
            <p>At SL General Contractor, we take pride in delivering professional craftsmanship to every single
                project. Whether it's a full commercial build-out, a brand-new concrete driveway, or custom artificial turf,
                our team executes with absolute precision and care.</p>
            <p>Serving El Paso and the surrounding areas, we guarantee fast, reliable service and durable,
                long-lasting results. We partner with homeowners and business owners alike to bring your architectural vision to life.</p>

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
            <img src="<?php echo $base_url; ?>images/commercial.jpg" alt="Commercial Construction Project" class="img-large hover-target">
            <img src="<?php echo $base_url; ?>images/wall.jpg" alt="wall design" class="img-small hover-target">
        </div>
    </div>
</section>

<?php
// 3. Include the Footer
include 'includes/footer.php';
?>