<?php
include "./partials/Connection.php";
$id = $_GET['id'];
try{
    $SQL = "SELECT * FROM task WHERE id = :id";
    $state = $conn->prepare($SQL);   
    $state->bindParam(':id', $id);
    $state->execute();
    $json = [];
    while($row = $state->fetch(PDO::FETCH_ASSOC)){
        $json [] = [
            "title" => $row['title'],
            "description" => $row['description'],
            "id" => $row['id']
        ];
    }
    echo json_encode($json[0]);

}catch(PDOException $e){
    echo "Error: " . $e->getMessage();
}

?>