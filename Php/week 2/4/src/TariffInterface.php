<?php

interface Tariff {
    // Метод для подсчета стоимости поездки
    public function calculateCost($distance, $duration);

    // Метод для добавления дополнительной услуги
    public function addAdditionalService(AdditionalService $service);

    // Метод для добавления дополнительной стоимости
    public function addAdditionalCost($cost);
}

?>