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
        if ($num === 0) //catch zero
        {
            return 1;
        }
        
        /*
         * for numbers above 0 caculate the length of the int using
         * logarithm rounded down to nearest whole number
         */
        return floor(log10($num)) + 1; 
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
        
        //build string for numbers between 20-99
        if ($num > 19 && $num%10 !== 0) 
        {
            $secondNum = $tenStrings->data[$num%10];
            $firstNum = $tenStrings->data[$num-$num%10];
            
            return $firstNum . " " . $secondNum;
        }
        
        //return string for numbers between 0-19
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
        //get the first number in the integer
        $firstNum = $this->getTens(($num-$num%100)/100);
        
        //build string for int that isn't a round hundred
        if ($num%100 !== 0) 
        {
            $secondNum = $this->getTens($num%100);

            return $firstNum . " Hundred And " . $secondNum;
        }
        
        //return round hundred  
        return $firstNum . " Hundred";    
    }
    
    /**
     * getThousands builds and returns a string representation for numbers between
     * 1000-999999
     * 
     * @param integer $num
     * @return string
     */
    private function getThousands($num, $numLength)
    {
        //build first portion of number string based on integer length
        switch ($numLength) { 
            case 4: //fall through case 4 & 5 the same
            case 5:
                $numString = $this->getTensThousands($num);
                break;
            case 6:
                $numString = $this->getHundredsThousands($num);
                break;
        }
        
        //if there is a remainder build this value into the string
        if ($numString['remainder'] > 0) {
            return $numString['firstNum'] . $numString['suffix'] . " " . $this->getString($numString['remainder']); 
        }
        
        //return string that has no remainder
        return $numString['firstNum'] . $numString['suffix'];  
    }
    
    /**
     * getTensThousands calculates the first part of the number string, the
     * remainder of the value and appropriate string suffix for numbers between
     * 1000-99999 and returns these values in an array
     * 
     * @param integer $num
     * @return array
     */
    private function getTensThousands($num)
    {
        $response['firstNum'] = $this->getTens(($num-$num%1000)/1000);
        $response['remainder'] = $num%1000;
        if ($response['remainder'] > 99 || $response['remainder'] === 0) 
        {
            $response['suffix'] = " Thousand";
        }
        else
        {
            $response['suffix'] = " Thousand And";
        }
        
        return $response;
    }
    
    /**
     * getHundredsThousands calculates the first part of the number string, the
     * remainder of the value and appropriate string suffix for numbers between
     * 1000-99999 and returns these values in an array
     * 
     * @param integer $num
     * @return array
     */
    private function getHundredsThousands($num)
    {
        $response['firstNum'] = $this->getTens(($num-$num%100000)/100000);
        $response['remainder'] = $num%100000;
        if ($response['remainder'] > 999) 
        {
            $response['suffix'] = " Hundred And";
        } 
        elseif ($response['remainder'] < 99 && $response['remainder'] !== 0)
        {
            $response['suffix'] = " Hundred Thousand And";   
        } 
        else 
        {
            $response['suffix'] = " Hundred Thousand";
        }
        
        return $response;
    }
    
}