<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $host = 'database';
        $dbname = 'tutorials';
        $username = 'mysql';
        $password = 'root';
        try {
            $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
            echo "Connected to $dbname at $host successfully.";
        } catch (PDOException $pe) {
            die("Could not connect to the database $dbname :" . $pe->getMessage());
        }
    ?>
</body>
</html>