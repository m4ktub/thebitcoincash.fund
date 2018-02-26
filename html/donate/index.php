<?php $config = include('../_config.php'); ?>
<?php include('../_tx.php'); ?>

<!DOCTYPE html>
<html lang="<?= $lang ?>" prefix="og: http://ogp.me/ns#">
  <head>
    <?php
    $headInfo = [
      'title'       => tx('donate_title'),
      'description' => tx('donate_description'),
      'url'         => '',
      'og_img'      => 'https://thebitcoincash.fund/assets/img/bcf_opengraph.jpg'
    ]; ?>
    <?php include($config['include_dir'] . 'head.php'); ?>
    <title><?= tx($config['current_page'] . '_title') . tx('title_post') ?></title>
    <script>
      $().ready(function() {
        var clipboard = new Clipboard('.donateAddress-btn');
        clipboard.on('success', function(e) {
          $('.donateAddress-btn').addClass('donateAddress-btn-success');
          setTimeout(function () {
            $(".donateAddress-btn").removeClass("donateAddress-btn-success");
          },1000);
          console.log(e);
        });
        clipboard.on('error', function(e) {
          console.log(e);
        });
      });
    </script>
  </head>
  <body>
    <?php include($config['include_dir'] . 'nav.php'); ?>
    <div class="page-wrap">
      <div class="hero">
        <div class="container">
          <picture>
            <!-- Desktop -->
            <source media="(min-width: 650px)"
                    srcset="<?= $config['svg_dir']; ?>donate_hero_desktop.svg" />
            <!-- Mobile -->
            <source srcset="<?= $config['svg_dir']; ?>donate_hero_mobile.svg" />
            <img src="<?= $config['svg_dir']; ?>donate_hero_desktop.svg" class="img-responsive hero-img" />
          </picture>
          <h1 class="hero-heading"><?= tx('donate_heading') ?></h1>
          <p class="hero-lead"><?= tx('donate_lead') ?></p>
        </div>
      </div>
      <div class="donate">
        <div class="container donate-wrapper">
          <div class="row donateQr-wrapper">
            <div class="col-md-8">
              <h2><?= tx('donate_address_title') ?></h2>
              <span class="border-white"></span>
              <p class="donate-text"><?= tx('donate_address_text') ?></p>
            </div>
            <div class="col-md-4">
              <img src="<?= $config['img_dir']; ?>qr_code.png" class="img-responsive donate-qr">
            </div>
          </div>
          <div class="donateAddress">
            <div class="donateAddress-address">
              <span class="donateAddress-addressSpan">bitcoincash:pzyjepg4rmm8yx8v0sc6svac255ta2md2y9l0edptq</span>
            </div>
            <div class="donateAddress-btn" data-clipboard-target=".donateAddress-addressSpan">
              <div class="donateAddress-btnInner">
                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" class="donateAddress-copyBtn">
                  <path d="M16 8v8H8v4h12V8h-4zm0-2h6v16H6v-6H0V0h16v6zM2 2v12h12V2H2z"></path>
                </svg>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="donateTrans">
        <div class="container">
          <div class="row">
            <div class="col-md-5 col-md-push-7 donateTrans-imgCol">
              <img src="<?= $config['svg_dir']; ?>donate_transparency.svg" class="img-responsive donateTrans-img"></div>
            <div class="col-md-7 col-md-pull-5 donateTrans-txtCol">
              <h3 class="donateTrans-heading"><?= tx('donate_transparency_title') ?></h3>
              <?= tx('donate_transparency_text') ?>
              <a href="#" class="btn btn-lg donateTrans-btn"><?= tx('donate_explore_address_button') ?></a>
            </div>
          </div>
        </div>
      </div>
      <?php include($config['include_dir'] . 'footer.php'); ?>
    </div>
  </body>
</html>
