<?php

interface AdditionalService {
    // Метод применения дополнительной услуги к тарифу
    public function applyService(Tariff $tariff);
}