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
        <h1 class="center">Create account</h1>
        <form action="<?=constant('URL');?>register/registerAccount" method="POST">
            <div>
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" name="username" id="username" value="<?=$this->username;?>">
                <label for="phone" class="form-label">Phone</label>
                <input type="text" class="form-control" name="phone" id="phone" value="<?=$this->phone;?>">
                <label for="email" class="form-label">Email</label>
                <input type="text" class="form-control" name="email" id="email" value="<?=$this->email;?>">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" id="password" value="<?=$this->password;?>">
            </div>
            <div class="center"><?=$this->message; ?></div>
            <div class="center">
                <input type="submit" class="btn btn-primary" id="submitForm" value="Submit"/> 
            </div>
        </form>
    </div>
</body>
</html>