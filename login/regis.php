
<form action="" method="post">
<div class="signupform">
	<div class="container">
		<!-- main content -->
		<div class="agile_info">
			<div class="w3l_form">
				<div class="">
					<img src="images/rabby-ahmed-735902-unsplash.jpg" alt="" />
				</div>
			</div>
			<div class="w3_info">
				<h2>Registrasi</h2>
				<p>Vestibulum est nulla, fermentum eget ipsum euismod et, tincidunt at dui dolor sit.</p>
					<form action="#" method="post">
						<div class="input-group">
							<span><i class="fa fa-user"></i></span>
							<input type="text" placeholder="Nama Lengkap" required="" name="nama-lengkap"> 
						</div>
						<div class="input-group">
							<span><i class="fa fa-user"></i></span>
							<input type="text" placeholder="Username" required="" name="username"> 
						</div>
						<div class="input-group">
							<span><i class="fa fa-lock"></i></span>
							<input type="Password" placeholder="Password" required="" name="password">
						</div>
						<div class="input-group">
							<span><i class="fa fa-user"></i></span>
							<input type="text" placeholder="Usia" required="" name="usia"> 
						</div>
						<div class="input-group">
							<span><i class="fa fa-user"></i></span>
							<input type="text" placeholder="Alamat" required="" name="alamat"> 
						</div> 	
							<button class="btn btn-danger btn-block" type="submit" name="sign-up">Sign Up</button >                
					</form>
				<p class="account">Already have an account? <a href="home.php?a=login">Login</a></p>
			</div>
		</div>
	</div>

</div>
</form>

<?php
if ( isset($_POST['sign-up']) ) {
	$nama_lengkap = trim(mysqli_real_escape_string($con, $_POST['nama-lengkap']));
	$username     = trim(mysqli_real_escape_string($con, $_POST['username']));
	$password     = trim(mysqli_real_escape_string($con, $_POST['password']));
	$password     = md5($password);
	$level		  = "user";
	$usia         = trim(mysqli_real_escape_string($con, $_POST['usia']));
	$alamat       = trim(mysqli_real_escape_string($con, $_POST['alamat']));

	mysqli_query($con, "INSERT INTO tabel_user (nama_lengkap, username, password, usia, alamat, level) VALUES ('$nama_lengkap', '$username', '$password', '$usia', '$alamat', '$level' )") or die(mysqli_error($con));

	echo 	"<script>
			window.location='home.php?a=regis'
			</script>";
}

?>

