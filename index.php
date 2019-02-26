<!DOCTYPE HTML>
<html>
    <?php

        include 'vars.php';
	include 'classes.php';
	include 'functions.php';

        echo "\t<h1>Hello World!!!</h1>\n";

        echo "\t<p>\n";

        echo "\t\t\$_SERVER[REQUEST_URI]=".$request_uri."\n";

        echo "\t</p>\n";

	foreach([$request_uri, $a_bool, $a_int, $a_double, $a_str] as $ovar) {

		echo "<p>\n";

		var_dump($ovar);

		echo ", Type is: ".gettype($ovar)."</p>\n";
	};

	echo "<br>\n";
	for ($i = 0; $i < 10; $i++) {
		echo "\n<p>Count is at: i=".$i."</p>\n";
	};

	$a_fl = 42.09;

	echop("Cast $a_fl of type ".gettype($a_fl)." to ".(int) $a_fl." of type ".gettype((int) $a_fl));


	echo <<<EOT
	<br />
	<p> Here's some text for ya </p>

	<p>
		This is a string in heredoc format.
		<br>
		Variables like \$request_uri (=$request_uri) do not need to be escaped.
	</p>
	<br />

EOT;

echo <<<'EOT'
	<p> Here's an example of a string in nowdoc format.
	    Nowdoc is to single-quote strings what heredocs are to double-quoted strings.
	    <br>
	    You don't need to escape chars as with heredocs, so $$$$ and \ are not evaluated.
	    <br>
	    <a href="index.old.html">View old index</a>
	</p>
EOT;

	//if $request_uri == 
    ?>
</html>
