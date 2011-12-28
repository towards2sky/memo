<?php 
static $i=1;
echo "<center><b>"."NUMERIC TO ALFABAT";
for($j=1;$j<=20;$j++)
	{
	include('num.php');
	}
	echo "<center><b><br><br><br><br>"."ALFABAT TO NUMERIC";
include('alfa.php');


?>
<html>
<body bgcolor="#0033FF">
<form name="form1" action="run.php">
<center>
<input type="reset" value="reset">
</center>
</form>












</body>
</html>