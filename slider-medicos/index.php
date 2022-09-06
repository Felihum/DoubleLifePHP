<!DOCTYPE html>
<!-- === Coding by CodingLab | www.codinglabweb.com === -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- ===== Link Swiper's CSS ===== -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>

    <!-- ===== Fontawesome CDN Link ===== -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"/>
        
    <!-- ===== CSS ===== -->
    <link rel="stylesheet" href="style.css">
    
    <title>Card with Sliding Feature</title>
</head>
<body>

  <section>
        <div class='swiper mySwiper container'>
        <div class='swiper-wrapper content'>
    <?php
        require "conexaoteste.php";
        
        $sql = "SELECT * FROM medico";
        
        $result = $conn->query($sql);
        
        $i = 1;
        while($row = $result->fetch_assoc()){
            echo "<div class='swiper-slide card'>
          <div class='card-content'>
            <div class='image'>
              <img src='images/img". $i .".jpg' alt=''>
            </div>

            <div class='media-icons'>
              <i class='fab fa-facebook'></i>
              <i class='fab fa-twitter'></i>
              <i class='fab fa-github'></i>
            </div>

            <div class='name-profession'>
              <span class='name'>". $row['nome'] ."</span>
              <span class='profession'>Web Developer</span>
            </div>

            <div class='rating'>
              <i class='fas fa-star'></i>
              <i class='fas fa-star'></i>
              <i class='fas fa-star'></i>
              <i class='far fa-star'></i>
              <i class='far fa-star'></i>
            </div>

            <div class='button'>
              <button class='aboutMe'>About Me</button>
              <button class='hireMe'>Hire Me</button>
            </div>
          </div>
        </div>";
        
        $i++;
        }
    ?>
        </div>        
    </div>
    <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-pagination"></div>
  </section>

  <!-- Swiper JS -->
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper(".mySwiper", {
      slidesPerView: 3,
      spaceBetween: 30,
      slidesPerGroup: 3,
      loop: true,
      loopFillGroupWithBlank: true,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });
  </script>

</body>
</html>