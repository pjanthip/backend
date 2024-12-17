<div class="card">
    <div class="card-body border-bottom pb-0">
        <div class="d-flex align-items-center justify-content-between">
            <h5 class="mb-0"><?= lang($lang . '.transactions'); ?></h5>
            <a class="btn btn-light-secondary btn-sm" role="button" aria-disabled="true"><i class="fas fa-list"></i> <?= lang($lang . '.view_all'); ?></a>
        </div>
        <ul class="nav nav-tabs analytics-tab" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button
                    class="nav-link active"
                    id="analytics-tab-1"
                    data-bs-toggle="tab"
                    data-bs-target="#analytics-tab-1-pane"
                    type="button"
                    role="tab"
                    aria-controls="analytics-tab-1-pane"
                    aria-selected="true"><?= lang($lang . '.transactions_all'); ?></button>
            </li>
            <li class="nav-item" role="presentation">
                <button
                    class="nav-link"
                    id="analytics-tab-2"
                    data-bs-toggle="tab"
                    data-bs-target="#analytics-tab-2-pane"
                    type="button"
                    role="tab"
                    aria-controls="analytics-tab-2-pane"
                    aria-selected="false"><?= lang($lang . '.register_new_member'); ?></button>
            </li>
            <li class="nav-item" role="presentation">
                <button
                    class="nav-link"
                    id="analytics-tab-3"
                    data-bs-toggle="tab"
                    data-bs-target="#analytics-tab-3-pane"
                    type="button"
                    role="tab"
                    aria-controls="analytics-tab-3-pane"
                    aria-selected="false"><?= lang($lang . '.register_new_course'); ?></button>
            </li>
        </ul>
    </div>
    <div class="tab-content" id="myTabContent">
        <div
            class="tab-pane fade show active"
            id="analytics-tab-1-pane"
            role="tabpanel"
            aria-labelledby="analytics-tab-1"
            tabindex="0">
            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                    <div class="d-flex align-items-center">
                        <div class="flex-shrink-0">
                            <div class="avtar avtar-s border bg-light-primary"> ปจ </div>
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <div class="row g-1">
                                <div class="col-6">
                                    <h6 class="mb-0"><a href="#" class="text-dark">ปณิธาน จันทร์ทิพย์</a></h6>
                                    <p class="text-muted mb-0"><small>p.janthip@gmail.com</small></p>
                                </div>
                                <div class="col-6 text-end">
                                    <h6 class="mb-1">25 พ.ย. 67</h6>
                                    <p class="text-secondary mb-0"><i class="fas fa-clock"></i> 16:15 น.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="d-flex align-items-center">
                        <div class="flex-shrink-0">
                            <div class="avtar avtar-s border bg-light-primary" data-bs-toggle="tooltip" data-bs-title="10,000 Tracks"><span>SM</span></div>
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <div class="row g-1">
                                <div class="col-6">
                                    <h6 class="mb-0"><a href="#" class="text-dark">Runanothai Somwong</a></h6>
                                    <p class="text-muted mb-0"><small>+6691 857 5057</small></p>
                                </div>
                                <div class="col-6 text-end">
                                    <h6 class="mb-1">25 พ.ย. 67</h6>
                                    <p class="text-secondary mb-0"><i class="fas fa-clock"></i> 16:15 น.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="d-flex align-items-center">
                        <div class="flex-shrink-0">
                            <div class="avtar avtar-s border bg-light-warning" data-bs-toggle="tooltip" data-bs-title="143 Posts"><span>ยบ</span>
                            </div>
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <div class="row g-1">
                                <div class="col-6">
                                    <h6 class="mb-0"><a href="#" class="text-dark">ยุทธภูมิ บัวใหญ่</a></h6>
                                    <p class="text-muted mb-0"><small>วิจัยและสถิติสำหรับบุคลากรทางสาธารณสุข รุ่นที่ 1</small></p>
                                </div>
                                <div class="col-6 text-end">
                                    <h6 class="mb-1">25 พ.ย. 67</h6>
                                    <p class="text-secondary mb-0"><i class="fas fa-clock"></i> 16:15 น.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <div class="tab-pane fade" id="analytics-tab-2-pane" role="tabpanel" aria-labelledby="analytics-tab-2" tabindex="0">
            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                    <div class="d-flex align-items-center">
                        <div class="flex-shrink-0">
                            <div class="avtar avtar-s border bg-light-primary"> ปจ </div>
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <div class="row g-1">
                                <div class="col-6">
                                    <h6 class="mb-0"><a href="#" class="text-dark">ปณิธาน จันทร์ทิพย์</a></h6>
                                    <p class="text-muted mb-0"><small>p.janthip@gmail.com</small></p>
                                </div>
                                <div class="col-6 text-end">
                                    <h6 class="mb-1">25 พ.ย. 67</h6>
                                    <p class="text-secondary mb-0"><i class="fas fa-clock"></i> 16:15 น.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="d-flex align-items-center">
                        <div class="flex-shrink-0">
                            <div class="avtar avtar-s border bg-light-primary" data-bs-toggle="tooltip" data-bs-title="10,000 Tracks"><span>SM</span></div>
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <div class="row g-1">
                                <div class="col-6">
                                    <h6 class="mb-0"><a href="#" class="text-dark">Runanothai Somwong</a></h6>
                                    <p class="text-muted mb-0"><small>+6691 857 5057</small></p>
                                </div>
                                <div class="col-6 text-end">
                                    <h6 class="mb-1">25 พ.ย. 67</h6>
                                    <p class="text-secondary mb-0"><i class="fas fa-clock"></i> 16:15 น.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <div class="tab-pane fade" id="analytics-tab-3-pane" role="tabpanel" aria-labelledby="analytics-tab-3" tabindex="0">
            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                    <div class="d-flex align-items-center">
                        <div class="flex-shrink-0">
                            <div class="avtar avtar-s border bg-light-warning" data-bs-toggle="tooltip" data-bs-title="143 Posts"><span>ยบ</span>
                            </div>
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <div class="row g-1">
                                <div class="col-6">
                                    <h6 class="mb-0"><a href="#" class="text-dark">ยุทธภูมิ บัวใหญ่</a></h6>
                                    <p class="text-muted mb-0"><small>วิจัยและสถิติสำหรับบุคลากรทางสาธารณสุข รุ่นที่ 1</small></p>
                                </div>
                                <div class="col-6 text-end">
                                    <h6 class="mb-1">25 พ.ย. 67</h6>
                                    <p class="text-secondary mb-0"><i class="fas fa-clock"></i> 16:15 น.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>