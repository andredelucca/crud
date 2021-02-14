<?php
session_start();
include_once "connection.php";

$id = filter_input(INPUT_GET, "id", FILTER_SANITIZE_NUMBER_INT);
if(!empty($id)){
    $sql = "DELETE FROM register WHERE id=:id";
    $res = $conn->prepare($sql);
    $res -> bindParam("id", $id, PDO::PARAM_INT);
    $res -> execute();

    if($res->rowCount()>0){
    $_SESSION["msg"] = "<div class='alert alert-danger alert-dismissible fade show text-center' role='alert'>
    <strong>Cliente deletado com sucesso</strong>
    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
    </div>";
    header("Location: index.php");
    }
}
