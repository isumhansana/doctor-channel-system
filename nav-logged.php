<nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php"><img src="imgs/favicon_io/favicon-32x32.png" alt="Logo"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0"">
                    <li class="nav-item">
                        <?php 
                            if(basename($_SERVER['PHP_SELF']) === 'index.php') {
                                echo'<a class="nav-link active" aria-current="page" href="index.php">Home</a>';
                            }else{
                                echo'<a class="nav-link" aria-current="page" href="index.php">Home</a>';
                            }
                        ?>
                    </li>
                    <li class="nav-item">
                        <?php 
                            if(basename($_SERVER['PHP_SELF']) === 'dashboard.php') {
                                echo'<a class="nav-link active" aria-current="page" href="dashboard.php">Dashboard</a>';
                            }else{
                                echo'<a class="nav-link" aria-current="page" href="dashboard.php">Dashboard</a>';
                            }
                        ?>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <a class="btn btn-outline-danger" href="signOut.php">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0z"/>
                            <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708z"/>
                        </svg>
                    </a>
                </form>
            </div>
        </div>
</nav>