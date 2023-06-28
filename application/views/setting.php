<div class="container-fluid">
    <div class="card ">
        <div class="card-header bg-primary text-white">
            <h3>Tambah data karyawan</h3>
        </div>
        <?= form_open_multipart('setting/addKaryawan') ?>
        <div class="card-body">
            <div class="form-group row">
                <label for="nik" class="col-sm-4 col-form-label">Nomor induk Karyawan</label>
                <div class="col-md-8">
                    <input type="text" class="form-control" name="nik" placeholder="NIK">
                </div>
            </div>
            <div class="form-group row">
                <label for="nama" class="col-sm-4 col-form-label">Nama Lengkap</label>
                <div class="col-md-8">
                    <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap">
                </div>
            </div>
            <div class="form-group row">
                <label for="tanggal-lahir" class="col-sm-4 col-form-label">Tanggal Lahir</label>
                <div class="col-md-8">
                    <input type="date" class="form-control" name="tanggal_lahir">
                </div>
            </div>
            <div class="form-group row">
                <label for="email" class="col-sm-4 col-form-label">Email</label>
                <div class="col-md-8">
                    <input type="email" class="form-control" name="email" placeholder="Email">
                </div>
            </div>
            <div class="form-group row">
                <label for="NomorTelepon" class="col-sm-4 col-form-label">Nomor Telepon</label>
                <div class="col-md-8">
                    <input type="number" class="form-control" name="no_telp" placeholder="Nomor Telepon">
                </div>
            </div>
            <div class="form-group row">
                <label for="TanggalMasuk" class="col-sm-4 col-form-label">Tanggal Masuk</label>
                <div class="col-md-8">
                    <input type="date" class="form-control" name="tanggal_masuk" placeholder="Tanggal Masuk">
                </div>
            </div>
            <div class="form-group row">
                <label for="TanggalMasuk" class="col-sm-4 col-form-label">Jabatan</label>
                <div class="col-md-8">
                    <input type="text" class="form-control" name="jabatan" placeholder="Jabatan">
                </div>
            </div>
            <div class="form-group row">
                <label for="Password" class="col-sm-4 col-form-label">Password</label>
                <div class="col-md-8">
                    <input type="password" class="form-control" name="password" placeholder="Password">
                </div>
            </div>
            <div class="form-group row">
                <label for="FotoProfile" class="col-sm-4 col-form-label">Foto Profile</label>
                <div class="col-md-8">
                    <input type="file" class="form-control" name="filename">
                </div>
            </div>
        </div>
        <div class="card-footer">
            <button class="btn btn-primary btn-md" type="submit">Submit Data</button>
        </div>
        </form>
    </div>
    <script>
        <?= $this->session->flashdata('messageAlert') ?>
    </script>
</div>
<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->