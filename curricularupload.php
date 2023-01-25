<link type="text/css" rel="stylesheet" href="stylesheet.css">
<?php
    require_once 'config.php';
    session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: student_login.php");
    exit;
}
if(isset($_POST['submit'])){
    //$regdno = $_GET['num'];   
    $regdno=$_SESSION["num"];
    $name=$_SESSION["username"];
    $sdate=$_POST['sdate'];
    $edate=$_POST['edate'];
    $rec=$_POST['rec'];
    $org=$_POST['org'];
    $ename=$_POST['ename'];
    $etype=$_POST['event'];

    $pname = rand(1000,10000)."-".$_FILES["file"]["name"];
    #temporary file name to store file
    $tname = $_FILES["file"]["tmp_name"];
     #upload directory path
    #TO move the uploaded file to specific location
    move_uploaded_file($tname, "uploaded_files2/".$pname);

    $sql = "insert into curricular values('$regdno','$name','$sdate','$edate','$rec','$org','$etype','$ename','$pname')";
    //declare array to store the data of database
    if(mysqli_query($conn,$sql)){
        echo "File Sucessfully uploaded";
        ?>
        <a href="extraCo_curricular.php" class="button">Back</a>
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