<?php
for ($i = 4; $i <= 200; $i++) {
    if ($i % 5 == 0 && $i % 1 == 0 && $i % 8 == 0) {
        echo "$i jest podzielne przez 5, 1 i 8<br>";
    }

}

for ($i = 4; $i <= 200; $i++) {
    if ($i % 5 == 0 && $i % 1 == 0 && $i % 8 == 0) {
        echo "$i jest podzielne przez 5, 1 i 8<br>";
    }

}
$sum = 0;
for ($i = 11; $i <= 17; $i++) {
    $sum += $i;
}
echo "Suma elementów od 11 do 17 wynosi: $sum
";
for ($i = 40; $i <= 350; $i++) {
    if ($i % 2 != 0) {
        echo "$i jest nieparzyste<br>";
    }

}
for ($i = 40; $i <= 250; $i++) {
    if ($i % 2 == 0) {
        echo "$i jest parzyste<br>";
    }

}

?>

