<?php

    $username = $_POST['newuser'];
    $passname = $_POST['newpassword'];


    $sql = "INSERT INTO user (username, password) VALUES ('$username', '$passname')";
    
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } 
    else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
?>
<a href="../index.php">go back</a>