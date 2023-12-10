<main>
  <script>
    var myCarousel = document.querySelector('#myCarousel')
    var carousel = new bootstrap.Carousel(myCarousel, {
      interval: 1000,
      wrap: false
    })
  </script>
  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner slide">
      <div class="carousel-item active">
        <img src="./image/sl3.jpg" class="d-block w-100 " height="800px" alt="...">
        <div id="slogan" class="carousel-caption d-none d-md-block">
          <h5>Uy tín tạo thương hiệu</h5>
          <p>Chất lượng- chuyên nghiệp - nhanh chóng.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="./image/sl6.jpg" class="d-block w-100 " height="800px" alt="...">
        <div id="slogan" class="carousel-caption d-none d-md-block">
          <h5>Uy tín tạo thương hiệu</h5>
          <p>Chất lượng - chuyên nghiệp - nhanh chóng.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="./image/sl4.jpeg" class="d-block w-100 " height="800px" alt="...">
        <div id="slogan" class="carousel-caption d-none d-md-block">
          <h5>Uy tín tạo thương hiệu</h5>
          <p>Chất lượng - chuyên nghiệp - nhanh chóng.</p>
        </div>
      </div>
    </div>
    <!-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button> -->
  </div>
  <h2 class="h2">
    <a href="#" title="Dự Án Mới ">
      Sự lựa chọn hàng đầu 
      <span> dành cho Quý Khách Hàng.</span>
    </a>
  </h2>
  <p class="tdduan">Sản Phẩm mới nhất này cho bạn lựa chọn?</p>
  <div id="card-groupsm" class="card-group">
    <div class="card">
      <img src="./image/sp1.webp" alt="">
    </div>
    <div class="card">
      <img src="./image/sp2.webp" alt="">
    </div>
    <div class="card">
      <img src="./image/sp3.webp" alt="">
    </div>
    <div class="card">
      <img src="./image/sp4.webp" alt="">
    </div>
    <div class="card">
      <img src="./image/sp5.webp" alt="">
    </div>
    <div class="card">
      <img src="./image/sp6.webp" alt="">
    </div>
  </div>

  <h2 class="h2">
    <a href="#" title="Dự Án Mới ">
      Mẫu
      <span> nhà mới nhất từ YOURHOUSE </span>
    </a>
  </h2>
  <p class="tdduan">Dự án mới nhất này có đang ở gần bạn ?</p>

  <div class="row spham">
    <?php foreach ($spnew as $s) :
      $linksp = "index.php?action=ctietsp&id_sp=" .$s['id_sp'];

    ?>
      <div class="col-3">
        <div class="card hinhsp ">
          <a class="linksp " href="<?php echo $linksp?>">
            <img src="./upload/<?php echo $s['image'] ?>" class="card-img-top" width="150px" height="250px" alt="...">
          </a>
          <div class="card-body">
            <a class="linksp text-decoration-none" href="<?php echo $linksp ?>">
              <h5 class="card-title"><?php echo $s['name'] ?></h5>
            </a>
            <p class="card-text"><?php echo $s['mota'] ?></p>
      <p class="card-text">Giá: <?php echo $s['price']?></p>

            <a href="<?php echo $linksp ?>" class="btn btn-primary"><p><i class="fas fa-phone"></i> Hotline: 0375950260</p> <p><i class="fas fa-calendar-alt"></i> (Đặt Lịch)</p>  </a>
          </div>
        </div>
      </div>
    <?php endforeach ?>
  </div>
 
  <div class="bannerqc">
  <img src="../image/bannerbatdongsan023.jpg" width="100%" height="30%" alt="">
  </div>

  <div class="row spham">
    <?php foreach ($spnew as $s) :
      $linksp = "index.php?action=ctietsp&id_sp=" .$s['id_sp'];

    ?>
      <div class="col-3">
        <div class="card hinhsp ">
          <a class="linksp " href="<?php echo $linksp?>">
            <img src="./upload/<?php echo $s['image'] ?>" class="card-img-top" width="150px" height="250px" alt="...">
          </a>
          <div class="card-body">
            <a class="linksp text-decoration-none" href="<?php echo $linksp ?>">
              <h5 class="card-title"><?php echo $s['name'] ?></h5>
            </a>
            <p class="card-text"><?php echo $s['mota'] ?></p>
      <p class="card-text">Giá: <?php echo $s['price']?></p>

            <a href="<?php echo $linksp ?>" class="btn btn-primary"><p><i class="fas fa-phone"></i> Hotline: 0375950260</p> <p><i class="fas fa-calendar-alt"></i> (Đặt Lịch)</p>  </a>
          </div>
        </div>
      </div>
    <?php endforeach ?>
  </div>
 
  <h2 class="h2">
    <a href="#" title="Dự Án Mới ">
      Villa 
      <span> cao cấp  </span>
    </a>
  </h2>
  <p class="tdduan">Dự án mới nhất này có đang ở gần bạn ?</p>
  <div class="tour">
    <div class="img-tour">
      <a href="#"><img src="../image/villa1.jpg" alt=""></a>

    </div>
    <div class="img-tour">
      <a href="#"><img src="../image/sp3.webp" alt=""></a>

    </div>
    <div class="img-tour">
      <a href="#"><img src="../image/sp5.webp" alt=""></a>

    </div>

  </div>
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3833.8562115876744!2d108.17188957586232!3d16.07294963933701!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314218e3918b461d%3A0x21027ebeefac9896!2zMTIzIEzDvSBUaMOhaSBUw7RuZywgVGhhbmggS2jDqiBUw6J5LCBMacOqbiBDaGnhu4N1LCDEkMOgIE7hurVuZywgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1702197521262!5m2!1svi!2s" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  
</main>