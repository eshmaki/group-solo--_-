<!-- about section -->
<?php
$aboutTitle = "About Hospital";
$aboutDescription = "Has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors...";
$aboutImage = "images/about-img.jpg";
?>
<section class="about_section">
  <div class="container  ">
    <div class="row">
      <div class="col-md-6 ">
        <div class="img-box">
          <img src="<?php echo $aboutImage; ?>" alt="About Hospital Image">
        </div>
      </div>
      <div class="col-md-6">
        <div class="detail-box">
          <div class="heading_container">
            <h2>
              <?php echo $aboutTitle; ?>
            </h2>
          </div>
          <p>
            <?php echo $aboutDescription; ?>
          </p>
          <a href="./about.php">
            Read More
          </a>
        </div>
      </div>
    </div>
  </div>
</section>
