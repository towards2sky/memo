<?php 
session_start();

if(isset($_SESSION['previous_values']) && count($_SESSION['previous_values']) >150){unset($_SESSION['previous_values']);}

//echo '<pre>';
//print_r($_SESSION);
//echo '</pre>';
// month with images
$DAYTAG=array('MANGO'=>'MANGO','TEA'=>'TEA','WATCH'=>'WATCH','THRESH'=>'THRESH','FISH'=>'FISH','ASH'=>'ASH','SCHOOL'=>'SCHOOL');
$MONTHOFDAY['1']=array(1,8,15,22,29);
$MONTHOFDAY['2']=array(2,9,16,23,30);
$MONTHOFDAY['3']=array(3,10,17,24,31);
$MONTHOFDAY['4']=array(4,11,18,25);
$MONTHOFDAY['5']=array(5,12,19,26);
$MONTHOFDAY['6']=array(6,13,20,27);
$MONTHOFDAY['7']=array(7,14,21,28);

$MONTHTYPE['MIX']=array();
$MONTHTYPE['A']=array(1=>'MANGO','TEA','WATCH','THRESH','FISH','ASH','SCHOOL');

$MONTHTYPE['B']=array(1=>'TEA','WATCH','THRESH','FISH','ASH','SCHOOL','MANGO');

$MONTHTYPE['C']=array(1=>'WATCH','THRESH','FISH','ASH','SCHOOL','MANGO','TEA');

$MONTHTYPE['D']=array(1=>'THRESH','FISH','ASH','SCHOOL','MANGO','TEA','WATCH');

$MONTHTYPE['E']=array(1=>'FISH','ASH','SCHOOL','MANGO','TEA','WATCH','THRESH');

$MONTHTYPE['F']=array(1=>'ASH','SCHOOL','MANGO','TEA','WATCH','THRESH','FISH');

$MONTHTYPE['G']=array(1=>'SCHOOL','MANGO','TEA','WATCH','THRESH','FISH','ASH');

/*
foreach($MONTHTYPE AS $mt=>$month){
		foreach($month as $mk=>$m_ans){
			foreach($MONTHOFDAY[$mk] as $date){
			$new[$mt][$date]=$m_ans;
			}
		}
}
*/

$TT['NO']='NO';
$TT['YES']='YES';

if(isset($_POST['tagtye'])){
$tagtye=$_POST['tagtye'];
}else{
$tagtye='NO';
}

if(isset($_POST['settime'])){
$settime=trim($_POST['settime']);
}else{
$settime=5;
}

if(isset($_GET['r']) && $_GET['r']){ 
 $monthtype=array_rand($MONTHTYPE);
}else{
	if(isset($_POST['monthtype'])){
	$monthtype=trim($_POST['monthtype']);
	}else{
	$monthtype='MIX';
	}
}


if(count($MONTHTYPE[$monthtype])>1){
$hrt=3;
$vrt=11;
foreach($MONTHTYPE[$monthtype] as $t=>$v){

	for($m=1;$m<=31;$m++){
		if(in_array($m,$MONTHOFDAY[$t])){ 
			$add='';
			if($m<10){
			$add='0';
			}
			$DAYS[$add.$m]=$DAYTAG[$v];
		}	
	
	}
}
}else{
$hrt=6;
$vrt=7;
foreach($MONTHTYPE as $mtyp=>$v){
foreach($MONTHTYPE[$mtyp] as $t=>$v){

	for($m=1;$m<=31;$m++){
		if(in_array($m,$MONTHOFDAY[$t])){ 
			$add='';
			if($m<10){
			$add='0';
			}
			$DAYS[$mtyp.'=>'.$add.$m]=$DAYTAG[$v];
		}	
	
	}
}

}	

}

if($tagtye=='NO'){
$hrt=6;
$vrt=7;
}
//echo '<pre>';
//print_r($DAYS);
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

if($loop>1){$addradiobuttom=3;}else{$addradiobuttom=0;}
$totalrdiobutton=(5+$addradiobuttom);
//echo $curloop.'=='.$loop;

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
   font: 12px Verdana,bold,sans-serif; text-align: center;
   }
</style>
<script type="text/javascript" language="javascript" >

function htmldocumentredy(){
display();
<?php if($curloop<$loop){?>
delayBeforeStart();
<?php } ?>

}

function checkanswer(){ state=0;
var AnsIds = document.getElementById('asnwerIds').value;

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



String.prototype.trim = function() {
a = this.replace(/^\s+/, '');
return a.replace(/\s+$/, '');
};


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

//function submitform(){
//document.forms['calenderprect'].submit();
//}
</script>


<script type='text/javascript'>

/*
For this script
Visit http://java-scripts.net 
or http://wsabstract.com
*/
var radioid=1;
var ms = 0;
var state = 0;
var c=1;
var aryid=0;
var disabletime=<?php echo $settime*1000; ?>;
function startstop() {
if (state == 0) {
state = 1;
then = new Date();
then.setTime(then.getTime() - ms);
} else {
state = 0;
now = new Date();
ms = now.getTime() - then.getTime();
//////document.stpw.time.value = ms;
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

//alert(AnsIdsInarraynew.length);

var cyrid=AnsIdsInarraynew[aryid++];
var checkid=document.getElementById(cyrid);
if(checkid!=null){
document.getElementById(cyrid).style.background='#053650';
document.getElementById(cyrid).disabled=true;
}

if(aryid==AnsIdsInarraynew.length){
setTimeout("checkanswer();", 2000);
}
//var state = 0;
//startstop();
//alert(c);

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
//////document.stpw.time.value = ms;
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
	
Tag Typ:
<select name="tagtye" style="width:50px;" onChange="this.form.submit();" >
	
	<?php foreach($TT as $k=>$v){ 
	$selectedtagtye='';
	if($tagtye==$k){
	$selectedtagtye='selected="selected"';
	}
	?>
	<option value="<?php echo $k;?>" <?php echo $selectedtagtye; ?> ><?php echo $v;?></option>
	<?php } ?>
	</select>
Month Typ:
<select name="monthtype" style="width:50px;" onChange="this.form.submit();" >
	<?php foreach($MONTHTYPE as $k=>$v){ 
	$selectedmonthtyp='';
	if($monthtype==$k){
	$selectedmonthtyp='selected="selected"';
	}
	?>
	<option value="<?php echo $k;?>" <?php echo $selectedmonthtyp; ?> ><?php echo $k;?></option>
	<?php } ?>
	</select>
Time:
<select name="settime" style="width:50px;" onChange="this.form.submit();" >
	
	<?php for($i=1;$i<11;$i++){ 
	$selected='';
	if($settime==$i){
	$selected='selected="selected"';
	}
	?>
	<option value="<?php echo $i;?>" <?php echo $selected; ?> ><?php echo $i;?></option>
	<?php } ?>
	</select>

<INPUT TYPE="BUTTON" Name="ssbutton" VALUE="Start/Stop" onClick="delayBeforeStart()">
</FORM>
</CENTER>
<table align="center" width="95%" cellspacing="10" style="font-family:'Times New Roman', Times, serif">
<tr>
	<td height="40" align="right" colspan="7">
	<a style="color:#FFFFFF; text-decoration:none" href="index.php" >BACK TO HOME</a>
	</td>
</tr>
<form name="calenderprect" method="post" >
<tr>
<td height="40" style="font-size:14px;" colspan="5">
<input type='hidden' name='monthtype' value='<?php echo $monthtype; ?>' />
<input type='hidden' name='settime' value='<?php echo $settime; ?>' />
<input type='hidden' name='tagtye' value='<?php echo $tagtye; ?>' />
<input type='hidden' name='curloop' value='<?php echo $curloop; ?>' />
<input type='hidden' name='loop' value='<?php echo $loop; ?>' />

</td>
</tr>
</form>
<tr>
<td width="100%" style="color:#FFFFFF; font-size:40px; font-weight:800;padding-bottom:20px;"  align="center"><?php echo $monthtype;  if($monthtype!='MIX'){?> <img src="images/monthtype/<?php echo $monthtype?>.jpg" > <?php } ?></td>
</tr>
<?php if($loop>1){ ?>
<tr>
<td width="100%" style="color:#FFFFFF; font-size:25px; font-weight:800;padding-bottom:20px;"  align="center">Loop left: <?php echo ($loop-$curloop-1); ?></td>
</tr>
<?php } ?>
<tr>
<td width="80%" style="color:#FFFFFF; font-size:18px; font-weight:800; padding-bottom:10px;padding-left:45px;">
<?php for($r=1;$r<=$totalrdiobutton;$r++){?> <input type="radio" id="r<?php echo $r; ?>"/> <?php } ?>
</td>
<td width="20%" style="color:#FFFFFF; font-size:18px; font-weight:800;padding-bottom:20px;"  align="center"></td>
</tr>
<?php 
if($monthtype=='MIX'){
$vrt=10;
}
if($tagtye=='YES'){
$xt=0;
$show=$DAYS;
for($i=0;$i<$vrt;$i++){
//$show=$DAYS;
 ?>
<tr>
<td width="100%" align="left" colspan="2" style="padding-top:10px; ">
<table align="center" width="100%">
<tr>
<?php 
for($y=0;$y<$hrt;$y++){ ++$xt; 

?>
<td  align="right" width="90px">
<?php 
$m=array_rand($show);
//echo filetype('images/mday/'.$m.'.jpeg');
if(file_exists('images/mday/'.$m.'.jpeg'))
{$mdayimg='images/mday/'.$m.'.jpeg';}
else if (file_exists('images/mday/'.$m.'.jpg')){$mdayimg='images/mday/'.$m.'.jpg';}
else {$mdayimg='images/NO.jpeg';}
?>
<span style="color:#FFFFFF; font-weight:bold;"><img width="100" height="80" src="<?php echo $mdayimg; ?>" ><?php echo $m;?></span>

</td>
<td align="center" valign="middle" ><div style="display:none;" class="answer" id="d<?php echo trim($y.$m.$xt); ?>" ><?php echo $answer[$y][$m]; ?></div>
<input id="<?php echo trim($m.$xt); ?>" type="text" size="7" value="<?php //echo $dates[$m]; ?>" maxlength="10" onKeyUp="strUpperCase(this);"  />
<input type="hidden" id="a<?php echo trim($m.$xt); ?>" value="<?php echo $DAYS[$m]; ?>" />
</td>
<?php 
$ansIds[]=trim($m.$xt);
if(isset($show[$m]))
unset($show[$m]);
//echo count($show);	
//if(count($show)==0){$show=$DAYS;  }
}?>
</tr>
</table>
</td>
</tr>
<?php 
 } 
 }
 
 else if($tagtye=='NO' && $monthtype=='MIX'){ //ECHO 'HELLO';
 
 //echo '<pre>';
//print_r($_SESSION);
//echo '</pre>';
$xt=0;
$show=$DAYS;
$allreadyincluded=array();
if(isset($_SESSION['previous_values'])){$allreadyincluded=$_SESSION['previous_values'];}
for($i=0;$i<$vrt;$i++){
//$show=$DAYS;
 ?>
<tr>
<td width="100%" align="left" colspan="2" style="padding-top:10px; ">
<table align="center" width="100%">
<tr>
<?php 
for($y=0;$y<$hrt;$y++){ ++$xt; 

$m=array_rand($show);
if(in_array($m,$allreadyincluded)){$y--; continue;}
$allreadyincluded[]=$m;

$_SESSION['previous_values'][]=$m;

?>
<td  align="right" width="90px">
<?php 
//echo $months[$m];?><span style="color:#FFFFFF; font-weight:bold;"><?php echo $m;?></span>
<span style="color:#999999"><?php //echo $k,$m;?></span>
</td>
<td align="center" valign="middle" ><div style="display:none;" class="answer" id="d<?php echo trim($m.$xt); ?>" ><?php echo $DAYS[$m]; ?></div>
<input id="<?php echo trim($m.$xt); ?>" type="text" size="7" value="<?php //echo $dates[$m]; ?>" maxlength="10" onKeyUp="strUpperCase(this);"  />
<input type="hidden" id="a<?php echo trim($m.$xt); ?>" value="<?php echo $DAYS[$m]; ?>" />
</td>
<?php 
$ansIds[]=trim($m.$xt);
if(isset($show[$m]))
unset($show[$m]);
//echo count($show);	
if(count($show)==0){$show=$DAYS;  }
} ?>
</tr>
</table>
</td>
</tr>
<?php
}
 
 }else{
//echo '<pre>';
//print_r($_SESSION);
//echo '</pre>';
$xt=0;
$show=$DAYS;
//$allreadyincluded=array();
//if(isset($_SESSION['previous_values'])){$allreadyincluded=$_SESSION['previous_values'];}
for($i=0;$i<$vrt;$i++){
//$show=$DAYS;
 ?>
<tr>
<td width="100%" align="left" colspan="2" style="padding-top:10px; ">
<table align="center" width="100%">
<tr>
<?php 
for($y=0;$y<$hrt;$y++){ ++$xt; 

$m=array_rand($show);
//if(in_array($m,$allreadyincluded)){$y--; continue;}
//$allreadyincluded[]=$m;

//$_SESSION['previous_values'][]=$m;

?>
<td  align="right" width="90px">
<?php 
//echo $months[$m];?><span style="color:#FFFFFF; font-weight:bold;"><?php echo $m;?></span>
<span style="color:#999999"><?php //echo $k,$m;?></span>
</td>
<td align="center" valign="middle" ><div style="display:none;" class="answer" id="d<?php echo trim($m.$xt); ?>" ><?php echo $DAYS[$m]; ?></div>
<input id="<?php echo trim($m.$xt); ?>" type="text" size="7" value="<?php //echo $dates[$m]; ?>" maxlength="10" onKeyUp="strUpperCase(this);"  />
<input type="hidden" id="a<?php echo trim($m.$xt); ?>" value="<?php echo $DAYS[$m]; ?>" />
</td>
<?php 
$ansIds[]=trim($m.$xt);
if(isset($show[$m]))
unset($show[$m]);
//echo count($show);	
if(count($show)==0){$show=$DAYS;  }
} ?>
</tr>
</table>
</td>
</tr>
<?php
}
}

?>
<tr><td colspan="2" align="center" style="padding-top:20px;">
<?php  if($curloop==$loop){ ?>
<input type="button" name="check" value="Check" onClick="javascript: checkanswer();" />
<input type="button" name="check" value="Show Ans" onClick="javascript: showAnser();" />
<input type="button" name="Again" value="Once Again" onClick="javascript: submitform('calenderprect');"/>
&nbsp;&nbsp;&nbsp;&nbsp;<a style="color:#FFFFFF; text-decoration:none" href="groupmonthpre.php?r=1" >RANDAM</a>
<?php } ?>
<input type="hidden" id="asnwerIds" value="<?php echo implode(',',$ansIds); ?>" />
</td></tr>

</table>
</html>