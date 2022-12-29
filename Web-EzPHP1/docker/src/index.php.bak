<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<style>
		body { 
			background: pink url('bg.png') no-repeat;
			background-size: cover; 
		}
	</style>
</head>

<body >
	<h1>我想有人一下子就猜出题是谁出的了。</h1>
</body>
</html>

<?php

$query = urldecode($_SERVER["QUERY_STRING"]);
if (strpos($query, '_') !== False)	die("nonono");

if(isset($_GET['f_name'])){
	$path = $_GET['f_name'];
	$content = $_POST['f_content'];

	if (preg_match('/(eval)|(assert)|(system)|(exec)|(shell_exec)|(popen)|(passthru)|(pcntl_exec)|(preg_replace)|(create_function)|(array_map)|(call_user_func)|(call_user_func_array)|(array_filter)|(uasort)/i', $content) !== 0)
		die('nonono!');
	
	if (strlen($content) > 22){
		die('why are you so LONG?');
	}
	if (file_put_contents($path, $content))	 die("ok");
}

?>