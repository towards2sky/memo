<?php
$link = mysql_connect('localhost', 'root', '');
if (!$link) {
    die('Not connected : ' . mysql_error());
}

// make foo the current db
$db_selected = mysql_select_db('remb', $link);
if (!$db_selected) {
    die ('Can\'t use remb : ' . mysql_error());
}
if(isset($_GET['level'])){
$level=$_GET['level'];
}else{
$level=2;
}
for($x=1;$x<=100;$x++){
	$r[] =$x;
}
shuffle($r);
$i=0;
$saperater='&nbsp;&nbsp;';

$t=5+(5*($level-1));
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Memory</title>
</head>
<body bgcolor="#0033FF">
<form name="form1" action="run.php">
<table align="center" width="100%">
<tr><td align="center" width="100%" style="color:#FFFFFF; font-size:20px;"><h2>Total Number: 50</h2><br /><br /></td></tr>
<tr><td align="center" style="font-size:24px; color:#FFFFFF;">I can do this<br /><br /></td></tr> 

<?php 
//for($x=1;$x<=$t;$j++){
$v=$t/25;
$tr=explode('.',$v);
$l=0;
//for($k=0;$k<=$tr[0];$k++){
?>

<tr>
<td style="color:#FFFFFF; font-size:20px;" align="center">
<?php 
for($j=1;$j<=26;$j++){
$rs=$i++;
echo $r[$rs].$saperater; 
//unset($r[$rs]);
}

?><br/>
<br/>
</td>
</tr>
<tr>
<td style="color:#FFFFFF; font-size:20px;" align="center">
<?php 
for($j=1;$j<=26;$j++){
$rs=$i++;
echo $r[$rs].$saperater; 
//unset($r[$rs]);
}

?>

</td>
</tr>
<?php //} ?>
</table>
<div align="center" style="padding-left:50px" >
<a href="aim.php"><h2><font color="#FFFFFF">Again</h2></a>
</div>
</center>
</form>

</body>
</html>
