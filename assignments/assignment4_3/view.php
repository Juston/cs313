<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Assignments | Everything BYU-I</title>
  <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
  <link href="/css/styles.css" rel="stylesheet" type="text/css">
  <script src="/js/header.js" type="text/javascript"></script>

</head>
<body class="front-page">
<header>
	<h1>Everything BYU-I</h1>
	<div id="menu_icon" class="closed" onclick="menu_animation()"></div>
  <div id="menu">
    <ul>
      <li><a href="/" title="">home</a></li>
      <li><a href="/assignments/" title="">assignments</a></li>
    </ul>
  </div>
</header>
  <section class='container'>
    	<div id="front_page_text">
    		<h2>Fast Food Options</h2>
        <?php
        if(!empty($option_outputs)) {
          echo $option_outputs;
        } else{ ?>
        <form action="." method="post"><input type="submit" name="action" value="Manual Search"></form>
        <form action="." method="post"><input type="submit" name="action" value="Auto Search"></form>
        <?php } ?>
    	</div>
  </section>

</body>
</html>