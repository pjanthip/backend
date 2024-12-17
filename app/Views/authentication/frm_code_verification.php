<?php $this->extend('themes/default/layout-auth'); ?>
<?php $this->section('content'); ?>
<!-- [ Main Content ] start -->
<div class="auth-main">
    <div class="auth-wrapper v1">
        <div class="auth-form">
            <div class="card my-5">
                <div class="card-body">
                    <?php if ($main_frm): ?>
                    <form id="frm_code_verification">
                        <div class="mb-4">
                            <a href="#"><img src="<?= base_url('assets/images/logo-dark.svg') ?>" class="mb-4 img-fluid" alt="img"></a>
                            <h3 class="mb-2"><b><?= lang($lang . '.page.authentication.code_verification.enter_verification_code'); ?></b></h3>
                            <p class="text-muted mb-4"><?= lang($lang . '.page.authentication.code_verification.sent_on_mail'); ?></p>
                            <p class=""><?= lang($lang . '.page.authentication.code_verification.sent_code_on'); ?> jone. ****@company.com</p>
                        </div>
                        <div class="row my-4 text-center">
                            <div class="col">
                            <input type="number" class="form-control text-center" placeholder="0">
                            </div>
                            <div class="col">
                            <input type="number" class="form-control text-center" placeholder="0">
                            </div>
                            <div class="col">
                            <input type="number" class="form-control text-center" placeholder="0">
                            </div>
                            <div class="col">
                            <input type="number" class="form-control text-center" placeholder="0">
                            </div>
                        </div>
                        <div class="d-grid mt-4">
                            <a href="<?=site_url('auth')?>" class="btn btn-primary"><?= lang($lang . '.page.authentication.code_verification.continue'); ?></a>
                        </div>
                        <div class="d-flex justify-content-start align-items-end mt-3">
                            <p class="mb-0"><?= lang($lang . '.page.authentication.code_verification.did_not_receive_email'); ?></p>
                            <a href="#" class="link-primary ms-2"><?= lang($lang . '.page.authentication.code_verification.resend_code'); ?></a>
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