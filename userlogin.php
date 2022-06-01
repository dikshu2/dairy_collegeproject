<?php
session_start();
include('connect.php');
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];

$sql="select * from student where email= '$email' and password='$password'";
$result=$conn->query($sql);
$data=mysqli_fetch_assoc($result);

$row=$result->fetch_assoc();
if($result->num_rows==1){

    $_SESSION['user_id']=$row['id'];
    $_SESSION['user_username']=$row['email'];
    $_SESSION['user_password']=$row['password'];
    session_start();
    $_SESSION['uname']=$data['name'];
    echo $_SESSION['uname'];
    header('location:navbar.php');

}else{
    header('location:login.php?err=2');
}


// $operation=executeQuery(selectQuery("register",["username"=>$username,"userpassword"=>$password]));
// $result=mysqli_fetch_assoc($operation);
// if($operation->num_rows==1){

//     $_SESSION['user_id']=$result['id'];
//     $_SESSION['user_username']=$result['username'];
//     $_SESSION['admin_password']=$result['password'];
//     $_SESSION['hospital_name']=$result['hospital'];
//     header('location:dashboard_files/dashboard.php');

// }else{
// header('location:formvalidation.php?err=2');
// }
?>