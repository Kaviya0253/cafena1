
<?php
// Database credentials
$servername = "localhost"; // Change this to your server name
$username = "root"; // Change this to your database username
$password = "1234"; // Change this to your database password
$dbname = "cafena"; // Change this to your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname );

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     // Escape user inputs for security
//     $username = $conn->real_escape_string($_POST['username']);
//     $password = $conn->real_escape_string($_POST['password']);

    // Attempt insert query
    $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }


// Close connection
$conn->close();
?>

