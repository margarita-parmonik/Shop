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

    public function __get($property)
    {
        switch ($property) {
            case 'id':
                return $this->id;
            case 'sku':
                return $this->sku;
            case 'name':
                return $this->name;
            case 'price':
                return $this->price;
            case 'attributes':
                return $this->attributes;
            case 'value':
                return $this->value;
            default:
                break;
        }
    } 
}

class Disc extends Item
{
    public function printAboutItem()
    {
        echo $this->sku . "<br />";
        echo $this->name . "<br />";
        echo number_format($this->price, 2, '.', '') . " $" . "<br />";
        echo "Size " . $this->value . " MB <br />";
    }
}

class Book extends Item
{
    public function printAboutItem()
    {
        echo $this->sku . "<br />";
        echo $this->name . "<br />";
        echo number_format($this->price, 2, '.', '') . " $" . "<br />";
        echo "Weight " . $this->value . " KG <br />";
    }
}

class Furniture extends Item
{
    public function printAboutItem()
    {
        echo $this->sku . "<br />";
        echo $this->name . "<br />";
        echo number_format($this->price, 2, '.', '') . " $" . "<br />";
        echo "Dimension " .$this->value . "<br />";
    }
}
