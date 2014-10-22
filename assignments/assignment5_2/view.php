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
        <?php
        if(!empty($success)) {
          echo $success;
        }
        if(!empty($error)) {
          echo $error;
        } ?>
        <h2>Scripture List</h2>
        <?php
          if(!empty($scriptureOutput)) {
            echo $scriptureOutput;
          }
        ?>
        <!-- Show Form -->
        <h2>Add Scripture</h2>
        <form action="" method="post">
          <label>Book</label><br>
            <input type="text" name="book" value=""><br>
          <label>Chapter</label><br>
            <input type="text" name="chapter" value=""><br>
          <label>Verse</label><br>
            <input type="text" name="verse" value=""><br>
          <label>Content</label><br>
            <textarea name="content"></textarea><br>

          Related Topic<br>
          <?php
            if(!empty($topicOutput)) {
              echo $topicOutput;
            }
          ?>
          <input type="checkbox" value=""><input type="text" value="">
          <input type="submit" name="action" value="Add Scripture">
        </form>
    	</div>
  </section>

</body>
</html>