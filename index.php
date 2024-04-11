<?php 

include('config.php');
include('ui_masterheader.php');

?>

<!-- section for carousel starts here -->
<div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="500">
      <img src="images/scene1.jpg" class="d-block w-100 h-75" alt="image 1">
    </div>
    <div class="carousel-item" data-bs-interval="500">
      <img src="images/scene2.jpg" class="d-block w-100" alt="image 2">
    </div>
    <div class="carousel-item">
      <img src="images/scene3.jpg" class="d-block w-100" alt="image 3">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<!-- section for carousel starts here -->





<?php 

include('ui_masterfooter.php');

?>