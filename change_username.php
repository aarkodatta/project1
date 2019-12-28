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
	
	input[type=text]
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
            <h2>Enter New User Name :</h2>
            <div><input type="text" name="nw" placeholder="New User Name"></div>
            <div><input type="submit" name="submit" value="Submit"></div>
        </form>
		</div>
		</div>
    </body>
</html>
<?php

if (isset($_POST['submit']))
{
    $userr=$_POST['nw'];
    $servername="localhost";
    $username="root";
    $userpass="";
    $dbname="Student";
    //$user="borobab";
    $user=$_SESSION['user'];
    $conn=new mysqli($servername,$username,$userpass,$dbname);
    if ($conn->connect_error)
    {
        echo "Connection not established";
    }
    
        $sql="SELECT PASSWORD,TYPE FROM USER_CONTROL WHERE USER='$user';";
        $rslt=$conn->query($sql);
        if ($rslt->num_rows > 0)
        {
            while ($row=$rslt->fetch_assoc())
            {
                $ps=$row["PASSWORD"];
                $tp=$row["TYPE"];
            }
            $sql1="DELETE FROM USER_CONTROL WHERE USER='$user';";
            $conn->query($sql1);
            $sql2="INSERT INTO USER_CONTROL(USER,PASSWORD,TYPE)VALUES('$userr','$ps','$tp');";
            $conn->query($sql2);
			$_SESSION['user']=$userr;
            echo '<script language="javascript"> alert("Changed Successfully"); </script>';
        }
        else
        {
            echo '<script language="javascript"> alert("User Does Not Exit"); </script>';
        }
    
    $conn->close();
}
?>