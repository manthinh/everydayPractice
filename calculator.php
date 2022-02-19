<?php
$inputNumber1 = $argv[1];
$inputNumber2 = $argv[2];
$inputSymbol = $argv[3];

// $symbol = substr('+-*/',0,1);
// $symbol2 = substr('+-*/',1,1);
// $symbol3 = substr('+-*/',2,1);
// $symbol4 = substr('+-*/',3,1);

$symbol = "+";
$symbol2 = "-";
$symbol3 = "*";
$symbol4 = "/";

$addition = $inputNumber1 + $inputNumber2;
$subtraction = $inputNumber1 - $inputNumber2;
$multiplication = $inputNumber1 * $inputNumber2;
$division = $inputNumber1 / $inputNumber2;
echo "第一引数: {$inputNumber1} \n";
echo "第二引数: {$inputNumber2} \n";
echo "第三引数: {$inputSymbol} \n";
if ($inputSymbol === $symbol or $inputSymbol === $symbol2 or $inputSymbol === $symbol3 or $inputSymbol === $symbol4) {
    echo "$inputSymbol\n";
} else {
    echo "文字と0以外の数字を入れてください\n";
} 

// echo "answer: {$addition} \n";
// echo "answer: {$subtraction} \n";
// echo "answer: {$multiplication} \n";
// echo "answer:{$division} \n";

if ($inputSymbol === $symbol) {
    echo "足し算: {$addition} \n";
} else if ($inputSymbol === $symbol2){
    echo "引き算: {$subtraction} \n";
} else if ($inputSymbol === $symbol3){
    echo "掛け算: {$multiplication} \n";
} else if ($inputSymbol === $symbol4){
    echo "割り算:{$division} \n";
}


if($inputSymbol === [1-9]){
    echo "足し算: {$addition} \n";
}
// クラス定義（実態がない）
// class function_code {
//     // オブジェクト
//     public $a = "テスト\n";

//     public function test()
//     {
//         $a = "テスト関数\n";
//         echo $this->a;
//         echo $a;
//     }
// }
// // class function_code {
//     // public $addition = $inputNumber1 + $inputNumber2;
// //     public function plus()
// //     {
// //         $answer = $addition;
// //         echo $this->addition;
// //         echo $addition;
// //     }
// // }
// class calculate {
//     private $addition;
//     public function __construct($addition){
//         $this->addition = $addition;
//     }
//     public function getanswer(){

//     return $this->addition;}
// } 



// // 実体化される（インスタンス化インスタンス化される）
// // $instance = new function_code;

// // return $instance->test();
