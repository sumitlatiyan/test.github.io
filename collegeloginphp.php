<?php
$servername="localhost";
$username="root";
$password="";
$database="placement_automation";
$conn=mysqli_connect($servername,$username,$password,$database);
$ROLL=$_POST['uniqueid'];
echo $ROLL;
$MAR=$_POST['password'];
echo $MAR;
$sql="SELECT * FROM `college` WHERE id='$ROLL'";
$result= mysqli_query($conn,$sql);

if($result->num_rows>0){
   echo "phase1";
    $sqll="SELECT * FROM `college` WHERE password='$MAR'";
    $resultt= mysqli_query($conn,$sqll);
    if($resultt->num_rows>0)
    {
       echo "sucessful";
        
                session_start();
                $_SESSION['loggedin3'] = true;
                header("location:dash1/index3php.php");
            
            } 
        

    }
else{
    header("location:Login3.php");

}
?>