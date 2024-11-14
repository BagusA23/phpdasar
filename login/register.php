
<?php 
session_start();

if (isset($_POST["submit"])) {
    $username = $_POST["Username"];
    $password = $_POST["Password"];

    if ($username == "admin" && $password == "123") {
        $_SESSION["logged_in"] = true;
        header("Location: admin.php");
        exit;
    } else {
        $error = "Username / Password Salah";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <div class="container">
    <h1 id="header">Login</h1>

    <?php if (isset($error)) :?>
        <p style="color: red; font-style:italic; "  ><?php echo $error; ?></p>
    <?php endif ?>    

    <ul>
        <form action="" method="post" >
            <li>
                <label for="Email">Email : </label>
                <input type="text" name="Email" id="Email" required>
            </li>
            <li>
                <label for="Username">Username : </label>
                <input type="text" name="Username" id="Username" required>
            </li>
            <li>
                <label for="Password">Password : </label>
                <input type="Password" name="Password" id="Password" required>
            </li>
            <li>
                <label for="Confirm Password">Confirm Password : </label>
                <input type="PAssword" name="Confirm Password" id="Confirm Password" required>
            </li>
            <li style="text-align: end;" ><p><a href="login.php">Login</a></p></li>
            <li>
                <button type="submit" name="submit" >Register</button>
            </li>
        </form>
    </ul>
    </div>
</body>
</html>