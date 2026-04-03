<?php
// Set Variables for the Header
$basePath = ""; // Root directory
$pageTitle = "Lawn Heros | Expert Weed Control & Lawn Care in El Paso, TX";
$pageDescription = "El Paso's premier family-owned weed control and lawn care company. We specialize in non-selective weed barriers, NPK fertilization, and exterior pest control.";

// JSON-LD Schema Specific to the Homepage
$schemaJson = '{
  "@context": "https://schema.org",
  "@type": "LocalBusiness",
  "name": "Lawn Heros Father & Sons Company",
  "image": "https://www.lawnheros.com/images/logo.png",
  "description": "Expert weed control, lawn fertilization, and exterior pest control services operating throughout El Paso, TX, Horizon City, and the Upper Valley.",
  "url": "https://www.lawnheros.com/",
  "telephone": "+19150000000",
  "address": {
    "@type": "PostalAddress",
    "addressLocality": "El Paso",
    "addressRegion": "TX",
    "addressCountry": "US"
  },
  "geo": {
    "@type": "GeoCoordinates",
    "latitude": 31.7619,
    "longitude": -106.4850
  },
  "areaServed": ["El Paso", "Horizon City", "Socorro", "Upper Valley"],
  "priceRange": "$$"
}';

include $basePath . 'includes/header.php';
?>

<header class="hero">
    <div class="container hero-grid">
        <div class="hero-text">
            <span class="hero-label reveal-up"><i class="fas fa-shield-alt"></i> El Paso's Trusted Lawn Care</span>
            <h1 class="hero-title reveal-up" style="transition-delay: 0.1s;">Expert Weed Control & Lawn Care in <span>El Paso, TX</span></h1>
            <p class="hero-desc reveal-up" style="transition-delay: 0.2s;">Dependable, family-owned lawn maintenance and landscaping services. From precision mowing to specialized weed control, the Heros have you covered.</p>
        </div>
        <?php include $basePath . 'includes/quote-widget.php'; ?>
    </div>
</header>

<section id="services" class="services-section">
    <div class="container">
        <div class="section-header reveal-up">
            <span>OUR CORE CAPABILITIES</span>
            <h2>Technical Yard Solutions</h2>
            <p>We deploy professional-grade formulas and precise application schedules designed specifically for El Paso's unique climate and soil conditions.</p>
        </div>

        <div class="services-grid">
            <div class="service-card reveal-up">
                <div class="service-icon"><i class="fas fa-spray-can"></i></div>
                <h3>Weed Control (Non-Selective)</h3>
                <p class="service-desc">Stop pulling weeds. We deploy a professional mixture that eradicates existing weeds and lays a pre-emergent barrier to block tens of thousands of dormant seeds from germinating in rock beds, sidewalks, and expansion joints.</p>
                <ul class="service-list">
                    <li><i class="fas fa-check"></i> Rock Beds & Sidewalks</li>
                    <li><i class="fas fa-check"></i> Summer & Winter Weed Formulas</li>
                    <li><i class="fas fa-check"></i> Pre-Emergent Seed Barriers</li>
                    <li><i class="fas fa-check"></i> Perennial & Annual Control</li>
                </ul>
                <a href="weed-control-el-paso" class="service-link">View Weed Control <i class="fas fa-arrow-right"></i></a>
            </div>

            <div class="service-card offset reveal-up" style="transition-delay: 0.15s;">
                <div class="service-icon"><i class="fas fa-leaf"></i></div>
                <h3>Lawn Care & Fertilization</h3>
                <p class="service-desc">We engineer healthy, green lawns that naturally choke out aggressive weeds like Poa and Foxtails. We utilize a custom 4-1-2 NPK ratio, humic acids, and micronutrients tailored specifically for southern Bermuda grass.</p>
                <ul class="service-list">
                    <li><i class="fas fa-check"></i> Selective Lawn Weed Elimination</li>
                    <li><i class="fas fa-check"></i> Custom NPK Fertilization</li>
                    <li><i class="fas fa-check"></i> Iron & Soil Conditioning</li>
                    <li><i class="fas fa-check"></i> Top Soil & Water Scheduling</li>
                </ul>
                <a href="lawn-care-el-paso" class="service-link">View Lawn Care <i class="fas fa-arrow-right"></i></a>
            </div>

            <div class="service-card reveal-up" style="transition-delay: 0.3s;">
                <div class="service-icon"><i class="fas fa-bug"></i></div>
                <h3>Exterior Pest Control</h3>
                <p class="service-desc">Protect your home's perimeter before pests get inside. We establish a robust exterior barrier around your foundation, windows, and lawn to eradicate grubs, lawn insects, and seasonal desert pests.</p>
                <ul class="service-list">
                    <li><i class="fas fa-check"></i> Foundation Perimeter Barriers</li>
                    <li><i class="fas fa-check"></i> Window & Entryway Protection</li>
                    <li><i class="fas fa-check"></i> Lawn Insect & Grub Control</li>
                    <li><i class="fas fa-check"></i> Seasonal Pest Prevention</li>
                </ul>
                <a href="contact" class="service-link">Request Pest Control <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>
    </div>
</section>

<section id="about" class="about-section">
    <div class="container about-grid">
        <div class="about-content reveal-up">
            <span class="hero-label" style="background: var(--icon-bg); color: var(--lh-green); margin-bottom: 15px; padding: 6px 15px; border-radius: var(--radius-curve); display: inline-block; font-weight: 700; letter-spacing: 2px;"><i class="fas fa-microscope"></i> The Lawn Heros Difference</span>
            <h2 style="font-size: clamp(2.5rem, 4vw, 3.5rem); margin-bottom: 25px; font-weight: 900; letter-spacing: -1px; text-transform: uppercase;">Rooted in Family.<br>Built on Hard Work.</h2>
            <p style="font-size: 1.15rem; color: var(--text-muted); margin-bottom: 20px; line-height: 1.8;">Lawn Heros isn't a faceless franchise. We are a proud <strong>Father & Sons Company</strong> based right here in El Paso. We started this business to provide our neighbors with lawn care they can actually rely on.</p>

            <ul style="list-style: none; margin-bottom: 35px; margin-top: 20px;">
                <li style="margin-bottom: 15px; font-size: 1.1rem; font-weight: 600; display: flex; align-items: center; gap: 15px;">
                    <i class="fas fa-check-circle" style="color: var(--lh-orange); font-size: 1.2rem;"></i> Direct Communication with the Owners
                </li>
                <li style="margin-bottom: 15px; font-size: 1.1rem; font-weight: 600; display: flex; align-items: center; gap: 15px;">
                    <i class="fas fa-check-circle" style="color: var(--lh-orange); font-size: 1.2rem;"></i> Consistent, Data-Driven Applications
                </li>
                <li style="font-size: 1.1rem; font-weight: 600; display: flex; align-items: center; gap: 15px;">
                    <i class="fas fa-check-circle" style="color: var(--lh-orange); font-size: 1.2rem;"></i> Fully Insured Professional Service
                </li>
            </ul>
        </div>
        <div class="about-images reveal-up" style="transition-delay: 0.2s;">
            <img src="images/side-lawn.jpeg" alt="Beautifully maintained weed-free lawn in El Paso">
            <div class="about-badge">
                <h4>100%</h4>
                <p>Guaranteed</p>
            </div>
        </div>
    </div>
</section>

<section id="reviews" class="reviews-section">
    <div class="container">
        <div class="section-header reveal-up">
            <span>CLIENT SUCCESS</span>
            <h2>Trusted Across El Paso</h2>
        </div>

        <div class="reviews-grid">
            <div class="review-card reveal-up">
                <i class="fas fa-quote-right quote-icon"></i>
                <div class="stars">
                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                </div>
                <p class="review-text">"We have a massive rock lawn that was constantly overrun with weeds. Since Lawn Heros started their pre-emergent treatments, I haven't had to pull a single weed. Unbelievable service."</p>
                <div class="author">Michael T. <span>West Side El Paso</span></div>
            </div>

            <div class="review-card reveal-up" style="transition-delay: 0.15s;">
                <i class="fas fa-quote-right quote-icon"></i>
                <div class="stars">
                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                </div>
                <p class="review-text">"Our Bermuda grass was struggling and full of foxtails. Their fertilizer and selective weed control program completely choked out the weeds. Best looking yard in the neighborhood."</p>
                <div class="author">Sarah G. <span>East Side El Paso</span></div>
            </div>

            <div class="review-card reveal-up" style="transition-delay: 0.3s;">
                <i class="fas fa-quote-right quote-icon"></i>
                <div class="stars">
                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                </div>
                <p class="review-text">"It is so refreshing to deal directly with a father and sons team instead of a massive corporation. They are dependable, communicate well, and their exterior pest perimeter works flawlessly."</p>
                <div class="author">David R. <span>Horizon City</span></div>
            </div>
        </div>
    </div>
</section>

<?php include $basePath . 'includes/footer.php'; ?>