<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Welcome to OpenShift</title>
  <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

<style>
body {
	margin:0;
	padding:0 20px;
	background-color:rgba(0,0,0,0.9);
	color:white;
	font-family: 'Open Sans', sans-serif;
}
#the_page {
	height:100%;
	width:100%;
	position: fixed;
	background-color:white;
	margin-left:-20px;
	-webkit-animation: display_page 2s ease;
	animation: display_page 2s ease;
}
@-webkit-keyframes display_page {
	0% { height:20px; width:0; }
	50% { height:20px; width:100%;}
	100% {}
}
@keyframes display_page {
	0% { height:20px; width:0; }
	50% { height:20px; width:100%;}
	100% {}
}
#front_page_text {
	margin-left:40px;
	color:rgba(0,0,0,0.9);
	-webkit-animation: front_text_slide 3s ease;
	animation: front_text_slide 3s ease;
}
@-webkit-keyframes front_text_slide {
	0% { margin-left:-100%; }
	60% { margin-left:-100%; }
	88% { margin-left:50px; }
	94% { margin-left:34px; }
	100% {}
}
@keyframes front_text_slide {
	0% { margin-left:-100%; }
	60% { margin-left:-100%; }
	88% { margin-left:50px; }
	94% { margin-left:34px; }
	100% {}
}

</style>

</head>
	<body>

<section class='container'>
    <h1>Hello World</h1>
    <div id="the_page">
    	<div id="front_page_text">
    		<p>Welcome to App-Juston.</p>
    	</div>
    </div>
</section>

</body>
</html>
