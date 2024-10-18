<?php
//Задание 1
$some1 = 1;// тип integer 
echo $some1;
$some2 = "Hello!"; // тип string
echo $some2;
$some3 = true;//тип boolean
echo $some3;
$some4 = 1.255;// тип float
echo $some4;

define ("SOME", "Название сайта");
print(SOME) ;

//Задание 2
$numberString = "23";
$num = gettype($numberString);
echo "Тип данных: " . $num . ", Значение: " . $numberString;

//Задание 3

$num1 = 10;
$num2 = 5;
$summ = $num1+$num2;
echo $summ;
$differ=$num1-$num2;
echo $differ;
$var1 = $num1*$num2;
echo $var1;
$var2 = $num1/$num2;
echo $var2;
$result1 = $num1 == $num2;  
$result2 = $num1 != $num2;  
$result3 = $num1 === $num2;  
$result4 = $num1 !== $num2;  
$result5 = $num1 > $num2;  
$result6 = $num1 < $num2;  
$result7 = $num1 >= $num2;  
$result8 = $num1 <= $num2;  

$price = 6;
if($price >= 6 && $price <= 10)
echo "Число находится между 6 и 10";
if(10 > 6 || 1 > 2)
echo "Условие выполнено.";

//задание 5