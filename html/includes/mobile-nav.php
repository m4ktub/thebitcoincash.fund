<div id="mobile-nav-panel">
  <nav role="navigation">
    <ul class="mobile-nav">
      <li class="mobile-nav-item"><a href="<?= $config['base_url']; ?>about/"><?= tx('nav_about') ?></a></li>
      <li class="mobile-nav-item"><a href="<?= $config['base_url']; ?>proposal/"><?= tx('nav_proposal') ?></a></li>
      <li class="mobile-nav-item"><a href="<?= $config['base_url']; ?>volunteer/"><?= tx('nav_volunteer') ?></a></li>
      <li class="mobile-nav-item"><a href="<?= $config['base_url']; ?>donate/"><?= tx('nav_donate') ?></a></li>
      <li class="mobile-nav-item"><a href="<?= $config['base_url']; ?>faqs/"><?= tx('nav_faqs') ?></a></li>
      <li class="mobile-nav-item"><a href="/" id="sn-btn-about"><?= $LANG_NAMES[$lang] ?>
          <div class="mobile-nav-expand-btn">
            <span></span>
            <span></span>
          </div>
        </a>
        <ul class="mobile-nav mobile-subnav">
<?php
     foreach($LANG_NAMES as $code => $name) {
?>
          <li class="mobile-nav-item mobile-subnav-item item-closed sn-itm-about">
            <a href="<?= $config['base_url'] . $code ?>/"><?= $name ?></a>
          </li>
<?php
     }
?>
        </ul>
      </li>
      <li class="mobile-nav-item">
        <a href="<?= $config['base_url']; ?>contact/" title="Contact" id="mobile-nav-contact-link"><?= tx('nav_contact') ?></a>
      </li>
    </ul>
  </nav>
</div>
