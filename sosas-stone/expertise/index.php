<?php
// 1. Define the SEO variables
$page_title = "Expertise | Sosa's Veneer Stone | El Paso";
$page_description = "Explore our expertise in custom veneer stone, concrete pouring, wrought iron gates, and wooden pergolas in El Paso, TX.";

// 2. Define the Base URL because this file is inside a subfolder (/expertise/)
$base_url = '../';

// 3. Define the active page and specific CSS
$active_page = 'expertise';
$page_css = 'css/expertise.css';

// 4. Include the Header
include '../includes/header.php';
?>

<section class="internal-hero">
    <div class="hero-bg" style="background: var(--hero-overlay), url('<?php echo $base_url; ?>images/concrete.jpg') center/cover;"></div>
    <div class="hero-content">
        <span class="hero-label load-1">Our Services</span>
        <h1 class="hero-title load-2">
            Architectural <i>Mastery.</i>
        </h1>
    </div>
</section>

<section class="service-detail-section">

    <div class="service-row reveal-up">
        <div class="service-img-container hover-target">
            <div class="port-number">01</div>
            <img src="<?php echo $base_url; ?>images/stone-exterior.jpg" alt="Exterior Stone Installation" class="service-img">
        </div>
        <div class="service-text">
            <h2>Exterior & Interior <br><i>Stone Veneer</i></h2>
            <p>Natural and manufactured stone veneer drastically elevates the aesthetic and market value of your property. Our master masons specialize in flawless installation, ensuring every joint and edge is perfectly aligned to create a seamless, high-end finish.</p>
            <p>Whether you are upgrading your home's facade to boost curb appeal, or designing a custom interior accent wall or fireplace, we source the highest quality stone to match your specific architectural style.</p>
            <ul class="feature-list">
                <li><i class="fas fa-check"></i> Full Exterior Facades & Wraps</li>
                <li><i class="fas fa-check"></i> Custom Interior Fireplaces</li>
                <li><i class="fas fa-check"></i> Outdoor Kitchens & BBQs</li>
                <li><i class="fas fa-check"></i> Stone Pillars & Accent Walls</li>
            </ul>
        </div>
    </div>

    <div class="service-row reveal-up">
        <div class="service-img-container hover-target">
            <div class="port-number">02</div>
            <img src="<?php echo $base_url; ?>images/concrete-driveway.jpg" alt="Custom Concrete Driveway" class="service-img">
        </div>
        <div class="service-text">
            <h2>Custom Concrete <br><i>Pouring & Finishing</i></h2>
            <p>Concrete is the foundation of your outdoor living space. We provide high-strength, perfectly leveled concrete solutions designed to withstand the intense Texas heat and heavy vehicle traffic without cracking or buckling.</p>
            <p>From completely removing and replacing old, damaged driveways to pouring brand-new custom patios and walkways, we offer a variety of finishes to suit your design preferences.</p>
            <ul class="feature-list">
                <li><i class="fas fa-check"></i> Full Driveway Tear-outs & Replacements</li>
                <li><i class="fas fa-check"></i> Smooth & Broom Finished Patios</li>
                <li><i class="fas fa-check"></i> Custom Stamped Concrete Designs</li>
                <li><i class="fas fa-check"></i> Structural Foundations & Walkways</li>
            </ul>
        </div>
    </div>

    <div class="service-row reveal-up">
        <div class="service-img-container hover-target">
            <div class="port-number">03</div>
            <img src="<?php echo $base_url; ?>images/gates.jpg" alt="Wrought Iron Gate Installation" class="service-img">
        </div>
        <div class="service-text">
            <h2>Wrought Iron <br><i>Gates & Fencing</i></h2>
            <p>Security should never compromise style. Our custom wrought iron gates provide an elegant, imposing barrier that protects your property while significantly enhancing its curb appeal.</p>
            <p>Every gate is custom-measured, fabricated with heavy-duty materials, and professionally installed to ensure smooth operation and long-lasting durability against the elements.</p>
            <ul class="feature-list">
                <li><i class="fas fa-check"></i> Custom Driveway & Entry Gates</li>
                <li><i class="fas fa-check"></i> Security Fencing & Enclosures</li>
                <li><i class="fas fa-check"></i> Pedestrian Walkway Gates</li>
                <li><i class="fas fa-check"></i> Motorized & Automated Gate Options</li>
            </ul>
        </div>
    </div>

    <div class="service-row reveal-up">
        <div class="service-img-container hover-target">
            <div class="port-number">04</div>
            <img src="<?php echo $base_url; ?>images/pergola.jpg" alt="Custom Wooden Pergola" class="service-img">
        </div>
        <div class="service-text">
            <h2>Bespoke Wooden <br><i>Pergolas</i></h2>
            <p>A custom pergola transforms a basic backyard into a luxurious outdoor living room. We design and build structural pergolas that provide essential shade and define your outdoor entertainment space.</p>
            <p>Using premium, weather-treated wood, we construct durable shade structures that integrate perfectly with your existing concrete patios, stone elements, and landscaping.</p>
            <ul class="feature-list">
                <li><i class="fas fa-check"></i> Custom Sized Patio Covers</li>
                <li><i class="fas fa-check"></i> Premium Treated Wood Construction</li>
                <li><i class="fas fa-check"></i> Integrated Lighting Options</li>
                <li><i class="fas fa-check"></i> Attached & Freestanding Designs</li>
            </ul>
        </div>
    </div>

</section>

<section class="cta-strip reveal-up">
    <h2>Ready to transform your property?</h2>
    <p>Contact Sosa's Veneer Stone today to schedule a consultation and receive a free, no-obligation estimate for your next project.</p>
    <a href="tel:9152828547" class="btn-gold hover-target" style="border-color: var(--brand-gold); color: var(--brand-gold);">Call (915) 282-8547</a>
</section>

<?php
// 5. Include the Footer
include '../includes/footer.php';
?>