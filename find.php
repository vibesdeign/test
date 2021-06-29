<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="" method="post">
	<input type="text" name="q">
	<button>検索</button>
</form>

<?php

if (isset($_POST['q'])) {
	$text = $_POST['q'];
	// print $text;
	$command = 'grep '.$text.' *';
	// print $command;
	// $command = escapeshellcmd($command);
	// print '<br>';
	// print $command;
	exec($command,$retval,$return_var);
	print_r($retval);
	print_r($return_var);
}

?>

</body>
</html>