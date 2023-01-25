<?php
include 'config.php';
    // mysql_select_db();
    session_name("staff");
    session_start();
  
 // Check if the user is logged in, otherwise redirect to login page
 if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] != true){
     header("location: staff_login.php");
     exit;
 }
 $regdno=$_SESSION['regdno'];
 $file="uploaded_files/";
 //$regdno = $_GET['num'];   
 $sql = "select * from student where regdno ='$regdno'";
 $result = ($conn->query($sql));
 //declare array to store the data of database
 $row = []; 
 if ($result->num_rows > 0) {
     // fetch all data from db into array 
     $row = $result->fetch_all(MYSQLI_ASSOC);  
 }    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>student profile</title>
	<link type="text/css" rel="stylesheet" href="stylesheet.css">
</head>
<body>
<div id='student'>   

<p style="text-align:right;">
    <a href="staff_logout.php" class="button" align='right'>Sign Out</a>
    </p>
<h1 align="center">STUDENTS DETAILS</h1><br>
<table border='0' cellspacing="0" align="center" style="background: color #757575;font-size: 15px;">    
            <?php
            if(!empty($row))
            foreach($row as $rows)
            { 
            ?>
           <!-- <embed type="image/jpg" src="uploaded_files/<?php echo $row['photo']; ?>" width="60" height="60">-->
            <tr><td align="right"><b>Regdno :</b></td>
                <td><?php echo $rows['regdno']; ?></td>
                <td>&emsp;</td>
                <td ></td>
                <?php echo "<td rowspan='6'>" . "<img src=".$rows['photo'].' width=100px height="100px">' . "</td>";?></tr>
            <tr><td align="right"><b>Name :<b></td>
                <td><?php echo $rows['name']; ?></td>
                <td></td>
                </tr>
            <tr><td align="right"><b>Contact :<b></td>
                <td><?php echo $rows['contact'] ?></td>
                <td></td>
                </tr>
            <tr><td align="right"><b>Email :<b></td>
                <td><?php echo $rows['email'] ?></td></tr>
            <tr><td align="right"><b>D.O.B :<b></td>
                <td><?php echo $rows['DOB'] ?></td>
            </tr>
            <tr><td align="right"><b>Fathername :<b></td>
                <td><?php echo $rows['fathername']; ?></td>
            </tr>
            <tr><td align="right"><b>Contact :<b></td>
                <td><?php echo $rows['fcontact']; ?></td>
            </tr>
            <tr><td><br><br></td>
            <td><a href="extradetails.php" class="button">Extra and Co-curricular Details</td>
            <td></td></tr>
            <tr><td><br><br></td>
            <td><a href="attendencedetails.php" class="button">Attendence Details</td>
            <td></td></tr>
            <tr><td><br><br></td>
            <td><a href="marksdetails.php" class="button">Semester Marks Details</td>
            <td></td></tr>
            <tr><td><br><br></td>
            <td><a href="swokdetails.php" class="button">Details of SWOK Analysis</td>
            <td></td></tr>
            <?php } ?>
    </table><br><br>
    
    </div>
</body>
</html>

<?php   
    mysqli_close($conn);
?>