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

<form method="POST" action="register.php" id="form-contact" enctype="multipart/form-data">
    <table> 
        <tr>
            <td><label>Nome Completo</label></td>
            <td><input type="text" name="name" id="name" required></td>
        </tr>
        <tr>
            <td><label>E-mail</label></td>
            <td><input type="email" name="email" required></td>
        </tr>
        <tr>
            <td><label>CPF</label></td>
            <td><input type="text" class="cpf" name="cpf" required></td>
        </tr>
        <tr>
            <td><label>Telefone</label></td>
            <td><input type="tel" name="phone" class="phone" required></td>
        </tr>
        <tr>
            <td><label>Data de nascimento</label></td>
            <td><input type="date" name="birth_date" required></td>
        </tr>
        <tr>
            <td><label>Endereço</label></td>
            <td><input type="text" name="address" required></td>
        </tr>
        <tr>
            <td><label>Intervalo de doação</label></td>
            <td>
                <select name="donation_interval" required>
                <option value=""></option>
                    <option value="Único">Único</option>
                    <option value="Bimestral">Bimestral</option>
                    <option value="Semestral">Semestral</option>
                    <option value="Anual">Anual</option> 
                </select>
            </td>
        </tr>
        <tr>
            <td><label>Valor da doação</label></td>
            <td><input type="number" name="donation_amount" required></td>
        </tr>
        <tr>
            <td><label>Forma de pagamento</label></td>
            <td>
                <select name="form_of_payment" required>
                    <option value=""></option>
                    <option value="Débito">Débito</option>
                    <option value="Crédito">Crédito</option>
                </select>
            </td>
        </tr>
    </table>
        <button type="submit">Cadastrar</button>    
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
            <td><?= date("d/m/Y", strtotime($tr["birth_date"])) ?></td>
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
        
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js" 
    integrity="sha512-UdIMMlVx0HEynClOIFSyOrPggomfhBKJE28LKl8yR3ghkgugPnG6iLfRfHwushZl1MOPSY6TsuBDGPK2X4zYKg==" 
    crossorigin="anonymous"></script>
    <script type="text/javascript" src="assets/script.js"></script>
    
</body>
</html>