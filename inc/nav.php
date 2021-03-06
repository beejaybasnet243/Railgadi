<div class="container mw-100">
  <nav class="navbar navbar-expand-sm navbar-light bg-white">
        <nav class="navbar">
          <a class="navbar-brand" href="..\index.php">
              <img src="images\logore.png" width="100" height="100" class="d-inline-block align-center " alt="">
              <span class="font-weight-normal text-info">Railgadi</span>
          </a>
        </nav>

      <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarSupportedContent">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="\index.php" style="display:inline">Home</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="\passenger\register.php" style="display:inline">Sign up</a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="\about.php" style="display:inline">About us</a>
          </li>
          
          <?php
            if (isset($_SESSION['id'])) { ?>
            <li class="nav-item">
              <a class="nav-link" href="..\passenger\logout.php" style="display:inline">Logout</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="..\Userprofile\userprofile.php" style="display:inline"><i class="fa fa-user fa-1x"></i></a>
            </li><?php } else{?>

            <li class="nav-item">
              <a class="nav-link" href="..\passenger\login.php" style="display:inline">Login</a>
            </li><?php } ?>
        </ul>
      </div>
  </nav>
</div>