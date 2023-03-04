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
        <div align="right">
            <form action="<?=constant('URL');?>information/clearSearch" method="POST">
                <div>
                    <input type="submit" class="btn btn-primary" id="submitForm" value="Update movie list"/> 
                </div>
            </form>
        </div>
        <div>
            <form action="<?=constant('URL');?>information/titleSearch" method="POST">
                <div class="row">
                    <div class="col-md-3">
                        <label for="username" class="form-label">Search by title</label>
                        <input type="text" class="form-control" name="title" id="title" placeholder="Search">
                    </div>
                    <div class="col-md-6">
                        <label for="dateRange" class="form-label">Date Range</label>
                        <div class="row">
                            <div class="col-md-3">
                                <select class="form-control fieldYear" id="selectStartDate">
                                    <option val="">Start Date</option>
                                </select>
                            </div>
                            <div class="col-md-1">
                            </div>
                            <div class="col-md-3">
                                <select class="form-control fieldYear" id="selectEndDate">
                                    <option val="">End Date</option>
                                </select>                           
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="dateRange" class="form-label">Sort by</label>
                        <select class="form-control searchSortMovies" id="selectSort">
                            <option value="">Sort by</option>
                            <option value="ASC">ASC</option>
                            <option value="DESC">DESC</option>
                            <option value="TITLE">TITLE</option>
                            <option value="DATE">DATE</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <input type="submit" class="btn btn-primary" id="submitForm" value="Submit"/> 
                </div>
            </form>
        </div>
        <table align="center" border="1" style="width:auto; height:20px;" class="table table-condensed table-bordered table-hover" id="moviesResults">
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
                    <tr class="movieRow">
                        <td class="titleMovie"><?=$movie['title']?></td>
                        <td class="yearMovie"><?=$movie['year']?></td> 
                        <td class="typeMovie"><?=$movie['type']?></td> 
                        <td class="imageMovie"><img src="<?=$movie['poster']?>" class="poster"/></td> 
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>