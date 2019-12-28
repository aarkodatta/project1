<?php
session_start();
$servername="localhost";
$username="root";
$userpass="";
$dbname="student";
$conn=new mysqli($servername,$username,$userpass,$dbname);
if ($conn->connect_error)
{
    echo "Connection not established";
}
?>
<!DOCTYPE html>
<html>
    <head>
		<style>
		
	.prnt
	{
		border-style: solid;
		padding-left: 700px;
		padding-top: 100px;
		padding-bottom: 100px;
		background-color: antiquewhite;
	}
		
	.box
	{
		border-style: double;
		width: 35%;
		float: center;
		height: auto;
		border-radius: 5px;
        background-color: #f2f2f2;
        padding-right: 1px;
        padding-left: 50px;
	}
	
	input[type=password]
	{
		 width: 80%;
		 padding: 10px 15px;
		 margin: 4px 0;
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
		<div class="box">
        <form action="" method="post">
            <h2>Enter the Current Password :</h2>
            <div><input type="password" name="cur" placeholder="Current Password"></div>
            <h2>Enter New Password :</h2>
            <div><input type="password" name="nw" placeholder="New Password"></div>
            <h2>Confirm Password</h2>
            <div><input type="password" name="cw" placeholder="Confirm Password"></div>
            <div><input type="submit" name="submit" value="Submit"></div>
        </form>
		</div>
		</div>
    </body>
</html>
<?php

if (isset($_POST['submit']))
{
    $current=$_POST['cur'];
    $new=$_POST['nw'];
    $cnew=$_POST['cw'];
	//$user="boroba";
   	$user=$_SESSION['user'];
	
    $n=strval($new);
    $cn=strval($cnew);
    if ($n==$cn)
    {
        $sql="SELECT TYPE FROM USER_CONTROL WHERE USER='$user' AND PASSWORD='$current';";
        $rslt=$conn->query($sql);
        if ($rslt->num_rows > 0)
        {
            while ($row=$rslt->fetch_assoc())
            {
                $tp=$row["TYPE"];
            }
            $sql1="DELETE FROM USER_CONTROL WHERE USER='$user';";
            $conn->query($sql1);
            $sql2="INSERT INTO USER_CONTROL(USER,PASSWORD,TYPE)VALUES('$user','$new','$tp');";
            $conn->query($sql2);
            echo '<script language="javascript"> alert("Password  Successfully Changed"); </script>';
        }
        else
        {
            echo '<script language="javascript"> alert("Old Password Do Not Match"); </script>';
        }
    }
    else
    {
        echo '<script language="javascript"> alert("Password Do Not Match"); </script>';
    }
    
    $conn->close();
}
?>
<html>
	<head>
		<style>
			h4
			{
				position: fixed;
				top: 710px;
				left: 800px;
				font-size: 19px;
				font-family: sans-serif;
				color:firebrick;
			}
		</style>
	</head>
</html>