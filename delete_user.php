<?php
session_start();
?>
<html>
    <head>
        <title>Delete User</title>
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
            <h2>Enter User Id : </h2>
            <div><input type="text" name="uid"></div>
            <h2>Enter Account Type</h2>
            <div><input type="text" list="tp" name="type"></div>
            <div>
            <datalist id="tp">
                <option value="A">Administrator</option>
                <option value="S">Standard</option>
            </datalist>
            </div>
            <div><input type="submit" name="submit" value="Submit"></div>
        </form>
		</div>
		</div>
    </body>
</html>
<?php
if (isset($_POST['submit']))
{
    $name=$_POST['uid'];
    $type=$_POST['type'];
    $servername="localhost";
    $username="root";
    $userpass="";
    $dbname="Student";
    
    $conn=new mysqli($servername,$username,$userpass,$dbname);
    if ($conn->connect_error)
    {
        echo "Connection not established";
    }
        $sql="SELECT USER FROM USER_CONTROL WHERE USER='$name' AND TYPE='$type';";
        $r=$conn->query($sql);
        if ($r->num_rows > 0)
        {
            $sql1="DELETE FROM USER_CONTROL WHERE USER='$name' AND TYPE='$type';";
            $conn->query($sql1);
            echo '<script language="javascript"> alert("Successfully Deleted"); </script>';
        }
        else
        {
            echo '<script language="javascript"> alert("User Not Found"); </script>';
        }
    
    $conn->close();
    
}
?>