<h2 class="h2">
    <a href="#" title="Dự Án Mới ">
      Dự Án
      <span>Mới Nhất </span>
    </a>
  </h2>
  <p class="tdduan">Dự án mới nhất này có đang ở gần bạn ?</p>
  


<div class="row spham">
<?php  foreach ($load_product as $s): 

     $linksp = "index.php?action=ctietsp&id_sp=" . $s['id_sp'];
  ?>
  <div class="col-3">
  <div class="card hinhsp">
  <a class="linksp " href="<?php echo $linksp ?>">
    <img src="./upload/<?php echo $s['image']?>" class="card-img-top" width="150px" height="250px" alt="...">
    </a>
    <div class="card-body">
    <a class="linksp text-decoration-none" href="<?php echo $linksp ?>">
      <h5 class="card-title"><?php echo $s['name']?></h5>
      </a>
      <p class="card-text"><?php echo $s['mota']?></p>
      <p class="card-text">Giá: <?php echo $s['price']?></p>

      <a href="<?php echo $linksp ?>" class="btn btn-primary"><p><i class="fas fa-phone"></i> Hotline: 0375950260</p> <p><i class="fas fa-calendar-alt"></i> (Đặt Lịch)</p>  </p> </a>
    </div>
  </div>
  </div>
  <?php endforeach ?>
</div>