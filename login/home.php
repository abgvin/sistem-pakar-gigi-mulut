<?php
$con = mysqli_connect('localhost', 'root', '', 'pakar_gigi_mulut') or die(mysqli_error());
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<title>Sistem Pakar</title>
 <!-- Meta-Tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="Estate Register Form a Responsive Web Template, Bootstrap Web Templates, Flat Web Templates, Android Compatible Web Template, Smartphone Compatible Web Template, Free Webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design">
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- //Meta-Tags -->
	
	<!-- css files -->
	<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
	<!-- //css files -->
	
	<!-- google fonts -->
	<link href="//fonts.googleapis.com/css?family=Raleway:400,500,600,700,800,900" rel="stylesheet">
    <!-- //google fonts -->
    
	
</head>
<body>
<?php
if ( $_GET['a'] == 'login') {
    include('login.php');
} else if ( $_GET['a'] == 'regis' ) {
    include('regis.php');
}

?>

	
</body>
</html>