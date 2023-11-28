<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Crud Operation Using PHP and MySQLi</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/style.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container-xl">
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-5">
                        <h2>User <b>Details</b></h2>
                    </div>
                     
                </div>
            </div>
<table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info">
               
<tbody>
<?php
            include('./config/dbconnection.php');
// Code for Viewing Records (Read Operation)
require("./config/dbconnection.php");
$sql = "SELECT * FROM `deb`.`users`";
$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
        <th>First Name</th>
        <td>$row[FirstName]</td>
        <th>Last Name</th>
        <td>$row[LastName]</td>
      </tr>
      <tr>
    <th>Email</th>
    <td>$row[Email]</td>
    <th>Mobile Number</th>
    <td>$row[MobileNumber]</td>
  </tr>
  <tr>
    <th>Address</th>
    <td>$row[Address]</td>
    <th>Creation Date</th>
    <td>$row[CreationDate]</td>
  </tr>
  <tr>
    <th>City</th>
    <td>$row[ville_id]</td>
  </tr>
               ";
    }
} else {
    echo "0 results";
}
$mysqli->close();
?>  
</tbody>
</table>
       
        </div>
    </div>
</div>     
</body>
</html>