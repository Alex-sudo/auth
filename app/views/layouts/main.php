<?php 
use wfm\View;

/** @var $this View */


//echo "<pre>"; 
//print_r($GLOBALS);
//echo "</pre>";

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="Luchak Oleksii" />
        <meta name="author" content="Luchak Oleksii" />
        <title>Auth Luchak Oleksii</title>
        <link rel="icon" type="image/x-icon" href="<?= PATH ?>/thema/assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="<?= PATH ?>/thema/css/styles3.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
            <div class="container px-5">
                <a class="navbar-brand" href="<?= PATH ?>">Start Bootstrap</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <?php if(isset($_SESSION['user'])){ ?>
                            <li class="nav-item"><a class="nav-link" href="/logout">Log out</a></li>
                        <?php }else{ ?>
                            <li class="nav-item"><a class="nav-link" href="/login">Log In</a></li>
                            <li class="nav-item"><a class="nav-link" href="/register">Sign Up</a></li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Header-->
        <header class="masthead text-center text-white">
            <div class="masthead-content">
                <div class="container px-5">
                    
                    <?php if(isset($title)){
                           
                          foreach($title as $item):?>

                       <h1 class="masthead-heading mb-0"><?= $item?></h1>
                    
                    <?php endforeach;

                       }else{ ?>
                          
                          <h1 class="masthead-heading mb-0">One Page Wonder</h1>
                    
                    <?php } ?>
                    
                    <a class="btn btn-primary btn-xl rounded-pill mt-5" href="https://sitedeveloper.eu/">Learn More</a>
                </div>
            </div>
            <div class="bg-circle-1 bg-circle"></div>
            <div class="bg-circle-2 bg-circle"></div>
            <div class="bg-circle-3 bg-circle"></div>
            <div class="bg-circle-4 bg-circle"></div>
        </header>

    <?php if(isset($_SESSION['firework'])): ?>
        <canvas id=c></canvas>
    <?php endif; ?>

    <div style="margin-top: 40px;">
            <?php 
                if(!empty($_SESSION['errors'])){
                    $errors[0] = $_SESSION['errors'];
                    
                    foreach($errors as $items){
                        echo $items;
                    }
                }

                unset($_SESSION['errors']);

                if(!empty($_SESSION['success'])){
                    $success[0] = $_SESSION['success'];
                    
                    foreach($success as $items){
                        echo $items;
                    }  
                
                }

                unset($_SESSION['success']);
                unset($_SESSION['firework']);
            
             ?>

    </div>

        <?= $this->content ?>

        <!-- Footer-->
        <footer class="py-5 bg-black">
            <div class="container px-5">
                <p class="m-0 text-center text-white small">Copyright &copy; Auth Website <?= date('Y')?></p>
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="<?= PATH ?>/thema/js/scripts.js"></script>
        <script src="<?= PATH ?>/thema/js/firework.js"></script>
    </body>
</html>

<?= $this->getDbLogs(); ?>

