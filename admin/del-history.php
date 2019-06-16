<?php
$username = $_GET['username'];

mysqli_query($con, "DELETE FROM hasil_konsul WHERE username = '$username'") or die(mysqli_error($con));

echo "
<script>
window.location='pakar.php?a=history'
</script>
";

?>


