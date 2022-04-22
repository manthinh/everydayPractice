<?php
include dirname(__FILE__) . 'calculate/calculator.php';


$instance = new function_code;

echo $instance->test();


// $plus = new calculator($inputNum, $inputNum2);
$plus = new function_code();

echo $plus->test();

