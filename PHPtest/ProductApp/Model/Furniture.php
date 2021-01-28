<?php


class Furniture extends Products
{
    private $ID, $fur_height, $fur_width, $fur_length;

    /**
     * Furniture constructor.
     * @param $productID
     * @param $SKU
     * @param $product_name
     * @param $product_price
     * @param $product_type
     * @param $dvdID
     * @param $bookID
     * @param $furnitureID
     * @param $fur_height
     * @param $fur_width
     * @param $fur_length
     */

    public function __construct($productID, $SKU, $product_name, $product_price,
                                $product_type, $dvdID, $bookID, $furnitureID, $fur_height, $fur_width, $fur_length)
    {
        $this->ID = $furnitureID;
        $this->fur_height = $fur_height;
        $this->fur_width = $fur_width;
        $this->fur_length = $fur_length;
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
    public function getFurHeight()
    {
        return $this->fur_height;
    }

    /**
     * @param mixed $fur_height
     */
    public function setFurHeight($fur_height)
    {
        $this->fur_height = $fur_height;
    }

    /**
     * @return mixed
     */
    public function getFurWidth()
    {
        return $this->fur_width;
    }

    /**
     * @param mixed $fur_width
     */
    public function setFurWidth($fur_width)
    {
        $this->fur_width = $fur_width;
    }

    /**
     * @return mixed
     */
    public function getFurLength()
    {
        return $this->fur_length;
    }

    /**
     * @param mixed $fur_length
     */
    public function setFurLength($fur_length)
    {
        $this->fur_length = $fur_length;
    }
}