<?php


class Books extends Products
{
    private $ID, $book_weight;

    /**
     * Books constructor.
     * @param $productID
     * @param $SKU
     * @param $product_name
     * @param $product_price
     * @param $product_type
     * @param $dvdID
     * @param $bookID
     * @param $furnitureID
     * @param $book_weight
     */

    public function __construct($productID, $SKU, $product_name, $product_price,
                                $product_type, $dvdID, $bookID, $furnitureID, $book_weight)
    {
        $this->ID = $bookID;
        $this->book_weight = $book_weight;
        parent::__construct($productID, $SKU, $product_name, $product_price, $product_type, $dvdID, $bookID, $furnitureID);
    }

    /**
     * @return mixed
     */
    public function getID()
    {
        return $this->ID;
    }

    /**
     * @param mixed $ID
     */
    public function setID($ID)
    {
        $this->ID = $ID;
    }

    /**
     * @return mixed
     */
    public function getBookWeight()
    {
        return $this->book_weight;
    }

    /**
     * @param mixed $book_weight
     */
    public function setBookWeight($book_weight)
    {
        $this->book_weight = $book_weight;
    }

}