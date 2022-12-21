<?php
/* ------------ Functions ----------- */

/*
  Functions are reusable blocks of code that we can call to perform a specific task.
  We can pass values into functions to change their behavior. Functions have their own local scope as opposed to global scope
/*
** Function Syntax
  function functionName($arg1, $arg2, ...) {
    // code to be executed
  }
*/
$y = 10;

function register_new_user($email){
    // global $y;
    // echo $y;
    echo $email . ' registered';
    
}
// register_new_user('Pushkar');

function sum($n1=4,$n2=5){
    return $n1+$n2;
}

$number= sum();
// echo $number;

$subtract = function($n1,$n2){
    return $n1-$n2;
};
// echo $subtract(4,3);

$multiply = fn($n1,$n2)=> $n1*$n2;
echo $multiply(5,5);