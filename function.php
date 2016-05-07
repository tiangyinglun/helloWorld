<?php
//新加的方法
function array2One($data){
	 $arr=array();
	if($data){
		foreach($data as $val){
          $arr[]=$val;
		}
	}
	return $arr;
}


