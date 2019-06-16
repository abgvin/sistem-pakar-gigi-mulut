<?php
session_start();
if ( empty ($_SESSION['user'] ) ) {
    echo "  <script>
            window.location='login/'
            </script>";
} else if ( $_SESSION['level'] == 'admin' ) {
    echo "  <script>
            window.location='admin/'
            </script>";
} else {
    echo "  <script>
            window.location='user/'
            </script>";
}

?>

