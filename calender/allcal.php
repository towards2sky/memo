<?php 
$yearTag = array('1'=>'N-1','N-2','N-3','N-4','N-5','N-6','N-7','L-1','L-2','L-3','L-4','L-5','L-6','L-7');
$months= array('1'=>'JAN','2'=>'FAB','3'=>'MAR','4'=>'APR','5'=>'MAY','6'=>'JUNE','7'=>'JULY','8'=>'AUG','9'=>'SEPT','10'=>'OCT','11'=>'NOV','12'=>'DEC');

$answer[1]= array('1'=>'B','2'=>'E','3'=>'E','4'=>'A','5'=>'C','6'=>'F','7'=>'A','8'=>'D','9'=>'G','10'=>'B','11'=>'E','12'=>'G');

$answer[2]= array('1'=>'C','2'=>'F','3'=>'F','4'=>'B','5'=>'D','6'=>'G','7'=>'B','8'=>'E','9'=>'A','10'=>'C','11'=>'F','12'=>'A');

$answer[3]= array('1'=>'D','2'=>'G','3'=>'G','4'=>'C','5'=>'E','6'=>'A','7'=>'C','8'=>'F','9'=>'B','10'=>'D','11'=>'G','12'=>'B');

$answer[4]= array('1'=>'G','2'=>'C','3'=>'C','4'=>'F','5'=>'A','6'=>'D','7'=>'F','8'=>'B','9'=>'E','10'=>'G','11'=>'C','12'=>'E');

$answer[5]= array('1'=>'A','2'=>'D','3'=>'D','4'=>'G','5'=>'B','6'=>'E','7'=>'G','8'=>'C','9'=>'F','10'=>'A','11'=>'D','12'=>'F');

$answer[6]= array('1'=>'E','2'=>'A','3'=>'A','4'=>'D','5'=>'F','6'=>'B','7'=>'D','8'=>'G','9'=>'C','10'=>'E','11'=>'A','12'=>'C');

$answer[7]= array('1'=>'F','2'=>'B','3'=>'B','4'=>'E','5'=>'G','6'=>'C','7'=>'E','8'=>'A','9'=>'D','10'=>'F','11'=>'B','12'=>'D');
//=============================================================
$answer[8]= array('1'=>'B','2'=>'E','3'=>'F','4'=>'B','5'=>'D','6'=>'G','7'=>'B','8'=>'E','9'=>'A','10'=>'C','11'=>'F','12'=>'A');

$answer[9]= array('1'=>'G','2'=>'C','3'=>'D','4'=>'G','5'=>'B','6'=>'E','7'=>'G','8'=>'C','9'=>'F','10'=>'A','11'=>'D','12'=>'F');

$answer[10]= array('1'=>'E','2'=>'A','3'=>'B','4'=>'E','5'=>'G','6'=>'C','7'=>'E','8'=>'A','9'=>'D','10'=>'F','11'=>'B','12'=>'D');

$answer[11]= array('1'=>'C','2'=>'F','3'=>'G','4'=>'C','5'=>'E','6'=>'A','7'=>'C','8'=>'F','9'=>'B','10'=>'D','11'=>'G','12'=>'B');

$answer[12]= array('1'=>'A','2'=>'D','3'=>'E','4'=>'A','5'=>'C','6'=>'F','7'=>'A','8'=>'D','9'=>'G','10'=>'B','11'=>'E','12'=>'G');

$answer[13]= array('1'=>'F','2'=>'B','3'=>'C','4'=>'F','5'=>'A','6'=>'D','7'=>'F','8'=>'B','9'=>'E','10'=>'G','11'=>'C','12'=>'E');

$answer[14]= array('1'=>'D','2'=>'G','3'=>'A','4'=>'D','5'=>'F','6'=>'B','7'=>'D','8'=>'G','9'=>'C','10'=>'E','11'=>'A','12'=>'C');


$selectR='';
$selectN='';
$selectL='';
$selectD='';
$selectA='';
if(isset($_POST['lavel']) and $_POST['lavel']!=''){ 
	if(trim($_POST['lavel'])=='N'){
	$selectN='selected="selected"';
	$label=7;
	$l='N';
	for($i=8;$i<=14;$i++){
	unset($yearTag[$i]);
		}	
	
	}else if($_POST['lavel']=='L'){
	$selectL='selected="selected"';
	$label=7;
	$l='L';
	for($i=1;$i<=7;$i++){ 
	unset($yearTag[$i]);
		}	
	
	}else if($_POST['lavel']=='A'){
	$selectA='selected="selected"';
	$l='A';
	$label=14;
	}
	else if($_POST['lavel']=='DN'){
	$selectDN='selected="selected"';
	$label=7;
	$l='L';
	for($i=8;$i<=14;$i++){
	unset($yearTag[$i]);
		}
	$months= array('3'=>'MAR','7'=>'JULY','10'=>'OCT','11'=>'NOV','12'=>'DEC');
		}	
		else if($_POST['lavel']=='DL'){
	$selectDL='selected="selected"';
	$label=7;
	$l='L';
	for($i=1;$i<=7;$i++){ 
	unset($yearTag[$i]);
		}
	$months= array('4'=>'APR','7'=>'JULY','8'=>'AUG','11'=>'NOV','12'=>'DEC');
		}else if($_POST['lavel']=='UN'){
	$selectUN='selected="selected"';
	$label=7;
	$l='L';
	for($i=8;$i<=14;$i++){
	unset($yearTag[$i]);
		}
	$x=array('3'=>'MAR','7'=>'JULY','10'=>'OCT','11'=>'NOV','12'=>'DEC');
	foreach($x as $k=>$v){
	unset($months[$k]);
	}
		}	
		else if($_POST['lavel']=='UL'){
	$selectUL='selected="selected"';
	$label=7;
	$l='L';
	for($i=1;$i<=7;$i++){ 
	unset($yearTag[$i]);
		}
	$x=array('4'=>'APR','7'=>'JULY','8'=>'AUG','11'=>'NOV','12'=>'DEC');
	foreach($x as $k=>$v){
	unset($months[$k]);
	}
		}
		else{
		$selectR='selected="selected"';
        $label=10;
		}	
}else{
$selectR='selected="selected"';
$label=10;
}

if(isset($_POST['settime'])){
$t=trim($_POST['settime']);
}else{
$t=4;
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
////document.stpw.time.value = ms;
   }
}

function swreset() {
state = 0;
ms = 0;
////document.stpw.time.value = ms;
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
////document.stpw.time.value = ms;
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
<input type='hidden' name="settime" value='<?php echo $t;?>' />
<tr>
<td height="40" style="font-size:14px;" colspan="5">
	<select name="lavel" style="width:200px;" onChange="this.form.submit();" >
	<option value="R" <?php echo $selectR; ?> >Randam 10</option>
	<?php 
	echo "<option value='L' $selectL >Leap year</option>";	
	echo "<option value='N' $selectN >Normal Year</option>";	
	echo "<option value='A' $selectA >All Mix</option>";
	echo "<option value='DL' $selectDL >Dup Leap Month</option>";	
	echo "<option value='DN' $selectDN >Dup NorN Month</option>";	
	echo "<option value='UL' $selectUL >Uni Leap Month</option>";	
	echo "<option value='UN' $selectUN >Uni NorN Month</option>";	
	?>
	</select>
</td>
</tr>
</form>
<tr>
<td width="20%" style="color:#FFFFFF; font-size:18px; font-weight:800; padding-bottom:20px;">All Year Tag</td><td width="80%" style="color:#FFFFFF; font-size:18px; font-weight:800;padding-bottom:20px;"  align="center">Start Month of the year</td>
</tr>
<tr>
<td width="100%" align="left" colspan="2" style="padding-top:10px; ">
<input id="abc" type="text" size="2" value="" maxlength="1" disabled />
<input type="hidden" id="aabc" value="" />
</td>
</tr>

<?php 
$xt=0;
for($i=0;$i<$label;$i++){
$show=$months;
 ?>
<tr>
<td width="100%" align="left" colspan="2" style="padding-top:10px; ">
<table align="left" width="100%">
<tr>
<td style="color:#FFFFFF; font-size:20px" align="left" width="60px"><?php 
$y=array_rand($yearTag);
echo $yearTag[$y];?><td>
<?php 
foreach($months as $mk){ ++$xt; ?>
<td  align="right" width="90px">
<?php 
$m=array_rand($show);
//echo $months[$m];?><span style="color:#FFFFFF; font-weight:bold;"><?php if(strlen($m)==1){echo '';} echo $m;?></span></td>
<td align="center" valign="middle" ><input id="<?php echo trim($y.$m.$xt); ?>" type="text" size="2" value="" maxlength="1" onKeyUp="strUpperCase(this);"  />
<input type="hidden" id="a<?php echo trim($y.$m.$xt); ?>" value="<?php echo $answer[$y][$m]; ?>" />
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
<input type="hidden" id="asnwerIds" value="abc,<?php echo implode(',',$ansIds); ?>" />
</td></tr>
</table>
</html>