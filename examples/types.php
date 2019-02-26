<!DOCTYPE HTML>
<html>
<?php
require "import.php";

foreach([$request_uri, $a_bool, $a_int, $a_double, $a_str] as $ovar) {

	echo "<p>\n";

	var_dump($ovar);

	echo ", Type is: ".gettype($ovar)."</p>\n";
};


$a_fl = 42.09;

echop("Cast $a_fl of type ".gettype($a_fl)." to ".(int) $a_fl." of type ".gettype((int) $a_fl));

?>
</html>
