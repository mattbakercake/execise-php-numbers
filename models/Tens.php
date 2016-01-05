<?php

namespace models;
/**
 * Tens class provides array of unique numbers to strings that can
 * be used to construct all numbers between 0-999999
 *
 * @author Matt
 */
class Tens {
    
    public $data = array(
      0 => 'Zero',
      1 => 'One',
      2 => 'Two',
      3 => 'Three',
      4 => 'Four',
      5 => 'Five',
      6 => 'Six',
      7 => 'Seven',
      8 => 'Eight',
      9 => 'Nine',
      10 => 'Ten',
      11 => 'Eleven',
      12 => 'Twelve',
      13 => 'Thirteen',
      14 => 'Fourteen',
      15 => 'Fifteen',
      16 => 'Sixteen',
      17 => 'Seventeen',
      18 => 'Eighteen',
      19 => 'Nineteen',
      20 => 'Twenty',
      30 => 'Thirty',
      40 => 'Fourty',
      50 => 'Fifty',
      60 => 'Sixty',
      70 => 'Seventy',
      80 => 'Eighty',
      90 => 'Ninety'
    );
    
    public function __construct() {
        return $this->data;
    }
}
