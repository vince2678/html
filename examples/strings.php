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


?>
</html>
