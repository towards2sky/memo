<?php 
include('connection.php');
$msg='';
if(isset($_POST['add'])){	
  $sql="INSERT INTO calenderyear SET newtagyearid='".trim($_POST['GROUPYEAR'])."',century='".trim($_POST['CENTURY'])."',celtype='".trim($_POST['YEARTYPE'])."'";
	if(mysql_query($sql)){
	$msg='value saved';
	}
}

$calenderyearsql="SELECT * FROM calenderyear";
$calobj = mysql_query($calenderyearsql);
	while($obj=mysql_fetch_object($calobj)){
	
	$calender[trim($obj->newtagyearid)][trim($obj->century)]=trim($obj->celtype);
	}
echo '<pre>';
//print_r($calender);
//echo $sql="INSERT INTO calenderyear SET newtagyearid='".trim($_POST['GROUPYEAR'])."',century='".trim($_POST['CENTURY'])."',celtype='".trim($_POST['YEARTYPE'])."'";
echo '</pre>';
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
<style >
.year{
color:#FFFFFF;
font-weight: bolder;
width:100px;
}
.group{
color:#FFFFFF;
font-weight: bolder;
width:100px; 	
}

.containtable{
table cellspacing:10;
table cellpadding:10;
border:2;
}
</style>
</head>
<body bgcolor="#053650">
<table align="center" width="95%" cellspacing="4" style="font-family:'Times New Roman', Times, serif">
<tr>
	<td height="40" align="right" colspan="4">
	<a style="color:#FFFFFF; text-decoration:none" href="index.php" >BACK TO HOME</a>
	</td>
</tr>


<form name="calenderTagYear" method="post" >
<tr>
<td height="40" style="font-size:14px;" width="10%">
	<select name="GROUPYEAR">
	<option value="0">GROUP YEAR </option>
	<?php 
$tagyearsql="SELECT * FROM newtagyear";
$tagyearres = mysql_query($tagyearsql);
	while($obj=mysql_fetch_object($tagyearres)){
	$select='';
	$id=0;
	//if($obj->tagid==$id){$select='selected="selected"'; $name=$obj->tagid;}
	echo "<option value=".($obj->tagid)." >".($obj->tagid)."</option>";	
	}
	?>
	</select>
</td>
<td width="10%">
	<select name="CENTURY">
	<option value="0">CENTURY</option>
	<?php
	for($i=15;$i<26;$i++){
	echo "<option value=".($i)." >".($i)."</option>";	
	}
	?>
	</select>
</td>
<td height="40" style="font-size:14px;"  width="10%" >
	<select name="YEARTYPE">
	<option value="0">YEAR TYPE</option>
	<?php 
	$dropsql="SELECT * FROM tagyear";
$query = mysql_query($dropsql);
	while($value=mysql_fetch_object($query)){
	$select='';
	$id=0;
	//if($value->yearTag==$id){$select='selected="selected"'; $name=$value->yearTag;}
	echo "<option value=".($value->yearTag)." >".($value->yearTag)."</option>";	
	}
	?>
	</select>
</td>
<td width="70%"><input type='submit' name='add' value='Add Year'/></td>
</tr>
</form>
<tr><td colspan="4">
<table width='95%' border='2' class='containtable' cellpadding="5" cellspacing="2">
<tr>
<td class='group' ><strong>Group </strong></td>
<?php for($i=15;$i<26;$i++){ ?>
<td class='year' ><strong><?php echo $i; ?></strong></td>
<?php  } ?>
</tr>

<?php 
	$sql=mysql_query("SELECT * FROM newtagyear");
	while($obj=mysql_fetch_object($sql)){
	?>
	<tr>
	<td  style="color:#FFFFFF;"><strong><?php echo $obj->tagid; ?></strong></td>
	
<?php for($i=15;$i<26;$i++){ ?>
<td style="color:#FFFFFF;" ><strong><?php if(isset($calender[$obj->tagid][$i])){echo $calender[$obj->tagid][$i]; } ?></strong></td>
<?php  } ?>
	</tr>
	<?php
	}
?>
</table>
</td></tr>

</table>
</html>