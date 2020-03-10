<!-- Nama: Haris Subekti
NIM: 1301183323
Kelas: IF-42-11 -->
<?php
include "koneksi.php";
$q_user = mysqli_query($conn, "SELECT * FROM user WHERE username = '" . $_POST["username"] . "' AND pass = '" . $_POST["pass"] . "'");
$user = mysqli_fetch_assoc($q_user);
$q_profile = mysqli_query($conn, "SELECT * FROM profile WHERE username = '" . $user["username"] . "'");
$profile = mysqli_fetch_assoc($q_profile);

session_start();

if (count($user) > 0) {
	$_SESSION["user"] = $user;
	$_SESSION["profile"] = $profile;
	header('Location: profile.php');
} else {
	header('Location: index.html');
}
