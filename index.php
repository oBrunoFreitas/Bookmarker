<?php 
    session_start();    

    if (isset($_POST['name'])) {
     
        if (isset($_SESSION['bookmarks'])) {
            $_SESSION['bookmarks'][$_POST['name']] = $_POST['link'];
        } else {
            $_SESSION['bookmarks'][$_POST['name']] = array($_POST['name'] => $_POST['link']);
        }
    }
    
    if (isset($_GET['action']) && $_GET['action'] = 'delete') {
        unset($_SESSION['bookmarks'][$_GET['name']]);
        header("Location: index.php");  
    }

    if (isset($_GET['action']) && $_GET['action'] = 'clear') {
        session_unset();
        session_destroy();
        header("Location: index.php");  
    }    

 ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Bookmarkers</title>
        <link rel="stylesheet" href="https://bootswatch.com/4/cyborg/bootstrap.min.css">
        <style>
            .delete{color: red;}
        </style>
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
                    <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
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
                    <?php if(isset($_SESSION['bookmarks'])) : ?>
                        <ul class="list-group">
                            <?php foreach ($_SESSION['bookmarks'] as $name => $link): ?>
                                <li class="list-group-item">
                                    <a target="_blank" href="<?php echo "https://".$link; ?>"><?php echo $name; ?> </a>
                                    <a class="delete" href="index.php?action=delete&name=<?php echo $name; ?>"> [X]</a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>                    
                </div>
            </div>
        </div>
    </body>
</html>