<!-- [ Header Topbar ] start -->
<header class="pc-header">
  <div class="header-wrapper">

    <!-- [Mobile Media Block] start -->
    <div class="me-auto pc-mob-drp">
      <ul class="list-unstyled">
        <!-- ======= Menu collapse Icon ===== -->
        <li class="pc-h-item pc-sidebar-collapse">
          <a href="#" class="pc-head-link ms-0" id="sidebar-hide">
            <i class="ti ti-menu-2"></i>
          </a>
        </li>
        <li class="pc-h-item pc-sidebar-popup">
          <a href="#" class="pc-head-link ms-0" id="mobile-collapse">
            <i class="ti ti-menu-2"></i>
          </a>
        </li>
      </ul>
    </div>

    <!-- [Mobile Media Block end] -->
    <div class="ms-auto">
      <ul class="list-unstyled">
        <li class="dropdown pc-h-item">
          <svg class="pc-icon me-1">
            <use xlink:href="#custom-box-1"></use>
          </svg>
          <span>
            <?php
            if (session()->has('system')) {
              echo strtoupper(session()->get('system'));
            } else {
              session()->set('system', 'full');
              echo strtoupper(session()->get('system'));
            }
            ?>
          </span>
          <a class="pc-head-link dropdown-toggle arrow-none me-0" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
            <svg class="pc-icon">
              <use xlink:href="#custom-sort-outline"></use>
            </svg>
          </a>
          <div class="dropdown-menu dropdown-menu-end pc-h-dropdown">
            <?php
            foreach ($systems as $system) :
              $system_name_full = json_decode($system->system_name_full);
              $system_name = $system_name_full->$lang->name ?? $system_name_full->th->name;
              if($is_admin['is_admin']):
            ?>
              <a href="javascript:void(0);" class="dropdown-item <?= session()->get('system') === $system->system_name_short ? "text-primary" : ""; ?>" onclick="setting('system','<?= $system->system_name_short; ?>')">
                <svg class="pc-icon">
                  <use xlink:href="#custom-<?= $system->icon_code; ?>"></use>
                </svg>
                <span><?= strtoupper($system->system_name_short); ?> : <?= $system_name; ?></span>
              </a>
            <?php
              else:
              if($system->system_access_status):
            ?>
              <a href="javascript:void(0);" class="dropdown-item <?= session()->get('system') === $system->system_name_short ? "text-primary" : ""; ?>" onclick="setting('system','<?= $system->system_name_short; ?>')">
                <svg class="pc-icon">
                  <use xlink:href="#custom-<?= $system->icon_code; ?>"></use>
                </svg>
                <span><?= strtoupper($system->system_name_short); ?> : <?= $system_name; ?></span>
              </a>
              <?php else:?>
              <a href="javascript:void(0);" class="dropdown-item text-muted" style="cursor:no-drop;">
                <svg class="pc-icon">
                  <use xlink:href="#custom-<?= $system->icon_code; ?>"></use>
                </svg>
                <span><?= strtoupper($system->system_name_short); ?> : <?= $system_name; ?> <i data-feather="lock"></i></span>
              </a>
              <?php endif;endif;?>
            <?php endforeach; ?>
          </div>
        </li>
        <li class="dropdown pc-h-item">
          <a
            class="pc-head-link dropdown-toggle arrow-none me-0"
            data-bs-toggle="dropdown"
            href="#"
            role="button"
            aria-haspopup="false"
            aria-expanded="false">
            <?php
            if (session()->get('theme') === "default") { ?>
              <svg class="pc-icon">
                <use xlink:href="#custom-setting-2"></use>
              </svg>
            <?php } elseif (session()->get('theme') === "dark") { ?>
              <svg class="pc-icon">
                <use xlink:href="#custom-moon"></use>
              </svg>
            <?php } else { ?>
              <svg class="pc-icon">
                <use xlink:href="#custom-sun-1"></use>
              </svg>
            <?php } ?>
          </a>
          <div class="dropdown-menu dropdown-menu-end pc-h-dropdown">
            <a href="#!" class="dropdown-item" onclick="setting('theme','dark')">
              <svg class="pc-icon">
                <use xlink:href="#custom-moon"></use>
              </svg>
              <span><?= lang($lang . '.dark_mode'); ?></span>
            </a>
            <a href="#!" class="dropdown-item" onclick="setting('theme','light')">
              <svg class="pc-icon">
                <use xlink:href="#custom-sun-1"></use>
              </svg>
              <span><?= lang($lang . '.ligth_mode'); ?></span>
            </a>
            <a href="#!" class="dropdown-item" onclick="setting('theme','default')">
              <svg class="pc-icon">
                <use xlink:href="#custom-setting-2"></use>
              </svg>
              <span><?= lang($lang . '.default_mode'); ?></span>
            </a>
          </div>
        </li>
        <li class="dropdown pc-h-item">
          <a
            class="mx-3 dropdown-toggle arrow-none"
            data-bs-toggle="dropdown"
            href="#"
            role="button"
            aria-haspopup="false"
            aria-expanded="false">
            <img src="<?= base_url('assets/images/icon/flag/' . $lang . '.png'); ?>" />
          </a>
          <div class="dropdown-menu dropdown-menu-end pc-h-dropdown">
            <a href="<?= site_url('lang/th'); ?>" class="dropdown-item">
              <img src="<?= base_url('assets/images/icon/flag/th.png'); ?>" class="me-2" />
              <span><?= lang($lang . '.menu_lang_th'); ?></span>
            </a>
            <a href="<?= site_url('lang/en'); ?>" class="dropdown-item">
              <img src="<?= base_url('assets/images/icon/flag/en.png'); ?>" class="me-2" />
              <span><?= lang($lang . '.menu_lang_en'); ?></span>
            </a>
            <a href="<?= site_url('lang/zh'); ?>" class="dropdown-item">
              <img src="<?= base_url('assets/images/icon/flag/zh.png'); ?>" class="me-2" />
              <span><?= lang($lang . '.menu_lang_zh'); ?></span>
            </a>
          </div>
        </li>
        <li class="dropdown pc-h-item header-user-profile">
          <a
            class="pc-head-link dropdown-toggle arrow-none me-0"
            data-bs-toggle="dropdown"
            href="#"
            role="button"
            aria-haspopup="false"
            data-bs-auto-close="outside"
            aria-expanded="false">
            <img src="<?= base_url('assets/images/user/avatar-2.jpg') ?>" alt="user-image" class="user-avtar" />
          </a>
          <div class="dropdown-menu dropdown-user-profile dropdown-menu-end pc-h-dropdown">
            <div class="dropdown-header d-flex align-items-center justify-content-between">
              <h5 class="m-0"><?= lang($lang . '.profile'); ?></h5>
            </div>
            <div class="dropdown-body">
              <div class="profile-notification-scroll position-relative" style="max-height: calc(100vh - 225px)">
                <div class="d-flex mb-1">
                  <div class="flex-shrink-0">
                    <img src="<?= base_url('assets/images/user/avatar-2.jpg') ?>" alt="user-image" class="user-avtar wid-35" />
                  </div>
                  <div class="flex-grow-1 ms-3">
                    <h6 class="mb-1"><?= session()->get('full_name'); ?> 🖖</h6>
                    <span><?= session()->get('email'); ?></span><br />
                    <!-- <a style="font-size:12px;" href="<?= base_url(); ?>" target="_blank">CRRU - Life Long Instutute</a> -->
                  </div>
                </div>
                <hr class="border-secondary border-opacity-50" />
                <div class="card">
                  <div class="card-body py-3">
                    <div class="d-flex align-items-center justify-content-between">
                      <h5 class="mb-0 d-inline-flex align-items-center">
                        <svg class="pc-icon text-muted me-2">
                          <use xlink:href="#custom-notification-outline"></use>
                        </svg>
                        <?= lang($lang . '.notification'); ?>
                      </h5>
                      <div class="form-check form-switch form-check-reverse m-0">
                        <input class="form-check-input f-18" type="checkbox" role="switch" />
                      </div>
                    </div>
                  </div>
                </div>
                <p class="text-span"><?= lang($lang . '.manage'); ?></p>
                <a href="#" class="dropdown-item">
                  <span>
                    <svg class="pc-icon text-muted me-2">
                      <use xlink:href="#custom-user"></use>
                    </svg>
                    <span><?= lang($lang . '.my_account'); ?></span>
                  </span>
                </a>
                <a href="#" class="dropdown-item">
                  <span>
                    <svg class="pc-icon text-muted me-2">
                      <use xlink:href="#custom-setting-2"></use>
                    </svg>
                    <span><?= lang($lang . '.static.setting'); ?></span>
                  </span>
                </a>
                <a href="#" class="dropdown-item">
                  <span>
                    <svg class="pc-icon text-muted me-2">
                      <use xlink:href="#custom-call-calling"></use>
                    </svg>
                    <span><?= lang($lang . '.support'); ?></span>
                  </span>
                </a>
                <hr class="border-secondary border-opacity-50" />
                <div class="d-grid mb-3">
                  <button id="btn_logout" class="btn btn-primary" onclick="logout();">
                    <svg class="pc-icon me-2">
                      <use xlink:href="#custom-logout-1-outline"></use>
                    </svg>
                    <?= lang($lang . '.logout'); ?>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </li>
      </ul>
    </div>

  </div>
</header>
<!-- [ Header ] end -->