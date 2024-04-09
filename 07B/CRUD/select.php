<?php
include('query.php');
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <div class="container p-5">
        <a href="insertData.php" class="btn btn-info">Add</a>
            <table class="table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Action</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query = $pdo->query("select * from users");
                    // print_r($query);
                    $allUsers = $query->fetchAll(PDO::FETCH_ASSOC);
                    // print_r($allUsers);
                    foreach($allUsers as $user){
                    ?>
                    <tr>
                        <td scope="row"><?php echo $user['name']?></td>
                        <td><?php echo $user['email']?></td>
                        <td><?php echo $user['password']?></td>
                        <td><a class="btn btn-info" href="edit.php?id=<?php echo $user['id']?>">Edit</a></td>
                        <td><a class="btn btn-danger" href="?dId=<?php echo $user['id']?>">Delete</a></td>
                    </tr>
                   <?php
                   }
                   ?>
                </tbody>
            </table>
      </div>
    </body>
</html>