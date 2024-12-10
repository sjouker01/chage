<?php    require_once './autoload.php';


    use App\Controllers\LoginController;
    $controll = new LoginController();
    $controll->handleRequest();
  
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account</title>
    
    <!-- <script src="./scripts/inlogg.js"></script> -->
    <!-- ik heb de script laten staan omdat ik het nog moet laten zien aan docent  -->
</head>
<?php require_once './templates/header.php'?>

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

        </div>
    </main>

    <?php require_once './templates/footer.php'; ?>

</body>

</html>