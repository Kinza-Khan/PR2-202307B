<?php
include('query.php');
include('header.php');
?>
	<!-- Product -->
	<div class="bg0 m-t-23 p-b-140">
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
            <button class="btn btn-info" type="submit" name="userRegister">Register</button>
        </form>

			
		</div>
	</div>
		

	<?php
	include('footer.php');
	?>