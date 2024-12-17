<?php $this->extend('themes/default/layout-auth'); ?>
<?php $this->section('content'); ?>
<!-- [ Main Content ] start -->
<div class="auth-main">
    <div class="auth-wrapper v1">
        <div class="auth-form">
            <div class="card my-5">
                <div class="card-body">
                    <?php if ($main_frm): ?>
                    <form id="frm_reset">
                        <div class="mb-4">
                            <h3 class="mb-2"><b><?= lang($lang . '.page.authentication.reset_password.reset_password'); ?></b></h3>
                            <p class="text-muted"><?= lang($lang . '.page.authentication.reset_password.choose_new_password'); ?></p>
                        </div>
                        <div class="mb-3">
                            <label class="form-label"><?= lang($lang . '.page.authentication.signin.password'); ?></label>
                            <input type="password" class="form-control" id="floatingInput" placeholder="<?= lang($lang . '.page.authentication.signin.password'); ?>">
                        </div>
                        <div class="mb-3">
                            <label class="form-label"><?= lang($lang . '.page.authentication.register.confirm_password'); ?></label>
                            <input type="password" class="form-control" id="floatingInput1" placeholder="<?= lang($lang . '.page.authentication.register.confirm_password'); ?>">
                        </div>
                        <div class="d-grid mt-4">
                            <a href="<?=site_url('code-verification')?>" class="btn btn-primary"><?= lang($lang . '.page.authentication.reset_password.reset_password'); ?></a>
                        </div>
                        <div class="alert error_box d-none alert-danger mt-3" role="alert"><i class="fas fa-exclamation-triangle"></i> <span id="error_message"></span></div>
                    </form>
                    <?php  endif;?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- [ Main Content ] end -->

<script>
    $(document).ready(function() {
        $("#frm_reset").submit(function(event) {
            event.preventDefault();
        });
    });
</script>

<?php $this->endSection(); ?>