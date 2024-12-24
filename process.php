<?php
$servername = "localhost";
$username = "root"; // Change if needed
$password = ""; // Change if needed
$dbname = "student_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $roll_no = $_POST['roll_no'];
    $subject = $_POST['subject'];
    $marks = $_POST['marks'];

    $sql = "INSERT INTO students (name, roll_no, subject, marks) VALUES ('$name', '$roll_no', '$subject', $marks)";

    if ($conn->query($sql) === TRUE) {
        echo "Result added successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
