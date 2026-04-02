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
            <h2>Ready for a <span>Weed-Free</span> Property?</h2>
            <p>Fill out the form with your details and the specific issues you are facing with your rock landscaping or turf. As a local Father & Sons company, we pride ourselves on fast response times and direct, neighborly communication.</p>

            <ul style="margin-top: 40px;">
                <li style="font-size: 1.2rem;"><i class="fas fa-phone-alt"></i> <strong>Direct Line:</strong> <a href="tel:9150000000" style="color: var(--text-muted); text-decoration: none;">(915) 000-0000</a></li>
                <li style="font-size: 1.2rem;"><i class="fas fa-envelope"></i> <strong>Email:</strong> <a href="mailto:info@lawnheros.com" style="color: var(--text-muted); text-decoration: none;">info@lawnheros.com</a></li>
                <li style="font-size: 1.2rem;"><i class="fas fa-map-marker-alt"></i> <strong>Service Area:</strong> El Paso, Horizon City, Socorro, Upper Valley</li>
            </ul>

            <div class="highlight-box">
                <h4>Hours of Operation</h4>
                <p style="margin-bottom: 5px;"><strong>Monday - Friday:</strong> 7:00 AM - 6:00 PM</p>
                <p style="margin-bottom: 5px;"><strong>Saturday:</strong> 8:00 AM - 2:00 PM</p>
                <p style="margin-bottom: 0;"><strong>Sunday:</strong> Closed</p>
            </div>
        </div>

        <aside class="sidebar reveal-up" style="transition-delay: 0.2s;">
            <div class="quote-widget" style="box-shadow: var(--shadow-accent); border-color: var(--lh-orange);">
                <h3>Request an Estimate</h3>
                <form action="<?php echo $basePath; ?>process-form.php" method="POST">
                    <div class="form-group">
                        <input type="text" name="fullName" class="form-control" placeholder="Full Name" required>
                    </div>
                    <div class="form-group">
                        <input type="tel" name="phone" class="form-control" placeholder="Phone Number" required>
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" class="form-control" placeholder="Email Address">
                    </div>
                    <div class="form-group">
                        <select name="service" class="form-control" required>
                            <option value="" disabled selected>Select Service Needed...</option>
                            <option value="Weed Control">Weed Control (Rock/Dirt)</option>
                            <option value="Lawn Care">Lawn Care & Fertilization</option>
                            <option value="Pest Control">Exterior Pest Protection</option>
                            <option value="Other">Multiple Services / Other</option>
                        </select>
                    </div>
                    <button type="submit" class="btn-primary widget-btn"><span>Request Estimate</span></button>
                </form>

                <?php if (isset($_GET['status']) && $_GET['status'] == 'success'): ?>
                    <div style="background: var(--lh-green); color: white; padding: 15px; border-radius: 8px; margin-top: 15px; text-align: center; font-weight: bold;">
                        Thanks! We will contact you shortly.
                    </div>
                <?php endif; ?>
            </div>
        </aside>

    </div>
</section>

<?php include $basePath . 'includes/footer.php'; ?>