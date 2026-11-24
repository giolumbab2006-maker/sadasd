
<?php
$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username == "admin" && $password == "12345") {
        $message = "Login Successful! Welcome to AIRON'S CANTEEN!";
    } else {
        $message = "Invalid username or password!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login - AIRON'S CANTEEN</title>
</head>
<body>

    <h1>AIRON'S CANTEEN</h1>
    <h2>Login Account</h2>

    <form method="POST">
        <label>Username:</label><br>
        <input type="text" name="username" required>
        <br><br>

        <label>Password:</label><br>
        <input type="password" name="password" required>
        <br><br>

        <button type="submit">LOGIN</button>
    </form>

    <p><?php echo htmlspecialchars($message); ?></p>

</body>
</html>
