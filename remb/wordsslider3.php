<?php 
if(isset($_GET['l']) and $_GET['l']>0){
$l=$_GET['l'];
}else{
$l=2;
}

for($x=1;$x<=100;$x++){
	$stor[] =$x;
}
shuffle($stor);

for($y=1;$y<=100;$y++){
	$w[] =$y;
}
shuffle($w);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Memorise words</title>
	<meta http-equiv="content-type" content="text/html;charset=UTF-8" />    
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/easySlider1.5.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){	
			$("#slider").easySlider({
				controlsBefore:	'<p id="controls">',
				controlsAfter:	'</p>',
				auto: true, 
				continuous: true
			});
			$("#slider2").easySlider({
				controlsBefore:	'<p id="controls2">',
				controlsAfter:	'</p>',		
				prevId: 'prevBtn2',
				nextId: 'nextBtn2'	
			});			
		});	
	</script>
	
<style type="text/css">

	body {
		background:#fff url(images/bg_body.gif) repeat-x;
		font:80% Trebuchet MS, Arial, Helvetica, Sans-Serif;
		color:#333;
		line-height:180%;
		margin:0;
		padding:0;
		text-align:center;
	}
	h1{
		font-size:180%;
		font-weight:normal;
		margin:0;
		padding:20px;
		}
	h2{
		font-size:160%;
		font-weight:normal;
		}	
	h3{
		font-size:140%;
		font-weight:normal;
		}	
	img{border:none;}
	pre{
		display:block;
		font:12px "Courier New", Courier, monospace;
		padding:10px;
		border:1px solid #bae2f0;
		background:#e3f4f9;	
		margin:.5em 0;
		width:674px;
		}	

	#container{	
		margin:0 auto;
		position:relative;
		text-align:left;
		width:696px;
		background:#fff;		
		margin-bottom:2em;
		}	
	#header{
		height:80px;
		background:#5DC9E1;
		color:#fff;
		}				
	#content{
		position:relative;
		}			

/* Easy Slider */

	#slider{}	
	#slider ul, #slider li, #slider2 ul, #slider2 li{
		margin:0;
		padding:0;
		list-style:none;
		}
	#slider li, #slider2 li{ 
		/* 
			define width and height of list item (slide)
			entire slider area will adjust according to the parameters provided here
		*/ 
		width:696px;
		height:241px;
		overflow:hidden; 
		}	

	#slider2 li{ 
		background:#f1f1f1;
		}		
	#slider2 li h2{ 
		margin:0 20px;
		padding-top:20px;
		}	
	#slider2 li p{ 
		margin:20px;
		padding-top:70px;
		}						
		
	p#controls, p#controls2{
		margin:0;
		position:relative;
		} 
	
	#prevBtn, #nextBtn, #prevBtn2, #nextBtn2{ 
		display:block;
		margin:0;
		overflow:hidden;
		text-indent:-8000px;		
		width:30px;
		height:77px;
		position:absolute;
		left:-30px;
		top:-160px;
		}	
	#nextBtn, #nextBtn2{ 
		left:696px;
		}														
	#prevBtn a, #nextBtn a, #prevBtn2 a, #nextBtn2 a{  
		display:block;
		width:30px;
		height:77px;
		background:url(images/btn_prev.gif) no-repeat 0 0;	
		}	
	#nextBtn a, #nextBtn2 a{ 
		background:url(images/btn_next.gif) no-repeat 0 0;	
		}												

/* // Easy Slider */

</style>	

</head>
<body>

<div id="container">

	<div id="header">
		<h1>Memorise words with Grate imagening</h1>
	</div>

	<div id="content">
	
		<div id="slider">
			<ul>				
				<li><p style="font-size:120px;" align="center" >Start</p></li>	
				<?php $j=0;  foreach($stor as $word){  ?>			
				<li><p style="font-size:120px;" align="center" >
				<span><?php echo $word; ?></span>
				</p></li>		
				<?php  } ?>	
				<li><p style="font-size:120px;" align="center" >End</p></li>		
			</ul>
		</div>
		
		
		<div id="slider2">
			<ul>				
				<ul>				
				<li><p style="font-size:120px;" align="center" >Start</p></li>	
					<?php $j=0;  foreach($stor as $word){ ?>			
				<li><p style="font-size:120px;" align="center" >
				<span><?php echo $word; ?></span>
				<?php for($i=0;$i<$l;$i++){ $k=rand(0,99); ?>
				<span style="color:#B4B4B4"><?php echo $w[$k]; ?></span>
				<?php } ?>
				</p></li>		
					<?php  } ?>	
			<li><p style="font-size:120px; color:#B4B4B4" align="center" >End</p></li>
			</ul>
			</ul>
		</div>
</div>

</body>
</html>