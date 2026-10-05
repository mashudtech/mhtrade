<?php
// Default page variables if not set
$pageTitle = isset($pageTitle) ? $pageTitle : 'MH Trade Capital Solutions — B2B Trade Finance, Commodity Sourcing & UAE Banking';
$pageDesc = isset($pageDesc) ? $pageDesc : 'Dubai-based B2B Trade Finance (LC / SBLC), Commodity Sourcing, Project Finance, and UAE Corporate Banking. High-converting global financial infrastructure platform.';
$activePage = isset($activePage) ? $activePage : 'home';
$isHeroViewport = isset($isHeroViewport) ? $isHeroViewport : false;
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo htmlspecialchars($pageTitle); ?></title>
  <meta name="description" content="<?php echo htmlspecialchars($pageDesc); ?>">

  <!-- Favicon -->
  <link rel="icon" type="image/png" href="images/logo/MH-logo-icon-512.png">

  <!-- Google Fonts: Outfit (Brand Logo) & Inter (Body) -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Outfit:wght@500;600;700;800;900&display=swap"
    rel="stylesheet">

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

  <!-- Luxury Theme Stylesheet -->
  <link rel="stylesheet" href="css/style.css">
</head>

<body>

  <!-- Dynamic Canvas Background -->
  <canvas id="bg-canvas"></canvas>

  <div class="site-wrapper">

    <?php if ($isHeroViewport): ?>
      <!-- Combined 100vh Viewport Wrapper (Top Bar + Header + Hero Section = 100vh) -->
      <div class="hero-viewport-wrapper" id="hero-viewport"
        style="background-image: url('images/hero/dubai_hero_bg.png');">
        <div class="hero-viewport-overlay"></div>
      <?php endif; ?>

      <!-- Top Contact Bar -->
      <div class="top-bar">
        <div class="container top-bar-content">
          <div class="top-bar-left">
            <div class="top-item">
              <i class="fas fa-location-dot"></i>
              <span>Dubai International Financial Centre (DIFC) & DWTC, UAE</span>
            </div>
            <div class="top-item">
              <i class="fas fa-envelope"></i>
              <a href="mailto:contact@mhtradecap.com">contact@mhtradecap.com</a>
            </div>
            <div class="top-item">
              <i class="fab fa-whatsapp" style="color: #25D366;"></i>
              <a href="https://wa.me/?text=Hello%20MH%20Trade%20Capital%20Solutions%20Team" target="_blank">+971 50 000
                0000 (Dubai Direct Desk)</a>
            </div>
          </div>

          <div class="top-bar-right">
            <button class="btn-gold open-inquiry-modal btn-topbar" data-vertical="general">
              <i class="fas fa-paper-plane"></i> Submit Requirement
            </button>
          </div>
        </div>
      </div>

      <!-- Main Navigation Header Placeholder Wrapper -->
      <div class="main-header-wrapper">
        <header class="main-header">
          <div class="container navbar">
            <a href="index.php" class="brand-logo-link">
              <div class="brand-logo-img-box">
                <img src="images/logo/MH-logo-icon-512.png" alt="MH Trade Capital Solutions Logo"
                  class="brand-logo-img">
              </div>
              <div class="brand-logo-text">
                <span class="brand-logo-row1">MH TRADE CAPITAL</span>
                <span class="brand-logo-row2">SOLUTIONS</span>
              </div>
            </a>

            <ul class="nav-links">
              <li class="nav-item <?php echo ($activePage === 'home') ? 'active' : ''; ?>"><a href="index.php"
                  class="nav-link">Home</a></li>
              <li class="nav-item <?php echo ($activePage === 'about') ? 'active' : ''; ?>"><a href="about-us.php"
                  class="nav-link">About Us</a></li>

              <li class="nav-item">
                <a href="index.php#verticals" class="nav-link">Business Verticals <i class="fas fa-chevron-down"
                    style="font-size: 10px;"></i></a>
                <ul class="dropdown-menu">
                  <li class="dropdown-item"><a href="index.php#verticals" class="open-inquiry-modal"
                      data-vertical="lc">Trade Finance (LC / SBLC / BG)</a></li>
                  <li class="dropdown-item"><a href="index.php#verticals" class="open-inquiry-modal"
                      data-vertical="commodity">Commodity Sourcing (Energy/Agri/Metals)</a></li>
                  <li class="dropdown-item"><a href="index.php#verticals" class="open-inquiry-modal"
                      data-vertical="project">Project & Infrastructure Finance</a></li>
                  <li class="dropdown-item"><a href="index.php#verticals" class="open-inquiry-modal"
                      data-vertical="uae-banking">UAE Business & Corporate Banking</a></li>
                </ul>
              </li>

              <li class="nav-item <?php echo ($activePage === 'how-it-works') ? 'active' : ''; ?>"><a
                  href="how-it-works.php" class="nav-link">How It Works</a></li>
              <li class="nav-item"><a href="index.php#why-mh" class="nav-link">Dubai Advantage</a></li>
              <li class="nav-item"><a href="index.php#contact" class="nav-link">Contact Desk</a></li>
            </ul>
          </div>
        </header>
      </div>