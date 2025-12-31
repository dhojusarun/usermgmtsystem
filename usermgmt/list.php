<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User List | User Management</title>
    <link rel="stylesheet" href="./main.css">

</head>
<body>
    <main class="container large">
        <h1 class="page-title">User List</h1>
        <?php if(isset($_SESSION['message'])):?>
            <div class = "alert success">
                <?php echo $_SESSION['message'];
                unset($_SESSION['message']);?>
                </div>
                <?php elseif(isset($_SESSION['error'])):?>
                    <div class= "alert error">
                        <?php echo $_SESSION['error'];
                        unset($_SESSION['error']);?>
                        </div>
                        <?php endif;?>
        <table border = "1" cellpadding="10" cellspacing="0">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Full Name</th>
                    <th>Username</th>
                    <th>E-mail</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>John Doe</td>
                    <td>johndoe</td>
                    <td>johndoe@example.com</td>
                      <td>
                        <a href="edit.php?id=1" title="Edit" class="btn"><img width="20px" height="auto" src="./images/edit.png" alt="edit"></a>
                        <a href="delete.php?id=1" title="Delete" class="btn btn-danger"><img width="20px" height="auto" src="./images/delete.png" alt="delete"></a>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Mark William</td>
                    <td>markwillaim</td>
                    <td>william@example.com</td>
                    <td>
                        <a href="edit.php?id=1" title="Edit" class="btn"><img width="20px" height="auto" src="./images/edit.png" alt="edit"></a>
                        <a href="delete.php?id=1" title="Delete" class="btn btn-danger"><img width="20px" height="auto" src="./images/delete.png" alt="delete"></a>
                    </td>
                </tr>
            </tbody>
        </table>
         <div class="btn-group">
            <hr>
            <a href="index.php" class="text-link" title="Back to Home">&larr;Back To Home</a>&nbsp;&nbsp;|&nbsp;&nbsp;
                <a href = "register.php" class="text-link">Add User</a> 
    </main>
</body>
</html>


<!-- URL: https://www.google.com:80/contact?id=10&status=1
http:protocol
s: secure (SSL: Secure Sockets Layer)
www.google.com: domain name (host)
www:sub-domain
:80 : port number
contact: slug
?___: Query String Parameters
id = 10
status = 1 
-->