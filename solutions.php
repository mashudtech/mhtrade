<?php
require_once 'includes/solutions_data.php';

$allSolutions = getSolutionsData();

$pageTitle = "Our Core Capabilities & Solutions | MH Trade Capital Solutions Dubai";
$pageDesc = "Explore all 5 core business capabilities of MH Trade Capital Solutions — Trade Finance, UAE Corporate Banking, Project Finance, Commodity Sourcing, and General Business Procurement.";
$activePage = "solutions";
$pageHeroBg = "images/hero/dubai_hero_bg.png";
include 'includes/header.php';
?>

<!-- Page Hero Banner -->
<section class="page-hero-section" style="background-image: linear-gradient(180deg, rgba(7, 15, 30, 0.40) 0%, rgba(10, 25, 47, 0.40) 100%), url('<?php echo htmlspecialchars($pageHeroBg); ?>');">
  <div class="container">
    <div class="hero-tag" style="margin: 0 0 16px; display: inline-flex;">
      <i class="fas fa-layer-group"></i> Institutional Financial Capabilities
    </div>
    <h1 class="page-hero-title">Core Business Verticals &<br><span style="color: var(--gold-primary);">Capital Solutions</span></h1>
    <p class="page-hero-desc">
      Specialized business divisions tailored for global buyers, sellers, corporations, and institutional projects from Dubai, United Arab Emirates.
    </p>
    <div style="display: flex; gap: 16px; justify-content: flex-start; flex-wrap: wrap;">
      <button class="btn-gold open-inquiry-modal" data-vertical="general">
        <i class="fas fa-paper-plane"></i> Submit Requirement Desk
      </button>
      <a href="how-it-works.php" class="btn-outline-gold">
        <i class="fas fa-gears"></i> Explore Execution Pipeline
      </a>
    </div>
  </div>
</section>

<!-- Main Grid Listing -->
<main class="container" style="padding: 70px 24px;">

  <div class="section-header text-center" style="margin-bottom: 50px;">
    <div class="section-subtitle">Capability Directory</div>
    <h2 class="section-title">5 Core Financial & Sourcing Verticals</h2>
    <p class="section-desc">Select any capability below to view its complete instrument specifications, commercial frameworks, and execution terms.</p>
  </div>

  <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(350px, 1fr)); gap: 32px; margin-bottom: 70px;">
    <?php foreach ($allSolutions as $solId => $sol): ?>
      <a href="solution-detail.php?id=<?php echo htmlspecialchars($solId); ?>" class="vertical-card" style="text-decoration: none; display: flex; flex-direction: column; cursor: pointer;">
        <div class="v-card-img-wrapper">
          <img src="<?php echo htmlspecialchars($sol['image']); ?>" alt="<?php echo htmlspecialchars($sol['title']); ?>" class="v-card-img">
          <div class="v-card-badge"><?php echo htmlspecialchars($sol['num']); ?> — Solution</div>
        </div>
        <div class="v-card-body" style="display: flex; flex-direction: column; flex: 1; justify-content: space-between;">
          <div>
            <h3 class="v-title" style="font-size: 22px; margin-bottom: 12px; color: #FFFFFF;">
              <?php echo htmlspecialchars($sol['title']); ?>
            </h3>
            
            <div style="margin-bottom: 14px; display: flex; flex-wrap: wrap; gap: 6px;">
              <?php foreach ($sol['tags'] as $tag): ?>
                <span style="font-size: 11px; background: rgba(212, 175, 55, 0.1); border: 1px solid rgba(212, 175, 55, 0.25); color: var(--gold-primary); padding: 3px 10px; border-radius: 12px; font-weight: 600;">
                  <?php echo htmlspecialchars($tag); ?>
                </span>
              <?php endforeach; ?>
            </div>

            <p class="v-desc" style="font-size: 14.5px; color: var(--text-muted); line-height: 1.65; margin-bottom: 20px;">
              <?php echo htmlspecialchars($sol['shortDesc']); ?>
            </p>
          </div>

          <div style="display: flex; align-items: center; gap: 8px; color: var(--gold-primary); font-weight: 700; font-size: 14px; border-top: 1px solid rgba(255, 255, 255, 0.08); padding-top: 16px;">
            <span>Explore Full Capability Specs</span>
            <i class="fas fa-arrow-right"></i>
          </div>
        </div>
      </a>
    <?php endforeach; ?>
  </div>

  <!-- Regulatory Compliance Notice -->
  <div style="background: rgba(15, 23, 42, 0.85); border: 1px solid var(--border-gold); border-radius: 18px; padding: 32px 36px; margin-bottom: 60px; backdrop-filter: blur(14px); box-shadow: var(--shadow-dark);">
    <h4 style="font-size: 17px; color: var(--gold-primary); text-transform: uppercase; letter-spacing: 1px; margin-bottom: 14px; display: flex; align-items: center; gap: 10px;">
      <i class="fas fa-shield-halved"></i> Disclaimer & Assessment Criteria
    </h4>
    <p style="font-size: 14px; color: var(--text-muted); line-height: 1.65; margin-bottom: 0;">
      All financial, banking and trade finance solutions are subject to transaction assessment, KYC/AML and sanctions screening, due diligence, applicable laws and regulations, and the final approval of the relevant bank, financial institution or funding party.
    </p>
  </div>

  <!-- Bottom CTA -->
  <div style="text-align: center; padding: 20px 0 20px;">
    <h2 style="font-size: 30px; color: #FFFFFF; margin-bottom: 14px;">Ready to Structure Your Requirement?</h2>
    <p style="color: var(--text-muted); font-size: 16px; margin-bottom: 24px;">Connect directly with our Dubai desk specialists to submit your financial parameters.</p>
    <button class="btn-gold open-inquiry-modal" data-vertical="general" style="font-size: 15px; padding: 16px 36px;">
      <i class="fas fa-paper-plane"></i> Submit Requirement Desk
    </button>
  </div>

</main>

<?php include 'includes/footer.php'; ?>
