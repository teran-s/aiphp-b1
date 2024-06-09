<nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php"><img src="img/fav/favicon-32x32.png" alt="logo"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">

          <?php
                if(basename($_SERVER['PHP_SELF']) === 'index.php') {
                   
                }else{
                    echo ' <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                  </li>';
                }
            ?>
           
            
            
                  
          </ul>
          <form class="d-flex" role="search">
          <?php 
                if(basename($_SERVER['PHP_SELF']) === 'register.php') {
                    echo'<a class="btn btn-primary" href="register.php">Register</a>&ensp;';
                }else{
                    echo'<a class="btn btn-outline-primary" href="register.php">Register</a>&ensp;';
                }
            ?>
          
            <?php 
                if(basename($_SERVER['PHP_SELF']) === 'login.php') {
                    echo'<a class="btn btn-success" href="login.php">Login</a>';
                }else{
                    echo'<a class="btn btn-outline-success" href="login.php">Login</a>';
                }
            ?>
            
            
          </form>
        </div>
      </div>
    </nav>