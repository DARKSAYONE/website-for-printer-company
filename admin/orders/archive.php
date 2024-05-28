<?php 
include("../../path.php");
include("../../app/database/db.php");
include("../../app/database/checkadminstat.php");

if (isset($_GET['id'])) {
    $order = selectOne('orders', ['id' => $_GET['id']]);
    $order['archived'] = 1;
    UpdateDB('orders', $order['id'], $order);
    header('Location: ' . BASE_URL . '/admin/orders/index.php');
}
?>
