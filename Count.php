<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "bump-payment";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT  siswa.nis,siswa.nama,spp.nominal,spp.sisa  FROM siswa LEFT JOIN spp ON siswa.nis = spp.nis ORDER BY siswa.nis";
$result = mysqli_query($conn, $sql);


mysqli_close($conn);
?> 
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylsheet" type="text/css" href="front/index.css">
</head>
<style>
    .navbar ul li a:hover:not(.active) {
        background-color: #6083ce;
    }

    .navbar ul li .active {
        background-color: white;
        color: #6083ce;
        border: 1px solid #6083ce;
    }

    .navbar a {
        display: block;
        text-decoration: none;
        color: white;
        text-align: center;
        padding: 14px 16px;
        font-weight: 100;

    }

    body {
        margin: 0;
    }

    .navbar {
        text-align: center;
        color: #fff;
        width: 100%;
        margin: 0;
        padding: 0;
        background: #3b5998;
    }

    .navbar ul {
        width: 17%;
        padding: 0;
        text-align: center;
        margin: auto;
        list-style-type: none;
        overflow: hidden;
    }

    .navbar li {
        float: left;
    }

    .container {
        width: 80%;
        margin: auto !important;
    }

    .form-bayar {
        margin: auto;
        width: 661px;
        text-align: center;
        padding-top: 50px;
    }

    .form-bayar label {
        width: 180px;
        display: inline-block;
        text-align: left;
    }
    .form-bayar .form-group{
        margin-bottom: 3%;
    }
    .btn{
        background-color: #3b5998;
        text-decoration: none;
        color: #fff;
        border: none;
        padding: 10px;
        border-radius: 5px;
        cursor: pointer;
        font-weight: 700;
        width: 200px;
    }
    .btn:hover{
        background-color: #6083ce;
    }
    .table{
        margin:auto;
        border-collapse:collapse;
        width:40%;
    }
    .table th td{
        text-align:left;
        padding:8px;
    }
    .table tr:nth-child(even){
        background-color:#f2f2f2;
    }
    th {
        padding:10px;
        background-color: #6083ce;
        color: white;
        border-left:1px solid #fff;
        }
    .margin{
        margin-top:3%;
    }
    .table td{
        padding: 5px;
    }
</style>

<body>
    <nav class="navbar">
        <ul>
            <li>
                <a href="#" class="active">Home</a>
            </li>
            <li>
                <a href="index.php" >Bayar</a>
            </li>
            <li>
                <a href="siswa.php">Siswa</a>
            </li>
        </ul>
    </nav>
    <div class="container">
        <div class="margin"></div>
        <table class="table">
            <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Nis</th>
            <th>Pembayaran</th>
            <th>Operator</th>
        </tr>
            <?php
            $no = 1;
            if (mysqli_num_rows($result) > 0) {
                // output data of each row
                while($row = mysqli_fetch_assoc($result)) {
                    echo "<tr><td> " . $no++. "</td><td>".$row["nama"]."</td><td>" . $row["nis"]. "</td><td>" . $row["nominal"]. "</td><td><a href='edit.php/?id=".$row["nis"]."''>Edit</a> | <a href='back/delete.php/?id=".$row["nis"]."'>Hapus</a></td></tr>";
                }
            } else {
                echo "0 results";
            }
            
            ?>
        </table>
    </div>
    <script>

    </script>
</body>
</html>