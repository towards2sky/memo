<?php 
include('connection.php');

if(isset($_POST['submit'])){
mysql_query("UPDATE tagyear SET flag='0'");

$upsql=mysql_query("UPDATE tagyear SET flag='1' WHERE id IN (".implode(',',$_POST['chk']).")");
//print_r($_POST['chk']);
}


$dropsql="SELECT * FROM tagyear WHERE flag='1'";
$query = mysql_query($dropsql);

while($obj=mysql_fetch_object($query))
	{
	$yearTag[$obj->id]=$obj->yearTag;
	$id[]=$obj->id;
	}
	
 $yearsql="SELECT * FROM yearvalue WHERE flag='1' AND tagyearId IN (".implode(',',$id).") AND year >= 1800 AND year < 1900 ";
$qyear = mysql_query($yearsql);

while($obj1=mysql_fetch_object($qyear))
	{
	$year[$obj1->year]=$obj1->tagyearId;
	}	
	
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
//		alert(input.trim()+'=='+answer.trim());
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
<?php 
$sql="SELECT * FROM tagyear";
$sqlquery = mysql_query($sql);

?>
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
<td colspan="2">
<table width="100%" cellspacing="6" >
<?php 
$x=1;
 while($objsql=mysql_fetch_object($sqlquery))
	{
	if($x==1)echo '<tr>';
	
	$chk='';
	if($objsql->flag){
	$chk='checked="checked"';
	}
	?>
<td height="40" style="font-size:14px;"><input type="checkbox" value="<?PHP echo $objsql->id?>" <?php echo $chk; ?> name="chk[]" >
<?php echo $objsql->yearTag;?>
</td>
<?php 
	if($x==7){
	echo '<tr/>';
	$x=0;	
	}
	$x++;
}  ?>
<tr>
<td><input type="submit" value="Update" name="submit" ></td>
<td>
<select id='$id'>
<option value='1800'>1800</option>
<option value='1900'>1900</option>
<option value='2000'>2000</option>
</select>
</td>
</tr>
</table>
</td>
</tr>
</form>


<tr>
<td width="20%" style="color:#FFFFFF; font-size:18px; font-weight:800; padding-bottom:20px;" colspan="2" align="center">CALENDER OF YEAR </td>
</tr>

<?php 
$xt=0;
for($i=0;$i<6;$i++){ ?>
<tr>
<td width="100%" align="left" colspan="2" style="padding-top:10px; ">
<table align="left" width="100%">
<tr>
<td style="color:#FFFFFF; font-size:20px" align="left" width="40px"><td>
<?php for($j=1;$j<7;$j++){ ++$xt; ?>
<td  align="right" width="90px">
<?php $m=array_rand($year); ?><span style="color:#FFFFFF; font-weight:bold;"><?php echo $m;?></span>
</td>
<td align="center" valign="middle" ><input id="<?php  echo $m.$i.$j;?>" type="text" size="5" value="<?php //echo $yearTag[$year[$m]]; ?>" maxlength="7" onKeyUp="strUpperCase(this);"  />
<input type="hidden" id="a<?php echo $m.$i.$j; ?>" value="<?php echo $yearTag[$year[$m]] ?>" />
</td>
<?php 
$ansIds[]=$m.$i.$j;
}?>
</tr>
</table>
</td>
</tr>
<?php  } ?>
<tr><td colspan="2" align="center" style="padding-top:20px;">
<input type="button" name="check" value="Check" onClick="javascript: checkanswer();" />
<input type="hidden" id="asnwerIds" value="<?php echo implode(',',$ansIds); ?>" />
</td></tr>
</table>
</html>