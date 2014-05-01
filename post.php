<?php
include('db.php');

$title=$_POST['title'];
$text=$_POST['text'];

if($title=="" && $text==""){
	$title="you wrote nothing in any of the fields";
	$text="you wrote nothing in any of the fields";
}

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

$sql = "UPDATE $tbl_name SET title='$title' WHERE id='1'";
$res = mysql_query($sql);
$sql1 = "UPDATE $tbl_name SET news='$text' WHERE id='1'";
$res1 = mysql_query($sql1);

$sql2 = "UPDATE $tbl_name SET title='$title1' WHERE id='2'";
$res2 = mysql_query($sql2);
$sql3 = "UPDATE $tbl_name SET news='$text1' WHERE id='2'";
$res3 = mysql_query($sql3);

$sql4 = "UPDATE $tbl_name SET title='$title2' WHERE id='3'";
$res4 = mysql_query($sql4);
$sql5 = "UPDATE $tbl_name SET news='$text2' WHERE id='3'";
$res5 = mysql_query($sql5);

header("location: index.php");


mysql_close($db_handle);

?>
