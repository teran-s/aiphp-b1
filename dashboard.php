<?php
    session_start();
    if(!isset($_SESSION['userloggedin'])) {
        header('Location: login.php');
        exit();
    }
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>One Stop. Employee Cloud</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!--Favicons-->
    <link rel="apple-touch-icon" sizes="180x180" href="img/fav/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/fav/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/fav/favicon-16x16.png">
    <link rel="manifest" href="img/fav/site.webmanifest">
    <style>
      .hero-text {
            text-align: center;
            color: #333;
            font-size: 5rem;
            margin-top: 10vh;
            font-weight: 100;
        }
        .dash-card-text {
            text-align: center;
            color: #333;
            font-size: 2rem;
            margin-top: 1vh;
            font-weight: 100;
            text-decoration: none;
        }
        .dash-card{
          text-decoration: none;
          transition:all 0.5s;
        }
        .dash-card:hover{
          box-shadow: 0 0 10px rgba(64, 79, 219, 0.5);
          transform: scale(1.02);
        }
    </style>
</head>
  <body>

  <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php"><img src="img/fav/favicon-32x32.png" alt="logo"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="index.php">Home</a>
                    </li>
                    
                    
                </ul>
                <form class="d-flex" role="search">
                    
                    <a href="../logout.php" class="btn btn-outline-danger" >Logout</a>
                </form>
            </div>
        </div>
    </nav>
      
      <div class="container-md text-center mt-5" style="max-width: 700px;">
        <div class="mb-4 hero-text">OneStop Dashboard</div>

        <div class="row">
          
          
            <a class="col-4 dash-card card p-3 rounded-5" style="width: 18rem;" href="notes/index.php">
            <img src="img/dash/notes.png" class="card-img-top" alt="..."/>
            <h3 class="dash-card-text">Notes App</h3>
            </a>
            &ensp;
            <a class="col-4 dash-card card p-3 rounded-5" style="width: 18rem;" href="tasks/index.php">
            <img src="img/dash/task.png" class="card-img-top" alt="..."/>
            <h3 class="dash-card-text">Tasks App</h3>
            </a>
            
          
      </div>
    </div>

   

    
   

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  

    </body>
</html>