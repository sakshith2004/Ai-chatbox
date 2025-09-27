<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "students";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to select all students
$sql = "SELECT * FROM students";
$result = $conn->query($sql);

// Initialize an array to hold student data
$students = [];

// Fetch data from the database and populate the students array
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $students[] = $row;
    }
} else {
    echo "No students found.";
}

// Selection Sort function to sort students by a specific key (in this case, 'name')
function selectionSort(&$arr, $key)
{
    $n = count($arr);
    for ($i = 0; $i < $n - 1; $i++) {
        $minIndex = $i;
        for ($j = $i + 1; $j < $n; $j++) {
            if ($arr[$j][$key] < $arr[$minIndex][$key]) {
                $minIndex = $j;
            }
        }
        // Swap the elements
        $temp = $arr[$i];
        $arr[$i] = $arr[$minIndex];
        $arr[$minIndex] = $temp;
    }
}

// Sort the students array by 'name'
selectionSort($students, 'name');

// Display the sorted student list
echo "<h1>Sorted Student List</h1>";
echo "<table border='1'>";
echo "<tr><th>Name</th><th>Email</th><th>Age</th></tr>";
foreach ($students as $student) {
    echo "<tr>";
    echo "<td>" . htmlspecialchars($student['name']) . "</td>";
    echo "<td>" . htmlspecialchars($student['email']) . "</td>";
    echo "<td>" . htmlspecialchars($student['age']) . "</td>";
    echo "</tr>";
}
echo "</table>";

// Close the database connection
$conn->close();
?>







