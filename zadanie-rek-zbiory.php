<?php

$arr =  [5,3,7,2,10,23,11,45,15,34];//4
$arr2 = [1,2,3,4,5,6,7,8,9,10]; //1
$arr3 = [10,9,8,7,6,5,4,3,2,1]; //null
$arr4 = [10,8,4,9,9,2,11,23]; //6

function getAxis($arr){
    $lastIndex = count($arr)-1;
	
	$maxIndexArr = [];
	$max = $arr[0];
	
	$minIndexArr = [];
	$min = $arr[$lastIndex];
	    
    $lastIndexTmp = $lastIndex;
	$firstIndexTmp = 1;
	
	for ($i = 1; $i < $lastIndex; $i++) {
		$firstIndexTmp = $i;
		$lastIndexTmp--;
		if( $arr[$firstIndexTmp] > $max){
			$max = $arr[$firstIndexTmp];
			$maxIndexArr[$firstIndexTmp] = $firstIndexTmp;
		}
		if( $arr[$lastIndexTmp] <= $min){
			$min = $arr[$lastIndexTmp];
			$minIndexArr[$lastIndexTmp] = $lastIndexTmp;			
		}
    }
    if( count($minIndexArr) > count($maxIndexArr) ){
        foreach($minIndexArr as $k => $v){
            if(isset($maxIndexArr[$k])){
                return $k;
            }    
        }
    }else{
        foreach($maxIndexArr as $k => $v){
            if(isset($minIndexArr[$k])){
                return $k;
            }    
        }
    }
	return null;
}

var_dump(getAxis($arr));
var_dump(getAxis($arr2));
var_dump(getAxis($arr3));
var_dump(getAxis($arr4));