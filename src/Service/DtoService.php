<?php

namespace App\Service;

use App\Class\BusinessHourModel;

class DtoService
{
    public function getBusinessHoursArray(array $businessHours): array
    {
        $businessHoursArray = [];
        $businessHoursModels = [];

        foreach ($businessHours as $businessHour) {
            $hours = $businessHour['open'] . ' - ' . $businessHour['close'];
            $day = (int) $businessHour['day'];

            if (array_key_exists($day, $businessHoursArray)) {
                $businessHoursArray[$day] = $businessHoursArray[$day] . ', ' . $hours;
            } else {
                $businessHoursArray[$day] = $hours;
            }
        }

        foreach ($businessHoursArray as $day => $hours) {
            $businessHoursModels[] = new BusinessHourModel(DateTimeService::matchDayNumberWithDayName($day), $hours);
        }

        return $businessHoursModels;
    }
}
