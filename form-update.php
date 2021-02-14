<?php
session_start();
include_once "connection.php";
$id = filter_input(INPUT_GET, "id", FILTER_SANITIZE_NUMBER_INT);
if(!empty($id)) {
               
    $sql = "SELECT name, email, cpf, phone, registration_date, address, donation_interval, donation_amount, 
    form_of_payment FROM register WHERE id=:id";
    $res = $conn->prepare($sql);
    $res ->bindParam("id", $id, PDO::PARAM_INT);
    $res->execute();
    $row = $res->fetch(PDO::FETCH_ASSOC);
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/style.css" rel="stylesheet" type="text/css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Cadastro de Doadores</title>
</head>

<body>
<h1>Cadastro de Doadores</h1>
<div class="container">
    <form method="POST" action="update.php" id="form-contact" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?= $id?>"/>
        <div class="row mb-3"> 
            <label for="inputName3" class="col-sm-3 col-form-label"><strong>Nome Completo</strong></label>
            <div class="col-sm-6">
                <input type="text" name="name" id="name inputName3" class="form-control"  aria-describedby="nameHelp" 
                value="<?= $row["name"]?>" required>
            </div>
        </div>
        <div class="row mb-3"> 
            <label for="inputEmail3" class="col-sm-3 col-form-label"><strong>E-mail</strong></label>    
            <div class="col-sm-6">
                <input type="email" name="email" id="inputEmail3" class="form-control"  aria-describedby="emailHelp" 
                value="<?= $row["email"]?>" required>
            </div>
        </div>
        <div class="row mb-3"> 
            <label for="inputCpf3" class="col-sm-3 col-form-label"><strong>CPF</strong></label>    
            <div class="col-sm-6">
                <input type="text" name="cpf" id="inputCpf3" class="form-control"  aria-describedby="cpfHelp" 
                value="<?= $row["cpf"]?>" required>
            </div>
        </div>
        <div class="row mb-3"> 
            <label for="inputPhone3" class="col-sm-3 col-form-label"><strong>Telefone</strong></label>    
            <div class="col-sm-6">
                <input type="tel" name="phone" id="inputPhone3" class="phone form-control"  aria-describedby="phoneHelp" 
                value="<?= $row["phone"]?>" required>
            </div>
        </div>
        <div class="row mb-3"> 
        <label for="inputBirth3" class="col-sm-3 col-form-label"><strong>Data de nascimento</strong></label>    
            <div class="col-sm-6">
                <input type="date" name="birth_date" id="inputBirth3" class="form-control"  aria-describedby="birthHelp" 
                value="<?= $row["registration_date"]?>" required>
            </div>
        </div>
        <div class="row mb-3"> 
        <label for="inputAd3" class="col-sm-3 col-form-label"><strong>Endereço</strong></label>
            <div class="col-sm-6">
                <input type="text" name="address" id="inputAd3" class="form-control"  aria-describedby="addressHelp" 
                value="<?= $row["address"]?>" required>
            </div>
        </div>
        <div class="row mb-3"> 
        <label for="inputDonInn3" class="col-sm-3 col-form-label"><strong>Intervalo de doação</strong></label>
            <div class="col-sm-6">
                <select name="donation_interval" id="inputDonInn3" class="form-select"  aria-describedby="inputDonInnHelp" 
                value="<?= $row["donation_interval"]?>" required>
                    <option selected=""></option>
                    <option value="Único">Único</option>
                    <option value="Bimestral">Bimestral</option>
                    <option value="Semestral">Semestral</option>
                    <option value="Anual">Anual</option>
                </select>
            </div>
        </div>
        <div class="row mb-3"> 
        <label for="inputDonAmo3" class="col-sm-3 col-form-label"><strong>Valor da doação</strong></label>
            <div class="col-sm-6">
                <input type="text" name="donation_amount" id="inputDonAmo3" class="donation_amount form-control"  
                aria-describedby="donationAmountHelp" 
                value="<?= $row["donation_amount"]?>" required>
            </div>
        </div>
        <div class="row mb-3"> 
        <label for="inputPay3" class="col-sm-3 col-form-label"><strong>Forma de pagamento</strong></label>
            <div class="col-sm-6">
                <select name="form_of_payment" id="inputPay3" class="form-select"  aria-describedby="inputPayHelp" 
                value="<?= $row["form_of_payment"]?>" required>
                    <option selected=""></option>
                    <option value="Débito">Débito</option>
                    <option value="Crédito">Crédito</option>
                </select>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Salvar</button>    
    </form>    
</div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.8/jquery.mask.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js" 
    integrity="sha512-UdIMMlVx0HEynClOIFSyOrPggomfhBKJE28LKl8yR3ghkgugPnG6iLfRfHwushZl1MOPSY6TsuBDGPK2X4zYKg==" 
    crossorigin="anonymous"></script>
    <script type="text/javascript" src="assets/script.js"></script>            
            
    </body>
    </html>


