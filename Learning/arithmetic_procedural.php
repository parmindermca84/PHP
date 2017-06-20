<?php
//ini_set('error_reporting', (E_ALL & ~E_NOTICE));
const ADDITION = '+';
const SUBTRACTION = '-';
const MULTIPLICATION = '*';
const DIVISION = '/';

$a = 10;
$b = 20;

displayArithmetic($a, $b);

$a = 30;
$b = 40;
displayArithmetic($a, $b);

// function
function displayArithmetic($a, $b)
{
	echo "Sum of two numbers are: " . arithmetic($a, $b, ADDITION) . "<br>";
	echo "Subtraction of two numbers are: " . arithmetic($a, $b, SUBTRACTION) . "<br>";
	echo "Division of two numbers are: " . arithmetic($a, $b, MULTIPLICATION) . "<br>";
	echo "Multiplication of two numbers are: " , arithmetic($a, $b, DIVISION) . "<br><br>";

}

function arithmetic($x, $y, $operation)
{
	switch ($operation) {
		case ADDITION:
			return ($x + $y);
		case SUBTRACTION:
			return ($x - $y);
		case MULTIPLICATION:
			return ($x * $y);
		case DIVISION:
			return ($x / $y);
		default:
			# code...
			break;
	}	
}
