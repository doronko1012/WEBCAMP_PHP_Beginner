<?php


class FizzBuzz
{
    private int $max;
    
    public function setMax($i)
    {
        $this->max = $i;
    }

    public Function exec()
    {
       for($i=1; $i<= $this->max; ++$i){
            if(($i%15) === 0){
                $write_string = "Fizz Buzz \n";
                
            }else if(($i%3) === 0){
                $write_string = "Fizz \n";
                
            }else if(($i%5) === 0){
                $write_string = "Buzz \n";
                
            }else{
                $write_string = "{$i} \n";
                }
        echo $write_string;        
        }
    }
}

$obj = new FizzBuzz();
$obj ->setMax(50);
$obj->exec();