<!-- Team Section -->
<?php
$teamTitle = "Our Doctors";
$doctors = [
    [
        "name" => "Hennry",
        "specialization" => "MBBS",
        "image" => "images/team1.jpg",
        "social" => [
            "facebook" => "#",
            "twitter" => "#",
            "linkedin" => "#",
            "instagram" => "#"
        ]
    ],
    [
        "name" => "Jenni",
        "specialization" => "MBBS",
        "image" => "images/team2.jpg",
        "social" => [
            "facebook" => "#",
            "twitter" => "#",
            "linkedin" => "#",
            "instagram" => "#"
        ]
    ],
    [
        "name" => "Morco",
        "specialization" => "MBBS",
        "image" => "images/team3.jpg",
        "social" => [
            "facebook" => "#",
            "twitter" => "#",
            "linkedin" => "#",
            "instagram" => "#"
        ]
    ]
];
?>

<section class="team_section layout_padding">
  <div class="container">
    <div class="heading_container heading_center">
      <h2>
        <?php echo $teamTitle; ?>
      </h2>
    </div>
    <div class="carousel-wrap">
      <div class="owl-carousel team_carousel">
        <?php foreach ($doctors as $doctor): ?>
          <div class="item">
            <div class="box">
              <div class="img-box">
                <img src="<?php echo $doctor['image']; ?>" alt="<?php echo $doctor['name']; ?>" />
              </div>
              <div class="detail-box">
                <h5>
                  <?php echo $doctor['name']; ?>
                </h5>
                <h6>
                  <?php echo $doctor['specialization']; ?>
                </h6>
                <div class="social_box">
                  <a href="<?php echo $doctor['social']['facebook']; ?>">
                    <i class="fa fa-facebook" aria-hidden="true"></i>
                  </a>
                  <a href="<?php echo $doctor['social']['twitter']; ?>">
                    <i class="fa fa-twitter" aria-hidden="true"></i>
                  </a>
                  <a href="<?php echo $doctor['social']['linkedin']; ?>">
                    <i class="fa fa-linkedin" aria-hidden="true"></i>
                  </a>
                  <a href="<?php echo $doctor['social']['instagram']; ?>">
                    <i class="fa fa-instagram" aria-hidden="true"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>

