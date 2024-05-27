<?php 
include("../../path.php");
include("../../app/database/db.php");

$id = $_GET['id'];

DeleteFromDB('posts', $id);

header('location: ' . BASE_URL . '/admin/portfolio/index.php');
