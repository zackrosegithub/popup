<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$mysqli = new mysqli("localhost", "testuser", "123456", "AA");

// Check connection
if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}

// Escape user inputs for security
$vname = $mysqli->real_escape_string($_REQUEST['vname']);
$vemail = $mysqli->real_escape_string($_REQUEST['vemail']);
$sub = $mysqli->real_escape_string($_REQUEST['sub']);
$msg = $mysqli->real_escape_string($_REQUEST['msg']);


// Attempt insert query execution
$sql = "INSERT INTO persons (vname, vemail, sub, msg) VALUES ('$vname', '$vemail', '$sub', '$msg')";
if($mysqli->query($sql) === true){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
}

// Close connection
$mysqli->close();
?>
