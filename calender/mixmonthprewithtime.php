<?php 
$yearTag=array('B','C','D','E','F','G');
$months=array('7'=>'COW','1'=>'DEW','2'=>'NEO','3'=>'MEW','4'=>'ROW','5'=>'OIL','6'=>'SHE');

//$answer['A']= array('0'=>'CASE','T','3'=>'E','4'=>'A','5'=>'C','6'=>'F','7'=>'A','8'=>'D','9'=>'G','10'=>'B','11'=>'E','12'=>'G');

$answer['B']= array('1'=>'TIN','HEART','MAYAR','RAIL','LEECH','CHOLK','COT');
$answer['C']= array('1'=>'TOMB','CHAIR','EMAIL','ROTCH','LAG','CHAT','COIN');
$answer['D']= array('1'=>'TYRE','HOOK','MATCH','ROCK','LAD','CHAIN','CAM');
$answer['E']= array('1'=>'TOWEL','HOCKY','MUG','ROAD','LANE','CHUM','CAR');
$answer['F']= array('1'=>'TOUCH','LAMP','MAT','RAIN','LAMA','CHERRY','COIL');
$answer['G']= array('1'=>'TACK','KUTUB','MOON','RAM','LORRY','JAIL','CATCH');


if(isset($_POST['settime'])){
$t=trim($_POST['settime']);
}else{
$t=5;
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
	var nextLavel=1;
	for(var i=0; i<AnsIdsInarray.length; i++){
	var input = document.getElementById(AnsIdsInarray[i]).value;
	var answer = document.getElementById('a'+AnsIdsInarray[i]).value;

		if(input.trim()==answer.trim()){ 
		document.getElementById(AnsIdsInarray[i]).style.background='#009900';
		}else{
		nextLavel=0;
		document.getElementById(AnsIdsInarray[i]).style.background='#FF0000';
		}
		if(nextLavel){
				//document.forms['calenderprect'].submit();
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

function submitform(){
document.forms['calenderprect'].submit();
}
</script>


<script type='text/javascript'>

/*
For this script
Visit http://java-scripts.net 
or http://wsabstract.com
*/

var ms = 0;
var state = 0;
var c=1;
var aryid=0;
var disabletime=<?php echo $t*1000; ?>;
function startstop() {
if (state == 0) {
state = 1;
then = new Date();
then.setTime(then.getTime() - ms);
} else {
state = 0;
now = new Date();
ms = now.getTime() - then.getTime();
document.stpw.time.value = ms;
   }
}

function swreset() {
state = 0;
ms = 0;
document.stpw.time.value = ms;
}

function display() {
setTimeout("display();", 50);
if (state == 1)  {now = new Date();
ms = now.getTime() - then.getTime();
if(ms >(disabletime*c)){

var AnsIdsnew = document.getElementById('asnwerIds').value;
//alert(AnsIds);
var AnsIdsInarraynew=AnsIdsnew.split(",");

var cyrid=AnsIdsInarraynew[aryid++];	
document.getElementById(cyrid).style.background='#053650';
document.getElementById(cyrid).disabled=true;

//var state = 0;
//startstop();
//alert(c);
c=c+1;
//ms=1;

/////////////////////////
/*
var AnsIds = document.getElementById('asnwerIds').value;
//alert(AnsIds);
var AnsIdsInarray=AnsIds.split(",");
//alert(AnsIdsInarray.length)
	var nextLavel=1;
	for(var i=0; i<AnsIdsInarray.length; i++){
	var input = document.getElementById(AnsIdsInarray[i]).value;
	var answer = document.getElementById('a'+AnsIdsInarray[i]).value;

		if(input.trim()==answer.trim()){ 
		document.getElementById(AnsIdsInarray[i]).style.background='#009900';
		}else{
		nextLavel=0;
		document.getElementById(AnsIdsInarray[i]).style.background='#FF0000';
		}
		if(nextLavel){
				//document.forms['calenderprect'].submit();
		}	
	}
*/
/////////////////////


}
document.stpw.time.value = ms;
   }
}

window.onload=display

</script>

</head>
<body bgcolor="#053650">

<CENTER>
<FORM NAME="stpw" method="post" >
Time:
<select name="settime" style="width:50px;" onChange="this.form.submit();" >
	
	<?php for($i=1;$i<11;$i++){ 
	$selected='';
	if($t==$i){
	$selected='selected="selected"';
	}
	?>
	<option value="<?php echo $i;?>" <?php echo $selected; ?> ><?php echo $i;?></option>
	<?php } ?>
	</select>

<INPUT TYPE="BUTTON" Name="ssbutton" VALUE="Start/Stop" onClick="startstop()">
</FORM>
</CENTER>
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
</td>
</tr>
</form>
<tr>
<td width="20%" style="color:#FFFFFF; font-size:18px; font-weight:800; padding-bottom:20px;">All Year Tag</td><td width="80%" style="color:#FFFFFF; font-size:18px; font-weight:800;padding-bottom:20px;"  align="center">Start Month of the year</td>
</tr>

<?php 
$xt=0;
for($i=0;$i<6;$i++){
$show=$months;
 ?>
<tr>
<td width="100%" align="left" colspan="2" style="padding-top:10px; ">
<table align="left" width="100%">
<tr>
<?php 
for($k=1;$k<7;$k++){ ++$xt; 
$show=$months;
$y=array_rand($yearTag);
?>
<td  align="right" width="90px">
<?php 
//$m++;
$m=array_rand($show);
//echo $months[$m];?><span style="color:#FFFFFF; font-weight:bold;"><?php if(strlen($m)==1){echo '';} echo $yearTag[$y].'=>'.$months[$m];?></span>
<span style="color:#999999"><?php //echo $k,$m;?></span>
</td>
<td align="center" valign="middle" >
<input id="<?php echo trim($y.$m.$xt); ?>" type="text" size="8" value="<?php //echo $answer[trim($yearTag[$y])][$m]; ?>" maxlength="10" onKeyUp="strUpperCase(this);"  />
<input type="hidden" id="a<?php echo trim($y.$m.$xt); ?>" value="<?php echo $answer[trim($yearTag[$y])][$m]; ?>" />
</td>
<?php 
$ansIds[]=trim($y.$m.$xt);
unset($show[$m]);
}?>
</tr>
</table>
</td>
</tr>
<?php 
unset($yearTag[$y]);
 } ?>
<tr><td colspan="2" align="center" style="padding-top:20px;">
<input type="button" name="check" value="Check" onClick="javascript: checkanswer();" />
<input type="button" name="Again" value="Once Again" onClick="javascript: submitform();"/>
&nbsp;&nbsp;&nbsp;&nbsp;<a style="color:#FFFFFF; text-decoration:none" href="cenprewithtime.php" >NEXT</a>
<input type="hidden" id="asnwerIds" value="<?php echo implode(',',$ansIds); ?>" />
</td></tr>
</table>
</html>