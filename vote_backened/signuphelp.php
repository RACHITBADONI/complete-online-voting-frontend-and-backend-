<?php
$connection=mysqli_connect('localhost','root',"");
if($connection)
{
    mysqli_select_db($connection, 'authentication');
    $fname=$_POST['name'];
    $email=$_POST['email'];
    $pswrd=$_POST['pswrd'];
    $nick=$_POST['nickname'];
    $studentid=$_POST['id'];
    $data="INSERT INTO info(name,password,email,nickname,studentid) VALUES('$fname', '$pswrd', '$email', '$nick', '$studentid')";
    
    mysqli_query($connection,$data);
    header('location:index.php');
    mysqli_close($connection);
}
else
{
    echo"nooooo";
}

?>