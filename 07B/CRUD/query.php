<?php
include('dbcon.php');

// INSERT
if(isset($_POST['userReg'])){
    $userName = $_POST['userName'];
    $userEmail = $_POST['userEmail'];
    $userPassword = $_POST['userPassword'];

    $query = $pdo->prepare("insert into users (name , email, password) values (:uName, :uEmail , :uPass)"); 
    $query->bindParam('uName',$userName);
    $query->bindParam('uEmail',$userEmail);
    $query->bindParam('uPass',$userPassword);
    $query->execute();
    echo "<script>alert('record added successfully');location.assign('select.php')</script>";
}
// UPDATE 
if(isset($_POST['update'])){
    $uId = $_GET['id'];
    $uName = $_POST['userName'];
    $uEmail = $_POST['userEmail'];
    $uPass = $_POST['userPassword'];
    $query = $pdo->prepare("update users set name = :uName , email = :uEmail  , password = :uPass where id = :uId");
    $query->bindParam('uName',$uName);
    $query->bindParam('uId',$uId);
    $query->bindParam('uEmail',$uEmail);
    $query->bindParam('uPass',$uPass);
    $query->execute();
    echo "<script>alert('record updated successfully');location.assign('select.php')</script>";
}
// user Delete
if(isset($_GET['dId'])){
    $id = $_GET['dId'];
    $query = $pdo->prepare("delete from users where id = :id");
    $query->bindParam('id',$id);
    $query->execute();
    echo "<script>alert('record deleted successfully');location.assign('select.php')</script>";
}

?>