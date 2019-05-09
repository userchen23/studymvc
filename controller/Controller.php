<?php

/**
 * 
 */
class Controller
{
    
    public function doindex(){
        $modelobj = new Model;
        $result = $modelobj->set();
        
        include "./view/View.html";
    }
}