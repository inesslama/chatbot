<?php
include('db.php');
switch ($_POST['action']){
case'registration':
    $username=$_POST['username'];
    $password=password_hash($_POST['password'],PASSWORD_DEFAULT);
    //echo $username."<br>".$password;
    $conn=mysqli_query($con,"insert into user(username,password) values ('$username','$password')");
    //echo "registration with success";
    header("Location: login.php");
 
    break;
case 'login':
    $username=$_POST['username'];
    $password=$_POST['password'];
    $select_user="select * from user where username='$username'";
    $run_qry=mysqli_query($con,$select_user);
    if(mysqli_num_rows($run_qry)>0){
       while($row=mysqli_fetch_assoc($run_qry)){
        
           password_verify($password,$row['password']);
                
                $username=$row['username'];
                header("Location: index.php");
           
        } 
    }
     break;  
     
    default:
     break;
}
if( $username == "admin" && $password == "admin"){
    header("Location: shownew.php");
}
    
   