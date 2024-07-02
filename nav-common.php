<nav class="navbar navbar-dark navbar-expand-lg" style="background-color: #303134;">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php"><img src="imgs/favicon_io/favicon-32x32.png" alt="logo"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">  
            <a href="index.php" style="text-decoration: none; color: #f8f9fa;">DocSpot Channeling Service</a>     
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