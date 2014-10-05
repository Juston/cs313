<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>PHP Blitz</title>
  <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
  <link href="/css/styles.css" rel="stylesheet" type="text/css">
  <script src="/js/header.js" type="text/javascript"></script>

</head>
<body class="front-page">
<header>
	<h1>Form</h1>
	<div id="menu_icon" class="closed" onclick="menu_animation()"></div>
	<div id="menu">
		<ul>
			<li><a href="" title="">home</a></li>
			<li><a href="/sandboxing/assignments/" title="">assignments</a></li>
		</ul>
	</div>
</header>
    <section class='container'>
    	<div id="front_page_text">
    		<form method="post" action=".">
          <label>What is the most common use of your free time?</label><br>
            <input type="radio" name="free_time" value="Entertainment"> Entertainment<br>
            <input type="radio" name="free_time" value="Recreation"> Recreation<br>
            <input type="radio" name="free_time" value="Reading/Studies"> Reading/Studies<br>
            <input type="radio" name="free_time" value="Music"> Music<br>
            <input type="radio" name="free_time" value="Other"> Other<br><br>
          <label>Do you feel you are an introvert or extrovert?</label><br>
            <input type="radio" name="vert" value="Introvert"> Introvert<br>
            <input type="radio" name="vert" value="Extrovert"> Extrovert<br><br>
          <label>If you had to be one of the following colors for an entire week, which would you be?</label><br>
            <input type="radio" name="color" value="Purple"> Purple<br>
            <input type="radio" name="color" value="Orange"> Orange<br>
            <input type="radio" name="color" value="Green"> Green<br>
            <input type="radio" name="color" value="Blue"> Blue<br><br>
          <label>Where are you more comfortable?</label><br>
            <input type="radio" name="comfort" value="Beach"> Beach<br>
            <input type="radio" name="comfort" value="Snowy Slopes"> Snowy Slopes<br>
            <input type="radio" name="comfort" value="Rain Forrest"> Rain Forrest<br><br>

          <input type="submit" name="action" value="Submit">
        </form>
    	</div>
    </section>


</body>
</html>
