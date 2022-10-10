<?php

namespace App\Service;

class DateTimeService
{
    public static function matchDayNumberWithDayName(int $dayNumber): string
    {
        return match ($dayNumber) {
            1 => 'Monday',
            2 => 'Tuesday',
            3 => 'Wednesday',
            4 => 'Thursday',
            5 => 'Friday',
            6 => 'Saturday',
            7 => 'Sunday',
        };
    }
}
