<?php
include "adminPanel/dbcon.php";
session_start();

if(isset($_POST['userRegister'])){
    $userName = $_POST['userName'];
    $userEmail = $_POST['userEmail'];
    $userPassword = $_POST['userPassword'];
    $query = $pdo->prepare("insert into users(name , email , password) values (:name , :email , :password)");
    $query->bindParam('name',$userName);
    $query->bindParam('email',$userEmail);
    $query->bindParam('password',$userPassword);
    $query->execute();
    echo "<script>alert('register successfully')</script>";
}
if(isset($_POST['userLogin'])){
    $userEmail = $_POST['userEmail'];
    $userPassword = $_POST['userPassword'];
    $query = $pdo->prepare("select * from users where email = :email AND password = :password");
    $query->bindParam('email',$userEmail);
    $query->bindParam('password',$userPassword);
    $query->execute();
    $user = $query->fetch(PDO::FETCH_ASSOC);
    // print_r($user);
    if($user){
            if($user['role_id'] == 1){
              $_SESSION['adminEmail'] = $user['email'];
                echo "<script>alert('login');
                location.assign('adminPanel/index.php')
                </script>";
            }
            else if($user['role_id'] == 2){
                $_SESSION['userEmail'] = $user['email'];
                echo "<script>alert('login');
                location.assign('index.php')
                </script>";
            }
    }
    else{
        echo "<script>alert('not found')</script>";
    }
    

}
?>