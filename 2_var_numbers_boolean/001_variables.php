<?php

// 1. Создайте переменную boolean типа с названием $b содержащую значение "ложь".


// 2. Создайте переменную boolean типа с названием $isLessonCompleted и поместите в нее значение "истина".


// 3. Создайте переменные с названием $number1 и $number2. И поместите в них два разных целых числа от 0 до 9 (значения выберите самостоятельно).


// 4. Выведите сумму чисел 3 и 4, вместе с типом получившегося значения.


// 5. Создайте переменную $x, и поместите в него число с плавающей точкой 7.3.


// 6. Создайте переменную $result, и поместите в нее результат сложения переменных $x и $number1. Выведите получившееся значение и его тип.


// 7. Создайте переменные $line1, $line2, $line3 и поместите в них три разные строки.


// 8. Создайте переменную $line представляющую собой конкатенацию этих трех переменных в указанном порядке $line1, $line3, $line2, и выведите получившийся результат.

//1
$b = false;

//2
$isLessonCompleted = true;

//3
$number1 = 6;
$number2 = 4;

//4
var_dump($number1);
var_dump($number2);
var_dump($number1+$number2);

//5
$x = 7.3;
var_dump($x);

//6
$result = $x + $number1;
var_dump($result);

//7
$line1 = 'line1';
$line2 = 'line2';
$line3 = 'line3';



//8
$line = $line1 . $line2 . $line3;
var_dump($line);

?>