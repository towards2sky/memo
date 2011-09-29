

	<link rel="Stylesheet" type="text/css" href="inc/examples.css">
	<script type="text/javascript" src="inc/jquery-1.js"></script>
	<script type="text/javascript" src="inc/jquery.js"></script>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

	<script type="text/javascript" src="inc/shCore.js"></script>
	<script type="text/javascript" src="inc/shBrushJScript.js"></script>
	<link href="inc/shCore.css" rel="stylesheet" type="text/css">
	<link type="text/css" rel="Stylesheet" href="inc/shThemeDjango.css">	

	<link rel="stylesheet" type="text/css" href="inc/example_start_stop.css">
	
	
	
	
	<title>Javascript CountDown examples - little web things</title>
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
		<div class="start_content"></div>

		
		<!-- example start/stop -->
		<div class="example_pane">		
			<div id="countdown_dashboard" style="padding-left:200px;">
<!--				<div class="dash weeks_dash">
				
					<span class="dash_title">weeks</span>
					<div class="digit"><div style="display: none;" class="top">0</div><div style="display: block;" class="bottom">0</div></div>
					<div class="digit"><div style="display: none;" class="top">4</div><div style="display: block;" class="bottom">4</div></div>
				</div>

				<div class="dash days_dash">
					<span class="dash_title">days</span>
					<div class="digit"><div style="display: none;" class="top">0</div><div style="display: block;" class="bottom">0</div></div>
					<div class="digit"><div style="display: none;" class="top">4</div><div style="display: block;" class="bottom">4</div></div>
				</div>

				<div class="dash hours_dash">
					<span class="dash_title">hours</span>
					<div class="digit"><div style="display: none;" class="top">0</div><div style="display: block;" class="bottom">0</div></div>
					<div class="digit"><div style="display: none;" class="top">1</div><div style="display: block;" class="bottom">1</div></div>
				</div>-->

				<div class="dash minutes_dash">
					<span class="dash_title">minutes</span>
					<div class="digit"><div style="display: none;" class="top">0</div><div style="display: block;" class="bottom">0</div></div>
					<div class="digit"><div style="display: none;" class="top">0</div><div style="display: block;" class="bottom">0</div></div>
				</div>

				<div class="dash seconds_dash">
					<span class="dash_title">seconds</span>
					<div class="digit"><div style="display: none;" class="top">3</div><div style="display: block;" class="bottom">3</div></div>
					<div class="digit"><div style="display: block; overflow: hidden; height: 19.242px; margin-top: 0px; margin-bottom: 0px; padding-top: 0px; padding-bottom: 0px;" class="top">1</div><div style="display: block; overflow: hidden; height: 4.13488px;" class="bottom">2</div></div>
				</div>
			</div>

			<div class="countdown_controls">
				<button onClick="stop()">stop</button>
				<button onClick="start()">start</button>
				<button onClick="reset()">reset</button>
			</div>

			<script language="javascript" type="text/javascript">
				// Set the Countdown
				jQuery(document).ready(function() {
					$('#countdown_dashboard').countDown({
						targetOffset: {
							'day': 		1,
							'month': 	1,
							'year': 	0,
							'hour': 	1,
							'min': 		5,
							'sec': 		1
						}
					});
					$('#countdown_dashboard').stopCountDown();
				});

				// Stop countdown
				function stop() {
					$('#countdown_dashboard').stopCountDown();
				}

				// Start countdown
				function start() {
					$('#countdown_dashboard').startCountDown();
				}

				// reset and start
				function reset() {
					$('#countdown_dashboard').stopCountDown();
					$('#countdown_dashboard').setCountDown({
						targetOffset: {
							'day': 		1,
							'month': 	1,
							'year': 	0,
							'hour': 	1,
							'min': 		1,
							'sec': 		1
						}
					});				
					$('#countdown_dashboard').startCountDown();
				}
			</script>
		</div>
		<!-- END example start/stop -->
		


<script type="text/javascript">
	SyntaxHighlighter.all()
</script>

		<div class="footer">
			
		</div>

	</div>
<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));

</script><script src="inc/ga.js" type="text/javascript"></script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-289748-9");
pageTracker._trackPageview();
} catch(err) {}</script>


<?php
for($x=1;$x<=100;$x++){
	$r[] =$x;
}
shuffle($r);
$i=0;
$saperater='&nbsp;&nbsp;';
$t=5+(5*($level-1));
?>
<form name="form1" action="run.php">
<table align="center" width="100%">
<tr><td align="center" width="100%" style="color:#FFFFFF; font-size:20px;"><h2>Total Number: 75</h2><br /><br /><div id="countdown" ></div></td></tr>

<?php //code here 
?>


</body></html>