<?php

namespace spec\Gps;

use Gps\LengthDecorator;
use Nature\Length;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class LengthDecoratorSpec extends ObjectBehavior
{
    public function let(Length $length)
    {
        $this->beConstructedWith($length);
    }
    
    function it_is_initializable()
    {
        $this->shouldHaveType(LengthDecorator::class);
    }
    
    public function it_will_show_dimensions_in_meters(Length $length)
    {
        $length->getValueInMeters()->shouldBeCalled()->willReturn(1200);
        $this->getText()->shouldReturn('1200m');
    }
    
    public function it_will_show_larger_dimensions_in_km(Length $length)
    {
    
        $length->getValueInMeters()->shouldBeCalled()->willReturn(3900);
        $length->getValueInKilometers()->shouldBeCalled()->willReturn(3.9);
        $this->getText()->shouldReturn('3.9km');
    }
    
    public function it_does_not_show_decimals_show_extra_large_dimensions_in_km(Length $length)
    {
        
        $length->getValueInMeters()->shouldBeCalled()->willReturn(93500);
        $length->getValueInKilometers()->shouldBeCalled()->willReturn(93.5);
        $this->getText()->shouldReturn('94km');
    }
}
