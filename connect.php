<?php
// Establish connection to MySQL database
$con = new mysqli("localhost", "root", "test");

// Check connection
if ($con->connect_error) {
    die("Failed to connect: " . $con->connect_error);
} else {
    // Prepare and execute SQL query
    $email = $_POST['email']; // Assuming email is submitted via POST method
    $password = $_POST['password']; // Assuming password is submitted via POST method

    $stmt = $con->prepare("SELECT * FROM registration WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt_result = $stmt->get_result();

    // Check if any rows were returned
    if ($stmt_result->num_rows > 0) {
        $data = $stmt_result->fetch_assoc();

        // Verify password
        if ($data['password'] === $password) {
            echo "<h2>Login Successfully</h2>";
        } else {
            echo "<h2>Invalid Email or password</h2>";
        }
    } else {
        echo "<h2>Invalid Email or password</h2>";
    }
}
?>
