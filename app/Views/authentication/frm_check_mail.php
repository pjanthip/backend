<?php $this->extend('themes/default/layout-auth'); ?>
<?php $this->section('content'); ?>
<!-- [ Main Content ] start -->
<div class="auth-main">
    <div class="auth-wrapper v1">
        <div class="auth-form">
            <div class="card my-5">
                <div class="card-body">
                    <?php if ($main_frm): ?>
                        <a href="#"><img src="<?= base_url('assets/images/logo-dark.svg') ?>" class="mb-4 img-fluid" alt="img"></a>
                        <div class="mb-4">
                            <h3 class="mb-2"><b><?= lang($lang . '.page.authentication.check_mail.hi_check_mail'); ?></b></h3>
                            <p class="text-muted"><?= lang($lang . '.page.authentication.check_mail.sent_password_instructions'); ?></p>
                        </div>
                        <div class="d-grid mt-3">
                            <a href="<?=site_url('reset-password')?>" class="btn btn-primary"><?= lang($lang . '.page.authentication.check_mail.sign_in'); ?></a>
                        </div>
                    <?php endif; ?>
                    <?php if ($social_frm): ?>
                        <div class="saprator mt-3">
                            <span><?= lang($lang . '.page.authentication.check_mail.sign_up_with'); ?></span>
                        </div>
                        <div class="row g-2">
                            <div class="col-4">
                                <div class="d-grid">
                                    <button type="button" class="btn mt-2 btn-light-primary bg-light text-muted">
                                        <img src="<?= base_url('assets/images/authentication/google.svg') ?>" alt="img"> <span class="d-none d-sm-inline-block"> <?= lang($lang . '.page.authentication.check_mail.google'); ?></span>
                                    </button>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="d-grid">
                                    <button type="button" class="btn mt-2 btn-light-primary bg-light text-muted">
                                        <img src="<?= base_url('assets/images/authentication/twitter.svg') ?>" alt="img"> <span class="d-none d-sm-inline-block">
                                        <?= lang($lang . '.page.authentication.check_mail.twitter'); ?></span>
                                    </button>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="d-grid">
                                    <button type="button" class="btn mt-2 btn-light-primary bg-light text-muted">
                                        <img src="<?= base_url('assets/images/authentication/facebook.svg') ?>" alt="img"> <span class="d-none d-sm-inline-block">
                                        <?= lang($lang . '.page.authentication.check_mail.facebook'); ?></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
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