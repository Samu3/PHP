<?php
namespace Home\Controller;
use Think\Controller;

class ArticleController extends Controller{

	public function index(){
		echo "index";
	}

	public function article($id){

		$aa = M('books')->where('isbn='.$id)->select();

    	foreach ($aa as $str) { 
    		echo $str['detail'];
    	}

	}
}


