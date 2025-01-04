<?php $this->extend('themes/default/layout'); ?>
<?php $this->section('content'); ?>

<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-body">
              <form class="needs-validation" novalidate>
                <div class="row">
                  <div class="col-md-6 mb-3">
                    <label class="form-label" for="first_name"><?= lang($lang . '.page.authentication.register.first_name'); ?></label>
                    <input type="text" class="form-control" id="first_name" placeholder="<?= lang($lang . '.page.authentication.register.first_name'); ?>" value="" required>
                    <div class="invalid-feedback"> Looks good! </div>
                  </div>
                  <div class="col-md-6 mb-3">
                    <label class="form-label" for="last_name"><?= lang($lang . '.page.authentication.register.last_name'); ?></label>
                    <input type="text" class="form-control" id="last_name" placeholder="<?= lang($lang . '.page.authentication.register.last_name'); ?>" value="" required>
                    <div class="invalid-feedback"> Looks good! </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6 mb-3">
                    <label class="form-label" for="email"><?= lang($lang . '.page.authentication.signin.email_address'); ?></label>
                    <input type="text" class="form-control" id="email" placeholder="<?= lang($lang . '.page.authentication.signin.email_address'); ?>" required>
                    <div class="invalid-feedback"> Please provide a valid city. </div>
                  </div>
                  <div class="col-md-6 mb-3">
                    <label class="form-label" for="user_type">User Type</label>
                    <select class="form-select" id="user_type" required>
                        <option selected disabled value="">Choose...</option>
                        <option value="moderators">Moderators</option>
                        <option value="administrator">Administrator</option>
                    </select>
                    <div class="invalid-tooltip"> Please select a User Type. </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6 mb-3">
                    <label class="form-label" for="password"><?= lang($lang . '.page.authentication.signin.password'); ?></label>
                    <input type="text" class="form-control" id="password" placeholder="<?= lang($lang . '.page.authentication.signin.password'); ?>" required>
                    <div class="invalid-feedback"> Please provide a valid city. </div>
                  </div>
                  <div class="col-md-6 mb-3">
                    <label class="form-label" for="confirm_password"><?= lang($lang . '.page.authentication.register.confirm_password'); ?></label>
                    <input type="text" class="form-control" id="confirm_password" placeholder="<?= lang($lang . '.page.authentication.register.confirm_password'); ?>" required>
                    <div class="invalid-feedback"> Please provide a valid city. </div>
                  </div>
                </div>
                <div class="mb-3">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="agree_terms" required>
                    <label class="form-check-label text-muted" for="agree_terms">
                                    <?= lang($lang . '.page.authentication.register.agree_terms_text1'); ?>
                                    <a href="#!" data-bs-toggle="modal" data-bs-target="#termsModal">
                                        <?= lang($lang . '.page.authentication.register.agree_terms_text2'); ?>
                                    </a>
                                    <?= lang($lang . '.page.authentication.register.agree_terms_text3'); ?>
                                </label>
                    <div class="invalid-feedback"> You must agree before submitting. </div>
                  </div>
                </div>
                <hr>
                <div class="row bg-orange-100 py-4 mb-3 rounded">
                  <div class="col-md-6 mb-3">
                    <label class="form-label" for="user_type">Account Status</label>
                    <select class="form-select" id="user_type" required>
                        <option selected disabled value="">Choose...</option>
                        <option class="text-warning" value="0">Pending</option>
                        <option class="text-success" value="1">Active</option>
                        <option class="text-primary" value="2">Paused</option>
                        <option class="text-danger" value="3">Banned</option>
                    </select>
                    <div class="invalid-tooltip"> Please select a User Type. </div>
                  </div>
                  <div class="col-md-6 mb-3">
                    <label class="form-label" for="create_by">ลงทะเบียนโดย</label>
                    <input type="text" class="form-control" id="create_by" value="<?= session()->get('full_name'); ?>" disabled>
                  </div>
                </div>
                <button class="btn btn-primary" type="submit"><i class="fas fa-save"></i> <?=lang($lang.'.components.buttons.btn_save')?></button>
              </form>

              <script>
                // Example starter JavaScript for disabling form submissions if there are invalid fields
                (function () {
                  'use strict';
                  window.addEventListener(
                    'load',
                    function () {
                      // Fetch all the forms we want to apply custom Bootstrap validation styles to
                      var forms = document.getElementsByClassName('needs-validation');
                      // Loop over them and prevent submission
                      var validation = Array.prototype.filter.call(forms, function (form) {
                        form.addEventListener(
                          'submit',
                          function (event) {
                            if (form.checkValidity() === false) {
                              event.preventDefault();
                              event.stopPropagation();
                            }
                            form.classList.add('was-validated');
                          },
                          false
                        );
                      });
                    },
                    false
                  );
                })();
              </script>
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

<?php $this->endSection(); ?>