<?php
$server = "localhost";
$username = "root";
$password = "root";
$dbname = "bump-payment";
$nis = $_POST['nis'];
$nama = $_POST['nama'];
$kelas = $_POST['kelas'];
try{
    $conn = new PDO("mysql:host=$server;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO siswa (nis, nama, kelas)
    VALUES ($nis,'$nama','$kelas')";
    $conn->exec($sql);
    echo " New Data Added";
}
catch(PDOexecption $e){
    echo $sql . "<br>". $e->get_message();
}
$conn = null;

header("Location: http://localhost/bump-payment/siswa.php");
?>