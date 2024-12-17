<header class="pc-header bg-transparent">
    <div class="header-wrapper">
        <!-- [Mobile Media Block end] -->
        <div class="ms-auto">
            <ul class="list-unstyled">
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
            </ul>
        </div>
    </div>
</header>