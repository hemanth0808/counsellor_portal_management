
<?php
    require_once "config.php";
    // mysql_select_db();
    session_name("staff");
    session_start();
        // Check if the user is already logged in, if yes then redirect him to welcome page
        if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
        header("location: student_details.php");
        exit;
        }
    if (isset($_POST['submit'])){
        $uname=$_POST['uname'];
        $password=$_POST['password'];
        $query="select * from counsellor where cname='$uname' and cname!='admin' and password='$password'" ;
        $result=mysqli_query($conn,$query);
        if(mysqli_num_rows($result)==1){
                echo "You have sucessfully logged in";
                session_start();
                $_SESSION["loggedin"] = true;
                $_SESSION["uname"] = $uname; 
				header("location: student_details.php");
                exit();
        }
        else{
            echo "You've entered wrong credentials ";
            echo ".Please enter correct credentials";
            exit();
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin login</title>
	<link type="text/css" rel="stylesheet" href="stylesheet.css">
</head>
<body>
<div style="text-align:center">
    <form action="#" method="post">
		<table align='center' style="font-weight:bold;">  
			<tr>
				<td><h1 style='text-align:center'>Counsellor login</h1></td>
			</tr>
			<tr>
				<td align='right'>
				<label for="login_staff">name:</label>
				<input type='text' name="uname" id="login_staff" required></td>
			</tr>
			<tr>
				<td>
				<label for="password_staff">Password:</label>
				<input type='password' name="password" id="password_staff" required></td>
			</tr>
			<tr>
				<td align='center'><br>
				<input type="submit" name="submit" class='button' value="Login"/>
				</td>
			</tr>
		</table>
	</form>
</div>
</body>