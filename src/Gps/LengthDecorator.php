<?php

namespace Gps;

use Nature\Length;

class LengthDecorator
{
    private $length;
    
    /**
     * LengthDecorator constructor.
     *
     * @param $length
     */
    public function __construct(Length $length)
    {
        $this->length = $length;
    }
    
    public function getText(): string
    {
        if ($this->length->getValueInMeters() < 2000) {
            return $this->length->getValueInMeters() . 'm';
        }
    
        if($this->length->getValueInMeters() > 90000) {
            return ceil($this->length->getValueInKilometers()) . 'km';
        }
        
        return $this->length->getValueInKilometers() . 'km';
    }
    
    
}
