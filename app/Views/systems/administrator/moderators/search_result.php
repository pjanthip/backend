<?php if (!empty($users)):
    $count = count($users);
    $i = 0;
?>
<div class="card">
    <div class="card-header d-flex align-items-center justify-content-between py-3">
        <h5><?=lang($lang.'.page.searchUser.result')?> (<?=lang($lang.'.page.searchUser.number_of_found')?>: <?=$count?> )</h5>
        <a class="avtar avtar-s btn-link-secondary" href="#">
            <i class="ti ti-bookmarks f-18"></i>
        </a>
    </div>
    <div class="card-body">
    <?php foreach ($users as $user): ?>

        <div class="card shadow-none border mb-3">
            <div class="card-header">
                <div class="d-flex align-items-center">
                    <div class="flex-shrink-0">
                        <div class="avtar avtar-l btn-light-secondary rounded-circle">
                            <i class="ti ti-photo f-18"></i>
                        </div>
                    </div>
                    <div class="flex-grow-1 mx-3">
                        <h6 class="mb-0"><?=lang($lang.'.page.authentication.register.first_name')?> - <?=lang($lang.'.page.authentication.register.last_name')?> : <?= esc($user->user_fname) ?> <?= esc($user->user_lname) ?></h6>
                        <p class="mb-0"><?=lang($lang.'.page.authentication.signin.username')?> : <?= esc($user->username) ?></p>
                    </div>
                    <div class="flex-shrink-0">
                        <button class="btn btn-sm btn-light-secondary">UID : <?=esc($user->id)?></button>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="row g-3 mb-3">
                    <div class="col-md-6">
                        <div class="card shadow-none border mb-0 h-100">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1 me-3">
                                        <h6 class="mb-0"><?=lang($lang.'.page.searchUser.user_Information')?></h6>
                                    </div>
                                    <div class="flex-shrink-0">
                                        <button class="btn btn-sm btn-light-secondary"><i class="ti ti-edit"></i> <?=lang($lang.'.components.buttons.btn_edit')?></button>
                                    </div>
                                </div>
                                <div class="mb-3 mt-3">
                                    <label class="form-label"><?=lang($lang.'.page.authentication.register.first_name')?></label>
                                    <input type="email" class="form-control" value="<?= esc($user->user_fname) ?>" readonly>
                                </div>
                                <div class="mb-3 mt-3">
                                    <label class="form-label"><?=lang($lang.'.page.authentication.register.last_name')?></label>
                                    <input type="email" class="form-control" value="<?= esc($user->user_lname) ?>" readonly>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card shadow-none border mb-0 h-100">
                            <div class="card-body">
                                <h6 class="mb-2"><?=lang($lang.'.page.authentication.signin.password')?></h6>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="mb-3">
                                            <label class="form-label" for="password"><?=lang($lang.'.page.searchUser.new_password')?></label>
                                            <input type="password" class="form-control" placeholder="<?=lang($lang.'.page.searchUser.new_password')?>" value="">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="mb-3">
                                            <label class="form-label" for="confirm_password"><?=lang($lang.'.page.searchUser.current_password')?></label>
                                            <input type="confirm_password" class="form-control" placeholder="<?=lang($lang.'.page.searchUser.current_password')?>" value="">
                                        </div>
                                    </div>
                                </div>
                                <p><?=lang($lang.'.page.searchUser.cannot_remember')?> <a href="#" class="link-primary text-decoration-underline"><?=lang($lang.'.page.searchUser.reset_your_password')?></a></p>
                                <button class="btn btn-primary"><?=lang($lang.'.page.searchUser.save_password')?></button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row g-3">
                    <div class="col-md-6">
                        <div class="card shadow-none border mb-0 h-100">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1 me-3">
                                        <h6 class="mb-0"><?=lang($lang.'.page.authentication.signin.username')?></h6>
                                    </div>
                                    <div class="flex-shrink-0">
                                        <button class="btn btn-sm btn-light-secondary"><i class="ti ti-edit"></i> <?=lang($lang.'.components.buttons.btn_edit')?></button>
                                    </div>
                                </div>
                                <div class="mb-3 mt-3">
                                    <label class="form-label"><?=lang($lang.'.page.authentication.signin.username')?></label>
                                    <input type="username" class="form-control" placeholder="<?=lang($lang.'.page.authentication.signin.username')?>" value="<?= esc($user->username) ?>" readonly>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card shadow-none border mb-0 h-100">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1 me-3">
                                        <h6 class="mb-0"><?=lang($lang.'.page.authentication.signin.email_address')?></h6>
                                    </div>
                                    <div class="flex-shrink-0">
                                        <button class="btn btn-sm btn-light-secondary"><i class="ti ti-edit"></i> <?=lang($lang.'.components.buttons.btn_edit')?></button>
                                    </div>
                                </div>
                                <div class="mb-3 mt-3">
                                    <label class="form-label"><?=lang($lang.'.page.searchUser.your_email_address')?></label>
                                    <input type="email" class="form-control" placeholder="<?=lang($lang.'.page.authentication.signin.email_address')?>" value="<?= esc($user->user_email) ?>">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row g-3">
            <div class="col-md-12 col-xl-3">
                <div class="card shadow-none border mb-0">
                    <div class="card-body">
                        <h6 class="mb-3 fw-medium"><?=lang($lang.'.page.searchUser.user_type')?></h6>
                        <h4 class="mb-3 fw-normal"><?=(esc($user->user_type)==="administrator")? "<span class='text-success'>Administrator</span>":"<span class='text-info'>Moderator</span>"?></h4>
                        <a href="#" class="link-primary d-flex align-items-center gap-2"><?=lang($lang.'.manage')?> <i class="ti ti-chevron-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-xl-3">
                <div class="card shadow-none border mb-0">
                    <div class="card-body">
                        <h6 class="mb-3 fw-medium"><?=lang($lang.'.menus.cb.access_rights')?></h6>
                        <div class="box-no-access">
                            <h4 class="mb-3 fw-normal text-muted"><?=lang($lang.'.page.searchUser.no_access_right')?></h4>
                        </div>
                        <div class="box-access-right d-none">
                            <div class="mb-4">
                                <h4 class="mb-3 fw-normal text-muted">
                                    <i class="fas fa-dice-d6"></i> Creditbank
                                </h4>
                                <ul class="list-inline text-muted">
                                    <li class="list-inline-item">
                                        <i class="fas fa-caret-right Teaching"></i> Management Work
                                    </li>
                                    <li class="list-inline-item">
                                        <i class="fas fa-caret-right Teaching"></i> Management Work
                                    </li>
                                    <li class="list-inline-item">
                                        <i class="fas fa-caret-right Teaching"></i> Management Work
                                    </li>
                                    <li class="list-inline-item">
                                        <i class="fas fa-caret-right Teaching"></i> Management Work
                                    </li>
                                </ul>
                            </div>
                            <div class="mb-3">
                                <h4 class="mb-3 fw-normal text-muted">
                                    <i class="fas fa-dice-d6"></i> CWIE
                                </h4>
                                <ul class="list-inline text-muted">
                                    <li class="list-inline-item">
                                        <i class="fas fa-caret-right Teaching"></i> Management Work
                                    </li>
                                    <li class="list-inline-item">
                                        <i class="fas fa-caret-right Teaching"></i> Management Work
                                    </li>
                                    <li class="list-inline-item">
                                        <i class="fas fa-caret-right Teaching"></i> Management Work
                                    </li>
                                    <li class="list-inline-item">
                                        <i class="fas fa-caret-right Teaching"></i> Management Work
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <a href="#" class="link-primary d-flex align-items-center gap-2"><?=lang($lang.'.manage')?> <i class="ti ti-chevron-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-xl-3">
                <div class="card shadow-none border mb-0">
                    <div class="card-body">
                        <h6 class="mb-3 fw-medium"><?=lang($lang.'.page.searchUser.activity_logs')?></h6>
                        <h4 class="mb-3 fw-normal">IP Address: 192.168.1.1</h4>
                        <a href="#" class="link-primary d-flex align-items-center gap-2"><?=lang($lang.'.view_all')?> <i class="ti ti-chevron-right"></i></a>
                    </div>
                </div>
            </div>
            
            <div class="col-md-12 col-xl-3">
                <div class="card shadow-none border mb-0">
                    <div class="card-body">
                        <h6 class="mb-3 fw-medium"><?=lang($lang.'.page.searchUser.account_status')?></h6>
                        <h4 class="mb-3 fw-normal text-success"><i class="fas fa-check-circle text-success"></i>  Active</h4>
                        <a href="#" class="link-primary d-flex align-items-center gap-2"><?=lang($lang.'.manage')?> <i class="ti ti-chevron-right"></i></a>
                        <!-- <div class="btn-group mb-2 me-2">
                            <button class="btn btn-light dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-sliders-h"></i> Manage</button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item text-warning" href="#!"><i class="fas fa-clock"></i> Pending</a>
                                <a class="dropdown-item text-success" href="#!"><i class="fas fa-check-circle"></i> Active</a>
                                <a class="dropdown-item text-info" href="#!"><i class="fas fa-pause-circle"></i> Pause</a>
                                <a class="dropdown-item text-danger" href="#!"><i class="fas fa-times-circle"></i> Banned</a>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="card shadow-none border mb-0">
                    <div class="card-body">
                        <h6 class="mb-3"><?=lang($lang.'.page.searchUser.delete_account')?></h6>
                        <p class="mb-3"><?=lang($lang.'.page.searchUser.delete_your_text1')?> <br> <?=lang($lang.'.page.searchUser.delete_your_text2')?></p>
                        <button class="btn btn-danger"><i class="fas fa-trash-alt"></i> <?=lang($lang.'.page.searchUser.delete_account')?></button>
                    </div>
                </div>
            </div>
        </div>
        <?php
            $i++;
            if($count > $i){
                echo '<br/><br/><hr/><br/><br/>';
            }
            endforeach;
        ?>
    </div>
</div>
<?php else: ?>
    <p><?=lang($lang.'.user_not_found')?></p>
<?php endif; ?>