<?php

namespace spec\WebShop;

use Nature\Length;
use PhpSpec\ObjectBehavior;
use WebShop\LengthDecorator;

/**
 * Class LengthDecoratorSpec
 *
 * @package spec\WebShop
 */
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
    
    public function it_will_show_small_dimensions_in_centimeters(Length $length)
    {
        $length->getValueInMeters()->shouldBeCalled()->willReturn(0.6);
        $length->getValueInCentimeters()->shouldBeCalled()->willReturn(60.0);
        $this->getText()->shouldReturn('60cm');
    }
    
    public function it_will_show_larger_dimensions_in_meters(Length $length)
    {
        // $length->getValueInMeters()->willReturn(1.8); - stub
        // $length->getValueInMeters()->shouldBeCalled()->willReturn(1.8); - mock
        $length->getValueInMeters()->shouldBeCalled()->willReturn(1.8);
        $this->getText()->shouldReturn('1.8m');
    }
    
}
