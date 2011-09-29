<?php 
static $i=1;
echo "<center><b>".'<font color="#FFFFFF" size="+3">'."NUMERIC TO ALFABAT".'</font>';
for($x=1;$x<=100;$x++){
$r[] =$x;
}
for($x=0;$x<10;$x++){
$r[] ="0$x";
}

$r[] ='01';
if(!isset($_GET['r'])){
shuffle($r);
}

$i = 0;
for($j=1;$j<=22;$j++)
	{
	//echo $r[$i++];
	?>
	<html>
<pre><br><b>
	<span style="width:10px; font-size:16px;"> <?php echo  $r[$i++]; ?></span><input type="text" />	<span style="width:10px; font-size:16px;"><?php echo $r[$i++]; ?></span><input type="text" />	<span style="width:10px; font-size:16px;"><?php echo $r[$i++]; ?></span><input type="text" />	<span style="width:10px; font-size:16px;"><?php echo $r[$i++]; ?></span><input type="text" />	<span style="width:10px; font-size:16px;"><?php echo $r[$i++]; ?></span><input type="text" /></b></pre>
</html>
	
	<?php
	}
echo "<center><b><br><br><br><br>".'<font color="#FFFFFF" size="+3">'."ALFABAT TO NUMERIC".'</font>';
//include"alfa.php"
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Memory</title>
</head>
<body bgcolor="#053650">
<form name="form1" action="run.php">
<div align="center" style="padding-left:50px" >
<a href="index.php"><h2><font color="#FFFFFF">Once Again</h2></a> | 
<a href="index.php?r=0"><h2><font color="#FFFFFF">On Sequence</h2></a>
<font size="+4">rajesh</font></div>
</center>
</form>

</body>
</html>