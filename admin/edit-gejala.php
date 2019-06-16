<?php
$kode_gejala = $_GET['kode'];
$sqls = mysqli_query($con, "SELECT * FROM tabel_gejala WHERE kode_gejala = '$kode_gejala'") OR DIE(mysqli_error($con));
$sql = mysqli_fetch_array($sqls);

?>


<div class="col-md-8">
    <div class="card card-user">
        <div class="card-header">
        <h5 class="card-title">Edit Data Gejala Penyakit Gigi dan Mulut</h5>
        </div>
        <div class="card-body">
        <form method="post">
            <div class="form-group">
                <label for="kode-gejala">Kode Gejala</label>
                <input type="text" name="kode-gejala" id="kode-gejala" class="form-control" value="<?= $sql['kode_gejala'] ?>" readonly>
            </div>
            <div class="form-group">
                <label for="nama-gejala">Nama Gejala</label>
                <input type="text" name="nama-gejala" id="nama-gejala" class="form-control" value="<?= $sql['nama_gejala'] ?>" required>
            </div>
            <div class="row">
            <div class="update ml-auto mr-auto">
                <button type="submit" name="update-gejala" class="btn btn-info btn-round">Update Gejala</button>
            </div>
            </div>
        </form>
        </div>
    </div>
    </div>

    <!-- PROSES UPDATE GEJALA -->
   <?php
    if ( isset($_POST['update-gejala']) ) {
        $kode_gejala = trim(mysqli_real_escape_string($con, $_POST['kode-gejala']));
        $nama_gejala = trim(mysqli_real_escape_string($con, $_POST['nama-gejala']));

        mysqli_query( $con, "UPDATE tabel_gejala SET nama_gejala = '$nama_gejala' WHERE kode_gejala = '$kode_gejala'" ) or die(mysqli_error($con)); ?>

        <script>
            window.location='pakar.php?a=gejala'
        </script>
<?php }

    ?>

