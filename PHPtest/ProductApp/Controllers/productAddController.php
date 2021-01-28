<?php
require('../Controllers/DatabaseUtils.php');
require('../Model/Products.php');
require('../Model/Dvds.php');
require('../Model/Books.php');
require('../Model/Furniture.php');

$dbOBJ = new DatabaseUtils();
$handler = $dbOBJ->connect();


$product_type = $_POST['switch_type'];
switch ($product_type) {
    case "DVD-disc":
    {
        $dvdOBJ = new Dvds(null, $_POST['SKU'], $_POST['product_name'], (float)$_POST['product_price'],
            'DVD', null, null, null, (int)$_POST['DVD_MB']);

        $statement = $handler->prepare("INSERT INTO `dvds` (`DVD_MB`) VALUES(:DVD_MB)");
        $statement->bindValue(':DVD_MB', $dvdOBJ->getDVDMB(), PDO::PARAM_INT);
        $statement->execute();

        $dvdOBJ->setID($handler->lastInsertId());
        //echo "ID= " . $dvdOBJ->getID() . "\n";


        $statement = $handler->prepare("INSERT INTO `products`
                (`SKU`, `product_name`, `product_price`, `product_type`, `dvdID`,`bookID`,`furnitureID`)
                VALUES (:SKU, :product_name, :product_price, :product_type, :dvdID, :bookID, :furnitureID)");
        $statement->bindValue(':SKU', $dvdOBJ->getSKU(), PDO::PARAM_STR);
        $statement->bindValue(':product_name', $dvdOBJ->getProductName(), PDO::PARAM_STR);
        $statement->bindValue(':product_price', $dvdOBJ->getProductPrice(), PDO::PARAM_STR);
        $statement->bindValue(':product_type', $dvdOBJ->getProductType(), PDO::PARAM_STR);
        $statement->bindValue(':dvdID', $dvdOBJ->getID(), PDO::PARAM_INT);
        $statement->bindValue(':bookID', null, PDO::PARAM_NULL);
        $statement->bindValue(':furnitureID', null, PDO::PARAM_NULL);

        $statement->execute();
        echo 'success';
        break;
    }

    case "Book":
    {
        $bookOBJ = new Books(null, $_POST['SKU'], $_POST['product_name'], (float)$_POST['product_price'],
            'Book', null, null, null, (int)$_POST['book_weight']);

        $statement = $handler->prepare("INSERT INTO `books` (`book_weight`) VALUES(:book_weight)");
        $statement->bindValue(':book_weight', $bookOBJ->getBookWeight(), PDO::PARAM_INT);
        $statement->execute();

        $bookOBJ->setID($handler->lastInsertId());
        //echo "ID= " . $bookOBJ->getID() . "\n";

        $statement = $handler->prepare("INSERT INTO `products`
                (`SKU`, `product_name`, `product_price`, `product_type`, `dvdID`,`bookID`,`furnitureID`)
                VALUES (:SKU, :product_name, :product_price, :product_type, :dvdID, :bookID, :furnitureID)");
        $statement->bindValue(':SKU', $bookOBJ->getSKU(), PDO::PARAM_STR);
        $statement->bindValue(':product_name', $bookOBJ->getProductName(), PDO::PARAM_STR);
        $statement->bindValue(':product_price', $bookOBJ->getProductPrice(), PDO::PARAM_STR);
        $statement->bindValue(':product_type', $bookOBJ->getProductType(), PDO::PARAM_STR);
        $statement->bindValue(':dvdID', null, PDO::PARAM_NULL);
        $statement->bindValue(':bookID', $bookOBJ->getID(), PDO::PARAM_INT);
        $statement->bindValue(':furnitureID', null, PDO::PARAM_NULL);

        $statement->execute();
        echo 'success';
        break;
    }

    default :
    {
        $furOBJ = new Furniture(null, $_POST['SKU'], $_POST['product_name'], (float)$_POST['product_price'],
            'Furniture', null, null, null, (int)$_POST['fur_height'], (int)$_POST['fur_width'], (int)$_POST['fur_length']);

        $statement = $handler->prepare("INSERT INTO `furniture` (`fur_height`,`fur_width`,`fur_length`) 
                                VALUES(:fur_height, :fur_width, :fur_length)");
        $statement->bindValue(':fur_height', $furOBJ->getFurHeight(), PDO::PARAM_INT);
        $statement->bindValue(':fur_width', $furOBJ->getFurWidth(), PDO::PARAM_INT);
        $statement->bindValue(':fur_length', $furOBJ->getFurLength(), PDO::PARAM_INT);
        $statement->execute();

        $furOBJ->setID($handler->lastInsertId());
        //echo "ID= " . $furOBJ->getID() . "\n";

        $statement = $handler->prepare("INSERT INTO `products`
                (`SKU`, `product_name`, `product_price`, `product_type`, `dvdID`,`bookID`,`furnitureID`)
                VALUES (:SKU, :product_name, :product_price, :product_type, :dvdID, :bookID, :furnitureID)");
        $statement->bindValue(':SKU', $furOBJ->getSKU(), PDO::PARAM_STR);
        $statement->bindValue(':product_name', $furOBJ->getProductName(), PDO::PARAM_STR);
        $statement->bindValue(':product_price', $furOBJ->getProductPrice(), PDO::PARAM_STR);
        $statement->bindValue(':product_type', $furOBJ->getProductType(), PDO::PARAM_STR);
        $statement->bindValue(':dvdID', null, PDO::PARAM_NULL);
        $statement->bindValue(':bookID', null, PDO::PARAM_NULL);
        $statement->bindValue(':furnitureID', $furOBJ->getID(), PDO::PARAM_INT);

        $statement->execute();
        echo 'success';
        break;
    }
}










