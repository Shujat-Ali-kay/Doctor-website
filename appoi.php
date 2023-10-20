<?php
 $connec = mysqli_connect("localhost","root","","doc");
 ?>
                                
 <?php
$doc=$_POST['doc'];
$patient=$_POST['patient'];
$phone=$_POST['phone'];
$date=$_POST['date'];
$time=$_POST['time'];
                                
$q = "INSERT INTO login(s_doc,s_patient,s_phone,s_date,s_time) VALUES('$doc','$patient','$phone','$date','$time')";
$RESULT = mysqli_query($connec,$q);
if(!$RESULT){
echo "error connection";
}
else
{
header('location:booked.html');
}
?>