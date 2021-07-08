<!DOCTYPE html>
<html>

<head>
    <title>Selamat datang</title>

</head>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="style.css">

<body>
    <div align="center" class="kalkulator">
        <center>
            <h2 class="judul">Kalkulator Sederhana</h2>

            <body style="margin:25px;">
                <form action="inputdata.php" method="post">
                    <div class="input-group">
                        <span class="input-group-text"> Masukkan Jumlah Data :</span>
                        <input type="text" aria-label="Masukkan data" class="form-control" name="jumlah_data" size="2">

                    </div>
                    <!-- Masukkan Jumlah Data : <input type="text" name="jumlah_data" size="2" /> -->

                    <button class="btn btn-danger" type="submit">Submit</button>
                </form>
        </center>
    </div>
</body>

</html>
<?php

?>