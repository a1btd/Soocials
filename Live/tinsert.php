<?php

$dbhost = "<db host>";
$dbuser = "<your user>";
$dbpass = "<your pwd>";
$dbname = "<db name>";
$url = $_SERVER['REQUEST_URI'];

$conn = mysql_connect($dbhost, $dbuser, $dbpass,$dbname );
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}
$sql = "<query>";

mysql_select_db($dbname);
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not enter data: ' . mysql_error());
}
echo "Entered data successfully\n";
mysql_close($conn);
?>
