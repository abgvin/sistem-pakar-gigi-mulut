<?php
unset($_SESSION['user']);
unset($_SESSION['level']);

echo "<script>
        window.location='../login/index.html'
    </script>";

?>