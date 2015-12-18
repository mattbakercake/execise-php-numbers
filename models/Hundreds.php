<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace models;

/**
 * Description of Hundreds
 *
 * @author matt
 */
class Hundreds {
    
    public $data = array(
      100 => 'One Hundred',
      200 => 'Two Hundred',
      300 => 'Three Hundred',
      400 => 'Four Hundred',
      500 => 'Five Hundred',
      600 => 'Six Hundred',
      700 => 'Seven Hundred',
      800 => 'Eight Hundred',
      900 => 'Nine Hundred'
    );
    
    public function __construct() {
        return $this->data;
    }
}
