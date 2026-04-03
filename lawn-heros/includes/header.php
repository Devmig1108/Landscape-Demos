<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php echo $pageTitle ?? "Lawn Heros | Expert Weed Control & Lawn Care in El Paso, TX"; ?></title>
    <meta name="description" content="<?php echo $pageDescription ?? "El Paso's premier family-owned weed control and lawn care company."; ?>">

    <?php if (isset($schemaJson)): ?>
        <script type="application/ld+json">
            <?php echo $schemaJson; ?>
        </script>
    <?php endif; ?>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Montserrat:ital,wght@0,600;0,700;0,800;0,900;1,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <link rel="stylesheet" href="<?php echo $basePath; ?>css/style.css">
    <link rel="icon" type="image/png" href="<?php echo $basePath; ?>images/logo.png">
</head>

<body>

    <div class="utility-strip">
        <div class="utility-container">
            <div class="utility-info">
                <span><i class="fas fa-map-marker-alt"></i> Proudly Serving El Paso, TX</span>
                <span><i class="fas fa-users"></i> Father & Sons Company</span>
            </div>
            <div class="utility-contact">
                <span><i class="fas fa-phone-alt"></i> Fast, Dependable Quotes: <a href="tel:9150000000" style="color: #FFF; text-decoration: none;">(915) 000-0000</a></span>
            </div>
        </div>
    </div>

    <nav class="nav-header" id="navbar">
        <div class="container nav-wrapper">
            <a href="<?php echo $basePath; ?>index.php" class="brand-logo">
                <img src="<?php echo $basePath; ?>images/logo.png" alt="Lawn Heros Logo" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                <div class="logo-text" style="display: none;">
                    <span class="title">LAWN HEROS</span>
                    <span class="subtitle">Father & Sons Company</span>
                </div>
            </a>

            <div class="nav-controls">
                <button id="theme-toggle" class="theme-toggle" aria-label="Toggle Light/Dark Mode">
                    <i class="fas fa-moon"></i>
                </button>

                <input type="checkbox" id="menu-toggle">
                <label for="menu-toggle" class="hamburger">
                    <span></span><span></span><span></span>
                </label>

                <div class="nav-links">
                    <a href="<?php echo $basePath; ?>index.php">Home</a>
                    <a href="<?php echo $basePath; ?>about/index.php">About Us</a>

                    <div class="dropdown">
                        <button class="dropbtn">Services <i class="fas fa-chevron-down"></i></button>
                        <div class="dropdown-content">
                            <a href="<?php echo $basePath; ?>weed-control-el-paso/index.php">Weed Control</a>
                            <a href="<?php echo $basePath; ?>lawn-care-el-paso/index.php">Lawn Care</a>
                        </div>
                    </div>

                    <a href="<?php echo $basePath; ?>contact/index.php">Contact Us</a>
                    <a href="tel:9150000000" class="btn-primary">Call Now</a>
                </div>
            </div>
        </div>
    </nav>