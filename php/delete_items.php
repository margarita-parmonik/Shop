<?php
function delete()
{
}
if (isset($_POST["checkItems"])) {
    $idCheckItems = $_POST["checkItems"];
    //print_r($idCheckItems);
    for ($i = 0; $i < count($idCheckItems); $i++) {
        //TODO Сделать удаление по  id
        //echo $idCheckItems[$i];
    }

}
header('Location: '. '..');