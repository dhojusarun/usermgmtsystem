<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
    <link rel="stylesheet" href="./main.css">
</head>
<body>
    <main class="container">
        <h1 class="page-title">Edit</h1>

        <form action="update.php" method="post" name="user_form">
            
            <div class="field-group">
                <label for="fullname">Full Name</label>
                <input type="text" id="fullname" name="fullname" required>
            </div>

            <div class="field-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" disabled>
            </div>

            <div class="field-group">
                <label for="email">E-mail</label>
                <input type="email" id="email" name="email" disabled>
            </div>
            <div class="field-group">
                <label for="addr">Address</label>
                <input type="text" id="addr" name="address" value="">
            </div>
            <div class="field-group">
                <label for="photo">Photos</label>
                <input type="file" id="photo" name="photo" value="">
            </div>

            <button type="submit" name="submit" class="btn">Update</button>
        </form>

        <div class="btn-group">
           <hr>
            <a href="list.php" class="text-link" title="View All Users">&larr; View All Users</a>
        </div>
    </main>
</body>
</html>
