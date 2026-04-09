<?php
// Set Variables for the Header
$basePath = "../"; // Because this file is inside a subfolder
$pageTitle = "Professional Weed Control in El Paso, TX | Lawn Heros";
$pageDescription = "Stop pulling weeds. Lawn Heros provides expert selective and non-selective weed control, including pre-emergent barriers for rock beds and lawns in El Paso.";

// JSON-LD Schema Specific to this Service
$schemaJson = '{
  "@context": "https://schema.org",
  "@type": "Service",
  "serviceType": "Weed Control",
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
    "telephone": "+19152416986"
  },
  "areaServed": ["El Paso", "Horizon City", "Socorro"],
  "description": "Professional selective and non-selective weed control services, featuring pre-emergent seed barriers and targeted elimination for rock beds and lawn in the Chihuahuan desert."
}';

include $basePath . 'includes/header.php';
?>

<header class="internal-hero" style="background: linear-gradient(135deg, rgba(39, 99, 42, 0.95) 0%, rgba(15, 23, 42, 0.8) 100%), url('../images/side-lawn.jpeg') center/cover;">
    <div class="container">
        <span class="hero-badge reveal-up">Technical Property Solutions</span>
        <h1 class="reveal-up" style="transition-delay: 0.1s;">Expert Weed Control in El Paso</h1>
        <p class="reveal-up" style="transition-delay: 0.2s;">Eradicate existing weeds and establish pre-emergent barriers to stop new weed growth. Stop pulling weeds and let our family protect your rock landscapes and lawn.</p>
    </div>
</header>

<section class="page-section">
    <div class="container content-grid">

        <div class="text-block reveal-up">
            <h2>The Chihuahuan Desert Weed Challenge</h2>
            <p>If you own a home or business in El Paso, you already know the frustration. You spend your entire weekend pulling weeds out of your expensive rock landscaping, only to watch a fresh crop explode through the rocks after a single desert monsoon shower or a sudden drop in temperature.</p>
            <p>Hand-pulling is a losing battle. Why? Because it only addresses the visible plant. It leaves thousands of dormant seeds waiting in the dirt completely untouched, completely untouched. At Lawn Heros, our Father & Sons company approaches weed control differently. We don't just treat the symptom; we engineer a chemical barrier to control the source.</p>

            <div class="highlight-box">
                <h4>The "Consistency is Key" Rule</h4>
                <p>To maintain a flawless, weed-free landscape in El Paso, most properties require just <strong>two targeted treatments a year</strong>. We apply our proprietary formulas in the Spring (to block incoming Summer weed seeds) and in the Fall (to block Winter weeds before soil temperatures drop).</p>
            </div>

            <h2>Non-Selective Weed Control (Rock & Dirt)</h2>
            <p>For properties with extensive rock beds, lawn edges, sidewalks, and expansion joints, we utilize a highly effective <strong>Non-Selective</strong> weed control strategy. This is a total-eradication approach.</p>

            <p>Our non-selective products are effective against all stubborn weeds and wild grasses native to West Texas. Because perennial and annual weeds have entirely different life cycles, and germinate at different soil temperatures, we constantly adjust our chemical mixtures based on the season.</p>

            <ul>
                <li><strong>Total Eradication:</strong> Kills all existing broadleaf weeds, wild grasses, and deep-rooted desert invaders down to the root system.</li>
                <li><strong>The Pre-Emergent Barrier:</strong> We don't just spray and pray. We lay down a commercial-grade pre-emergent barrier that inhibits new weed seeds from growing. By treating the soil, we permanently block tens of thousands of dormant seeds from ever taking root.</li>
                <li><strong>Year-Round Protection:</strong> Customized formulas for both summer heat waves and cold winter temperature drops.</li>
            </ul>

            <h2>Selective Weed Control </h2>
            <p>If you have weeds invading your Common Bermuda, Hybrid Bermuda, Centipedegrass, Zoysia, applying a non-selective formula will destroy your lawn. This is where our technical expertise in <strong>Selective Weed Control</strong> comes in.</p>

            <p>Elimination of existing weeds inside of grass is delicate work. It is done using a highly calibrated mixture that targets and kills broadleaf and grassy weeds <em>without</em> harming your surrounding grass. It is critical to properly identify the exact species of weed to select the correct mixture type.</p>

            <p>Aggressive weeds like <strong>Poa, FoxTails, and Tall Fescue</strong> need to be treated immediately. They spread incredibly fast and can easily choke out a healthy lawn within a single year if left unchecked. The absolute best weed prevention for lawns is a combination of our timely pre-emergent application and maintaining a thick, healthy lawn that naturally chokes out foreign weeds.</p>
        </div>

        <aside class="sidebar reveal-up" style="transition-delay: 0.2s;">
            <?php include $basePath . 'includes/quote-widget.php'; ?>

            <div class="sidebar-image">
                <img src="../images/weed-control-hero.jpeg" alt="Beautifully maintained weed-free lawn in El Paso">
            </div>
        </aside>

    </div>
</section>

<section class="process-section">
    <div class="container">
        <div class="section-title reveal-up">
            <h2>Our Application Strategy</h2>
        </div>

        <div class="process-grid">
            <div class="process-card reveal-up">
                <div class="process-step">1</div>
                <h4>Site Analysis</h4>
                <p>We identify the exact species of perennial or annual weeds invading your property to determine if a selective or non-selective chemical strategy is required.</p>
            </div>

            <div class="process-card reveal-up" style="transition-delay: 0.15s;">
                <div class="process-step">2</div>
                <h4>Total Eradication</h4>
                <p>We apply our professional-grade mixtures to kill all existing broadleaf, grassy weeds, and deep-rooted desert invaders down to the root system.</p>
            </div>

            <div class="process-card reveal-up" style="transition-delay: 0.3s;">
                <div class="process-step">3</div>
                <h4>Pre-Emergent Barrier</h4>
                <p>We lock in your property by laying a pre-emergent barrier over your soil and rock beds, stopping the next cycle of seeds from germinating.</p>
            </div>
        </div>
    </div>
</section>

<?php include $basePath . 'includes/footer.php'; ?>