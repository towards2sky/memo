<?php
$link = mysql_connect('localhost', 'root', '');
if (!$link) {
    die('Not connected : ' . mysql_error());
}

// make foo the current db
$db_selected = mysql_select_db('remb', $link);
if ($db_selected) {
	if(isset($_POST['xyz']) and $_POST['xyz'] !=''){
    $sql = "INSERT INTO mydata SET helptag ='".$_POST['abc']."' , numbers = '".$_POST['xyz']."' ";
	mysql_query($sql);
	$id = mysql_insert_id(); 
	header("location:forever.php?id=$id");
	}
}else{ 
die ('Can\'t use remb : ' . mysql_error());
}


for($x=1;$x<=100;$x++){
	$r[] =$x;
}
for($x=1;$x<=100;$x++){
	$r[] =$x;
}
shuffle($r);
if(isset($_GET['l']) and $_GET['l']!=''){
$l=$_GET['l'];
}else{
$l=1;
}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Memory</title>
</head>
<body bgcolor="#0033FF">
<form name="form1" action="index.php" method="post">
<table align="center" width="100%">
<tr><td align="center" width="100%" style="color:#FFFFFF; font-size:20px;"><h2>Lavel: <?php echo $l; ?> </h2><br /><br /></td></tr>
<tr><td align="center" style="font-size:24px; color:#FFFFFF;"><?php //if(isset($_POST['abc'])){echo $_POST['abc']; }else{ echo $help = chr(rand(65,90)); } ?></br /></td></tr> 
<?php 
$saperater = '&nbsp;&nbsp;';
$word=(15+($l*5));
?>
<tr>
<td style="color:#FFFFFF; font-size:20px;" align="center">
<?php 
for($i=0;$i<$word;$i++){
echo $r[$i].$saperater;
}
 ?>
</td>
</tr>

</table>
<div align="center" style="padding-left:50px" >
<a href="wordlink.php?l=<?php echo ++$l;?>"><h2><font color="#FFFFFF">Next Lavel</h2></a>
<a href="wordlink.php?l=1"><h2><font color="#FFFFFF">Reset Lavel</h2></a>
<font size="+4">rajesh</font><br /></div>
</center>
<input type="hidden" value="<?php echo implode(',',$r); ?>" name="xyz" >
<input type="hidden" value="<?php echo $help; ?>" name="abc" >

</form>

</body>
</html>