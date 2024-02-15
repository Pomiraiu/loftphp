<?php

class StudentTariff extends AbstractTariff {
    // Задание цен за километр и минуту для студенческого тарифа
    public function __construct() {
        $this->pricePerKm = 4;
        $this->pricePerMinute = 1;
    }
}

?>