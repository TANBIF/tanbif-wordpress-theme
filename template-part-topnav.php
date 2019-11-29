<!-- Navbar start -->
  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container container-navbar">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="/">
          <img alt="Brand" src="<?php echo get_stylesheet_directory_uri(); ?>/img/tanbif-logo.svg">
        </a>
      </div>

      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <div class="row row-search">
          <div class="col-xs-12 col-sm-4 col-md-6">
            <form id="global-search" class="banner" action="#" method="get" name="search-form">
              <div class="input-group">
                <div class="icon-addon addon-lg">
                  <input type="text" placeholder="Search the Portal ..." class="form-control autocomplete" id="biesearch" name="q">
                  <label for="biesearch" class="glyphicon glyphicon-search" rel="tooltip" title="search"></label>
                </div>
                <span class="input-group-btn">
                  <button class="btn btn-default search" type="button">Search</button>
                </span>
              </div>
            </form>
          </div>
          <div class="col-md-2 hidden-xs">
<?php if (is_user_logged_in() ) { ?>
            <ul class="nav navbar-nav navbar-right nav-logged-in">
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                  My profile
                  <span class="caret"></span>
                </a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="https://auth.ala.org.au/userdetails/myprofile/">View profile</a></li>
                  <li><a href="https://auth.ala.org.au/userdetails/registration/editAccount">Account settings</a></li>
                  <li class="divider"></li>
                  <li><a href="<?php echo wp_logout_url( home_url() ); ?>">Log out</a></li>
                </ul>
              </li>
            </ul>
<?php } else { ?>
            <ul class="nav navbar-nav navbar-right nav-login">
              <!-- <li><a href="<?php echo wp_login_url( home_url() ); ?>">Log in</a></li> -->
            </ul> 
<?php } ?>

          </div>
        </div><!-- End row -->

        <ul class="nav navbar-nav">
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
              Start exploring
              <span class="caret"></span>
            </a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="/collections">Collections</a></li>
              <li><a href="/images">Images</a></li>
              <li><a href="#">Explore your area</a></li>
              <li><a href="#">Explore regions</a></li>
              <li><a href="#">Search occurrence records</a></li>
              <li class="divider"></li>
              <li><a href="#">Sites &amp; services</a></li>
            </ul>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
              Search &amp; analyse
              <span class="caret"></span>
            </a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="#">Browse natural history collections</a></li>
              <li><a href="#">Search datasets</a></li>
              <li><a href="#">Download data</a>
              <li><a href="#">Spatial portal</a></li>
              <li class="divider"></li>
              <li><a href="#">TanBIF Portal dashboard</a></li>
            </ul>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
              Participate
              <span class="caret"></span>
            </a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="#">Join a Citizen Science project</a></li>
              <li><a href="#">Record a sighting in the TanBIF Portal</a></li>
              <li><a href="#">Submit a dataset to the TanBIF Portal</a></li>
              <li><a href="#">Digitise a record in DigiVol</a></li>
              <li><a href="#">Mobile apps</a></li>
            </ul>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
              Learn about the TanBIF Portal
              <span class="caret"></span>
            </a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="/about-tanbif/">Who we are</a></li>
              <li class="divider"></li>
              
              <li><a href="/how-to-use-tanbif-portal/">How to use TanBIF Portal</a></li>
              <li><a href="/how-to-work-with-data/">How to work with data</a></li>
              <li><a href="/how-to-cite-ala/">How to cite TanBIF Portal</a></li>
              <!-- <li class="divider"></li> -->
              <!-- <li><a href="#">Education resources</a></li> -->
              <!-- <li><a href="#">Indigenous Ecological Knowledge</a></li> -->
              <li class="divider"></li>
              <li><a href="/news/">TanBIF Portal Blog</a></li>
              <li class="divider"></li>
              <li><a href="/about-tanbif/contact-us/">Contact us</a></li>
<!--               <li><a href="#">Feedback form</a></li> -->
            </ul>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
              Help
              <span class="caret"></span>
            </a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="#">Knowledge base</a></li>
              <li class="divider"></li>
              <li><a href="/about-tanbifs/contact-us/">Contact us</a></li>
              <li><a href="/about-tanbif/feedback-form/">Feedback form</a></li>
            </ul>
          </li>
        </ul>
        <ul class="nav navbar-nav navbar-right visible-xs">
<?php if (is_user_logged_in() ) { ?>
          <li><a href="https://auth.ala.org.au/userdetails/myprofile/"><span class="nav-login">View profile</span></a></li>
          <li><a href="https://auth.ala.org.au/userdetails/registration/editAccount"><span class="nav-login">Account settings</span></a></li>
          <li><a href="<?php echo wp_logout_url( home_url() ); ?>"><span class="nav-login">Log out</span></a></li>
<?php } else { ?>
          <li><a href="<?php echo wp_login_url( home_url() ); ?>"><span class="nav-login">Log in</span></a></li>
<?php } ?>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>
  <!-- End Navbar -->

