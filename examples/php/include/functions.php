<?php

function indent($level=1) {
	for ($i=0; $i<$level; $i++) {
		echo "\t";
	}
}

function echop($str, $ind=1) {
	echo "\n";
	indent($ind);
	echo "<p>\n";
	indent($ind+1);
	echo $str."\n";
	indent($ind);
	echo "</p>\n";
}

?>
