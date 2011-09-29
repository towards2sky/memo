<?php 

$months = array('1'=>'A','B','C','D','E','F','G');
$weeks= array('1'=>'Monday','2'=>'Tuesday','3'=>'Wednesday','4'=>'Thursday','5'=>'Friday','6'=>'Saturday','7'=>'Sunday');

$answer[1]= array('1'=>'1','2'=>'2','3'=>'3','4'=>'4','5'=>'5','6'=>'6','7'=>'7');

$answer[2]= array('1'=>'7','2'=>'1','3'=>'2','4'=>'3','5'=>'4','6'=>'5','7'=>'6');

$answer[3]= array('1'=>'6','2'=>'7','3'=>'1','4'=>'2','5'=>'3','6'=>'4','7'=>'5');

$answer[4]= array('1'=>'5','2'=>'6','3'=>'7','4'=>'1','5'=>'2','6'=>'3','7'=>'4');

$answer[5]= array('1'=>'4','2'=>'5','3'=>'6','4'=>'7','5'=>'1','6'=>'2','7'=>'3');

$answer[6]= array('1'=>'3','2'=>'4','3'=>'5','4'=>'6','5'=>'7','6'=>'1','7'=>'2');

$answer[7]= array('1'=>'2','2'=>'3','3'=>'4','4'=>'5','5'=>'6','6'=>'7','7'=>'1');


if(isset($_POST['lavel']) and $_POST['lavel']!=0){
$label=($_POST['lavel']*3);
}else{
$label=3;
}
  //  echo $_POST['lavel'];
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Memory</title>
<script type="text/javascript" language="javascript" >
function checkanswer(){
var AnsIds = document.getElementById('asnwerIds').value;
//alert(AnsIds);
var AnsIdsInarray=AnsIds.split(",");
//alert(AnsIdsInarray.length)
	for(var i=0; i<AnsIdsInarray.length; i++){
	var input = document.getElementById(AnsIdsInarray[i]).value;
	var answer = document.getElementById('a'+AnsIdsInarray[i]).value;
		//alert(input.trim()+'=='+answer.trim());
		if(input.trim()==answer.trim()){ 
		document.getElementById(AnsIdsInarray[i]).style.background='#009900';
		}else{
		document.getElementById(AnsIdsInarray[i]).style.background='#FF0000';
		}
	}

}
String.prototype.trim = function() {
a = this.replace(/^\s+/, '');
return a.replace(/\s+$/, '');
};

</script>
</head>
<body bgcolor="#053650">
<table align="center" width="95%" cellspacing="10" style="font-family:'Times New Roman', Times, serif">
<tr>
	<td height="40" align="right" colspan="7">
	<a style="color:#FFFFFF; text-decoration:none" href="index.php" >BACK TO HOME</a>
	</td>
</tr>

<tr>
<td height="40" style="font-size:14px;" colspan="5"></td>
</tr>
<form name="calenderprect" method="post" >
<tr>
<td height="40" style="font-size:14px;" colspan="5">
	<select name="lavel" style="width:100px;" onChange="this.form.submit();" >
	<option value="1">LAVEL-1</option>
	<?php for($x=2;$x<15;$x++){ 
	$select = '';
	if($x==$_POST['lavel']){$select='selected="selected"';}
	echo "<option value=".($x)." $select >LAVEL-".($x)."</option>";	
	}?>
	</select>
</td>
</tr>
</form>


<tr>
<td width="20%" style="color:#FFFFFF; font-size:18px; font-weight:800">Month Tag</td><td width="80%"  style="color:#FFFFFF; font-size:18px; font-weight:800;"  align="center">Start date of the Day</td>
</tr>

<?php 
$xt=0;
for($i=0;$i<$label;$i++){ ?>
<tr>
<td width="100%" align="left" colspan="2" style="padding-top:10px; ">
<table align="left" width="100%" cellpadding="4">
<tr>
<td style="color:#FFFFFF; font-size:20px" align="left"><?php 
$m=array_rand($months);
echo $months[$m];?><td>
<?php 
for($j=1;$j<7;$j++){ ++$xt; ?>
<td  align="right" width="90px"><strong style="font-size:17px;"><?php 
$w=array_rand($weeks);
echo $weeks[$w];?></strong></td>
<td align="center" valign="middle" >
<input id="<?php echo trim($m.$w.$xt); ?>" type="text" size="5" maxlength="1" value="" />
<input type="hidden" id="a<?php echo trim($m.$w.$xt);?>" value="<?php echo $answer[$m][$w]; ?>" />
</td>
<?php 
$ansIds[]=trim($m.$w.$xt);
}?>
</tr>
</table>
</td>
</tr>
<?php  } ?>
<tr><td colspan="2" align="center" style="padding-top:20px;"><input type="button" name="check" value="Check" onClick="javascript: checkanswer();" />
<input type="hidden" id="asnwerIds" value="<?php echo implode(',',$ansIds); ?>" />
</td></tr>
</table>
</html>