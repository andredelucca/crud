<?php
    //conection bd
    session_start();
    include_once "connection.php";
    include_once "list.php";
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
<div>
<?php
    if(isset($_SESSION["msg"])){
        echo $_SESSION["msg"];
        unset($_SESSION["msg"]);
    }
?>
</div>
<h1>Cadastro de Doadores</h1>
<div class="container">
    <form method="POST" action="register.php" id="form-contact" enctype="multipart/form-data">
        <div class="row mb-3"> 
            <label for="inputName3" class="col-sm-3 col-form-label"><strong>Nome Completo</strong></label>
            <div class="col-sm-6">
                <input type="text" name="name" id="name inputName3" class="form-control" required>
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputEmail3" class="col-sm-3 col-form-label"><strong>E-mail</strong></label>
            <div class="col-sm-6">
                <input type="email" name="email" id="inputEmail3" class="form-control" required>
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputCpf3" class="col-sm-3 col-form-label"><strong>CPF</strong></label>
            <div class="col-sm-6">
                <input type="text" class="cpf form-control" name="cpf" id="inputCpf3" required>
            </div>
        </div>
        <div class="row mb-3">  
            <label for="inputPhone3" class="col-sm-3 col-form-label"><strong>Telefone</strong></label>
            <div class="col-sm-6">
                <input type="tel" name="phone" class="phone form-control" id="inputPhone3" required>
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputBirth3" class="col-sm-3 col-form-label"><strong>Data de nascimento</strong></label>
            <div class="col-sm-6">
                <input type="date" class="form-control" name="birth_date" id="inputBirth3" required>
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputAd3" class="col-sm-3 col-form-label"><strong>Endereço</strong></label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="address" id="inputAd3" required>
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputDonInn3" class="col-sm-3 col-form-label"><strong>Intervalo de doação</strong></label>
                <div class="col-sm-6">
                    <select name="donation_interval" class="form-select" id="inputDonInn3" required>
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
                <input type="text" class="donation_amount form-control" name="donation_amount" id="inputDonAmo3" 
                required>
            </div>
        </div>        
        <div class="row mb-3">        
            <label for="inputPay3" class="col-sm-3 col-form-label"><strong>Forma de pagamento</strong></label>
                <div class="col-sm-6">
                    <select name="form_of_payment" class="form-select" id="inputPay3" required>
                        <option selected=""></option>
                        <option value="Débito">Débito</option>
                        <option value="Crédito">Crédito</option>
                    </select>
                </div>
        </div> 
        <button type="submit" class="btn btn-primary">Cadastrar</button>    
    </form>    
</div>

<div class="table-responsive">
<table class="table table-striped">
<h2>Lista de Doadores</h2>
    <thead>
        <tr>
            <th scope="col">Nome</th>
            <th scope="col">Email</th>
            <th scope="col">CPF</th>
            <th scope="col">Telefone</th>
            <th scope="col">Data Nascimento</th>
            <th scope="col">Endereço</th>
            <th scope="col">Intervalo Doação</th>
            <th scope="col">Valor Doação</th>
            <th scope="col">Forma de Pagamento</th>
            <th scope="col">Ação</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($row as $tr): ?>
        <tr>
            <th scope="row"><?= $tr["name"] ?></th>
            <td><?= $tr["email"] ?></td>
            <td><?= $tr["cpf"] ?></td>
            <td><?= $tr["phone"] ?></td>
            <td><?= date("d/m/Y", strtotime($tr["birth_date"])) ?></td>
            <td><?= $tr["address"] ?></td>
            <td><?= $tr["donation_interval"]?></td>
            <td><?= $tr["donation_amount"]?></td>
            <td><?= $tr["form_of_payment"]?></td>
            <td>
                <a href="form-update.php?id=<?= $tr["id"]; ?>" title="Alterar cadastro"><svg xmlns="http://www.w3.org/
                2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clipboard-check" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 
                1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1
                 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z"/>
                <path d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3zm-3-1A1.5 
                1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z"/></svg></a>
                <a href="delete.php?id=<?= $tr["id"]; ?>" title="Deletar cadastro"><svg xmlns="http://www.w3.org/2000/
                svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 
                1-10V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1
                -1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1
                1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/></svg></a>
            </td>
        </tr>
        <?php endforeach ;?>
    </tbody>
</table>
</div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.8/jquery.mask.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js" 
    integrity="sha512-UdIMMlVx0HEynClOIFSyOrPggomfhBKJE28LKl8yR3ghkgugPnG6iLfRfHwushZl1MOPSY6TsuBDGPK2X4zYKg==" 
    crossorigin="anonymous"></script>
    <script type="text/javascript" src="assets/script.js"></script>
</body>
</html>