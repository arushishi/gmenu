<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<style type="text/css">
			body {font:12px/1.4 Verdana,Arial; background:#eee; height:100%; margin:25px 0; padding:0}
			h1 {font:30px 'Trebuchet MS',Verdana; margin:0}
			h2 {font-size:12px; font-weight:normal; font-style:italic}
			p {margin:0 0 14px}
			ul {margin:0; padding-left:20px}
			#testdiv {width:600px; margin:25px auto; border:1px solid #ccc; padding:20px 25px 12px; background:#fff}
			ul {list-style:none; margin-bottom:12px; padding:0}
			li {font:14px Georgia,Verdana; margin-bottom:4px; padding:8px 10px 9px; border:1px solid #ccc; background:#eee; cursor:pointer}
			li:hover {border:1px solid #bbb; background:#e3e3e3}

			.tbox {position:absolute; display:none; padding:14px 17px; z-index:900}
			.tinner {padding:15px; -moz-border-radius:5px; border-radius:5px; background:#fff url(images/preload.gif) no-repeat 50% 50%; border-right:1px solid #333; border-bottom:1px solid #333}
			.tmask {position:absolute; display:none; top:0px; left:0px; height:100%; width:100%; background:#000; z-index:800}
			.tclose {position:absolute; top:0px; right:0px; width:30px; height:30px; cursor:pointer; background:url(images/close.png) no-repeat}
			.tclose:hover {background-position:0 -30px}

			#error {background:#ff6969; color:#fff; text-shadow:1px 1px #cf5454; border-right:1px solid #000; border-bottom:1px solid #000; padding:0}
			#error .tcontent {padding:10px 14px 11px; border:1px solid #ffb8b8; -moz-border-radius:5px; border-radius:5px}
			#success {background:#2ea125; color:#fff; text-shadow:1px 1px #1b6116; border-right:1px solid #000; border-bottom:1px solid #000; padding:10; -moz-border-radius:0; border-radius:0}
			#bluemask {background:#4195aa}
			#frameless {padding:0}
			#frameless .tclose {left:6px}
		</style>
		<?php
		echo Asset::js(array(
			'http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js',
			'bootstrap.js',
			'tinybox.js',
		));
		?>
	</head>
	<body>

		<div id="testdiv">
			<button onclick="TINY.box.ordinary('../image/index')">Ajax, Advanced Functions</button>
		</div>
	</body>
</html>
