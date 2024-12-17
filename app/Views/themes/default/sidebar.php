<!-- [ Sidebar Menu ] start -->
<nav class="pc-sidebar">
  <div class="navbar-wrapper">
    <div class="m-header">
      <a href="<?= site_url();?>" class="b-brand text-primary ">
        <!-- ========   Change your logo from here   ============ -->
        <img src="<?= base_url('assets/images/logo-dark.svg') ?>"alt="logo"  class="img-fluid logo-lg">
        <span class="badge bg-light-success rounded-pill ms-2 theme-version"><?= VERSION ?></span>
      </a>
    </div>
    <div class="navbar-content">
      <div class="card pc-user-card">
        <div class="card-body">
          <div class="d-flex align-items-center">
            <div class="flex-shrink-0">
              <img src="<?= base_url('assets/images/user/avatar-1.jpg') ?>" alt="user-image" class="user-avtar wid-45 rounded-circle" />
            </div>
            <div class="flex-grow-1 ms-3 me-2">
              <h6 class="mb-0"><?= session()->get('full_name'); ?></h6>
              <!-- <small><?= session()->get('email'); ?></small> -->
            </div>
            <a class="btn btn-icon btn-link-secondary avtar" data-bs-toggle="collapse" href="#pc_sidebar_userlink">
              <svg class="pc-icon">
                <use xlink:href="#custom-sort-outline"></use>
              </svg>
            </a>
          </div>
          <div class="collapse pc-user-links" id="pc_sidebar_userlink">
            <div class="pt-3">
              <a href="#!">
                <i class="ti ti-user"></i>
                <span><?= lang($lang . '.my_account'); ?></span>
              </a>
              <a href="#!">
                <i class="ti ti-settings"></i>
                <span><?= lang($lang . '.static.setting'); ?></span>
              </a>
              <a href="#!" onclick="logout();">
                <i class="ti ti-power"></i>
                <span><?= lang($lang . '.logout'); ?></span>
              </a>
            </div>
          </div>
        </div>
      </div>

      <ul class="pc-navbar">
        <?= $this->include('themes/default/navSidebar.php') ?>
      </ul>
    </div>
  </div>
</nav>
<!-- [ Sidebar Menu ] end -->
