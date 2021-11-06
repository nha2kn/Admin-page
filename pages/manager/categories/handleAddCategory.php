<?php
    include "../data/data.php";
    $name = $_POST["name"];
    $quantity = $_POST["quantity"];

    array_push($dataCategory,["category"=>$name,"quantity"=>$quantity]);
    header("Location: ./categories-manager.php");
    