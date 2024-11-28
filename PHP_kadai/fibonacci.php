<?php
$i = 0;
$j = 1;
$k = "";
while($k < 10000){
    if($i>0){
        $k = $i + $j;   
        echo "{$k} \n";
        $i = $j;
        $j = $k;  
    }else{
        echo "{$i} \n";
        echo "{$j} \n";
        $k = $i + $j; 
        echo "{$k} \n";        
        $i = $j;
    }
}