<?php
    $host="localhost";
    $user="root";
    $password="";
    $db='miniproject';
    $conn=mysqli_connect($host,$user,$password,$db);
    
    if (isset($_POST['submit'])){
        $uname=$_POST['uname'];
        $password=md5($_POST['cp']);
        $role=$_POST['role'];
        $np=md5($_POST['np']);
        $ncp=md5($_POST['ncp']);
        $query="select * from staff where uname='$uname' and password='$password' and type='$role'";
        $result=mysqli_query($conn,$query);
        if(mysqli_num_rows($result)==1){
            if ($np<>$ncp){
                echo "New passwords do not match";
                exit();
            }
            else {
                $cquery="UPDATE `staff` SET `password` = '$np' WHERE `Type` = '$role' AND `uname` = '$uname'";
                mysqli_query($conn,$cquery);
                echo "password sucessfully changed";
                // header("location: form.html");    
                exit();
            }
        }
        else {
            echo "invalid inputs";
            echo $password;
            echo $uname;
            echo $role;
            exit();
        }
    }
?>

<html>
    <head>
        <style>
        /*    [type=radio]{
              position:absolute;
              opacity: 0;
              width: 0;
              height: 0;
            }*/
        </style>
    </head>
    <body>
        This may be the first time you logged in or we resetted you password so please kindly change your password
        <form method="post" action="#">
            <div class="dropdown">
                <!-- <button class="dropbtn">Dropdown</button> -->
                <div class="dropdown-content">
                  <input type="radio" name="role" id="hod" value="HOD"> 
                  <label for="hod">HOD</label>
                  <input type="radio" name="role" id="incharge" value="incharge">
                  <label for="incharge">incharge</label>
                  <input type="radio" name="role" id="counselor" value="counselor">
                  <label for="counselor">counselor</label>
                </div>
            </div>
            Enter the username: <br>
            <input type="text" name="uname" required> <br>
            Enter the current password: <br>
            <input type="password" name="cp" required> <br>
            Enter the new password: <br>
            <input type="password" name="np" required> <br>
            confirm new password: <br>
            <input type="text" name="ncp" required> <br>
            <input type="submit" name="submit" value="submit">
        </form>
    </body>
</html>