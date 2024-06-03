<?php
$Email = $Password = "";
$EmailErr = $PasswordErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["Email"])) {
        $EmailErr = "Email is Required";
    } else {
        $Email = $_POST["Email"];
    }
    if (empty($_POST["Password"])) {
        $PasswordErr = "Password is Required";
    } else {
        $Password = $_POST["Password"];
    }
    if ($Email && $Password) {
        include("connect/connections.php");

        $check_Email = mysqli_query($_connections, "SELECT Email, Password, Account_Type FROM login WHERE email='$Email'");
        $check_Email_row = mysqli_num_rows($check_Email);
        
        if ($check_Email_row > 0) {
            $row = mysqli_fetch_assoc($check_Email);
            $db_Password = $row["Password"];
            $db_Account_Type = $row["Account_Type"];

            if ($db_Password == $Password) {
                if ($db_Account_Type == "1") {
                    echo "<script>window.location.href='admin.php';</script>";
                } else {
                    echo "<script>window.location.href='user.php';</script>";
                }
            } else {
                $PasswordErr = "Password is incorrect";
            }
        } else {
            $EmailErr = "Email not found";
        }
        mysqli_close($_connections);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Form</title>
  <link rel="stylesheet" href="login.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
  <div class="wrapper">
    <form action="<?php htmlspecialchars("PHP_SELF"); ?>" method="post">
      <h1>Login</h1>
      <div class="input-box">
        <input type="text" name="Email" placeholder="Email" >
        <i class='bx bxs-user'></i>
        <span class="error"><?php echo $EmailErr;?> </span>
      </div>
      <div class="input-box">
        <input type="password" name="Password" placeholder="Password">
        <i class='bx bxs-lock-alt' ></i>
        <span class="error"><?php echo $PasswordErr;?> </span>
      </div>
      <div class="remember-forgot">
        <label><input type="checkbox">Remember Me</label>
        <a href="#">Forgot Password</a>
      </div>
      <button type="submit" class="btn">Login</button>
      <div class="register-link">
        <p>Dont have an account? <a href="register.php">Register</a></p>
      </div>
    </form>
  </div>
</body>
</html>