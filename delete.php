<?php
            include('./config/dbconnection.php');
            $id = $_GET["id"];
$sql = "DELETE FROM `deb`.`users` WHERE id=$id";
$result = $mysqli->query($sql);
if ($result === TRUE) {
    header("Location: http://localhost/");
} else {
    echo "there was a problem" + $mysqli->error;
}
$mysqli->close();
?>  