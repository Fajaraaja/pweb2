<!DOCTYPE html>
<html>

<head>
    <title>Fungsi</title>
</head>

<body>
    <h2>Luas Persegi Panjang</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        Masukkan panjang : <input type="number" name="panjang"><br>
        Masukkan lebar : <input type="number" name="lebar"><br>
        <input type="submit" name="submit_persegi" value="Hitung">
    </form>

    <h2>Luas Lingkaran</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        Masukkan Jari-jari: <input type="number" name="jari_jari"><br>
        <input type="submit" name="submit_lingkaran" value="Hitung">
    </form>

    <?php
    function hitungLuasPersegiPanjang($panjang, $lebar)
    {
        return $panjang * $lebar;
    }

    function hitungLuasLingkaran($jari_jari)
    {
        return 3.14 * $jari_jari * $jari_jari;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST["submit_persegi"])) {
            $panjang = $_POST["panjang"];
            $lebar = $_POST["lebar"];
            $luas_persegi = hitungLuasPersegiPanjang($panjang, $lebar);
            echo "Luas Persegi Panjang dengan panjang $panjang dan lebar $lebar adalah: $luas_persegi";
        }

        if (isset($_POST["submit_lingkaran"])) {
            $jari_jari = $_POST["jari_jari"];
            $luas_lingkaran = hitungLuasLingkaran($jari_jari);
            echo "Luas Lingkaran dengan jari-jari $jari_jari adalah: $luas_lingkaran";
        }
    }
    ?>
</body>

</html>