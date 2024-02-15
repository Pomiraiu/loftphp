<?php

abstract class AbstractTariff implements Tariff {
    // Базовые параметры тарифа
    protected $pricePerKm;
    protected $pricePerMinute;
    protected $additionalCost = 0;

    // Метод для расчета стоимости поездки
    public function calculateCost($distance, $duration) {
        return ($distance * $this->pricePerKm) + ($duration * $this->pricePerMinute) + $this->additionalCost;
    }

    // Метод для добавления дополнительной услуги
    public function addAdditionalService(AdditionalService $service) {
        $service->applyService($this);
    }

    // Метод для добавления дополнительной стоимости
    public function addAdditionalCost($cost) {
        $this->additionalCost += $cost;
    }
}
