<?php
include"./partials/Connection.php";

try{
   $SQL = "SELECT * FROM task;";
   $state = $conn->query($SQL);

   $json = [];
   while($row = $state->fetch(PDO::FETCH_ASSOC)){
    $json [] = [
        "id" => $row['id'],
        "title" =>  $row['title'],
        "description" => $row['description'],
        "idUser" => $row['idUser']
    ];
    }
   echo json_encode($json); //regresa un texto en formato json
}
catch(PDOException $e){
    die($e->getMessage());
}