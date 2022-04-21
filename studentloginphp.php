<?php
$servername="localhost";
$username="root";
$password="";
$database="placement_automation";
$conn=mysqli_connect($servername,$username,$password,$database);
$ROLL=$_POST['id'];
$MAR=$_POST['password'];
$sql="SELECT * FROM `student` WHERE id='$ROLL'";
$result= mysqli_query($conn,$sql);
$sqll="DELETE FROM student WHERE sgpa=0 AND tenth=0;";
mysqli_query($conn,$sqll);
if($result->num_rows>0){
   echo "phase1";
    $sqll="SELECT * FROM `student` WHERE password='$MAR'";
    $resultt= mysqli_query($conn,$sqll);
    if($resultt->num_rows>0)
    {
            echo "sucessful";
            session_start();
            $_SESSION['loggedin'] = true;
            $_SESSION['id']=$ROLL;
            header("location:dash1/indexphp.php");
            } 
    }
else{
    header("location:Login1.html");
}
?>