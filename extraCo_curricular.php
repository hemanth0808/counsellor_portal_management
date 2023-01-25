<?php
    require_once 'config.php';
    session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: student_login.php");
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
<form action="curricularupload.php" method="post" enctype="multipart/form-data">
<p style="text-align:right;">
    <a href="student_reset_password.php" class="button">Reset Password</a>
    <a href="student_logout.php" class="button" align='right'>Sign Out</a>
    </p>
    <h1 style="text-align:center;">Extra and Co-curricular Details</h1>
    <table align="center">
        <tr>
            <td align="right"><label for="event">Event Type:</label></td>
            <td><select name="event" id="event" required>
                <option></option>
                <option value="ExtraCurricular">ExtraCurricular</option>
                <option value="CoCurricular">CoCurricular</option>
            </td>
        </tr>
        <tr>
            <td align="right"><label for="ename">Event Name:</label></td>
            <td><input type="text" id="ename" name="ename" required></td>
        </tr>
        <tr>
            <td align="right"><label for="sdate">Start Date:</label></td>
            <td><input type="date" id="sdate" name="sdate" required></td>
        </tr>
        <tr>
            <td align="right"><label for="edate">End Date:</label></td>
            <td><input type="date" id="edate" name="edate" required></td>
        </tr>
        <tr>
            <td align="right"><label for="rec">Recognition:</label></td>
            <td><select name="rec" id="rec" required>
                <option></option>
                <option value="first">First</option>
                <option value="second">Second</option>
                <option value="third">Third</option>
                <option value="participation">participation</option>
            </td>
        </tr>
        <tr>
            <td align="right"><label for="org">Organization:</label></td>
            <td><input type="text" id="org" name="org" required></td>
        </tr>
        <tr>
			<td align='right'>Certificate:</td>
			<td><input type="file" name='file' placeholder="certificate.pdf" required></td>
		</tr>
        <tr>
            <td align="right"><input type="reset" name="reset" value="Reset" class="button"></td>
            <td><input type="submit" name="submit" value="Update" class="button"></td>
        </tr>
    </table>
</form>
</body>
</html>

