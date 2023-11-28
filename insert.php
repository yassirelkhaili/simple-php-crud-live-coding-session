<?php
include('./config/dbconnection.php');
if (isset($_POST['submit'])) {
$firstname = $_POST["fname"];
$lastname = $_POST["lname"];
$contact = $_POST["contactno"];
$email = $_POST["email"];
$address = $_POST["address"];
$city = $_POST["city"];
$sql = "INSERT INTO `deb`.`users` (`FirstName`, `LastName`, `MobileNumber`, `Email`, `Address`, `ville_id`) VALUES ('$firstname', '$lastname', '$contact', '$email', '$address', '$city')";
$result = $mysqli->query($sql);
if ($result === TRUE) {
header("Location: http://localhost/");
} else {
echo "there was a problem" + $mysqli->error;
}
$mysqli->close();
}
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
		<h2>Fill Data</h2>
		<p class="hint-text">Fill below form.</p>
        <div class="form-group">
			<div class="row">
				<div class="col"><input type="text" class="form-control" name="fname" placeholder="First Name" required="true"></div>
				<div class="col"><input type="text" class="form-control" name="lname" placeholder="Last Name" required="true"></div>
			</div>        	
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="contactno" placeholder="Enter your Mobile Number" required="true" maxlength="10" pattern="[0-9]+">
        </div>
        <div class="form-group">
        	<input type="email" class="form-control" name="email" placeholder="Enter your Email id" required="true">
        </div>
		
		<div class="form-group">
            <textarea class="form-control" name="address" placeholder="Enter Your Address" required="true"></textarea>
        </div>
		<select name="city">
		<option value="0">Select City</option>
			<?php
            include('./config/dbconnection.php');
$sql = "SELECT * FROM `deb`.`villes`";
$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<option value='$row[id]'>$row[ville]</option>";
    }
} else {
    echo "0 results";
}
$mysqli->close();
?>  
		</select>
      
		<div class="form-group">
            <button type="submit" class="btn btn-success btn-lg btn-block" name="submit">Submit</button>
        </div>
    </form>
	<div class="text-center">View Aready Inserted Data!!  <a href="index.php">View</a></div>
</div>
</body>
</html>
