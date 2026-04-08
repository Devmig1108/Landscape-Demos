<?php
$basePath = "../";
$pageTitle = "Contact Lawn Heros | Get a Free Estimate in El Paso, TX";
$pageDescription = "Contact El Paso's premier Father & Sons weed control and lawn care company. Call today for a fast, dependable quote.";

include $basePath . 'includes/header.php';
?>

<header class="internal-hero">
    <div class="container">
        <span class="hero-badge reveal-up">Fast, Dependable Quotes</span>
        <h1 class="reveal-up" style="transition-delay: 0.1s;">Let's Fix Your Yard</h1>
        <p class="reveal-up" style="transition-delay: 0.2s;">Reach out today. We respond quickly and provide accurate, honest estimates for your property.</p>
    </div>
</header>

<section class="page-section">
    <div class="container content-grid">

        <div class="text-block reveal-up">
            <h2>Ready for a <span>Weed-Free</span> Property and Beatiful Lawn?</h2>
            <p>Fill out the form with your details and the specific issues you are facing with your rock landscaping or grass. As a local Father & Sons company, we pride ourselves on fast response times and direct, neighborly communication.</p>

            <ul style="margin-top: 40px;">
                <li style="font-size: 1.2rem;"><i class="fas fa-phone-alt"></i> <strong>Direct Line:</strong> <a href="tel:9152416986" style="color: var(--text-muted); text-decoration: none;">(915) 241-6986</a></li>
                <li style="font-size: 1.2rem;"><i class="fas fa-envelope"></i> <strong>Email:</strong> <a href="mailto:support@lawnheros.com" style="color: var(--text-muted); text-decoration: none;">info@lawnheros.com</a></li>
                <li style="font-size: 1.2rem;"><i class="fas fa-map-marker-alt"></i> <strong>Service Area:</strong> El Paso, Horizon City, Socorro</li>
            </ul>

            <div class="highlight-box">
                <h4>Hours of Operation</h4>
                <p style="margin-bottom: 5px;"><strong>Monday - Saturday:</strong> 9:00 AM - 5:00 PM</p>
                <p style="margin-bottom: 0;"><strong>Sunday:</strong> By Appointent Only</p>
            </div>
        </div>

        <aside class="sidebar reveal-up" style="transition-delay: 0.2s;">
                <?php include $basePath . 'includes/quote-widget.php'; ?>
                <?php if (isset($_GET['status']) && $_GET['status'] == 'success'): ?>
                    <div style="background: var(--lh-green); color: white; padding: 15px; border-radius: 8px; margin-top: 15px; text-align: center; font-weight: bold;">
                        Thanks! We will contact you shortly.
                    </div>
                <?php endif; ?>

        </aside>

    </div>
</section>

<?php include $basePath . 'includes/footer.php'; ?>