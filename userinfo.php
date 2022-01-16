<?php
$con = mysqli_connect('localhost','root','12345');
if($con){
    echo"connected";
}
else{
    echo"not connected";
}
mysqli_select_db($con,'practice1');

$user=$_POST['user'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$comment=$_POST['comment'];
$query="insert into userinfodata (user, email, mobile, comment) values('$user','$email','$mobile','$comment')";

mysqli_query($con,$query);
echo($query);
?>