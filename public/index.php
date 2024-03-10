<?php
$servername = "127.0.0.1:3307"; // Replace 'localhost' with your MySQL server hostname
$username = "root"; // Replace 'username' with your MySQL username
$password = ""; // Replace 'password' with your MySQL password
$database = "laravel"; // Replace 'database' with your MySQL database name

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM users";

// Execute the query
$result = $conn->query($sql);

// Check if the query returned any results
if ($result->num_rows > 0) {
    echo "<p>Users</p>";
    // Loop through the results and output data
    while($row = $result->fetch_assoc()) {
        echo "First Name: " . $row["first_name"] . " - Last Name: " . $row["last_name"] . " - Email: " . $row["email"] . "<br>";
    }
} else {
    echo "No results found";
}

// Close the connection
$conn->close();
?>
