<?php 

 function getData($data){
   if(!$data){
   	foreach($data as $val){
   		echo $val;
   	}
   }
 }

 $arr=[1,2,3,4,5,6];
 getData($arr);