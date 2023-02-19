<?php

use Connection\Database;

if(empty($_POST)){
    header("location: /yakubranti");
}

require_once __DIR__. "/../Connection/Database.php";

$db = new Database();

$db = $db->connection();

$query = $db->prepare('INSERT INTO message (name, content, ket) VALUES (?,?,?)');
$query->bindParam(1, $_POST['name']);
$query->bindParam(2, $_POST['content']);
$query->bindParam(3, $_POST['ket']);
$query->execute();

header("location: #reservasi");

?>