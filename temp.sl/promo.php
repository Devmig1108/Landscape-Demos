<?php
$page_title = "Special Offer | Sosa's Veneer Stone";
$page_description = "Get a free, no-obligation estimate on premium masonry and hardscaping in El Paso.";
$base_url = '';
$active_page = '';

// Tell the header to hide the navigation links!
$is_landing = true;

// Load both the contact form styles AND the promo layout styles
$page_css = 'css/contact.css" rel="stylesheet"><link rel="stylesheet" href="css/promo.css';

include 'includes/header.php';
?>

<section class="promo-section">
    <div class="promo-wrapper">

        <div class="promo-copy reveal-up">
            <h1>Upgrade Your Home's <br><i>Curb Appeal.</i></h1>
            <p class="lead">Sosa's Veneer Stone specializes in premium stone facades, custom concrete driveways, and architectural hardscaping across El Paso, TX.</p>

            <ul class="bullet-points">
                <li><i class="fas fa-check-circle"></i> Master Craftsmanship & Flawless Finishes</li>
                <li><i class="fas fa-check-circle"></i> Premium Grade Materials Built to Last</li>
                <li><i class="fas fa-check-circle"></i> Locally Owned & Operated in El Paso</li>
                <li><i class="fas fa-check-circle"></i> 100% Free, No-Obligation Estimates</li>
            </ul>

            <div style="display: flex; align-items: center; gap: 20px; margin-top: 20px;">
                <img src="images/manager.jpg" alt="Project Manager" style="width: 70px; height: 70px; border-radius: 50%; object-fit: cover; border: 2px solid var(--brand-gold);">
                <div>
                    <p style="margin: 0; font-family: 'Inter'; font-weight: 700; font-size: 1.1rem;">Call Us Directly</p>
                    <a href="tel:9152828547" class="hover-target" style="color: var(--brand-gold); font-size: 1.3rem; text-decoration: none; font-family: 'Playfair Display';">(915) 282-8547</a>
                </div>
            </div>
        </div>

        <div class="promo-form-container reveal-up" style="transition-delay: 0.2s;">
            <h3>Claim Your Free Estimate</h3>
            <p>Fill out the form below and our team will contact you within 24 hours.</p>

            <form class="modern-form" method="POST" action="">
                <div class="form-grid">
                    <div class="form-group">
                        <label>First Name</label>
                        <input type="text" name="first_name" class="hover-target" required>
                    </div>
                    <div class="form-group">
                        <label>Last Name</label>
                        <input type="text" name="last_name" class="hover-target" required>
                    </div>
                </div>
                <div class="form-grid">
                    <div class="form-group">
                        <label>Phone Number</label>
                        <input type="tel" name="phone" class="hover-target" required>
                    </div>
                    <div class="form-group">
                        <label>Email Address</label>
                        <input type="email" name="email" class="hover-target" required>
                    </div>
                </div>
                <div class="form-group full-width" style="margin-bottom: 20px;">
                    <label>Project Type</label>
                    <select name="service" class="hover-target" required>
                        <option value="" disabled selected>Select an expertise...</option>
                        <option value="Stone Veneer">Stone Veneer</option>
                        <option value="Concrete Driveway">Concrete Driveway / Patio</option>
                        <option value="Wrought Iron">Wrought Iron Gates</option>
                        <option value="Pergola">Custom Pergola</option>
                    </select>
                </div>
                <button type="submit" class="submit-btn hover-target">Get My Free Quote</button>
            </form>
        </div>

    </div>
</section>

<?php
// You can conditionally hide the footer links too if you want, but standard footer is usually fine.
include 'includes/footer.php';
?>