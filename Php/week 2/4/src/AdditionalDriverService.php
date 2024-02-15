<?php

class AdditionalDriverService implements AdditionalService {
    // Метод применения услуги дополнительного водителя к тарифу
    public function applyService(Tariff $tariff) {
        $tariff->addAdditionalCost(100); // Дополнительная плата за дополнительного водителя
    }
}

?>