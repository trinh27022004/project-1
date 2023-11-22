<h2 class="h2">
    <a href="#" title="Dự Án Mới ">
      Dự Án
      <span>Mới Nhất </span>
    </a>
  </h2>
  <p class="tdduan">Dự án mới nhất này có đang ở gần bạn ?</p>
  


<div class="row">
<?php  foreach ($load_product as $s): 
    // $linksp = "index.php?action=ctietsp&id_sp=" . $id_sp;
  ?>
  <div class="col-3">
  <div class="card ">
  <a class="linksp " href="<?php echo $linksp ?>">
    <img src="./upload/<?php echo $s['image']?>" class="card-img-top" width="150px" height="250px" alt="...">
    </a>
    <div class="card-body">
    <a class="linksp text-decoration-none" href="<?php echo $linksp ?>">
      <h5 class="card-title"><?php echo $s['name']?></h5>
      </a>
      <p class="card-text"><?php echo $s['mota']?></p>
      <a href="#" class="btn btn-primary">0375950260</a>
    </div>
  </div>
  </div>
  <?php endforeach ?>
</div>