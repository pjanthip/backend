<?php $this->extend('themes/default/layout'); ?>
<?php $this->section('content'); ?>
<?php echo '<pre>';
      echo print_r(session()->get());
      echo '</pre>';
      ?>

      <?php echo '<pre>';
            echo print_r($systems);
            echo '</pre>';?>
<div class="row">
  <div class="col-md-12">
    <?= $this->include('dashboard/welcome_message') ?>
  </div>
</div>

<div class="row">
  <div class="col-xl-8 col-md-12">
    <?= $this->include('dashboard/news') ?>
  </div>
  <div class="col-xl-4 col-md-12">
    <?= $this->include('dashboard/calendar') ?>
  </div>
</div>

<div class="row">
  <div class="col-xl-6 col-md-6">
    <?= $this->include('dashboard/transactions') ?>
  </div>
  <div class="col-xl-6 col-md-12">
    <?= $this->include('dashboard/tasks') ?>
  </div>
</div>

<?php $this->endSection(); ?>