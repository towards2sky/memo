<?php 
if(isset($_GET['l']) and $_GET['l']>0){
$l=$_GET['l'];
}else{
$l=2;
}

if(isset($_GET['t']) and $_GET['t']>0){
$t=$_GET['t'];
}else{
$t=5;
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
				speed:2000,
				pause:5000,
				auto: true, 
				continuous: true
			});
					
		});	
	</script>
	
<style type="text/css">

	body {
		background:#053650;
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

	#slider{ background:#CCCCCC}	
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
			<li style="padding-top:10px;"><p style="font-size:<?php echo (120-$l*10); ?>px;" align="center" >Start</p></li>	
					<?php $j=0;  foreach($stor as $word){ $j++; if($j>$t){break;} ?>			
				<li style="padding-top:<?php echo (15+$l); ?>px;"><p style="font-size:<?php echo (120-$l*10); ?>px;" align="center" >
				<span><?php echo $word; ?></span>
				<?php for($i=0;$i<$l;$i++){ $k=rand(0,99); ?>
				<span><?php echo $w[$k]; ?></span>
				<?php } ?>
				</p></li>	
				<li></li>	
				<li></li>	
					<?php  } ?>	
			<li style="padding-top:20px;"><p style="font-size:120px;" align="center" >End</p></li>			
			</ul>
		</div>
		
		
		
</div>
<div id="header">
		
		<a href="wordsslider4.php?l=<?php echo ++$l; ?>" ><p style="font-size:30px; padding-top:20px; color:#000000" align="center" >Next Level</p></a>
	</div>

</body>
</html>