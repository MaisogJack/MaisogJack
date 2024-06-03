<?Php
    $fullname = $email = $password = $cpassword=$fullnameErr = $emailErr = $passwordErr = $cpasswordErr="";

        if ($_SERVER["REQUEST_METHOD"]=="POST"){
            if(empty($_POST["fullname"])){
                $fullnameErr="Fullname is required";
            }
                else{
                $fullname=$_POST["fullname"];
            }
            if ($_SERVER["REQUEST_METHOD"]=="POST")
                    if(empty($_POST["email"])){
                $emailErr="Email is required";
            }
                        else{
                $email=$_POST["email"];
            }
        
            if ($_SERVER["REQUEST_METHOD"]=="POST")
                            if(empty($_POST["password"])){
                $passwordErr="Password is required";
            }
                                else{
                $password=$_POST["password"];
            }
        
            if ($_SERVER["REQUEST_METHOD"]=="POST")
       
                                    if(empty($_POST["cpassword"])){
                $cpasswordErr="Confirm Password is required";
            }
                                        else{
                $cpassword=$_POST["cpassword"];
            }
        }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta name="viewport" content="width=device-width,initial-scales=1.0,minimum-scale=1.0">
	<title> Sign Up </title>
	<link rel="stylesheet" href="register.css">
</head>
<style>
    .error{
        color:red;
    }
    a{
        color:black;
        text-decoration:none;
    }
</style>

<body>
    <div class="container">
    <form method="post" action="">
        <div class="contact-box">
            <div class="right">
                <h2>Sign Up</h2>
                <input type="text" name="fullname" value="<?php echo $fullname; ?>" class="field" placeholder="Your Full Name">
                <span class="error"><?php echo $fullnameErr?></span>
                <input type="email" name="email" value="<?php echo $email; ?>" class="field" placeholder="Your Email">
                <span class="error"><?php echo $emailErr?></span>
                <input type="password" name="password" value="<?php echo $password; ?>" class="field" placeholder="Enter Password">
                <span class="error"><?php echo $passwordErr?></span>
                <input type="password" name="cpassword" value="<?php echo $cpassword; ?>" class="field" placeholder="Confirm Password">
                <span class="error"><?php echo $cpasswordErr?></span>
                <button type="submit" class="btn" value="Submit">Register</button>
    </form>
    <a href="Login.php">Already have an account? <b>Click here</b></a>
            </div>
            
        </div>

    </div>

