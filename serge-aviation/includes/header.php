<?php 
    // STAGING SERVER ROUTING
    // Set this to your subdirectory path for staging. 
    // When pushing to the live, standalone domain, change this to an empty string: ''
    $BASE_URL = '/demo/ep-flight-academy'; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>G Force Academy</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="<?php echo $BASE_URL; ?>/css/style.css">
</head>
<body>

<header class="header-nav">
    <div class="nav-container">
        <a href="<?php echo $BASE_URL; ?>/index.php" class="logo">
            <img src="<?php echo $BASE_URL; ?>/images/logo.png" alt="G Force Academy">
        </a>

        <button class="mobile-toggle" id="mobileToggle" aria-label="Toggle navigation">
            <span class="hamburger-line"></span>
            <span class="hamburger-line"></span>
            <span class="hamburger-line"></span>
        </button>

        <ul class="nav-menu" id="navMenu">
            <li><a href="<?php echo $BASE_URL; ?>/" class="nav-link">Home</a></li>
            <li><a href="<?php echo $BASE_URL; ?>/about" class="nav-link">About</a></li>
            
            <li class="dropdown" id="coursesDropdown">
                <a href="<?php echo $BASE_URL; ?>/courses/index.php" class="nav-link" id="mobileDropdownToggle">
                    Courses <i class="fas fa-chevron-down dropdown-icon"></i>
                </a>
                <ul class="dropdown-menu">
                    <li class="mobile-only-link"><a href="<?php echo $BASE_URL; ?>/courses/index.php">All Courses</a></li>
                    <li><a href="<?php echo $BASE_URL; ?>/cfi">CFI</a></li>
                    <li><a href="<?php echo $BASE_URL; ?>/cfii">CFII</a></li>
                    <li><a href="<?php echo $BASE_URL; ?>/private-pilot">Private Pilot</a></li>
                    <li><a href="<?php echo $BASE_URL; ?>/commercial">Commercial</a></li>
                    <li><a href="<?php echo $BASE_URL; ?>/instrument-course">Instrument</a></li>
                </ul>
            </li>

            <li><a href="<?php echo $BASE_URL; ?>/contact-us" class="nav-link">Contact</a></li>
        </ul>
    </div>
</header>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const toggleBtn = document.getElementById('mobileToggle');
        const navMenu = document.getElementById('navMenu');
        const dropdownToggle = document.getElementById('mobileDropdownToggle');
        const coursesDropdown = document.getElementById('coursesDropdown');

        // 1. Handle Main Mobile Menu Toggle (Hamburger to X)
        toggleBtn.addEventListener('click', () => {
            toggleBtn.classList.toggle('is-active');
            navMenu.classList.toggle('active');
        });

        // 2. Handle Dropdown Tap on Mobile
        dropdownToggle.addEventListener('click', (e) => {
            // Check if we are on a mobile screen
            if (window.innerWidth <= 768) {
                e.preventDefault(); // Stop it from navigating to the directory page immediately
                coursesDropdown.classList.toggle('mobile-open'); // Trigger the smooth CSS accordion
            }
        });
    });
</script>