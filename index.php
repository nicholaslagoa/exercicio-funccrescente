<?php
function SequenciaCrescente(array $arr){
	$status = 0;

    for($i=0; $i<count($arr)-1; $i++)
    {
        for($j=0; $j<count($arr)-1; $j++)
        {
            if($arr[$j]> $arr[$j+1]){
                $temp= $arr[$j+1];
                $arr[$j+1]= $arr[$j];
                $arr[$j]= $temp;
                $status += $j;
            }
        }
    }
    if($status <= 1){
    	return 'true';
    }else{
    	return 'false';
    }
}

echo SequenciaCrescente(array(1, 3, 2, 1));