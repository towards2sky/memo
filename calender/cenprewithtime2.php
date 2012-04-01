<?php 
include('connection.php');
$calenderyearsql="SELECT * FROM newtagyear";
$calobj = mysql_query($calenderyearsql);
	while($obj=mysql_fetch_object($calobj)){
	$yearTag[]=trim($obj->tagid);
	
	$sql=mysql_query("SELECT * FROM `calenderyear` WHERE `newtagyearid` LIKE '".trim($obj->tagid)."' AND century NOT IN (17)");
		while($obj1=mysql_fetch_object($sql)){
		$answer[trim($obj->tagid)][trim($obj1->century)]=trim($obj1->celtype);
		}
	}
	$i=0;
	foreach($answer as $key=>$obj){
			foreach($obj as $k=>$v){
				$allValue[$i]['q']="$key=>$k";
				$allValue[$i]['a']=$v;
				$i++;
			}
	}
shuffle($allValue);

$months=array(18,19,20,21);
/*
echo '<pre>';
print_r($allValue);
print_r($yearTag);
print_r($answer);
print_r($months);
exit;
*/
if(isset($_POST['time'])){
$t=trim($_POST['time']);
}else{
$t=5;
}


if(isset($_POST['loop'])){
$loop=$_POST['loop'];
$addradiobuttom=0;
}else{
$loop=1;
$addradiobuttom=0;
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
$totalrdiobutton=(5+$addradiobuttom);

?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Memory</title>
<script type="text/javascript" language="javascript" >

function htmldocumentredy(){
display();
<?php if($curloop<$loop){?>
delayBeforeStart();
<?php } ?>

}

function checkanswer(){ state=0;
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
		document.getElementById(AnsIdsInarray[i]).disabled=true;
		}else{
		nextLavel=0;
		document.getElementById(AnsIdsInarray[i]).style.background='#FF0000';
		document.getElementById(AnsIdsInarray[i]).disabled=false;
		}
		
		<?php  if($curloop!=$loop){ ?>
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
<?php  if($curloop!=$loop){ ?>
if(aryid==AnsIdsInarraynew.length){
setTimeout("checkanswer();", 2000);
}
<?php  } ?>

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
<select name="time" style="width:50px;" onChange="this.form.submit();" >
	
	<?php for($i=1;$i<11;$i++){ 
	$selected='';
	if($t==$i){
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

<tr>
<td height="40" style="font-size:14px;" colspan="5"></td>
</tr>
<form name="calenderprect" method="post" >
<tr>
<td height="40" style="font-size:14px;" colspan="5">
<input type='hidden' name='curloop' value='<?php echo $curloop; ?>' />
<input type='hidden' name='loop' value='<?php echo $loop; ?>' />
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
<td width="80%" style="color:#FFFFFF; font-size:18px; font-weight:800; padding-bottom:10px;padding-left:100px;">
<?php for($r=1;$r<=$totalrdiobutton;$r++){?> <input type="radio" id="r<?php echo $r; ?>"/> <?php } ?>
</td>
<td width="20%" style="color:#FFFFFF; font-size:18px; font-weight:800;padding-bottom:20px;"  align="center"></td>
</tr>


<?php 
$xt=0;
$temp=$allValue;
$allreadyincluded=array();

for($i=0;$i<13;$i++){
 ?>
<tr>
<td width="100%" align="left" colspan="2" style="padding-top:10px; ">
<table align="left" width="100%">
<tr>
<td style="color:#FFFFFF; font-size:20px" align="left" width="60px"><?php 
//$y=array_rand($yearTag);
//echo $yearTag[$y];?><td>
<?php 
$m=0;
for($j=0;$j<6;$j++){ ++$xt; ?>
<td  align="right" width="90px">
<?php 
//$m++;

$QueryforAsk=array_rand($allValue);
//if(in_array($daykey,$allreadyincluded)){$j--; continue;}
//$allreadyincluded[]=$daykey;

//$m=$show[$k];
//echo $months[$m];?><span style="color:#FFFFFF; font-weight:bold;"><?php if(strlen($m)==1){echo '';} echo $allValue[$QueryforAsk]['q'];?></span>
<span style="color:#999999"><?php //echo $k,$m;?></span>
</td>
<td align="center" valign="middle" >
<input id="<?php echo $QueryforAsk.$i.$j; ?>" type="text" size="8" value="<?php //echo $answer[trim($yearTag[$y])][$m]; ?>" maxlength="10" onKeyUp="strUpperCase(this);"  />
<input type="hidden" id="a<?php echo $QueryforAsk.$i.$j; ?>" value="<?php echo $allValue[$QueryforAsk]['a']; ?>" />
</td>
<?php 
$ansIds[]=$QueryforAsk.$i.$j;

unset($allValue[$QueryforAsk]);
if(count($allValue)<3){$allValue=$temp;}
}?>
</tr>
</table>
</td>
</tr>
<?php 

 } 
 
 ?>
<tr><td colspan="2" align="center" style="padding-top:20px;">
<?php  if($curloop==$loop){ ?>
<input type="button" name="check" value="Check" onClick="javascript: checkanswer();" />
<input type="button" name="Again" value="Once Again" onClick="javascript: submitform('calenderprect');"/>
&nbsp;&nbsp;&nbsp;&nbsp;<a style="color:#FFFFFF; text-decoration:none" href="groupyearwithtime.php" >NEXT</a>
<?php  } ?>
<input type="hidden" id="asnwerIds" value="<?php echo implode(',',$ansIds); ?>" />
</td></tr>
</table>
</html>