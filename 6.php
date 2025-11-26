<!DOCTYPE html>
<html>
<head>
    <title>Practical 6: Database Operations</title>
</head>
<body>
    <h2>Database Operations - Student Management</h2>

    <?php
    // Database configuration
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "student_db";

    // Create connection
    $conn = new mysqli($servername, $username, $password);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Create database
    $sql = "CREATE DATABASE IF NOT EXISTS $dbname";
    if ($conn->query($sql) === TRUE) {
        echo "<p>Database created successfully or already exists</p>";
    }

    // Select database
    $conn->select_db($dbname);

    // Create table
    $sql = "CREATE TABLE IF NOT EXISTS students (
        id INT AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(100) NOT NULL,
        roll_number VARCHAR(50) NOT NULL,
        course VARCHAR(50) NOT NULL,
        marks INT NOT NULL,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    )";

    if ($conn->query($sql) === TRUE) {
        echo "<p>Table created successfully or already exists</p>";
    }

    // Handle Add Data
    if(isset($_POST['add_data'])) {
        $name = $_POST['name'];
        $roll = $_POST['roll_number'];
        $course = $_POST['course'];
        $marks = $_POST['marks'];
        
        $sql = "INSERT INTO students (name, roll_number, course, marks) 
                VALUES ('$name', '$roll', '$course', $marks)";
        
        if ($conn->query($sql) === TRUE) {
            echo "<p><strong>The record is added in the database!</strong></p>";
        } else {
            echo "<p>Error: " . $conn->error . "</p>";
        }
    }

    // Handle Delete Data
    if(isset($_POST['delete_data'])) {
        $id = $_POST['delete_id'];
        $sql = "DELETE FROM students WHERE id = $id";
        
        if ($conn->query($sql) === TRUE) {
            echo "<p><strong>A record is deleted from the database</strong></p>";
        } else {
            echo "<p>Error: " . $conn->error . "</p>";
        }
    }

    // Handle Update Data
    if(isset($_POST['update_data'])) {
        $id = $_POST['update_id'];
        $name = $_POST['update_name'];
        $marks = $_POST['update_marks'];
        
        $sql = "UPDATE students SET name='$name', marks=$marks WHERE id=$id";
        
        if ($conn->query($sql) === TRUE) {
            echo "<p><strong>Record updated successfully!</strong></p>";
        } else {
            echo "<p>Error: " . $conn->error . "</p>";
        }
    }
    ?>

    <hr>
    <h3>Add Student Data</h3>
    <form method="POST">
        <label>Name:</label>
        <input type="text" name="name" required><br><br>
        
        <label>Roll Number:</label>
        <input type="text" name="roll_number" required><br><br>
        
        <label>Course:</label>
        <input type="text" name="course" required><br><br>
        
        <label>Marks:</label>
        <input type="number" name="marks" required><br><br>
        
        <button type="submit" name="add_data">Add Data</button>
    </form>

    <hr>
    <h3>Update Student Data</h3>
    <form method="POST">
        <label>Student ID:</label>
        <input type="number" name="update_id" required><br><br>
        
        <label>New Name:</label>
        <input type="text" name="update_name" required><br><br>
        
        <label>New Marks:</label>
        <input type="number" name="update_marks" required><br><br>
        
        <button type="submit" name="update_data">Update Data</button>
    </form>

    <hr>
    <h3>Delete Student Data</h3>
    <form method="POST">
        <label>Student ID to Delete:</label>
        <input type="number" name="delete_id" required><br><br>
        
        <button type="submit" name="delete_data">Delete Data</button>
    </form>

    <hr>
    <h3>Display All Students</h3>
    <form method="POST">
        <button type="submit" name="display_data">Display Data</button>
    </form>

    <?php
    if(isset($_POST['display_data'])) {
        $sql = "SELECT * FROM students ORDER BY id";
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
            echo "<table border='1' cellpadding='10'>";
            echo "<tr><th>ID</th><th>Name</th><th>Roll Number</th><th>Course</th><th>Marks</th><th>Created At</th></tr>";
            
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['roll_number'] . "</td>";
                echo "<td>" . $row['course'] . "</td>";
                echo "<td>" . $row['marks'] . "</td>";
                echo "<td>" . $row['created_at'] . "</td>";
                echo "</tr>";
            }
            echo "</table>";
        } else {
            echo "<p>No records found</p>";
        }
    }
    ?>

    <hr>
    <h3>Advanced Queries</h3>
    
    <h4>1. GROUP BY Course</h4>
    <form method="POST">
        <button type="submit" name="group_by">Show Average Marks by Course</button>
    </form>
    
    <?php
    if(isset($_POST['group_by'])) {
        $sql = "SELECT course, AVG(marks) as avg_marks, COUNT(*) as total_students 
                FROM students GROUP BY course";
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
            echo "<table border='1' cellpadding='10'>";
            echo "<tr><th>Course</th><th>Average Marks</th><th>Total Students</th></tr>";
            
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['course'] . "</td>";
                echo "<td>" . round($row['avg_marks'], 2) . "</td>";
                echo "<td>" . $row['total_students'] . "</td>";
                echo "</tr>";
            }
            echo "</table>";
        } else {
            echo "<p>No records found</p>";
        }
    }
    ?>

    <h4>2. ORDER BY Marks (Descending)</h4>
    <form method="POST">
        <button type="submit" name="order_by">Show Students by Highest Marks</button>
    </form>
    
    <?php
    if(isset($_POST['order_by'])) {
        $sql = "SELECT * FROM students ORDER BY marks DESC";
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
            echo "<table border='1' cellpadding='10'>";
            echo "<tr><th>ID</th><th>Name</th><th>Roll Number</th><th>Course</th><th>Marks</th></tr>";
            
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['roll_number'] . "</td>";
                echo "<td>" . $row['course'] . "</td>";
                echo "<td>" . $row['marks'] . "</td>";
                echo "</tr>";
            }
            echo "</table>";
        } else {
            echo "<p>No records found</p>";
        }
    }
    
    $conn->close();
    ?>
</body>
</html>