<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css" integrity="sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.min.js" integrity="sha512-ykZ1QQr0Jy/4ZkvKuqWn4iF3lqPZyij9iRv6sGqLRdTPkY69YX6+7wvVGmsdBbiIfN/8OdsI7HABjvEok6ZopQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js" integrity="sha512-2rNj2KJ+D8s1ceNasTIex6z4HWyOnEYLVC3FigGOmyQCZc2eBXKgOxQmo3oKLHyfcj53uz4QMsRCWNbLd32Q1g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
	  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <script src="ajax/ajax.js"></script>
</head>
<body>
<form id="user_form">
  <center>
<div class="container mt-5" style="padding-left: 25%;">
<div class="row">
  <div class="col-md-6">
    <div class="card">
      <div class="card-header">
        <h4>USER DATA</h4>
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
 AAD NEW USER
</button>
<button type="button" class="btn btn-danger" id="delete_multiple">
 DELETE USER
</button>
</center>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Register</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <label for="fname">name:</label><br>
        <input type="text" id="name" name="name" value=""><br>
        <label for="lname">email</label><br>
        <input type="text" id="email" name="email" value=""><br>
        <label for="lname">phone</label><br>
        <input type="text" id="phone" name="phone" value=""><br>
        <label for="lname">city</label><br>
        <input type="text" id="city" name="city" value=""><br>
      
     
          <div class="modal-footer">
                <input type="hidden"  value="1" name="type">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" id="btn_add" class="btn btn-primary">add</button>
          </div> 
        </div>
      </div>
  </div>
</div>
</div>
</div>
</div>
</form>
</div>
</div>
<br>

<!-- <form action="" method="post"> -->
 <div class="card-body p-4">
      <table class="table table-bordered ">
        <thead class="thead-dark">
          <tr>
            <th><span class="custom-checkbox">
							<input type="checkbox" id="selectAll">
							<label for="selectAll">select all</label>
						</span>
            </th>

            <th>ID</th>
            <th>NAME</th>
            <th>EMAIL</th>
            <th>PHONE</th>
            <th>CITY</th>
            <th>ACTION</th>
          </tr>
        </thead>
      
      <tbody class="userdata">

      <?php 
      include "backend/database.php";
      include "backend/fetchdata.php";
      $result_arr = [];
      $i=1;
      if(mysqli_num_rows($res) > 0)
      {

          foreach($res as $row)
          {
        
      ?>
      
            <tr id="<?php echo $row["uid"]; ?>">
            <td>
						<span class="custom-checkbox">
							<input type="checkbox" class="user_checkbox" data-user-id="<?php echo $row["uid"]; ?>">
							<label for="checkbox2"></label>
						</span>
					  </td>
            <td><?php echo $i; ?></td>
            <td><?php echo $row['name'];?></td>
            <td><?php echo $row['email'];?></td>
            <td><?php echo $row['phone'];?></td>
            <td><?php echo $row['city'];?></td>
            <td>
            
            <button type="button" class="btn btn-success " data-bs-toggle="modal" data-bs-target="#editexampleModal">
             <a> <i class="fa fa-edit update" data-toggle="tooltip" 
                data-id="<?php echo $row["uid"]; ?>"
                data-name="<?php echo $row["name"]; ?>"
                data-email="<?php echo $row["email"]; ?>"
                data-phone="<?php echo $row["phone"]; ?>"
                data-city="<?php echo $row["city"]; ?>"
                title="Edit">
              </i></button>
					    </a>
              <a>
              <button type="button" class="btn btn-danger delete" data-bs-toggle="modal" data-bs-target="#deleteexampleModal"  data-id="<?php echo $row["uid"]; ?>">
                <i class="fa fa-trash" data-toggle="tooltip" title="Delete"></i></button></a>
            </td>
          </tr>
          <?php
            $i++;
            }
            ?>
    <?php }  else {

          echo $return ="<h4> no record found </h4>" ;?>

     <?php } ?>

  
        <!-- <tr>
          <td>1</td>
          <td>jlk</td>
          <td>;l;lk;</td>
          <td>;;l;</td>
          <td>jbhbjh</td>
          <td>
            <a href="" class="btn btn-success"><i class="fa-solid fa-pen-to-square"></i></a>
            <a href="" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
          </td>
        </tr> -->
      </tbody>
    </table>
 </div>
<!-- </form> -->

<!-- Edit Modal HTML -->
<div id="editexampleModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form id="update_form">
				<div class="modal-header">						
					<h4 class="modal-title">Edit User</h4>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
				<div class="modal-body">
					<input type="hidden" id="id_u" name="id" class="form-control" required>					
					<div class="form-group">
						<label>Name</label>
						<input type="text" id="name_u" name="name" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Email</label>
						<input type="email" id="email_u" name="email" class="form-control" required>
					</div>
					<div class="form-group">
						<label>phone</label>
						<input type="phone" id="phone_u" name="phone" class="form-control" required>
					</div>
					<div class="form-group">
						<label>City</label>
						<input type="city" id="city_u" name="city" class="form-control" required>
					</div>					
				</div>
				<div class="modal-footer">
				<input type="hidden" value="2" name="type">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">cancel</button>
					<button type="button" class="btn btn-info" id="update">Update</button>
				</div>
			</form>
		</div>
	</div>
</div>
<!-- Delete Modal HTML -->
<div id="deleteexampleModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form>
				<div class="modal-header">						
					<h4 class="modal-title mr-2">Delete User</h4>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
				<div class="modal-body">
					<input type="hidden" id="id_d" name="id" class="form-control">					
					<p>Are you sure you want to delete these Records?</p>
					<p class="text-warning"><small>This action cannot be undone.</small></p>
				</div>
				<div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">cancel</button>
					<button type="button" class="btn btn-danger" id="delete">Delete</button>
				</div>
			</form>
		</div>
	</div>
</div>
</body>
</html>