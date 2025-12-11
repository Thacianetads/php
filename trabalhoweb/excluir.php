<?php
include("connect.php");

if (isset($_GET['id'])) {

    $id = $_GET['id'];
    $sql = "DELETE FROM contatos WHERE id=".$id;
    $conn->query($sql);

    header("Location: inicial.php");

} 
?>