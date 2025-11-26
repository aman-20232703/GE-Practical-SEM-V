<!DOCTYPE html>
<html>
<head>
    <title>Practical 5: Student Registration Form</title>
</head>
<body>
    <h2>Student Registration Form</h2>
    <form method="POST">
        <label>First Name:</label>
        <input type="text" name="firstname" required><br><br>
        
        <label>Last Name:</label>
        <input type="text" name="lastname" required><br><br>
        
        <label>Gender:</label>
        <input type="radio" name="gender" value="Male" required> Male
        <input type="radio" name="gender" value="Female"> Female
        <input type="radio" name="gender" value="Other"> Other<br><br>
        
        <label>Roll Number:</label>
        <input type="text" name="rollnumber" required><br><br>
        
        <label>Phone Number:</label>
        <input type="tel" name="phone" required><br><br>
        
        <label>Course:</label>
        <select name="course" required>
            <option value="">Select Course</option>
            <option value="BCA">BCA</option>
            <option value="MCA">MCA</option>
            <option value="B.Tech">B.Tech</option>
            <option value="M.Tech">M.Tech</option>
        </select><br><br>
        
        <button type="submit" name="submit">Submit</button>
    </form>

    <?php
    if(isset($_POST['submit'])) {
        echo "<h3>Submitted Data using POST:</h3>";
        echo "<p>First Name: " . htmlspecialchars($_POST['firstname']) . "</p>";
        echo "<p>Last Name: " . htmlspecialchars($_POST['lastname']) . "</p>";
        echo "<p>Gender: " . htmlspecialchars($_POST['gender']) . "</p>";
        echo "<p>Roll Number: " . htmlspecialchars($_POST['rollnumber']) . "</p>";
        echo "<p>Phone Number: " . htmlspecialchars($_POST['phone']) . "</p>";
        echo "<p>Course: " . htmlspecialchars($_POST['course']) . "</p>";
    }
    ?>

    <hr>
    <h2>Using GET Method</h2>
    <form method="GET">
        <label>First Name:</label>
        <input type="text" name="firstname" required><br><br>
        
        <label>Last Name:</label>
        <input type="text" name="lastname" required><br><br>
        
        <label>Gender:</label>
        <input type="radio" name="gender" value="Male" required> Male
        <input type="radio" name="gender" value="Female"> Female
        <input type="radio" name="gender" value="Other"> Other<br><br>
        
        <label>Roll Number:</label>
        <input type="text" name="rollnumber" required><br><br>
        
        <label>Phone Number:</label>
        <input type="tel" name="phone" required><br><br>
        
        <label>Course:</label>
        <select name="course" required>
            <option value="">Select Course</option>
            <option value="BCA">BCA</option>
            <option value="MCA">MCA</option>
            <option value="B.Tech">B.Tech</option>
            <option value="M.Tech">M.Tech</option>
        </select><br><br>
        
        <button type="submit" name="submit_get">Submit</button>
    </form>

    <?php
    if(isset($_GET['submit_get'])) {
        echo "<h3>Submitted Data using GET:</h3>";
        echo "<p>First Name: " . htmlspecialchars($_GET['firstname']) . "</p>";
        echo "<p>Last Name: " . htmlspecialchars($_GET['lastname']) . "</p>";
        echo "<p>Gender: " . htmlspecialchars($_GET['gender']) . "</p>";
        echo "<p>Roll Number: " . htmlspecialchars($_GET['rollnumber']) . "</p>";
        echo "<p>Phone Number: " . htmlspecialchars($_GET['phone']) . "</p>";
        echo "<p>Course: " . htmlspecialchars($_GET['course']) . "</p>";
    }
    ?>
</body>
</html>
