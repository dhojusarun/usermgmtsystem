<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | User Management</title>
    <link rel="stylesheet" href="./main.css">
</head>
<body>
    <main class="container">
        <h1 class="page-title">Login</h1>
        <form action="#" method="post" name="user_form">
            <div class="field-group">
                <label for="uname">Username / E-mail</label>
                <input type="text" id="uname" name="username">
            </div>
            <div class="field-group">
                <label for="pwd">Password</label>
                <input type="password" id="pwd" name="password">
            </div>
            <div class="field-group">
                <input type="checkbox" id="rem" name="remember">
                <label for="rem">Remember Login credentials.</label>
            </div>
            <button type="submit" name="submit" class="btn">Login</button>
        </form>
    </main>
    <script src="./script.js"></script>
</body>
</html>