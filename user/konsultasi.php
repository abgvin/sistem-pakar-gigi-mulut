<?php
if ( !isset($_POST['periksa'] ) ) { ?>

<div class="col-md-12">
    <div class="card card-user">
        <div class="card-header">
        <h5 class="card-title">Pilih Gejala yang dirasakan</h5>
        </div>
        <div class="card-body">
        <form method="post">

            <?php
            $sqls = mysqli_query($con, "SELECT * FROM tabel_gejala") or die(mysqli_error($con));
            while ( $sql = mysqli_fetch_array($sqls) ) { ?>
                <div class="row">
                    <div class="col-md-1 offset-1">
                        <input type="checkbox" name="nama-gejala[]" value="<?= $sql['nama_gejala'] ?>">
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
                <button type="submit" name="periksa" class="btn btn-success btn-round">Periksa</button>
            </div>
            </div>
        </form>
        </div>
    </div>
</div>

<?php
// $time =  round(microtime(true));
// echo "$time";

?>

<?php } else if ( isset($_POST['periksa']) ) {
    $tanggal     = date("Y/m/d h:i:s");
    $gejala      = $_POST['nama-gejala'];
    $jumlah      = count($_POST['nama-gejala']);
    // $nama_gejala = $_POST['nama-gejala'];

    if ( $jumlah < 2 || $jumlah > 10 ) {
        echo "<script>
            alert('Gejala yang di pilih terlalu sedikit atau terlalu banyak');
            window.location='home.php?a=konsul';
        </script>"; 
        exit;
    }

    for ($i=0; $i < $jumlah; $i++) { 
        $query = "SELECT DISTINCT tr.kode_penyakit, tr.kode_gejala, tg.nama_gejala, tp.nama_penyakit, tp.keterangan, tp.solusi FROM tabel_penyakit tp, tabel_rules tr, tabel_gejala tg WHERE tg.nama_gejala = '$gejala[$i]' AND tr.kode_penyakit = tp.kode_penyakit AND tr.kode_gejala = tg.kode_gejala";
        $hasils = mysqli_query($con, $query) OR DIE(mysqli_error($con));
        $hasil = mysqli_fetch_array($hasils);
    } ?>

    <?php
    $tanggal     = date("Y/m/d h:i:s");
    $username      = $_SESSION['username'];
    $nama_lengkap  = $_SESSION['user'];
    $nama_penyakit = $hasil['nama_penyakit'];
    for ($i=0; $i < $jumlah; $i++) {

        mysqli_query($con, "INSERT INTO hasil_konsul (username, nama_lengkap, nama_gejala, nama_penyakit, tanggal) VALUES ('$username', '$nama_lengkap', '$gejala[$i]', '$nama_penyakit', '$tanggal')") or die(mysqli_error($con));
    }

    ?>

    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
            <h5 class="card-title">Hasil Konsultasi : <?= $_SESSION['user'] ?></h5>
            </div>
            <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                <div class="card card-plain">
                    <div class="card-header">
                    <h5 class="card-title">Gejala Yang dipilih</h5>
                    </div>
                    <div class="card-body">
                    <?php
                    for ($i=0; $i < $jumlah; $i++) { ?>
                    <div class="alert alert-info">
                        <span><?= $gejala[$i] ?></span>
                    </div>
                    <?php } ?>
                    </div>
                </div>
                </div>
                <div class="col-md-6">
                <div class="card card-plain">
                    <div class="card-header">
                    <h5 class="card-title">Hasil Diagnosa</h5>
                    </div>
                    <div class="card-body">
                    <div class="alert alert-success">
                        <?php
                        if ( $hasil['nama_penyakit'] == 'Kelainan Dentofacial' || $hasil['nama_penyakit'] == 'Kista dalam Rongga Mulut') { $diagnosa = 'Tidak Ditemukan Hasil Diagnosa, silahkan berkonsultasi dengan Dokter anda untuk info lebih lanjut'; } else { $diagnosa = $hasil['nama_penyakit']; }
                        ?>
                        <span><?= $diagnosa ?></span>
                    </div>
                    <div class="card-header">
                    <h5 class="card-title">Keterangan</h5>
                    </div>
                    <div class="alert alert-primary">
                        <?php
                        if ( $hasil['nama_penyakit'] == 'Kelainan Dentofacial' || $hasil['nama_penyakit'] == 'Kista dalam Rongga Mulut') { $keterangan = 'Tidak Ditemukan Hasil, silahkan berkonsultasi dengan Dokter anda untuk info lebih lanjut'; } else { $keterangan = $hasil['keterangan']; }
                        ?>
                        <span><?= $keterangan ?></span>
                    </div>
                    </div>
                </div>
                </div>
                <div class="col-md-12">
                <div class="card card-plain">
                <div class="card-header">
                    <h5 class="card-title">Solusi</h5>
                    </div>
                    <div class="alert alert-primary">
                        <?php
                        if ( $hasil['nama_penyakit'] == 'Kelainan Dentofacial' || $hasil['nama_penyakit'] == 'Kista dalam Rongga Mulut') { $solusi = 'Silahkan berkonsultasi dengan Dokter anda untuk info lebih lanjut'; } else { $solusi = $hasil['solusi']; }
                        ?>
                        <span><?= $solusi ?></span>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>


<?php } ?>










