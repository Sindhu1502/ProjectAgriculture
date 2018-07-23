<?php
    include 'conn.php';
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $query="INSERT INTO `first_table`(`Name`,`Email`,`Password`) VALUES ('$name','$email','$password')";
    echo $query;
    $result=mysqli_query($con,$query);
    if($result){
    	echo "successfully Added";
    }
    else{
    	echo "Error";
    }