<!-- ============================================================== -->
<!-- Container fluid  -->
<!-- ============================================================== -->
<div class="container-fluid">
    <div class="card">
        <div class="card-body row">
            <div class="col-md-3">
                <a href="#" class="btn btn-primary btn-block btn-md">Absen Masuk</a>
            </div>
            <div class="col-md-3">
                <p class="w-500 text-center">-</p>
            </div>
            <div class="col-md-3">
                <a href="#" class="btn btn-danger btn-block btn-md">Absen Keluar</a>
            </div>
            <div class="col-md-3">
                <p class="text-bold text-center">-</p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-4">
            <div class="card ">
                <div class="card-header bg-secondary">
                    <h3 class="card-title text-white">Absensi</h3>
                </div>
                <div class="card-body text-center">
                    <div class="profile-pic mb-3 mt-3">
                        <img src="<?= base_url('images/' . $karyawan['foto_profile']) ?>" width="150" class="rounded-circle" alt="user" />
                        <h4 class="mt-3 mb-2"><?= $username ?></h4>
                        <p class="text-muted"><?= $level ?></p>
                        <p class="text-muted"><?= $id_user ?></p>
                    </div>
                </div>
                <div class="p-4 border-top">
                    <div class="row text-center">
                        <?php
                        if ($jam_pulang['jam_pulang']) { ?>
                            <div class="col-6 border-right">
                                <a href="<?= base_url('presensi/do_absen') ?>" class="btn btn-primary d-flex align-items-center justify-content-center font-weight-medium disabled">Absensi</a>
                            </div>
                        <?php } else { ?>
                            <div class="col-6 border-right">
                                <a href="<?= base_url('presensi/do_absen') ?>" class="btn btn-primary d-flex align-items-center justify-content-center font-weight-medium ">Absensi</a>
                            </div>
                        <?php }
                        ?>


                        <div class="col-6">
                            <button type="button" class="btn btn-danger d-flex align-items-center justify-content-center font-weight-medium" data-toggle="modal" data-target="#ganti_foto">Ganti Foto</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="card ">
                <div class="card-header bg-secondary">
                    <h3 class="card-title text-white">History Kehadiran</h3>
                </div>
                <div class="card-body">
                    <table id="zero_config" class="table table-striped table-bordered">
                        <thead style="font-size: 14px;">
                            <tr>
                                <th>Nama</th>
                                <th>Tanggal</th>
                                <th>Jam Masuk</th>
                                <th>Jam Keluar</th>
                            </tr>
                        </thead>
                        <tbody style="font-size: 14px;">
                            <?php
                            foreach ($get_absensi as $ga) { ?>
                                <tr>
                                    <td><?= $ga['nama'] ?></td>
                                    <td><?= $ga['tanggal'] ?></td>
                                    <td><?= $ga['jam_masuk'] ?></td>
                                    <td><?= $ga['jam_pulang'] ?></td>
                                </tr>
                            <?php }
                            ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    <?= $this->session->flashdata('messageAlert') ?>
</script>
<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->

<div class="modal fade" id="ganti_foto" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myCenterModalLabel">Ganti foto profile</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <form action="" method="post">
                    <div class="form-group">
                        <label for="">Masukan foto</label>
                        <input type="file" class="form-control" name="foto" id="foto">
                    </div>
                    <button type="submit" class="btn btn-primary btn-md">Upload</button>
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->