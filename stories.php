<!DOCTYPE html>
<html>
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
    <?php include 'partials/connect.php'; ?>
    <?php include 'partials/header.php';?>


    <!--php code-->
    <?php

        $id=$_GET['story_id'];
        $sql="select * from topics where topic_id=$id";
        $result=mysqli_query($con,$sql);
        while($row=mysqli_fetch_assoc($result)){
            $topic_name=$row['topic_name'];
            $topic_desc=$row['topic_description'];
            $topic_image=$row['topic_image'];
        }

    ?>


    <!--Jumbotron-->
    <div class="container-fluid">
        <div class="jumbotron bg-warning rounded pb-5 pt-5" style="padding-left:30px;">
        <div class="container">
            <h1 class="display-4"><?php echo $topic_name;?></h1>
            <p class="lead"><?php echo $topic_desc;?></p>
            <button class="btn btn-dark">
            <a class="text-light" href="#reading" role="button">Continue Reading</a>
            </button>
        </div>
    </div>
    </div>
    <div class="container-fluid slider">
      
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



    <!--Reading-->
    <div class="container" id="reading">
    <div class="jumbotron jumbotron-fluid bg-warning rounded p-0 mb-5" style="padding-left:30px;">
        <div class="container">
            <h1 class="display-4 text-center">Enjoy Reading</h1>
            <img src=<?php echo $topic_image;?> class="img-fluid" alt="this is image">
            <p class="lead pb-3">This is a simple Jumbotron which is used in bootstrap 4.
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Deserunt expedita doloremque ab ea culpa magni praesentium
                unde consequuntur facere iusto blanditiis alias impedit perspiciatis
                recusandae asperiores reprehenderit adipisci corporis voluptatum non voluptas,
                rerum cupiditate atque! Temporibus enim consequatur autem quod voluptatibus quidem
                deserunt iure fuga sequi, fugit eum corporis dicta nam totam praesentium sunt labore
                eligendi, voluptas quia laboriosam. Dolore necessitatibus, eveniet ducimus quia officia,
                nemo nostrum obcaecati quibusdam quas vitae harum non at eos impedit provident reprehenderit
                tempore vero neque voluptate omnis. Officia, ullam ipsa dolore molestiae beatae inventore a
                deleniti incidunt, nulla minus labore autem cupiditate natus quis, recusandae unde? Voluptate,
                velit magni sunt nam possimus iusto, quisquam maiores aut libero nihil molestiae, cumque aliquam
                commodi molestias quod corrupti. Quaerat ad adipisci, necessitatibus quis pariatur consequuntur
                obcaecati asperiores, nemo nobis ipsam nesciunt odio? Placeat voluptatum, libero quis distinctio,
                ratione praesentium architecto iure quidem voluptatem provident expedita repellat quae asperiores
                debitis et! Quam commodi hic, molestias eaque illo rem ratione dolor ad eius dolore id possimus doloribus,
                voluptate minus velit, nulla cum voluptatum consequuntur suscipit quo vero magnam. Soluta, explicabo obcaecati.
                Modi fugiat, vel, labore sit, sapiente optio perspiciatis facilis nobis nihil expedita magni non voluptates veniam
                natus nam?
            </p>
            
        </div>
    </div>
    </div>

    <div class="container-fluid mb-4">
        <h2 class="text-center display-4">Thank You For Your Time &#128512;</h2>
    </div>

    <?php include 'partials/footer.php';?>
    </body>
</html>