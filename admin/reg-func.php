<?php 
require '../connection.php';
if( isset($_POST["register"]) ) {
	if( registrasi($_POST) > 0 ) {
		echo "<script>
				alert('user baru berhasil ditambahkan!');
			  </script>";
	} else {
		echo mysqli_error($conn);
	}
}
function registrasi($data) {
	global $conn;
	$username = strtolower(stripslashes($data["username"]));
	$password = mysqli_real_escape_string($conn, $data["password"]);
	$password2 = mysqli_real_escape_string($conn, $data["password2"]);
	$result = mysqli_query($conn, "SELECT username FROM admin WHERE username = '$username'");
	if( mysqli_fetch_assoc($result) ) {
		echo "<script>
				alert('username sudah terdaftar!')
		      </script>";
		return false;
	}
	if( $password !== $password2 ) {
		echo "<script>
				alert('konfirmasi password tidak sesuai!');
		      </script>";
		return false;
	}
	$password = password_hash($password, PASSWORD_DEFAULT);
	mysqli_query($conn, "INSERT INTO admim VALUES('', '$username','$password')");
	return mysqli_affected_rows($conn);
}
?>