<?php
if (isset($_POST["save"])) {
    include 'Model/item.php';

    if (isset($_POST["productType"]) && $_POST["productType"] != "") {
        $productType = $_POST["productType"];
        $sku = $_POST["sku"];
        $name = $_POST["name"];
        $price = $_POST["price"];

        echo $sku;
        switch ($productType) {
            case 'furniture':
                $height = $_POST["height"];
                $width = $_POST["width"];
                $length = $_POST["length"];

                $item = new Furniture(0, $sku, $name, $price, $height . 'x' . $width . 'x' . $length);
                $item->save_in_bd();
                break;
            case 'disk':
                $size = $_POST["size"];
                
                $item = new Disc(0, $sku, $name, $price, $size);
            
                $item->save_in_bd();
                break;
            case 'book':
                $weight = $_POST["weight"];
                $item = new Book(0, $sku, $name, $price, $weight);
                
                print_r($item);
                $item->save_in_bd();
                break;
        }
    }
}
header('Location: ' . '..');
