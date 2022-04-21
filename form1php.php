<html>
<head>
 <script>
setInterval(() => {
   window.location.href="index.html";
}, 5000);
     </script>
 <style>
        
    #center{
    color: white;
    background-color: #b9316a;
    width: 13%;
    height: 7%;
    margin-left: 41%;
    font-family: cursive;
    font-weight: 600;
    font-size: x-large;
    border-radius:60px;
    text-align: center;
    padding: 20px;
    margin-top:20%;
    }
    </style>    
</head>
<body>

<?php
$NAME=$_POST['name'];
$STUDENT_ID=$_POST['studentid'];
$PASSWORD=$_POST['password'];
$GENDER=$_POST['gender'];
$EMAIL=$_POST['Email'];
$PHONE=$_POST['txtEmpPhone'];
$SELECTT=$_POST['select'];
$SGPA=$_POST['SGPA'];
$a10nth=$_POST['10nth'];
$a12th=$_POST['12th'];

?>
    <?php
error_reporting(E_ERROR| E_PARSE);

$servername="localhost";
$username="root";
$password="";
$database="placement_automation";
$conn=mysqli_connect($servername,$username,$password,$database);

$sql="INSERT INTO `student` (`name`, `id`,`password`,`gender`,`email`,`phone`,`course`,`sgpa`,`tenth`,`tweleveth`,`verified`,`selected`) VALUES ('$NAME', '$STUDENT_ID','$PASSWORD','$GENDER','$EMAIL','$PHONE','$SELECTT','$SGPA','$a10nth','$a12th',0,0);";
$result= mysqli_query($conn,$sql);
$sqll="DELETE FROM student WHERE sgpa=0 AND tenth=0;";
mysqli_query($conn,$sqll);

?>
   <div id="center">
<?php
if($result){
    echo submitted;
}
else
{echo "not submitted".mysqli_error($conn);}
?>
</div>
<span style="text-align:center;margin-left:40%;color:black;padding:12px;padding-top:30px;">
Redirection in process
Please wait</span>
</body>
</html>

