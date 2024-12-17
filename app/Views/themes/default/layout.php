<!DOCTYPE html>
<html lang="en">
  <!-- [Head] start -->
  <head>
    <?= $this->include('themes/default/header') ?>
  </head>
  <!-- [Head] end -->
  <!-- [Body] Start -->
  <body <?= BODY_SETUP ?> class="prompt-regular">
    <?= $this->include('themes/default/loader') ?>
    <?= $this->include('themes/default/sidebar') ?>
    <?= $this->include('themes/default/topbar') ?>
    <!-- [ Main Content ] start -->
    <div class="pc-container">
      <div class="pc-content">
        <?= $this->include('themes/default/breadcrumb') ?>
        <!-- [ Main Content ] start -->
        <?php $this->renderSection('content'); ?>
        <!-- [ Main Content ] end -->
      </div>
    </div>
    <?= $this->include('pages/modal-contact') ?>
    <!-- [ Main Content ] end -->
  <?= $this->include('themes/default/footer') ?>
  <?= $this->include('themes/default/footer-js') ?>
</body>
</html>