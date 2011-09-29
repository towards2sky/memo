<?php
include('connection.php');

for($m=1;$m<12;$m++){
$month[]=$m;
}

for($d=1;$d<31;$d++){
$day[]=$d;
}

for($y=1900;$y<2030;$y++){
$year[]=$y;
}

for($i=1;$i<50;$i++){

$mk=array_rand($month);
$dk=array_rand($day);
$yk=array_rand($year);

$m=$month[$mk];
$d=$day[$dk];
$y=$year[$yk];

		if(checkdate($m, $d, $y)){
		
		$sql=mysql_query("SELECT ty.yearTag FROM yearvalue AS yv JOIN tagyear AS ty ON ty.id=yv.tagyearId WHERE yv.year='$y'");
		$obj=mysql_fetch_object($sql);
		$d=$d.'-'.$m.'-'.$obj->yearTag;
		//$d=$d.'-'.$m.'-'.$y;
		@$DatesWithAns[$d]=date("l", mktime(0, 0, 0,$m, $d, $y));
		}
}

//echo  date("l", mktime($time));

function dropdown($id){

echo "<select id='$id'>";
echo "<option>SELECT</option>";
echo "<option>Sunday</option>";
echo "<option>Monday</option>";
echo "<option>Tuesday</option>";
echo "<option>Wednesday</option>";
echo "<option>Thursday</option>";
echo "<option>Friday</option>";
echo "<option>Saturday</option>";
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
    	
    //	for(var a=0;a<15;a++){
    	//	document.getElementById('t'+a).innerHTML="<span id='"+a+"'>"+xx[a]+" </span>";
  	//	str=str+"<span id='"+a+"' style='height:20px;width:20px;' >"+xx[a]+" </span>";
    		//}
 //  var str=xx.join(' ') 
//document.getElementById('num').innerHTML=str;   
var b=1
startCount1(); 
    }

//start Time in seconds.



var z=4;
var zi=0;

function startCount1()
{  
   document.getElementById('Text1').innerHTML=b
   if(b>20){ stopCount1();
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

</style>

</head>
<body  bgcolor="#053650">
<?php 
for($j=1;$j<15;$j++) {
	$remnum[]=$j;
   }   
   ?>
      <form>
        <table width="700" cellpadding="4" cellspacing="10" style="border-right: #C1C1C1 1px solid; border-top: #C1C1C1 1px solid; border-bottom: #C1C1C1 1px solid; border-left: #C1C1C1 1px solid;">
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
$date=array_rand($DatesWithAns);
$Answer=$DatesWithAns[$date];

//foreach($DatesWithAns as $date=>$Answer){

 ?>
<table style="display:none;" width="100%" id='tableid' >
<tr>
<td class='td1'>
<?php echo $date; ?>
</td>
<td class='td2'>
<?php dropdown($date); ?>
</td>
<td class='td3'><div id='div<?php echo $date; ?>' class='divclass'></div></td>
<td class='td4' >
<div id='p<?php echo $date; ?>' style="display:none;" ><?php echo $Answer;  ?></div>
<input type='hidden' value="<?php echo $Answer;  ?>" id='ans<?php echo $date; ?>' />
</td>
</tr>
<?php 
 //} ?>
 </table>
 </td></tr>
 <tr>
 <td colspan="4">
<div id='timeout' style="display:none;" > Time Out</div>
<div id='showanswer' style="display:none;" ><?php echo $Answer;?></div>

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

	var url = "http://localhost/calender/datewithtime.php";    
$(location).attr('href',url);


 });


}); 

</script>
