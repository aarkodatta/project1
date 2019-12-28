<?php

$servername="localhost";
$username="root";
$userpass="";
$dbname="Student";
$conn=new mysqli($servername,$username,$userpass,$dbname);
if ($conn->connect_error)
{
    echo "Connection not established";
}
$sql="DELETE FROM ALL_STUDENTS WHERE SUBCODE LIKE '____3%';";
$conn->query($sql);
echo '<script language="javascript"> alert("Deleted Successfuly"); </script>';
$conn->close();
?>