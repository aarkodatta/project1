<?php
session_start();
?>
<html>
    <head>
        <title>Bench Addition</title>
	<style>
		
    .whole
	{
		border-style: double;
		width: 35%;
		float: center;
		height: 70%;
		border-radius: 5px;
        background-color: #f2f2f2;
        padding-right: 1px;
        padding-left: 50px;
	}
		
	.prnt
	{
		border-style: solid;
		padding-left: 700px;
		padding-top: 100px;
		padding-bottom: 100px;
		background-color: antiquewhite;
	}
		
	h2
	{
		width: auto;
	}
		
	input[type=text]
	{
		 width: auto;
		 padding: 12px 20px;
		 margin: 8px 0;
		 display: inline-block;
		 border: 1px dashed #ccc;
		 border-radius: 4px;
		 box-sizing: border-box;
		 font-family: cursive;
	}
	
	input[type=submit] 
	{
		 width: 66.5%;
		 background-color: #4CAF50;
		 color: white;
		 padding: 14px 20px;
		 margin: 8px 0;
		 border: none;
		 border-radius: 4px;
		 cursor: pointer;
	}
		
	input[type=submit]:hover 
	{
         background-color: #45a049;
    }
	</style>
    </head>
    <body>
			<div class="prnt">
			<div class="whole">
            <form method="post">
                <h2>Enter the Room Number : </h2>
                <input type="text" name="room" value="" placeholder="Room No." required>
                <h2>Enter No. of Left Side Benches : </h2>
                <input type="text" name="l" value="" placeholder="Left" required>
                <h2>Enter No. of Middle Benches : </h2>
                <input type="text" name="m" value="" placeholder="Middle">
                <h2>Enter No. of Right Side Benches : </h2>
                <input type="text" name="r" value="" placeholder="Right">
				<br>
				<br>
				<br>
				<br>
                <input type="submit" name="submit" value="Submit">
            </form>
			</div>
        	</div>
    </body>
</html>


<?php

if (isset($_POST['submit']))
{
    $servername="localhost";
    $username="root";
    $userpass="";
    $dbname="Student";
    $n=$_POST['room'];
    $l=$_POST['l'];
    $r=$_POST['r'];
    $m=$_POST['m'];
    $conn=new mysqli($servername,$username,$userpass,$dbname);
    if ($conn->connect_error)
    {
        echo "Connection Error";
    }
    if ($m=="" || $m=='0')
    {
        $m=0;
    }
    if ($r=="" || $r=='0')
    {
        $r=0;
    }
    $t=$l+$m+$r;
    $sq="DELETE FROM BENCHES WHERE NAME='';";
    $conn->query($sq);
    $sql="INSERT INTO BENCHES(NAME,L,M,R,T)VALUES('$n','$l','$m','$r','$t');";
    $sql1="SELECT NAME FROM BENCHES WHERE NAME='$n';";
    $rslt=$conn->query($sql1);
    if ($rslt->num_rows > 0)
    {
        $sql2="DELETE FROM BENCHES WHERE NAME='$n';";
        if ($conn->query($sql2)==TRUE)
        {
            $conn->query($sql);
            echo '<script language="javascript"> alert("Bench Values Updated"); </script>';
        }
    }
    else
    {
        $conn->query($sql);
        echo '<script language="javascript"> alert("Bench Values Added"); </script>';
    }
    $conn->close();
}


?>