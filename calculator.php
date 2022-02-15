<?php
$inputNumber1 = $argv[1];
$inputNumber2 = $argv[2];

echo "左辺: {$inputNumber1} \n";
echo "右辺: {$inputNumber2} \n";

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
class function_code {
    public $plus = $inputNumber1 + $inputNumber2;
    public function plus()
    {
        $answer = $plus;
        echo $this->plus;
        echo $plus;
    }
}



// 実体化される（インスタンス化インスタンス化される）
// $instance = new function_code;

// return $instance->test();
