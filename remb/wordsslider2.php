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
				speed:2000,
				pause:3000,
				auto: false, 
				continuous: true
			
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
			
    /* image replacement */
        .graphic, #prevBtn, #nextBtn{
            margin:0;
            padding:0;
            display:block;
            overflow:hidden;
            text-indent:-8000px;
            }
    /* // image replacement */
			

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
	#slider ul, #slider li{
		margin:0;
		padding:0;
		list-style:none;
		}
	#slider li{ 
		/* 
			define width and height of list item (slide)
			entire slider area will adjust according to the parameters provided here
		*/ 
		width:696px;
		height:241px;
		overflow:hidden; 
		}	
	#prevBtn, #nextBtn{ 
		display:block;
		width:30px;
		height:77px;
		position:absolute;
		left:-30px;
		top:71px;
		}	
	#nextBtn{ 
		left:696px;
		}														
	#prevBtn a, #nextBtn a{  
		display:block;
		width:30px;
		height:77px;
		background:url(images/btn_prev.gif) no-repeat 0 0;	
		}	
	#nextBtn a{ 
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
					<?php $j=0;  foreach($stor as $word){ $j++; if($j>10){break;} ?>			
				<li style="padding-top:<?php echo (15+$l); ?>px;"><p style="font-size:<?php echo (120-$l*10); ?>px;" align="center" >
				<span><?php echo $word; ?></span>
				<?php for($i=0;$i<$l;$i++){ $k=rand(0,99); ?>
				<span style="color:#B4B4B4"><?php echo $w[$k]; ?></span>
				<?php } ?>
				</p></li>		
					<?php  } ?>	
			<li style="padding-top:20px;"><p style="font-size:120px;" align="center" >End</p></li>			
			</ul>
		</div>
	

	</div>

</div>
<div id="header">
		
		<a href="wordsslider2.php?l=<?php echo ++$l; ?>" ><p style="font-size:30px; padding-top:20px; color:#000000" align="center" >Next Level</p></a>
	</div>


</body>
</html>