<!-- ============================================================== -->
<!-- Container fluid  -->
<!-- ============================================================== -->
<div class="container-fluid">
    <div class="row">
        <div class="col-6 col-md-3">
            <div class="alert bg-primary w-100 mb-5" style="z-index: 0">
                <span class="me-4 position-absolute align-items-center" style="top: 40%; ">
                    <i class="fa fa-3x fa-user-graduate text-white"></i>
                </span>
                <div class="fw-bolder text-light text-center mb-2">Guru</div>
                <div class="d-flex text-light justify-content-end">
                    <div class="d-flex align-items-center">
                        <h1 class="m-0 mr-2" style="font-size: 38px;">33</h1>
                        <div class="ps-1 border-left border-light border-3">
                            <div class="fs-7 text-nowrap"><i class="text-white fa fa-fw fa-male me-1"></i>15</div>
                            <div class="fs-7 text-nowrap"><i class="text-white fa fa-fw fa-female me-1"></i>18</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6 col-md-3">
            <div class="alert bg-success w-100 mb-5" style="z-index: 0">
                <span class="me-4 position-absolute align-items-center" style="top: 40%; ">
                    <i class="fa fa-3x fa-user-tie text-white"></i>
                </span>
                <div class="font-weight-bold text-light text-center mb-2">Tenaga Pendidik</div>
                <div class="d-flex text-light justify-content-end">
                    <div class="d-flex align-items-center">
                        <h1 class="m-0 mr-2" style="font-size: 38px;">33</h1>
                        <div class="ps-1 border-left border-light border-3">
                            <div class="fs-7 text-nowrap"><i class="text-white fa fa-fw fa-male me-1"></i>15</div>
                            <div class="fs-7 text-nowrap"><i class="text-white fa fa-fw fa-female me-1"></i>18</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-6 col-md-3">
            <div class="alert bg-warning w-100 mb-5" style="z-index: 0">
                <span class="me-4 position-absolute align-items-center" style="top: 40%; ">
                    <i class="fa fa-3x fa-users text-white"></i>
                </span>
                <div class="font-weight-bold text-light text-center mb-2">Peserta Didik</div>
                <div class="d-flex text-light justify-content-end">
                    <div class="d-flex align-items-center">
                        <h1 class="m-0 mr-2" style="font-size: 38px;">33</h1>
                        <div class="ps-1 border-left border-light border-3">
                            <div class="fs-7 text-nowrap"><i class="text-white fa fa-fw fa-male me-1"></i>15</div>
                            <div class="fs-7 text-nowrap"><i class="text-white fa fa-fw fa-female me-1"></i>18</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-6 col-md-3">
            <div class="alert bg-danger w-100 mb-5" style="z-index: 0">
                <span class="me-4 position-absolute align-items-center" style="top: 40%; ">
                    <i class="fa fa-3x fa-user text-white"></i>
                </span>
                <div class="font-weight-bold text-light text-center mb-2">Rombongan Belajar</div>
                <div class="d-flex text-light justify-content-end">
                    <div class="d-flex align-items-center">
                        <h1 class="m-0 mr-2" style="font-size: 38px;">33</h1>
                        <div class="ps-1 border-left border-light border-3">
                            <div class="fs-7 text-nowrap"><i class="text-white fa fa-fw fa-male me-1"></i>15</div>
                            <div class="fs-7 text-nowrap"><i class="text-white fa fa-fw fa-female me-1"></i>18</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="row">
        <div class="col-sm-6">
            <div class="card ">
                <div class="card-header bg-white">
                    <h3 class="card-title text-secondary">Presentase Kehadiran</h3>
                    <span>Data presentase Kehadiran</span>
                </div>
                <div class="card-body bg-white">
                    <canvas id="radar-chart" height="150"></canvas>
                </div>
            </div>
        </div>

        <div class="col-sm-6">
            <div class="card ">
                <div class="card-header bg-secondary">
                    <h3 class="card-title text-white">Informasi</h3>
                </div>
                <div class="card-body">
                    <h1 class="text-center">Tester Card</h1>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->

<script>
    <?= $this->session->flashdata('messageAlert') ?>
</script>