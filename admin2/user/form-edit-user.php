
<?php

// require_once '../../../inc/koneksi.php';
// require_once '../../../inc/includepenting.php';
require_once __DIR__ . '/../../../inc/env.php';
require_once __DIR__ . '/../../../inc/koneksi.php';
require_once __DIR__ . '/../../../vendor/autoload.php';


$id_user = $_GET["id_user"];//mengambil data ygdikirim
$query = mysqli_query($con,"Select * from user where id_user = '$id_user'");

while ($row = mysqli_fetch_array($query)) {
    $id_user = $row["id_user"];
    $username = $row["username"];
    $password = $row["password"];
    $email = $row["email"];
    $role = $row["role"];
    $is_active = $row["is_active"];
}
?>