<?php 
include('connection.php');
for($m=1;$m<12;$m++){
$month[]=$m;
}

for($d=1;$d<31;$d++){
$day[]=$d;
}

for($y=1900;$y<=2030;$y++){
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
	

	$d=$d.'-'.$m.'-'.$y;
		
	@$DatesWithAns[$d]=date("l", mktime(0, 0, 0,$m, $d, $y));
		}
}
//echo '<pre>';
//print_r($DatesWithAns);
//29-4-2059
//echo  date("l", mktime(0, 0, 0,11, 29, 2059));
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
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>
<title>Memory</title>
<script type="text/javascript" src="jquery.js"></script>

<style>

.td1 {
font-weight: bold; 
  font-size: 12pt;
  line-height: 14pt; 
  font-family: helvetica; 
  font-variant: normal;
  font-style: normal;
  color:white;
  width:15%;
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
  width:15%;
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
  width:50%;
  align:left;

 }

</style>

</head>
<body bgcolor="#053650">
<table align="center" width="95%" cellspacing="10" style="font-family:'Times New Roman', Times, serif">
<tr>
	<td height="40" align="right" colspan="7">
	<a style="color:#FFFFFF; text-decoration:none" href="index.php" >BACK TO HOME</a>
	</td>
</tr>
<form name="calenderprect" method="post" >
<tr>
	<td height="40" align="right" colspan="4">
	<select name="show" onchange="this.form.submit();">
	<?php for($j=1;$j<5;$j++){ $v=$j*5;
	$select='';
	if($show==$v){$select='SELECTED';}
	?>
	<option <?php echo $select; ?>><?php echo $v; ?></option>
	<?php } ?>
	</select>
	</td>
</tr> </form>

<?php $c=0;
foreach($DatesWithAns as $date=>$Answer){
$c++;
if($c > $show){break;}
 ?>
<tr>
<td class='td1'>
<?php echo $date; ?>
</td>
<td class='td2'>
<?php dropdown($date); ?>
<input type='button' value='Show' id='<?php echo $date; ?>' />
</td>
<td class='td3'><div id='div<?php echo $date; ?>' class='divclass'></div></td>
<td class='td4' >
<div id='p<?php echo $date; ?>' style="display:none;" ><?php echo $Answer;  ?></div>
<input type='hidden' value="<?php echo $Answer;  ?>" id='ans<?php echo $date; ?>' />
</td>
</tr>
<?php 
 } ?>
 
 <form name="calenderprect" method="post" >
<tr>
	<td height="40" align="center" colspan="4">
	<input type='hidden' name='show' value='<?php echo $show; ?>' />
	<input type='submit' value='Reload' />
	</td>
</tr> </form>

</table>
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

});

$('input').click(function() {

var id=this.id; 
$('#p'+id).show();

 });

}); 

</script>