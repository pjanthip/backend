<?php $this->extend('themes/default/layout'); ?>
<?php $this->section('content'); ?>
<?php echo '<pre>';
      echo print_r(session()->get());
      echo '</pre>';
      echo '---------------'.uri_string().'<br/>';
      ?>

      <?php echo '<pre>';
            echo print_r($systems);
            echo '</pre>';?>
<?php $this->endSection(); ?>