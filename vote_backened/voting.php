<?php
$connection=mysqli_connect('localhost','root',"");
if($connection)
{
    mysqli_select_db($connection, 'backened');
$name=$_POST['Name'];
$gender=$_POST['gender'];
$stid=$_POST['stid'];
$email=$_POST['email'];
$university=$_POST['university'];
$choose_candidate=$_POST['choose_candidate'];
$data="INSERT INTO allinfo(name,gender,stid,email,university,choose_candidate) VALUES('$name', '$gender', '$stid', '$email', '$university', '$choose_candidate')";

mysqli_query($connection,$data);
header('location:index.php');

}
else
{
    echo"nooooo";
}

mysqli_close($connection);

?>