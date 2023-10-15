<!DOCTYPE html>
<html>

<head>
    <title>Periksa Bilangan</title>
</head>

<body>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        Masukkan bilangan: <input type="number" name="bilangan">
        <input type="submit" value="Periksa">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST["bilangan"])) {
            $bilangan = $_POST["bilangan"];

            if ($bilangan > 0) {
                echo "$bilangan adalah Bilangan positif.";
            } elseif ($bilangan < 0) {
                echo "$bilangan adalah Bilangan negatif.";
            } else {
                echo "$bilangan bernilai Nol.";
            }
        } else {
            echo "Bilangan tidak ditemukan.";
        }
    }
    ?>
</body>

</html>