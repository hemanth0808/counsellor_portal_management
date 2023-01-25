<?php 
include "config.php";
session_name('staff');
session_start();
// Check if the user is logged in, otherwise redirect to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] != true){
    header("location: staff_login.php");
    exit;
}
$regdno=$_SESSION['regdno'];
$sql="select * from curricular where regdno = '$regdno'";
$result = ($conn->query($sql));
$row = []; 
  
if ($result->num_rows > 0) 
{
    // fetch all data from db into array 
    $row = $result->fetch_all(MYSQLI_ASSOC);  
}  

?>

 
<!DOCTYPE html>
<html>
    <head>
    <link type="text/css" rel="stylesheet" href="stylesheet.css">
<style>
    td,th {
        border: 1px solid black;
        padding: 10px;
        margin: 5px;
        text-align: center;
    }
</style>
</head>
  
<body style="background: color #959595;">
<p style="text-align:right;">
<!--<a href="student_profile.php" class="button" align='right'>Back</a>-->
    <a href="staff_logout.php" class="button" align='right'>Sign Out</a>
    </p>
    <table border='3' cellspacing="0" align="center" style="background: color #757575;">
        <thead>
            <tr>
                <th>EventType</th>
                <th>Regdno</th>
                <th>Name</th>
                <th>EventName</th>
                <th>StartDate</th>
                <th>EndDate</th>
                <th>Recognition</th>
                <th>Organization</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if(!empty($row))
            foreach($row as $rows)
            { 
            ?>
            <tr>
                <td><?php echo $rows['eventtype']; ?></td>  
                <td><?php echo $rows['regdno']; ?></td>    
                <td><?php echo $rows['name']; ?></td>
                <td><?php echo $rows['eventname'] ?></td>
                <td><?php echo $rows['startdate'] ?></td>
                <td><?php echo $rows['enddate'] ?></td>
                <td><?php echo $rows['recognition']; ?></td>
                <td><?php echo $rows['organization']; ?></td>
  
            </tr>
            <?php } ?>
        </tbody>
    </table>
    
</body>
</html>
  
<?php   
    mysqli_close($conn);
?>