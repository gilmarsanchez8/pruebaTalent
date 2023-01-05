<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRUEBA TALENT</title>
</head>
<body>
    <?php require 'views/header.php'; ?>
    <div id="main">
        <h1 class="center">Login</h1>
        <form action="<?=constant('URL');?>login/validateLogin" method="POST">
            <div>
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" name="username" id="username">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" id="password">
            </div>
            <div class="center"><?=$this->messageLogin; ?></div>
            <div class="center">
                <input type="submit" class="btn btn-primary" id="submitForm" value="Submit"/> 
            </div>
        </form>
    </div>
</body>
</html>