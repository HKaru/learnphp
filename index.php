<?php
// This is a line comment
/*
This is a block comment
*/
const HELLO_WORLD = 1; //Constantid suure tähega ja alakriipsuga kui mitu sõna
$num =1; //int
$bar = 4.1; //float
$num = 'hello';
$num = HELLO_WORLD; //string
$num = true; // boolean
$num = false;
$num = [1,2,3,4,5,6]; //array
$num = ['red' => 1, 
        'blue'=> 2, 
        'green' =>3
];
$num = ['red' => 1,100 => 2,3,200 => 4,5, 'foo' => 'bar'];

$num = 1;
$num = 1 + 1;
$num = 1 - 1;
$num = 1 * 1;
$num = 1 / 1;
$num = 4 % 2;
$num += 1;
$num -= 1;
$num *= 1;
$num /= 1;
$num %= 1;
$num ++;
$num --;
$num = 5**2;
$num = true && false;
$num = true || false;
$num = 10 > 1;
$num = 10 == 10;
$num = '10' == 10;
$num = '10' === 10;
$num = '10' !== 10;
$num = '10' != 10;
$num = 'hello' . 'world';
$num .= 'world';

var_dump($num);

