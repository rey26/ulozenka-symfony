<?php

namespace App\Class;

class CoordinatesModel
{
    private string $lat;

    private string $lon;

    public function __construct(
        string $lat,
        string $lon
    ) {
        $this->lat = $lat;
        $this->lon = $lon;
    }

    public function getLat(): string
    {
        return $this->lat;
    }

    public function getLon(): string
    {
        return $this->lon;
    }
}
