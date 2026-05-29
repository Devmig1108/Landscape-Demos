<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>G Force Academy</title>
    <!-- FontAwesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>

<header class="header-nav">
    <div class="nav-container">
        <a href="../index.php" class="logo">
            <img src="../images/logo.png" alt="G Force Academy">
        </a>

        <div class="mobile-toggle" onclick="toggleMenu()">
            <i class="fas fa-bars"></i>
        </div>

        <ul class="nav-menu" id="navMenu">
            <li><a href="../" class="nav-link">Home</a></li>
            <li><a href="../about" class="nav-link">About</a></li>
            
            <li class="dropdown">
                <a href="../courses/index.php" class="nav-link">Courses <i class="fas fa-chevron-down" style="font-size: 0.7rem;"></i></a>
                <ul class="dropdown-menu">
                    <li><a href="../cfi">CFI</a></li>
                    <li><a href="../cfii">CFII</a></li>
                    <li><a href="../private-pilot">Private Pilot</a></li>
                    <li><a href="../commercial">Commercial</a></li>
                    <li><a href="../instrument-course">Instrument</a></li>
                    <!-- <li><a href="../courses/multi-engine.php">Multi Engine</a></li> -->
                </ul>
            </li>

            <li><a href="../contact-us" class="nav-link">Contact</a></li>
        </ul>
    </div>
</header>

<script>
    function toggleMenu() {
        document.getElementById('navMenu').classList.toggle('active');
    }
</script>