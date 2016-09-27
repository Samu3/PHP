<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $this->display();
    }

    public function read($id){
    	echo "aaa".$id;
    }

    public function aaa($id){
    	echo "bbb".$id;
    }
}