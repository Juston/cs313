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
	<h1>Home | Everything BYU-I</h1>
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
    	<h2>Welcome</h2>
      <?php if(!empty($errors)) {
        foreach($errors as $error) {
          echo $error;
        }
      } ?>
	I hope you are <strong><?php echo $_SESSION['userName']; ?></strong>, else this is awkward.<br><br>
	<form method="post" action=".">
		<input type="submit" name="action" value="Sign Out">
	</form>
	</div>
  </section>

</body>
</html>