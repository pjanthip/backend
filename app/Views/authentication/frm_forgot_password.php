<?php $this->extend('themes/default/layout-auth'); ?>
<?php $this->section('content'); ?>
<!-- [ Main Content ] start -->
<div class="auth-main">
    <div class="auth-wrapper v1">
        <div class="auth-form">
            <div class="card my-5">
                <div class="card-body">
                    <?php if ($main_frm): ?>
                    <form id="frm_forgot">
                        <a href="#"><img src="<?= base_url('assets/images/logo-dark.svg') ?>" class="mb-4 img-fluid" alt="img"></a>
                        <div class="d-flex justify-content-between align-items-end mb-4">
                            <h3 class="mb-0"><b><?= lang($lang . '.page.authentication.signin.forgot_password'); ?></b></h3>
                            <a href="<?=site_url('auth')?>" class="link-primary"><?= lang($lang . '.page.authentication.register.back_to_login'); ?></a>
                        </div>
                        <div class="mb-3">
                            <label class="form-label"><?= lang($lang . '.page.authentication.signin.email_address'); ?></label>
                            <input type="email" class="form-control" id="floatingInput" placeholder="<?= lang($lang . '.page.authentication.signin.email_address'); ?>">
                        </div>
                        <p class="mt-4 text-sm text-muted"><?= lang($lang . '.page.authentication.forgot_password.dont_forget_spam'); ?></p>
                        <div class="d-grid mt-3">
                            <a href="<?=site_url('check-mail')?>" class="btn btn-primary"><?= lang($lang . '.page.authentication.forgot_password.send_password_reset'); ?></a>
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