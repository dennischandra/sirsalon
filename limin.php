<?php

define ('dbuser','id11208262_minaki');
define ('dbpw','limin');
define ('dbhost','localhost');
define ('dbname','id11208262_minaki');
$dbconn = mysqli_connect("localhost", "id11208262_minaki", "limin", "id11208262_minaki");
if(!$dbconn)
{

    die("DATABASE CONNECTION FAILED:" .mysqli_error($dbconn));
   exit();

}

$dbselect = mysqli_select_db($dbconn, dbname);

if(!$dbselect)
{

    die("DATABASE SELECTION FAILED:" .mysqli_error($dbconn));
   exit();

}

$username = mysqli_real_escape_string($dbconn, $_GET['username']);

$password = mysqli_real_escape_string($dbconn, $_GET['password']);

$sql = $dbconn->query("SELECT * FROM tabel_login WHERE username='$username' AND password='$password'");

 if (mysqli_num_rows($sql) > 0)

 {

    echo "Login_ok";

 }

 else {

     echo "Login_error";

 }

 mysqli_close($dbconn);

?>