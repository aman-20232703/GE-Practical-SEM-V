<!DOCTYPE html>
<html>
<head>
    <title>Practical 2: Sum Calculator</title>
</head>
<body>
    <h2>Evaluate Sum of Two Numbers</h2>
    <form method="POST">
        <label>First Number:</label>
        <input type="number" name="num1" step="any" required><br><br>
        
        <label>Second Number:</label>
        <input type="number" name="num2" step="any" required><br><br>
        
        <button type="submit" name="evaluate">Evaluate</button>
    </form>

    <?php
    if(isset($_POST['evaluate'])) {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $sum = $num1 + $num2;
        
        echo "<p>Sum: $num1 + $num2 = $sum</p>";
    }
    ?>
</body>
</html>