<?php

$db=mysqli_connect("localhost","root","","users");

if(!$db)
{
   echo'error to connect to data base';
}