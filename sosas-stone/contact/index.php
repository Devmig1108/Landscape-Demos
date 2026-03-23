<?php
// 1. Define the SEO variables
$page_title = "Contact Us | Sosa's Veneer Stone | El Paso";
$page_description = "Get a free estimate for your custom stone veneer, concrete, wrought iron, or pergola project in El Paso, TX.";

// 2. Define the Base URL
$base_url = '../';
$active_page = 'contact';
$page_css = 'css/contact.css';

// --- FORM PROCESSING LOGIC ---
$status_message = '';

// FLIP THIS TO TRUE WHEN READY TO GO LIVE
$enable_emails = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and grab the input data
    $first_name = htmlspecialchars(trim($_POST['first_name']));
    $last_name = htmlspecialchars(trim($_POST['last_name']));
    $phone = htmlspecialchars(trim($_POST['phone']));
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $service = htmlspecialchars(trim($_POST['service'] ?? ''));
    $details = htmlspecialchars(trim($_POST['details']));

    // Basic Validation Check
    if (empty($first_name) || empty($phone) || empty($email) || empty($service)) {
        $status_message = "<div style='padding: 15px; background: rgba(220, 53, 69, 0.2); color: #ef4444; border: 1px solid #ef4444; border-radius: 4px; margin-bottom: 20px; font-weight: 600;'>Please fill out all required fields.</div>";
    } else {

        // Setup Email Variables
        $to = "your-email@example.com"; // <-- CHANGE THIS WHEN LIVE
        $subject = "New Lead: " . $service . " inquiry from " . $first_name . " " . $last_name;

        // Construct the email body
        $message = "You have received a new estimate request from your website.\n\n";
        $message .= "Name: " . $first_name . " " . $last_name . "\n";
        $message .= "Phone: " . $phone . "\n";
        $message .= "Email: " . $email . "\n";
        $message .= "Service Requested: " . $service . "\n\n";
        $message .= "Project Details:\n" . $details . "\n";

        // Set headers
        $headers = "From: noreply@yoursite.com" . "\r\n" .
            "Reply-To: " . $email . "\r\n" .
            "X-Mailer: PHP/" . phpversion();

        // Execution Branch
        if ($enable_emails) {
            // LIVE MODE: Actually attempt to send the email
            if (mail($to, $subject, $message, $headers)) {
                $status_message = "<div style='padding: 15px; background: rgba(67, 160, 71, 0.2); color: #4ade80; border: 1px solid #4ade80; border-radius: 4px; margin-bottom: 20px; font-weight: 600;'>Thank you! Your request has been sent successfully. We will be in touch soon.</div>";
            } else {
                $status_message = "<div style='padding: 15px; background: rgba(220, 53, 69, 0.2); color: #ef4444; border: 1px solid #ef4444; border-radius: 4px; margin-bottom: 20px; font-weight: 600;'>Oops! Something went wrong on our server. Please try calling us instead.</div>";
            }
        } else {
            // DEV MODE: Pretend it sent successfully for UI testing
            $status_message = "<div style='padding: 15px; background: rgba(67, 160, 71, 0.2); color: #4ade80; border: 1px solid #4ade80; border-radius: 4px; margin-bottom: 20px; font-weight: 600;'>[TEST MODE] Form submitted successfully! Email functionality is currently disabled.</div>";
        }
    }
}
// --- END FORM PROCESSING ---

// 3. Include the Header
include '../includes/header.php';
?>

<section class="internal-hero">
    <div class="hero-bg" style="background: var(--hero-overlay), url('<?php echo $base_url; ?>images/gates.jpg') center/cover;"></div>
    <div class="hero-content">
        <span class="hero-label load-1">Get In Touch</span>
        <h1 class="hero-title load-2">
            Start Your <i>Project.</i>
        </h1>
    </div>
</section>

<section class="contact-section">
    <div class="contact-wrapper">

        <div class="contact-info reveal-up">
            <h2>Let's build something <br><i>extraordinary.</i></h2>
            <p class="lead">Whether you are looking to upgrade your home's facade, pour a new custom driveway, or install a beautiful wrought iron gate, our team is ready to bring your vision to life.</p>

            <div class="info-block">
                <i class="fas fa-map-marker-alt"></i>
                <div>
                    <h4>Service Area</h4>
                    <p>El Paso, TX & Surrounding Areas</p>
                </div>
            </div>

            <div class="info-block">
                <i class="fas fa-phone-alt"></i>
                <div>
                    <h4>Call or Text</h4>
                    <a href="tel:9152828547" class="hover-target">(915) 282-8547</a>
                </div>
            </div>

            <div class="info-block">
                <i class="fas fa-clock"></i>
                <div>
                    <h4>Business Hours</h4>
                    <p>Mon - Fri: 8:00 AM - 6:00 PM<br>Weekends by appointment.</p>
                </div>
            </div>
        </div>

        <div class="contact-form-container reveal-up" style="transition-delay: 0.2s;">
            <h3>Request a Free Estimate</h3>

            <?php echo $status_message; ?>

            <form class="modern-form" method="POST" action="" id="contactForm">

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
                    <label>Service Required</label>
                    <select name="service" class="hover-target" required>
                        <option value="" disabled selected>Select an expertise...</option>
                        <option value="Exterior / Interior Stone Veneer">Exterior / Interior Stone Veneer</option>
                        <option value="Concrete Driveway / Patio">Concrete Driveway / Patio</option>
                        <option value="Wrought Iron Gates">Wrought Iron Gates</option>
                        <option value="Custom Pergola">Custom Pergola</option>
                        <option value="Other">Other / Multiple Services</option>
                    </select>
                </div>

                <div class="form-group full-width">
                    <label>Project Details</label>
                    <textarea name="details" rows="4" class="hover-target" placeholder="Tell us a little bit about what you are looking to build..."></textarea>
                </div>

                <button type="submit" class="submit-btn hover-target">Submit Request</button>
            </form>
        </div>

    </div>
</section>

<?php include '../includes/footer.php'; ?>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const formInputs = document.querySelectorAll('#contactForm input[required], #contactForm select[required]');

        formInputs.forEach(input => {
            // Check for errors when the user clicks away from the input
            input.addEventListener('blur', function() {
                if (!this.value.trim() || !this.checkValidity()) {
                    this.classList.add('input-error');
                } else {
                    this.classList.remove('input-error');
                }
            });

            // Remove the red border as soon as they start typing to fix the error
            input.addEventListener('input', function() {
                if (this.classList.contains('input-error')) {
                    this.classList.remove('input-error');
                }
            });

            // Special handler for the select dropdown to remove error upon changing selection
            if (input.tagName === 'SELECT') {
                input.addEventListener('change', function() {
                    if (this.classList.contains('input-error')) {
                        this.classList.remove('input-error');
                    }
                });
            }
        });
    });
</script>