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
    </style>
</head>
  <body>

  <?php
      include_once('nav-common.php');
    ?>
    
      <div class="container-md text-center mt-5" style="max-width: 400px;">
        <div class="mb-4 hero-text">Let's Get Registered !</div>
        <form action="dbregister.php" method="POST">
            <div class="mb-3 ">
                <input type="email" onkeyup="hideAlertBox()" class="form-control text-center fs-5 fw-light" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" placeholder="Email address">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <input type="text" class="form-control text-center fs-5 fw-light" id="firstName" name="firstName" placeholder="First Name">
            </div>
            <div class="mb-3">
                <input type="text" class="form-control text-center fs-5 fw-light" id="lastName" name="lastName" placeholder="Last Name">
            </div>
            <div class="mb-3">
                <input type="text" class="form-control text-center fs-5 fw-light" id="phone" name="phone" placeholder="Phone">
            </div>
            <div class="mb-3">
                <input type="text" class="form-control text-center fs-5 fw-light" id="salary" name="salary" placeholder="Salary">
            </div>
            <div class="mb-3">
                <input type="date" class="form-control text-center fs-5 fw-light" id="dob" name="dateOfBirth" placeholder="Date Of Birth">
            </div>
            <div class="mb-3">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="male" value="m" checked>
                    <label class="form-check-label fs-5 fw-light" for="male">Male</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="female" value="f">
                    <label class="form-check-label fs-5 fw-light" for="female">Female</label>
                </div>
            </div>
            <button type="submit" class="btn btn-primary fs-5 fw-light">Register</button>
        </form>
        <?php

        if(isset($_GET['error'])) {
          echo('
           <div id="alertbox" class="alert alert-danger mt-3" role="alert">
              User with this email already exists
          </div>');
        }
        
        ?>
    </div>
   

    <script>
      function hideAlertBox() {
        const alertBox = document.getElementById("alertbox");
        alertBox.style.display = "none";
      }
    </script>
    
   

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  

    </body>
</html>