<!-- Nama: Haris Subekti
NIM: 1301183323
Kelas: IF-42-11 -->
<?php
include "koneksi.php";

$image = $_FILES['image']['name'];
$target = 'images/' . $image;

if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  $like = 250;
  $q_upload = mysqli_query($conn, "INSERT INTO photo VALUES ('" . $target . "', '" . $_POST["caption"] . "', $like)");
}

session_start();

header('Location: profile.php');
