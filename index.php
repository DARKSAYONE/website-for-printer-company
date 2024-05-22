<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
<?php
require_once 'dbconfig.php';
// Подключаемся к базе.
$connection = new mysqli($host, $user, $pass, $db);
if($connection->connect_error) die('Error connection');



//Тест вывода данных.
$querry = "SELECT * FROM users";
$result = $connection ->query($querry);
//Проверка
if(!$result) die('Error select');



$rows = $result->num_rows;
for($i = 0; $i < $rows; ++$i)
{
    $result->data_seek($i);
    echo 'Name: ' . $result->fetch_assoc()['name']. '<br>';
}

$result->close();
$connection ->close();
/*echo '<pre>';
print_r($result);
echo '</pre>';
*/
?>
</body>
</html>