<div class="col-md-8">
    <div class="card card-user">
        <div class="card-header">
        <h5 class="card-title">Tambah Data Gejala Penyakit Gigi dan Mulut</h5>
        </div>
        <div class="card-body">
        <form method="post">
            <div class="form-group">
                <label for="kode-gejala">Kode Gejala</label>
                <input type="text" name="kode-gejala" id="kode-gejala" class="form-control" placeholder="contoh: G01, G02, G03, dst" required>
            </div>
            <div class="form-group">
                <label for="nama-gejala">Nama Gejala</label>
                <input type="text" name="nama-gejala" id="nama-gejala" class="form-control" placeholder="contoh: Gigi terasa sakit" required>
            </div>
            <div class="row">
            <div class="update ml-auto mr-auto">
                <button type="reset" class="btn btn-info btn-round">Reset</button>
                <button type="submit" name="simpan-gejala" class="btn btn-success btn-round">Simpan Gejala</button>
            </div>
            </div>
        </form>
        </div>
    </div>
    </div>

    <!-- PROSES SIMPAN GEJALA -->
    <?php
    if ( isset($_POST['simpan-gejala']) ) {
        $kode_gejala = trim(mysqli_real_escape_string($con, $_POST['kode-gejala']));
        $nama_gejala = trim(mysqli_real_escape_string($con, $_POST['nama-gejala']));

        mysqli_query($con, "INSERT INTO tabel_gejala (kode_gejala, nama_gejala) VALUES ('$kode_gejala', '$nama_gejala') ") or die(mysqli_error($con)); ?>
        <script>
            window.location='pakar.php?a=gejala'
        </script>
<?php } ?>

