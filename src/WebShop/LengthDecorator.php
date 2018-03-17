<?php
declare(strict_types=1);

namespace WebShop;

use Nature\Length;

/**
 * Class LengthDecorator
 *
 * @package WebShop
 */
class LengthDecorator
{
    /**
     * @var Length
     */
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
    
    
    public function getText()
    {
        if ($this->length->getValueInMeters() < 1) {
            return $this->length->getValueInCentimeters() . 'cm';
        }
        
        
//        if($this->length->getValueInMeters() > 90) {
//            return ceil($this->length->getValueInKilometers()) . 'km';
//        }
        
        return $this->length->getValueInMeters() . 'm';
    }
}
