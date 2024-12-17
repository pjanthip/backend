<?php if(session()->get('system') === "full"):?>
<li class="pc-item pc-caption">
  <label>Administrator</label>
  <svg class="pc-icon">
        <use xlink:href="#custom-status-up"></use>
  </svg>
</li>
<li class="pc-item">
  <a href="<?=site_url();?>" class="pc-link">
    <span class="pc-micon">
      <svg class="pc-icon">
        <use xlink:href="#custom-document"></use>
      </svg>
    </span>
    <span class="pc-mtext"><?= lang($lang.'.menus.default.dashboard') ?></span>
  </a>
</li>
<li class="pc-item pc-hasmenu">
  <a href="#!" class="pc-link">
    <span class="pc-micon">
      <svg class="pc-icon">
        <use xlink:href="#custom-user"></use>
      </svg>
    </span>
    <span class="pc-mtext"><?= lang($lang.'.menus.default.moderators') ?></span>
    <span class="pc-arrow"><i data-feather="chevron-right"></i></span>
  </a>
  <ul class="pc-submenu">
    <li class="pc-item"><a class="pc-link" href="#!"><?= lang($lang.'.menus.default.register') ?></a></li>
    <li class="pc-item"><a class="pc-link" href="<?=site_url('moderators/checkUser')?>"><?= lang($lang.'.menus.default.check_user') ?></a></li>
    <li class="pc-item"><a class="pc-link" href="#!"><?= lang($lang.'.menus.default.category_user') ?></a></li>
    <li class="pc-item"><a class="pc-link" href="<?=site_url('moderators/usersList')?>"><?= lang($lang.'.page.title.user_list') ?></a></li>
    <li class="pc-item"><a class="pc-link" href="<?=site_url('moderators/listLogs')?>"><?= lang($lang.'.menus.default.user_logs') ?></a></li>
  </ul>
</li>
<li class="pc-item pc-hasmenu">
  <a href="#!" class="pc-link">
    <span class="pc-micon">
      <svg class="pc-icon">
        <use xlink:href="#custom-element-plus"></use>
      </svg>
    </span>
    <span class="pc-mtext"><?= lang($lang.'.menus.default.menu') ?></span>
    <span class="pc-arrow"><i data-feather="chevron-right"></i></span>
  </a>
  <ul class="pc-submenu">
    <li class="pc-item"><a class="pc-link" href="#!"><?= lang($lang.'.menus.default.menu_setting') ?></a></li>
  </ul>
</li>
<li class="pc-item pc-hasmenu">
  <a href="#!" class="pc-link">
    <span class="pc-micon">
      <svg class="pc-icon">
        <use xlink:href="#custom-setting-2"></use>
      </svg>
    </span>
    <span class="pc-mtext"><?= lang($lang.'.static.setting') ?></span>
    <span class="pc-arrow"><i data-feather="chevron-right"></i></span>
  </a>
  <ul class="pc-submenu">
    <li class="pc-item"><a class="pc-link" href="<?=site_url('setting/sessions_cookies')?>"><?= lang($lang.'.static.sessions') ?>/<?= lang($lang.'.static.cookies') ?></a></li>
    <li class="pc-item"><a class="pc-link" href="#!"><?= lang($lang.'.static.language') ?></a></li>
    <li class="pc-item"><a class="pc-link" href="#!"><?= lang($lang.'.menus.default.dashboard') ?></a></li>
    <li class="pc-item"><a class="pc-link" href="#!"><?= lang($lang.'.static.website') ?></a></li>
  </ul>
</li>
<?php endif;?>
<?= $this->include('themes/default/nav-cb') ?>