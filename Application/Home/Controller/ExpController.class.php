<?php
namespace Home\Controller;
use Think\Controller;
class ExpController extends GateController {
    public function index(){
        $this->display('Public:base');
    }
}