<?php
// Start the session
session_start();
include'./connection.php';

if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $remember = isset($_POST['remember']) ? true : false;
    
    //basic validation
    if(empty($username) || empty($password)){
        $_SESSION['error'] = 'Please fill in all fields.';
    }else{
        //prepare and execute the query
        $sql="SELECT id, username, password FROM tbl_users WHERE username = '$username' OR email = '$username' LIMIT 1";
        $res = mysqli_query($conn, $sql);
        if($res->num_rows == 1){
            echo 'test';
            $user = $res->fetch_assoc();
            //verify password
            $haspwd = sha1($password);
            if($haspwd == $user['password']){
                $_SESSION['user_id'] = $user['id'];
                if($remember){
                    setcookie('user_login', $user['username'], time() + (86400 * 30), "/");  //30 days
                   }
                   header("location: dashboard.php");
            }else{
            $_SESSION['error'] = 'Invalid password.';
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./main.css">
</head>
<body>
    <main class="container">
        <h1 class="page-title"> Login </H1>
        <?php if (isset($_SESSION['message'])): ?>
            <div class="alert success">
                <?php 
                    echo $_SESSION['message'];// display success message 
                    unset($_SESSION['message']); // remove message after displaying ?>
                    <?php elseif (isset($_SESSION['error'])): ?>
            <div class="alert error">
                <?php 
                    echo $_SESSION['error']; // display error message
                    unset($_SESSION['error']);// remove message after displaying?>
            </div>
        <?php endif; ?>


        <form action="#" method="post" name="user_form">
            <div class="form-group">
            <label for="uname">Username / Email</label>
            <input type = "text" id="uname" name="username" value="">
        </div>
        <div class="form-group">
            <label for="PWD">password</lebel>
            <input type = "password" id="PWD" name="password" value="">
        </div>
        <div class="field-group">
            <input type ="checkbox" id="rem" name ="remember" value="1">
            <label for="rem">Remember login credentials</label>
        </div>
        <button type="submit" name="submit" class="btn">login</button>
         <div class="btn_group">
            <span class="note">Don't have an account?  <a href="register.php" class="Text link">Register Now</a></span>
   <br>
    <a href ="index.php" class="Text link">&larr; Back to Home</a>
</div>
        </form>
</main>
</body>
</html>