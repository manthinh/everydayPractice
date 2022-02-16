<?php
$inputNumber1 = $argv[1];
$inputNumber2 = $argv[2];
$inputSymbol = $argv[3];

$string = $inputSymbol;
$symbol = "+,-,*,/";
$pos = strpos($string,$symbol);

if ($pos === false){
    echo "$inputSymbol \n";
};




$addition = $inputNumber1 + $inputNumber2;
$subtraction = $inputNumber1 - $inputNumber2;
$multiplication = $inputNumber1 * $inputNumber2;
$division = $inputNumber1 / $inputNumber2;
echo "左辺: {$inputNumber1} \n";
echo "右辺: {$inputNumber2} \n";
echo "answer: {$addition} \n";
echo "answer: {$subtraction} \n";
echo "answer: {$multiplication} \n";
echo "answer:{$division} \n";
// クラス定義（実態がない）
class function_code {
    // オブジェクト
    public $a = "テスト\n";

    public function test()
    {
        $a = "テスト関数\n";
        echo $this->a;
        echo $a;
    }
}
// class function_code {
    // public $addition = $inputNumber1 + $inputNumber2;
//     public function plus()
//     {
//         $answer = $addition;
//         echo $this->addition;
//         echo $addition;
//     }
// }
class calculate {
    private $addition;
    public function __construct($addition){
        $this->addition = $addition;
    }
    public function getanswer(){

    return $this->addition;}
} 



// 実体化される（インスタンス化インスタンス化される）
// $instance = new function_code;

// return $instance->test();
