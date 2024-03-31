<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST['fname'];
    $number = $_POST['num'];
    $address = $_POST['Addres'];
    $password = $_POST['pas'];
    
    // You can perform further validation and processing here
    
    // Example: Store data in a database (replace with your database logic)
    $servername = "localhost";
    $username = " ";
    $password = " ";
    $dbname = "database";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Insert data into database

    $sql = "INSERT INTO users (fname, num, Address, pas) VALUES ('$name', $number, '$address', '$password')";
    
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
