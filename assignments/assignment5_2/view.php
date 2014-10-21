<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Assignment 5-2 | Everything BYU-I</title>
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
        <!-- Display Scriptures In Database -->


        <!-- Show Form -->
        Add Scripture
        <form action="" method="post">
          <label>Book</label>
            <input type="text" value="">
          <label>Chapter</label>
            <input type="text" value="">
          <label>Verse</label>
            <input type="text" value="">
          <label>Content</label>
            <input type="textarea" value="">
        </form>
    	</div>
  </section>

</body>
</html>