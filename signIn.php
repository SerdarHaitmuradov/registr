<?php
session_start();
require './connect_to_base.php';


 
if($_SERVER['REQUEST_METHOD']=='POST')
{
       $name=$_POST['name'];
       $password=md5($_POST['password']);
       
       $chek_user=mysqli_query($db,"SELECT * FROM user WHERE name='$name' AND password='$password'");
       
       if(mysqli_num_rows($chek_user)>0)
       {
        $user= mysqli_fetch_assoc($chek_user);
        $_SESSION['user']=["avatar"=>$user['avatar']
                   ,"name"=>$user['name']];
        header('Location:profile.php');
       }
       else
       {
           echo'not good';
       }
}

      

