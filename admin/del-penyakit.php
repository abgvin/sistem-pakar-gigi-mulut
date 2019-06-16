<?php
$kode_penyakit = $_GET['kode'];

mysqli_query($con, "DELETE FROM tabel_penyakit WHERE kode_penyakit = '$kode_penyakit'") or die(mysqli_error($con));

?>

<script>
    window.location='pakar.php?a=penyakit'
</script>