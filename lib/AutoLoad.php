<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class AutoLoad {
    static public function loader($class) {
        $filename = str_replace('\\', '/', $class) . '.php';
        if (file_exists($filename))
        {
            include_once $filename;
            if(class_exists($class))
            {
                return TRUE;
            }
        }
        return FALSE;
    }
}
spl_autoload_register('AutoLoad::loader');

