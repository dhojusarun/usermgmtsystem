<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register | User Management</title>
    <link rel="stylesheet" href="./main.css">
</head>
<body>
    <main class="container">
        <h1 class="page-title">Register</h1>
        <form action="#" method="post" name="user_form">
            <div class="field-group">
                <label for="uname">FullName</label>
                <input type="text" id="uname" name="username">
            </div>
            <div class="field-group">
                <label for="uname">Username / E-mail</label>
                <input type="text" id="uname" name="username">
            </div>
            <div class="field-group">
                <label for="pwd">Password</label>
                <input type="password" id="pwd" name="password">
            </div>
            <div class="field-group">
                <label for="cpwd">Confirm Password</label>
                <input type="password" id="cpwd" name="cpassword">
            </div>
            <div class="field-group">
                <input type="checkbox" id="agree" name="agree">
                <label for="agree">I agree with the <a href="terms.php" title="Terms & Conditions" >Terms & Conditions</label>
            </div>
            <button type="submit" name="submit" class="btn">Register</button>
        </form>
    </main>
    <script src="./script.js"></script>
</body>
</html>