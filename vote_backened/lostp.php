<?php
 $connection=mysqli_connect('localhost','root',"",'authentication');
 if($connection)
 {
    //  mysqli_db($connection, 'authentication');
     $studentid=$_POST['sid'];
     $email=$_POST['semail'];
     $nickname=$_POST['snickname'];
     $newpassword=$_POST['snewp'];
     $pwd="UPDATE info SET password='$newpassword'
     WHERE studentid='$studentid'&& nickname='$nickname'";
    //  update info set password="1234" where name="shiva"&& nickname="hi";
     $result=mysqli_query($connection,$pwd);//gives bool type result when connection is established;
     header('location:index.php');
    //  if($num==0)
    //  {
    //      header('location:onlinevoting.php');
    //  }
    //  else
    //  {
    //      header('location:lostpage.php');
    //  }
 }
 else{
     echo"noooo";
 }
 mysqli_close($connection);
?>