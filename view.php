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

$sql = "SELECT * FROM students";
$result = $conn->query($sql);

echo "<h2>Student Results</h2>";
echo "<table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Roll Number</th>
            <th>Subject</th>
            <th>Marks</th>
        </tr>";

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['name']}</td>
                <td>{$row['roll_no']}</td>
                <td>{$row['subject']}</td>
                <td>{$row['marks']}</td>
              </tr>";
    }
} else {
    echo "<tr><td colspan='5'>No results found</td></tr>";
}
echo "</table>";

$conn->close();
?>
