<?php
include_once 'php/Model/book.php';
include_once 'php/Model/furniture.php';
include_once 'php/Model/disc.php';

class ListItems
{
    private $items = [];

    public function setList()
    {
        try {
            $conn = new PDO('mysql:host=localhost', 'root', 'admin');
        } catch(Exception $e){
            echo 'Connection failed: ' . $e->getMessage();
        }
        
        $sql = 'SELECT * FROM shop.items';
        $result = $conn->query($sql);
        while ($row = $result->fetch()) {
            switch ($row['type']) {
                case 'disc':
                    $this->items[] = new Disc($row['id'], $row['sku'], $row['name'], $row['price'], $row['value']);
                    break;
                case 'book':
                    $this->items[] = new Book($row['id'], $row['sku'], $row['name'], $row['price'], $row['value']);
                    break;
                case 'furniture':
                    $this->items[] = new Furniture($row['id'], $row['sku'], $row['name'], $row['price'], $row['value']);
                    break;
            }
            
        }
    }

    public function drowListItems()
    {
        $this->setList();
        echo "<div class='container'>";
        for ($i = 0; $i < count($this->items); $i++) {
            echo "<div class='tile'>";
            echo "<input type='checkbox' id='.delete-checkbox' class='delete-checkbox' name='checkItems[]' value=" . $this->items[$i]->getId() . " ";
            //echo "<input type='checkbox' name='checkItems[]' id=" . $this->items[$i]->id;
            echo  "<br />";
            $this->items[$i]->printAboutItem();
            echo "</div>";
        }
        echo "</div>";
    }
}
