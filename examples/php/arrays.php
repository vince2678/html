<!DOCTYPE html>
<html>
<?php

include "import.php";

echo "<h1>Arrays</h1><br>";

echo "<h2>Defining arrays</h2><br>";

echop('Array indices can be integers:');

$itos = array(
	1 => "one",
	2 => "two",
	3 => "three",
	4 => "four",
	5 => "five"
);

var_dump($itos);

echop('Or strings:');

$stoi = array(
	"one" => 1,
	"two" => 2,
	"three" => 3,
	"four" => 4,
	"five" => 5
);

var_dump($stoi);

echop('String keys with valid decimal integers will implicitly be cast to integers:');

$scti = array(
	"0" => "zero",
	"1" => "one",
	"2.2" => "two",
	"3.35" => "three",
	"+4" => "four",
	"05" => "five",
);

var_dump($scti);

echop('Array keys increment automatically if not specified:');

$ai = array(
	"zero",
	"one",
	"two",
	"three",
	"four",
	7 => "seven",
	"eight",
	"nine"
);

var_dump($ai);

echop("Square bracket notation can be used to define arrays, e.g\n<br>\t \$array = [1,2,3,4,5] :");

$array = [1,2,3,4,5];

var_dump($array);

echop("Initialising the array then adding values, e.g :<br> \$array = array(); <br> \$array[] = 'zero'; <br><p>");

$array = array();
$array[] = 'zero';
$array[] = 'one';
$array[] = 'two';

var_dump($array);

echo "<h2>Accessing Arrays</h2><br>";

echop("We can access the values of \$itos using a foreach loop<br> foreach(\$itos as \$num) {}:");

foreach ($itos as $num) {
	echo "<p>{$num}</p>\n";
}

echop("We can change the values of \$itos in the loop by passing them by reference.<br>foreach(\$itos as &\$num) {}:");

foreach($itos as &$num) {
	echop("Before: value is $num");
	$num = strtoupper($num);
	echop("After: value is $num");
};

var_dump($itos);

echop("We can access array members using a for() loop and count() to get array element counts:");
for ($i=0; $i < count($itos); $i++) {
	echo "\n<br>Array element with key {$i} is {$itos[$i]}";
};

?>
</html>
