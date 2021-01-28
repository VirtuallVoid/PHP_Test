<?php
require('../Controllers/DatabaseUtils.php');
require ('../Model/Entry.php');

$dbOBJ = new DatabaseUtils();
$handler = $dbOBJ->connect();

$sql = "SELECT `products`.`ID` as productID,
    `products`.`SKU`,
    `products`.`product_name`,
    `products`.`product_price`,
    `products`.`product_type`,
    `products`.`dvdID`,
    `products`.`bookID`,
    `products`.`furnitureID`,
	CASE
       WHEN `product_type` = 'DVD' THEN concat('Size: ', `DVD_MB`, ' MB')
       WHEN `product_type` = 'Book' THEN concat ('Weight:', `book_weight`, ' KG')
       ELSE concat('Dimensions: ', `fur_height`, ' x ', `fur_width`, ' x ', `fur_length`)
    END as info
FROM `products`
left join `dvds` on `products`.`dvdID` = `dvds`.`ID`
left join `books` on `products`.`bookID` = `books`.`ID`
left join `furniture` on `products`.`furnitureID` = `furniture`.`ID`";

$statement = $handler -> query($sql);
$statement -> setFetchMode(PDO::FETCH_CLASS, 'Entry');

$container = array();
while ($row = $statement -> fetch()){
    array_push($container, $row);
}
echo json_encode($container);





