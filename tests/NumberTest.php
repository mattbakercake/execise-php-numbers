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
    
    
    /**
     * @dataProvider compoundTensProvider
     */
    public function testCompoundTens($num, $expected) 
    {
        $number = new lib\Number();
        $result = $number->getString($num);
        
        $this->assertSame($expected, $result);
    }
    
    public function compoundTensProvider() 
    {
        return array(
          array(21,'Twenty One'),
          array(32,'Thirty Two'),
          array(43,'Fourty Three'),
          array(54,'Fifty Four'),
          array(65,'Sixty Five'),
          array(76,'Seventy Six'),
          array(87,'Eighty Seven'),
          array(98,'Ninety Eight'),
          array(99,'Ninety Nine')
        );
    }
    
    
    /**
     * @dataProvider hundredsProvider
     */
    public function testHundreds($num, $expected) 
    {
        $number = new lib\Number();
        $result = $number->getString($num);
        
        $this->assertSame($expected, $result);
    }
    
    public function hundredsProvider() 
    {
        return array(
          array(100,'One Hundred'),
          array(200,'Two Hundred'),
          array(300,'Three Hundred'),
          array(400,'Four Hundred'),
          array(500,'Five Hundred'),
          array(600,'Six Hundred'),
          array(700,'Seven Hundred'),
          array(800,'Eight Hundred'),
          array(900,'Nine Hundred')
        );
    }
    
    
    /**
     * @dataProvider compoundHundredsProvider
     */
    public function testCompundHundreds($num, $expected) 
    {
        $number = new lib\Number();
        $result = $number->getString($num);
        
        $this->assertSame($expected, $result);
    }
    
    public function compoundHundredsProvider() 
    {
        return array(
          array(101,'One Hundred And One'),
          array(215,'Two Hundred And Fifteen'),
          array(327,'Three Hundred And Twenty Seven'),
          array(432,'Four Hundred And Thirty Two'),
          array(546,'Five Hundred And Fourty Six'),
          array(658,'Six Hundred And Fifty Eight'),
          array(763,'Seven Hundred And Sixty Three'),
          array(874,'Eight Hundred And Seventy Four'),
          array(989,'Nine Hundred And Eighty Nine'),
          array(999,'Nine Hundred And Ninety Nine')
        );
    }
    
    
    /**
     * @dataProvider thousandsProvider
     */
    public function testThousands($num, $expected) 
    {
        $number = new lib\Number();
        $result = $number->getString($num);
        
        $this->assertSame($expected, $result);
    }
    
    public function thousandsProvider() 
    {
        return array(
          array(1000,'One Thousand'),
          array(2000,'Two Thousand'),
          array(3000,'Three Thousand'),
          array(4000,'Four Thousand'),
          array(5000,'Five Thousand'),
          array(6000,'Six Thousand'),
          array(7000,'Seven Thousand'),
          array(8000,'Eight Thousand'),
          array(9000,'Nine Thousand'),
          array(10000,'Ten Thousand'),
          array(20000,'Twenty Thousand'),
          array(30000,'Thirty Thousand'),
          array(40000,'Fourty Thousand'),
          array(50000,'Fifty Thousand'),
          array(60000,'Sixty Thousand'),
          array(70000,'Seventy Thousand'),
          array(80000,'Eighty Thousand'),
          array(90000,'Ninety Thousand'),
          array(100000,'One Hundred Thousand'),
          array(200000,'Two Hundred Thousand'),
          array(300000,'Three Hundred Thousand'),
          array(400000,'Four Hundred Thousand'),
          array(500000,'Five Hundred Thousand'),
          array(600000,'Six Hundred Thousand'),
          array(700000,'Seven Hundred Thousand'),
          array(800000,'Eight Hundred Thousand'),
          array(900000,'Nine Hundred Thousand'),
        );
    }
    
    
    /**
     * @dataProvider compoundThousandsProvider
     */
    public function testCompoundThousands($num, $expected) 
    {
        $number = new lib\Number();
        $result = $number->getString($num);
        
        $this->assertSame($expected, $result);
    }
    
    public function compoundThousandsProvider() 
    {
        return array(
          array(1001,'One Thousand And One'),
          array(2015,'Two Thousand And Fifteen'),
          array(3072,'Three Thousand And Seventy Two'),
          array(4105,'Four Thousand One Hundred And Five'),
          array(5398,'Five Thousand Three Hundred And Ninety Eight'),
          array(6500,'Six Thousand Five Hundred'),
          array(10001,'Ten Thousand And One'),
          array(20019,'Twenty Thousand And Nineteen'),
          array(30101,'Thirty Thousand One Hundred And One'),
          array(40318,'Fourty Thousand Three Hundred And Eighteen'),
          array(50776,'Fifty Thousand Seven Hundred And Seventy Six'),
          array(64000,'Sixty Four Thousand'),
          array(72001,'Seventy Two Thousand And One'),
          array(85401,'Eighty FIve Thousand Four Hundred And One'),
          array(97898,'Ninety Seven Thousand Eight Hundred And Ninety Eight'),
          array(100001,'One Hundred Thousand And One'),
          array(200018,'Two Hundred Thousand And Eighteen'),
          array(300100,'Three Hundred Thousand One Hundred'),
          array(400605,'Four Hundred Thousand Six Hundred And Five'),
          array(500784,'Five Hundred Thousand Seven Hundred And Eighty Four'),
          array(604300,'Six Hundred And Four Thousand Three Hundred'),
          array(708216,'Seven Hundred And Eight Thousand Two Hundred And Sixteen'),
          array(825592,'Eight Hundred And Twenty Five Thousand Five Hundred And Ninety Two'),
          array(999999,'Nine Hundred And Ninety Nine Thousand Nine Hundred and Ninety Nine'),
        );
    }
    
}
