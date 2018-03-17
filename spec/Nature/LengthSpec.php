<?php

namespace spec\Nature;

use Nature\Length;
use PhpSpec\ObjectBehavior;

class LengthSpec extends ObjectBehavior
{
    public function let()
    {
        $this->beConstructedWith(8);
    }
    
    function it_is_initializable()
    {
        $this->shouldHaveType(Length::class);
    }
    
    
//    public function it_can_accept_value_in_meters()
//    {
//        $this->setValueInMeters(3);
//    }
    
    public function it_exposes_value_in_meters()
    {
        $valueInMeters = 8.0;
//        $this->beConstructedWith($valueInMeters);
        $this->getValueInMeters()->shouldReturn($valueInMeters);
    }
    
    public function it_exposes_value_in_centimeters()
    {
        $this->getValueInCentimeters()->shouldReturn( 800.0);
    }
    
    public function it_exposes_value_in_kilometers()
    {
        $this->getValueInKilometers()->shouldReturn( 0.008);
    }
}
