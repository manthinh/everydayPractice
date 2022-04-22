<?php
$InputNumber1 = $argv[1];
$InputNumber2 = $argv[2];
$InputSymbol = $argv[3];

class calculate {
    public function __construct($InputNumber1,$InputNumber2,$InputSymbol)
    {
        $this->InputNumber1 = $InputNumber1;
        $this->InputNumber2 = $InputNumber2;
        $this->InputSymbol = $InputSymbol;
    }

    public function addition()
    {
        $addition = $this->InputNumber1 + $this->InputNumber2;
        echo $addition."\n";
    }

    public function subtraction()
    {
        $subtraction = $this->InputNumber1 - $this->InputNumber2;
        echo $subtraction."\n";
    }

    public function multiplication()
    {
        $multiplication = $this->InputNumber1 * $this->InputNumber2;
        echo $multiplication."\n";
    }

    public function division()
    {
        $division = $this->InputNumber1 / $this->InputNumber2;
        echo $division ."\n";
    }
}