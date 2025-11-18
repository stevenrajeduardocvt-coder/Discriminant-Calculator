<?php
$discriminant_value = null;

if (isset($_GET['disc'])) {
    $discriminant_value = $_GET['disc'];
} else {
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Calculation Result</title>
    <style>
        body {
            font-family: serif;
            margin: 40px;
            display: flex;
            height: 90vh;
            flex-direction: column;
        }
        .result-display {
            font-size: 150px; 
            font-weight: bold;
            color: black;
        }
    </style>
</head>
<body>

<div class="result-display">
    <?php 
    echo number_format((float)$discriminant_value, 0); 
    ?>
</div>

</body>
</html>