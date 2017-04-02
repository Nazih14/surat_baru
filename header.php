        <!--top nav start=======-->

        <div class="container-fluid">
          <div class="navbar-header">      
            <a class="navbar-brand" href="index.php" style="color: #000">Surat Oke</a>
            <a href="#" class="sidebar-toggle">
              <i class="fa fa-bars" style="color: #000"></i></a>
              <span class="close-btn" id="hide-btn"><i class="fa fa-times" style="color: #000" aria-hidden="true"></i></span>
            </div>

            <ul class="social-icon pull-right list-inline">

              <li>
                <a href="index.php">Beranda</a>
              </li>

              <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#"> <b style='color:blue'><?php echo $_SESSION[namalengkap]; ?> </b><b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Update Profile</a></li>
                  <li><a href="logout.php">Log-out</a></li>
                </ul>
              </li>
            </ul>       
          </div>  

          <!--    top nav end===========-->