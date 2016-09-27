<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){

    	$url = U('Home/Article/article?id=1527');
    	
    	
    	$this->assign('url',$url);
        $this->display();
    }

    public function read($id){
    	echo "aaa".$id;
    }

    public function aaa($id){
    	echo "bbb".$id;
    }
}