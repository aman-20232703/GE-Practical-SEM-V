<!DOCTYPE html>
<html>
<head>
    <title>Practical 1: Reverse Digits</title>
</head>
<body>
    <h2>Reverse the Digits of a Number</h2>
    <form method="POST">
        <label>Enter a number:</label>
        <input type="number" name="number" required>
        <button type="submit" name="submit">Reverse</button>
    </form>

    <?php
    if(isset($_POST['submit'])) {
        $number = $_POST['number'];
        $reversed = 0;
        $original = $number;
        
        while($number != 0) {
            $digit = $number % 10;
            $reversed = $reversed * 10 + $digit;
            $number = (int)($number / 10);
        }
        
        echo "<p>Original Number: " . $original . "</p>";
        echo "<p>Reversed Number: " . $reversed . "</p>";
    }
    ?>
</body>
</html>