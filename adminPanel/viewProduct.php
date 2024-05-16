<?php
include('query.php');
include('header.php');
?>

   <!-- Blank Start -->
   <div class="container-fluid pt-4 px-4">
                <div class="row vh-100 bg-light rounded  mx-0">
                    <div class="col-md-10 ">
                        <h3>This is Products page</h3>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Category Name</th>
                                    <th>Image</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                
                                $query  = $pdo->query("SELECT  categories.name  AS 'categoryName' , products.* 
                                FROM products 
                                INNER JOIN 
                                categories 
                                ON
                                products.c_id = categories.id");
                                $allProducts = $query->fetchAll(PDO::FETCH_ASSOC);
                                foreach($allProducts as $product){
                                
                                ?>
                                <tr>
                                    <td ><?php echo $product['name']?></td>
                                    <td><?php echo $product['price']?></td>
                                    <td><?php echo $product['des']?></td>
                                    <td ><?php echo $product['qty']?></td>
                                    <td><?php echo $product['categoryName']?></td>
                                    <td><img height="100px" src="img/<?php echo $product['image']?>" alt=""></td>
                                    <td><a class="btn btn-primary" href="editProduct.php?id=<?php echo $product['id']?>">Edit</a></td>
                                    <td></td>
                                </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Blank End -->


<?php
include('footer.php');
?>