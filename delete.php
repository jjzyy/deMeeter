<?php


session_start();
require 'config.php';


$product->deleteOne(['_id' => new MongoDB\BSON\ObjectID($_GET['id'])]);


$_SESSION['success'] = "Book deleted successfully";
header("Location: index.php");


?>