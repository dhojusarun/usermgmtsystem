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

        <form action="insert.php" method="post" name="user_form">
            
            <div class="field-group">
                <label for="fullname">Full Name</label>
                <input type="text" id="fullname" name="fullname" required>
            </div>

            <div class="field-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required>
            </div>

            <div class="field-group">
                <label for="email">E-mail</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="field-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>

            <div class="field-group">
                <label for="cpassword">Confirm Password</label>
                <input type="password" id="cpassword" name="cpassword" required>
            </div>

            <div class="field-group">
                <input type="checkbox" id="agree" name="agree" required>
                <label for="agree">
                    I agree with the 
                    <a href="terms.php" title="Terms & Conditions">Terms & Conditions</a>
                </label>
            </div>

            <button type="submit" name="submit" class="btn">Register</button>
        </form>

        <div class="btn-group">
            <span class="note">
                Already have an account?
                <a href="login.php" class="text-link">Login Now</a>
            </span>
            <br><br>
            <a href="index.php" class="text-link" title="Back to Home">&larr; Back to Home</a>
        </div>
    </main>
</body>
</html>
