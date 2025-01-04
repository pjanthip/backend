<?php $this->extend('themes/default/layout'); ?>
<?php $this->section('content'); ?>

<!-- [ Main Content ] start -->
<div class="row">
    <div class="col-12">
        <div class="card table-card">
            <div class="card-body pt-3">
                <div class="table-responsive">
                    <table class="table table-hover" id="pc-dt-simple">
                        <thead>
                            <tr>
                                <th><?= lang($lang.'.page.usersList.name')?></th>
                                <th><?= lang($lang.'.page.authentication.signin.username')?></th>
                                <th><?= lang($lang.'.page.authentication.signin.email')?></th>
                                <th class="text-center"><?= lang($lang.'.page.usersList.status')?></th>
                                <th class="text-center"><?= lang($lang.'.page.usersList.type')?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($UserList as $user):?>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0">
                                            <img src="<?= base_url('assets/images/user/avatar-1.jpg') ?>" alt="user image" class="img-radius wid-40">
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <h6 class="mb-0"><?= esc($user->user_fname); ?> <?= esc($user->user_lname); ?></h6>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <?= esc($user->username); ?>
                                    <button type="button" onclick="copyText('<?= esc($user->username); ?>');" class="btn btn-icon btn-link-info mb-0"><i class="fas fa-copy"></i></button>
                                </td>
                                <td>
                                    <?= esc($user->user_email); ?>
                                    <button type="button" onclick="copyText('<?= esc($user->user_email); ?>');" class="btn btn-icon btn-link-info mb-0"><i class="fas fa-copy"></i></button>
                                </td>
                                <td class="text-start"><?= $user->status_label; ?></td>
                                <td class="text-center">
                                    <?php if(esc($user->user_type) != ""):?>
                                        <span class="badge text-bg-primary"><?=esc($user->user_type);?></span>
                                    <?php else:?>
                                        <span class="badge text-bg-light">Moderators</span>
                                    <?php endif;?>    
                                </td>
                            </tr>
                            <?php endforeach;?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- [ Main Content ] end -->
<script src="<?=base_url('assets/js/datatable-fixed.js')?>"></script>
<script>
    initializeDataTable('pc-dt-simple', '<?= $lang ?>');
    function copyText(text){
        copyToClipboard(text).then(function(response) {
            console.log(response.status);
            let icon, title;
            if(response.status){
                icon = response.icon;
                title = '<?=lang($lang.'.components.message.copy_success')?>';
            }else{
                icon = response.icon;
                title = '<?=lang($lang.'.components.message.copy_fail')?>';
            }
            const Toast = Swal.mixin({
                toast: true,
                position: "top-end",
                showConfirmButton: false,
                timer: 2000,
                backdrop: false,
                timerProgressBar: true,
                didOpen: (toast) => {
                toast.onmouseenter = Swal.stopTimer;
                toast.onmouseleave = Swal.resumeTimer;
                },
            });
            Toast.fire({
                icon: icon,
                title: title,
            });
        });
    }
</script>

<?php $this->endSection(); ?>