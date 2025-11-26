<!DOCTYPE html>
<html>
<head>
    <title>Practical 3: String Operations</title>
</head>
<body>
    <h2>String Operations</h2>
    <form method="POST">
        <label>Enter String:</label><br>
        <textarea name="input_string" rows="4" cols="30" required><?php echo isset($_POST['input_string']) ? htmlspecialchars($_POST['input_string']) : ''; ?></textarea><br><br>
        
        <label>For Substring/Replace (Search Text/Start Position):</label>
        <input type="text" name="search_text" value="<?php echo isset($_POST['search_text']) ? htmlspecialchars($_POST['search_text']) : ''; ?>"><br><br>
        
        <label>For Replace/Substring (Replace Text/Length):</label>
        <input type="text" name="replace_text" value="<?php echo isset($_POST['replace_text']) ? htmlspecialchars($_POST['replace_text']) : ''; ?>"><br><br>
        
        <button type="submit" name="operation" value="length">Find Length</button>
        <button type="submit" name="operation" value="substring">Extract Substring</button>
        <button type="submit" name="operation" value="replace">Replace Text</button>
        <button type="submit" name="operation" value="trim">Trim Whitespace</button>
        <button type="submit" name="operation" value="check">Check if String</button>
        <button type="submit" name="operation" value="ucwords">Capitalize Words</button>
    </form>

    <?php
    if(isset($_POST['operation'])) {
        $input = $_POST['input_string'];
        $search = isset($_POST['search_text']) ? $_POST['search_text'] : '';
        $replace = isset($_POST['replace_text']) ? $_POST['replace_text'] : '';
        $operation = $_POST['operation'];
        
        echo "<h3>Result:</h3>";
        
        switch($operation) {
            case 'length':
                $length = strlen($input);
                echo "<p>Length of string: $length characters</p>";
                break;
                
            case 'substring':
                if($search !== '' && $replace !== '') {
                    $start = intval($search);
                    $length = intval($replace);
                    $substring = substr($input, $start, $length);
                    echo "<p>Substring (from position $start, length $length): " . htmlspecialchars($substring) . "</p>";
                } else {
                    echo "<p>Please provide start position and length.</p>";
                }
                break;
                
            case 'replace':
                if($search !== '' && $replace !== '') {
                    $result = str_replace($search, $replace, $input);
                    echo "<p>Original: " . htmlspecialchars($input) . "</p>";
                    echo "<p>Modified: " . htmlspecialchars($result) . "</p>";
                } else {
                    echo "<p>Please provide search and replace text.</p>";
                }
                break;
                
            case 'trim':
                $trimmed = trim($input);
                echo "<p>Original: [" . htmlspecialchars($input) . "]</p>";
                echo "<p>Trimmed: [" . htmlspecialchars($trimmed) . "]</p>";
                break;
                
            case 'check':
                $isString = is_string($input);
                echo "<p>Is String: " . ($isString ? "YES" : "NO") . "</p>";
                break;
                
            case 'ucwords':
                $capitalized = ucwords(strtolower($input));
                echo "<p>Original: " . htmlspecialchars($input) . "</p>";
                echo "<p>Capitalized: " . htmlspecialchars($capitalized) . "</p>";
                break;
        }
    }
    ?>
</body>
</html>