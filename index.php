<?php
//database conection  file

//Code for deletion using delete operation

?>
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
                        <h2>User <b>Management</b></h2>
                    </div>
                       <div class="col-sm-7" align="right">
                        <a href="insert.php" class="btn btn-secondary"><i class="material-icons">&#xE147;</i> <span>Add New User</span></a>
                                        
                    </div>
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>                       
                        <th>Email</th>
                        <th>Mobile Number</th>
                        <th>Created Date</th>
                        <th>City</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php
            include('./config/dbconnection.php');
$sql = "SELECT * FROM `users` LEFT JOIN `villes` ON `villes`.`id` = `users`.`ville_id`";
$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
        <td>$row[ID]</td>
        <td>$row[FirstName] $row[LastName]</td>
        <td>$row[Email]</td>                        
        <td>$row[MobileNumber]</td>
        <td>$row[CreationDate]</td>
        <td>$row[ville]</td>
        <td>
<a href='read.php?viewid=<?php echo htmlentities ($row[ID]);?>' class='view' title='View' data-toggle='tooltip'><i class='material-icons'>&#xE417;</i></a>
            <a href='edit.php?id=$row[ID]' class='edit' title='Edit' data-toggle='tooltip'><i class='material-icons'>&#xE254;</i></a>
            <a href='delete.php?id=$row[ID]' class='delete' title='Delete' data-toggle='tooltip' onclick='return confirm('Do you really want to Delete ?')'><i class='material-icons'>&#xE872;</i></a>
        </td>
    </tr>";
    }
} else {
    echo "<tr>
    <th style='text-align:center; color:red;' colspan='6'>No Record Found</th>
</tr>";
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

<tbody>
                <?php
            include('./config/dbconnection.php');
$sql = "SELECT * FROM users LEFT JOIN villes ON villes.id = users.ville_id";
$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
        <td>$row[ID]</td>
        <td>$row[FirstName] $row[LastName]</td>
        <td>$row[Email]</td>
        <td>$row[MobileNumber]</td>
        <td>$row[CreationDate]</td>
        <td>$row[ville]</td>
        <td>
<a href='read.php?viewid=<?php echo htmlentities ($row[ID]);?>' class='view' title='View' data-toggle='tooltip'><i class='material-icons'>&#xE417;</i></a>
            <a href='edit.php?id=$row[ID]' class='edit' title='Edit' data-toggle='tooltip'><i class='material-icons'>&#xE254;</i></a>
            <a href='delete.php?id=$row[ID]' class='delete' title='Delete' data-toggle='tooltip' onclick='return confirm('Do you really want to Delete ?')'><i class='material-icons'>&#xE872;</i></a>
        </td>
    </tr>";
    }
} else {
    echo "<tr>
    <th style='text-align:center; color:red;' colspan='6'>No Record Found</th>
</tr>";
}
$mysqli->close();
?>
                </tbody>