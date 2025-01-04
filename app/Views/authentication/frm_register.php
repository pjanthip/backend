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
                                    <span><?= lang($lang . '.page.authentication.register.sign_up_facebook'); ?></span>
                                </button>
                                <button type="button" class="btn mt-2 btn-light-primary bg-light text-muted">
                                    <img src="<?= base_url('assets/images/authentication/twitter.svg') ?>" alt="img">
                                    <span><?= lang($lang . '.page.authentication.register.sign_up_twitter'); ?></span>
                                </button>
                                <button type="button" class="btn mt-2 btn-light-primary bg-light text-muted">
                                    <img src="<?= base_url('assets/images/authentication/google.svg') ?>" alt="img">
                                    <span><?= lang($lang . '.page.authentication.register.sign_up_google'); ?></span>
                                </button>
                            </div>
                    </div>
                    <div class="saprator mt-3">
                        <span><?= lang($lang . '.page.authentication.signin.or'); ?></span>
                    </div>
                <?php endif; ?>
                <?php if ($main_frm): ?>
                    <form id="frm_register">
                        <h4 class="text-center f-w-500 my-3"><?= lang($lang . '.page.authentication.register.sign_up_email'); ?></h4>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <input type="text" class="form-control" id="first_name" placeholder="<?= lang($lang . '.page.authentication.register.first_name'); ?>" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <input type="text" class="form-control" id="last_name" placeholder="<?= lang($lang . '.page.authentication.register.last_name'); ?>" required>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <input type="email" class="form-control" id="email" placeholder="<?= lang($lang . '.page.authentication.signin.email_address'); ?>" required>
                        </div>
                        <div class="mb-3">
                            <input type="password" class="form-control" id="password" placeholder="<?= lang($lang . '.page.authentication.signin.password'); ?>" required>
                        </div>
                        <div class="mb-3">
                            <input type="password" class="form-control" id="confirm_password" placeholder="<?= lang($lang . '.page.authentication.register.confirm_password'); ?>" required>
                        </div>
                        <div class="d-flex mt-1 justify-content-between">
                            <div class="form-check">
                                <input class="form-check-input input-primary" type="checkbox" id="agree_terms">
                                <label class="form-check-label text-muted" for="agree_terms">
                                    <?= lang($lang . '.page.authentication.register.agree_terms_text1'); ?>
                                    <a href="#!" data-bs-toggle="modal" data-bs-target="#termsModal">
                                        <?= lang($lang . '.page.authentication.register.agree_terms_text2'); ?>
                                    </a>
                                    <?= lang($lang . '.page.authentication.register.agree_terms_text3'); ?>
                                </label>
                            </div>
                        </div>
                        <div class="d-grid mt-4">
                            <button type="submit" id="signup_button" class="btn btn-primary"><?= lang($lang . '.page.authentication.register.sign_up'); ?></button>
                        </div>
                        <div class="d-flex justify-content-between align-items-end mt-4">
                            <h6 class="f-w-500 mb-0"></h6>
                            <a href="<?= site_url('auth') ?>" class="link-primary">
                                <?= lang($lang . '.page.authentication.register.back_to_login'); ?>
                            </a>
                        </div>
                        <div class="alert error_box d-none alert-danger mt-3" role="alert"><i class="fas fa-exclamation-triangle"></i> <span id="error_message"></span></div>
                    </form>
                <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="termsModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="termsModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="termsModalTitle"><?= lang($lang . '.page.authentication.register.agree_terms_text2'); ?></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <p class="fw-bold mb-1">1. คำนำ</p>
            <p>ยินดีต้อนรับสู่เว็บไซต์ [U-API By CLLI]! การเข้าถึงหรือใช้เว็บไซต์นี้หมายความว่าคุณยอมรับและตกลงตามข้อตกลงและเงื่อนไขการใช้บริการเหล่านี้ หากคุณไม่เห็นด้วยกับข้อตกลงเหล่านี้ กรุณาหยุดการใช้งานเว็บไซต์ทันที</p>
            <p class="fw-bold mb-1">2. การใช้เว็บไซต์</p>
            <p class="mb-1">คุณตกลงที่จะใช้เว็บไซต์นี้เพื่อวัตถุประสงค์ที่ชอบด้วยกฎหมายและสอดคล้องกับเงื่อนไขการใช้งานนี้ คุณจะไม่ใช้เว็บไซต์เพื่อ:</p>
            <p class="mb-1">- กระทำการที่ผิดกฎหมายหรือผิดจริยธรรม</p>
            <p class="mb-1">- ส่งหรือเผยแพร่ข้อมูลที่เป็นอันตราย เช่น ไวรัส หรือมัลแวร์</p>
            <p>- ละเมิดสิทธิทางปัญญาของผู้อื่น</p>

            <p class="fw-bold mb-1">3. บัญชีผู้ใช้งาน</p>

            <p>การเข้าถึงฟีเจอร์บางประการของเว็บไซต์อาจต้องการให้คุณลงทะเบียนบัญชีผู้ใช้งาน คุณตกลงที่จะให้ข้อมูลที่ถูกต้องและเป็นปัจจุบันระหว่างการลงทะเบียน และปรับปรุงข้อมูลหากมีการเปลี่ยนแปลง</p>

            <p class="fw-bold mb-1">4. สิทธิในทรัพย์สินทางปัญญา</p>
            <p>เนื้อหาทั้งหมดในเว็บไซต์นี้รวมถึงข้อความ ภาพ โลโก้ วิดีโอ และซอฟต์แวร์ เป็นทรัพย์สินของ [ชื่อบริษัท/เว็บไซต์] หรือผู้ได้รับอนุญาต และได้รับการคุ้มครองโดยกฎหมายทรัพย์สินทางปัญญา คุณไม่สามารถใช้ คัดลอก หรือแจกจ่ายเนื้อหาของเว็บไซต์นี้โดยไม่ได้รับอนุญาต</p>

            <p class="fw-bold mb-1">5. นโยบายความเป็นส่วนตัว</p>
            <p>การใช้เว็บไซต์นี้จะต้องอยู่ภายใต้การปกป้องข้อมูลตามนโยบายความเป็นส่วนตัวของเรา ซึ่งจะระบุว่าเราจะเก็บรวบรวมและใช้ข้อมูลของคุณอย่างไร กรุณาศึกษานโยบายความเป็นส่วนตัวของเราสำหรับรายละเอียดเพิ่มเติม</p>

            <p class="fw-bold mb-1">6. ลิงก์ไปยังเว็บไซต์ของบุคคลที่สาม</p>
            <p>เว็บไซต์ของเราอาจมีลิงก์ไปยังเว็บไซต์ภายนอกที่ไม่ได้รับการควบคุมจากเรา เราจะไม่รับผิดชอบในเนื้อหาและนโยบายความเป็นส่วนตัวของเว็บไซต์ภายนอกดังกล่าว</p>

            <p class="fw-bold mb-1">7. ข้อจำกัดความรับผิดชอบ</p>
            <p>[U-API By CLLI] จะไม่รับผิดชอบในกรณีที่เกิดความเสียหายทางตรงหรือทางอ้อมจากการใช้งานหรือไม่สามารถใช้งานเว็บไซต์ได้ รวมถึงการสูญเสียข้อมูลหรือกำไร</p>

            <p class="fw-bold mb-1">8. การยกเลิกการใช้บริการ</p>
            <p>เราขอสงวนสิทธิ์ในการยกเลิกหรือระงับการใช้งานบัญชีของคุณหากพบว่ามีการละเมิดเงื่อนไขการใช้งานใดๆ โดยคุณต้องหยุดใช้เว็บไซต์ทันทีเมื่อการยกเลิกบัญชีเสร็จสมบูรณ์</p>

            <p class="fw-bold mb-1">9. การเปลี่ยนแปลงข้อตกลง</p>
            <p>เราสงวนสิทธิ์ในการอัปเดตหรือปรับปรุงข้อตกลงเหล่านี้เป็นครั้งคราว โดยจะเผยแพร่การเปลี่ยนแปลงที่หน้าเว็บนี้ หากคุณใช้บริการหลังจากมีการเปลี่ยนแปลงแล้วถือว่าคุณยอมรับข้อตกลงที่ปรับปรุงแล้ว</p>

            <p class="fw-bold mb-1">10. กฎหมายที่ใช้บังคับ</p>
            <p>ข้อตกลงและเงื่อนไขนี้จะอยู่ภายใต้กฎหมายของ [มหาวิทยาลัยราชภัฏเชียงราย] และหากเกิดข้อพิพาทจะอยู่ในอำนาจของศาล [มหาวิทยาลัยราชภัฏเชียงราย]</p>
            
            <p class="fw-bold mb-1">11. การติดต่อ</p>
            <p>หากคุณมีคำถามหรือข้อกังวลเกี่ยวกับข้อตกลงและเงื่อนไขการใช้งานนี้ โปรดติดต่อเรา:</p>
            
            <p>[clli@crru.ac.th]</p>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><?= lang($lang . '.components.buttons.btn_close'); ?></button>
            </div>
        </div>
    </div>
</div>
<!-- [ Main Content ] end -->

<script>
    $(document).ready(function() {
        $("#frm_register").submit(function(event) {
            $('.error_box').addClass('d-none');

            var firstName = $('#first_name').val().trim();
            var lastName = $('#last_name').val().trim();
            var email = $('#email').val().trim();
            var password = $('#password').val().trim();
            var confirmPassword = $('#confirm_password').val().trim();

            if (firstName === '' || lastName === '') {
                popupRegister(0);
                event.preventDefault();
                return;
            }

            var sqlInjectionPattern = /['";#%&\*()<>\/]/;
            if (sqlInjectionPattern.test(firstName) || sqlInjectionPattern.test(lastName)) {
                popupRegister(1);
                event.preventDefault();
                return;
            }

            var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
            if (!emailPattern.test(email)) {
                popupRegister(2);
                event.preventDefault();
                return;
            }

            if (sqlInjectionPattern.test(email)) {
                popupRegister(3);
                event.preventDefault();
                return;
            }

            var passwordPattern = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{6,}$/;
            if (!passwordPattern.test(password)) {
                popupRegister(4);
                event.preventDefault();
                return;
            }

            if (sqlInjectionPattern.test(password)) {
                popupRegister(5);
                event.preventDefault();
                return;
            }

            if (password !== confirmPassword) {
                popupRegister(6);
                event.preventDefault();
                return;
            }

            var termsAccepted = $('#agree_terms').is(':checked');
            if (!termsAccepted) {
                popupRegister(7);
                event.preventDefault();
                return;
            }

            $.ajax({
                url: '<?= site_url('register/send') ?>',
                type: 'POST',
                dataType: 'json',
                data: {
                    first_name: firstName,
                    last_name: lastName,
                    email: email,
                    password: password,
                    confirm_password: confirmPassword
                },
                success: function(response) {
                    if (response.status) {
                        Swal.fire({
                            title: response.message,
                            icon: "success",
                            confirmButtonText: "<?= lang($lang . '.page.authentication.register.back_to_login'); ?>",
                            cancelButtonText: "<?= lang($lang . '.components.buttons.btn_close'); ?>",
                            showCancelButton: true,
                            allowOutsideClick: false
                        }).then((result) => {
                            if (result.isConfirmed) {
                                setTimeout(() => {
                                    window.location.href = "<?= site_url('auth') ?>";
                                }, 0);
                            }
                        });
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

        function popupRegister(errorCode) {
            $('#error_message').html(errorMessage[errorCode]);
            $('.error_box').removeClass('d-none');
            // Swal.fire({
            //     title: "<?= lang($lang . '.page.authentication.register.register_error_title'); ?>",
            //     text: errorMessage[errorCode],
            //     showCancelButton: true,
            //     showConfirmButton: false,
            //     cancelButtonText: '<?= lang($lang . '.components.buttons.btn_close'); ?>',
            //     icon: "warning"
            // });
        }
    });

    let errorMessage = [
        '<?= lang($lang . '.page.authentication.register.register_error_message1'); ?>',
        '<?= lang($lang . '.page.authentication.register.register_error_message2'); ?>',
        '<?= lang($lang . '.page.authentication.register.register_error_message3'); ?>',
        '<?= lang($lang . '.page.authentication.register.register_error_message4'); ?>',
        '<?= lang($lang . '.page.authentication.register.register_error_message5'); ?>',
        '<?= lang($lang . '.page.authentication.register.register_error_message6'); ?>',
        '<?= lang($lang . '.page.authentication.register.register_error_message7'); ?>',
        '<?= lang($lang . '.page.authentication.register.register_error_message9'); ?>'
    ];
</script>
<?php $this->endSection(); ?>