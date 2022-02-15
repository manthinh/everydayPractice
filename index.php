<?php
include dirname(__FILE__) . '/calculator.php';


$instance = new function_code;

echo $instance->test();


// $plus = new calculator($inputNum, $inputNum2);
$plus = new function_code();

echo $plus->test();

// ここまで
$instance = new function_code;

echo $instance->addition();
