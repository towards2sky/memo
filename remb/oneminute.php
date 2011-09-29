<?php 
if(isset($_GET['l'])){
$loop=(20+$_GET['l']*5);
$nextlabel=$_GET['l']+1;
}else{
$loop=25;
$nextlabel=1;
}


?>
	
	<link rel="Stylesheet" type="text/css" href="inc/examples.css">
	<script type="text/javascript" src="inc/jquery-1.js"></script>
	<script type="text/javascript" src="inc/jquery.js"></script>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

	<script type="text/javascript" src="inc/shCore.js"></script>
	<script type="text/javascript" src="inc/shBrushJScript.js"></script>
	<link href="inc/shCore.css" rel="stylesheet" type="text/css">
	<link type="text/css" rel="Stylesheet" href="inc/shThemeDjango.css">	

	<link rel="stylesheet" type="text/css" href="inc/example_start_stop.css">
	
	
	<script type="text/javascript">
var b=0
var y;

var loop =<?php echo $loop; ?>;

function hello(){ 
    var nums=new Array();
    var xx=new Array();
    var x=new Array();
	var value=1;
    var str='';
    for(var i=0; i<100;i++)
    { nums[i]=value++;   }
        
    var x=shuffle(nums);    
    for(var j=0;j<loop;j++){
    	xx[j]=x[j];		    	
    	}
    	for(var a=0;a<loop;a++){
    		document.getElementById('t'+a).innerHTML="<span id='"+a+"'>"+xx[a]+"&nbsp;&nbsp;</span>";
  	//	str=str+"<span id='"+a+"' style='height:20px;width:20px;' >"+xx[a]+" </span>";
    		}  
var b=0
startCount1(); 

    }


shuffle = function(o){
	for(var j, x, i = o.length; i; j = parseInt(Math.random() * i), x = o[--i], o[i] = o[j], o[j] = x);
	return o;
};
    
// start Time in seconds .
var z=4;
var zi=0;
function startCount1()
{  
    document.getElementById('Text1').innerHTML=b
   if(z==b){
	document.getElementById(zi).style.display="none";
   z=z+3; 	
   zi++;
   if(zi>(loop-1)){ stopCount1();}
    	}
    	
    b=b+1
    y=setTimeout("startCount1()",1000);
}

function stopCount1()
{   
    clearTimeout(y)
    document.getElementById('Text1').style.display="block";
}


function showall(){
	for(var z=0;z<loop;z++){
	document.getElementById(z).style.display="block";
	}

}
</script>
	<title>Just a minutes</title>
</head><body>

	<div id="examples_container">
		<div class="header">
			<div class="project_title">
				<br/>
				<h1 class="example_title" style="width:300px;">You can do it.</h1>
			</div>

			<div class="example_title">
				<h1>Magic of Brain.</h1>
			</div>
			
			<br style="clear: both;">		
		</div>
		<div id="Text1" align="right" style="width:400px; height:25px; display:none;">&nbsp;</div>
		<div class="start_content"></div>

		<!-- example start/stop -->
		<table width="100%" height="80" cellpadding="4" cellspacing="10" style="border: #FFFFFF 2px solid;">
            <tr>
            <td align="center" valign="middle">
			<table >
				<tr><?php for($i=0;$i<$loop;$i++) { ?>
          		 <td width="30" id="t<?php echo $i;?>" style="color:#FFFFFF;font-weight:bold; font-size:16px;"></td>
           		 <?php  } ?>
           </tr></table>
           
        </table>
		<table align="center">
		<tr>
                <td align="center" style="padding-top:10px; padding-right:100px;">
                    <input type="button" value="Start" onClick="hello()">
                    <input type="button" value="Stop" onClick="stopCount1()">
					<input type="button" value="Show" onClick="showall()">
                </td>
		</tr>
		<!--<tr>
			<td><a href="oneminute.php?l=<?//php echo $nextlabel; ?>">Next</a>  </td>
		</tr>-->		
		</table>

		<!-- END example start/stop -->

</body></html>