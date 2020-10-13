<?php
require_once 'Vehicle.php';

class Camion extends Vehicle
{
    private $storage;
    private $load = 0;
    private $energy;

    public function __construct($storage, $color, $nbSeats, $energy){
        $this->storage=$storage;
        parent::__construct($color,$nbSeats);
        $this->energy=$energy;
    }

    public function isFull()
    {
        if($this->load<= 0){
            $status = 'in filling';
        }else{
            $status = 'full';
        }
        return $status;
    }

    public function getEnergy(): int
    {
        return $this->energy;
    }

    public function setEnergy(int $energy): void
    {
        $this->energy = $energy;
    }

    public function getLoad()
    {
        return $this->load;
    }

    public function setLoad($load)
    {
        $this->load=$load;
    }

    public function getStorage()
    {
        return $this->storage;
    }

    public function setstorage($storage)
    {
        $this->storage=$storage;
    }
}
