<?php
session_start();
?>
<html>
    <head>
        <title>PG Student Entry</title>
		
	<style>
	input[type=text],input[type=number]
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
		
	</style>
    </head>
    <body>
		<div class="prnt">
        <div class="box">
            <h2> PG Student's Details</h2>
            <form action="" method="post">
                    <h2>Enter Name : </h2>
                    <input type="text" id="nme" name="nm" value="" placeholder="Name">
                    <h2>Enter Roll :</h2>
                    <input type="number" id="rl" name="roll" value="" placeholder="Roll">
                    <h2>Enter Subject</h2>
                    
                        <input type="text" id="sub" list="subject" name="subject" value="" placeholder="Subject" autocomplete="off">
                        <datalist id="subject">
                            <option value="BNG">Bengali</option>
                            <option value="SAN">Sanskrit</option>
                            <option value="PHI">Philosophy</option>
                            <option value="MTA">Mathematics</option>
                            <option value="APC">Applied Chemistry</option>
                        </datalist>
                    
                    <h2>Enter Year</h2>
                  
                        <input type="text" id="yr" list="year" name="year" value="" placeholder="Year" autocomplete="off">
                        <datalist id="year">
                            <option value="1">1<sup>st</sup></option>
                            <option value="2">2<sup>nd</sup></option>
                        </datalist>
                    
                    <input type="submit" name="submit" value="Submit">
            </form>
        </div>
		</div>
    </body>
</html>
<?php
if (isset($_POST['submit']))
{
    $name=$_POST['nm'];
    $roll=$_POST['roll'];
    $subject=$_POST['subject'];
    $year=$_POST['year'];
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
        $sub=$subject.$year;
        $sql3="DELETE FROM ALL_STUDENTS_PG WHERE ROLL='';";
        $conn->query($sql3);    
        $sql="INSERT INTO ALL_STUDENTS_PG(NAME,ROLL,SUBCODE)VALUES('$name','$roll','$sub');";
        $sql1="SELECT ROLL FROM ALL_STUDENTS_PG WHERE ROLL='$roll' AND SUBCODE LIKE '___1%';;";
        $rslt=$conn->query($sql1);
        if ($rslt->num_rows > 0)
        {
            $sql2="DELETE FROM ALL_STUDENTS_PG WHERE ROLL='$roll' AND SUBCODE LIKE '___1%';";
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
        $sub=$subject.$year;
        $sql3="DELETE FROM ALL_STUDENTS_PG WHERE ROLL='';";
        $conn->query($sql3);    
        $sql="INSERT INTO ALL_STUDENTS_PG(NAME,ROLL,SUBCODE)VALUES('$name','$roll','$sub');";
        $sql1="SELECT ROLL FROM ALL_STUDENTS_PG WHERE ROLL='$roll' AND SUBCODE LIKE '___2%';";
        $rslt=$conn->query($sql1);
        if ($rslt->num_rows > 0)
        {
            $sql2="DELETE FROM ALL_STUDENTS_PG WHERE ROLL='$roll' AND SUBCODE LIKE '___2%';";
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
    else
    {
        $sql3="DELETE FROM ALL_STUDENTS_PG WHERE ROLL='';";
        $conn->query($sql3);
        echo '<script language="javascript"> alert("Nothing"); </script>';
    }
    $conn->close();
}

?>