<?php $this->extend('themes/default/layout-auth'); ?>
<?php $this->section('content'); ?>
<!-- [ Main Content ] start -->
<div class="auth-main">
  <div class="auth-wrapper v1">
    <div class="auth-form">
      <div class="card my-5">
        <div class="card-body">
          <div class="text-center">
            <a href="<?= site_url() ?>"><img src="<?= base_url('assets/images/logo-dark.svg') ?>" alt="img"></a>
            <?php if ($social_frm): ?>
              <div class="d-grid my-3">
                <button type="button" class="btn mt-2 btn-light-primary bg-light text-muted">
                  <img src="<?= base_url('assets/images/authentication/facebook.svg') ?>" alt="img">
                  <span><?= lang($lang . '.page.authentication.signin.sign_in_facebook'); ?></span>
                </button>
                <button type="button" class="btn mt-2 btn-light-primary bg-light text-muted">
                  <img src="<?= base_url('assets/images/authentication/twitter.svg') ?>" alt="img">
                  <span><?= lang($lang . '.page.authentication.signin.sign_in_twitter'); ?></span>
                </button>
                <button type="button" class="btn mt-2 btn-light-primary bg-light text-muted">
                  <img src="<?= base_url('assets/images/authentication/google.svg') ?>" alt="img">
                  <span><?= lang($lang . '.page.authentication.signin.sign_in_google'); ?></span>
                </button>
              </div>
          </div>
          <div class="saprator mt-3">
            <span><?= lang($lang . '.page.authentication.signin.or'); ?></span>
          </div>
        <?php endif; ?>
        <?php if ($main_frm): ?>
          <form id="frm_login">
            <h4 class="text-center f-w-500 my-3"><?= lang($lang . '.page.authentication.signin.sign_in_account'); ?></h4>
            <div class="mb-3">
              <input type="text" class="form-control" id="username" placeholder="<?= lang($lang . '.page.authentication.signin.username'); ?>/<?= lang($lang . '.page.authentication.signin.email'); ?>" required>
            </div>
            <div class="mb-3">
              <div class="input-group">
                <input type="password" class="form-control" id="password" placeholder="<?= lang($lang . '.page.authentication.signin.password'); ?>" required>
                <button class="btn btn-light border rounded-end" id="togglePassword" type="button"><i data-feather="eye-off"></i></button>
              </div>
            </div>
            <div class="d-flex mt-1 justify-content-between align-items-center">
              <div class="form-check">
                <input class="form-check-input input-primary" type="checkbox" id="remember_me">
                <label class="form-check-label text-muted" for="remember_me"><?= lang($lang . '.page.authentication.signin.remember_me'); ?></label>
              </div>
              <a href="<?= site_url('forgot-password') ?>">
                <h6 class="text-secondary f-w-400 mb-0"><?= lang($lang . '.page.authentication.signin.forgot_password'); ?></h6>
              </a>
            </div>
            <div class="d-grid mt-4">
              <button type="submit" class="btn btn-primary"><?= lang($lang . '.page.authentication.signin.login'); ?></button>
            </div>
            <div class="d-flex justify-content-between align-items-end mt-4">
              <h6 class="f-w-500 mb-0"><?= lang($lang . '.page.authentication.signin.dont_have_account'); ?></h6>
              <a href="<?= site_url('register') ?>" class="link-primary"><?= lang($lang . '.page.authentication.signin.create_account'); ?></a>
            </div>
            <div class="alert error_box d-none alert-danger mt-3" role="alert"><i class="fas fa-exclamation-triangle"></i> <span id="error_message"></span></div>
          </form>
        <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
  $(document).ready(function() {
    $("#togglePassword").on('click', function() {
      var passwordField = $('#password');
      var passwordFieldType = passwordField.attr('type');
      if (passwordFieldType === 'password') {
        passwordField.attr('type', 'text');
        $(this).html('<i data-feather="eye"></i>');
      } else {
        passwordField.attr('type', 'password');
        $(this).html('<i data-feather="eye-off"></i>');
      }
      feather.replace();
    });

    $("#frm_login").submit(function(event) {
      let username = $("#username").val();
      let password = $("#password").val();
      let remember_me = ($("#remember_me").prop('checked')) ? 1 : 0;
      $.ajax({
        url: '<?= site_url('signin') ?>',
        type: 'POST',
        dataType: 'json',
        data: {
          username: username,
          password: password,
          remember_me: remember_me
        },
        success: function(response) {
          if (response.status) {
            setTimeout(function() {
              window.location.href = "<?= site_url() ?>";
            }, 0); // 3000 มิลลิวินาที = 3 วินาที
          } else {
            console.log(response);
            $('#error_message').html(response.message);
            $('.error_box').removeClass('d-none');
          }
        },
        error: function(xhr, status, error) {
          console.error('Error Status:', status);
          console.error('XHR Status:', xhr.status);
          console.error('Error Message:', error);
          console.error('Response Text:', xhr.responseText);
        }
      });
      event.preventDefault();
    });
  });
</script>

<?php $this->endSection(); ?>