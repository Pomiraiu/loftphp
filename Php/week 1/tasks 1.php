<?php
// Задание #1
$name = "Екатерина";
$age = "19";

echo "Меня зовут: $name";
echo "\nМне $age лет";
echo "\n\"!|/'\"\\";
echo "\n";

// Задание #2
define('TOTAL_DRAWINGS', 80);
define('MARKER_DRAWINGS', 23);
define('PENCIL_DRAWINGS', 40);

$paintings = TOTAL_DRAWINGS - (MARKER_DRAWINGS + PENCIL_DRAWINGS);
echo "Рисунков, выполненных красками: $paintings";

// Задание #3
$age = 38;

if ($age >= 18 && $age <= 65) {
    echo "Вам еще работать и работать";
} elseif ($age > 65) {
    echo "Вам пора на пенсию";
} elseif ($age >= 1 && $age <= 17) {
    echo "Вам ещё рано работать";
} else {
    echo "Неизвестный возраст";
}

// Задание #4
$day = 3;

switch ($day) {
    case 1:
    case 2:
    case 3:
    case 4:
    case 5:
        echo "Это рабочий день";
        break;
    case 6:
    case 7:
        echo "Это выходной день";
        break;
    default:
        echo "Неизвестный день";
}

// Задание #5
$bmw = [
    'model' => 'X5',
    'speed' => 120,
    'doors' => 5,
    'year' => 2015
];

$toyota = [
    'model' => 'Corolla',
    'speed' => 100,
    'doors' => 4,
    'year' => 2018
];

$opel = [
    'model' => 'Astra',
    'speed' => 110,
    'doors' => 5,
    'year' => 2017
];

$carArray = ['bmw' => $bmw, 'toyota' => $toyota, 'opel' => $opel];

foreach ($carArray as $carName => $carDetails) {
    echo "\nCAR $carName";
    foreach ($carDetails as $key => $value) {
        echo "\n$name $value";
    }
}

// Задание #6
echo '<table>';
for ($row = 1; $row <= 10; $row++) {
    echo '<tr>';
    for ($col = 1; $col <= 10; $col++) {
        echo '<td>';
        if ($row % 2 == 0 && $col % 2 == 0) {
            echo "($row*$col)";
        } elseif ($row % 2 != 0 && $col % 2 != 0) {
            echo "[$row*$col]";
        } else {
            echo $row * $col;
        }
        echo '</td>';
    }
    echo '</tr>';
}
echo '</table>';
?>