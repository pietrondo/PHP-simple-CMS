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
    News Page - simple CMS
  </h1>
</div>
  <fieldset>
    <?php

    $query=mysql_query("SELECT * FROM $tbl_name WHERE id='1'");
    $numrows=mysql_num_rows($query);

	  while($row=mysql_fetch_assoc($query)){
		    $title1=$row['title'];
        $text1=$row['news'];
    }

    $query2=mysql_query("SELECT * FROM $tbl_name WHERE id='2'");
    $numrows2=mysql_num_rows($query2);

    while($row=mysql_fetch_assoc($query2)){
        $title2=$row['title'];
        $text2=$row['news'];
    }

    $query3=mysql_query("SELECT * FROM $tbl_name WHERE id='3'");
    $numrows3=mysql_num_rows($query3);

    while($row=mysql_fetch_assoc($query3)){
        $title3=$row['title'];
        $text3=$row['news'];
    }

    $amount=mysql_query("SELECT COUNT(*) FROM $tbl_name");
    $amount=$amount-3;

    for($i="1"; $i<"$amount"; $i++){
            ${'query'."$i"}=mysql_query('SELECT * FROM $tbl_name WHERE id="$i"');
            ${'numrows'."$i"}=mysql_num_rows(${'query'."$i"});

    if($row=mysql_fetch_assoc(${'query'."$i"})){
            ${'title'."$i"}=$row['title'];
            ${'text'."$i"}=$row['news'];
    }

    Echo "
    <h2>
    ${'title'."$i"}
    </h2>
    <p>
    ${'text'."$i"}
    </p>
    <hr>
    ";
    }

    ?>
  </fieldset>

  <div id="footer">
    <a href="cms.php">UPLOAD NEWS</a>
  </div>
</body>
</html>
