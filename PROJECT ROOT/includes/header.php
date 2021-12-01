<!DOCTYPE html>
<html>
    <head>
        <link href="css/styles.css" rel="stylesheet" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Bangers&family=Outfit:wght@400;600;700;800&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/9f9be9c632.js" crossorigin="anonymous"></script>
        <script src="./node_modules/jquery/dist/jquery.min.js"></script>
        <script src="./node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    </head>
    <body id="page-<?php echo $page;?>">
        <header> 
            <div class="page-header-top text-center">
                <a href="index.php?p=home"><img src="./images/logo.png" alt="TailsAndTrails"/></a>
            </div>
            <nav class="navbar-brand navbar-expand-lg navbar-light">
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">    
                    <i class="fas fa-bars"></i>
                    </button>
                    <div class="collapse navbar-collapse" id="navbar">        
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">          
                            <li class="nav-item">            
                                <a class="nav-link" href="index.php?p=home">Home</a>          
                            </li>          
                            <li class="nav-item">            
                                <a class="nav-link" href="index.php?p=categories">Breeds</a>          
                            </li>      
                            <li class="nav-item">            
                                <a class="nav-link" href="index.php?p=map">Map</a>          
                            </li>   
                            <?php if($_SESSION['is_loggedin']) { ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="index.php?p=logout">Logout</a>
                                </li>
                            <?php }else{ ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="index.php?p=login">Login / Register</a>
                                </li>
                            <?php } ?>   
                        </ul>
                        <form action="search.html" method="get" class="d-flex">
                            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-dark ms-2" type="submit">Search</button>       
                        </form>
                    </div>
                </div>
            </nav>
        </header>

