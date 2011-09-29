<?php 
include('connection.php');
$msg='';
if(isset($_POST['sumbityeartag'])){	
  $sql="INSERT INTO tagyear SET yearTag='".trim($_POST['yearTag'])."',note='".$_POST['yearTagNote']."',flag='1'";
	if(mysql_query($sql)){
	$msg='value saved';
	}
}


if(isset($_POST['sumbityeartag2'])){	
foreach($_POST['yearTag'] as $yr){
	if($yr!=''){
  	 $sql="INSERT INTO  yearvalue SET tagyearId='".trim($_POST['yearId'])."',year='".trim($yr)."',note='".$_POST['yearTagNote']."',flag='1'";
	if(mysql_query($sql)){
	$msg .='value saved'.$yr.'<br />';
		}
	}
  }		
}

$dropsql="SELECT * FROM tagyear";
$query = mysql_query($dropsql);
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Memory</title>
<script type="text/javascript" language="javascript" >
function checkanswer(){
var AnsIds = document.getElementById('asnwerIds').value;
//alert(AnsIds);
var AnsIdsInarray=AnsIds.split(",");
//alert(AnsIdsInarray.length)
	for(var i=0; i<AnsIdsInarray.length; i++){
	var input = document.getElementById(AnsIdsInarray[i]).value;
	var answer = document.getElementById('a'+AnsIdsInarray[i]).value;
		//alert(input.trim()+'=='+answer.trim());
		if(input.trim()==answer.trim()){ 
		document.getElementById(AnsIdsInarray[i]).style.background='#009900';
		}else{
		document.getElementById(AnsIdsInarray[i]).style.background='#FF0000';
		}
	}

}
String.prototype.trim = function() {
a = this.replace(/^\s+/, '');
return a.replace(/\s+$/, '');
};

</script>
</head>
<body bgcolor="#053650">
<table align="center" width="95%" cellspacing="10" style="font-family:'Times New Roman', Times, serif">
<tr>
	<td height="40" align="right" colspan="7">
	<a style="color:#FFFFFF; text-decoration:none" href="index.php" >BACK TO HOME</a>
	</td>
</tr>

<tr>
<td height="40" style="font-size:14px;" colspan="5"><?php echo $msg; ?></td>
</tr>
<form name="calenderTagYear" method="post" >
<tr>
<td height="40" style="font-size:14px;" colspan="5">
	<select name="year" style="width:200px;" onChange="this.form.submit();" >
	<option value="1">TAG YEAR </option>
	<?php 
	while($value=mysql_fetch_object($query)){
	$select='';
	$id=14;
	if($value->id==$id){$select='selected="selected"'; $name=$value->yearTag;}
	echo "<option value=".($value->id)." $select >".($value->yearTag)."</option>";	
	}
	?>
	</select>
</td>
</tr>
</form>
<?php 

//if(isset($_POST['year'])){
?>
<tr>
<td width="100%" align="left" colspan="2" style="padding-top:10px; ">
<form name="form1" method="post" >
<table align="left" width="100%" cellpadding="4">
<tr>
<td style="color:#FFFFFF; font-size:20px" align="center" width="30%">
<?php echo $name; ?>
<input type="hidden" value="<?php echo $id; ?>" name="yearId" />
</td>

</tr>
<tr>
<td style="color:#FFFFFF; font-size:20px" align="center" width="30%">
<input type="text" name="yearTag[]" >
</td>

</tr>
<tr>
<td style="color:#FFFFFF; font-size:20px" align="center" width="30%">
<input type="text" name="yearTag[]" >
</td>

</tr>
<tr>
<td style="color:#FFFFFF; font-size:20px" align="center" width="30%">
<input type="text" name="yearTag[]" >
</td>

</tr>
<tr>
<td style="color:#FFFFFF; font-size:20px" align="center" width="30%">
<input type="text" name="yearTag[]" >
</td>

</tr>
<tr>
<td style="color:#FFFFFF; font-size:20px" align="center" width="30%">
<input type="text" name="yearTag[]" >
</td>

</tr>
<tr>
<td style="color:#FFFFFF; font-size:20px" align="center" width="30%">
<input type="text" name="yearTag[]" >
</td>

</tr>
<tr>
<td style="color:#FFFFFF; font-size:20px" align="center" width="30%">
<textarea cols="15" rows="4" name="yearTagNote" ></textarea>
</td>

</tr>

<tr>
<td align="center" ><input type="submit" name="sumbityeartag2" value="submit" /></td>

</tr>

</table>
</form>

</td>
</tr>
<?php  /*
}else{
?>
<tr>
<td width="100%" align="left" colspan="2" style="padding-top:10px; ">
<form name="form2" method="post" >
<table align="left" width="100%" cellpadding="4">
<tr>
<td style="color:#FFFFFF; font-size:20px" align="center" width="30%">
<input type="text" name="yearTag" >
</td>

</tr>
<tr>
<td style="color:#FFFFFF; font-size:20px" align="center" width="30%">
<textarea cols="15" rows="4" name="yearTagNote" ></textarea>
</td>

</tr>

<tr>
<td align="center" ><input type="submit" name="sumbityeartag" value="submit" /></td>

</tr>

</table>
</form>

</td>
</tr>
<?php } */ ?>

</table>
</html>