<?php

namespace OOP;

class Manual extends Employee {
    private $cabinetNr;

    public function __construct($name, $email, $cabinetNr)
    {
        $this->name = $name;
        $this->email = $email;
        $this->cabinetNr = $cabinetNr;
    }

    public function addLocation($location){
        $this->location = $location;
    }

    public function getInfo()
    {
        return [
            $this->name,
            $this->email,
            $this->location,
            $this->cabinetNr
        ];
    }
}