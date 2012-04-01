<?php 
include('connection.php');

$yearsql="SELECT `tagyearid`,`yearext`,tagname FROM yeartype as yt JOIN newtagyear as nty ON yt.tagyearid=nty.tagid";
$qyear = mysql_query($yearsql);

while($obj1=mysql_fetch_object($qyear))
	{
if($obj1->yearext <101)
	$yearobj[$obj1->yearext]=$obj1->tagname;
	}	
	
$year=$yearobj;	

//print_r($_POST);
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
function checkanswer(){ state=0;
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
		document.getElementById(AnsIdsInarray[i]).disabled=true;
		}else{
		document.getElementById(AnsIdsInarray[i]).style.background='#FF0000';
		document.getElementById(AnsIdsInarray[i]).disabled=false;
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
<td width="20%" style="color:#FFFFFF; font-size:18px; font-weight:800; padding-bottom:20px;" colspan="2" align="center">CALENDER OF YEAR </td>
</tr>
<form name="calenderprect" method="post" >
<tr>
<td height="40" style="font-size:14px;" colspan="5">
<input type='hidden' name='settime' value='<?php echo $t; ?>' />
</td>
</tr>
</form>
<?php 
$xt=0;
for($i=0;$i<10;$i++){ ?>
<tr>
<td width="100%" align="left" colspan="2" style="padding-top:10px; ">
<table align="left" width="100%">
<tr>
<td style="color:#FFFFFF; font-size:20px" align="left" width="40px"><td>
<?php 
for($j=1;$j<11;$j++){ ++$xt; ?>
<td  align="right" width="90px">
<?php $m=array_rand($year); ?><span style="color:#FFFFFF; font-weight:bold;"><?php echo $m;?></span>
</td>
<td align="center" valign="middle" ><input id="<?php  echo $m.$i.$j;?>" type="text" size="6" value="<?php //echo $yearTag[$year[$m]]; ?>" maxlength="7" onKeyUp="strUpperCase(this);"  />
<input type="hidden" id="a<?php echo $m.$i.$j; ?>" value="<?php echo $year[$m] ?>" />
</td>
<?php 
$ansIds[]=$m.$i.$j;
unset($year[$m]);

if(!count($year)){
$year=$yearobj;	
}
}?>
</tr>
</table>
</td>
</tr>
<?php  } ?>
<tr><td colspan="2" align="center" style="padding-top:20px;">
<input type="button" name="check" value="Check" onClick="javascript: checkanswer();" />
<input type="button" name="Again" value="Once Again" onClick="javascript: submitform();"/>
&nbsp;&nbsp;&nbsp;&nbsp;<a style="color:#FFFFFF; text-decoration:none" href="dateprectwithtime.php" >NEXT</a>
<input type="hidden" id="asnwerIds" value="<?php echo implode(',',$ansIds); ?>" />
</td></tr>
</table>
</html>