<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MOVIES</title>
</head>
<body>
    <?php require 'views/header.php'; ?>
    <div id="main">
        <div>
            <form action="<?=constant('URL');?>information/titleSearch" method="POST">
                <div class="col-md-4">
                    <label for="username" class="form-label">Search by title</label>
                    <input type="text" class="form-control" name="title" id="title" placeholder="Search">
                </div>
                <div>
                    <input type="submit" class="btn btn-primary" id="submitForm" value="Submit"/> 
                </div>
            </form>
        </div>
        <table align="center" border="1" style="width:auto; height:20px;" class="table table-condensed table-bordered table-hover">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Year</th>
                    <th>Type</th>
                    <th>Poster</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($this->movies as $movie) { ?>
                    <tr>
                        <td><?=$movie['title']?></td>
                        <td><?=$movie['year']?></td> 
                        <td><?=$movie['type']?></td> 
                        <td><img src="<?=$movie['poster']?>" width="80" height="80" /></td> 
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        <div>
            <form action="<?=constant('URL');?>information/clearSearch" method="POST">
                <div>
                    <input type="submit" class="btn btn-primary" id="submitForm" value="Clear"/> 
                </div>
            </form>
        </div>
    </div>
</body>
</html>