<?php 
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
function checkanswer(){ state=0;
var AnsIds = document.getElementById('asnwerIds').value;

var AnsIdsInarray=AnsIds.split(",");
alert(AnsIdsInarray.length)
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
		if(nextLavel){
				//document.forms['calenderprect'].submit();
		}	
	}

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
//document.stpw.time.value = ms;
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
var checkid=document.getElementById(cyrid);
if(checkid!=null){
document.getElementById(cyrid).style.background='#053650';
document.getElementById(cyrid).disabled=true;
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
//document.stpw.time.value = ms;
   }
}

window.onload=display

</script>

</head>
<body bgcolor="#053650">
<CENTER>
<FORM NAME="stpw" method="post" >
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

<INPUT TYPE="BUTTON" Name="ssbutton" VALUE="Start/Stop" onClick="startstop()">
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
</td>
</tr>
</form>
<tr>
<td width="100%" style="color:#FFFFFF; font-size:50px; font-weight:800;padding-bottom:20px;"  align="center"><?php echo $monthtype;  if($monthtype!='MIX'){?> <img src="images/monthtype/<?php echo $monthtype?>.jpg" > <?php } ?></td>
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
for($y=0;$y<$hrt;$y++){ ++$xt; ?>
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
 }else{

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
for($y=0;$y<$hrt;$y++){ ++$xt; ?>
<td  align="right" width="90px">
<?php 
$m=array_rand($show);
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
<input type="button" name="check" value="Check" onClick="javascript: checkanswer();" />
<input type="button" name="check" value="Show Ans" onClick="javascript: showAnser();" />
<input type="button" name="Again" value="Once Again" onClick="javascript: submitform();"/>
&nbsp;&nbsp;&nbsp;&nbsp;<a style="color:#FFFFFF; text-decoration:none" href="groupmonthpre.php?r=1" >RANDAM</a>
<input type="hidden" id="asnwerIds" value="<?php echo implode(',',$ansIds); ?>" />
</td></tr>
</table>
</html>