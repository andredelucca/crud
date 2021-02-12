<?php
    //query list
    $sql = "SELECT id, name, email, cpf, phone, birth_date, address, registration_date, donation_interval, 
    donation_amount, form_of_payment FROM register";
    $res = $conn->prepare($sql);
    $res->execute();
    $row = $res->fetchAll(PDO::FETCH_ASSOC);
