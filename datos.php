<?php
    header("Content-Type:application/json");
    header("Access-Control-Allow-Origin:*");
    echo json_encode(array("name"=>"Ivan", "lastname"=>"Flores Trujillo"));
?>