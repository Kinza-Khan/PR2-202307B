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


// edit category

if(isset($_POST['editCategory'])){
    $cId = $_GET['id'];
    $categoryName = $_POST['cName'];
    $categoryDescription = $_POST['cDes'];
    $query = $pdo->prepare("update categories set name = :cName , des = :cDes where id = :cId");
    if(isset($_FILES['cImage'])){
        $categoryImageName = $_FILES['cImage']['name'];
        $categoryImageTmpName = $_FILES['cImage']['tmp_name'];
        $extension = pathinfo($categoryImageName , PATHINFO_EXTENSION);
        $destination = "img/".$categoryImageName;
        if($extension == "jpg" || $extension == "jpeg" || $extension == "png" || $extension == "webp"){
                if(move_uploaded_file($categoryImageTmpName, $destination)){
                $query = $pdo->prepare("update categories set name = :cName , des = :cDes , image = :cImage  where id = :cId");
                $query->bindParam('cImage',$categoryImageName);
                }
        }
    }
    $query->bindParam('cId',$cId);
    $query->bindParam('cName',$categoryName);
    $query->bindParam('cDes',$categoryDescription);
    $query->execute();
    echo "<script>alert('record updated successfully')</script>";
}

// delete category


// addProduct
if(isset($_POST['addProduct'])){
    $productName = $_POST['pName'];
    $productPrice = $_POST['pPrice'];
    $productDes = $_POST['pDes'];
    $productQty= $_POST['pQty'];
    $categoryId = $_POST['cId'];
    $productImageName = $_FILES['pImage']['name'];
    $productImageTmpName = $_FILES['pImage']['tmp_name'];
    $extension = pathinfo($productImageName,PATHINFO_EXTENSION);
    $destination = "img/".$productImageName;
    if($extension == "jpg" || $extension == "png" || $extension == "jpeg" || $extension == "webp"){
        if(move_uploaded_file($productImageTmpName, $destination)){
                $query =  $pdo->prepare("insert into products(name , des , price , qty , image , c_id ) values (:pName , :pDes , :pPrice, :pQty , :pImage , :cId)");
                $query->bindParam('pName', $productName);
                $query->bindParam('pPrice', $productPrice);
                $query->bindParam('pDes', $productDes);
                $query->bindParam('pQty', $productQty);
                $query->bindParam('pImage', $productImageName);
                $query->bindParam('cId', $categoryId);
                $query->execute();
                echo "<script>alert('record added successfully')</script>";

        }
    }

}
?>
