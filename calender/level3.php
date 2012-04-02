<?php 
include('connection.php');
$calenderyearsql="SELECT * FROM newtagyear";
$calobj = mysql_query($calenderyearsql);

$AllowYear=array(18,19,20,21);

	while($obj=mysql_fetch_object($calobj)){
	//$yearTagOBJ[]=trim($obj->tagid);
	$sql=mysql_query("SELECT * FROM `calenderyear` WHERE `newtagyearid` LIKE '".trim($obj->tagid)."'");
		while($obj1=mysql_fetch_object($sql)){
		if(in_array(trim($obj1->century),$AllowYear)){
			$cenobj[trim($obj->tagid)][trim($obj1->century)]=trim($obj1->celtype);
		}
		}
	}
$yearsql="SELECT `tagyearid`,`yearext`,tagname FROM yeartype as yt JOIN newtagyear as nty ON yt.tagyearid=nty.tagid";
$qyear = mysql_query($yearsql);

while($obj1=mysql_fetch_object($qyear))
	{
	$yearobj[$obj1->yearext]=$obj1->tagyearid;
	}	
	
for($j=0;$j<400;$j++){
$k=array_rand($yearobj);
$v=array_rand($cenobj[trim($yearobj[$k])]);
$DATEOBJ[$v.$k]=$cenobj[trim($yearobj[$k])][$v];
}

$yearTag = array('1'=>'NET','NENO','RAJESH','NERO','NAIL','NOTCH','NECK','LATHI','LION','LAMB','LAWYAR','LAALU','LEECHE','LOCK');
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


$selectR3='';
$selectR6='';
$selectR10='';
$selectN='';
$selectL='';
$selectD='';
$selectA='';
if(isset($_POST['level']) and $_POST['level']!=''){ 
	if(trim($_POST['level'])=='N'){
	$selectN='selected="selected"';
	$level=7;
	$l='N';
	for($i=8;$i<=14;$i++){
	unset($yearTag[$i]);
		}	
	
	}else if($_POST['level']=='L'){
	$selectL='selected="selected"';
	$level=7;
	$l='L';
	for($i=1;$i<=7;$i++){ 
	unset($yearTag[$i]);
		}	
	
	}else if($_POST['level']=='A'){
	$selectA='selected="selected"';
	$l='A';
	$level=14;
	}
	else if($_POST['level']=='DN'){
	$selectDN='selected="selected"';
	$level=7;
	$l='L';
	for($i=8;$i<=14;$i++){
	unset($yearTag[$i]);
		}
	$months= array('3'=>'MAR','7'=>'JULY','10'=>'OCT','11'=>'NOV','12'=>'DEC');
		}	
		else if($_POST['level']=='DL'){
	$selectDL='selected="selected"';
	$level=7;
	$l='L';
	for($i=1;$i<=7;$i++){ 
	unset($yearTag[$i]);
		}
	$months= array('4'=>'APR','7'=>'JULY','8'=>'AUG','11'=>'NOV','12'=>'DEC');
		}else if($_POST['level']=='UN'){
	$selectUN='selected="selected"';
	$level=7;
	$l='L';
	for($i=8;$i<=14;$i++){
	unset($yearTag[$i]);
		}
	$x=array('3'=>'MAR','7'=>'JULY','10'=>'OCT','11'=>'NOV','12'=>'DEC');
	foreach($x as $k=>$v){
	unset($months[$k]);
	}
		}	
		else if($_POST['level']=='UL'){
	$selectUL='selected="selected"';
	$level=7;
	$l='L';
	for($i=1;$i<=7;$i++){ 
	unset($yearTag[$i]);
		}
	$x=array('4'=>'APR','7'=>'JULY','8'=>'AUG','11'=>'NOV','12'=>'DEC');
	foreach($x as $k=>$v){
	unset($months[$k]);
	}
		}//saini
		else if($_POST['level']=='R3'){
		$selectR3='selected="selected"';
        $level=3;
		}else if($_POST['level']=='R6'){
		$selectR6='selected="selected"';
        $level=6;
		}else if($_POST['level']=='R10'){
		$selectR10='selected="selected"';
        $level=10;
		}else{
		$level=3;
		}	
}else{
$selectR3='selected="selected"';
$level=3;
}
if(isset($_POST['settime'])){
$t=trim($_POST['settime']);
}else{
$t=9;
}

$select_seq=NULL;
$select_ren=NULL;
if(isset($_POST['displaytype']) AND trim($_POST['displaytype'])=='seq'){
$select_seq='selected="selected"';
}else{
$select_ren='selected="selected"';
}

// get all month by tag

$MONTHOFDAY['1']=array(1,8,15,22,29);
$MONTHOFDAY['2']=array(2,9,16,23,30);
$MONTHOFDAY['3']=array(3,10,17,24,31);
$MONTHOFDAY['4']=array(4,11,18,25);
$MONTHOFDAY['5']=array(5,12,19,26);
$MONTHOFDAY['6']=array(6,13,20,27);
$MONTHOFDAY['7']=array(7,14,21,28);

//$MONTHTYPE['MIX']=array();
$MONTHTYPE['A']=array(1=>'MANGO','TEA','WATCH','THRESH','FISH','ASH','SCHOOL');

$MONTHTYPE['B']=array(1=>'TEA','WATCH','THRESH','FISH','ASH','SCHOOL','MANGO');

$MONTHTYPE['C']=array(1=>'WATCH','THRESH','FISH','ASH','SCHOOL','MANGO','TEA');

$MONTHTYPE['D']=array(1=>'THRESH','FISH','ASH','SCHOOL','MANGO','TEA','WATCH');

$MONTHTYPE['E']=array(1=>'FISH','ASH','SCHOOL','MANGO','TEA','WATCH','THRESH');

$MONTHTYPE['F']=array(1=>'ASH','SCHOOL','MANGO','TEA','WATCH','THRESH','FISH');

$MONTHTYPE['G']=array(1=>'SCHOOL','MANGO','TEA','WATCH','THRESH','FISH','ASH');

foreach($MONTHTYPE AS $mt=>$month){
		foreach($month as $mk=>$m_ans){
			foreach($MONTHOFDAY[$mk] as $date){
			$monthtag[$mt][$date]=$m_ans;
			}
		}
}

//================
$totalrdiobutton=5;
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
function checkanswer(){
state=0;
var AnsIds = document.getElementById('asnwerIds').value;
//alert(AnsIds);
//var wid='';

var AnsIdsInarray=AnsIds.split(",");
//alert(AnsIdsInarray.length)
	var nextLavel=1;
	for(var i=0; i<AnsIdsInarray.length; i++){
	var input = document.getElementById(AnsIdsInarray[i]).value;
	var answer = document.getElementById('a'+AnsIdsInarray[i]).value;

		if(input.trim()==answer.trim()){ 
		document.getElementById(AnsIdsInarray[i]).style.background='#009900';
		document.getElementById(AnsIdsInarray[i]).disabled=true;
		}else{
		nextLavel=0;
		document.getElementById(AnsIdsInarray[i]).style.background='#FF0000';
		document.getElementById(AnsIdsInarray[i]).disabled=false;
		wid=AnsIdsInarray[i]+',';
		}	
	}
		
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
var ms = 0;
var state = 0;
var c=1;
var aryid=0;
var disabletime=<?php echo $t*1000; ?>;
var radioid=1;

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
var checkid=document.getElementById(cyrid);
if(checkid!=null){
document.getElementById(cyrid).style.background='#053650';
document.getElementById(cyrid).disabled=true;
}

c=c+1;
}
//document.stpw.time.value = ms;
   }
}

window.onload=display

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
Time:
<select name="settime" style="width:50px;" onChange="this.form.submit();" >
	
	<?php for($i=1;$i<15;$i++){ 
	$selected='';
	if($t==$i){
	$selected='selected="selected"';
	}
	?>
	<option value="<?php echo $i;?>" <?php echo $selected; ?> ><?php echo $i;?></option>
	<?php } ?>
	</select>
<input type='hidden' name='level' value='<?php echo $_POST['level']; ?>' />
<input type='hidden' name='displaytype' value='<?php echo $_POST['displaytype']; ?>' />
<INPUT TYPE="BUTTON" Name="ssbutton" VALUE="Start/Stop" onClick="delayBeforeStart()">
</FORM>
</CENTER>

<table align="center" width="95%" cellspacing="10" style="font-family:'Times New Roman', Times, serif">
<tr>
	<td height="40" align="right" colspan="7">
	<a style="color:#FFFFFF; text-decoration:none" href="index.php" >BACK TO HOME</a>
	</td>
</tr>

<tr>
<td height="40" style="color:#FFFFFF; font-size:30px; font-weight:800; padding-bottom:20px;" colspan="5" align="center">Level 3</td>
</tr>
<form name="calenderprect" method="post" >

<tr>
<td height="40" style="font-size:14px;" colspan="5">
<select name="displaytype" style="width:100px;" onChange="this.form.submit();" >
	<?php 
	echo "<option value='ren' $select_ren >Randam</option>";	
	echo "<option value='seq' $select_seq >Sequence</option>";	
	?>
</select>
	
<input type='hidden' name='settime' value='<?php echo $t; ?>' />
	<select name="level" style="width:200px;" onChange="this.form.submit();" >
	<option value="R3" <?php echo $selectR3; ?> >Randam 21</option>
	<option value="R6" <?php echo $selectR6; ?> >Randam 42</option>
	<option value="R10" <?php echo $selectR10; ?> >Randam 70</option>
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
<td width="80%" style="color:#FFFFFF; font-size:18px; font-weight:800; padding-bottom:20px;">
<?php for($r=1;$r<=$totalrdiobutton;$r++){?> <input type="radio" id="r<?php echo $r; ?>"/> <?php } ?>
</td>
<td width="20%" style="color:#FFFFFF; font-size:18px; font-weight:800;padding-bottom:20px;"  align="center"></td>
</tr>

<?php 
$xt=0;
$show=$months;
$dateyear=$DATEOBJ;
for($i=0;$i<$level;$i++){ $show=$months;
?>
<tr>
<td width="100%" align="left" colspan="2" style="padding-top:10px; ">
<table align="left" width="100%">
<tr>
<?php 
if($select_seq){
$y=array_rand($yearTag);}

for($k=1;$k<7;$k++){ ++$xt; 
if(!$select_seq){
$y=array_rand($yearTag);}
?>
<td  align="right" width="150px">
<?php 
$m=array_rand($show);

$year=array_search($yearTag[$y],$DATEOBJ);
if(!$year){
$DATEOBJ=$dateyear;
$year=array_search($yearTag[$y],$DATEOBJ);
}
$d=rand(1,31);
if($d<10){
$ask=$year.'='.$show[$m].'=0'.$d;
}else{
$ask=$year.'='.$show[$m].'='.$d;
}
//echo $months[$m];?><span style="color:#FFFFFF; font-weight:bold;"><?php if(strlen($m)==1){echo '';} echo $ask; ?></span></td>
<td align="center" valign="middle" >
<div style="display:none;" class="answer" id="d<?php echo trim($y.$m.$xt); ?>" ><?php echo $monthtag[$answer[$y][$m]][$d]; ?></div>
<input id="<?php echo trim($y.$m.$xt); ?>" type="text" size="7" value="" maxlength="7" onKeyUp="strUpperCase(this);"  />
<input type="hidden" id="a<?php echo trim($y.$m.$xt); ?>" value="<?php echo $monthtag[$answer[$y][$m]][$d]; ?>" />
</td>
<?php
$ansIds[]=trim($y.$m.$xt);
unset($show[$m]);
unset($DATEOBJ[$year]);
if(count($show)<1){ $show=$months; }

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
<input type="button" name="check" value="Show Ans" onClick="javascript: showAnser();" />
<input type="button" name="Again" value="Once Again" onClick="javascript: submitform();"/>
&nbsp;&nbsp;&nbsp;&nbsp;
<input type="hidden" id="asnwerIds" value="<?php echo implode(',',$ansIds); ?>" />
</td></tr>
</table>
</html>