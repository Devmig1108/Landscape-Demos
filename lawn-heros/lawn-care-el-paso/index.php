<?php
// Set Variables for the Header
$basePath = "../"; // Because this file is inside a subfolder
$pageTitle = "Expert Lawn Care & Fertilization in El Paso, TX | Lawn Heros";
$pageDescription = "El Paso's turf science experts. We specialize in custom 4-1-2 NPK fertilization, selective weed control, and soil conditioning for Bermuda and southern lawns.";

// JSON-LD Schema Specific to this Service
$schemaJson = '{
  "@context": "https://schema.org",
  "@type": "Service",
  "serviceType": "Lawn Care & Fertilization",
  "provider": {
    "@type": "LocalBusiness",
    "name": "Lawn Heros Father & Sons Company",
    "image": "https://www.lawnheros.com/images/logo.png",
    "address": {
      "@type": "PostalAddress",
      "addressLocality": "El Paso",
      "addressRegion": "TX",
      "addressCountry": "US"
    },
    "telephone": "+19150000000"
  },
  "areaServed": ["El Paso", "Horizon City", "Socorro", "Upper Valley"],
  "description": "Technical lawn care services including custom NPK fertilization, soil testing, iron treatments, and selective weed eradication for southern grasses."
}';

include $basePath . 'includes/header.php';
?>

    <header class="internal-hero" style="background: linear-gradient(135deg, rgba(39, 99, 42, 0.95) 0%, rgba(15, 23, 42, 0.8) 100%), url('../images/side-lawn.jpeg') center/cover;">
        <div class="container">
            <span class="hero-badge reveal-up">Turf Science & Agronomy</span>
            <h1 class="reveal-up" style="transition-delay: 0.1s;">Lawn Care & Fertilization</h1>
            <p class="reveal-up" style="transition-delay: 0.2s;">We don't cut grass. We engineer healthy, vibrant, weed-free turf using data-driven chemistry and premium soil conditioning.</p>
        </div>
    </header>

    <section class="page-section">
        <div class="container content-grid">
            
            <div class="text-block reveal-up">
                <h2>The Science of Southern Lawns in El Paso</h2>
                <p>Keeping a lawn green in the Chihuahuan Desert requires much more than just throwing down generic fertilizer and watering it every day. Southern grasses, particularly Bermuda, require a highly specific diet of macronutrients, micronutrients, and soil conditioners to thrive in our extreme summer heat and alkaline soils.</p>
                <p>At Lawn Heros, our Father & Sons company focuses entirely on the technical health of your turf. The absolute best weed prevention for lawns is a thick, healthy grass system that naturally chokes out foreign invaders. We achieve this through a rigorous, scientifically backed fertilization and selective weed control program.</p>

                <div class="highlight-box">
                    <h4>Our Application Schedule</h4>
                    <p>Our fertilization program begins in the Spring the moment your lawn is 50-60% green. From there, we apply our custom granular and liquid formulas every 6 weeks straight through the Fall, ensuring your grass has exactly what it needs at every stage of its growth cycle.</p>
                </div>

                <h2>Selective Weed Eradication in Turf</h2>
                <p>Weeds are the enemy of a pristine lawn. However, you cannot use standard weed killers on your grass without destroying the turf itself. We utilize <strong>Selective Weed Control</strong>—a highly calibrated chemical mixture that targets and kills broadleaf and grassy weeds while leaving your Bermuda grass completely unharmed.</p>
                
                <p>Aggressive invasive species like <strong>Poa, FoxTails, and Tall Fescue</strong> spread incredibly fast and can easily take over a lawn within a single year if left unchecked. It is critical to identify the exact species invading your yard so we can select the proper elimination mixture. Furthermore, we apply premium pre-emergents in the Spring and Fall (before soil temperatures shift) to block new weed seeds from ever germinating in your grass.</p>

                <h2>Custom NPK Fertilization (4-1-2 Ratio)</h2>
                <p>Generic fertilizers off the shelf at a big-box store are not formulated for El Paso's specific climate. We utilize both granular and liquid fertilizers customized to the precise <strong>4-1-2 NPK ratio</strong> required by southern lawns.</p>
                
                <ul>
                    <li><strong>Nitrogen (N):</strong> Bermuda grass requires heavy Nitrogen. This powers the rapid growth of the grass blades and fuels the spreading of the turf via both Rhizomes and Stolons (runners).</li>
                    <li><strong>Phosphorus (P):</strong> Essential for deep, robust root health and growth, allowing your grass to survive the brutal West Texas summers.</li>
                    <li><strong>Potassium (K):</strong> Drives overall plant health and disease resistance. As Fall approaches, we shift our formula to feature a higher Potassium ratio and lower Nitrogen, perfectly preparing the grass to transition into hibernation.</li>
                </ul>

                <h2>Soil is KING: Amendments & Micronutrients</h2>
                <p>You can pump all the fertilizer you want into your lawn, but if your soil is dead, the plant cannot absorb the nutrients. When it comes to a healthy plant, flower, or grass in the desert, <strong>Soil is King</strong>.</p>
                
                <p>We go far beyond standard NPK fertilization. Our treatments include powerful soil amendments designed to unlock the nutrients already trapped in the ground:</p>
                <ul>
                    <li><strong>Liquid Iron:</strong> Applied for a rapid, deep, dark green-up without causing excessive, unmanageable vertical growth.</li>
                    <li><strong>Humic & Fulvic Acids:</strong> Natural organic compounds that condition the soil, improve water retention, and allow the grass roots to uptake nutrients exponentially faster.</li>
                    <li><strong>Liquid Carbon:</strong> Feeds the beneficial microbes in the soil, creating a living, breathing ecosystem beneath your lawn.</li>
                    <li><strong>Essential Micronutrients:</strong> We supplement with Boron, Magnesium, Sulfur, Zinc, and Copper to prevent yellowing and ensure complete, cellular-level plant health.</li>
                </ul>

                <h3>Comprehensive Turf Consulting</h3>
                <p>Because we view your lawn as an entire ecosystem, our service doesn't stop when the spray dries. We provide comprehensive soil testing, top-soil dressing, and direct consultations with property owners to establish proper watering schedules and discuss correct mowing heights to ensure our chemical treatments yield maximum results.</p>
            </div>

            <aside class="sidebar reveal-up" style="transition-delay: 0.2s;">
                <div class="quote-widget">
                    <h3>Get a Fast Estimate</h3>
                    <p>Enter your details and our family will reach out today.</p>
                    <form action="#" method="POST">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Your Name" required>
                        </div>
                        <div class="form-group">
                            <input type="tel" class="form-control" placeholder="Phone Number" required>
                        </div>
                        <div class="form-group">
                            <select class="form-control" required>
                                <option value="" disabled selected>Select Service Needed...</option>
                                <option value="weed-control">Weed Control (Rock/Dirt)</option>
                                <option value="lawn-care" selected>Lawn Care & Fertilization</option>
                                <option value="pest-control">Exterior Pest Protection</option>
                            </select>
                        </div>
                        <button type="submit" class="btn-primary widget-btn"><span>Request Estimate</span></button>
                    </form>
                </div>

                <div class="sidebar-image">
                    <img src="../images/front-lawn.jpeg" alt="Applying liquid fertilizer and humic acid to a lawn">
                </div>
            </aside>

        </div>
    </section>

    <section class="process-section">
        <div class="container">
            <div class="section-title reveal-up">
                <h2>Our Turf Protocol</h2>
            </div>
            
            <div class="process-grid">
                <div class="process-card reveal-up">
                    <div class="process-step">1</div>
                    <h4>Soil & Weed Analysis</h4>
                    <p>We test your soil composition and identify any existing invasive species like Poa or Foxtails to determine the exact selective herbicide needed.</p>
                </div>
                
                <div class="process-card reveal-up" style="transition-delay: 0.15s;">
                    <div class="process-step">2</div>
                    <h4>Custom NPK & Iron</h4>
                    <p>We apply our proprietary 4-1-2 blend of liquid and granular fertilizer, supplemented with Humic acids and Iron for rapid greening and deep root expansion.</p>
                </div>

                <div class="process-card reveal-up" style="transition-delay: 0.3s;">
                    <div class="process-step">3</div>
                    <h4>6-Week Maintenance</h4>
                    <p>From Spring green-up to Fall hibernation, we return every 6 weeks to adjust the Potassium and Nitrogen levels based on the shifting desert temperatures.</p>
                </div>
            </div>
        </div>
    </section>

<?php include $basePath . 'includes/footer.php'; ?>