<?php

class GpsService implements AdditionalService {
    // Метод применения услуги GPS к тарифу
    public function applyService(Tariff $tariff) {
        $tariff->addAdditionalCost(15); // Дополнительная плата за GPS
    }
}

?>