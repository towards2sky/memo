<?php 
$yearTag = array('1'=>'L-1','L-2','L-3','L-4','L-5','L-6','L-7');
$months= array('1'=>'JAN','2'=>'FAB','3'=>'MAR','4'=>'APR','5'=>'MAY','6'=>'JUNE','7'=>'JULY','8'=>'AUG','9'=>'SEPT','10'=>'OCT','11'=>'NOV','12'=>'DEC	');

$answer[1]= array('1'=>'B','2'=>'E','3'=>'F','4'=>'B','5'=>'D','6'=>'G','7'=>'B','8'=>'E','9'=>'A','10'=>'C','11'=>'F','12'=>'A');

$answer[2]= array('1'=>'G','2'=>'C','3'=>'D','4'=>'G','5'=>'B','6'=>'E','7'=>'G','8'=>'C','9'=>'F','10'=>'A','11'=>'D','12'=>'F');

$answer[3]= array('1'=>'E','2'=>'A','3'=>'B','4'=>'E','5'=>'G','6'=>'C','7'=>'E','8'=>'A','9'=>'D','10'=>'F','11'=>'B','12'=>'D');

$answer[4]= array('1'=>'C','2'=>'F','3'=>'G','4'=>'C','5'=>'E','6'=>'A','7'=>'C','8'=>'F','9'=>'B','10'=>'D','11'=>'G','12'=>'B');

$answer[5]= array('1'=>'A','2'=>'D','3'=>'E','4'=>'A','5'=>'C','6'=>'F','7'=>'A','8'=>'D','9'=>'G','10'=>'B','11'=>'E','12'=>'G');

$answer[6]= array('1'=>'F','2'=>'B','3'=>'C','4'=>'F','5'=>'A','6'=>'D','7'=>'F','8'=>'B','9'=>'E','10'=>'G','11'=>'C','12'=>'E');

$answer[7]= array('1'=>'D','2'=>'G','3'=>'A','4'=>'D','5'=>'F','6'=>'B','7'=>'D','8'=>'G','9'=>'C','10'=>'E','11'=>'A','12'=>'C');

$str1='';
//echo '<pre>';
//print_r($answer[7][4]);

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

function capitals(that) { alert(that);
var Cap = false;
var Max = that.value.length;
if (Max > 1) {
for (var i=0; i<Max; i++) {
var char = that.value.charAt(i);
if (char >= "A" && char <= "Z") {
if (Cap) {
if (i == Max-1) {
alert("Two consecutive capital letters!");
return;
}
}
Cap = true;
} else {
Cap = false;
}
}
}
}
function strUpperCase(obj){
var str=obj.value;
obj.value= str.toUpperCase();
}
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
<td width="20%" style="color:#FFFFFF; font-size:18px; font-weight:800; padding-bottom:20px;">Leap Year Tag</td><td width="80%" style="color:#FFFFFF; font-size:18px; font-weight:800;padding-bottom:20px;"  align="center">Start Month of the year</td>
</tr>

<?php 
$xt=0;
for($i=0;$i<$label;$i++){ ?>
<tr>
<td width="100%" align="left" colspan="2" style="padding-top:10px; ">
<table align="left" width="100%">
<tr>
<td style="color:#FFFFFF; font-size:20px" align="left"><?php 
$y=array_rand($yearTag);
echo $yearTag[$y];?><td>
<?php 
for($j=1;$j<7;$j++){ ++$xt; ?>
<td  align="right" width="90px"><?php 
$m=array_rand($months);
echo $months[$m];?><span style="color:#FFFFFF; font-weight:bold;"><?php echo $m;?></span></td>
<td align="center" valign="middle" ><input id="<?php echo trim($y.$m.$xt); ?>" type="text" size="5" value="" maxlength="1" onkeyup="strUpperCase(this);" />
<input type="hidden" id="a<?php echo trim($y.$m.$xt); ?>" value="<?php echo $answer[$y][$m]; ?>" S/>
</td>
<?php 
$ansIds[]=trim($y.$m.$xt);
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