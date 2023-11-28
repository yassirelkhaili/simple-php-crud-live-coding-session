<?php
include('./config/dbconnection.php');
if (isset($_POST['submit']) && isset($_GET["id"])) {
$id = $_GET["id"];
$firstname = $_POST["fname"];
$lastname = $_POST["lname"];
$contact = $_POST["contactno"];
$email = $_POST["email"];
$address = $_POST["address"];
$city = $_POST["city"];
$sql = "UPDATE `deb`.`users` SET `FirstName`='$firstname', `LastName`='$lastname', `MobileNumber`='$contact', `Email`='$email', `Address`='$address', `ville_id`='$city' WHERE id=$id";
$result = $mysqli->query($sql);
if ($result === TRUE) {
header("Location: http://localhost/");
} else {
echo "there was a problem" + $mysqli->error;
}
$mysqli->close();
}
?>  
 <?php
            include('./config/dbconnection.php');
			$id = $_GET["id"];
$sql = "SELECT * FROM `users` WHERE id='$id'";
$result = $mysqli->query($sql);

    $row = $result->fetch_assoc();
$mysqli->close();
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
		<h2>Update </h2>
		<p class="hint-text">Update your info.</p>
        <div class="form-group">
			<div class="row">
				<div class="col"><input type="text" class="form-control" name="fname" value="<?php  echo $row["FirstName"];?>" required="true"></div>
				<div class="col"><input type="text" class="form-control" name="lname" value="<?php  echo $row["LastName"];?>" required="true"></div>
			</div>        	
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="contactno" value="<?php  echo $row["MobileNumber"];?>" required="true" maxlength="10">
        </div>
        <div class="form-group">
        	<input type="email" class="form-control" name="email" value="<?php  echo $row["Email"];?>" required="true">
        </div>
		
		<div class="form-group">
            <textarea class="form-control" name="address" required="true"><?php  echo $row["Address"];?></textarea>
        </div>
        <!-- get city from database -->
		<select name="city">
		<option value="0">Select City</option>
			<?php
            include('./config/dbconnection.php');
$sql = "SELECT * FROM `deb`.`villes`";
$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
    while ($row2 = $result->fetch_assoc()) {
        if ($row["ville_id"] === $row2["id"]) {
			echo "<option value='$row2[id]' selected>$row2[ville]</option>";
		} else {
			echo "<option value='$row2[id]'>$row2[ville]</option>";
		}
    }
} else {
    echo "0 results";
}
$mysqli->close();
?>  
		</select>
	
		<div class="form-group">
            <button type="submit" class="btn btn-success btn-lg btn-block" name="submit">Update</button>
        </div>
    </form>

</div>
</body>
</html>