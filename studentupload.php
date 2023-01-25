<link type="text/css" rel="stylesheet" href="stylesheet.css">
<?php
    require_once 'config.php';
    session_name("admin");
    session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: admin_login.php");
    exit;
}
if(isset($_POST['submit'])){
    //$regdno = $_GET['num'];   
    $regdno=$_POST["regd"];
    $name=$_POST["name"];
    $email=$_POST["email"];
    $date=$_POST["date"];
    $contact=$_POST["contact"];
    $fname=$_POST["fname"];
    $fcontact=$_POST["fcontact"];
    #file name with a random number so that similar dont get replaced
    $pname = rand(1000,10000)."-".$_FILES["file"]["name"];
    #temporary file name to store file
    $tname = $_FILES["file"]["tmp_name"];
    $pname="uploaded_files/".$pname;
     #upload directory path
    #TO move the uploaded file to specific location
    move_uploaded_file($tname, .$pname);
    #sql query to insert into database
    $sql = "insert into student values('$regdno','$name','$name','$date','$email','$fname','$contact','$fcontact','$pname')";
    //declare array to store the data of database
    if(mysqli_query($conn,$sql)){
        echo "File Sucessfully uploaded";
        ?>
        <a href="admin_access.php" class="button">Back</a>
        <?php
        echo "<br>";
        echo "<br>";  
    }
    else{
        echo "error in file uploading";
    }
}
mysqli_close($conn);
?>