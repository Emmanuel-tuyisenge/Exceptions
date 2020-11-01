<?php

require_once 'Vehicle.php';

class Car extends Vehicle
{
    const ALLOWED_ENERGIES = [
        'fuel',
        'electric'
    ];
    /**
     * @var string
     */
    private $energy;

    /**
     * @var int
     */
    private $energyLevel;


    /**
     * @var bool
     */
    private $hasParkBrake;

    public function __construct(string $color, int $nbSeats, string $energy, bool $hasParkBrake)
    {
        parent::__construct($color, $nbSeats);
        $this->energy = $energy;
        $this->hasParkBrake = $hasParkBrake;
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): Car
    {
        if(in_array($energy, self::ALLOWED_ENERGIES)){
            $this->energy = $energy;
        }
        return $this;
    }

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }

    public function setParkBrake(bool $hasParkBrake): void
    {
        $this->hasParkBrake = $hasParkBrake;
    }

    public function start()
    {
        if ($this->hasParkBrake === true) {
            throw new Exception('Park brake is ON !');
        }
    }
}