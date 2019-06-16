<?php
$kode_penyakit = $_GET['kode'];

mysqli_query($con, "DELETE FROM tabel_rules WHERE kode_penyakit = '$kode_penyakit'") or die(mysqli_error($con));

echo "
<script>
window.location='pakar.php?a=rules'
</script>
";

?>

