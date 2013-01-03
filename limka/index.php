<?php 
static $i=1;
for($i=0;$i<5;  $i++){
$add=0;
$r[] =$add.'0000';
$r[] =$add.'0001';
$r[] =$add.'0010';
$r[] =$add.'0011';
$r[] =$add.'0100';
$r[] =$add.'0101';
$r[] =$add.'0110';
$r[] =$add.'0111';

$r[] =$add.'1000';
$r[] =$add.'1001';
$r[] =$add.'1010';
$r[] =$add.'1011';
$r[] =$add.'1100';
$r[] =$add.'1101';
$r[] =$add.'1110';
$r[] =$add.'1111';

$add=1;
$r[] =$add.'0000';
$r[] =$add.'0001';
$r[] =$add.'0010';
$r[] =$add.'0011';
$r[] =$add.'0100';
$r[] =$add.'0101';
$r[] =$add.'0110';
$r[] =$add.'0111';

$r[] =$add.'1000';
$r[] =$add.'1001';
$r[] =$add.'1010';
$r[] =$add.'1011';
$r[] =$add.'1100';
$r[] =$add.'1101';
$r[] =$add.'1110';
$r[] =$add.'1111';
}
if(!isset($_GET['r'])){
shuffle($r);
}


?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Memory</title>
<style type="text/css">
  myclass {
  width: 20px;
  padding: 20px; margin: 10px;
  color: #9D9E99; 
  font: 10px Verdana,bold,sans-serif; text-align: center;
  font-size:20px;
   }
</style>
</head>
<body bgcolor="#053650">
<table width="90%">
<tr><td width="90%" ></td></tr>
</table>
<table>
<?php 
$i = 0;
for($j=1;$j<=7;$j++)
	{ ?>
	<tr><td collspan="6"><br /></td></tr>
	<tr><td collspan="6"></td></tr>
	<tr><td collspan="6"></td></tr>
	<tr>
	<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="myclass" ><?php echo $r[$i++]; ?></span><input type="text" /></td>
	<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="myclass" ><?php echo $r[$i++]; ?></span><input type="text" /></td>
	<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="myclass" ><?php echo $r[$i++]; ?></span><input type="text" /></td>
	<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="myclass" ><?php echo $r[$i++]; ?></span><input type="text" /></td>
	<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="myclass" ><?php echo $r[$i++]; ?></span><input type="text" /></td>
	<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="myclass" ><?php echo $r[$i++]; ?></span><input type="text" /></td>
	</tr>
	<tr><td collspan="6"></td></tr>
	<tr><td collspan="6"></td></tr>
	<tr><td collspan="6">  </td></tr>
<?php } ?>
</table>
<form name="form1" action="index.php">
<div align="center" style="padding-left:50px" ><br /><br />
<a href="index.php"><font color="#FFFFFF">Once Again</a> | <a href="index.php?r=0"><font color="#FFFFFF">On Sequence</a> | <a href="run.php"><font color="#FFFFFF">Let's go fast..</a>
<br /><font size="+4">Let's do it.. rajesh</font></div>
</center>
</form>
</body>
</html>