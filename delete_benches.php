<html>
    <head>
        <title>Delete Benches</title>
	<style>
	
	body
	{
		//padding-top: 50px;	
	}
	.prnt
	{
		border-style: solid;
		padding-left: 700px;
		padding-top: 200px;
		padding-bottom: 200px;
		background-color: antiquewhite;
	}
		
	.frm
	{
		//border-style: dotted;
		height: auto;
		//padding-top: 150px;
		//padding-left: 600px;
	}
		
	.whole
	{
		border-style: double;
		width: 30%;
		float: center;
		height: 25%;
		border-radius: 5px;
        background-color: #f2f2f2;
        padding-right: 1px;
        padding-left: 50px;
	}
		
	.hdr2
	{
		//border-style: solid;
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
            <form method="post" class="frm">
				
                <h2 class="hdr2">Enter the Room Number : </h2>
                <input type="text" name="room" value="" placeholder="Room No." required>
					<br>
                <div><input type="submit" name="submit" value="Submit"></div>
				
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
    $room=$_POST['room'];
	//echo $room;
    $conn=new mysqli($servername,$username,$userpass,$dbname);
    if ($conn->connect_error)
    {
        echo "Connection Error";
    }
    $sql="DELETE FROM BENCHES WHERE NAME='';";
    $conn->query($sql);
    $sql1="DELETE FROM BENCHES WHERE NAME='$room';";
    
	if ($conn->query($sql1)==TRUE)
	{
    	echo '<script language="javascript"> alert("Successfully Deleted"); </script>';
	}
	else
	{
		echo '<script language="javascript"> alert("No Room Found"); </script>';
	}
	
	$conn->close();
}

?>