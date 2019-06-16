<div class="col-md-8">
    <div class="card card-user">
        <div class="card-header">
        <h5 class="card-title">Tambah Rules Sistem Pakar</h5>
        </div>
        <div class="card-body">
        <form method="post">
            <div class="form-group">
            <label for="nama-penyakit">Nama Penyakit</label>
            <?php
            $sqls = mysqli_query($con, "SELECT * FROM tabel_penyakit") or die(mysqli_error($con)); ?>
            <select name="kode-penyakit" id="kode-penyakit" class="form-control"> 
                <option value=""> Pilih Penyakit </option>
                <?php while ( $sql = mysqli_fetch_array($sqls) ) { ?>
                <option value="<?= $sql['kode_penyakit'] ?>"><?= $sql['kode_penyakit'] ?> - <?= $sql['nama_penyakit'] ?></option>
                <?php } ?>
            </select>
            </div>

            <div class="card-header">
                <h5 class="card-title">Pilih Gejala Penyakit</h5>
            </div>
            <?php
            $sqls = mysqli_query($con, "SELECT * FROM tabel_gejala") or die(mysqli_error($con));
            while ( $sql = mysqli_fetch_array($sqls) ) { ?>
                <div class="row">
                    <div class="col-md-1 offset-1">
                        <input type="checkbox" name="kode-gejala[]" value="<?= $sql['kode_gejala'] ?>">
                    </div>
                    <div class="col-md-10">
                        <?= $sql['kode_gejala'] ?> - <?= $sql['nama_gejala'] ?> <br>
                    </div>
                </div>
                <hr>
            <?php } ?>
            <div class="row">
            <div class="update ml-auto mr-auto">
                <button type="reset" class="btn btn-info btn-round">Reset</button>
                <button type="submit" name="simpan-rule" class="btn btn-success btn-round">Simpan Rule</button>
            </div>
            </div>
        </form>
        </div>
    </div>
</div>

<?php
if ( isset($_POST['simpan-rule']) ) {
    $kode_penyakit = trim(mysqli_real_escape_string($con, $_POST['kode-penyakit']));
    $kode_gejala   = $_POST['kode-gejala'];
    $jumlah        = count($_POST['kode-gejala']);

    for ($i=0; $i < $jumlah; $i++) { 
        mysqli_query($con, "INSERT INTO tabel_rules (kode_penyakit, kode_gejala) VALUES ('$kode_penyakit', '$kode_gejala[$i]')") or die(mysqli_error($con));
    }

    echo "<script>
    window.location='pakar.php?a=rules'
</script>";

}
?>


