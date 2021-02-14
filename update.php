<?php
session_start();
include_once "connection.php";

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $data = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRIPPED);
    
    $sql = "UPDATE register SET name=:name, email=:email, cpf=:cpf, phone=:phone, birth_date=:birth_date, 
    address=:address, donation_interval=:donation_interval, donation_amount=:donation_amount, form_of_payment=:form_of_payment
    WHERE id=:id";
    $res = $conn->prepare($sql);
    $res->bindValue("name", $data["name"], PDO::PARAM_STR);
    $res->bindValue("email", $data["email"], PDO::PARAM_STR);
    $res->bindValue("cpf", $data["cpf"], PDO::PARAM_STR);
    $res->bindValue("phone", $data["phone"], PDO::PARAM_STR);
    $res->bindValue("birth_date", $data["birth_date"], PDO::PARAM_STR);
    $res->bindValue("address", $data["address"], PDO::PARAM_STR);
    $res->bindValue("donation_interval", $data["donation_interval"], PDO::PARAM_STR);
    $res->bindValue("donation_amount", $data["donation_amount"], PDO::PARAM_STR);
    $res->bindValue("form_of_payment", $data["form_of_payment"], PDO::PARAM_STR);
    $res ->bindParam("id", $data["id"], PDO::PARAM_INT);
    $res->execute();

    if($res->rowCount()>0){
        $_SESSION["msg"] = "<div class='alert alert-success alert-dismissible fade show' text-center' role='alert'>
        <strong>Cliente alterado com sucesso</strong>
        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
        </div>";
        header("Location: index.php");
        }
}
