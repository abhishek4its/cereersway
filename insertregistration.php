 
<?php
include ('database.php');
$name1=        $_POST["name1"];
$phnumber1=    $_POST["phnumber1"];
$email1=       $_POST["email1"];
$course1=      $_POST["course1"];
$date=          date("Y-m-d") ;
$qry="insert into enquiry (Name, PhNumber, EmailId, Course, Date) values('$name1','$phnumber1','$email1','$course1','$date')";
$res=mysqli_query($con, $qry);
if($res)
{
echo "<font color='green'>Registered successfully..</font>";
}
else
{
echo "<font color='red'>Already registered..</font>";
}
?>
          