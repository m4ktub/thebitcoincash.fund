<!-- Desktop-Only Navigation Bar -->
<div id="color-bar" class="hidden-xs hidden-sm"></div>
<nav id="navbar-md" class="hidden-xs hidden-sm">
  <div class="container">
    <div id="navbar-md-brand" class="pull-left">
      <a href="<?= $config['base_url']; ?>" title="<?= tx('title') ?>">
        <img src="<?= $config['svg_dir']; ?>bcf_logo.svg" alt="<?= tx('title') ?>" class="img-responsive">
      </a>
    </div>
    <div class="navbar-md-list-wrapper pull-right">
      <ul class="navbar-md-list pull-right">
        
        <li class="navbar-md-list-item<?= ($currentPage == 'about') ? ' active' : ''; ?>">
          <a href="<?= $config['base_url']; ?>about/"><?= tx('nav_about') ?></a>
        </li>
        <li class="navbar-md-list-item<?= ($currentPage == 'proposal') ? ' active' : ''; ?>">
          <a href="<?= $config['base_url']; ?>proposal/"><?= tx('nav_proposal') ?></a>
        </li>
        <li class="navbar-md-list-item<?= ($currentPage == 'volunteer') ? ' active' : ''; ?>">
          <a href="<?= $config['base_url']; ?>volunteer/"><?= tx('nav_volunteer') ?></a>
        </li>
        <li class="navbar-md-list-item<?= ($currentPage == 'donate') ? ' active' : ''; ?>">
          <a href="<?= $config['base_url']; ?>donate/"><?= tx('nav_donate') ?></a>
        </li>
        <li class="navbar-md-list-item<?= ($currentPage == 'faqs') ? ' active' : ''; ?>">
          <a href="<?= $config['base_url']; ?>faqs/"><?= tx('nav_faqs') ?></a>
        </li>
        <li class="navbar-md-list-item<?= ($currentPage == 'contact') ? ' active' : ''; ?>">
          <a href="<?= $config['base_url']; ?>contact/"><?= tx('nav_contact') ?></a>
        </li>

        <li class="languageSelect">
          <div class="languageSelect-opener">
            <span class="languageSelect-openerLine"></span>
            <img src="<?= $config['svg_dir']; ?>language_select.svg" alt="" class="languageSelect-openerIcon">
            <img src="<?= $config['svg_dir']; ?>language_select_caret.svg" class="languageSelect-openerCaret">
          </div>
          <ul class="languageSelect-list">
            <li class="languageSelect-listItem">
              <a href="<?= $config['base_url']; ?>en/">English</a>
            </li>
            <li class="languageSelect-listItem">
              <a href="<?= $config['base_url']; ?>es/">Español</a>
            </li>
            <li class="languageSelect-listItem">
              <a href="<?= $config['base_url']; ?>it/">Italiano</a>
            </li>
            <li class="languageSelect-listItem">
              <a href="<?= $config['base_url']; ?>nl/">Nederlands</a>
            </li>
            <li class="languageSelect-listItem">
              <a href="<?= $config['base_url']; ?>pt-PT/">Português</a>
            </li>
            <li class="languageSelect-listItem">
              <a href="<?= $config['base_url']; ?>ja/">日本語</a>
            </li>
            <li class="languageSelect-listItem">
              <a href="<?= $config['base_url']; ?>zh/">中文</a>
            </li>          
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
