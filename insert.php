<?php

session_start();
require 'connect/connections.php';

if(isset($_POST['save_client']))
{
    $Name = mysqli_real_escape_string($_connections, $_POST['Name']);
    $Age = mysqli_real_escape_string($_connections, $_POST['Age']);
    $bday = mysqli_real_escape_string($_connections, $_POST['bday']);
    $Gender = mysqli_real_escape_string($_connections, $_POST['Gender']);
    $Address = mysqli_real_escape_string($_connections, $_POST['Address']);
    $Salary = mysqli_real_escape_string($_connections, $_POST['Salary']);
    $Bonus = mysqli_real_escape_string($_connections, $_POST['Bonus']);
    $Pay = mysqli_real_escape_string($_connections, $_POST['Pay']);
    $Pension = mysqli_real_escape_string($_connections, $_POST['Pension']);
    $Funds = mysqli_real_escape_string($_connections, $_POST['Funds']);




    $query = "INSERT INTO joyce (Name, Age, bday, Gender, Salary, Bonus, Pay, Pension, Funds, Address) VALUES ('$Name','$Age','$bday','$Gender','$Salary','$Bonus','$Pay','$Pension','$Funds','$Address')";

    $query_run = mysqli_query($_connections, $query);
    if($query_run)
    {
        $_SESSION['message'] = "Client Info Created Successfully";
        header("Location: AdminM1.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Ambot sa imo";
        header("Location: AdminM1.php");
        exit(0);
    }
}

?>
