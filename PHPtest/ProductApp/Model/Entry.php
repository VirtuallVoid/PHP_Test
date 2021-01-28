<?php


class Entry
{

    public $productID, $SKU, $product_name, $product_price, $product_type, $dvdID, $bookID, $furnitureID, $info;

}






/*
 SELECT `products`.`ID` as productID,
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
FROM `scandiweb2`.`products`
inner join `dvds` on `products`.`dvdID` = `dvds`.`ID`
inner join `books` on `products`.`bookID` = `books`.`ID`
inner join `furniture` on `products`.`furnitureID` = `furniture`.`ID`;

  */