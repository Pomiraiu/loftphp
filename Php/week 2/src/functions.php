<?php

function task3_1() {
    // Создание массива из 50 пользователей
    $users = [];
    $names = ['Alice', 'Bob', 'Charlie', 'David', 'Eva'];

    for ($i = 0; $i < 50; $i++) {
        $users[] = [
            'id' => $i,
            'name' => $names[array_rand($names)],
            'age' => rand(18, 45)
        ];
    }

    // Преобразование в JSON и сохранение в файл
    $jsonUsers = json_encode($users, JSON_PRETTY_PRINT);
    file_put_contents('users.json', $jsonUsers);

    // Открытие файла и преобразование данных в ассоциативный массив PHP
    $jsonContent = file_get_contents('users.json');
    $decodedUsers = json_decode($jsonContent, true);

    // Подсчет количества пользователей с каждым именем
    $nameCounts = array_count_values(array_column($decodedUsers, 'name'));

    // Подсчет среднего возраста пользователей
    $totalAge = array_sum(array_column($decodedUsers, 'age'));
    $averageAge = $totalAge / count($decodedUsers);

    // Вывод результатов
    echo "Users count by name:\n";
    print_r($nameCounts);

    echo "\nAverage age of users: $averageAge\n";
}
?>
