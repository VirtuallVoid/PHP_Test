<?php


class DatabaseUtils
{
    private $servername;
    private $username;
    private $password;
    private $dbname;
    private $charset;

    public function connect()
    {
        $this->servername = '127.0.0.1';
        $this->username = 'root';
        $this->password = 'khuashiadadre14';
        $this->dbname = 'scandiweb2';
        $this->charset = 'utf8mb4';

        try {
            $dsn = "mysql:host=" . $this->servername . ";dbname=" . $this->dbname . ";charset=" . $this->charset;
            $pdo = new PDO($dsn, $this->username, $this->password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch (PDOException $e) {
            echo $e->getMessage();
            die();
        }
    }
}
/*
  $dbOBJ = new DatabaseUtils();
  $handler = $dbOBJ->connect();
 */


/*
create table scandiweb2.dvds(
ID int primary key auto_increment,
DVD_MB int not null
);
create table scandiweb2.books(
ID int primary key auto_increment,
book_weight int not null
);
create table scandiweb2.furniture(
ID int primary key auto_increment,
fur_height int,
fur_width int,
fur_length int
);
create table scandiweb2.products(
ID int primary key auto_increment,
SKU nvarchar(255) not null,
product_name nvarchar(255) not null,
product_price double not null,
product_type ENUM ('DVD','Book','Furniture'),
dvdID int,
bookID int,
furnitureID int,
FOREIGN KEY (dvdID) REFERENCES dvds(ID),
FOREIGN KEY (bookID) REFERENCES books(ID),
FOREIGN KEY (furnitureID) REFERENCES furniture(ID)
);
  */