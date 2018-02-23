<?php $config = include('_config.php'); ?>
<?php include('_tx.php'); ?>

<!DOCTYPE html>
<html lang="<?= $lang ?>" prefix="og: http://ogp.me/ns#">
  <head>
    <?php
    $headInfo = [
      'title'       => tx('home_title'),
      'description' => tx('home_description'),
      'url'         => 'https://thebitcoincash.fund',
      'og_img'      => 'https://thebitcoincash.fund/assets/img/bcf_opengraph.jpg'
    ]; ?>
    <?php include($config['include_dir'] . 'head.php'); ?>
    <title><?= tx($config['current_page'] . '_title') ?></title>
  </head>
  <body>
    <?php include($config['include_dir'] . 'nav.php'); ?>
    <div class="page-wrap">
      <div class="homeHero">
        <div class="container">
          <div class="row">
            <div class="col-xs-12">
              <picture>
                <!-- Desktop -->
                <source media="(min-width: 768px)"
                        srcset="<?= $config['svg_dir']; ?>home_hero_desktop.svg" />
                <!-- Mobile -->
                <source srcset="<?= $config['svg_dir']; ?>home_hero_mobile.svg" />
                <img src="<?= $config['svg_dir']; ?>home_hero_desktop.svg" class="img-responsive heroImg homeHero-img" />
              </picture>
              <h1 class="homeHero-title"><?= tx('home_title') ?></h1>
              <p class="homeHero-lead"><?= tx('home_lead') ?></p>
            </div>
          </div>
        </div>
      </div>
      <div class="homeHero-subhead">
        <div class="container">
          <div class="row">
            <div class="col-xs-12">
              <p><?= tx('home_subheading') ?></p>
            </div>
          </div>
        </div>
      </div>
      <div class="homeBch">
        <div class="container">
          <div class="row">
            <div class="col-xs-12">
              <h2><?= tx('home_whatisbch_question') ?></h2>
              <span class="border"></span>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4 homeBch-answer">
              <img src="<?= $config['svg_dir']; ?>globe.svg" class="homeBch-businessIcon">
              <p><?= tx('home_whatisbch_answer_1') ?></p>
            </div>
            <div class="col-md-4 homeBch-answer">
              <img src="<?= $config['svg_dir']; ?>cubes.svg" class="homeBch-businessIcon">
              <p><?= tx('home_whatisbch_answer_2') ?></p>
            </div>
            <div class="col-md-4 homeBch-answer">
              <img src="<?= $config['svg_dir']; ?>flash.svg" class="homeBch-businessIcon">
              <p><?= tx('home_whatisbch_answer_3') ?></p>
            </div>
          </div>
        </div>
      </div>
      <div class="homeMission">
        <div class="container">
          <div class="row">
            <div class="col-md-5">
              <img src="<?= $config['svg_dir']; ?>home_mission.svg" class="img-responsive homeMission-img" style="width:100%;" />
            </div>
            <div class="col-md-7">
              <h2><?= tx('home_mission_title') ?></h2>
              <span class="border"></span>
              <p class="homeMission-lead"><?= tx('home_mission_lead') ?></p>
              <?= tx('home_mission_body') ?>
            </div>
          </div>
        </div>
      </div>
      <div class="homeHelp">
        <div class="container">
          <h2><?= tx('home_help_question') ?></h2>
          <span class="border"></span>
          <div class="row homeHelp-section">
            <div class="col-md-5 homeHelp-imageCol">
              <img src="<?= $config['svg_dir']; ?>home_proposal.svg" class="img-responsive homeHelp-sectionImg">
            </div>
            <div class="col-md-7 homeHelp-proposalCol">
              <h3 class="homeHelp-sectionHeading"><?= tx('home_help_heading_1') ?></h3>
              <p class="homeHelp-sectionText"><?= tx('home_help_text_1') ?></p>
              <a href="<?= $config['base_url']; ?>proposal/" class="btn btn-lg homeHelp-sectionBtn"><?= tx('home_help_learn_more_button') ?></a>
            </div>
          </div>
          <div class="row homeHelp-section">
            <div class="col-md-5 col-md-push-7 homeHelp-imageCol">
              <img src="<?= $config['svg_dir']; ?>home_volunteer.svg" class="img-responsive homeHelp-sectionImg">
            </div>
            <div class="col-md-7 col-md-pull-5 homeHelp-volunteerCol">
              <h3 class="homeHelp-sectionHeading"><?= tx('home_help_heading_2') ?></h3>
              <p class="homeHelp-sectionText"><?= tx('home_help_text_2') ?></p>
              <a href="<?= $config['base_url']; ?>volunteer/" class="btn btn-lg homeHelp-sectionBtn"><?= tx('home_help_learn_more_button') ?></a>
            </div>
          </div>
          <div class="row homeHelp-section">
            <div class="col-md-5 homeHelp-imageCol">
              <img src="<?= $config['svg_dir']; ?>home_donate.svg" class="img-responsive homeHelp-sectionImg">
            </div>
            <div class="col-md-7 homeHelp-donateCol">
              <h3 class="homeHelp-sectionHeading"><?= tx('home_help_heading_3') ?></h3>
              <p class="homeHelp-sectionText"><?= tx('home_help_text_3') ?></p>
              <a href="<?= $config['base_url']; ?>donate/" class="btn btn-lg homeHelp-sectionBtn"><?= tx('home_help_learn_more_button') ?></a>
            </div>
          </div>
        </div>
      </div>
      <div class="homeSponsors">
        <div class="container">
          <div class="row">
            <div class="col-xs-12">
              <h2><?= tx('home_sponsors_title') ?></h2>
              <span class="border"></span>
              <p><?= tx('home_sponsors_text') ?></p>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-6 col-sm-4"><a href="https://www.bitcoin.com/" target="_blank" class="homeSponsors-link"><img src="<?= $config['img_dir']; ?>sponsor-bitcoin.png"></a></div>
            <div class="col-xs-6 col-sm-4"><a href="https://viabtc.com/" target="_blank" class="homeSponsors-link"><img src="<?= $config['img_dir']; ?>sponsor-viabtc.png"></a></div>
            <div class="col-xs-6 col-sm-4"><a href="https://www.yours.org/" target="_blank" class="homeSponsors-link"><img src="<?= $config['img_dir']; ?>sponsor-yours.png"></a></div>
          </div>
        </div>
      </div>
      <?php include($config['include_dir'] . 'footer.php'); ?>
    </div>
  </body>
</html>
