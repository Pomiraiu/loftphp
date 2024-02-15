<?php

class HourlyTariff extends AbstractTariff {
    // Переопределение метода расчета стоимости для почасового тарифа
    public function calculateCost($distance, $duration) {
        $roundedHours = ceil($duration / 60);
        $this->additionalCost += $roundedHours * 200; // Дополнительная плата за каждый час
        return $this->additionalCost;
    }
}

?>