<?php
require_once 'includes/solutions_data.php';

$allSolutions = getSolutionsData();
$id = isset($_GET['id']) && isset($allSolutions[$_GET['id']]) ? $_GET['id'] : 'trade-finance';
$sol = $allSolutions[$id];

$pageTitle = $sol['title'] . " | MH Trade Capital Solutions Dubai";
$pageDesc = $sol['shortDesc'];
$activePage = "solutions";
$pageHeroBg = !empty($sol['image']) ? $sol['image'] : 'images/hero/dubai_hero_bg.png';
include 'includes/header.php';
?>

<!-- Page Hero Banner -->
<section class="page-hero-section" style="background-image: linear-gradient(180deg, rgba(7, 15, 30, 0.40) 0%, rgba(10, 25, 47, 0.40) 100%), url('<?php echo htmlspecialchars($pageHeroBg); ?>');">
  <div class="container">
    <div class="hero-tag" style="margin: 0 0 16px; display: inline-flex;">
      <i class="fas fa-layer-group"></i> Solution <?php echo $sol['num']; ?> — <?php echo htmlspecialchars($sol['title']); ?>
    </div>
    
    <h1 class="page-hero-title" style="max-width: 920px; margin: 0 0 20px;">
      <?php echo $sol['heroHeadline']; ?>
    </h1>

    <div style="background: rgba(212, 175, 55, 0.1); border: 1px solid var(--border-gold); padding: 8px 22px; border-radius: 30px; display: inline-block; color: var(--gold-primary); font-size: 13px; font-weight: 600; margin-bottom: 24px; max-width: 900px;">
      <i class="fas fa-tags"></i> <?php echo htmlspecialchars($sol['badge']); ?>
    </div>

    <p class="page-hero-desc" style="max-width: 840px;">
      <?php echo htmlspecialchars(!empty($sol['overview']) ? $sol['overview'] : $sol['shortDesc']); ?>
    </p>

    <div style="display: flex; gap: 16px; justify-content: flex-start; flex-wrap: wrap; margin-top: 24px;">
      <button class="btn-gold open-inquiry-modal" data-vertical="<?php echo htmlspecialchars($id); ?>">
        <i class="fas fa-paper-plane"></i> Submit Requirement
      </button>
      <a href="solutions.php" class="btn-outline-gold">
        <i class="fas fa-list"></i> Browse All Solutions
      </a>
    </div>
  </div>
</section>

<!-- Main Detail Content -->
<main class="container" style="padding: 70px 24px; max-width: 1240px;">

  <!-- Executive Overview Section -->
  <section style="margin-bottom: 60px;">
    <div class="section-subtitle">Overview & Framework</div>
    <h2 style="font-size: 32px; color: #FFFFFF; font-weight: 800; font-family: 'Outfit', sans-serif; margin-bottom: 20px;">
      <?php echo htmlspecialchars($sol['title']); ?>
    </h2>

    <p style="font-size: 17px; color: #E2E8F0; line-height: 1.8; margin-bottom: 24px;">
      <?php echo htmlspecialchars($sol['overview']); ?>
    </p>

    <?php if (isset($sol['processText'])): ?>
      <div style="border-left: 3px solid var(--gold-primary); padding-left: 20px; margin: 28px 0;">
        <p style="font-size: 16px; color: #FFFFFF; line-height: 1.75; font-style: italic; margin: 0;">
          <?php echo htmlspecialchars($sol['processText']); ?>
        </p>
      </div>
    <?php endif; ?>

    <?php if (isset($sol['highlightBanner'])): ?>
      <div style="border-left: 3px solid var(--gold-primary); padding-left: 20px; margin: 28px 0;">
        <h3 style="font-size: 20px; color: var(--gold-primary); font-weight: 700; margin: 0; line-height: 1.4;">
          <i class="fas fa-check-circle"></i> <?php echo htmlspecialchars($sol['highlightBanner']); ?>
        </h3>
      </div>
    <?php endif; ?>
  </section>

  <hr style="border: none; border-top: 1px solid rgba(255, 255, 255, 0.1); margin: 50px 0;">

  <!-- Paragraph-by-Paragraph Capability Details Section (3-Card Grid Layout) -->
  <section style="margin-bottom: 70px;">
    <div class="section-subtitle">Detailed Breakdown</div>
    <h2 class="section-title" style="font-size: 30px; margin-bottom: 40px;">Structured Specifications</h2>

    <div class="solution-breakdown-grid">
      <?php foreach ($sol['items'] as $item): ?>
        <article class="solution-item-card">
          <!-- Card Header: Title & Subtitle -->
          <div class="solution-card-header">
            <h3 class="solution-card-title"><?php echo htmlspecialchars($item['title']); ?></h3>
            <h4 class="solution-card-subtitle"><?php echo htmlspecialchars($item['subtitle']); ?></h4>
          </div>

          <!-- Card Body: Description & Details -->
          <div class="solution-card-body">
            <p class="solution-card-desc"><?php echo htmlspecialchars($item['desc']); ?></p>

            <?php if (!empty($item['details'])): ?>
              <p class="solution-card-details"><?php echo htmlspecialchars($item['details']); ?></p>
            <?php endif; ?>

            <!-- Card Footer: Summary Box -->
            <?php if (!empty($item['summary'])): ?>
              <div class="solution-card-summary">
                <strong style="color: var(--gold-primary); font-style: normal;">Summary:</strong> <?php echo htmlspecialchars(str_replace('In simple terms: ', '', $item['summary'])); ?>
              </div>
            <?php endif; ?>
          </div>
        </article>
      <?php endforeach; ?>
    </div>
  </section>

  <hr style="border: none; border-top: 1px solid rgba(255, 255, 255, 0.1); margin: 50px 0;">

  <!-- Regulatory Compliance & Disclaimer Text Block -->
  <section style="margin-bottom: 60px;">
    <h4 style="font-size: 16px; color: var(--gold-primary); text-transform: uppercase; letter-spacing: 1px; margin-bottom: 14px; display: flex; align-items: center; gap: 10px;">
      <i class="fas fa-shield-halved"></i> Transaction Compliance & Disclaimer
    </h4>
    <p style="font-size: 14px; color: var(--text-muted); line-height: 1.7; margin-bottom: 12px;">
      All financial, banking and trade finance solutions are subject to transaction assessment, KYC/AML and sanctions screening, due diligence, applicable laws and regulations, and the final approval of the relevant bank, financial institution or funding party.
    </p>
    <p style="font-size: 14px; color: var(--text-muted); line-height: 1.7; margin: 0;">
      MH Trade Capital Solutions does not guarantee the issuance, acceptance or approval of any financial instrument, financing facility or banking solution.
    </p>
  </section>

  <!-- Bottom Action CTA -->
  <div style="text-align: center; padding: 40px 0 20px;">
    <h2 style="font-size: 28px; color: #FFFFFF; margin-bottom: 14px;">Structure Your <?php echo htmlspecialchars($sol['title']); ?> Requirement</h2>
    <p style="color: var(--text-muted); font-size: 16px; margin-bottom: 24px;">Submit your requirement parameters directly to our Dubai operational desk to receive your tracking Request ID.</p>
    <button class="btn-gold open-inquiry-modal" data-vertical="<?php echo htmlspecialchars($id); ?>" style="font-size: 15px; padding: 16px 36px;">
      <i class="fas fa-paper-plane"></i> Submit Requirement Desk
    </button>
  </div>

</main>

<?php include 'includes/footer.php'; ?>
