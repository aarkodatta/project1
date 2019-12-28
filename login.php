<?php
session_start();
ob_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Log In Page</title>
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
		
	.navbar 
		{
			overflow: hidden;
			background-color: #333;
		}

		.navbar a 
		{
			float: left;
			font-size: 16px;
			color: white;
			text-align: center;
			padding: 14px 16px;
			text-decoration: none;
		}
		
		.navbar div
		{
			float: left;
		}
		
		.dropdown, .drpdwn 
		{
			float: left;
			overflow: hidden;
		}

		.dropdown .dropbtn 
		{
			font-size: 16px;  
			border: none;
			outline: none;
			color: white;
			padding: 14px 16px;
			background-color: inherit;
			font-family: inherit;
			margin: 0;
			cursor: pointer;
		}

		.navbar a:hover, .dropdown:hover .dropbtn 
		{
			background-color: red;
		}

		.dropdown-content
		{
			display: none;
			position: absolute;
			background-color: #f9f9f9;
			min-width: 160px;
			box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.3);
			z-index: 1;
		}

		.dropdown-content a
		{
			float: none;
			color: black;
			padding: 12px 16px;
			text-decoration: none;
			display: block;
			text-align: left;
		}

		.dropdown-content a:hover 
		{
			background-color: #ddd;
		}

		.dropdown:hover .dropdown-content   
		{
			display: block;
		}
		
		div.header
		{
			background-color: sandybrown;
			text-align: center;
			padding: 20px;
		}		
		h1
		{
			font-family: cursive;
		}
        
    </style>
    <script>
        function my()
        {
            var x = document.getElementById("myInput");
            if (x.type === "password") 
            {
                x.type = "text";
            } 
            else 
            {
                x.type = "password";
            }
        }
    </script>
</head>
<body>
	<div class="header"><h1>Ramakrishna Mission Vidyamandira</h1></div>
	<div class="navbar">
		<a href="#home">Home</a>
		<!--<div class="dropdown">
			<button class="dropbtn">Profile
				
			<div class="dropdown-content">
                <a href="create_user.php" target="fr">Create User</a>
                <a href="delete_user.php" target="fr">Delete User</a>
                <a href="change_username.php" target="fr">Change User Name</a>
                <a href="change_password.php" target="fr">Change Password</a>
			</div>
			</button>
		</div>
		<div class="dropdown">
			<button class="dropbtn">Student
				
			<div class="dropdown-content">
                <a href="all_student_entry.php" target="fr">UG Student Entry</a>
                <a href="all_student_delete.php" target="fr">UG Student Delete</a>
                <a href="all_students_entry_pg.php" target="fr">PG Student Entry</a>
			     <a href="all_student_delete_pg.php" target="fr">PG Student Delete</a>
				<a href="#" target="fr">Update UG 1st Year to 2nd Year</a>
				<a href="#">Update UG 2nd Year to 3rd Year</a>
				<a href="#">Delete UG 3rd Year</a>
				<a href="#">Update PG 1st Year to 2nd Year</a>
				<a href="#">Delete PG 2nd Year</a>
			</div>
			</button>
		</div>
        <div class="dropdown">
			<button class="dropbtn">Bench
				
			<div class="dropdown-content">
                <a href="add_benches.php" target="fr">Add Benches</a>
                <a href="delete_benches.php" target="fr">Delete Beches</a>
			</div>
			</button>
		</div>
		<a href="front_page.php" target="fr" class="dropbtnn">Seat Allotment</a>
		<div style="float: right"><a href="logout.php">Log Out</a></div>-->
	</div><br>
	<div class="prnt">
    <div class="box">        
        <form action="" method="post">
			<h1>Login</h1>
            <div class="inputBox">
				<h2>Username</h2>
                <input type="text" name="usser" required="">                
            </div>
            <div class="inputBox">
				<h2>Password</h2>
                <input type="password" id="myInput" name="pass" required="">                
            </div>
			<span><input type="checkbox" onclick="my()"> Show Password</span><br><br>
            <input type="submit" name="submit" value="Submit">
        </form>
    </div>
	</div>
</body>
</html>
<?php
if (isset($_POST['submit']))
{
    $name=$_POST['usser'];
    $pass=$_POST['pass'];
    $servername="localhost";
    $username="root";
    $userpass="";
    $dbname="Student";
    $conn=new mysqli($servername,$username,$userpass,$dbname);
    if ($conn->connect_error)
    {
        echo "Connection not established";
    }
    $sql="SELECT TYPE FROM USER_CONTROL WHERE USER='$name' AND PASSWORD='$pass';";
    $result=$conn->query($sql);
    if ($result->num_rows > 0)
    {
        while ($row=$result->fetch_assoc())
        {
            $ck=$row["TYPE"];
        }
    
		if ($ck=="A")
		{
			$_SESSION['user']=$name;
			header('location:iframe_page_main.php');
		}
		else if ($ck=="S")
		{
			$_SESSION['user']=$name;
			header('location:iframe_page_main1.php');
		}
	}
	else
	{
		echo '<script language="javascript"> alert("Please Give Correct Details"); </script>';
	}
    
    $conn->close();
}
?>