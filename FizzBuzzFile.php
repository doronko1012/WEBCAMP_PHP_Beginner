<?php
$file_name = __DIR__. "/FizzBuzzFile.txt";

for($i=1; $i<=100; ++$i){
    if(($i%15) === 0){
        $write_string = "Fizz Buzz \n";
        
    }else if(($i%3) === 0){
        $write_string = "Fizz \n";
        
    }else if(($i%5) === 0){
        $write_string = "Buzz \n";
        
    }else{
        $write_string = "{$i} \n";
        }
    file_put_contents($file_name, $write_string, FILE_APPEND | LOCK_EX);
}