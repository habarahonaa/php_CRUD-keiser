<?php 
    session_start();

    // Intenta una conexion al servidor MYSQL utilizando el "metodo procedural" y el built-in mysqli_connect

    $conn = mysqli_connect('localhost', 'root', 'MYSQL123$', 'crud_task_list') or die(mysqli_error($mysqli));
?>