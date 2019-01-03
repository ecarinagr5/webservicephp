<?php
require_once("connection.php");
$db = new DB("1.1.1.1", "20180223_previewsandbox", "usuario", "password");
if(!empty($_GET['delegacion'])) { 
    $delegacion= $_GET['delegacion'];
//if use GET
if ($_SERVER['REQUEST_METHOD'] == "GET") {
        echo json_encode($db->query("SELECT * FROM farmacias WHERE delegacion = $delegacion "));

//if use POST
} else if ($_SERVER['REQUEST_METHOD'] == "POST") {
    
    echo json_encode($db->query("SELECT * FROM farmacias WHERE delegacion = $delegacion "));
} else {
        http_response_code(405);
}
}
?>