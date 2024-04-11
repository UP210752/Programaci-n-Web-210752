<?php
include "./partials/Connection.php";

if(isset($_POST['title'], $_POST['description'], $_POST['users'])) {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $iduser = $_POST['users'];

    try {
        $SQL = "INSERT INTO task (title, description, idUser) VALUES (:title, :description, :iduser)";
        $state = $conn->prepare($SQL);

        // Vincula los parámetros
        $state->bindParam(':title', $title);
        $state->bindParam(':description', $description);
        $state->bindParam(':iduser', $iduser);

        // Ejecuta la consulta
        $state->execute();

        echo "Registro insertado correctamente";
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>
