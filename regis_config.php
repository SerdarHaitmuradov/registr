<?php
session_start();
require './connect_to_base.php';
 
if($_SERVER['REQUEST_METHOD']=='POST')
{
       $name=$_POST['name'];
       $email=$_POST['email'];
       $password=md5($_POST['password']);
       $password_r=md5($_POST['password_r']);

      
       $tmp='\avatars'.time().$_FILES['photo']['name'];
       move_uploaded_file($_FILES['photo']['tmp_name'],$tmp);
       
           
       if( $password===$password_r)
       { 
        header('Location:http://localhost/registration/wall.php');
       }
       else
       {
          $_SESSION['p']="Error,passwords must be a same";
            header('Location:http://localhost/registration/regist.php');
       }
       
       if(mysqli_query($db,"INSERT INTO user
          (id, name, email, password,avatar) 
               VALUES (NULL,'$name','$email','$password','$tmp')"))
               {
                 header('Location:index.php');
                $_SESSION['aut']="Registration done";
               }
}
else
{
    if(!tmp)
    {
    $_SESSION['reg']="Input all data";
    }
    header('Location:regist.php');
    
}  
     

       
       
   
   




   
   
            
           