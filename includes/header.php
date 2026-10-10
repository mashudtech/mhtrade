<?php
// Default page variables if not set
$pageTitle = isset($pageTitle) ? $pageTitle : 'MH Trade Capital Solutions — B2B Trade Finance, Commodity Sourcing & UAE Banking';
$pageDesc = isset($pageDesc) ? $pageDesc : 'Dubai-based B2B Trade Finance (LC / SBLC), Commodity Sourcing, Project Finance, and UAE Corporate Banking. High-converting global financial infrastructure platform.';
$activePage = isset($activePage) ? $activePage : 'home';
$isHeroViewport = isset($isHeroViewport) ? $isHeroViewport : false;
$pageHeroBg = isset($pageHeroBg) && !empty($pageHeroBg) ? $pageHeroBg : 'images/hero/dubai_hero_bg.png';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo htmlspecialchars($pageTitle); ?></title>
  <meta name="description" content="<?php echo htmlspecialchars($pageDesc); ?>">

  <!-- Favicon -->
  <link rel="icon" type="image/png" href="images/logo/logo-icon.png">

  <!-- Local Font Family: Proxima Nova -->

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

  <!-- Luxury Theme Stylesheet (with automatic cache buster) -->
  <link rel="stylesheet"
    href="css/style.css?v=<?php echo file_exists(__DIR__ . '/../css/style.css') ? filemtime(__DIR__ . '/../css/style.css') : '1.0.0'; ?>">
</head>

<body>

  <!-- Dynamic Canvas Background -->
  <canvas id="bg-canvas"></canvas>

  <script>
    function toggleMobileMenu() {
      var navLinks = document.querySelector('.nav-links');
      var btn = document.getElementById('mobile-nav-toggle');
      if (!navLinks) return;
      if (navLinks.classList.contains('mobile-active')) {
        navLinks.classList.remove('mobile-active');
        if (btn) btn.innerHTML = '<i class="fas fa-bars"></i>';
      } else {
        navLinks.classList.add('mobile-active');
        if (btn) btn.innerHTML = '<i class="fas fa-xmark"></i>';
      }
    }

    function toggleMobileDropdown(e, elem) {
      if (window.innerWidth <= 992) {
        e.preventDefault();
        var navItem = elem.closest('.nav-item');
        var dropdown = navItem ? navItem.querySelector('.dropdown-menu') : null;
        if (dropdown) {
          dropdown.classList.toggle('mobile-open');
        }
      }
    }
  </script>

  <div class="site-wrapper">

    <!-- Main Navigation Header Placeholder Wrapper -->
    <div class="main-header-wrapper">
      <header class="main-header">
        <div class="container navbar">
          <a href="index.php" class="brand-logo-link">
            <div class="brand-logo-img-box">
              <img src="images/logo/main-logo.png" alt="MH Trade Capital Solutions Logo" class="brand-logo-img">
            </div>
          </a>

          <ul class="nav-links">
            <li class="nav-item <?php echo ($activePage === 'home') ? 'active' : ''; ?>"><a href="index.php"
                class="nav-link">Home</a></li>
            <li class="nav-item <?php echo ($activePage === 'about') ? 'active' : ''; ?>"><a href="about-us.php"
                class="nav-link">About Us</a></li>

            <li class="nav-item <?php echo ($activePage === 'solutions') ? 'active' : ''; ?>">
              <a href="solutions.php" onclick="toggleMobileDropdown(event, this)" class="nav-link">Solutions <i class="fas fa-chevron-down"
                  style="font-size: 10px;"></i></a>

              <ul class="dropdown-menu">
                <li class="dropdown-item"><a href="solution-detail.php?id=trade-finance">Trade Finance & Banking
                    Instruments</a></li>
                <li class="dropdown-item"><a href="solution-detail.php?id=uae-banking">UAE Business Setup & Corporate
                    Banking</a></li>
                <li class="dropdown-item"><a href="solution-detail.php?id=project-finance">Project Finance</a></li>
                <li class="dropdown-item"><a href="solution-detail.php?id=commodity-trade">Commodity Trade
                    Solutions</a></li>
                <li class="dropdown-item"><a href="solution-detail.php?id=general-inquiry">General Business
                    Inquiry</a></li>
              </ul>
            </li>

            <li class="nav-item <?php echo ($activePage === 'why-mh') ? 'active' : ''; ?>"><a href="why-mh.php"
                class="nav-link">Why MH</a></li>
            <li class="nav-item <?php echo ($activePage === 'contact') ? 'active' : ''; ?>"><a href="contact.php"
                class="nav-link">Contact</a></li>
          </ul>

          <!-- Mobile Navigation Toggle Button -->
          <button class="mobile-nav-toggle" id="mobile-nav-toggle" onclick="toggleMobileMenu()" aria-label="Toggle navigation menu">
            <i class="fas fa-bars"></i>
          </button>
        </div>
      </header>
    </div>

    <?php if ($isHeroViewport): ?>
      <!-- Combined 100vh Viewport Wrapper (Main Header + Hero Section = 100vh) -->
      <div class="hero-viewport-wrapper" id="hero-viewport"
        style="background-image: url('<?php echo htmlspecialchars($pageHeroBg); ?>');">
        <div class="hero-viewport-overlay"></div>
    <?php endif; ?>