<?php

class Bicycle
{
    private string $color;

    private int $currentSpeed;

    private int $nbSeats = 1;

    private int $nbWheels = 2;

    //Constructeur
    public function __construct(string $color)
    {
        $this->color = $color;
    }

    //Getter cplor
    public function getColor()
    {
        return $this->color;
    }

    //Getter speed
    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }

    //Setter speed
    public function setCurrentSpeed(int $currentSpeed): void
    {
        if($currentSpeed >= 0) {
            $this->currentSpeed = $currentSpeed;
        }
    }

     public function forward(): string
     {
         $this->currentSpeed = 15;
         return "Go !";
     }

     public function brake(): string
     {
         $sentence = "";
         while ($this->currentSpeed > 0) {
             $this->currentSpeed--;
             $sentence .= "Brake !!!";
         }
         $sentence .= "I'm stopped !";
         return $sentence;
     }
}