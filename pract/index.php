<?php 

if(isset($_POST['maxtime'])){
$maxtime = $_POST['maxtime'];
}else{
$maxtime = 120;
}
if(isset($_POST['num'])){
$num = $_POST['num'];
}else{
$num = 4;
}
$js = (5*$num);
?>
<html>
<head><center>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Memory</title> 
<b><font color="#FFFFFF" size="+3">LEVEL :1</font></b><br/>
<a href="#" onClick="display();" ><input type="button" value="Start Now"></a> <br/><br/>
<form name="counter">
<input type="text" size="8" name="d2">
</form>
</head>
<body bgcolor="#0033FF">

<center>

<form name="form1" action="index.php" method="post">


<table width="80%" cellspacing="15" cellpadding="15">
<tr><td colspan="5" align="center" style="font-size:24px; color:#FFFFFF;"><?php echo chr(rand(65,90)); ?></td></tr> 
<?php 
$i=1;
$x=1;
for($j=1;$j<= $num; $j++)
	{
?>
<tr >
<td><div id="<?php echo $i++;?>" style="font-size:16px;"> <?php echo  mt_rand(1, 100); ?></div><div ><input type="text" /></div></td>
<td><div id="<?php echo $i++;?>" style="font-size:16px;"> <?php echo  mt_rand(1, 100); ?></div><div ><input type="text" /></div></td>
<td><div id="<?php echo $i++;?>" style="font-size:16px;"> <?php echo  mt_rand(1, 100); ?></div><div ><input type="text" /></div></td>
<td><div id="<?php echo $i++;?>" style="font-size:16px;"> <?php echo  mt_rand(1, 100); ?></div><div ><input type="text"  /></div></td>
<td><div id="<?php echo $i++;?>" style="font-size:16px;"> <?php echo  mt_rand(1, 100); ?></div><div ><input type="text" /></div></td>
</tr>

<?php } ?>
</table>
<table width="100%">
<tr width="100%" ><td colspan="3" align="center"><a href="index.php"><h2><font color="#FFFFFF">Once Again</h2></a></td></tr>
<tr>
<td align="left" width="30%" style="padding-left:150px;"><font size="+4" ><a href="#"><h2><font color="#FFFFFF">Prev Level</h2></a></font></td>
<td align="center" width="40%">
5x<input type="text" id="num" name="num" value="<?php echo $num; ?>" />
<input type="text" id="maxtime" name="maxtime" value="<?php echo $maxtime; ?>" />
<input type="submit" value="set" ><a href="#" onClick="check();" ><input type="button" value="check"></a>
</td>
<td align="right" width="30%" style="padding-right:100px;"><a href="#"><font size="+4"><h2><font color="#FFFFFF">Next Level</h2></a></font></td>

</tr></table>
</form>
</body>
</html>
<script> 
<!-- 
// 
 var milisec=0 
 var seconds= document.getElementById('maxtime').value; 
 //document.counter.d2.value = '30';
//alert(document.getElementById('maxtime').value);
function display(){ 
 if (milisec<=0){ 
    milisec=9 
    seconds-=1 
 } 
 if (seconds<=-1){ 
    milisec=0 
    seconds+=1 
 } 
 else 
    milisec-=1 
    document.counter.d2.value=seconds+"."+milisec 
    setTimeout("display()",100) 
	if(seconds == 0){
	
		for(var x =1; x<=<?php  echo $js; ?>; x++){
		document.getElementById(x).style.display='none';
		//var s = "t"+x;
		//document.getElementById("t"+x).style.display='block';
		//alert("t"+x);
		seconds = -1;
		}
	}
	
	
} 
 //display() ;
function check(){
 for(var x =1; x<=<?php  echo $js; ?>; x++){
		document.getElementById(x).style.display='block';
		//var s = "t"+x;
		//document.getElementById("t"+x).style.display='block';
		//alert("t"+x);
		}
 }
</script>