<?php

require_once'config/config.php';
require_once'includes/activity-logger.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $action = $_POST['action'] ?? '';

    echo "<script>alert('Database action successful!');</script>";
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form method="POST">
   <button type="submit" name="action" value="sample">
    sample
</button>

</body>
</html>