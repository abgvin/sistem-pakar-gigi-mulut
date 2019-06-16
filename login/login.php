<form action="" method="post">
<div class="signupform">
	<h5></h5>
		<div class="container">
			<!-- main content -->
			<div class="agile_info">
				<div class="w3l_form">
					<div class="">
						<img src="images/esse-chua-245075-unsplash.jpg" alt="" />
					</div>
				</div>
				<div class="w3_info">
					<h2>Login User</h2>
					<p>Silahkan login terlebih dahulu untuk berkonsultasi</p>
						
							<div class="input-group">
								<span><i class="fa fa-user" aria-hidden="true"></i></span>
								<input type="text" placeholder="Username" required="" name="username" autofocused> 
							</div>
							<div class="input-group">
								<span><i class="fa fa-lock" aria-hidden="true"></i></span>
								<input type="Password" placeholder="Password" required="" name="password" autofocused>
							</div>        
								<button class="btn btn-danger btn-block" type="submit" name="login">Log in</button >                
						
					<p class="account">Belum punya akun? <a href="home.php?a=regis">Sign Up</a></p>
				</div>
			</div>
			<!-- //main content -->
		</div>
</div>
</form>

<?php
if ( isset($_POST['login']) ) {
	$username = trim(mysqli_real_escape_string($con, $_POST['username']));
	$password = trim(mysqli_real_escape_string($con, $_POST['password']));
	$password = md5($password);

	$ceks = mysqli_query($con, "SELECT * FROM tabel_user WHERE username = '$username' && password = '$password'") or die(mysqli_error($con));

	if ( mysqli_num_rows($ceks) > 0 ) {
		$akun = mysqli_fetch_array($ceks);
		$_SESSION['username'] = $akun['username'];
		$_SESSION['user']  = $akun['nama_lengkap'];
		$_SESSION['level'] = $akun['level'];
		if ( $_SESSION['level'] == 'admin' ) {
			echo "	<script>
						window.location='../admin/index.html'
					</script>";
		} else if ( $_SESSION['level'] == 'user' || $_SESSION['level'] == '' ) {
			echo "	<script>
						window.location='../user/index.html'
					</script>";
		}
	} else {
		echo "	<script>
					window.location='home.php?a=login'
				</script>";
	}
}

?>
