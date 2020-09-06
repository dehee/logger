<?
if ($_GET["id"] != ""){
	$_GET["d"] = date("Y-m-d H:i:s");
	print_r($_GET);
	$myfile = fopen("logfile.txt", "a");
	fwrite($myfile, "\n" & json_encode($_GET, 1));
	fclose($myfile);
	
} 
?>
<html>
<body>
Hello World
</body>
</html>