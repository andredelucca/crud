<?php
session_start();
include_once "connection.php";
$id = filter_input(INPUT_GET, "id", FILTER_SANITIZE_NUMBER_INT);
if(!empty($id))
{
    $sql = "SELECT first_name, last_name FROM register WHERE id=:id";
    $res = $conn->prepare($sql);
    $res ->bindParam("id", $id, PDO::PARAM_INT);
    $res->execute();
    $row = $res->fetch(PDO::FETCH_ASSOC);
    //DEBUG
    #$res->debugDumpParams();
    #var_dump($row);
}
?>
    <!doctype html>
    <html lang="pt-br">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
              integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

        <title>Sistema</title>
    </head>
    <body>
    <div class="container container-fluid">
        <?php
        if(isset($_SESSION["msg"]))
        {
            echo $_SESSION["msg"];
            unset($_SESSION["msg"]);
        }
        ?>
    </div>
    <div class="container container-fluid">
        <form name="myForm" method="post" action="update.php">
            <input type="hidden" name="id" value="<?= $id?>"/>
            <div class="mb-3">
                <label for="first_name" class="form-label">Primeiro nome</label>
                <input type="text" class="form-control" id="first_name" name="first_name" aria-describedby="firstNameHelp"
                       value="<?= $row["first_name"]?>"/>
                <div id="firstNameHelp" class="form-text">Escreva seu primeiro nome.</div>
            </div>
            <div class="mb-3">
                <label for="last_name" class="form-label">Sobrenome</label>
                <input type="text" class="form-control" id="last_name" name="last_name" aria-describedby="lastNameHelp"
                       value="<?= $row["last_name"]?>">
                <div id="lastNameHelp" class="form-text">Escreva seu sobrenome.</div>
            </div>
            <button type="submit" class="btn btn-primary">Salvar</button>
        </form>
    </div>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
            crossorigin="anonymous"></script>

    </body>
    </html>

<?php
