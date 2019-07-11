<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Bookmarkers</title>
        <link rel="stylesheet" href="https://bootswatch.com/4/cyborg/bootstrap.min.css">
    </head>
    <body>
        <nav class="navbar fixed-bottom navbar-expand-sm navbar-dark bg-dark">
            <a class="navbar-brand" href="#">My Bookmarkers</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?action=clear">Delete All</a>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="container mt-5">
            <div class="row">
                <div class="col-md-7">
                    <form>
                        <div class="form-group">
                            <label>Nome Site</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Site Link</label>
                            <input type="text" name="link" class="form-control">
                        </div>
                        <input type="submit" value="Salvar" class="btn btn-default">
                    </form>
                </div>
                <div class="md-5">
                    
                </div>
            </div>
        </div>
    </body>
</html>