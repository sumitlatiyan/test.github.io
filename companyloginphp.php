<?php
$servername="localhost";
$username="root";
$password="";
$database="placement_automation";
$conn=mysqli_connect($servername,$username,$password,$database);
$ROLL=$_POST['id'];
$MAR=$_POST['password'];
$sql="SELECT * FROM `company` WHERE id='$ROLL'";
$result= mysqli_query($conn,$sql);
$sqll="DELETE FROM company WHERE minimum=0 AND phone=0;";
mysqli_query($conn,$sqll);
if($result->num_rows>0){
    $sqll="SELECT * FROM `company` WHERE password='$MAR'";
    $resultt= mysqli_query($conn,$sqll);
    if($resultt->num_rows>0)
    {
       echo "sucessful";
        
                session_start();
                $_SESSION['loggedin2'] = true;
               header("location:dash1/index2php.php");
            } 
    }
else{
    header("location:Login2.html");

}
?>