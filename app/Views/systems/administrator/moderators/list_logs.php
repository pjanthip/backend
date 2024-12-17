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
                                <th class="col-md-2 text-center">Date & Time</th>
                                <th class="col-md-2 text-center">Username</th>
                                <th class="col-md-2 text-center">Ip addrss</th>
                                <th class="col-md-3 text-center">Action</th>
                                <th class="col-md-3 text-center">User Agent</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php for($i=0;$i<100;$i++):?>
                            <tr>
                                <td class="text-center">2021-10-31 00:00:00</td>
                                <td>admin</td>
                                <td class="text-center">10.2.20.62</td>
                                <td>User - Create</td>
                                <td>Mozilla/5.0</td>
                            </tr>
                            <?php endfor;?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- [ Main Content ] end -->

  <!-- [Page Specific JS] start -->
  <script type="module">
    import {DataTable} from "<?= base_url('assets/js/plugins/module.js') ?>"
    window.dt = new DataTable("#pc-dt-simple");
  </script>

<?php $this->endSection(); ?>