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
        <div class="carousel-caption d-none d-md-block">
          <h5>First slide label</h5>
          <p>Some representative placeholder content for the first slide.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="./image/sl6.jpg" class="d-block w-100 " height="800px" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Second slide label</h5>
          <p>Some representative placeholder content for the second slide.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="./image/sl4.jpeg" class="d-block w-100 " height="800px" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Third slide label</h5>
          <p>Some representative placeholder content for the third slide.</p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <h2 class="h2">
    <a href="#" title="Dự Án Mới ">
      Mẫu
      <span>Sản Phẩm</span>
    </a>
  </h2>
  <p class="tdduan">Sản Phẩm mới nhất này cho bạn lựa chọn ?</p>
  <div class="card-group">
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
      Dự Án
      <span>Mới Nhất </span>
    </a>
  </h2>
  <p class="tdduan">Dự án mới nhất này có đang ở gần bạn ?</p>
  <!-- <?php
        $i = 0;
        foreach ($spnew as $s) {
          extract($s);
          $tt = $price;
          $hinh = $hinhpath . $image;
          // if (($i == 2) || ($i == 5) || ($i == 8)) {
          //   $mr = "";
          // } else {
          //   $mr = "mr";
          // }

          echo '<div class="card-group ">
        <div class="card">
        <a class="linksp" href="' . $linksp . '">
            <img class="imsp" src="' . $hinh . '" />
      </a>        <div class="card-body">
        <a class="card-title" href="' . $linksp . '">' . $name . ' </a>
        <div class="tien">
        $' . number_format($tt, 0, ",", ".") . '
        </div>
        <p class="card-text" >' . $mota . '</p>
        <a href="#" class="btn btn-primary">lh:0375950260</a>
        </div>

        </div>
       
  //       <div class="row">
       
  //   <form action="index.php?act=addtocart" method="post">
  //   <div class="card-group">
  //   <input type="hidden" name="id_sp" value="' . $id_sp . '">
  //     <input type="hidden" name="name" value="' . $name . '">
  //     <input type="hidden" name="image" value="' . $image . '">
  //     <input type="hidden" name="price" value="' . $price . '">
  //     <input type="hidden" name="mota" value="' . $mota . '">
  //     </div>
    
  //   </form>
  // </div>
  </div>
      </div>';
          $i += 1;
        }
        ?> -->


  <div class="row spham">
    <?php foreach ($spnew as $s) :
      $linksp = "index.php?action=ctietsp&id_sp=" . $id_sp;
    ?>
      <div class="col-3">
        <div class="card hinhsp ">
          <a class="linksp " href="<?php echo $linksp ?>">
            <img src="./upload/<?php echo $s['image'] ?>" class="card-img-top" width="150px" height="250px" alt="...">
          </a>
          <div class="card-body">
            <a class="linksp text-decoration-none" href="<?php echo $linksp ?>">
              <h5 class="card-title"><?php echo $s['name'] ?></h5>
            </a>
            <p class="card-text"><?php echo $s['mota'] ?></p>
            <a href="#" class="btn btn-primary">03375950260</a>
          </div>
        </div>
      </div>
    <?php endforeach ?>
  </div>
  <!-- 
<div class="image-table">
  <div class="image-row">
    <div class="row_cell">
      <div class="image-cell">
        <img src="../image/sp5.webp" alt="Hình ảnh 1">
      </div>
    </div>
    <div class="image-cell">
      <img src="../image/sp4.webp" alt="Hình ảnh 2">
    </div>
    <div class="image-cell">
      <img src="../image/sp2.webp" alt="Hình ảnh 3">
    </div>
  </div>
  <div class="image-row">
    <div class="image-cell">
      <img src="../image/sp1.webp" alt="Hình ảnh 4">
    </div>
    <div class="image-cell">
      <img src="../image/sp3.webp" alt="Hình ảnh 5">
    </div>
    <div class="image-cell">
      <img src="../image/sp4.webp" alt="Hình ảnh 6">
    </div>
  </div>
</div>
   -->
  <div class="tour">
    <div class="img-tour">
      <a href="#"><img src="../image/sl3.jpg" alt=""></a>

    </div>
    <div class="img-tour">
      <a href="#"><img src="../image/sp3.webp" alt=""></a>

    </div>
    <div class="img-tour">
      <a href="#"><img src="../image/sp5.webp" alt=""></a>

    </div>

  </div>

  <div class="row spham">
    <?php foreach ($spnew as $s) :
      $linksp = "index.php?action=ctietsp&id_sp=" . $id_sp;
    ?>
      <div class="col-3">
        <div class="card hinhsp ">
          <a class="linksp " href="<?php echo $linksp ?>">
            <img src="./upload/<?php echo $s['image'] ?>" class="card-img-top" width="150px" height="250px" alt="...">
          </a>
          <div class="card-body">
            <a class="linksp text-decoration-none" href="<?php echo $linksp ?>">
              <h5 class="card-title"><?php echo $s['name'] ?></h5>
            </a>
            <p class="card-text"><?php echo $s['mota'] ?></p>
            <a href="#" class="btn btn-primary">03375950260</a>
          </div>
        </div>
      </div>
    <?php endforeach ?>
  </div>
</main>