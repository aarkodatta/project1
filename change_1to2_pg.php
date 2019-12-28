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
//$sql="SELECT SUBCODE FROM ALL_STUDENTS WHERE SUBCODE LIKE '____2%';";
$sql="SELECT NAME,ROLL,SUBCODE FROM ALL_STUDENTS_PG WHERE SUBCODE LIKE '___1%';";
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
        $s=$row["SUBCODE"];
        $s1=substr($s,0,3)."2";
        $ar[$c][2]=$s1;
        $c=$c+1;
    }
}
$sql2="DELETE FROM ALL_STUDENTS_PG WHERE SUBCODE='';";
$conn->query($sql2);
$sql2="DELETE FROM ALL_STUDENTS_PG WHERE SUBCODE LIKE '___1%';";
$conn->query($sql2);
for ($i=0;$i<count($ar);$i++)
{
    $a=$ar[$i][0];
    $b=$ar[$i][1];
    $c=$ar[$i][2];
    $sql1="INSERT INTO ALL_STUDENTS_PG(NAME,ROLL,SUBCODE)VALUES('$a','$b','$c');";
    $conn->query($sql1);
    echo '<script language="javascript"> alert("Changed Successfuly"); </script>';
}

$conn->close();
?>