<?php
include "./partials/Connection.php";

if(isset($_GET['id'])){
    
    $id = $_GET['id'];

    try{
        $SQL = "DELETE FROM task WHERE id = :id";
        $state = $conn->prepare($SQL);   
        
        $state->bindParam(':id', $id);

        $state->execute();

        echo json_encode("Task Deleted Successfully");

    }catch(PDOException $e){
        echo "Error: " . $e->getMessage();
    }
    

}

