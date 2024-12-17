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
    <?= $this->include('themes/default/auth-topbar') ?>
    <!-- [ Main Content ] start -->
        <!-- [ Main Content ] start -->
        <?php $this->renderSection('content'); ?>
        <!-- [ Main Content ] end -->
    <!-- [ Main Content ] end -->
  <?= $this->include('themes/default/footer-js') ?>
</body>
</html>