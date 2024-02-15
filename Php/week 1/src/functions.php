<?php

function task1($array, $returnString = false) {
    $result = '';
    foreach ($array as $string) {
        echo "<p>$string</p>";
        if ($returnString) {
            $result .= "<p>$string</p>";
        }
    }
    return $returnString ? $result : null;
}

function task2($operation, ...$numbers) {
    $result = $numbers[0];
    for ($i = 1; $i < count($numbers); $i++) {
        $result = eval("return $result $operation $numbers[$i];");
        echo $i === 1 ? $numbers[0] : " $operation $numbers[$i]";
    }
    echo " = $result";
}

function task3($num1, $num2) {
    if (is_int($num1) && is_int($num2)) {
        echo '<table>';
        for ($i = 1; $i <= $num1; $i++) {
            echo '<tr>';
            for ($j = 1; $j <= $num2; $j++) {
                echo '<td>' . $i * $j . '</td>';
            }
            echo '</tr>';
        }
        echo '</table>';
    } else {
        echo 'Оба числа должны быть целыми';
    }
}

function task4() {
    echo date('d.m.Y H:i') . '<br>';
    echo time();
}

function task5() {
    $firstStr = 'Карл у Клары украл Кораллы';
    $secondStr = 'Две бутылки лимонада';
    $firstResult = str_replace('К', '', $firstStr);
    $secondResult = str_replace('Две', 'Три', $secondStr);
    echo $firstResult;
    echo '<br>';
    echo $secondResult;
  }

function task6($fileName) {
    $content = "Hello again!";
    file_put_contents($fileName, $content);
    echo file_get_contents($fileName);
}
?>