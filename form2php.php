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
error_reporting(E_ALL ^ E_WARNING);
$NAME=$_POST['company_name'];
$UNIQUE_ID=$_POST['uniqueid'];
$PASSWORD=$_POST['password'];
$EMAIL=$_POST['Email'];
$PHONE=$_POST['txtEmpPhone'];
$SELECTT=$_POST['select'];
$MINIMUM=$_POST['minimum'];
$REQUIRED=$_POST['requirement'];
?>
 <?php
error_reporting(E_ERROR| E_PARSE);

$servername="localhost";
$username="root";
$password="";
$database="placement_automation";
$conn=mysqli_connect($servername,$username,$password,$database);
$sql="INSERT INTO `company` (`name`, `id`,`password`,`email`,`phone`,`course`,`minimum`,`required`,`extra1`,`extra2`) VALUES ('$NAME', '$UNIQUE_ID','$PASSWORD','$EMAIL','$PHONE','$SELECTT','$MINIMUM','$REQUIRED',0,0);";
$result= mysqli_query($conn,$sql);

$sqll="DELETE FROM company WHERE minimum=0 AND phone=0;";
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
