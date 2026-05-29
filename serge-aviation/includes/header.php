<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>G Force Academy</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<header class="header-nav">
    <div class="nav-container">
        <a href="../index.php" class="logo">
            <img src="../images/logo.png" alt="G Force Academy">
        </a>

        <button class="mobile-toggle" id="mobileToggle" aria-label="Toggle navigation">
            <span class="hamburger-line"></span>
            <span class="hamburger-line"></span>
            <span class="hamburger-line"></span>
        </button>

        <ul class="nav-menu" id="navMenu">
            <li><a href="../" class="nav-link">Home</a></li>
            <li><a href="../about" class="nav-link">About</a></li>
            
            <li class="dropdown" id="coursesDropdown">
                <a href="../courses/index.php" class="nav-link" id="mobileDropdownToggle">
                    Courses <i class="fas fa-chevron-down dropdown-icon"></i>
                </a>
                <ul class="dropdown-menu">
                    <li class="mobile-only-link"><a href="../courses">All Courses</a></li>
                    <li><a href="../cfi">CFI</a></li>
                    <li><a href="../cfii">CFII</a></li>
                    <li><a href="../private-pilot">Private Pilot</a></li>
                    <li><a href="../commercial">Commercial</a></li>
                    <li><a href="../instrument-course">Instrument</a></li>
                </ul>
            </li>

            <li><a href="../contact-us" class="nav-link">Contact</a></li>
        </ul>
    </div>
</header>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const toggleBtn = document.getElementById('mobileToggle');
        const navMenu = document.getElementById('navMenu');
        const dropdownToggle = document.getElementById('mobileDropdownToggle');
        const coursesDropdown = document.getElementById('coursesDropdown');

        // 1. Handle Main Mobile Menu Toggle
        toggleBtn.addEventListener('click', () => {
            toggleBtn.classList.toggle('is-active');
            navMenu.classList.toggle('active');
        });

        // 2. Handle Dropdown Tap on Mobile
        dropdownToggle.addEventListener('click', (e) => {
            // Check if we are on a mobile screen
            if (window.innerWidth <= 768) {
                e.preventDefault(); // Stop it from navigating immediately
                coursesDropdown.classList.toggle('mobile-open');
            }
        });
    });
</script>

