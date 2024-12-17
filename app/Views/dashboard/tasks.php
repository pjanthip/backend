<div class="card task-card">
    <div class="card-header d-flex align-items-center justify-content-between">
        <h5><?= lang($lang . '.tasks'); ?></h5>
        <a class="btn btn-light-secondary btn-sm" role="button" aria-disabled="true"><i class="fas fa-list"></i> <?= lang($lang . '.view_all'); ?></a>
    </div>
    <div class="card-body">
        <ul class="list-unstyled task-list">
            <li>
                <i class="feather icon-check f-w-600 task-icon bg-success"></i>
                <p class="m-b-5">8:50</p>
                <h5 class="text-muted">Call to customer <span class="text-primary"> <a href="#!" class="text-primary">Jacob</a> </span> and discuss the</h5>
            </li>
            <li>
                <i class="task-icon bg-primary"></i>
                <p class="m-b-5">Sat, 5 Mar</p>
                <h5 class="text-muted">Design mobile Application</h5>
            </li>
            <li>
                <i class="task-icon bg-danger"></i>
                <p class="m-b-5">Sun, 17 Feb</p>
                <h5 class="text-muted"><span class="text-primary"><a href="#!" class="text-primary">Jeny</a></span>
                    assign you a task
                    <span class="text-primary"><a href="#!" class="text-primary">Mockup Design.</a></span>
                </h5>
            </li>
            <li>
                <i class="task-icon bg-warning"></i>
                <p class="m-b-5">Sat, 18 Mar</p>
                <h5 class="text-muted">Design logo</h5>
            </li>
            <li class="p-b-15 m-b-10">
                <i class="task-icon bg-success"></i>
                <p class="m-b-5">Sat, 22 Mar</p>
                <h5 class="text-muted">Design mobile Application</h5>
            </li>
        </ul>
        <div class="text-end">
            <a href="#!" class="b-b-primary text-primary"><i class="fas fa-plus"></i> <?= lang($lang . '.new_task'); ?></a>
        </div>
    </div>
</div>