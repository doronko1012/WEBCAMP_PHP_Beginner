<?php

fizzBuzz(100);

function fizzBuzz(int $max){
    for($i=1; $i<=$max; ++$i){
        if(($i%15) === 0){
            echo "Fizz Buzz \n";
            
        }else if(($i%3) === 0){
            echo "Fizz \n";
            
        }else if(($i%5) === 0){
            echo "Buzz \n";
            
        }else{
            echo "{$i} \n";
            }
    }
}