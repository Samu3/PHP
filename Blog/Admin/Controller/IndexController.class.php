<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $this->display();
    }

    public function head(){
    	 $this->display();
    }

    public function left(){
    	  $this->display();

    }

    public function right(){
    	 $this->display();

    }
}