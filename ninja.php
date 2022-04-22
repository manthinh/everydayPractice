<?php
// 一問目
// class ninja {
//     public function ninja()
//     {
//         $ninja = "PHPの問題集', 'スタート！"."\n";
//         echo $ninja;
//     }
// }

// $instance = new ninja();
// echo $instance->ninja();

// 二問目
// $ninja = ['1,2,3,4,5,6,7,8,9,10,11,12,13,14,15'];

// foreach($ninja as $value)

// echo $value ."\n";

// 2問目解答
// foreach (range(1, 15) as $i) {
//     echo $i . '<br>';
// }

// 三問目
// $list = ['忍','者','C','O','D','E'];
// var_dump(implode(",",$list));

// 三問目解答
// echo implode("" , $list);

// 四問目
// $ninja = substr('忍者CODE',0,2);
// echo $ninja.'<br>';

// 5問目


$text = ['P','H','P','を','学','ぶ'];
// echo $text."\n";
for($i = 0; $i < count($text);$i++)
{
echo $text[$i];
}
