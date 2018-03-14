<?php $config = include('../_config.php'); ?>
<?php include('../_tx.php'); ?>

<!DOCTYPE html>
<html lang="<?= $lang ?>" prefix="og: http://ogp.me/ns#">
  <head>
    <?php
    $headInfo = [
      'title'       => tx('about_title'),
      'description' => tx('about_description'),
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
                    srcset="<?= $config['svg_dir']; ?>about_hero_desktop.svg" />
            <!-- Mobile -->
            <source srcset="<?= $config['svg_dir']; ?>about_hero_mobile.svg" />
            <img src="<?= $config['svg_dir']; ?>about_hero_desktop.svg" class="img-responsive hero-img" />
          </picture>
          <h1 class="hero-heading"><?= tx('about_heading') ?></h1>
          <p class="hero-lead"><?= tx('about_lead') ?></p>
        </div>
      </div>
      <div class="hero-subhead">
        <div class="container">
          <div class="row">
            <div class="col-xs-12">
              <p><?= tx('about_subhead') ?></p>
            </div>
          </div>
        </div>
      </div>
      <div class="aboutTrust">
        <div class="container">
          <div class="row">
            <div class="col-md-5 aboutTrust-imgCol">
              <img src="<?= $config['svg_dir']; ?>about_trust.svg" class="img-responsive aboutTrust-img"></div>
            <div class="col-md-7 aboutTrust-txtCol">
              <h3 class="aboutTrust-heading"><?= tx('about_trust_title') ?></h3>
              <?= tx('about_trust_text') ?>
            </div>
          </div>
        </div>
      </div>
      <div class="aboutExec">
        <div class="container">
          <h2><?= tx('about_board_title') ?></h2>
          <span class="border"></span>
          <div class="row">
            <div class="col-sm-4 col-md-4">
              <div class="aboutTeam-wrapper">
                <img src="<?= $config['img_dir']; ?>team_ian_descoteaux.jpg" class="img-responsive aboutTeam-photo">
                <p class="aboutTeam-name">Ian Descôteaux</p>
                <p class="aboutTeam-role"><?= tx('about_role_member') ?></p>
                <p class="aboutTeam-bio"><?= tx('about_bio_ian') ?></p>
                <p class="aboutTeam-social">
                  <a href="https://twitter.com/checksum0" target="_blank">@checksum0</a>
                </p>
              </div>
            </div>
            <div class="col-sm-4 col-md-4">
              <div class="aboutTeam-wrapper">
                <img src="<?= $config['img_dir']; ?>team_paul_wasensteiner.jpg" class="img-responsive aboutTeam-photo">
                <p class="aboutTeam-name">Paul Wasensteiner</p>
                <p class="aboutTeam-role"><?= tx('about_role_member') ?></p>
                <p class="aboutTeam-bio"><?= tx('about_bio_paul') ?></p>
                <p class="aboutTeam-social">
                  <a href="https://twitter.com/PWasensteiner" target="_blank">@PWasensteiner</a>
                </p>
              </div>
            </div>
            <div class="col-sm-4 col-md-4">
              <div class="aboutTeam-wrapper">
                <img src="<?= $config['img_dir']; ?>team_haipo_yang.jpg" class="img-responsive aboutTeam-photo">
                <p class="aboutTeam-name">Haipo Yang</p>
                <p class="aboutTeam-role"><?= tx('about_role_member') ?></p>
                <p class="aboutTeam-bio"><?= tx('about_bio_haipoyang') ?></p>
                <p class="aboutTeam-social">
                  <a href="https://twitter.com/yhaiyang" target="_blank">@yhaiyang</a>
                </p>
              </div>
            </div>
            <div class="clearfix visible-md visible-lg"></div>
          </div>
        </div>
      </div>
      <div class="aboutTeam">
        <div class="container">
          <h2><?= tx('about_team_title') ?></h2>
          <span class="border"></span>
          <div class="row">
            <div class="col-sm-4 col-md-4">
              <div class="aboutTeam-wrapper">
                <img src="<?= $config['img_dir']; ?>team_paul_wasensteiner.jpg" class="img-responsive aboutTeam-photo">
                <p class="aboutTeam-name">Paul Wasensteiner</p>
                <p class="aboutTeam-role"><?= tx('about_role_executive_director') ?></p>
              </div>
            </div>
            <div class="col-sm-4 col-md-4">
              <div class="aboutTeam-wrapper">
                <img src="<?= $config['img_dir']; ?>team_ian_descoteaux.jpg" class="img-responsive aboutTeam-photo">
                <p class="aboutTeam-name">Ian Descôteaux</p>
                <p class="aboutTeam-role"><?= tx('about_role_technical_director') ?></p>
              </div>
            </div>
            <div class="col-sm-4 col-md-4">
              <div class="aboutTeam-wrapper">
                <img src="<?= $config['img_dir']; ?>team_monica_rea.jpg" class="img-responsive aboutTeam-photo">
                <p class="aboutTeam-name">Monica Rea</p>
                <p class="aboutTeam-role"><?= tx('about_role_event_coordinator') ?></p>
              </div>
            </div>
            <div class="clearfix visible-sm visible-md visible-lg"></div>
            <div class="col-sm-4 col-md-4">
              <div class="aboutTeam-wrapper">
                <img src="<?= $config['img_dir']; ?>team_aron_levi.jpg" class="img-responsive aboutTeam-photo">
                <p class="aboutTeam-name">Aron Levi</p>
                <p class="aboutTeam-role"><?= tx('about_role_sales_business_dev') ?></p>
              </div>
            </div>
            <div class="col-sm-4 col-md-4">
              <div class="aboutTeam-wrapper">
                <img src="<?= $config['img_dir']; ?>team_george_samuels.jpg" class="img-responsive aboutTeam-photo">
                <p class="aboutTeam-name">George Samuels</p>
                <p class="aboutTeam-role"><?= tx('about_role_community_manager') ?></p>
              </div>
            </div>
            <div class="clearfix visible-md visible-lg"></div>
          </div>
        </div>
      </div>
      <div class="aboutAdvisors">
        <div class="container">
          <h2></h2>
          <span class="border"></span>
          <div class="row">
            <div class="col-sm-6 col-lg-3">
              <div class="aboutTeam-wrapper"> <img src="<?= $config['img_dir']; ?>team_jack_liu.jpg" class="img-responsive aboutTeam-photo">
                <p class="aboutTeam-name">Jack C. Liu</p>
                <p class="aboutTeam-bio"><?= tx('about_bio_jackcliu') ?></p>
                <p class="aboutTeam-social">
                  <a href="https://twitter.com/liujackc" target="_blank">@liujackc</a>
                </p>
              </div>
            </div>
            <div class="col-sm-6 col-lg-3">
              <div class="aboutTeam-wrapper"><img src="<?= $config['img_dir']; ?>team_roger_ver.jpg" class="img-responsive aboutTeam-photo">
                <p class="aboutTeam-name">Roger Ver</p>
                <p class="aboutTeam-bio"><?= tx('about_bio_rogerver') ?></p>
                <p class="aboutTeam-social">
                  <a href="https://twitter.com/rogerkver" target="_blank">@rogerkver</a>
                </p>
              </div>
            </div>
            <div class="clearfix visible-sm visible-md"></div>
            <div class="col-sm-6 col-lg-3">
              <div class="aboutTeam-wrapper"><img src="<?= $config['img_dir']; ?>team_peter_rizun.jpg" class="img-responsive aboutTeam-photo">
                <p class="aboutTeam-name">Dr. Peter R. Rizun</p>
                <p class="aboutTeam-bio"><?= tx('about_bio_peterrizun') ?></p>
                <p class="aboutTeam-social">
                  <a href="https://twitter.com/peterrizun" target="_blank">@peterrizun</a>
                </p>
              </div>
            </div>
            <div class="col-sm-6 col-lg-3">
              <div class="aboutTeam-wrapper"><img src="<?= $config['img_dir']; ?>team_mike_komaransky.jpg" class="img-responsive aboutTeam-photo">
                <p class="aboutTeam-name">Mike Komaransky</p>
                <p class="aboutTeam-bio"><?= tx('about_bio_mikekomaransky') ?></p>
                <p class="aboutTeam-social">
                  <a href="https://twitter.com/mkomaransky" target="_blank">@mkomaransky</a>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php include($config['include_dir'] . 'footer.php'); ?>
    </div>
  </body>
</html>
