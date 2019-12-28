<html>
<head>
    <title>Student Delete</title>
	
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
        <h2>Student's Details</h2>
        <form method="post">
            <div class="st">
                <h2>Enter Student Name : </h2><input type="text" id="name" name="name" value="" placeholder="Name">
            </div>
            <div class="st">
                <h2>Enter Student Roll : </h2><input type="text" id="roll" name="roll" value="" placeholder="Roll">
            </div>
            <div class="st">
                <h2>Select Subject: </h2>
            </div>
            <div class="stt">
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
            <div class="st">
                <h2>Select Year</h2>
            </div>
            <div class="sttt">
                <input type="text" id="yr" list="year" name="year" placeholder="Year" autocomplete="off">
                <datalist id="year">
                    <option value="1">1<sup>st</sup></option>
                    <option value="2">2<sup>nd</sup></option>
                    <option value="3">3<sup>rd</sup></option>
                </datalist>
            </div>
            <p id="idk"></p>
            <div class="th"><input type="submit" name="submit" value="Submit"></div>
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
    $servername="localhost";
    $username="root";
    $userpass="";
    $dbname="Student";
    $sub=$subject.$year;
    $conn=new mysqli($servername,$username,$userpass,$dbname);
    if ($conn->connect_error)
    {
        echo "Connection not established";
    }
    $sql4="DELETE FROM ALL_STUDENTS_UG WHERE ROLL='';";
    $conn->query($sql4);
    $sql="SELECT NAME FROM ALL_STUDENTS_UG WHERE ROLL='$roll' AND SUBCODE LIKE '$sub%';";
    $rslt=$conn->query($sql);
    if ($rslt->num_rows > 0)
    {
        $sql3="DELETE FROM ALL_STUDENTS_UG WHERE ROLL='$roll' AND SUBCODE LIKE '$sub%';";
        $conn->query($sql3);
        echo '<script language="javascript"> alert("Successfully Deleted"); </script>';
    }
    else
    {
        echo '<script language="javascript"> alert("Nothing To Delete"); </script>';
    }
    $conn->close();
}
?>