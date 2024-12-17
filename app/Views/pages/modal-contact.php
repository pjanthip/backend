<div id="contactCenterModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="contactCenterModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle"><i class="fab fa-whatsapp"></i> <?= lang($lang . '.contact'); ?></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <div class="card">
                    <div class="card-header text-center">
                        <h5><?= lang($lang . '.full_name_company'); ?></h5>
                    </div>
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item px-0 pt-0">
                                <div class="row">
                                    <div class="col-md-6">
                                        <p class="mb-1 text-muted"><?= lang($lang . '.phone_number'); ?></p>
                                        <p class="mb-0">053 776 008</p>
                                    </div>
                                    <div class="col-md-6">
                                        <p class="mb-1 text-muted"><?= lang($lang . '.phone_number_internal'); ?></p>
                                        <p class="mb-0">1001 , 1002 , 1003 , 1004 , 1005 , 1007 , 1015</p>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item px-0">
                                <div class="row">
                                    <div class="col-md-6">
                                        <p class="mb-1 text-muted"><?= lang($lang . '.email'); ?></p>
                                        <p class="mb-0">clli@crru.ac.th</p>
                                    </div>
                                    <div class="col-md-6">
                                        <p class="mb-1 text-muted"><?= lang($lang . '.line_oa'); ?></p>
                                        <p class="mb-0">@lifelong.crru</p>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item px-0 pb-0">
                                <p class="mb-1 text-muted"><?= lang($lang . '.address'); ?></p>
                                <p class="mb-0"><?= lang($lang . '.txt_clli_address'); ?></p>
                                <p class="mb-0"><?= lang($lang . '.txt_clli_address_detail'); ?></p>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header text-center">
                        <h5><?= lang($lang . '.hotline'); ?>(<?= lang($lang . '.system_admin'); ?>) : 091 857 5085</h5>
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><?= lang($lang . '.btn_close'); ?></button>
            </div>
        </div>
    </div>
</div>