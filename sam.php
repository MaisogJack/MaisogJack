<?php
session_start();
require 'connect/connections.php';

if(isset($_POST['delete_client'])) {
    $applicantId = mysqli_real_escape_string($_connections, $_POST['delete_client']);

    $query = "DELETE FROM joyce WHERE Id='$applicantId'";
    $query_run = mysqli_query($_connections, $query);

    if($query_run) {
        $_SESSION['message'] = "Applicant Deleted Successfully";
        header("Location: AdminM1.php");
        exit();
    } else {
        $_SESSION['message'] = "Error: Unable to delete applicant";
        header("Location: AdminM1.php");
        exit();
    }
}

if (isset($_POST['update_client'])) {
    $Id = mysqli_real_escape_string($_connections, $_POST['Id']);
    $Name = mysqli_real_escape_string($_connections, $_POST['Name']);
    $Age = mysqli_real_escape_string($_connections, $_POST['Age']);
    $bday = mysqli_real_escape_string($_connections, $_POST['bday']);
    $Address = mysqli_real_escape_string($_connections, $_POST['Address']);
    $Gender = mysqli_real_escape_string($_connections, $_POST['Gender']);
    $Salary = mysqli_real_escape_string($_connections, $_POST['Salary']);
    $Bonus = mysqli_real_escape_string($_connections, $_POST['Bonus']);
    $Pay = mysqli_real_escape_string($_connections, $_POST['Pay']);
    $Pension = mysqli_real_escape_string($_connections, $_POST['Pension']);
    $Funds = mysqli_real_escape_string($_connections, $_POST['Funds']);


    $query = "UPDATE joyce SET Name='$Name',Age='$Age', bday='$bday', Address='$Address',  Gender='$Gender', Salary='$Salary', Bonus='$Bonus', Pay='$Pay', Pension='$Pension', Funds='$Funds' WHERE Id='$Id'";
    $query_run = mysqli_query($_connections, $query);

    if ($query_run) {
        $_SESSION['message'] = "Benificiaries Updated Successfully";
        header("Location: AdminM1.php");
        exit(0);
    } else {
        $_SESSION['message'] = "Ambot sa imo";
        header("Location: admin.php");
        exit(0);
    }
}



if(isset($_POST['save_client']))
{
    $Name = mysqli_real_escape_string($_connections, $_POST['Name']);
    $Salary = mysqli_real_escape_string($_connections, $_POST['Salary']);
    $Bonus = mysqli_real_escape_string($_connections, $_POST['Bonus']);
    $Pay = mysqli_real_escape_string($_connections, $_POST['Pay']);
    $Pension = mysqli_real_escape_string($_connections, $_POST['Pension']);
    $Funds = mysqli_real_escape_string($_connections, $_POST['Funds']);



    $query = "INSERT INTO joyce (Name, Salary, Bonus, Pay, Pension, Funds) VALUES ('$Name','$Salary','$Bonus','$Pay','$Pension','$Funds')";

    $query_run = mysqli_query($_connections, $query);
    if($query_run)
    {
        $_SESSION['message'] = "Client Info Created Successfully";
        header("Location: .AdminM1php");
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
