<?php
// Importar el archivo de conexión
include "./partials/Connection.php";

// Verificar si se recibió el ID y los datos de la tarea a actualizar
if(isset($_POST['task_id']) && isset($_POST['title']) && isset($_POST['description']) && isset($_POST['user_id'])) {
    // Obtener los datos del formulario
    $taskId = $_POST['task_id'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $userId = $_POST['user_id'];

    // Preparar la consulta SQL para actualizar la tarea
    $sql = "UPDATE tasks SET title = :title, description = :description, idUser = :userId WHERE id = :taskId";

    // Preparar la declaración
    $stmt = $pdo->prepare($sql);

    // Enlazar parámetros
    $stmt->bindParam(':title', $title, PDO::PARAM_STR);
    $stmt->bindParam(':description', $description, PDO::PARAM_STR);
    $stmt->bindParam(':userId', $userId, PDO::PARAM_INT);
    $stmt->bindParam(':taskId', $taskId, PDO::PARAM_INT);

    // Ejecutar la consulta
    if($stmt->execute()) {
        // La tarea se actualizó correctamente
        echo json_encode(array('success' => true, 'message' => 'Task updated successfully'));
    } else {
        // Hubo un error al actualizar la tarea
        echo json_encode(array('success' => false, 'message' => 'Error updating task'));
    }
} else {
    // Si no se recibieron todos los datos necesarios
    echo json_encode(array('success' => false, 'message' => 'Missing parameters'));
}
?>
