<?php 
//Database Connection

  	//Getting Post Values


    //Query for data updation

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
<title>Crud Operation Using PHP and MySQLi</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/style.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

</head>
<body>
<div class="signup-form">
    <form  method="POST">
 <?php
 // Code for Updation (Update Operation)

// get id through query string
// select query for updating user info 
 // fetch data from database
?>
		<h2>Update </h2>
		<p class="hint-text">Update your info.</p>
        <div class="form-group">
			<div class="row">
				<div class="col"><input type="text" class="form-control" name="fname" value="<?php  echo "first name";?>" required="true"></div>
				<div class="col"><input type="text" class="form-control" name="lname" value="<?php  echo "last name";?>" required="true"></div>
			</div>        	
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="contactno" value="<?php  echo "mobile phone";?>" required="true" maxlength="10" pattern="[0-9]+">
        </div>
        <div class="form-group">
        	<input type="email" class="form-control" name="email" value="<?php  echo "email"?>" required="true">
        </div>
		
		<div class="form-group">
            <textarea class="form-control" name="address" required="true"><?php  echo "address";?></textarea>
        </div>
        <!-- get city from database -->
		<select>
			<option value="0">Select City</option>
			<option value="1">Delhi</option>
			<option value="2">Mumbai</option>
			<option value="3">Pune</option>
			<option value="4">Banglore</option>
		</select>
	
		<div class="form-group">
            <button type="submit" class="btn btn-success btn-lg btn-block" name="submit">Update</button>
        </div>
    </form>

</div>
</body>
</html>