<?php
include dirname(__FILE__) . '/calculate.php';

$InputNumber1 = $argv[1];
$InputNumber2 = $argv[2];
$InputSymbol = $argv[3];

echo "第一引数:{$argv[1]}"."\n";
echo "第二引数:{$argv[2]}"."\n";
echo "タイプ:{$argv[3]}"."\n";

$instance = new calculate($InputNumber1,$InputNumber2,$InputSymbol);
// $instance->getAnswer();
if($InputSymbol === "+") {
    return print($instance->addition());
} else if($InputSymbol === "-") {
    return print($instance->subtraction());
} else if($InputSymbol === "*") {
    return print($instance->multiplication());
} else if($InputSymbol === "/") {
    return print($instance->division());
} else if($InputSymbol !== "+"||"-"||"*"||"/") {
    return print('適切な記号を入れないと答えが出力できません')."\n";
}

