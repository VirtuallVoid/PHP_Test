<?php
require('../Controllers/DatabaseUtils.php');


$dbOBJ = new DatabaseUtils();
$handler = $dbOBJ->connect();


$productIDArray = $_POST['productIDArray'];
$dvdIDArray = $_POST['dvdIDArray'];
$bookIDArray = $_POST['bookIDArray'];
$furnitureIDArray = $_POST['furnitureIDArray'];

$helper = "(";
foreach ($productIDArray as $item) {
    $helper .= $item . ", ";
}
$helper = substr($helper, 0, strlen($helper) - 2) . ")";
$sql = "DELETE FROM `products` WHERE ID IN " . $helper;
$statement = $handler->query($sql);
$statement->execute();

if (!empty($dvdIDArray)) {
    $helper = "(";
    foreach ($dvdIDArray as $item) {
        $helper .= $item . ", ";
    }
    $helper = substr($helper, 0, strlen($helper) - 2) . ")";
    $sql = "DELETE FROM `dvds` WHERE ID IN " . $helper;
    $statement = $handler->query($sql);
    $statement->execute();
}

if (!empty($bookIDArray)) {
    $helper = "(";
    foreach ($bookIDArray as $item) {
        $helper .= $item . ", ";
    }
    $helper = substr($helper, 0, strlen($helper) - 2) . ")";
    $sql = "DELETE FROM `books` WHERE ID IN " . $helper;
    $statement = $handler->query($sql);
    $statement->execute();
}

if (!empty($furnitureIDArray)) {
    $helper = "(";
    foreach ($furnitureIDArray as $item) {
        $helper .= $item . ", ";
    }
    $helper = substr($helper, 0, strlen($helper) - 2) . ")";
    $sql = "DELETE FROM `furniture` WHERE ID IN " . $helper;
    $statement = $handler->query($sql);
    $statement->execute();
}