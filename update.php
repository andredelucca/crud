<?php
session_start();
include_once "connection.php";

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $data = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRIPPED);
    //DEBUG
    //var_dump($data);

    //CRIAR AS VALIDAÇÕES DE CAMPOS VAZIOS E TUDO MAIS
    $sql = "UPDATE register SET first_name=:first_name, last_name=:last_name, last_update=NOW() WHERE id=:id";
    $res = $conn->prepare($sql);
    $res->bindValue("first_name", $data["first_name"], PDO::PARAM_STR);
    $res->bindValue("last_name", $data["last_name"], PDO::PARAM_STR);
    $res ->bindParam("id", $data["id"], PDO::PARAM_INT);
    $res->execute();

    if($res->rowCount()>0)
    {
        $_SESSION["msg"] = "<div class='alert alert-success alert-dismissible fade show text-center' role='alert'>
  <strong>Informações atualizadas com sucesso</strong>
  <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
</div>";
        header("Location: index.php");
    }
}
