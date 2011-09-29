<?php 
static $i=1;
echo "<center><b>".'<font color="#FFFFFF" size="+3">'."NEW 31 TAGS {NUMERIC TO ALFABAT}".'</font>';
for($x=1;$x<=31;$x++){
if($x<10)
$r[] ='&nbsp;'.$x;
else
$r[] =$x;
}
$r[]=14;
shuffle($r);
$i = 0;
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Memory</title>
</head>
<body bgcolor="#053650">
<table cellpadding="10" width="80%" cellspacing="10">
<tr>
	<td height="40" align="right" colspan="5">
	<a style="color:#FFFFFF; text-decoration:none" href="index.php" >BACK TO HOME</a>
	</td>
</tr>
<?php 
for($j=1;$j<=8;$j++)
	{
	
	?>
	<tr>
	<td width="20%"><span style="width:10px; font-size:16px;"> <?php if($i>31){$i=1; } echo  $r[$i++]; ?></span><input type="text" size="15" /></td>
	<td width="20%"><span style="width:10px; font-size:16px;"><?php if($i>31){$i=1; } echo  $r[$i++]; ?></span><input type="text" size="15" /></td>
	<td width="20%"><span style="width:10px; font-size:16px;"><?php if($i>31){$i=1; } echo  $r[$i++]; ?></span><input type="text" size="15" /></td>
	<td width="20%"><span style="width:10px; font-size:16px;"><?php if($i>31){$i=1; } echo  $r[$i++]; ?></span><input size="15" type="text" /></td>
	<td width="20%"><span style="width:10px; font-size:16px;"><?php if($i>31){$i=1; } echo  $r[$i++]; ?></span><input type="text" size="15" /></td>
	</tr>
	<?php
	}
?>

</table>
<form name="form1" action="run.php">
<div align="center" style="padding-left:50px" >
<a href="prect30.php"><h2><font color="#FFFFFF">Once Again</h2></a> | 
<a href="prect30.php?r=0"><h2><font color="#FFFFFF">On Sequence</h2></a>
<font size="+4">rajesh</font></div>
</center>
</form>

</body>
</html>