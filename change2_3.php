<?php

$servername="localhost";
$username="root";
$userpass="";
$dbname="Student";
//$sub=$subject.$year;
$conn=new mysqli($servername,$username,$userpass,$dbname);
if ($conn->connect_error)
{
    echo "Connection not established";
}
$sql="SELECT NAME,ROLL,SUBCODE FROM ALL_STUDENTS_UG WHERE SUBCODE LIKE '____2%';";
$result=$conn->query($sql);
$ar=array();
$c=0;
if ($result->num_rows>0)
{
    while ($row=$result->fetch_assoc())
    {
        $ar[$c]=array();
        $ar[$c][0]=$row["NAME"];
        $ar[$c][1]=$row["ROLL"];
        $vt=$row["SUBCODE"];
        $vtt=substr($vt,0,4)."3";
        $ar[$c][2]=$vtt;
        $c=$c+1;
    }
}
$sql2="DELETE FROM ALL_STUDENTS_UG WHERE SUBCODE='';";
$conn->query($sql2);
$sql2="DELETE FROM ALL_STUDENTS_UG WHERE SUBCODE LIKE '____2%';";
$conn->query($sql2);
for ($i=0;$i<count($ar);$i++)
{
    $a=$ar[$i][0];
    $b=$ar[$i][1];
    $c=$ar[$i][2];
    $sql1="INSERT INTO ALL_STUDENTS_UG(NAME,ROLL,SUBCODE)VALUES('$a','$b','$c');";
    $conn->query($sql1);
    echo '<script language="javascript"> alert("Changed Successfuly"); </script>';
}

$conn->close();
?>