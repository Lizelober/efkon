<?php

include('database_connection.php');

if (isset($_POST["name"])) {
    $error = '';
    $success = '';
    $name = '';
    $surname = '';
    $email = '';
    $contact_number = '';
    $gender = $_POST["gender"];
    if (empty($_POST["name"])) {
        $error .= '<p>Name is Required</p>';
    } else {
        $name = $_POST["name"];
    }
    if (empty($_POST["surname"])) {
        $error .= '<p>surname is Required</p>';
    } else {
        $surname = $_POST["surname"];
    }
    if (empty($_POST["email"])) {
        $error .= '<p>email is Required</p>';
    } else {
        $email = $_POST["email"];
    }
    if (empty($_POST["contact_number"])) {
        $error .= '<p>contact_number is Required</p>';
    } else {
        $contact_number = $_POST["contact_number"];
    }

    if ($error == '') {
        $data = array(
            ':name'   => $name,
            ':surname'  => $surname,
            ':gender'  => $gender,
            ':email' => $email,
            ':contact_number'   => $contact_number,
            ':id'   => $_POST["id"]
        );

        $query = "
            UPDATE users 
            SET name = :name,
            surname = :surname,
            gender = :gender, 
            email = :email, 
            contact_number = :contact_number
            WHERE id = :id
            ";
        $statement = $connect->prepare($query);
        $statement->execute($data);
        $success = 'Data Updated';
    }
    $output = array(
        'success'  => $success,
        'error'   => $error
    );
    echo json_encode($output);
}
