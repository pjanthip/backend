
<!-- [ breadcrumb ] start -->
<div class="page-header">
  <div class="page-block">
    <div class="row align-items-center">
      <div class="col-md-12">
        <ul class="breadcrumb">
          <?php
            foreach ($breadcrumb as $item) {
              if ($item['url']) {
                echo '<li class="breadcrumb-item"><a href="' . $item['url'] . '">' . $item['title'] . '</a></li>';
              } else {
                echo '<li class="breadcrumb-item" aria-current="page">' . $item['title'] . '</li>';
              }
            }
          ?>
        </ul>
      </div>
      <div class="col-md-12">
        <div class="page-header-title">
          <h2 class="mb-0"><?= $head_title ?></h2>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- [ breadcrumb ] end -->
