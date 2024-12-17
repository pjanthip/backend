<div class="card welcome-banner bg-blue-800">
    <div class="card-body">
        <div class="row">
            <div class="col-sm-6">
                <div class="p-4">
                    <h2 class="text-white"><?= lang($lang . '.dashboard_greet_title'); ?></h2>
                    <p class="text-white"><?= lang($lang . '.dashboard_greet_detail'); ?></p>
                    <a href="javascript:void(0);" onclick="check()" class="btn btn-outline-light"><?= lang($lang . '.dashboard_greet_button'); ?></a>
                </div>
            </div>
            <div class="col-sm-6 text-center">
                <div class="img-welcome-banner">
                    <img src="<?= base_url('assets/images/widget/welcome-banner.png') ?>" alt="img" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</div>