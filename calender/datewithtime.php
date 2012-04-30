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

$show=$months;
$dateyear=$DATEOBJ;
$y=array_rand($yearTag);
$m=array_rand($show);

$year=array_search($yearTag[$y],$DATEOBJ);
if(!$year){
$DATEOBJ=$dateyear;
$year=array_search($yearTag[$y],$DATEOBJ);
}
$d=rand(1,31);
if($d<10){
$question='0'.$d.'='.$show[$m].'='.$year;
}else{
$question=$d.'='.$show[$m].'='.$year;
}

//echo  date("l", mktime($time));

function dropdown($id){
echo "<select id='$id'>";
echo "<option>SELECT</option>";
echo "<option>SCHOOL</option>";
echo "<option>MANGO</option>";
echo "<option>TEA</option>";
echo "<option>WATCH</option>";
echo "<option>THRESH</option>";
echo "<option>FISH</option>";
echo "<option>ASH</option>";
echo "</select>";
}

if(isset($_POST['show'])){
$show=$_POST['show'];
}else{
$show=5;
}
 ?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title></title>
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript">
var b=1
var y;

function hello(){ 
var nums=new Array();
var xx=new Array();
var x=new Array();
var str='';
document.getElementById('tableid').style.display="block";
var b=1
startCount1(); 
}

//start Time in seconds.
var z=4;
var zi=0;
function startCount1()
{
   document.getElementById('Text1').innerHTML=b
   if(b>9){ stopCount1();
   	document.getElementById('tableid').style.display="none";
   	document.getElementById('timeout').style.display="block";
   	}else{
    b=b+1
    y=setTimeout("startCount1()",1000);
    }
}

function stopCount1()
{   
    clearTimeout(y)
    document.getElementById('Text1').style.display="block";
}


function show(){
	for(var i=0;i<30;i++){
	document.getElementById(i).style.display="block";		
	}	
}
	
</script>

<style>

.td1 {
font-weight: bold; 
  font-size: 12pt;
  line-height: 14pt; 
  font-family: helvetica; 
  font-variant: normal;
  font-style: normal;
  color:white;
  width:25%;
  align:left;

 }

 .td2 {
font-weight: bold; 
  font-size: 12pt;
  line-height: 14pt; 
  font-family: helvetica; 
  font-variant: normal;
  font-style: normal;
  color:white;
  width:20%;
  align:left;

 }

.td3 {
width:20%;
 }
 
 .divclass{
 height:20px;
 widht:100px;
 
 }
 
.td4 {
  font-weight: bold; 
  font-size: 12pt;
  line-height: 14pt; 
  font-family: helvetica; 
  font-variant: normal;
  font-style: normal;
  color:white;
  width:40%;
  align:left;

 }
#showanswer{
  font-weight: bold; 
  font-size: 10pt;
  line-height: 14pt; 
  font-family: helvetica; 
  font-variant: normal;
  font-style: normal;
  color:white;
  align:left;
}
</style>

</head>
<body  bgcolor="#053650">
<?php 
for($j=1;$j<15;$j++) {
	$remnum[]=$j;
   }   
   ?>
      <form>
        <table width="500" cellpadding="4" cellspacing="10" style="border-right: #C1C1C1 1px solid; border-top: #C1C1C1 1px solid; border-bottom: #C1C1C1 1px solid; border-left: #C1C1C1 1px solid;">
            <tr>
	<td height="40" align="right" colspan="7">
	<a style="color:#FFFFFF; text-decoration:none" href="index.php" >BACK TO HOME</a>
	</td>
</tr>
			<tr>
            <td><table>
				<tr><?php for($i=0;$i<20;$i++) { ?>
          		 <td width="20" id="t<?php echo $i;?>"></td>
           		 <?php  } ?>
           </tr></table>
           
            </td>
                <td>
                     <div id="num" style="height:20px;"></div>
                </td>
            </tr>
           
            <tr><td  width="100%" >

<?php $c=0;
$date=$question;
$AnswerOf=$monthtag[$answer[$y][$m]][$d];
//foreach($DatesWithAns as $date=>$Answer){
?>
<table style="display:none;" width="100%" id='tableid' >
<tr>
<td class='td1'>
<?php echo $date; ?>
</td>
<td class='td2'>
<?php 
$Value_of_date_id='mynewid';
dropdown($Value_of_date_id); 
?>
</td>
<td class='td3'><div id='div<?php echo $Value_of_date_id; ?>' class='divclass'></div></td>
<td class='td4' >
<div id='p<?php echo $Value_of_date_id; ?>' style="display:none;" ><?php echo $AnswerOf;  ?></div>
<input type='hidden' value="<?php echo $AnswerOf;  ?>" id='ans<?php echo $Value_of_date_id; ?>' />
</td>
</tr>

 </table>
 </td></tr>
 <tr>
 <td colspan="4">
<div id='timeout' style="display:none;" > Time Out</div>
<div id='showanswer' style="display:none;" ><?php echo $date."=>".$AnswerOf;?></div>

</td></tr>
  <tr>
                <td colspan="2">
                    <input type="button" value="Start" onclick="hello()">
                    <input type="button" value="Stop" onclick="stopCount1()">
                    <input type='button' value='Answer' id='showans' />
                    <input type='button' value='Reload' id='reload' />
                    
                </td>
                <td><div id="Text1" style="display:block;"> </div></td>
            </tr>
        </table>
    </form>
</body>
</html>
<script type="text/javascript">

 $(document).ready(function(){

$("select").change(function () {
 var did=this.id;
var selans=$("#"+did).val();

var answer=$("#ans"+did).val();
//alert(selans+'=='+answer);
if(selans==answer){
$("#div"+did).css("background-color","green");
}else{
$("#div"+did).css("background-color","red");

}

stopCount1();

});

$('#showans').click(function() {

	$('#showanswer').show();

 });
 
 $('#reload').click(function() {

var url = "http://localhost/memo/calender/datewithtime.php";    
$(location).attr('href',url);


 });


}); 

</script>
