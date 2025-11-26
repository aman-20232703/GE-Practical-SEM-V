<!DOCTYPE html>
<html>
<head>
    <title>Practical 4: Login Form Validation</title>
</head>
<body>
    <?php
    session_start();
    
    if(isset($_SESSION['username']) && isset($_GET['welcome'])) {
        $username = $_SESSION['username'];
        echo "<h2>Welcome " . htmlspecialchars($username) . "!</h2>";
        echo '<a href="?logout=true">Logout</a>';
        exit();
    }
    
    if(isset($_GET['logout'])) {
        session_destroy();
        header("Location: " . $_SERVER['PHP_SELF']);
        exit();
    }
    
    $errors = array();
    $username = "";
    
    if(isset($_POST['login'])) {
        $username = trim($_POST['username']);
        $password = trim($_POST['password']);
        
        if(empty($username)) {
            $errors[] = "Username is required";
        } elseif(strlen($username) < 3) {
            $errors[] = "Username must be at least 3 characters long";
        }
        
        if(empty($password)) {
            $errors[] = "Password is required";
        } elseif(strlen($password) < 6) {
            $errors[] = "Password must be at least 6 characters long";
        }
        
        if(!empty($username) && !preg_match("/^[a-zA-Z0-9_]+$/", $username)) {
            $errors[] = "Username can only contain letters, numbers, and underscores";
        }
        
        if(empty($errors)) {
            $_SESSION['username'] = $username;
            header("Location: " . $_SERVER['PHP_SELF'] . "?welcome=true");
            exit();
        }
    }
    ?>
    
    <h2>Login Form</h2>
    
    <?php
    if(!empty($errors)) {
        echo "<div style='color:red; border:1px solid red; padding:10px;'>";
        echo "<strong>Validation Errors:</strong><ul>";
        foreach($errors as $error) {
            echo "<li>" . htmlspecialchars($error) . "</li>";
        }
        echo "</ul></div><br>";
    }
    ?>
    
    <form method="POST">
        <label>Username:</label>
        <input type="text" name="username" value="<?php echo htmlspecialchars($username); ?>"><br><br>
        
        <label>Password:</label>
        <input type="password" name="password"><br><br>
        
        <button type="submit" name="login">Login</button>
    </form>
</body>
</html>