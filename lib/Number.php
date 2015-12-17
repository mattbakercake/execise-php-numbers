<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace lib;

/**
 * Description of Number
 *
 * @author matt
 */
class Number {
    
    public function getString($num)
    {
        $numLength = $this->getNumLength($num);
        
        switch ($numLength) {
            case 1:
                return $this->getTens($num);
            case 2:
                return $this->getTens($num);
        }
    }
    
    private function getNumLength($num)
    {
        if ($num === 0)
        {
            return 1;
        }
        
        return floor(log10(abs($num))) + 1;
    }
    
    private function getTens($num)
    {
        $strings = new \models\Tens();
        
        return $strings->data[$num];
    }
    
}
