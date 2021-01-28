<?php


class Dvds extends Products
{
    private $ID, $DVD_MB;

    /**
     * Dvds constructor.
     * @param $productID
     * @param $SKU
     * @param $product_name
     * @param $product_price
     * @param $product_type
     * @param $dvdID
     * @param $bookID
     * @param $furnitureID
     * @param $DVD_MB
     */

    public function __construct($productID, $SKU, $product_name, $product_price,
                                $product_type, $dvdID, $bookID, $furnitureID, $DVD_MB)
    {
        $this->ID = $dvdID;
        $this->DVD_MB = $DVD_MB;
        parent:: __construct($productID, $SKU, $product_name, $product_price, $product_type, $this->ID, $bookID, $furnitureID);

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
    public function getDVDMB()
    {
        return $this->DVD_MB;
    }

    /**
     * @param mixed $DVD_MB
     */
    public function setDVDMB($DVD_MB)
    {
        $this->DVD_MB = $DVD_MB;
    }
}