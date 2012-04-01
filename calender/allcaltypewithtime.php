<?php 
session_start();

if(isset($_SESSION['previous_values']) && count($_SESSION['previous_values']) >100){unset($_SESSION['previous_values']);}

if(isset($_POST['lavel']) && $_POST['lavel']!='A' && $_POST['lavel']!='R'){	unset($_SESSION['previous_values']);	}

$yearTag = array('1'=>'N-1','N-2','N-3','N-4','N-5','N-6','N-7','L-1','L-2','L-3','L-4','L-5','L-6','L-7');
$months= array('1'=>'JAN','2'=>'FEB','3'=>'MAR','4'=>'APR','5'=>'MAY','6'=>'JUNE','7'=>'JULY','8'=>'AUG','9'=>'SEPT','10'=>'OCT','11'=>'NOV','12'=>'DEC');

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
$t=5;
}

$select_seq=NULL;
$select_ren=NULL;

if(isset($_POST['displaytype']) AND trim($_POST['displaytype'])=='seq'){
$select_seq='selected="selected"';
}else{
$select_ren='selected="selected"';
}


//for loop
if(isset($_POST['loop'])){
$loop=$_POST['loop'];
}else{
$loop=1;
}

if(isset($_POST['curloop']) && $_POST['loop']>1 && $_POST['curloop']<$_POST['loop']){
$curloop=$_POST['curloop']+1;
}else{
$curloop=1;

}

if( isset($_POST['curloop']) && ($_POST['curloop']+1)==$_POST['loop']){
$loop=1;
$curloop=1;
}

if($loop>1){$addradiobuttom=4;}else{$addradiobuttom=0;}
$totalrdiobutton=(5+$addradiobuttom);
//


?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Memory</title>
<style type="text/css">
		div.answer {
		width: 20px;
		padding: 2px; margin: 2px; z-index: 100;
		color: #9D9E99; 
		font: 10px Verdana,bold,sans-serif; text-align: center;
		}
</style>
<script type="text/javascript" language="javascript" >

function htmldocumentredy(){
display();
<?php if($curloop<$loop){?>
delayBeforeStart();
<?php } ?>

}

function checkanswer(){
state=0;
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
		//document.getElementById('d'+AnsIdsInarray[i]).style.display='none';
		document.getElementById(AnsIdsInarray[i]).disabled=true;
		}else{
		nextLavel=0;
		document.getElementById(AnsIdsInarray[i]).style.background='#FF0000';
		document.getElementById(AnsIdsInarray[i]).disabled=false;
		//document.getElementById('d'+AnsIdsInarray[i]).style.display='block';
		}
		<?php if($curloop!=$loop){ ?>
		if(i==(AnsIdsInarray.length-1)){
		setTimeout("submitform('calenderprect');", 5000);
		}	
		<?php } ?>	
	}

}

function submitform(fname){
	document.forms[fname].submit();
}


function showAnser(){
state=0;
var AnsIds = document.getElementById('asnwerIds').value;
//alert(AnsIds);
var AnsIdsInarray=AnsIds.split(",");
//alert(AnsIdsInarray.length)
	var nextLavel=1;
	for(var i=0; i<AnsIdsInarray.length; i++){
	var input = document.getElementById(AnsIdsInarray[i]).value;
	var answer = document.getElementById('a'+AnsIdsInarray[i]).value;

		if(input.trim()==answer.trim()){ 
		//document.getElementById(AnsIdsInarray[i]).style.background='#009900';
		document.getElementById('d'+AnsIdsInarray[i]).style.display='none';
		
		}else{
		nextLavel=0;
		//document.getElementById(AnsIdsInarray[i]).value=answer;
		//document.getElementById(AnsIdsInarray[i]).style.background='#FF0000';
		document.getElementById('d'+AnsIdsInarray[i]).style.display='block';
		document.getElementById(AnsIdsInarray[i]).disabled=true;
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
var radioid=1;
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
var AnsIdsInarraynew=AnsIdsnew.split(",");

var cyrid=AnsIdsInarraynew[aryid++];
document.getElementById(cyrid).style.background='#053650';
document.getElementById(cyrid).disabled=true;

if(aryid==AnsIdsInarraynew.length){
setTimeout("checkanswer();", 2000);
}

c=c+1;
//ms=1;

}
document.stpw.time.value = ms;
   }
}

window.onload=htmldocumentredy;

function delayBeforeStart(){

	if(radioid<=<?php echo $totalrdiobutton;?>){
	document.getElementById('r'+radioid).checked = true;
	radioid++;
	setTimeout("delayBeforeStart();", 900);
	}else{
	startstop();
	}
}

</script>
</head>
<body bgcolor="#053650">
<CENTER>
<FORM NAME="stpw" method="post" >
Loop:
<select name="loop" style="width:50px;" onChange="this.form.submit();" >
	
	<?php for($i=1;$i<11;$i++){ 
	$selected='';
	if($loop==$i){
	$selected='selected="selected"';
	}
	?>
	<option value="<?php echo $i;?>" <?php echo $selected; ?> ><?php echo ($i-1);?></option>
	<?php } ?>
	</select>
	
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
<input type='hidden' name='lavel' value='<?php echo $_POST['lavel']; ?>' />
<INPUT TYPE="BUTTON" Name="ssbutton" VALUE="Start/Stop" onClick="delayBeforeStart()">
<input type='hidden' name='displaytype' value='<?php echo $_POST['displaytype']; ?>' />
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
<input type='hidden' name='settime' value='<?php echo $t; ?>' />
<input type='hidden' name='curloop' value='<?php echo $curloop; ?>' />
<input type='hidden' name='loop' value='<?php echo $loop; ?>' />

<select name="displaytype" style="width:100px;" onChange="this.form.submit();" >
	<?php 
	echo "<option value='ren' $select_ren >Randam</option>";	
	echo "<option value='seq' $select_seq >Sequence</option>";	
	?>
	</select>
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
<?php if($loop>1){ ?>
<tr>
<td width="100%" style="color:#FFFFFF; font-size:25px; font-weight:800;padding-bottom:20px;"  align="center">Loop left: <?php echo ($loop-$curloop-1); ?></td>
</tr>
<?php } ?>

<tr>
<td width="80%" style="color:#FFFFFF; font-size:18px; font-weight:800; padding-bottom:10px;padding-left:20px;">
<?php for($r=1;$r<=$totalrdiobutton;$r++){?> <input type="radio" id="r<?php echo $r; ?>"/> <?php } ?>
</td>
<td width="20%" style="color:#FFFFFF; font-size:18px; font-weight:800;padding-bottom:20px;"  align="center"></td>
</tr>

<?php 
//echo '<pre>';
//print_r($_SESSION);
//echo '</pre>';
$xt=0;
$show=$months;
$allreadyincluded=array();
if(isset($_SESSION['previous_values'])){$allreadyincluded=$_SESSION['previous_values'];}
echo '<pre>';
//print_r($_SESSION['previous_values']);
$j=0;
foreach($yearTag as $yk=>$yobj){
	foreach($months as $mk=>$mobj){
		$q_nas=$answer[$yk][$mk];
		$allpossiblevalue[$j]['q']=$yobj.'=>'.$mobj;
		$allpossiblevalue[$j]['a']=$q_nas;
		$j++;
	}
}
shuffle($allpossiblevalue);
//print_r($allpossiblevalue);
//exit;
//echo '</pre>';
for($i=0;$i<$label;$i++){ //$show=$months;
?>
<tr>
<td width="100%" align="left" colspan="2" style="padding-top:10px; ">
<table align="left" width="100%">
<tr>

<?php 
if(isset($_POST['lavel'])){$lvalue=$_POST['lavel'];}else{$lvalue='';}
$NotforuniqueValue=array('DL','DN','UL','UN');
if($select_seq){$y=array_rand($yearTag); $show=$months;}

for($k=1;$k<9;$k++){ ++$xt; 

if(count($show)<1){ $show=$months; }

if(!$select_seq){$y=array_rand($yearTag);}

$key=array_rand($allpossiblevalue);

$value=$allpossiblevalue[$key]['q'];
$answer=$allpossiblevalue[$key]['a'];

if(!in_array($lvalue,$NotforuniqueValue)){
	if(in_array($value,$allreadyincluded)){$k--; unset($allpossiblevalue[$key]); continue;}
}

$allreadyincluded[]=$value;
$_SESSION['previous_values'][]=$value;

?>
<td align="right" width="90px">
<span style="color:#FFFFFF; font-weight:bold;"><?php  echo $value; ?></span>
</td>
<td align="center" valign="middle" >
<div style="display:none;" class="answer" id="d<?php echo trim($i.$k.$xt); ?>" ><?php echo $answer; ?></div>
<input id="<?php echo trim($i.$k.$xt); ?>" type="text" size="2" value="" maxlength="1" onKeyUp="strUpperCase(this);"  />
<input type="hidden" id="a<?php echo trim($i.$k.$xt); ?>" value="<?php echo $answer; ?>" />
</td>
<?php
$ansIds[]=trim($i.$k.$xt);
} ?>
</tr>
</table>
</td>
</tr>
<?php  }  ?>
<tr><td colspan="2" align="center" style="padding-top:20px;">
<?php  if($curloop==$loop){ ?>
<input type="button" name="check" value="Check" onClick="javascript: checkanswer();" />
<input type="button" name="check" value="Show Ans" onClick="javascript: showAnser();" />
<input type="button" name="Again" value="Once Again" onClick="javascript: submitform();"/>
&nbsp;&nbsp;&nbsp;&nbsp;<a style="color:#FFFFFF; text-decoration:none" href="mixmonthprewithtime.php" >NEXT</a>
<?php } ?>
<input type="hidden" id="asnwerIds" value="<?php echo implode(',',$ansIds); ?>" />
</td></tr>
</table>
</html>