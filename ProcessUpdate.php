<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();
require 'connect/connections.php'; // Ensure this file contains the correct database connection

if (isset($_POST['update_client'])) {
    // Check if all required fields are present
    $required_fields = ['Id', 'Name', 'Age', 'bday', 'Address', 'Salary', 'Bonus', 'Pay', 'Pension', 'Funds', 'Gender'];
    foreach ($required_fields as $field) {
        if (!isset($_POST[$field])) {
            $_SESSION['message'] = "Missing field: $field";
            header("Location: update.php");
            exit();
        }
    }

    // Assuming $_connections is the correct database connection
    $Id = mysqli_real_escape_string($_connections, $_POST['Id']);
    $Name = mysqli_real_escape_string($_connections, $_POST['Name']);
    $Age = mysqli_real_escape_string($_connections, $_POST['Age']);
    $bday = mysqli_real_escape_string($_connections, $_POST['bday']);
    $Address = mysqli_real_escape_string($_connections, $_POST['Address']);
    $Salary = mysqli_real_escape_string($_connections, $_POST['Salary']);
    $Bonus = mysqli_real_escape_string($_connections, $_POST['Bonus']);
    $Pay = mysqli_real_escape_string($_connections, $_POST['Pay']);
    $Pension = mysqli_real_escape_string($_connections, $_POST['Pension']);
    $Funds = mysqli_real_escape_string($_connections, $_POST['Funds']);

    // Prepare and execute query
    $query = "UPDATE joyce SET Name='$Name', Age='$Age', bday='$bday', Address='$Address', Salary='$Salary', Bonus='$Bonus', Pay='$Pay', Pension='$Pension', Funds='$Funds' WHERE Id='$Id'";
    $query_run = mysqli_query($_connections, $query);

    // Check for errors
    if ($query_run) {
        $_SESSION['message'] = "Beneficiaries Updated Successfully";
        header("Location: AdminM1.php");
        exit();
    } else {
        $_SESSION['message'] = "Ambot sa imo";
        header("Location: update.php");
        exit();
    }
} else {
    $_SESSION['message'] = "Invalid Request";
    header("Location: update.php");
    exit();
}
?>
