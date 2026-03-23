<?php
// includes/header.php
// Safety fallbacks
$base_url = isset($base_url) ? $base_url : '';
$active_page = isset($active_page) ? $active_page : '';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php echo $page_title ?? "Sosa's Veneer Stone | Luxury Stone & Concrete in El Paso"; ?></title>
    <meta name="description" content="<?php echo $page_description ?? "El Paso's premier masonry and hardscape experts. Specializing in interior and exterior stone installation, custom concrete driveways, wrought iron gates, and pergolas."; ?>">

    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,700;1,400&family=Inter:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <link rel="stylesheet" href="<?php echo $base_url; ?>css/global.css">

    <?php if (isset($page_css) && !empty($page_css)): ?>
        <link rel="stylesheet" href="<?php echo $base_url . $page_css; ?>">
    <?php endif; ?>
</head>

<body>

    <div class="cursor-dot"></div>
    <div class="cursor-outline"></div>

    <nav class="nav-header" id="navbar">
        <div class="nav-container">
            <a href="<?php echo $base_url; ?>" class="brand-logo hover-target">
                <img src="<?php echo $base_url; ?>images/logo.png" alt="Sosa's Veneer Stone Logo" class="logo-img dynamic-logo"
                    onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                <div class="brand-text" style="display: none;">
                    <span class="title">Sosa's</span>
                    <span class="subtitle">Veneer Stone</span>
                </div>
            </a>

            <div class="nav-actions-wrapper">
                <input type="checkbox" id="menu-toggle">
                <label for="menu-toggle" class="hamburger"><span></span></label>

                <?php if (!isset($is_landing) || !$is_landing): ?>
                    <div class="nav-links">
                        <a href="<?php echo $base_url; ?>expertise.php" class="hover-target <?php echo ($active_page == 'expertise') ? 'active' : ''; ?>">Expertise</a>
                        <a href="<?php echo $base_url; ?>about-us/index.php" class="hover-target <?php echo ($active_page == 'about') ? 'active' : ''; ?>">The Standard</a>
                        <a href="<?php echo $base_url; ?>portfolio.php" class="hover-target <?php echo ($active_page == 'portfolio') ? 'active' : ''; ?>">Portfolio</a>
                    </div>
                <?php endif; ?>

                <button id="theme-toggle" class="theme-toggle hover-target" aria-label="Toggle Light/Dark Mode">
                    <i class="fas fa-sun"></i>
                </button>

                <a href="<?php echo $base_url; ?>contact/" class="btn-gold hover-target">Free Estimate</a>
            </div>
        </div>
    </nav>