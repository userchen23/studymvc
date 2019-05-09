<?php 
namespace app\index\model;

use think\Model;

/**
 * 
 */
class Base extends Model
{
    
    public function doIndex(){
        $result = 'Hello world';
        return $result;
    }
}