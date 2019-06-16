<?php
$kode_gejala = $_GET['kode'];

mysqli_query($con, "DELETE FROM tabel_gejala WHERE kode_gejala = '$kode_gejala'") or die(mysqli_error($con));
?>

<script>
    window.location='pakar.php?a=gejala'
</script>