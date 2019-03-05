<!DOCTYPE HTML>
<html>
<?php

require "import.php";

echo <<<EOT
	<br />
	<p> Here's some text for ya </p>

	<p>
		This is a string in heredoc format.
		<br>
		Variables like \$request_uri (=$request_uri) do not need to be escaped.

        	echo "\t\t\$_SERVER[REQUEST_URI]=".$request_uri."\n";
	</p>
	<br />

EOT;

echo <<<'EOT'
	<p> Here's an example of a string in nowdoc format.
	    Nowdoc is to single-quote strings what heredocs are to double-quoted strings.
	    <br>
	    You don't need to escape chars as with heredocs, so $$$$ and \ are not evaluated.
	    <br>
	    <a href="/index.old.html">View old index</a>
	</p>
EOT;

$fruit = "apple";

echop("John has 5 $fruit.s");
echop("John has 6 ${fruit}s");

echop ('We\'re going to use substr() to access string elements:');
for ($i=0; $i < strlen($fruit); $i++) {
	echo substr($fruit, $i, 1);
}
echo "\n<br>";

echop ('We\'re going to use brackets for string access ($fruit{$i}):');
for ($i=0; $i < strlen($fruit); $i++) {
	echo $fruit{$i};
}
echo "\n<br>";

echop ('We\'re going to use brackets and quotes for string access ("{$fruit[$i]}"):');
for ($i=0; $i < strlen($fruit); $i++) {
	echo "{$fruit[$i]}";
}
echo "\n<br>";

$beverage="tea";

echop("I wanna drink some ${beverage}.");

$beverage[strlen($beverage)-1]='e';
$beverage[strlen($beverage)-2]='l';
$beverage[strlen($beverage)-3]='a';

echop("Now, I wanna drink some ${beverage}.");
?>
</html>
