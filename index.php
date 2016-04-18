<?php 
echo 'hello world';

//最常写的函数
function P($arr){
	echo "<pre>";
	print_r($arr);
	echo "</pre>";
}
//多维数组转一维
function manyToOne($data){
	$dataRow=array();
	if($data){
		foreach($data as $val){
             $dataRow[]=$val;
		}
	}
	return $dataRow;
}