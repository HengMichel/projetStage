<?php
include_once "inc/header.php";
require_once "inc/nav.php";
?>

<div class="container">
    <h1 class="pain fw-semibold mt-5 text-center">Notre gamme de pain</h1>

    <div id="carouselExampleFade" class="carousel slide carousel-fade mt-5">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="asset/photos/pains/1699988450733.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="asset/photos/pains/1699988450740.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="asset/photos/pains/1699988450747.jpg" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

</div>
<?php
include_once "inc/footer.php";
?>