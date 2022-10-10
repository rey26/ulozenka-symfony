<?php

namespace App\Service;

use App\Class\BusinessHourModel;

class DtoService
{
    public function getBusinessHoursArray(array $businessHours): array
    {
        $businessHoursArray = [];

        foreach ($businessHours as $businessHour) {
            $businessHoursArray[] = new BusinessHourModel(
                $businessHour['day'],
                $businessHour['open'] . ' - ' . $businessHour['close']
            );
        }

        return $businessHoursArray;
    }
}
