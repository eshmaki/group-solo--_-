<?php
$phone = "+01 123455678990";
$email = "demo@gmail.com";
$location = "Your Location Address"; 
$nav_links = [
  'home' => 'index.php',
  'about' => 'about.php',
  'treatment' => 'treatment.php',
  'doctor' => 'doctor.php',
  'testimonial' => 'testimonial.php',
  'contact' => 'contact.php'
];
?>
<header class="header_section">
  <div class="header_top">
    <div class="container">
      <div class="contact_nav">
        <a href="tel:<?php echo $phone; ?>">
          <i class="fa fa-phone" aria-hidden="true"></i>
          <span>Call : <?php echo $phone; ?></span>
        </a>
        <a href="mailto:<?php echo $email; ?>">
          <i class="fa fa-envelope" aria-hidden="true"></i>
          <span>Email : <?php echo $email; ?></span>
        </a>
        <a href="https://www.google.com/maps?q=<?php echo urlencode($location); ?>">
          <i class="fa fa-map-marker" aria-hidden="true"></i>
          <span>Location</span>
        </a>
      </div>
    </div>
  </div>
  <div class="header_bottom">
    <div class="container-fluid">
      <nav class="navbar navbar-expand-lg custom_nav-container">
        <a class="navbar-brand" href="<?php echo $nav_links['home']; ?>">
          <img src="images/logo.png" alt="Logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span> </span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <div class="d-flex mr-auto flex-column flex-lg-row align-items-center">
            <ul class="navbar-nav">
              <li class="nav-item active">
                <a class="nav-link" href="<?php echo $nav_links['home']; ?>">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo $nav_links['about']; ?>">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo $nav_links['treatment']; ?>">Treatment</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo $nav_links['doctor']; ?>">Doctors</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo $nav_links['testimonial']; ?>">Testimonial</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo $nav_links['contact']; ?>">Contact Us</a>
              </li>
            </ul>
          </div>
           <div class="quote_btn-container">
                        <a href="index.php">
                            <i class="fa fa-user" aria-hidden="true"></i>
                            <span> Login </span></a>
                        <a href="index.php">
                            <i class="fa fa-user" aria-hidden="true"></i>
                            <span> Sign Up </span></a>
                        <form class="form-inline">
                            <button class="btn my-2 my-sm-0 nav_search-btn" type="submit">
                                <i class="fa fa-search" aria-hidden="true"></i>
                            </button>
                        </form>
                    </div>
        </div>
      </nav>
    </div>
  </div>
</header>