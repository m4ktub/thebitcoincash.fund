<?php $config = include('../_config.php'); ?>
<?php include('../_tx.php'); ?>

<!DOCTYPE html>
<html lang="<?= $lang ?>" prefix="og: http://ogp.me/ns#">
  <head>
    <?php
    $headInfo = [
      'title'       => tx('faqs_title'),
      'description' => tx('faqs_description'),
      'url'         => '',
      'og_img'      => 'https://thebitcoincash.fund/assets/img/bcf_opengraph.jpg'
    ]; ?>
    <?php include($config['include_dir'] . 'head.php'); ?>
    <title><?= tx($config['current_page'] . '_title') . tx('title_post') ?></title>
    <script>
      $().ready(function() {
        $('.faqs-q').each(function() {
          var $this = $(this),
              state = false,
              answer = $this.next('.faqs-a').slideUp();
          $this.click(function() {
            state = !state;
            answer.slideToggle(state);
            $this.toggleClass('active', state);
          });
        });
      });
    </script>
  </head>
  <body>
    <?php include($config['include_dir'] . 'nav.php'); ?>
    <div class="page-wrap">
      <div class="container">
        <h2><?= tx('faqs_title') ?></h2>
        <div class="row">
          <div class="col-md-8 col-md-offset-2 faqs-wrapper">
<?php
    function faq_build_section($section) {
        global $LANG;
        
        $result = array();
        
        for( $i=1; ; $i++ ) {
            $key_q_i = 'faqs_' . $section . '_q_' . $i;
            $key_a_i = 'faqs_' . $section . '_a_' . $i;
            if (!array_key_exists($key_q_i, $LANG))
                break;

            $result[] = array(
                'q' => $LANG[$key_q_i], 
                'a' => $LANG[$key_a_i]
            );
        }
        
        return $result;
    }

    function insert_lead($haystack, $search, $lead) {
        $pos = strpos($haystack, $search);
        if ($pos !== false) {
            return substr_replace($haystack, $search . $lead, $pos, strlen($search));
        } else {
            return $haystack;
        }
    }

    $answer_lead = '<span class="faqs-qa">' . tx('faqs_answer_lead') . '</span>';

    foreach(array('general', 'proposals', 'volunteer', 'donations', 'bitcoincash') as $section) {
        $faq = faq_build_section($section);
?>
            <!-- -->
            <h2 class="faqs-sectionHeading"><?= tx('faqs_' . $section . '_title') ?></h2>
<?php
        foreach($faq as $pair) {
?>
            <div class="faqs-q">
              <p><span class="faqs-qa"><?= tx('faqs_question_lead') ?></span><?= $pair['q'] ?></p>
            </div>
            <div class="faqs-a">
              <?= insert_lead($pair['a'], '<p>', $answer_lead) ?>
            </div>
<?php
        }
    }
?>
          </div>
        </div>
      </div>
      <?php include($config['include_dir'] . 'footer.php'); ?>
    </div>
  </body>
</html>
