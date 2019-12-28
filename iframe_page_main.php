<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Data Entry New</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        /*.navbar 
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
		.dropdown 
		{
			float: left;
			overflow: hidden;
		}

		.dropdown .dropbtn 0
		{
			font-size: 16px;  
			border: none;
			outline: none;
			color: white;
			padding: 14px 16px;
			background-color: inherit;
			font-family: inherit;
			margin: 0;
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
			box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
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
			padding: 10px;
		}		
		h1
		{
			font-family: cursive;
		}*/
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
		div.arts,div.science,div.passing1
        {
            float: left;
			width: 33.33%;
			height: 80%;
			padding: 5px;
			font-size: large;
			/*opacity: 0.6;*/
			/*background-color: #ffffff;
			font-weight: 1000;
			color: #000000;
			background: rgba(192,192,192,0.3);
        }
		@media screen and (max-width:600px) 
		{
			div.arts,div.science,div.passing1
			{
				width: 100%;
			}
		}
		div.parent_div:after 
		{
			content: "";
			display: table;
			clear: both;
		}
		div.parent_div
		{
			display: flex;
			flex-wrap: wrap;
			align-content:flex-start;
		}
        div.year1
        {
            /position: fixed;
            //float: centre;
            //bottom: 420px;
            //left: 200px;
        }
        div.year2
        {
            //position: fixed;
            //float: centre;
            //left: 200px;
            //bottom: 240px;
        }
        div.type1
        {
            //position: fixed;
            //float: centre;
            //bottom: 430px;
            //left: 400px;
        }
        div.type2
        {
            //position: fixed;
            //float: centre;
            //bottom: 250px;
            //left: 400px;
        }
        div.passing
        {
            position: fixed;
            float: left;
            left: 1000px;
        
        }
        div.passing1
        {
            //position: fixed;
            //float: left;
            //left: 1200px;
            //bottom: 300px;
			width: 29.42%;
			align-content: left;
        }
        div.numbr1
        {
            /*//position: relative;
            //float: left;
            //left: 490px;
            //bottom: 143px;
			padding-bottom: 5px;
			height: 20%;
        }
        div.numbr2
        {
            /*//position: relative;
            //float: left;
            //left: 580px;
            //bottom: -35px;*/
			padding-bottom: 5px;
			height: 20%;
        }
        button.addi
        {
            /*//position: fixed;
            //float: left;
            //bottom: 380px;
            //left: 1000px;*/
        }
        input.sb
        {
            /*//position: fixed;
            //float: left;*/
            left: 600px;
            bottom: 150px;
			width: 20%;
			height: 8%;
			font-size: 20px;
			font-family: cursive;
        }
        input.prm
        {
            /*/position: fixed;*/
            float: left;
            left: 630px;
            bottom: 410px;
        }
        input.prm1
        {
            /*/position: fixed;*/
            float: left;
            left: 630px;
            bottom: 230px;
        }
		body
		{
			/*/background-image: url("cdesk.jpg");
			//background-color: cadetblue;*/
			background-color: sandybrown;
		}
		div.sub_added :hover
		{
			background-color: yellow;
		}
		div.first_block
		{
			font-size: large;
			background: rgba(224,224,224,0.3);
			padding: 10px;
			width: 97.54%
		}
		.date,.room,.ex_type
		{
			font-weight: 1000;
		}
		.year1,.type2,.numbr2,.sub_added
		{
			float: left;
			/*/border-style: solid;*/
		}
		</style>
</head>
<body>
	<div class="header"><h1>Ramakrishna Mission Vidyamandira</h1></div>
	<div class="navbar">
		<a href="www.vidyamandira.ac.in">Home</a>
		<div class="dropdown">
			<button class="dropbtn">Profile
				<!--<i class="fa fa-caret-down"></i>-->
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
				<!--<i class="fa fa-caret-down"></i>-->
			<div class="dropdown-content">
                <a href="all_student_entry.php" target="fr">UG Student Entry</a>
                <a href="all_student_delete.php" target="fr">UG Student Delete</a>
                <a href="all_students_entry_pg.php" target="fr">PG Student Entry</a>
			     <a href="all_student_delete_pg.php" target="fr">PG Student Delete</a>
				<a href="change_1to2.php" target="fr">Update UG 1st Year to 2nd Year</a>
				<a href="change2_3.php">Update UG 2nd Year to 3rd Year</a>
				<a href="delete_3.php">Delete UG 3rd Year</a>
				<a href="change_1to2_pg.php">Update PG 1st Year to 2nd Year</a>
				<a href="delete_2_pg.php">Delete PG 2nd Year</a>
			</div>
			</button>
		</div>
        <div class="dropdown">
			<button class="dropbtn">Bench
				<!--<i class="fa fa-caret-down"></i>-->
			<div class="dropdown-content">
                <a href="add_benches.php" target="fr">Add Benches</a>
                <a href="delete_benches.php" target="fr">Delete Beches</a>
			</div>
			</button>
		</div>
		<a href="front_page.php" target="fr" class="dropbtnn">Seat Allotment</a>
		<div style="float: right"><a href="logout.php">Log Out</a></div>
	</div><br>
    <iframe name="fr" width="1885px" height="780px" style="border:none;"></iframe>
</body>
</html>