<?php

class Car
{
    private int $nbWheels;
    private int $currentSpeed;
    private string $color;
    private int $nbSeats;
    private string $energy;
    private int $energyLevel;

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->energy = $energy;
    }

    public function forward(): string
    {
        $this->currentSpeed = 5;
        return "C'est parti vous roulez à $this->currentSpeed km/h<br>";
    }

    public function brake(): string
    {
        $warning = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $warning .= "ça freine ! Votre vitesse : $this->currentSpeed km/h <br>";
        }
        $warning .= "On est à l'arrêt :-) !<br>";
        return $warning;
    }

    public function start(int $energyLevel): string
    {
        $this->energyLevel = $energyLevel;
        if ($this->energyLevel > 0) {
            return "La voiture vient de démarrer !";
        } else {
            return "Vous n'avez plus d'essence !";
        }
    }

    public function getNbWheels(): int
    {
        return $this->nbWheels;
    }

    public function setCurrentSpeed(int $currentSpeed): void
    {
        if ($currentSpeed >= 0) {
            $this->currentSpeed = $currentSpeed;
        }
    }

    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function getNbSeats(): int
    {
        return $this->nbSeats;
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }
}
