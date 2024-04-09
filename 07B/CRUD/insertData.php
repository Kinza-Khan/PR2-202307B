<?php
include('query.php');
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Insert</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <div class="container p-5">
        <form action="" method="post">
        <div class="form-group">
          <label for="">Name</label>
          <input type="text" name="userName" id="" class="form-control" placeholder="" aria-describedby="helpId">
         
        </div>
        <div class="form-group">
          <label for="">Email</label>
          <input type="text" name="userEmail" id="" class="form-control" placeholder="" aria-describedby="helpId">
         
        </div>
        <div class="form-group">
          <label for="">Password</label>
          <input type="text" name="userPassword" id="" class="form-control" placeholder="" aria-describedby="helpId">
         
        </div>
        <button class="btn btn-info" type="submit" name="userReg">Register</button>
        </form>
    </div>
     </body>
</html>

