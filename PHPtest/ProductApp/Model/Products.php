<?php


abstract class Products
{
    private $ID, $SKU, $product_name, $product_price, $product_type, $dvdID, $bookID, $furnitureID;

    /**
     * Products constructor.
     * @param $ID
     * @param $SKU
     * @param $product_name
     * @param $product_price
     * @param $product_type
     * @param $dvdID
     * @param $bookID
     * @param $furnitureID
     */

    public function __construct($ID, $SKU, $product_name, $product_price, $product_type, $dvdID = null, $bookID = null, $furnitureID = null)
    {
        $this->ID = $ID;
        $this->SKU = $SKU;
        $this->product_name = $product_name;
        $this->product_price = $product_price;
        $this->product_type = $product_type;
        $this->dvdID = $dvdID;
        $this->bookID = $bookID;
        $this->furnitureID = $furnitureID;
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
    public function getSKU()
    {
        return $this->SKU;
    }

    /**
     * @param mixed $SKU
     */
    public function setSKU($SKU)
    {
        $this->SKU = $SKU;
    }

    /**
     * @return mixed
     */
    public function getProductName()
    {
        return $this->product_name;
    }

    /**
     * @param mixed $product_name
     */
    public function setProductName($product_name)
    {
        $this->product_name = $product_name;
    }

    /**
     * @return mixed
     */
    public function getProductPrice()
    {
        return $this->product_price;
    }

    /**
     * @param mixed $product_price
     */
    public function setProductPrice($product_price)
    {
        $this->product_price = $product_price;
    }

    /**
     * @return mixed
     */
    public function getProductType()
    {
        return $this->product_type;
    }

    /**
     * @param mixed $product_type
     */
    public function setProductType($product_type)
    {
        $this->product_type = $product_type;
    }

    /**
     * @return mixed
     */
    public function getDvdID()
    {
        return $this->dvdID;
    }

    /**
     * @param mixed $dvdID
     */
    public function setDvdID($dvdID)
    {
        $this->dvdID = $dvdID;
    }

    /**
     * @return mixed
     */
    public function getBookID()
    {
        return $this->bookID;
    }

    /**
     * @param mixed $bookID
     */
    public function setBookID($bookID)
    {
        $this->bookID = $bookID;
    }

    /**
     * @return mixed
     */
    public function getFurnitureID()
    {
        return $this->furnitureID;
    }

    /**
     * @param mixed $furnitureID
     */
    public function setFurnitureID($furnitureID)
    {
        $this->furnitureID = $furnitureID;
    }
}






