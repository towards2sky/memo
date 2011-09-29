<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<link rel="Stylesheet" type="text/css" href="style/examples.css"></link>
	<script type="text/javascript" src="js/jquery-1.4.1.js"></script>
	<script type="text/javascript" src="js/jquery.lwtCountdown-1.0.js"></script>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

	<script type="text/javascript" src="syntaxhighlight/src/shCore.js"></script>

	<script  type="text/javascript" src="syntaxhighlight/scripts/shBrushJScript.js"></script>
	<link href="1.css" rel="stylesheet" type="text/css" />
	<link type="text/css" rel="Stylesheet" href="2.css"/>	

	<link rel="stylesheet" type="text/css" href="style/3.css"></link>
	
	<title>Javascript CountDown examples - little web things</title>
</head>

<body>

	<div id="examples_container">

		<div class="header">
			<div class="project_title">
				<h1>CountDown</h1>
				<h2 class="subtitle">jQuery plugin</h2>
				<div class="projects_note">a <a href="http://www.littlewebthings.com">littlewebthings</a> project</div>
			</div>

			<div class="example_title">
				<h1>Ways to set the countdown</h1>
			</div>
			<div class="back_link">
				<a href="index.php">&laquo; back to main page</a>
			</div>
			<br style="clear: both;" />		
		</div>

		<div class="start_content"></div>

		
		<!-- example start/stop -->
		<div class="example_pane">		
			<div id="countdown_dashboard">
				<div class="dash weeks_dash">
					<span class="dash_title">weeks</span>
					<div class="digit">0</div>
					<div class="digit">0</div>

				</div>

				<div class="dash days_dash">
					<span class="dash_title">days</span>
					<div class="digit">0</div>
					<div class="digit">0</div>
				</div>

				<div class="dash hours_dash">
					<span class="dash_title">hours</span>
					<div class="digit">0</div>
					<div class="digit">0</div>
				</div>

				<div class="dash minutes_dash">
					<span class="dash_title">minutes</span>

					<div class="digit">0</div>
					<div class="digit">0</div>
				</div>

				<div class="dash seconds_dash">
					<span class="dash_title">seconds</span>
					<div class="digit">0</div>

					<div class="digit">0</div>
				</div>
			</div>

			<div class="countdown_controls">
				<button onclick="set_by_date()">set_by_date()</button>
				<button onclick="set_by_offset()">set_by_offset()</button>
			</div>

			<script language="javascript" type="text/javascript">
				// Initiate Countdown
				jQuery(document).ready(function() {
					$('#countdown_dashboard').countDown({
						targetOffset: {
							'day': 		0,
							'month': 	0,
							'year': 	0,
							'hour': 	0,
							'min': 		0,
							'sec': 		0
						}
					});
				});
				
				// Set by specific date/time
				function set_by_date() {
					$('#countdown_dashboard').stopCountDown();
					$('#countdown_dashboard').setCountDown({
						targetDate: {
							'day': 		15,
							'month': 	1,
							'year': 	2011,
							'hour': 	12,
							'min': 		0,
							'sec': 		0
						}
					});
					$('#countdown_dashboard').startCountDown();
				}

				// Set by date/time offset
				function set_by_offset() {
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
	

		<pre class="brush: js">	
				// Initiate Countdown
				jQuery(document).ready(function() {
					$('#countdown_dashboard').countDown({
						targetOffset: {
							'day': 		0,
							'month': 	0,
							'year': 	0,
							'hour': 	0,
							'min': 		0,
							'sec': 		0
						}
					});
				});
				
				// Set by specific date/time
				function set_by_date() {
					$('#countdown_dashboard').stopCountDown();
					$('#countdown_dashboard').setCountDown({
						targetDate: {
							'day': 		15,
							'month': 	1,
							'year': 	2011,
							'hour': 	12,
							'min': 		0,
							'sec': 		0
						}
					});
					$('#countdown_dashboard').startCountDown();
				}

				// Set by date/time offset
				function set_by_offset() {
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
		</pre>


<script type="text/javascript">
	SyntaxHighlighter.all()
</script>

		<div class="footer">

			<a href="http://www.littlewebthings.com">littlewebthings.com</a> &copy 2010
		</div>

	</div>
<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));

</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-289748-9");
pageTracker._trackPageview();
} catch(err) {}</script>

</body>

</html>

