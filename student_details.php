<?php
    include 'config.php';
    session_name("staff");
    session_start();
  
 // Check if the user is logged in, otherwise redirect to login page
 if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
     header("location: staff_login.php");
     exit;
 }
 if(isset($_POST['submit'])){
    $_SESSION['regdno']=$_POST['regdno'];
    $regdno=$_SESSION['regdno'];
    $uname=$_SESSION["uname"];
    $qry="select * from $uname where regdno='$regdno'";
    $result1=($conn->query($qry));
    if($result1->num_rows == 1){
    header("location: student_profile.php");
}
}
    $backlog=$_SESSION['uname']; 
    //$backlog="nagesh";
    $sql = "select * from $backlog ";
    $result = ($conn->query($sql));
    //declare array to store the data of database
    $row = []; 
    //header("location :student_profile.php");
    if ($result->num_rows > 0) 
    {
        // fetch all data from db into array 
        $row = $result->fetch_all(MYSQLI_ASSOC);  
    }   
    
?>
  
<!DOCTYPE html>
<html> 
<head>
    <title>student details</title>
	<link type="text/css" rel="stylesheet" href="stylesheet.css">
</head> 
<body style="background: color #959595;">
    <form action="#" method="POST">
    <table align="center"  style="font-weight:bold;">
    <p style="text-align:right;">
    <a href="staff_reset_password.php" class="button">Reset Password</a>
    <a href="staff_logout.php" class="button" align='right'>Sign Out</a>
    </p>
		<tr>
			<td><label for="student_no">Regdno:</label>
			<input type="text" name="regdno" id="student_no" placeholder="19331a1201" required></td>
		</tr>
		<tr>
			<td align="center"><br><input type="submit" name="submit" class="button" value="Get Details" </td>
		</tr>
	</table>
    </form>
    <h2 align="center">LIST OF COUNSELLING STUDENTS</h2>
    <table border='3' cellspacing="0" align="center" style="background: color #757575;">
        <thead>
            <tr>
                <th>Regdno</th>
            </tr>
        </thead>
        <tbody>
            <?php
               if(!empty($row))
               foreach($row as $rows)
              { 
            ?>
            <tr>
                <td><?php echo $rows['regdno']; ?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>
  
<?php   
    mysqli_close($conn);
?>