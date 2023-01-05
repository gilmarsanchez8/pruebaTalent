<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="<?=constant('URL');?>public/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    <div id="header">
        <ul>
            <?php if($_SESSION['userLogIn'] != 1) { ?>
                <li><a href="<?=constant('URL');?>register">Create account</a></li>
                <li><a href="<?=constant('URL');?>login">Login</a></li>
            <?php } else { ?>
                <li><a href="<?=constant('URL');?>main">Logout</a></li>
            <?php } ?>
        </ul>
    </div>
</body>
</html>