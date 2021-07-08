<?php
ini_set('display_errors', 'Off');
?>
<html>

<head>
    <title>Hasil Data</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

    <div align="center" class="kalkulator">
        <h2 class="judul">Keterangan</h2>
        <?php
        $jumlah_data = $_POST["jumlah_data"];
        $nilai = array();
        for ($i = 0; $i < $jumlah_data; $i++) {
            $nilai[$i] = $_POST["lajur_ke_$i"];
            echo "Data ke " . ($i + 1) . " = " . $nilai[$i] . "<br />";
        }
        echo "</br>";
        echo "<h2>Hasil Proses</h2>";
        echo "<br />Nilai Max = " . max($nilai) . "<br />";
        echo "Nilai Min = " . min($nilai) . "<br />";
        echo "Ascending = ";
        sort($nilai);
        foreach ($nilai as $index => $value) {
            echo $value . "\n";
        }
        echo "</br>";
        echo "Descending = ";
        arsort($nilai);
        foreach ($nilai as $index => $value1) {
            echo $value1 . "\n";
        }

        function perkalian($nilai)
        {
            $hasil = 1;
            foreach ($nilai as $index => $value3) {
                if ($hasil == 0) {
                    $hasil += $value3;
                }
                $hasil = $hasil * $value3;
            }
            return $hasil;
        }
        $kali = $nilai;
        echo "</br>";
        echo 'perkalian: ' . perkalian($kali) . '<br>';



        for ($i = 0; $i <= $value - 1; $i++)
            $jumlah += $nilai[$i];
        echo "</br>";
        $tengah = (count($nilai[$i]) - 1) / 2;
        if ((count($nilai[$i]) - 1) > 1) {
            if ((count($nilai[$i]) - 1) % 2 == 0) {
                $median = ($nilai[$i][$tengah - 1] + $nilai[$i][$tengah]) / 2;
            }
        }
        function hitung($array, $output = 'mean')
        {
            if (!is_array($array)) {
                return FALSE;
            } else {
                switch ($output) {
                    case 'mean':
                        $count = count($array);
                        $sum = array_sum($array);
                        $total = $sum / $count;
                        break;
                    case 'median':
                        rsort($array);
                        $middle = round(count($array) / 2);
                        $total = $array[$middle - 1];
                        break;
                    case 'modus':
                        $v = array_count_values($array);
                        arsort($v);
                        foreach ($v as $k => $v) {
                            $total = $k;
                            break;
                        }
                        break;
                    case 'range':
                        sort($array);
                        $sml = $array[0];
                        rsort($array);
                        $lrg = $array[0];
                        $total = $lrg - $sml;
                        break;
                }
                return $total;
            }
        }
        $arr = $nilai;
        echo "</br>";
        echo 'Mean: ' . hitung($arr, 'mean') . '<br>';
        echo 'Median: ' . hitung($arr, 'median') . '<br>';
        echo 'Modus: ' . hitung($arr, 'modus') . '<br>';
        echo 'Range: ' . hitung($arr, 'range') . '<br>';
        // echo 'Hasil perkalian: ' . hitung($arr, 'kali');
        ?>
        <br />
        <br />
        <a href="index.php">kembali ke halaman utama</a>
        </center>
    </div>
</body>

</html>