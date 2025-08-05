 
<?php
include ('database.php');
$name1=        $_POST["yourname1"];
$email1=       $_POST["youremail1"];
$subject1=    $_POST["yoursubject1"];
$message1=      $_POST["yourmessage1"];
$date=          date("Y-m-d") ;
$qry="insert into message (Name, EmailId, Subject, Message, Date) values('$name1','$email1','$subject1','$message1','$date')";
$res=mysqli_query($con, $qry);
if($res)
{
echo "<font color='green'>Your Message has been sent successfully..</font>";
}
else

{
echo "<font color='red'>You have already shared your message..</font>";
}
?>
          