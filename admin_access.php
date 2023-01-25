<?php
    require_once 'config.php';
    session_name('admin');
    session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: admin_login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>student profile</title>
	<link type="text/css" rel="stylesheet" href="stylesheet.css">
</head>
<body>
<form action="studentupload.php" method="post" enctype="multipart/form-data">
<p style="text-align:right;">
    <a href="admin_reset_password.php" class="button">Reset Password</a>
    <a href="admin_logout.php" class="button" align='right'>Sign Out</a>
    </p>
    <h1 style="text-align:center;">Insert Student Details</h1>
    <table align="center">
        <tr>
            <td align="right"><label for="regd">Regdno:</label></td>
            <td><input type="text" name="regd" id="regd" required></td>
        </tr>
        <tr>
            <td align="right"><label for="pic">Student Photo:</label></td>
            <td><input type="file" id="pic" name="file" required></td>
        </tr>
        <tr>
            <td align="right"><label for="name">Name:</label></td>
            <td><input type="text" id="name" name="name" required></td>
        </tr>
        <tr>
            <td align="right"><label for="email">Email:</label></td>
            <td><input type="email" id="email" name="email" required></td>
        </tr>
        <tr>
            <td align="right"><label for="contact">Contact:</label></td>
            <td><input type="number" id="contact" name="contact" required></td>
        </tr>
        <tr>
            <td align="right"><label for="date">D.O.B:</label></td>
            <td><input type="date" name="date" id="date" required></td>
        </tr>
        <tr>
            <td align="right"><label for="fname">Father Name:</label></td>
            <td><input type="text" id="fname" name="fname" required></td>
        </tr>
        <tr>
            <td align="right"><label for="fcontact">Father's Contact:</label></td>
            <td><input type="number" id="fcontact" name="fcontact" required></td>
        </tr>
        <tr>
            <td align="right"><input type="reset" name="reset" value="Reset" class="button"></td>
            <td><input type="submit" name="submit" value="Update" class="button"></td>
        </tr>
    </table>
</form>
</body>
</html>

