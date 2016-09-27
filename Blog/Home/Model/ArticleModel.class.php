<?php
namespace Home\Model;
use Think\Model;

class CategoryModel extends Model{
	    protected $fields = array(
            'id', 'articleName', 'detail', '_pk' => 'id', '_autoinc' => true
        );

}