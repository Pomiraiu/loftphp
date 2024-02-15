<?php

class BasicTariff extends AbstractTariff {
    // Задание базовых цен за километр и минуту
    public function __construct() {
        $this->pricePerKm = 10;
        $this->pricePerMinute = 3;
    }
}

?>