<?php
$kode_penyakit = $_GET['kode'];
$sqls = mysqli_query($con, "SELECT * FROM tabel_penyakit WHERE kode_penyakit = '$kode_penyakit'") or die(mysqli_error($con));
$sql = mysqli_fetch_array($sqls);
?>

<div class="col-md-8">
    <div class="card card-user">
        <div class="card-header">
        <h5 class="card-title">Tambah Data Penyakit Gigi dan Mulut</h5>
        </div>
        <div class="card-body">
        <form method="post">
            <div class="form-group">
                <label for="kode-penyakit">Kode Penyakit</label>
                <input type="text" name="kode-penyakit" id="kode-penyakit" class="form-control" value="<?= $sql['kode_penyakit'] ?>" readonly required>
            </div>
            <div class="form-group">
                <label for="nama-penyakit">Nama Penyakit</label>
                <input type="text" name="nama-penyakit" id="nama-penyakit" class="form-control" value="<?= $sql['nama_penyakit'] ?>" required>
            </div>
            <div class="form-group">
                <label for="keterangan">Keterangan</label>
                <textarea name="keterangan" id="keterangan" rows="10" class="form-control"><?= $sql['keterangan'] ?></textarea>
            </div>
            <div class="form-group">
                <label for="solusi">Solusi</label>
                <textarea name="solusi" id="solusi" rows="10" class="form-control"><?= $sql['solusi'] ?></textarea>
            </div>
            <div class="row">
            <div class="update ml-auto mr-auto">
                <button type="submit" name="edit-penyakit" class="btn btn-success btn-round">Edit Penyakit</button>
            </div>
            </div>
        </form>
        </div>
    </div>
</div>

<?php
if ( isset($_POST['edit-penyakit']) ) {
    $kode_penyakit = trim(mysqli_real_escape_string($con, $_POST['kode-penyakit']));
    $nama_penyakit = trim(mysqli_real_escape_string($con, $_POST['nama-penyakit']));
    $keterangan    = trim(mysqli_real_escape_string($con, $_POST['keterangan']));
    $solusi        = trim(mysqli_real_escape_string($con, $_POST['solusi']));


    mysqli_query($con, "UPDATE tabel_penyakit SET nama_penyakit = '$nama_penyakit', keterangan = '$keterangan', solusi = '$solusi' WHERE kode_penyakit = '$kode_penyakit'") or die(mysqli_error($con)); ?>

    <script>
        window.location='pakar.php?a=penyakit'
    </script>

<?php } ?>



