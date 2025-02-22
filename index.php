<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Stories Website</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">

    <!--font awesone-->  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>
  <body>

  <?php 
      include 'partials/connect.php';
      ?>


    <!--<h1 class="text-center">Hello, world!</h1>-->
    <div class="container-fluid slider">
      <?php 
      include 'partials/header.php';
      ?>
        <div id="carouselExampleIndicators" class="carousel slide">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="images/img11.jpg" class="d-block w-100" alt="First Slide">
              </div>
              <div class="carousel-item">
                <img src="images/img10.jpg" class="d-block w-100" alt="Second Slide">
              </div>
              <div class="carousel-item">
                <img src="images/img3.jpg" class="d-block w-100" alt="Third Slide">
              </div>
            </div>
          </div>
    </div>

    <!--cards-->
    <div class="container">
      <h1 class="text-center featureTitle mb-5">
        Featured Stories
      </h1>
      <div class="row">


      <?php
      
      $sql="select * from `topics`";
      $result=mysqli_query($con,$sql);
      if($result){
        while($row=mysqli_fetch_assoc($result)){
          $id= $row['topic_id'];
          $topic_img= $row['topic_image'];
          $topic_name= $row['topic_name'];
          $topic_desc= $row['topic_description'];
          echo '<div class="col-md-4 col-sm-6 mb-5">
          <div class="card" style="width: 18rem;">
            <img src='.$topic_img.' class="card-img-top" alt="first image">
            <div class="card-body">
              <h5 class="card-title">'.$topic_name.'</h5>
              <p class="card-text">'.substr($topic_desc,0,20).'.......</p>
              <a href="stories.php?story_id='.$id.'" class="btn btn-primary">Continue Reading</a>
            </div>
          </div>
        </div>';
        }
      }
      
      
      ?>


      </div>
    </div>

    <?php 
      include 'partials/footer.php';
      ?>
  </body>
</html>