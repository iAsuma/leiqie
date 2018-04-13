<?php
namespace Home\Controller;
use Think\Controller;
class ExpController extends Controller {
    public function index(){
        $this->display('Public:base');
    }
}