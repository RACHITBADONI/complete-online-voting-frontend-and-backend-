 <?php
 
$connection=mysqli_connect('localhost','root',"",'authentication');
if($connection)
{
    mysqli_select_db($connection, 'authentication');

    $fname=$_POST['username'];
    $pswrd=$_POST['pass'];
    
    $pwd="SELECT * FROM info
    where name='$fname' AND password='$pswrd'";
    $result=mysqli_query($connection,$pwd);
    $num=mysqli_num_rows($result);// takes bool type argument
    
    if($num==1)
    {
        header('location:onlinevoting.php');
    }
    else
    {
    //    echo'<script>alert("wrong username or password")</script>';  //check why not working
        header('location:register.php');
    }
    
}
else
{
    echo"nooooo";
}
mysqli_close($connection);
?> 