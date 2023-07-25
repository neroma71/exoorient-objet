<?php
class Formule1
{
    private int $speed;


    public function __construct($speed)
    {
        $this->speed = $speed;
    }
    /**
     * Get the value of speed
     */ 
    public function getSpeed()
    {
        return $this->speed;
    }

    /**
     * Set the value of speed
     *
     * @return  self
     */ 
    public function setSpeed($speed)
    {
        $this->speed = $speed;

        return $this;
    }

    public function drive(): string
    {
    return "vroom vroom ".$this->speed."km ";
    }

    public function shiftGear()
    {
        $this->setSpeed($this->getSpeed() + 100);
    }
}