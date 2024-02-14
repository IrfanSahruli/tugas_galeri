<?php
include 'koneksi.php';
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];

$sql = "INSERT INTO user (username,password,email,namalengkap,alamat)
VALUE ('$username','$password','$email','$nama','$alamat')";
$query = mysqli_query($conn, $sql);
if($sql){
    echo"<script>
    alert('pendaptaran akun berhasil');
    </script>";
    header('Localion: login.php?status=sukses');
}else{
    echo"<script>
    alert('pendaftaran akun gagal');
    </script>";
    header('Location: register.php?status=gagal');
}
?>