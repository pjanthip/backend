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
                                <input type="email" class="form-control" id="email" name="email" placeholder="<?= lang($lang . '.page.authentication.signin.email'); ?>">
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
                        <button type="button" id="bt-search" class="btn btn-primary"><i class="fas fa-search"></i> <?= lang($lang . '.components.buttons.btn_search'); ?></button>
                        <button type="button" id="bt-reset" onclick="location.reload();" class="btn btn-danger"><i class="fas fa-redo"></i> <?= lang($lang . '.components.buttons.btn_reset'); ?></button>
                    </div>
                </div>
            </div>
        </div>

        <div id="loading" class="row col-md-12 d-flex justify-content-center text-center pt-5 blinking-text d-none">
            <div class="spinner-border text-secondary" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
            <span class="mt-2"><?=lang($lang.'.response.message.searching')?></span>
        </div>

        <div id="no_data" class="alert alert-danger d-none" role="alert">
            <i class="fas fa-exclamation-circle"></i> <?=lang($lang.'.response.message.no_data_found');?>
        </div>

        <div id="result_search" class="d-none">
            <?= $this->include('systems/administrator/moderators/search_result') ?>
        </div>
        
    </div>
</div>

<script>
    $( document ).ready(function() {
        $( "#bt-search" ).on( "click", function() {
            var firstName = $('#first_name').val();
            var lastName = $('#last_name').val();
            var email = $('#email').val();
            var username = $('#username').val();

            function validateEmail(email) {
                var regex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
                return regex.test(email);
            }

            if (firstName === "" && lastName === "" && email === "" && username === "") {
                Swal.fire({
                    text: "<?=lang($lang.'.components.message.required_fields')?>",
                    icon: "info",
                    confirmButtonText: "<?=lang($lang.'.components.buttons.btn_ok')?>",
                });
            } else {
                if (email !== "" && !validateEmail(email)) {
                    Swal.fire({
                        text: "<?=lang($lang.'.page.authentication.register.register_error_message3')?>",
                        icon: "info",
                        confirmButtonText: "<?=lang($lang.'.components.buttons.btn_ok')?>",
                    });
                } else {
                    $.ajax({
                        url: '<?=site_url('moderators/searchUserData')?>',
                        type: 'POST',
                        dataType: 'json',
                        data: {
                            firstName: firstName,
                            lastName: lastName,
                            email: email,
                            username: username,
                        },
                        beforeSend: function() {
                            $('#result_search').addClass('d-none');
                            $('#no_data').addClass('d-none');
                            $('#loading').removeClass('d-none');
                        },
                        success: function(response) {
                            if (response.status == 'success') {
                                $('#result_search').html(response.data);
                                $('#result_search').removeClass('d-none');
                                $('#no_data').addClass('d-none');
                            } else {
                                $('#no_data').removeClass('d-none');
                            }
                        },
                        error: function(xhr, status, error) {
                            Swal.fire({
                                text: "<?=lang($lang.'.page.searchUser.error_occurred')?>",
                                icon: "error",
                                confirmButtonText: "<?=lang($lang.'.components.buttons.btn_ok')?>",
                            });
                            $('#result_search').addClass('d-none');
                            $('#loading').addClass('d-none');
                            $('#no_data').addClass('d-none');
                        },
                        complete: function() {
                            $('#loading').addClass('d-none');
                        }
                    });
                }
            }
        } );
    });
</script>

<style>
.blinking-text {
    animation: blink 1s linear infinite;
}

@keyframes blink {
    0% {
        opacity: 1;
    }
    50% {
        opacity: 0;
    }
    100% {
        opacity: 1;
    }
}
</style>

<?php $this->endSection(); ?>