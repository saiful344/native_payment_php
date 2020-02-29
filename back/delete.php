<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "bump-payment";
$id = $_GET['id'];

try{
	$conn = new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
	$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	$sql = "DELETE FROM siswa where nis=$id";
	$conn->exec($sql);
	$sql1 = "DELETE FROM spp where nis=$id";
	$conn->exec($sql1);
}
catch(PDOexception $e){
	echo $sql. "<br>". $e->get_message();
}
$conn = null;

header("Location: http://localhost/bump-payment/Count.php");

?>