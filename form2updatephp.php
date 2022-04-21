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
$sql="UPDATE `company` SET name='$NAME', id=$UNIQUE_ID,password=$PASSWORD,email='$EMAIL',phone=$PHONE,course='$SELECTT',minimum=$MINIMUM,required=$REQUIRED,extra1=0,extra2=0";
$result= mysqli_query($conn,$sql);
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
