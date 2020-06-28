<!-- Main Content -->
<div id="content">

    <!-- Topbar -->
    <nav class="navbar navbar-expand navbar-light mb-5 bg-white topbar fixed-top">
        <!-- Nav - Brand -->
        <a class="navbar-brand d-flex align-items-center justify-content-center ml-4" href="<?= base_url(); ?>">
            <div class="navbar-brand brand-text font-weight-bold ml-2 mx-3">COVID ID</div>
        </a>
        <!-- Topbar Navbar -->
        <ul class="navbar-nav ml-auto">
            <!-- Nav Item - User Information -->
            <li class="nav-item">
                <!-- Topbar Search -->
                <form class="d-none d-sm-inline-block form-inline mr-4 ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                    <div class="input-group">
                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search..." aria-label="Search" aria-describedby="basic-addon2" aria-autocomplete="off">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="submit">
                                <i class="fas fa-search fa-sm"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </li>
        </ul>

    </nav>
    <!-- End of Topbar -->

    <!-- Begin Page Content -->
    <div class="container-fluid margin-top2 px-5">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <div class="d-sm-flex align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Data <?= $data; ?></h6>
                    <h6 class="mb-0 text-gray-800"><?= date('l, d M Y') ?></h6>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr class="text-center">
                                <th>No</th>
                                <th>Countries</th>
                                <th>Positive</th>
                                <th>Recovered</th>
                                <th>Deaths</th>
                            </tr>
                        </thead>

                        <?php for ($no = 1; $no < $num;) { ?>

                            <tbody>
                                <tr>
                                    <td class="text-center"><?= $no; ?></td>
                                    <td><?= $count[$no]['country']; ?></td>
                                    <td class="text-center"><?= number_format($count[$no]['cases']); ?></td>
                                    <td class="text-center"><?= number_format($count[$no]['recovered']); ?></td>
                                    <td class="text-center"><?= number_format($count[$no]['deaths']); ?></td>
                                </tr>
                            </tbody>

                        <?php $no++;
                        } ?>
                        <tfoot>
                            <tr class="text-center">
                                <th>No</th>
                                <th>Countries</th>
                                <th>Positive</th>
                                <th>Recovered</th>
                                <th>Deaths</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->