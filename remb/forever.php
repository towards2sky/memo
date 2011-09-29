<?php
$link = mysql_connect('localhost', 'root', '');
if (!$link) {
    die('Not connected : ' . mysql_error());
}

// make foo the current db
$db_selected = mysql_select_db('remb', $link);
if ($db_selected) {
	if(isset($_GET['id']) and $_GET['id'] !=''){
    $sql = "SELECT * FROM mydata  WHERE id= ".$_GET['id']."";
	$get_rec = mysql_fetch_object(mysql_query($sql));	
	$r = explode(',',$get_rec->numbers);
	}
}else{ 
die ('Can\'t use remb : ' . mysql_error());
}
$i=0;

?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Memory</title>
</head>
<body bgcolor="#0033FF">
<form name="form1" action="index.php" method="post">
<table align="center" width="100%">
<tr><td align="center" width="100%" style="color:#FFFFFF; font-size:20px;"><h2>Total Number: 120 </h2><br /><br /></td></tr>
<tr><td align="center" style="font-size:24px; color:#FFFFFF;"><?php echo $get_rec->helptag; ?></br /></td></tr> 
<?php 

$saperater = '&nbsp;&nbsp;';

for($j=0;$j<4; $j++){

?>
<tr>
<td style="color:#FFFFFF; font-size:20px;" align="center"><?php echo $r[$i++].$saperater.$r[$i++].$saperater.$r[$i++].$saperater.$r[$i++].$saperater.$r[$i++].$saperater.$r[$i++].$saperater.$r[$i++].$saperater.$r[$i++].$saperater.$r[$i++].$saperater.$r[$i++].$saperater.$r[$i++].$saperater.$r[$i++].$saperater.$r[$i++].$saperater.$r[$i++].$saperater.$r[$i++].$saperater.$r[$i++].$saperater.$r[$i++].$saperater.$r[$i++].$saperater.$r[$i++].$saperater.$r[$i++].$saperater.$r[$i++].$saperater.$r[$i++].$saperater.$r[$i++].$saperater.$r[$i++].$saperater.$r[$i++].$saperater.$r[$i++].$saperater.$r[$i++].$saperater.$r[$i++].$saperater.$r[$i++].$saperater.$r[$i++].$saperater; ?>
</td>
</tr>
<?php  } ?>

</table>
<div align="center" style="padding-left:50px" >
<a href="index.php"><h2><font color="#FFFFFF">BACK</h2></a>
<font size="+4" color="#FFFFFF">rajesh</font><br /></div>
</center>
</form>

</body>
</html>