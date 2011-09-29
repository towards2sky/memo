<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title></title>

<script type="text/javascript">
var b=0
var y;


function hello(){ 
    var nums=new Array();
    var xx=new Array();
    var x=new Array();
    var str='';
    for(var i=0; i<100;i++)
    { nums[i]=x++;   }
        
    var x=shuffle(nums);    
    for(var j=0;j<20;j++){
    	xx[j]=x[j];		    	
    	}
    	for(var a=0;a<20;a++){
    		document.getElementById('t'+a).innerHTML="<span id='"+a+"'>"+xx[a]+" </span>";
  	//	str=str+"<span id='"+a+"' style='height:20px;width:20px;' >"+xx[a]+" </span>";
    		}
 //  var str=xx.join(' ') 
//document.getElementById('num').innerHTML=str;   
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
   if(zi==19){ stopCount1();}
    	}
    	
    b=b+1
    y=setTimeout("startCount1()",1000);
}

function stopCount1()
{   
    clearTimeout(y)
    document.getElementById('Text1').style.display="block";
}

</script>

</head>
<body>
<?php 
for($j=1;$j<10;$j++) {
	$remnum[]=$j;
   }   
   ?>
      <form>
        <table width="550" cellpadding="4" cellspacing="10" style="border-right: #C1C1C1 1px solid; border-top: #C1C1C1 1px solid; border-bottom: #C1C1C1 1px solid; border-left: #C1C1C1 1px solid;">
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
            <tr>
                <td>
                    <input type="button" value="Start" onclick="hello()">
                    <input type="button" value="Stop" onclick="stopCount1()">
                </td>
                <td><div id="Text1" style="display:none;"></div></td>
            </tr>
        </table>
    </form>
</body>
</html>
