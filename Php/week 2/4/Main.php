<?php

// Подключение интерфейсов и абстрактного класса
require_once 'src/TariffInterface.php';
require_once 'src/AdditionalServiceInterface.php';
require_once 'src/AbstractTariff.php';

// Подключение сервисов и конкретных тарифов
require_once 'src/GpsService.php';
require_once 'src/AdditionalDriverService.php';
require_once 'src/BasicTariff.php';
require_once 'src/HourlyTariff.php';
require_once 'src/StudentTariff.php';

// Пример использования
$basicTariff = new BasicTariff();
$basicTariff->addAdditionalService(new GpsService());

// Добавление других экземпляров тарифов и услуг...

echo "Тариф базовый(5 км, 1 час): " . $basicTariff->calculateCost(5, 60) . PHP_EOL;

?>