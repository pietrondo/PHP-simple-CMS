<?php include("db.php"); ?>
<!doctype html>
<html>
<head>
<title>
News Page with simple CMS
</title>
<link rel="stylesheet" href="reset.css" type="text/css">
<link rel="stylesheet" href="style.css" type="text/css">
<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Varela+Round">
</head>
<body>
<div id="header">
  <h1>
    New News Post - Simple CMS
  </h1>
</div>
<form action="post.php" method="POST">
  <fieldset>

				<p>If wanting to go to a new line use the < BR > tag please (no spaces between the "<" and the words)! You can also use other html5 tags.<br><br>Example: "I love cheese, < br > (no spaces) I like milk"<br><br>
      <p><input name="title" id="title" type="text" placeholder="Title"></p>
			<p><textarea name="text" id="text" type="password" placeholder="Text"></textarea></p>
			<p><button id="login">Post</button></p>

  </fieldset>
</form>
</body>
</html>
