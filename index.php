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
    <link href="assets/boot.css" rel="stylesheet" type="text/css"/>
    <link href="assets/style.css" rel="stylesheet" type="text/css"/>
    <title>Cadastro de Doadores</title>
</head>

<body>
    <!-div class="container container-fluid"//->
    <?php
    //if(isset($_SESSION["msg"]))
    //{
    //    echo $_SESSION["msg"];
    //    unset($_SESSION["msg"]);
    //}
    ?>
    <!-/div//->

<form method="POST" action="register.php" enctype="multipart/form-data">
    <table> 
        <tr>
            <td><label>Nome</label></td>
            <td><input type="text" aria-label="First name" name="name"></td>
        </tr>
        <tr>
            <td><label>E-mail</label></td>
            <td><input type="e-mail" aria-label="Last name" name="email"></td>
        </tr>
        <tr>
            <td><label>CPF</label></td>
            <td><input type="text" class="cpf" name="cpf"></td>
        </tr>
        <tr>
            <td><label>Telefone</label></td>
            <td><input type="tel" pattern=".{11,}" title="DDD+9números" name="phone"></td>
        </tr>
        <tr>
            <td><label>Data de nascimento</label></td>
            <td><input type="date" name="birth_date"></td>
        </tr>
        <tr>
            <td><label>Endereço</label></td>
            <td><input type="text" aria-label="First name" name="address"></td>
        </tr>
        <tr>
            <td><label>Intervalo de doação</label></td>
            <td><input type="text" aria-label="First name" name="donation_interval"></td>
        </tr>
        <tr>
            <td><label>Valor da doação</label></td>
            <td><input type="text" aria-label="First name" name="donation_amount"></td>
        </tr>
        <tr>
            <td><label>Forma de pagamento</label></td>
            <td><input type="text" aria-label="First name" name="form_of_payment"></td>
        </tr>
    </table>
        <button type="submit" onclick="valida_form ()">Cadastrar</button>    
    </form>

    <table>
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Email</th>
            <th>CPF</th>
            <th>Telefone</th>
            <th>Data Nascimento</th>
            <th>Endereço</th>
            <th>Data Registro</th>
            <th>Intervalo Doação</th>
            <th>Valor Doação</th>
            <th>Forma de Pagamento</th>
        </tr>
        <?php foreach($row as $tr): ?>
        <tr>
            <th><?= $tr["id"] ?></th>
            <td><?= $tr["name"] ?></td>
            <td><?= $tr["email"] ?></td>
            <td><?= $tr["cpf"] ?></td>
            <td><?= $tr["phone"] ?></td>
            <td><?= $tr["birth_date"] ?></td>
            <td><?= $tr["address"] ?></td>
            <td><?= date("d/m/Y", strtotime($tr["registration_date"])) ?></td>
            <td><?= $tr["donation_interval"]?></td>
            <td><?= $tr["donation_amount"]?></td>
            <td><?= $tr["form_of_payment"]?></td>
            <td><a href="form-update.php?id=<?= $tr["id"]; ?>"><button type="button"></button></a>
                <a href="delete.php?id=<?= $tr["id"]; ?>"><button type="button"></button></a>
            </td>
        </tr>
        <?php endforeach ;?>
        </table>
        
    <script type="text/javascript" src="assets/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" 
    crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js" integrity="sha512-pHVGpX7F/
    27yZ0ISY+VVjyULApbDlD0/X0rgGbTqCE7WFW5MezNTWG/dnhtbBuICzsd0WQPgpE4REBLv+UqChw==" crossorigin="anonymous"></script>
    
</body>
</html>