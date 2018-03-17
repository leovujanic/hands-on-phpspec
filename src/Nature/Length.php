<?php

namespace Nature;

/**
 * Class Length
 *
 * @package Nature
 */
class Length
{
    
    private $valueInMeters;
    
    /**
     * Length constructor.
     *
     * @param $valueInMeters
     */
    public function __construct(float $valueInMeters)
    {
        $this->valueInMeters = $valueInMeters;
    }
    
    public function getValueInMeters(): float
    {
        return $this->valueInMeters;
    }
    
    public function getValueInCentimeters(): float
    {
        return $this->getValueInMeters() * 100;
    }
    
    /**
     * @return float
     */
    public function getValueInKilometers(): float
    {
        return $this->getValueInMeters() * 0.001;
    }
}
