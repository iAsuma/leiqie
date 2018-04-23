<?php
namespace Home\Controller;
//use Think\Controller;
class ExpController extends GateController {
    public function index(){
        $this->display('Public:base');
    }

    public function menu1()
    {
    	exit('menu1');
    }

	public function menu2()
    {
    	exit('menu2');
    }

    public function menu3()
    {
    	exit('menu3');
    }
}