<?php

namespace App\Class;

class BranchModel
{
    /** @var string */
    private $internalId;

    /** @var string */
    private $internalName;

    /** @var CoordinatesModel */
    private $location;

    /** @var array<BusinessHourModel> */
    private $businessHours;

    /** @var string */
    private $address;

    /** @var string */
    private $web;

    /** @var string */
    private $announcement;

    public function __construct(
        string $internalId,
        string $internalName,
        CoordinatesModel $location,
        array $businessHours,
        string $address,
        string $web,
        string $announcement
    ) {
        $this->internalId = $internalId;
        $this->internalName = $internalName;
        $this->location = $location;
        $this->businessHours = $businessHours;
        $this->address = $address;
        $this->web = $web;
        $this->announcement = $announcement;
    }

    public function getInternalId(): string
    {
        return $this->internalId;
    }

    public function getInternalName(): string
    {
        return $this->internalName;
    }

    public function getLocation(): CoordinatesModel
    {
        return $this->location;
    }

    public function getBusinessHours(): array
    {
        return $this->businessHours;
    }

    public function getAddress(): string
    {
        return $this->address;
    }

    public function getWeb(): string
    {
        return $this->web;
    }

    public function getAnnouncement(): string
    {
        return $this->announcement;
    }
}
