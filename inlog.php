<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account</title>
    
    <!-- <script src="./scripts/inlogg.js"></script> -->
    <!-- ik heb de script laten staan omdat ik het nog moet laten zien aan docent  -->
</head>

<body>

    <main id="inlog_main">
        <h2>Login</h2>
        <form id="loginForm" method="POST">
            <label id="bq" for="email">Username:</label>
            <input type="email" id="email" name="email" required>
            <br>
            <label id="bier" for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <br>
            <button class="button-login" type="submit">Login</button>
        </form>
        <div id="message">
            <?php
            require_once './autoload.php';

            use BeveiligingApp\Models\UserLogin\UserLogin;

            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                session_start();

                $username = $_POST['email'];
                $password = $_POST['password'];

                $userLogin = new UserLogin();
                $userLogin->login($username, $password);
            }
            ?>
        </div>
    </main>

    <?php require_once 'includes/footer.php'; ?>

</body>

</html>