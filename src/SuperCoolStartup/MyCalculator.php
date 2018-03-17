<?php
declare(strict_types=1);

namespace SuperCoolStartup;

/**
 * Class MyCalculator
 *
 * @package SuperCoolStartup
 */
class MyCalculator
{
    /**
     * @param $a
     * @param $b
     *
     * @return mixed
     */
    public function add(int $a, int $b)
    {
        return $a + $b;
    }
    
    public function multiply($a, $b)
    {
        return $a * $b;
    }
    
    public function substract($a, $b)
    {
        return $a - $b;
    }
    
    
    
}
