<?php $config = include('../_config.php'); ?>
<?php include('../_tx.php'); ?>

<!DOCTYPE html>
<html lang="<?= $lang ?>" prefix="og: http://ogp.me/ns#">
  <head>
    <?php
    $headInfo = [
      'title'       => tx('volunteer_title'),
      'description' => tx('volunteer_description'),
      'url'         => '',
      'og_img'      => 'https://thebitcoincash.fund/assets/img/bcf_opengraph.jpg'
    ]; ?>
    <?php include($config['include_dir'] . 'head.php'); ?>
    <title><?= tx($config['current_page'] . '_title') . tx('title_post') ?></title>
    <script>
      $().ready(function() {
        $.extend(jQuery.validator.messages, {
          required: '<?= tx('volunteer_form_required') ?>'
        });
        $("#volunteerForm-form").validate({
          rules: {
            Name: "required",
            Email: {
              required: true,
              email: true
            }
          },
          messages: {
            Name: "<?= tx('volunteer_form_required_name') ?>",
            Email: "<?= tx('volunteer_form_required_email') ?>"
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
                    srcset="<?= $config['svg_dir']; ?>volunteer_hero_desktop.svg" />
            <!-- Mobile -->
            <source srcset="<?= $config['svg_dir']; ?>volunteer_hero_mobile.svg" />
            <img src="<?= $config['svg_dir']; ?>volunteer_hero_desktop.svg" class="img-responsive hero-img" />
          </picture>
          <h1 class="hero-heading"><?= tx('volunteer_heading') ?></h1>
          <p class="hero-lead"><?= tx('volunteer_lead') ?></p>
        </div>
      </div>
      <div class="hero-subhead">
        <div class="container">
          <div class="row">
            <div class="col-xs-12">
              <p><?= tx('volunteer_subhead') ?></p>
            </div>
          </div>
        </div>
      </div>
      <div class="volunteerForm">
        <div class="container">
          <div class="row">
            <div class="col-md-5 volunteerForm-txtCol">
              <h2 class="volunteerForm-heading"><?= tx('volunteer_weneedyou_title') ?></h2>
              <?= tx('volunteer_weneedyou_text') ?>
              <h2 class="volunteerForm-heading"><?= tx('volunteer_noskills_title') ?></h2>
              <?= tx('volunteer_noskills_text') ?>
            </div>
            <div class="col-md-7 volunteerForm-frmCol">
              <form id="volunteerForm-form" action="https://formcarry.com/s/HkK6QYWUG" method="POST">
                <input class="form-control input-lg volunteerForm-input" type="text" placeholder="<?= tx('volunteer_form_ph_name') ?>" name="Name">
                <input class="form-control input-lg volunteerForm-input" type="email" placeholder="<?= tx('volunteer_form_ph_email') ?>" name="Email">
                <fieldset class="volunteerForm-fieldset">
                  <legend class="volunteerForm-fieldsetLegend"><?= tx('volunteer_form_legend_skills') ?></legend>
                  <div class="volunteerForm-fieldsetHalf">
                    <div class="checkbox volunteerForm-checkbox">
                      <label>
                        <input type="checkbox" value="" name="Project_Management">
                        <?= tx('volunteer_form_skill_project_management') ?>
                      </label>
                    </div>
                    <div class="checkbox volunteerForm-checkbox">
                      <label>
                        <input type="checkbox" value="" name="Web_Development">
                        <?= tx('volunteer_form_skill_web_development') ?>
                      </label>
                    </div>
                    <div class="checkbox volunteerForm-checkbox">
                      <label>
                        <input type="checkbox" value="" name="Graphic_Design">
                        <?= tx('volunteer_form_skill_graphic_design') ?>
                      </label>
                    </div>
                    <div class="checkbox volunteerForm-checkbox">
                      <label>
                        <input type="checkbox" value="" name="Marketing">
                        <?= tx('volunteer_form_skill_marketing') ?>
                      </label>
                    </div>
                    <div class="checkbox volunteerForm-checkbox">
                      <label>
                        <input type="checkbox" value="" name="Sales">
                        <?= tx('volunteer_form_skill_sales') ?>
                      </label>
                    </div>
                    <div class="checkbox volunteerForm-checkbox">
                      <label>
                        <input type="checkbox" value="" name="Writing">
                        <?= tx('volunteer_form_skill_writing') ?>
                      </label>
                    </div>
                    <div class="checkbox volunteerForm-checkbox">
                      <label>
                        <input type="checkbox" value="" name="Business_Onboarding">
                        <?= tx('volunteer_form_skill_business_onboarding') ?>
                      </label>
                    </div>
                  </div>
                  <div class="volunteerForm-fieldsetHalf">
                    <div class="checkbox volunteerForm-checkbox">
                      <label>
                        <input type="checkbox" value="" name="Social_Media">
                        <?= tx('volunteer_form_skill_social_media') ?>
                      </label>
                    </div>
                    <div class="checkbox volunteerForm-checkbox">
                      <label>
                        <input type="checkbox" value="" name="Translation">
                        <?= tx('volunteer_form_skill_translation') ?>
                      </label>
                    </div>
                    <div class="checkbox volunteerForm-checkbox">
                      <label>
                        <input type="checkbox" value="" name="Videography">
                        <?= tx('volunteer_form_skill_videography') ?>
                      </label>
                    </div>
                    <div class="checkbox volunteerForm-checkbox">
                      <label>
                        <input type="checkbox" value="" name="Audio">
                        <?= tx('volunteer_form_skill_audio') ?>
                      </label>
                    </div>
                    <div class="checkbox volunteerForm-checkbox">
                      <label>
                        <input type="checkbox" value="" name="Music">
                        <?= tx('volunteer_form_skill_music') ?>
                      </label>
                    </div>
                    <div class="checkbox volunteerForm-checkbox">
                      <label>
                        <input type="checkbox" value="" name="Motion_Graphics">
                        <?= tx('volunteer_form_skill_motion_graphics') ?>
                      </label>
                    </div>
                    <div class="checkbox volunteerForm-checkbox">
                      <label>
                        <input type="checkbox" value="">
                        <?= tx('volunteer_form_skill_other') ?>
                      </label>
                    </div>
                  </div>
                  <input class="form-control input-lg volunteerForm-input" type="text" placeholder="<?= tx('volunteer_form_ph_other_skills') ?>" value="" name="Other_Skills">
                </fieldset>
                <fieldset class="volunteerForm-fieldset">
                  <legend class="volunteerForm-fieldsetLegend"><?= tx('volunteer_form_legend_portfolio') ?></legend>
                  <div class="volunteerForm-fieldsetHalf">
                    <input class="form-control input-lg volunteerForm-input" type="text" placeholder="<?= tx('volunteer_form_ph_github') ?>" value="" name="GitHub">
                    <input class="form-control input-lg volunteerForm-input" type="text" placeholder="<?= tx('volunteer_form_ph_website') ?>" value="" name="Website">
                  </div>
                  <div class="volunteerForm-fieldsetHalf">
                    <input class="form-control input-lg volunteerForm-input" type="text" placeholder="<?= tx('volunteer_form_ph_twitter') ?>" value="" name="Twitter">
                    <input class="form-control input-lg volunteerForm-input" type="text" placeholder="<?= tx('volunteer_form_ph_other') ?>" value="" name="Other">
                  </div>
                </fieldset>
                <textarea class="form-control input-lg volunteerForm-input" rows="7" placeholder="<?= tx('volunteer_form_ph_notes') ?>" name="Message"></textarea>
                <input class="btn btn-lg volunteerForm-btn" type="submit" value="<?= tx('volunteer_form_send_button') ?>">
              </form>
            </div>
          </div>
        </div>
      </div>
      <?php include($config['include_dir'] . 'footer.php'); ?>
    </div>
  </body>
</html>
