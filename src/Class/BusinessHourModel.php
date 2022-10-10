<?php

namespace App\Class;

class BusinessHourModel
{
    /** @var string */
    private $dayOfWeek;

    /** @var string */
    private $businessHour;

    public function __construct(string $dayOfWeek, string $businessHour)
    {
        $this->dayOfWeek = $dayOfWeek;
        $this->businessHour = $businessHour;
    }

    public function getDayOfWeek(): string
    {
        return $this->dayOfWeek;
    }

    public function getBusinessHour(): string
    {
        return $this->businessHour;
    }
}
