<?php
// 1. Define the SEO variables
$page_title = "About Us | Sosa's Veneer Stone | El Paso";
$page_description = "Learn about Sosa's Veneer Stone, El Paso's premier masonry, concrete, and hardscape experts dedicated to masterful craftsmanship.";

// 2. Define the Base URL because this file is inside a subfolder (/about-us/)
$base_url = '../';

// 3. Define the active page and specific CSS
$active_page = 'about';
$page_css = 'css/about.css';

// 4. Include the Header
include '../includes/header.php';
?>

<section class="internal-hero">
    <div class="hero-bg" style="background: var(--hero-overlay), url('<?php echo $base_url; ?>images/concrete.jpg') center/cover;"></div>
    <div class="hero-content">
        <span class="hero-label load-1">Our Heritage</span>
        <h1 class="hero-title load-2">
            The Sosa's <i>Standard.</i>
        </h1>
    </div>
</section>

<section class="section-padding">
    <div class="about-split">
        <div class="about-text reveal-up">
            <h2>Crafting Legacies <br>in <i>Stone.</i></h2>
            <p>Founded on the principles of absolute precision, unyielding durability, and timeless design, Sosa's Veneer Stone has spent years transforming properties across the greater El Paso area.</p>
            <p>We are not just contractors; we are craftsmen. From the foundational strength of a freshly poured concrete driveway to the intricate detailing of an interior stone fireplace, our team brings a level of mastery that elevates the standard of outdoor living.</p>
            <p>As a locally owned and operated business, we understand the specific architectural styles and climate demands of West Texas. We source only premium materials, ensuring that every project we touch—be it stone, concrete, wood, or iron—is built to last a lifetime.</p>
        </div>

        <div class="about-image-collage reveal-up" style="transition-delay: 0.2s;">
            <img src="<?php echo $base_url; ?>images/stone-facade.jpg" alt="Master Masonry Work" class="img-large hover-target">
            <img src="<?php echo $base_url; ?>images/pergola.jpg" alt="Custom Hardscaping" class="img-small hover-target">
        </div>
    </div>
</section>

<section class="values-section">
    <div class="section-header reveal-up">
        <span>Core Values</span>
        <h2>The Difference is in the <i>Details</i></h2>
    </div>

    <div class="values-grid">
        <div class="value-card reveal-up">
            <i class="fas fa-hammer"></i>
            <h3>Master Craftsmanship</h3>
            <p>Decades of specialized experience ensure that every stone is perfectly placed and every concrete pour is flawlessly leveled.</p>
        </div>

        <div class="value-card reveal-up" style="transition-delay: 0.1s;">
            <i class="fas fa-gem"></i>
            <h3>Premium Materials</h3>
            <p>We never cut corners. We source the highest-grade veneer, industrial-strength concrete, and heavy-duty wrought iron.</p>
        </div>

        <div class="value-card reveal-up" style="transition-delay: 0.2s;">
            <i class="fas fa-handshake"></i>
            <h3>Transparent Integrity</h3>
            <p>No hidden fees or surprise costs. We provide clear, accurate free estimates and collaborate with you from design to completion.</p>
        </div>
    </div>
</section>

<section class="team-section">
    <div class="section-header reveal-up">
        <span>Our People</span>
        <h2>Meet The <i>Craftsmen</i></h2>
    </div>

    <div class="team-grid">
        <div class="team-card reveal-up">
            <div class="team-img hover-target" style="background-image: url('<?php echo $base_url; ?>images/manager.jpg');"></div>
            <h3>Project Management</h3>
            <p>Client Relations & Operations</p>
        </div>

        <div class="team-card reveal-up" style="transition-delay: 0.1s;">
            <div class="team-img hover-target" style="background-image: url('<?php echo $base_url; ?>images/designer.jpg');"></div>
            <h3>Master Masons</h3>
            <p>Stone & Veneer Specialists</p>
        </div>

        <div class="team-card reveal-up" style="transition-delay: 0.2s;">
            <div class="team-img hover-target" style="background-image: url('<?php echo $base_url; ?>images/workers.jpg');"></div>
            <h3>Installation Crew</h3>
            <p>Concrete & Hardscape Experts</p>
        </div>
    </div>
</section>

<section class="cta-strip reveal-up">
    <h2>Start Your Transformation</h2>
    <p>Ready to upgrade your home's exterior? Contact Sosa's Veneer Stone today to schedule a consultation and receive a free, no-obligation estimate.</p>
    <a href="tel:9152828547" class="btn-gold hover-target" style="border-color: var(--brand-gold); color: var(--brand-gold);">Call (915) 282-8547</a>
</section>

<?php
// 5. Include the Footer
include '../includes/footer.php';
?>