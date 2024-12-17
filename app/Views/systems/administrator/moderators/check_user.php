<?php $this->extend('themes/default/layout'); ?>
<?php $this->section('content'); ?>

<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-body">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label class="form-label" for="first_name"><?= lang($lang . '.page.authentication.register.first_name'); ?></label>
                                <input type="text" class="form-control" id="first_name" name="first_name" placeholder="<?= lang($lang . '.page.authentication.register.first_name'); ?>">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label class="form-label" for="last_name"><?= lang($lang . '.page.authentication.register.last_name'); ?></label>
                                <input type="text" class="form-control" id="last_name" name="last_name" placeholder="<?= lang($lang . '.page.authentication.register.last_name'); ?>">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label class="form-label" for="email"><?= lang($lang . '.page.authentication.signin.email'); ?></label>
                                <input type="text" class="form-control" id="email" name="email" placeholder="<?= lang($lang . '.page.authentication.signin.email'); ?>">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label class="form-label" for="username"><?= lang($lang . '.page.authentication.signin.username'); ?></label>
                                <input type="text" class="form-control" id="username" name="username" placeholder="<?= lang($lang . '.page.authentication.signin.username'); ?>">
                            </div>
                        </div>
                    </div>
                    <div class="text-end mt-4">
                        <button type="button" class="btn btn-primary"><i class="fas fa-search"></i> <?= lang($lang . '.components.buttons.btn_search'); ?></button>
                    </div>
                </div>
            </div>
        </div>

        <div id="result_search">
            <?= $this->include('systems/administrator/moderators/search_result') ?>
        </div>
        
    </div>
</div>

<?php $this->endSection(); ?>