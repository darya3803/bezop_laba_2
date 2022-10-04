<?php
    $db_host='localhost'; 
    $db_name='laba2'; 
    $db_user='root'; 
    $db_pass='root'; 
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    $mysqli = new mysqli($db_host, $db_user, $db_pass, $db_name); 
    $mysqli->set_charset("utf8mb4"); 
    $result = $mysqli->query('SELECT * FROM `laba22`'); 
    while($row = $result->fetch_assoc())
    {
        echo '<p>Запись id='.$row['id'].'. Текст: '.$row['h1'].'</p>';
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>