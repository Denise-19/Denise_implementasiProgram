<html>

<head>
    <title>Isi Bilangan</title>

</head>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="style.css">

<body>
    <div align="center" class="kalkulator">
        <h2 class="judul">Silahkan Isi Bilangan</h2>

        <body style="margin:25px;">
            <form action="proses.php" method="post">
                <?php
                $jumlah_data = $_POST["jumlah_data"];
                for ($i = 0; $i < $jumlah_data; $i++) {
                ?>
                <table>
                    <tr>
                        <td>Data ke <?php echo $i + 1; ?> : </td>
                        <td colspan="4"><input type="text" class="form-control border border-secondary"
                                name="lajur_ke_<?php echo $i; ?>"></td>
                    </tr>
                    <?php
                }
                    ?>
                </table>
                </br>
                <input type="hidden" value="<?php echo $jumlah_data; ?>" name="jumlah_data" />
                <button class="btn btn-danger" type="submit">Submit</button>
            </form>
    </div>
</body>

</html>