<?php

namespace lib;

/**
 * Number class contains a public function that returns the
 * string representation for an integer between 0-999999
 *
 * @author matt
 */
class Number {
    
    /**
     * getString returns string representation of provided integer parameter
     * 
     * @param integer $num
     * @return string 
     */
    public function getString($num)
    {
        $numLength = $this->getNumLength((int)$num);
        
        switch ($numLength) {
            case 1: //fall through case 1 & 2 same
            case 2:
                return $this->getTens((int)$num);
            case 3:
                return $this->getHundreds((int)$num);
            case 4: //fall through case 4,5 & 6 same
            case 5:
            case 6:
                return $this->getThousands((int)$num,(int)$numLength);
        }
    }
    
    /**
     * getNumLength returns integer representing the length of the
     * provided integer parameter
     * 
     * @param integer $num
     * @return int
     */
    private function getNumLength($num)
    {
        if ($num === 0)
        {
            return 1;
        }
        
        return floor(log10(abs($num))) + 1;
    }
    
    /**
     * getTens returns a string representation for numbers between
     * 0-99
     * 
     * @param integer $num
     * @return string
     */
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
    
    /**
     * getHundreds returns a string representation for numbers between
     * 100-999
     * 
     * @param integer $num
     * @return string
     */
    private function getHundreds($num)
    {
        $firstNum = $this->getTens(($num-$num%100)/100);
        
        if ($num%100 !== 0) 
        {
            $secondNum = $this->getTens($num%100);

            return $firstNum . " Hundred And " . $secondNum;
        }

        return $firstNum . " Hundred";    
    }
    
    /**
     * getThousands returns a string representation for numbers between
     * 1000-999999
     * 
     * @param integer $num
     * @return string
     */
    private function getThousands($num, $numLength)
    {
        switch ($numLength) {
            case 4: //fall through case 4 & 5 the same
            case 5:
                $firstNum = $this->getTens(($num-$num%1000)/1000);
                $remainder = $num%1000;
                if ($remainder > 99 || $remainder === 0) 
                {
                    $suffix = " Thousand";
                }
                else
                {
                    $suffix = " Thousand And";
                }
                break;
            case 6:
                $firstNum = $this->getTens(($num-$num%100000)/100000);
                $remainder = $num%100000;
                if ($remainder > 999) 
                {
                    $suffix = " Hundred And";
                } 
                elseif ($remainder < 99 && $remainder !== 0)
                {
                    $suffix = " Hundred Thousand And";   
                } 
                else 
                {
                    $suffix = " Hundred Thousand";
                }
                break;
        }
        
        if ($remainder > 0) {
            return $firstNum . $suffix . " " . $this->getString($remainder); 
        }

        return $firstNum . $suffix;  
    }
    
}