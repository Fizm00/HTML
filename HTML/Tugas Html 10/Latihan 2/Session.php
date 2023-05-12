<?php
session_start();

if(isset($_SESSION['username'])) {
	// Jika session sudah terdaftar, tampilkan halaman utama
	echo "Selamat datang, " . $_SESSION['username'];
	echo "<br><br>";
	echo "<a href='logout.php'>Logout</a>";
} else {
	// Jika session belum terdaftar, tampilkan form login
	if(isset($_POST['username']) && isset($_POST['password'])) {
		$username = $_POST['username'];
		$password = $_POST['password'];

		// Cek apakah username dan password sesuai
		if($username == "admin" && $password == "1234") {
			$_SESSION['username'] = $username;
			header('location: Session.php');
		} else {
			echo "Username atau password salah";
		}

        if($username == "firza" && $password == "himawan") {
            $_SESSION['username'] = $username;
            header('location: Session.php');
        } else {
            echo "Username atau password salah";
        }
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
	<h2>Login</h2>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
		<label for="username">Username:</label><br>
		<input type="text" id="username" name="username"><br>
		<label for="password">Password:</label><br>
		<input type="password" id="password" name="password"><br><br>
		<input type="submit" value="Login">
	</form>
</body>
</html>

<?php
}
?>
