<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of NumberTest
 *
 * @author matt
 */


class NumberTest extends PHPUnit_Framework_TestCase{
    
    /**
     * @dataProvider zeroToNineteenProvider
     */
    public function testZeroToNineteen($num, $expected) 
    {
        $number = new lib\Number();
        $result = $number->getString($num);
        
        $this->assertSame($expected, $result);
    }
    
    public function zeroToNineteenProvider()
    {
        return array(
          array(0,'Zero'),
          array(1,'One'),
          array(2,'Two'),
          array(3,'Three'),
          array(4,'Four'),
          array(5,'Five'),
          array(6,'Six'),
          array(7,'Seven'),
          array(8,'Eight'),
          array(9,'Nine'),
          array(10,'Ten'),
          array(11,'Eleven'),
          array(12,'Twelve'),
          array(13,'Thirteen'),
          array(14,'Fourteen'),
          array(15,'Fifteen'),
          array(16,'Sixteen'),
          array(17,'Seventeen'),
          array(18,'Eighteen'),
          array(19,'Nineteen'),
        );
    }
    
    /**
     * @dataProvider tensProvider
     */
    public function testTens($num, $expected) 
    {
        $number = new lib\Number();
        $result = $number->getString($num);
        
        $this->assertSame($expected, $result);
    }
    
    public function tensProvider() 
    {
        return array(
          array(20,'Twenty'),
          array(30,'Thirty'),
          array(40,'Fourty'),
          array(50,'Fifty'),
          array(60,'Sixty'),
          array(70,'Seventy'),
          array(80,'Eighty'),
          array(90,'Ninety')
        );
    }
    
}
