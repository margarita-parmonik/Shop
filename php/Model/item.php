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

    public function save_in_bd()
    {
        try {
            $conn = new PDO('mysql:host=localhost', 'root', 'admin');
        } catch(Exception $e){
            echo 'Connection failed: ' . $e->getMessage();
        }
        
        $sql = "INSERT INTO shop.items (`sku`, `name`, `price`, `type`, `value`) VALUES ('". $this->sku ."', '". $this->name ."', '". $this->price ."', 'disk', '". $this->value ."')";

        $conn->query($sql);
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

    public function save_in_bd()
    {
        try {
            $conn = new PDO('mysql:host=localhost', 'root', 'admin');
        } catch(Exception $e){
            echo 'Connection failed: ' . $e->getMessage();
        }
        
        $sql = "INSERT INTO shop.items (`sku`, `name`, `price`, `type`, `value`) VALUES ('". $this->sku ."', '". $this->name ."', '". $this->price ."', 'book', '". $this->value ."')";

        $conn->query($sql);
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

    public function save_in_bd()
    {
        try {
            $conn = new PDO('mysql:host=localhost', 'root', 'admin');
        } catch(Exception $e){
            echo 'Connection failed: ' . $e->getMessage();
        }
        
        $sql = "INSERT INTO shop.items (`sku`, `name`, `price`, `type`, `value`) VALUES ('". $this->sku ."', '". $this->name ."', '". $this->price ."', 'furniture', '". $this->value ."')";

        $conn->query($sql);
    }
}
// $item = new Furniture(0, "sku", "name", "1.07", "height" );
//                 $item->save_in_bd();