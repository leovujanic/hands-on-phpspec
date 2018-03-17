<?php

namespace spec\SuperCoolStartup;

use PhpSpec\ObjectBehavior;
use SuperCoolStartup\MyCalculator;

class MyCalculatorSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(MyCalculator::class);
    }
    
    public function it_can_add_two_numbers()
    {
        $this->add(1, 2)->shouldReturn(3);
    }
    
    public function it_can_add_two_floats()
    {
        $this->add(1.1, 2.1)->shouldReturn(3);
    }
    
    public function it_can_multiply_two_numbers()
    {
        $this->multiply(2, 2)->shouldReturn(4);
    }
    
    public function it_can_substract_two_numbers()
    {
        $this->substract(4, 2)->shouldReturn(2);
    }
    
}
