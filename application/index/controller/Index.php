<?php
namespace app\index\controller;

use app\index\model\Base;
use think\Controller;
/**
 * 
 */
class Index extends Controller
{
    
    public function doIndex(){
        $obj = new Base;
        $result = $obj->doIndex();
        $this->assign('world',$result);
        return $this->fetch('Index');
    }
}