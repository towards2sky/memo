<?php 
include('connection.php');
$calenderyearsql="SELECT * FROM newtagyear";
$calobj = mysql_query($calenderyearsql);
	while($obj=mysql_fetch_object($calobj)){
	$yearTag[]=trim($obj->tagid);
	$sql=mysql_query("SELECT * FROM `calenderyear` WHERE `newtagyearid` LIKE '".trim($obj->tagid)."'");
		while($obj1=mysql_fetch_object($sql)){
		$answer[trim($obj->tagid)][trim($obj1->century)]=trim($obj1->celtype);
		}
	}

$months=array(18,19,18,19,20,21,20);

if(isset($_POST['settime'])){
$settime=trim($_POST['settime']);
}else{
$settime=7;
}

$TT['NO']='NO';
$TT['YES']='YES';

if(isset($_POST['tagtye'])){
$tagtye=$_POST['tagtye'];
}else{
$tagtye='NO';
}



?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Memory</title>
<script type="text/javascript" language="javascript" >
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

function capitals(that) { 
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

<tr>
<td height="40" style="font-size:14px;" colspan="5"></td>
</tr>
<form name="calenderprect" method="post" >
<tr>
<td height="40" style="font-size:14px;" colspan="5">
<input type='hidden' name='settime' value='<?php echo $settime; ?>' />
<input type='hidden' name='tagtye' value='<?php echo $tagtye; ?>' />
</td>
</tr>
</form>
<tr>
<td width="20%" style="color:#FFFFFF; font-size:18px; font-weight:800; padding-bottom:20px;">All Year Tag</td><td width="80%" style="color:#FFFFFF; font-size:18px; font-weight:800;padding-bottom:20px;"  align="center">Start Month of the year</td>
</tr>

<?php 
if($tagtye=='YES'){

$yearTagImg = array('0'=>'N-1','N-2','N-3','N-4','N-5','N-6','N-7','L-1','L-2','L-3','L-4','L-5','L-6','L-7');

$xt=0;
for($i=0;$i<14;$i++){
$show=$months;
 ?>
<tr>
<td width="100%" align="left" colspan="2" style="padding-top:10px; ">
<table align="left" width="100%">
<tr>
<td style="color:#FFFFFF; font-size:20px" align="left" width="60px"><?php 
$y=array_rand($yearTag);
if(file_exists('images/G3/'.$yearTag[$y].'.jpeg'))
{$mdayimg='images/G3/'.$yearTag[$y].'.jpeg';}
else if (file_exists('images/G3/'.$yearTag[$y].'.jpg')){$mdayimg='images/G3/'.$yearTag[$y].'.jpg';}
else {$mdayimg='images/NO.jpeg';}

echo  "<img width='100' height='80' src='$mdayimg' >";
echo $yearTag[$y];?><td>
<?php 
$m=0;
foreach($months as $k=>$mk){ ++$xt; ?>
<td  align="right" width="90px">
<?php 
//$m++;
$k=array_rand($show);
$m=$show[$k];
//echo $months[$m];?><span style="color:#FFFFFF; font-weight:bold;"><?php 

if(file_exists('images/G3/'.$m.'.jpeg'))
{$mdayimg='images/G3/'.$m.'.jpeg';}
else if (file_exists('images/G3/'.$m.'.jpg')){$mdayimg='images/G3/'.$m.'.jpg';}
else {$mdayimg='images/NO.jpeg';}

echo  "<img width='55' height='40' src='$mdayimg' >";

 echo $m;?></span>
<span style="color:#999999"><?php //echo $k,$m;?></span>
</td>
<td align="center" valign="middle" >
<input id="<?php echo trim($y.$m.$xt); ?>" type="text" size="8" value="<?php //echo $answer[trim($yearTag[$y])][$m]; ?>" maxlength="10" onKeyUp="strUpperCase(this);"  />
<input type="hidden" id="a<?php echo trim($y.$m.$xt); ?>" value="<?php echo $answer[trim($yearTag[$y])][$m]; ?>" />
</td>
<?php 
$ansIds[]=trim($y.$m.$xt);
unset($show[$k]);
}?>
</tr>
</table>
</td>
</tr>
<?php 
unset($yearTag[$y]);
}
 }else{ 
 
 $xt=0;
for($i=0;$i<14;$i++){
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
$m=0;
foreach($months as $k=>$mk){ ++$xt; ?>
<td  align="right" width="90px">
<?php 
//$m++;
$k=array_rand($show);
$m=$show[$k];
//echo $months[$m];?><span style="color:#FFFFFF; font-weight:bold;"><?php if(strlen($m)==1){echo '';} echo $m;?></span>
<span style="color:#999999"><?php //echo $k,$m;?></span>
</td>
<td align="center" valign="middle" >
<input id="<?php echo trim($y.$m.$xt); ?>" type="text" size="8" value="<?php //echo $answer[trim($yearTag[$y])][$m]; ?>" maxlength="10" onKeyUp="strUpperCase(this);"  />
<input type="hidden" id="a<?php echo trim($y.$m.$xt); ?>" value="<?php echo $answer[trim($yearTag[$y])][$m]; ?>" />
</td>
<?php 
$ansIds[]=trim($y.$m.$xt);
unset($show[$k]);
}?>
</tr>
</table>
</td>
</tr>
<?php 
unset($yearTag[$y]);
 }
 
 }

 ?>
 

<tr><td colspan="2" align="center" style="padding-top:20px;">
<input type="button" name="check" value="Check" onClick="javascript: checkanswer();" />
<input type="button" name="Again" value="Once Again" onClick="javascript: submitform();"/>
&nbsp;&nbsp;&nbsp;&nbsp;<a style="color:#FFFFFF; text-decoration:none" href="groupyearwithtime.php" >NEXT</a>
<input type="hidden" id="asnwerIds" value="<?php echo implode(',',$ansIds); ?>" />
</td></tr>
</table>
</html>