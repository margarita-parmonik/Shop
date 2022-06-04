<!doctype html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <title>Product list</title>
    <link href="css/styles.css" rel="stylesheet" type="text/css">
</head>

<body>
    <div class='container'>
        <h1>Product list</h1>
        <a href="/addproduct"><input type="button" value="ADD" /></a>

        <form action="/php/delete_items.php" method="POST">
            <button name="button">MASS DELETE</button>
            <form>
            <hr>
    </div>
    <br />

    <?php
    include_once "php/listItems.php";
    require_once "vendor/autoload.php";
    $list = new listItems();
    $list->drowListItems(); //
    ?>
</body>

</html>
