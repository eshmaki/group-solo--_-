<!-- Treatment boxes -->
<?php

$treatmentTitle = "Hospital Treatment";
$treatmentSubtitle = "Hospital Treatment";
$treatmentImage = "images/treatment-side-img.jpg"; 
$treatments = [
    [
        "title" => "Nephrologist Care",
        "description" => "Alteration in some form, by injected humour, or randomised words which don't look even slightly sure there isn't anything.",
        "image" => "images/t1.png",
    ],
    [
        "title" => "Eye Care",
        "description" => "Alteration in some form, by injected humour, or randomised words which don't look even slightly sure there isn't anything.",
        "image" => "images/t2.png",
    ],
    [
        "title" => "Pediatrician Clinic",
        "description" => "Alteration in some form, by injected humour, or randomised words which don't look even slightly sure there isn't anything.",
        "image" => "images/t3.png",
    ],
    [
        "title" => "Parental Care",
        "description" => "Alteration in some form, by injected humour, or randomised words which don't look even slightly sure there isn't anything.",
        "image" => "images/t4.png",
    ],
];
?>

<section class="treatment_section layout_padding">
  <div class="side_img">
    <img src="<?php echo $treatmentImage; ?>" alt="Treatment Side Image">
  </div>
  <div class="container">
    <div class="heading_container heading_center">
      <h2>
        <?php echo $treatmentTitle; ?>
      </h2>
    </div>
    <div class="row">
      <?php foreach ($treatments as $treatment): ?>
        <div class="col-md-6 col-lg-3">
          <div class="box">
            <div class="img-box">
              <img src="<?php echo $treatment['image']; ?>" alt="<?php echo $treatment['title']; ?>">
            </div>
            <div class="detail-box">
              <h4>
                <?php echo $treatment['title']; ?>
              </h4>
              <p>
                <?php echo $treatment['description']; ?>
              </p>
              <a href="">
                Read More
              </a>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

