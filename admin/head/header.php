

<nav class="navbar navbar-expand-lg navbar-light bg-info">
      <div class="logo">
        <img src="logo.png" alt="">
    </div>
    <div class="logo">
        <img style="width: 200px; " src="image/logo.png" alt="">
    </div>
        <a class="navbar-brand" href="#">  </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#"></a><span class="sr-only">(current)</span></a>
            </li>
            
          </ul>
          <span class="navbar-text p-2">
            <i class="fa fa-user-circle" aria-hidden="true"></i> User : <?php echo $_SESSION["usertype"] ;?>
          </span>

          <a href="logout.php" class="navbar-text p-2">
            <i class="fa fa-sign-out" aria-hidden="true"></i> Logout
        </a>
          <a  href="" class="navbar-text p-2">
            <i class="fa fa-cogs" aria-hidden="true"></i> Profile
          </a>
         
        </div>
      </nav>