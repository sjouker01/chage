

<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account</title>
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/styling-v2.css">
</head>

<body id="body">
    <?php
    require_once 'includes/header.php';
    ?>

    <main id="account_main" class="account-main">
        <h1 class="title">Welkom op account page</h1>
        


        <form class="logout-form" action="includes/logout.php" method="post">
            <button class="btn btn-primary" type="submit">Loguit</button>
        </form>
    </main>

    <?php require_once 'includes/footer.php'; ?>
</body>

</html>