<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Sign Up | Everything BYU-I</title>
  <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
  <link href="/css/styles.css" rel="stylesheet" type="text/css">
  <script src="/js/header.js" type="text/javascript"></script>

</head>
<body class="front-page">
<header>
	<h1>Signing Up | Everything BYU-I</h1>
	<div id="menu_icon" class="closed" onclick="menu_animation()"></div>
  <div id="menu">
    <ul>
      <li><a href="/" title="">home</a></li>
      <li><a href="/assignments/" title="">assignments</a></li>
    </ul>
  </div>
</header>
  <section class='container'>
    	<h2>Sign Up</h2>
      <form action="." method="post">
        <label>Username</label>
        <input type="text"  pattern=".{5,25}" name="username" required>
        <label>Password</label>
        <input type="password" pattern=".{7,25}" name="password1" required>
        <label>Verify Password</label>
        <input type="password" pattern=".{7,25}" name="password2" required>
      </form>
  </section>

</body>
</html>