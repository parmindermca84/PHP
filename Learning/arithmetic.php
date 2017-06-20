<?php
class Arithmetic
{
	private $a;
	private $b;

	const ADDITION = '+';
	const SUBTRACTION = '-';
	const MULTIPLICATION = '*';
	const DIVISION = '/';

	public function __construct($a, $b)
	{
		$this->SetA($a);
		$this->b = $b;
	}

	// Getter and setter method
	private function SetA($a)
	{
		$this->a = $a;
	}
	private function SetB($b)
	{
		$this->b = $b;
	}

	public function getA()
	{
		return $this->a;
	}

	public function getB()
	{
		return $this->b;
	}

	public function operation($operation)
	{
		switch ($operation) {
			case self::ADDITION:
				return ($this->a + $this->b);
			case self::SUBTRACTION:
				return ($this->a - $this->b);
			case self::MULTIPLICATION:
				return ($this->a * $this->b);
			case self::DIVISION:
				return ($this->a / $this->b);
			default:
				# code...
				break;
		}	
	}

	public function displayArithmetic()
{
	echo "Sum of two numbers are: " . $this->operation(self::ADDITION) . "<br>";
	echo "Subtraction of two numbers are: " . $this->operation(self::SUBTRACTION) . "<br>";
	echo "Division of two numbers are: " . $this->operation(self::MULTIPLICATION) . "<br>";
	echo "Multiplication of two numbers are: " , $this->operation(self::DIVISION) . "<br><br>";

}
}

// Object
$Arithmetic = new Arithmetic(10, 20);
$Arithmetic->displayArithmetic();
//(new Arithmetic(10, 20))->displayArith.

$Arithmetic1 = new Arithmetic(15, 30);
$Arithmetic1->displayArithmetic();