<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Siswa</title>
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
</style>

<body>
    <nav class="navbar">
        <ul>
            <li>
                <a href="Count.php" >Home</a>
            </li>
            <li>
                <a href="index.php">Bayar</a>
            </li>
            <li>
                <a href="" class="active">Siswa</a>
            </li>
        </ul>
    </nav>
    <div class="container">
        <form class="form-bayar" method="POST" action="back/siswa.php/">
            <div class="form-group">
                <label for="nis">NIS </label>
                <input id="nis" name="nis" type="text">
            </div>
            <div class="form-group">
                <label for="nama">Nama </label>
                <input id="nama" name="nama" type="text">
            </div>
            <div class="form-group">
                <label for="kelas">Kelas </label>
                <input id="kelas" name="kelas" type="text">
            </div>
            <button class="btn" type="submit">Simpan</button>
        </form>
    </div>
    <script>

    </script>
</body>
</html>