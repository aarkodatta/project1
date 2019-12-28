<?php
session_start();
?>
<html>

<head>
    <title>Student Entry</title>
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
        <h1>Student's Details</h1>
        <form method="post">
            <div>
                <h2 id="name1">Enter Student Name : </h2><input type="text" id="name" name="name" value="" placeholder="Name">
            </div>
            <div class="st">
                <h2 id="roll1">Enter Student Roll : </h2><input type="text" id="roll" name="roll" value="" placeholder="Roll">
            </div>
            <div>
                <h2>Select Subject : </h2>
            </div>
            <div>
                <input type="text" id="sb" list="subject" name="subject" placeholder="Subject" autocomplete="off">
                <datalist id="subject">
                    <option value="CMSA">Computer Science</option>
                    <option value="PHSA">Physics</option>
                    <option value="INCA">Industrial Chemistry</option>
                    <option value="MTMA">Mathematics</option>
                    <option value="CEMA">Chemistry</option>
                    <option value="MCBA">Microbiology</option>
                    <option value="ZOOA">Zoology</option>
                    <option value="ECOA">Economics</option>
                    <option value="HISA">History</option>
                    <option value="PHIA">Philosophy</option>
                    <option value="SANA">Sanskrit</option>
                    <option value="BNGA">Bengali</option>
                    <option value="PLSA">Political Science</option>
                    <option value="ENGA">English</option>
                </datalist>
            </div>
            <div>
                <h2>Select Year</h2>
            </div>
            <div>
                <input type="text" id="yr" list="year" name="year" placeholder="Year" autocomplete="off">
                <datalist id="year">
                    <option value="1">1<sup>st</sup></option>
                    <option value="2">2<sup>nd</sup></option>
                    <option value="3">3<sup>rd</sup></option>
                </datalist>
            </div>
            <div>
                <h2>Select General Subject Combination</h2>
            </div>
            <div>
                <input type="text" id="gn" list="gnrl" name="general" placeholder="General Combination" autocomplete="off">
                <datalist id="gnrl">
                    <option value="40">Math and Statistics</option>
                    <option value="41">Math and Chemistry</option>
                    <option value="42">Math and Computer Science</option>
                    <option value="43">Math and Physics</option>
                    <option value="44">Statistics and Computer Science</option>
                    <option value="45">Physics and Computer Science</option>
                    <option value="46">Chemistry and Physics</option>
                    <option value="47">Chemistry and Zoology</option>
                    <option value="48">Math and Electronics</option>
                    <option value="49">Chemistry and Microbiology</option>
                    <option value="50">Microbiology and Physics</option>
                    <option value="51">Math and Zoology</option>
                    <option value="11">History and Political Science</option>
                    <option value="12">History and Bengali</option>
                    <option value="13">History and Economics</option>
                    <option value="14">History and Philosophy</option>
                    <option value="15">Sanskrit and Political Science</option>
                    <option value="16">Sanskrit and Bengali</option>
                    <option value="17">Sanskrit and Economics</option>
                    <option value="18">Sanskrit and Philosophy</option>
                    <option value="19">Political Science and Economics</option>
                    <option value="20">Political Science and Philosphy</option>
                    <option value="21">Bengali and Economics</option>
                    <option value="22">Bengali and Philosophy</option>
                    <option value="23">Political Science and Bengali</option>
                    <option value="24">Political Science and English</option>
                    <option value="25">History and Sanskrit</option>
                    <option value="26">History and English</option>
                    <option value="27">Sanskrit and English</option>
                    <option value="28">Philosophy and Economics</option>
                    <option value="29">Philosophy and English</option>
                    <option value="30">Economics and English</option>
                    <option value="31">Bengali and English</option>
                </datalist>
            </div>
            <div>
                <h2>Select Language Combination</h2>
            </div>
            <div>
                <input type="text" id="ln" list="ln1" name="lang" placeholder="Language Combination" autocomplete="off">
                <datalist id="ln1">
                    <option value="8">Bengali and English</option>
                    <option value="9">Alternative English and English</option>
                </datalist>
            </div>
            <p id="idk"></p>
            <div style="padding-left: 50px"><input type="submit" name="submit" value="Submit"></div>
        </form>
    </div>
	</div>
</body>

</html>
<?php

if (isset($_POST['submit']))
{
    $name=$_POST['name'];
    $roll=$_POST['roll'];
    $subject=$_POST['subject'];
    $year=$_POST['year'];
    $general=$_POST['general'];
    $lang=$_POST['lang'];
    $servername="localhost";
    $username="root";
    $userpass="";
    $dbname="Student";
    
    $conn=new mysqli($servername,$username,$userpass,$dbname);
    if ($conn->connect_error)
    {
        echo "Connection not established";
    }
    if ($year==1)
    {
        $sub=$subject.$year.$general.$lang;
        $sql3="DELETE FROM ALL_STUDENTS_UG WHERE ROLL='';";
        $conn->query($sql3);    
        $sql="INSERT INTO ALL_STUDENTS_UG(NAME,ROLL,SUBCODE)VALUES('$name','$roll','$sub');";
        $sql1="SELECT ROLL FROM ALL_STUDENTS_UG WHERE ROLL='$roll' AND SUBCODE LIKE '____1%';";
        $rslt=$conn->query($sql1);
        if ($rslt->num_rows > 0)
        {
            $sql2="DELETE FROM ALL_STUDENTS_UG WHERE ROLL='$roll' AND SUBCODE LIKE '____1%';";
            if ($conn->query($sql2)==TRUE)
            {
                $conn->query($sql);
                echo '<script language="javascript"> alert("First Year Values Updated"); </script>';
            }
        }
        else
        {
            $conn->query($sql);
            echo '<script language="javascript"> alert("First Year Values Added"); </script>';
        }
    }
    else if ($year==2)
    {
        $sub=$subject.$year.$general;
        $sql3="DELETE FROM ALL_STUDENTS_UG WHERE ROLL='';";
        $conn->query($sql3);    
        $sql="INSERT INTO ALL_STUDENTS_UG(NAME,ROLL,SUBCODE)VALUES('$name','$roll','$sub');";
        $sql1="SELECT ROLL FROM ALL_STUDENTS_UG WHERE ROLL='$roll' AND SUBCODE LIKE '____2%';";
        $rslt=$conn->query($sql1);
        if ($rslt->num_rows > 0)
        {
            $sql2="DELETE FROM ALL_STUDENTS_UG WHERE ROLL='$roll' AND SUBCODE LIKE '____2%';";
            if ($conn->query($sql2)==TRUE)
            {
                $conn->query($sql);
                echo '<script language="javascript"> alert("Second Year Values Updated"); </script>';
            }
        }
        else
        {
            $conn->query($sql);
            echo '<script language="javascript"> alert("Second Year Values Added"); </script>';
        }
    }
    else if ($year==3)
    {
        $sub=$subject.$year;
        $sql3="DELETE FROM ALL_STUDENTS_UG WHERE ROLL='';";
        $conn->query($sql3);    
        $sql="INSERT INTO ALL_STUDENTS_UG(NAME,ROLL,SUBCODE)VALUES('$name','$roll','$sub');";
        $sql1="SELECT ROLL FROM ALL_STUDENTS_UG WHERE ROLL='$roll' AND SUBCODE LIKE '____3%';";
        $rslt=$conn->query($sql1);
        if ($rslt->num_rows > 0)
        {
            $sql2="DELETE FROM ALL_STUDENTS_UG WHERE ROLL='$roll' AND SUBCODE LIKE '____3%';";
            if ($conn->query($sql2)==TRUE)
            {
                $conn->query($sql);
                echo '<script language="javascript"> alert("Third Year Values Updated"); </script>';
            }
        }
        else
        {
            $conn->query($sql);
            echo '<script language="javascript"> alert("Third Year Values Added"); </script>';
        }
    }
    else
    {
        $sql3="DELETE FROM ALL_STUDENTS_UG WHERE ROLL='';";
        $conn->query($sql3);
        echo '<script language="javascript"> alert("Nothing"); </script>';
    }
}
?>
<html>
	<style>
		h4
		{
			position: fixed;
			top: 850px;
			left: 800px;
			font-family: monospace;
			font-size: 20px;
		}
	</style>
</html>