<?php $config = include('../_config.php'); ?>
<?php include('../_tx.php'); ?>

<!DOCTYPE html>
<html lang="<?= $lang ?>" prefix="og: http://ogp.me/ns#">
  <head>
    <?php
    $headInfo = [
      'title'       => tx('success_title'),
      'description' => tx('success_description'),
      'url'         => '',
      'og_img'      => 'https://thebitcoincash.fund/assets/img/bcf_opengraph.jpg'
    ]; ?>
    <?php include($config['include_dir'] . 'head.php'); ?>
    <title><?= tx($config['current_page'] . '_title') . tx('title_post') ?></title>
  </head>
  <body>
    <?php include($config['include_dir'] . 'nav.php'); ?>
    <div class="page-wrap">
      <div class="hero">
        <div class="container">
          <picture>
            <!-- Desktop -->
            <source media="(min-width: 650px)"
                    srcset="<?= $config['svg_dir']; ?>success_hero_desktop.svg" />
            <!-- Mobile -->
            <source srcset="<?= $config['svg_dir']; ?>success_hero_mobile.svg" />
            <img src="<?= $config['svg_dir']; ?>success_hero_desktop.svg" class="img-responsive hero-img" />
          </picture>
          <h1 class="hero-heading"><?= tx('success_heading') ?></h1>
          <p class="hero-lead"><?= tx('success_lead') ?></p>
        </div>
      </div>
      <div class="successChat">
        <div class="container">
          <div class="row">
            <div class="col-md-5 col-md-push-7 successChat-imgCol">
              <img src="<?= $config['svg_dir']; ?>success_chat.svg" class="img-responsive successChat-img"></div>
            <div class="col-md-7 col-md-pull-5 successChat-txtCol">
    <h3 class="successChat-heading"><?= tx('success_chat_title') ?></h3>
              <?= tx('success_chat_text') ?>
              <a href="https://chat.thebitcoincash.fund/" target="_blank" class="btn btn-lg successChat-btn"><?= tx('success_chat_join_button') ?></a>
            </div>
          </div>
        </div>
      </div>
      <?php include($config['include_dir'] . 'footer.php'); ?>
    </div>
  </body>
</html>
