<!doctype html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <title>Product add</title>
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <script src="/jQuery/jquery-3.6.0.min.js"></script>
</head>

<body>
    <?php
    if (isset($_POST["productType"])) {
        $course = $_POST["productType"];
        echo $course;
    }
    if (isset($_POST["dvd"])) {
        $course = $_POST["dvd"];
        echo $course;
    }
    ?>
    <div class='container'>
        <h1>Product add</h1>
        <button name="button">Save</button>
        <form action="/php/delete_items.php" method="POST">
            <button name="button">Cansel</button>
        </form>
        <hr>
        <!-- <form action="/php/save.php" method="POST"> -->
        <p>SKY<input type="text" name="sky" /></p>
        <p>Name<input type="text" name="name" /></p>
        <p>Price ($)<input type="text" name="price" /></p>
        Type Switcher <select id="productType" size="1">
            <option id="dvd">DVD</option>
            <option id="book">Book</option>
            <option id="furniture">Furniture</option>
        </select>
        <!-- </form> -->
        <script>
            $(document).ready(function() {
                $("#productType").change(function() {
                    $("#attributesItem").load
                    // $("#attributesItem").hide(4000);
                    // $("#attributesItem").slideDown("slow");
                });
            });
        </script>
        <div class="attributes" id="attributesItem">
        Size (MB)<input type="text" id="size">
        Weight (KG)<input type="text" id="weight">
        
        Height (CM)<input type="text" id="size">
        Width (CM)<input type="text" id="size">
        Lenght (CM)<input type="text" id="size">
        </div>
    </div>
</body>

</html>