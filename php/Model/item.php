<?php

/**
Class model item
 */
class Item
{
    private $id;
    protected $sku, $name, $price, $value;

    function __construct($id, $sku, $name, $price, $value)
    {
        $this->id = $id;
        $this->sku = $sku;
        $this->name = $name;
        $this->price = $price;
        $this->value = $value;
    }
    public function getId()
    {
        return $this->id;
    }

    public function __get($property)
    {
    }
}
