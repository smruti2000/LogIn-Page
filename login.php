<?php

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
   
    $connection=mysqli_connect('localhost','smruti','smruti111','user_registration');
    /*if($connection){
        echo "we are connected";
    }
    else{
        die("database connection failed.");
    }
    echo "<br>";*/
    $query="insert into users (name,email,password) values('$name','$email','$password')";
    if($query){
        echo "hello $name ";
    }
    $result=mysqli_query($connection,$query);
    if($result){
        echo "your account created successfully";
    }
    else{
        die('query failed');
    }
    
}
































/*$con=mysqli_connect('localhost','smruti','smruti111');
mysqli_select_db($con,'user_registration');
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];

$s="select * from user where email = '$email'";
$result = mysqli_query($con,$s);
$num=mysqli_num_rows($result);
if($num==1){
    echo "User Already registered.";
}
else{
    $reg="insert into user (name,email,password) values ('$name' , '$email' , '$password')";
    mysqli_query($con,$reg);
    echo"Registation Successful.";
    //if(!mysqli_query($con,$reg)) { die("DAMMIT"); } else{ echo "Success"; }
}




*/
?>