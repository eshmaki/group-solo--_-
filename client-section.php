<!-- Client Testimonials -->
<?php

$testimonials = [
    [
        "name" => "Morijorch",
        "role" => "Default model text",
        "quote" => "Editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.",
        "image" => "images/client1.jpg" 
    ],
    [
        "name" => "Rochak",
        "role" => "Default model text",
        "quote" => "Various editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.",
        "image" => "images/client2.jpg"
    ],
    [
        "name" => "Brad Johns",
        "role" => "Default model text",
        "quote" => "Various editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.",
        "image" => "images/client3.jpg"
    ]
];
?>

<section class="client_section layout_padding">
  <div class="container">
    <div class="heading_container">
      <h2>
        <span>Testimonial</span>
      </h2>
    </div>
  </div>
  <div class="container px-0">
    <div id="customCarousel2" class="carousel carousel-fade" data-ride="carousel">
      <div class="carousel-inner">
        <?php foreach ($testimonials as $index => $testimonial): ?>
          <div class="carousel-item <?php echo $index === 0 ? 'active' : ''; ?>">
            <div class="box">
              <div class="client_info">
                <div class="client_name">
                  <h5><?php echo $testimonial['name']; ?></h5>
                  <h6><?php echo $testimonial['role']; ?></h6>
                </div>
                <i class="fa fa-quote-left" aria-hidden="true"></i>
              </div>
              <p><?php echo $testimonial['quote']; ?></p>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
      <div class="carousel_btn-box">
        <a class="carousel-control-prev" href="#customCarousel2" role="button" data-slide="prev">
          <i class="fa fa-angle-left" aria-hidden="true"></i>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#customCarousel2" role="button" data-slide="next">
          <i class="fa fa-angle-right" aria-hidden="true"></i>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
  </div>
</section>

