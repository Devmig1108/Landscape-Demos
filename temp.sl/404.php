<?php
$page_title = "Page Not Found | Sosa's Veneer Stone";
$page_description = "The page you are looking for does not exist.";
$base_url = '';
$active_page = '';
$page_css = 'css/404.css';

include 'includes/header.php';
?>

<section class="error-section">
    <div class="error-code reveal-up">404</div>
    <div class="error-content reveal-up" style="transition-delay: 0.2s;">
        <h1>Off the beaten path.</h1>
        <p>It looks like the page you are looking for has been moved, deleted, or simply doesn't exist.</p>
        <a href="<?php echo $base_url; ?>index.php" class="btn-gold hover-target">Return to Homepage</a>
    </div>
</section>

<?php include 'includes/footer.php'; ?>