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
    <div class="box container">
        <header> 
            <nav class="navbar navbar-expand-lg">
                    <div class="container center navbar-brand" >
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">    
                        <i class="fas fa-bars"></i>
                        </button>
                       <div class="collapse navbar-collapse page-header-top" id="navbar"> 
                            <a href="index.php?p=home"><img src="./images/logo.png" alt="TailsAndTrails"/></a>      
                            <ul class="navbar-nav navbar-center mx-auto mb-2">        
                                <li class="nav-item active">            
                                    <a class="nav-link" href="index.php?p=home">Home<span class="sr-only"></span></span></a>          
                                </li>          
                                <li class="nav-item">            
                                    <a class="nav-link" href="index.php?p=breeds">Breeds</a>          
                                </li>     
                                <li class="nav-item">            
                                    <a class="nav-link" href="index.php?p=events">Events</a>          
                                </li>    
                                <li class="nav-item">            
                                    <a class="nav-link" href="index.php?p=map">Map</a>          
                                </li>   
                                <li class="nav-item">            
                                    <a class="nav-link" href="index.php?p=api">API</a>          
                                </li> 
                                <?php if($_SESSION['is_loggedin']) { ?>
                                    <li class="nav-item">
                                        <a class="nav-link" href="index.php?p=account">My Account</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="index.php?p=logout">Logout</a>
                                    </li>
                                <?php }else{ ?>
                                    <li class="nav-item">
                                        <a class="nav-link" href="index.php?p=login">Sign Up / Login</a>
                                    </li>
                                <?php } ?>   
                            </ul>
                            <form id="searchbox" action="index.php?p=search" method="post" class="d-flex">
                                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="query">
                                <button class="btn btn-tailsandtrails2 ms-2 fa fa-search" type="submit"></button>       
                            </form>
                        </div>
                    </div>
                </nav>
            </header>


