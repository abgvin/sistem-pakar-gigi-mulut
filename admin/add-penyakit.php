<div class="col-md-8">
    <div class="card card-user">
        <div class="card-header">
        <h5 class="card-title">Tambah Data Penyakit Gigi dan Mulut</h5>
        </div>
        <div class="card-body">
        <form method="post">
            <div class="form-group">
                <label for="kode-penyakit">Kode Penyakit</label>
                <input type="text" name="kode-penyakit" id="kode-penyakit" class="form-control" placeholder="contoh: P01, P02, P03, dst" required>
            </div>
            <div class="form-group">
                <label for="nama-penyakit">Nama Penyakit</label>
                <input type="text" name="nama-penyakit" id="nama-penyakit" class="form-control" placeholder="contoh: Karies Gigi" required>
            </div>
            <div class="form-group">
                <label for="keterangan">Keterangan</label>
                <textarea name="keterangan" id="keterangan" cols="30" rows="10" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <label for="solusi">Solusi</label>
                <textarea name="solusi" id="solusi" cols="30" rows="10" class="form-control"></textarea>
            </div>
            <div class="row">
            <div class="update ml-auto mr-auto">
                <button type="reset" class="btn btn-info btn-round">Reset</button>
                <button type="submit" name="simpan-penyakit" class="btn btn-success btn-round">Simpan Penyakit</button>
            </div>
            </div>
        </form>
        </div>
    </div>
</div>


<?php
if ( isset($_POST['simpan-penyakit']) ) {
    $kode_penyakit = trim(mysqli_real_escape_string($con, $_POST['kode-penyakit']));
    $nama_penyakit = trim(mysqli_real_escape_string($con, $_POST['nama-penyakit']));
    $keterangan    = trim(mysqli_real_escape_string($con, $_POST['keterangan']));
    $solusi        = trim(mysqli_real_escape_string($con, $_POST['solusi']));

    mysqli_query($con, "INSERT INTO tabel_penyakit (kode_penyakit, nama_penyakit, keterangan,solusi) VALUES ('$kode_penyakit', '$nama_penyakit', '$keterangan', '$solusi')") or die(mysqli_error($con)); ?>

    <script>
        window.location='pakar.php?a=penyakit'
    </script>

<?php } ?>



