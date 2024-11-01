<?php
	header('Content-type: text/css');
	
	$fontFamily=$_GET['fontFamily'];
?>
body a.strx-zurb-css3-awesome, body a.strx-zurb-css3-awesome:visited {
	/*background: #222 url(../img/alert-overlay.png) repeat-x;*/
	background: #222 url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAAyCAYAAACd+7GKAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAClJREFUeNpi/v//vwMTAwPDfzjBgMpFI/7hFSOT9Y8qRuF3JLoHAQIMAHYtMmRA+CugAAAAAElFTkSuQmCC") repeat-x;

	<?php if (!empty($fontFamily)){
		echo "font-family: $fontFamily;";
	}?>

	display: inline-block;
	padding: 5px 10px 6px;

	margin: 0 2px;
	
	color: #fff;
	text-decoration: none;
	-moz-border-radius: 5px;
	-webkit-border-radius: 5px;
	-moz-box-shadow: 0 1px 3px rgba(0,0,0,0.5);
	-webkit-box-shadow: 0 1px 3px rgba(0,0,0,0.5);
	text-shadow: 0 -1px 1px rgba(0,0,0,0.25);
	border-bottom: 1px solid rgba(0,0,0,0.25);
	position: relative;
	cursor: pointer;

	-moz-user-select: none;
	-webkit-user-select:none;
	-khtml-user-select: none;
	user-select: none;
}

body a.strx-zurb-css3-awesome:hover							{ background-color: #111; color: #fff; }
body a.strx-zurb-css3-awesome:active							{ top: 1px; }
body a.small.strx-zurb-css3-awesome, body a.small.strx-zurb-css3-awesome:visited 			{ font-size: 11px; padding: 3px 8px 4px; }
body a.strx-zurb-css3-awesome, body a.strx-zurb-css3-awesome:visited,
body a.medium.strx-zurb-css3-awesome, body a.medium.strx-zurb-css3-awesome:visited 		{ font-size: 13px; font-weight: bold; line-height: 1; text-shadow: 0 -1px 1px rgba(0,0,0,0.25); }
body a.large.strx-zurb-css3-awesome, body a.large.strx-zurb-css3-awesome:visited 			{ font-size: 14px; padding: 8px 14px 9px; }
body a.xlarge.strx-zurb-css3-awesome, body a.xlarge.strx-zurb-css3-awesome:visited 			{ font-size: 16px; padding: 10px 16px 11px; }

body a.green.strx-zurb-css3-awesome, body a.green.strx-zurb-css3-awesome:visited		{ background-color: #91bd09; }
body a.green.strx-zurb-css3-awesome:hover						{ background-color: #749a02; }
body a.blue.strx-zurb-css3-awesome, body a.blue.strx-zurb-css3-awesome:visited		{ background-color: #2daebf; }
body a.blue.strx-zurb-css3-awesome:hover							{ background-color: #007d9a; }
body a.red.strx-zurb-css3-awesome, body a.red.strx-zurb-css3-awesome:visited			{ background-color: #e33100; }
body a.red.strx-zurb-css3-awesome:hover							{ background-color: #872300; }
body a.magenta.strx-zurb-css3-awesome, body a.magenta.strx-zurb-css3-awesome:visited		{ background-color: #a9014b; }
body a.magenta.strx-zurb-css3-awesome:hover							{ background-color: #630030; }
body a.orange.strx-zurb-css3-awesome, body a.orange.strx-zurb-css3-awesome:visited		{ background-color: #ff5c00; }
body a.orange.strx-zurb-css3-awesome:hover							{ background-color: #d45500; }
body a.yellow.strx-zurb-css3-awesome, body a.yellow.strx-zurb-css3-awesome:visited		{ background-color: #ffb515; }
body a.yellow.strx-zurb-css3-awesome:hover							{ background-color: #fc9200; }
