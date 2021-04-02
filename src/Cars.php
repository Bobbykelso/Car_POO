<?php

class Cars
{
    //Nombres de roues
    private int $nbWheels = 4;

    //Vitesse courante
    private int $speed = 0;

    //Couleur de la voiture
    private string $color;

    //Le nombre de sièges
    private int $nbSeats;

    //Le type de Carburant
    private string $energy;

     //Le niveau de Carburant Actuel
    private int $energyLvl;

     //Le constructeur !
    public function __construct(string $color, int $nbSeats, string $energy)
    {
        $this->color = $color;
        $this->seats = $nbSeats;
        $this->energy = $energy;
    }

     //Get nombres de roues
    public function getNbWheels()
    {
        return $this->nbWheels;
    }
    //Get vitesse courante
    public function getSpeed()
    {
        return $this->speed;
    }
    //Get couleur de la voiture
    public function getColor()
    {
        return $this->color;
    }
    //Get le nombre de sièges
    public function getNbSeats()
    {
        return $this->nbSeats;
    }
    //Get le type de Carburant
    public function getEnergy()
    {
        return $this->energy;
    }
    //Get le niveau de Carburant Actuel
    public function getEnergyLvl()
    {
        return $this->energyLvl;
    }
    //Set vitesse courante
    public function setSpeed($speed)
    {
        if($speed >= 0) {
            $this->speed = $speed;
        }
    }
    //Set le niveau de Carburant Actuel
    public function setEnergyLvl($energyLvl)
    {
        if($energyLvl <= 0) {
            $this->ernergyLvl = 0;
        }
    }

    //Fonction démarrer
    public function start(): string
    {
       $this->speed >= 1;
        return "Car started !";
    }

    //Fonction Avancer 
    public function forward(): string
    {
       $this->speed = 25;
        return "GOOOO!";
       
    }

    //Fonction Freiner
      public function brake(): string
    {
        $frein = "";
        while ($this->speed > 0) {
            $this->speed--;
            $frein .= "Brake !";
        }
        $frein .= "Car stopped !";
        return $frein;
    }
}
