<?php

echo "Perulangan For untuk bilangan genap : ";
for ($i = 2; $i <= 10; $i += 2) {
    echo $i . " ";
}

echo "<br>";

echo "Perulangan While untuk bilangan ganjil : ";
$j = 1;
while ($j <= 10) {
    echo $j . " ";
    $j += 2;
}

echo "<br>";

echo "Perulangan Do-While untuk bilangan prima : ";
$num = 2;
do {
    $isPrime = true;

    if ($num < 2) {
        $isPrime = false;
    } else {
        for ($i = 2; $i <= sqrt($num); $i++) { //perulangan for square root $num
            if ($num % $i == 0) {
                $isPrime = false;
                break;
            }
        }
    }

    if ($isPrime) {
        echo $num . " ";
    }

    $num++;
} while ($num <= 20);
