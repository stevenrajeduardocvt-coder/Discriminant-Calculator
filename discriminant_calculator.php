<?php
if (isset($_POST['submit'])) {
    $a = filter_input(INPUT_POST, 'a', FILTER_VALIDATE_FLOAT);
    $b = filter_input(INPUT_POST, 'b', FILTER_VALIDATE_FLOAT);
    $c = filter_input(INPUT_POST, 'c', FILTER_VALIDATE_FLOAT);

    if ($a !== false && $b !== false && $c !== false) {
        $discriminant = ($b * $b) - (4 * $a * $c);
        
        header("Location: result.php?disc=" . $discriminant);
        exit(); 
    } else {
        $error_message = "Please enter valid numbers for A, B, and C.";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Discriminant Calculator</title>
    <style>
        body {
            font-family: serif; 
            margin: 40px;
        }
        h1 {
            font-size: 40px;
            font-weight: bold;
            margin-bottom: 30px;
        }
        .input-group {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }
        .input-label {
            font-size: 24px;
            font-weight: bold;
            margin-right: 10px;
            width: 30px; 
        }
        input[type="number"] {
            padding: 10px;
            font-size: 24px;
            border: 1px solid black;
            width: 250px;
            height: 40px;
        }
        input[type="submit"] {
            padding: 10px 20px;
            font-size: 20px;
            margin-top: 10px;
        }
    </style>
</head>
<body>

<h1>Discriminant of a quadratic equation</h1>

<form method="POST">
    
    <div class="input-group">
        <span class="input-label">A</span>
        <input type="number" step="any" name="a" required value="<?php echo isset($_POST['a']) ? $_POST['a'] : '3'; ?>">
    </div>
    
    <div class="input-group">
        <span class="input-label">B</span>
        <input type="number" step="any" name="b" required value="<?php echo isset($_POST['b']) ? $_POST['b'] : '2'; ?>">
    </div>
    
    <div class="input-group">
        <span class="input-label">C</span>
        <input type="number" step="any" name="c" required value="<?php echo isset($_POST['c']) ? $_POST['c'] : '1'; ?>">
    </div>

    <input type="submit" name="submit" value="Submit">
</form>

<?php 
if (isset($error_message)) {
    echo "<p style='color:red; font-size:18px;'>$error_message</p>";
}
?>
</body>
</html>