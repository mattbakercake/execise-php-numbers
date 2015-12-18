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
            case 3:
                return $this->getHundreds($num);
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
        $tenStrings = new \models\Tens();
        
        if ($num > 19 && $num%10 !== 0) 
        {
            $secondNum = $tenStrings->data[$num%10];
            $firstNum = $tenStrings->data[$num-$num%10];
            
            return $firstNum . " " . $secondNum;
        }
        
        return $tenStrings->data[$num];
    }
    
    private function getHundreds($num)
    {
        $tenStrings = new \models\Tens();
        
        $firstNum = $this->getTens(($num-$num%100)/100);
        
        if ($num%100 !== 0) 
        {
            $secondNum = $this->getTens($num%100);

            return $firstNum . " Hundred And " . $secondNum;
        }

        return $firstNum . " Hundred";    
    }
    
}
