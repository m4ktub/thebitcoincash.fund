<?php $config = include('../_config.php'); ?>
<?php include('../_tx.php'); ?>

<!DOCTYPE html>
<html lang="<?= $lang ?>" prefix="og: http://ogp.me/ns#">
  <head>
    <?php
    $headInfo = [
      'title'       => tx('proposal_title'),
      'description' => tx('proposal_description'),
      'url'         => '',
      'og_img'      => 'https://thebitcoincash.fund/assets/img/bcf_opengraph.jpg'
    ]; ?>
    <?php include($config['include_dir'] . 'head.php'); ?>
    <title><?= tx($config['current_page'] . '_title') . tx('title_post') ?></title>
    <script>
      $().ready(function() {
        $.extend(jQuery.validator.messages, {
          required: '<?= tx('proposal_form_required') ?>'
        });
        $("#proposalForm-form").validate({
          rules: {
            Name: "required",
            Email: {
              required: true,
              email: true
            },
            Project_Name: "required",
            Project_Summary: "required",
            Required_Resources: "required",
            Itemized_Budget: "required",
            Timeline: "required",
            Goals: "required"
          },
          messages: {
            Name: "<?= tx('proposal_form_required_name') ?>",
            Email: "<?= tx('proposal_form_required_email') ?>"
          }
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
                    srcset="<?= $config['svg_dir']; ?>proposal_hero_desktop.svg" />
            <!-- Mobile -->
            <source srcset="<?= $config['svg_dir']; ?>proposal_hero_mobile.svg" />
            <img src="<?= $config['svg_dir']; ?>proposal_hero_desktop.svg" class="img-responsive hero-img" />
          </picture>
          <h1 class="hero-heading"><?= tx('proposal_heading') ?></h1>
          <p class="hero-lead"><?= tx('proposal_lead') ?></p>
        </div>
      </div>
      <div class="proposalIntro">
        <div class="container">
          <div class="row">
            <div class="col-md-5 proposalIntro-imgCol">
              <img src="<?= $config['svg_dir']; ?>proposal_submit.svg" class="img-responsive proposalIntro-img" />
            </div>
            <div class="col-md-7 proposalIntro-txtCol">
              <h2><?= tx('proposal_intro_title') ?></h2>
              <span class="border proposalIntro-border"></span>
              <p class="proposalIntro-lead"><?= tx('proposal_intro_lead') ?></p>
              <?= tx('proposal_intro_text') ?>
            </div>
          </div>
        </div>
      </div>
      <div class="proposalForm">
        <div class="container">
          <div class="row">
            <div class="col-md-5 col-md-push-7 proposalForm-txtCol">
              <h2 class="proposalForm-heading"><?= tx('proposal_principles_title') ?></h2>
              <?= tx('proposal_principles_text') ?>
              <h2 class="proposalForm-heading"><?= tx('proposal_principles_title') ?></h2>
              <?= tx('proposal_principles_text') ?>
            </div>
            <div class="col-md-7 col-md-pull-5 proposalForm-frmCol">
              <form id="proposalForm-form" action="https://formcarry.com/s/HkK6QYWUG" method="POST">
                <input class="form-control input-lg proposalForm-input" type="text" placeholder="<?= tx('proposal_form_ph_name') ?>" name="Name">
                <input class="form-control input-lg proposalForm-input" type="email" placeholder="<?= tx('proposal_form_ph_email') ?>" name="Email">
                <input class="form-control input-lg proposalForm-input" type="text" placeholder="<?= tx('proposal_form_ph_project_name') ?>" name="Project_Name">
                <textarea class="form-control input-lg proposalForm-input" rows="4" placeholder="<?= tx('proposal_form_ph_project_summary') ?>" name="Project_Summary"></textarea>
                <textarea class="form-control input-lg proposalForm-input" rows="2" placeholder="<?= tx('proposal_form_ph_stakeholders') ?>" name="Stakeholders"></textarea>
                <textarea class="form-control input-lg proposalForm-input" rows="4" placeholder="<?= tx('proposal_form_ph_resources') ?>" name="Required_Resources"></textarea>
                <textarea class="form-control input-lg proposalForm-input" rows="5" placeholder="<?= tx('proposal_form_ph_budget') ?>" name="Itemized_Budget"></textarea>
                <textarea class="form-control input-lg proposalForm-input" rows="5" placeholder="<?= tx('proposal_form_ph_timeline') ?>" name="Timeline"></textarea>
                <textarea class="form-control input-lg proposalForm-input" rows="3" placeholder="<?= tx('proposal_form_ph_goals') ?>" name="Goals"></textarea>
                <textarea class="form-control input-lg proposalForm-input" rows="5" placeholder="<?= tx('proposal_form_ph_info') ?>" name="Additional_Info"></textarea>
                <input class="btn btn-lg proposalForm-btn" type="submit" value="<?= tx('proposal_form_submit_button') ?>">
              </form>
            </div>
          </div>
        </div>
      </div>
      <?php include($config['include_dir'] . 'footer.php'); ?>
    </div>
  </body>
</html>
