<?php
$InputNumber1 = $argv[1];
$InputNumber2 = $argv[2];
$InputSymbol = $argv[3];

class calculate
{
    public function __construct($InputNumber1, $InputNumber2, $InputSymbol)
    {
        $this->InputNumber1;
        $this->InputNumber2;
        $this->InputSymbol;
    }

    public function addition()
    {
        $addition = $this->InputNumber1 + $this->InputNumber2;
        echo $addition . "\n";
    }
    }

    $instance = new Calculate($InputNumber1,$InputNumber2,$InputSymbol);
    $instance->addition();
}