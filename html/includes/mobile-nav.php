<div id="mobile-nav-panel">
  <nav role="navigation">
    <ul class="mobile-nav">
      <li class="mobile-nav-item"><a href="<?= $config['base_url']; ?>about/"><?= tx('nav_about') ?></a></li>
      <li class="mobile-nav-item"><a href="<?= $config['base_url']; ?>proposal/"><?= tx('nav_proposal') ?></a></li>
      <li class="mobile-nav-item"><a href="<?= $config['base_url']; ?>volunteer/"><?= tx('nav_volunteer') ?></a></li>
      <li class="mobile-nav-item"><a href="<?= $config['base_url']; ?>donate/"><?= tx('nav_donate') ?></a></li>
      <li class="mobile-nav-item"><a href="<?= $config['base_url']; ?>faqs/"><?= tx('nav_faqs') ?></a></li>
      <li class="mobile-nav-item"><a href="/" id="sn-btn-about">English
          <div class="mobile-nav-expand-btn">
            <span></span>
            <span></span>
          </div>
        </a>
        <ul class="mobile-nav mobile-subnav">
          <li class="mobile-nav-item mobile-subnav-item item-closed sn-itm-about">
            <a href="<?= $config['base_url']; ?>en/">English</a>
          </li>
          <li class="mobile-nav-item mobile-subnav-item item-closed sn-itm-about">
            <a href="<?= $config['base_url']; ?>es/">Español</a>
          </li>
          <li class="mobile-nav-item mobile-subnav-item item-closed sn-itm-about">
            <a href="<?= $config['base_url']; ?>it/">Italiano</a>
          </li>
          <li class="mobile-nav-item mobile-subnav-item item-closed sn-itm-about">
            <a href="<?= $config['base_url']; ?>nl/">Nederlands</a>
          </li>
          <li class="mobile-nav-item mobile-subnav-item item-closed sn-itm-about">
            <a href="<?= $config['base_url']; ?>pt-PT/">Português Portugal</a>
          </li>
          <li class="mobile-nav-item mobile-subnav-item item-closed sn-itm-about">
            <a href="<?= $config['base_url']; ?>ja/">日本語</a>
          </li>
          <li class="mobile-nav-item mobile-subnav-item item-closed sn-itm-about">
            <a href="<?= $config['base_url']; ?>zh/">中文</a>
          </li>
        </ul>
      </li>
      <li class="mobile-nav-item">
        <a href="<?= $config['base_url']; ?>contact/" title="Contact" id="mobile-nav-contact-link"><?= tx('nav_contact') ?></a>
      </li>
    </ul>
  </nav>
</div>
