<?php
include('dbcon.php');

if(isset($_POST['addCategory'])){
    $categoryName = $_POST['cName'];
    $categoryDes = $_POST['cDes'];
    $categoryImageName = $_FILES['cImage']['name'];
    $categoryImageTmpName = $_FILES['cImage']['tmp_name'];
    $destination = "img/".$categoryImageName;
    $extension = pathinfo($categoryImageName,PATHINFO_EXTENSION);
    if($extension == "jpg" || $extension == "png" || $extension == "jpeg" || $extension == "webp"){
        if(move_uploaded_file($categoryImageTmpName,$destination)){
                $query = $pdo->prepare("insert into categories(name , des, image) values (:cName , :cDes, :cImageName)");
                $query->bindParam('cName',$categoryName);
                $query->bindParam('cDes',$categoryDes);      
                $query->bindParam('cImageName',$categoryImageName);
                $query->execute();
                echo "<script>alert('category Uploaded Successfully')</script>";
        }

    }
    else{
        echo "<script>alert('invalid extension')</script>";
    }

}

?>