<div class="subscribe">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <h2 class="subscribe-heading"><?= tx('footer_subscribe_heading') ?></h2>
        <span class="border subscribe-border"></span>
        <form action="https://facebook.us17.list-manage.com/subscribe/post" method="POST" class="form-inline">
          <input type="hidden" name="u" value="d150e27fa1a1ce16c5c3e1d1e">
          <input type="hidden" name="id" value="8d0e1cb511">
          <input type="email" class="form-control input-lg" autocapitalize="off" autocorrect="off" name="MERGE0" id="MERGE0" size="25" value="" placeholder="<?= tx('footer_subscribe_email_placeholder') ?>">
          <input type="submit" class="btn btn-default btn-lg subscribe-btn" name="submit" value="<?= tx('footer_subscribe_button') ?>">
        </form>
      </div>
    </div>
  </div>
</div>
<!-- Footer -->
<a href="#" role="button" class="btn footer-scrollTop"><?= tx('footer_top_button') ?></a>
<footer class="footer-container">
  <div class="container footer-content">
    <div class="row">
      <div class="footer-col footer-explore">
        <h3 class="footer-heading"><?= tx('footer_explore_heading') ?></h3>
        <ul class="footer-linkList">
          <li><a href="<?= $config['base_url']; ?>proposal/"><?= tx('nav_proposal') ?></a></li>
          <li><a href="<?= $config['base_url']; ?>volunteer/"><?= tx('nav_volunteer') ?></a></li>
          <li><a href="<?= $config['base_url']; ?>donate/"><?= tx('nav_donate') ?></a></li>
        </ul>
      </div>
      <div class="footer-col footer-info">
        <h3 class="footer-heading"><?= tx('footer_info_heading') ?></h3>
        <ul class="footer-linkList">
          <li><a href="<?= $config['base_url']; ?>about/"><?= tx('nav_about') ?></a></li>
          <li><a href="<?= $config['base_url']; ?>faqs/"><?= tx('nav_faqs') ?></a></li>
          <li><a href="<?= $config['base_url']; ?>contact/"><?= tx('nav_contact') ?></a></li>
        </ul>
      </div>
      <div class="footer-col footer-sns">
        <h3 class="footer-heading"><?= tx('footer_connect_heading') ?></h3>
        <ul class="contact-snsList">
          <li><a href="https://www.youtube.com/channel/UC0NQCJDbECWg3jjkmsEDO-A/videos" target="_blank"><img src="<?= $config['svg_dir']; ?>sns-yt.svg" alt="YouTube" class="contact-snsImg"></a></li>
          <li><a href="https://twitter.com/BitcoinCashFund" target="_blank"><img src="<?= $config['svg_dir']; ?>sns-twitter.svg" alt="Twitter" class="contact-snsImg"></a></li>
          <li><a href="https://www.facebook.com/bitcoincashfund/" target="_blank"><img src="<?= $config['svg_dir']; ?>sns-fb.svg" alt="Facebook" class="contact-snsImg"></a></li>

          
          <li><a href="https://chat.thebitcoincash.fund" target="_blank"><img src="<?= $config['svg_dir']; ?>sns-bcf-chat.svg" alt="Bitcoin Cash Fund Chat" class="contact-snsImg contact-snsImg-bcfChat"></a></li>

          
          <li><a href="https://steemit.com/@bitcoincashfund" target="_blank"><img src="<?= $config['svg_dir']; ?>sns-steemit.svg" alt="Steemit" class="contact-snsImg"></a></li>
          <li><a href="https://www.reddit.com/r/bitcoincashmarketing" target="_blank"><img src="<?= $config['svg_dir']; ?>sns-reddit.svg" alt="Reddit" class="contact-snsImg"></a></li>
          <li><a href="https://www.yours.org/user/bitcoincashfund" target="_blank"><img src="<?= $config['svg_dir']; ?>sns-yours.svg" alt="Yours" class="contact-snsImg"></a></li>
        </ul>
      </div>
      <div class="footer-col footer-learn">
        <h3 class="footer-heading"><?= tx('footer_learn_heading') ?></h3>
        <ul class="footer-linkList">
          <li><a href="https://www.bitcoincash.org/" target="_blank">BitcoinCash.org</a></li>
          <li><a href="https://acceptbitcoin.cash/" target="_blank">Accept Bitcoin Cash Initiative</a></li>
          <li><a href="https://github.com/dsmurrell/awesome-bitcoin-cash" target="_blank">Awesome Bitcoin Cash</a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="footer-copyright">
    <div class="row">
      <div class="col-xs-12">
        <p><?= tx_sprintf('footer_copyright', date("Y")) ?></p>
      </div>
    </div>
  </div>
</footer>
