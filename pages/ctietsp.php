<!-- <div class="row mb">
    <div class="boxtrai mr">
        <div class="row mb">
            <?php
            extract($onesp);
            ?>
            <div class="boxtitle"><?= $name ?></div>
            <div class="row boxcontent hi">
                <?php
                $tt = $price;
                $file = $img_path . $image;
                echo '<div class="row mb spct"><img src="' . $file . '" ></div>';
                echo '<li>' . "MA SP:" . $id_sp . '</li>';
                echo '<li>' . "TEN SP:" . $name . '</li>';
                echo '<li>' . "DON GIA:" . number_format($tt, 0, ",", ".") . '$' .  '</li>';
                echo  $mota;
                echo ' <div class="row">
       
                // <form action="index.php?act=addtocart" method="post">
                //   <input type="hidden" name="id_sp" value="' . $id_sp . '">
                //   <input type="hidden" name="name" value="' . $name . '">
                //   <input type="hidden" name="image" value="' . $image . '">
                //   <input type="hidden" name="price" value="' . $price . '">
                //   <input type="submit" value="THEM VAO GIO HANG" name="addtocart" class="gh">
                  
                // </form>
              </div>';
                ?>
            </div>
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script>
            $(document).ready(function() {
                $("#bl").load("pages/comment/binhluanform.php", {
                    id_sp: <?= $id_sp ?>
                });
            });
        </script>
        <div class="row mb" id="bl">
            <div class="boxtitle">BINH LUAN</div>
            <div class="row boxcontent">

            </div>

        </div>
        <div class="row mb">
            <div class="boxtitle">SAN PHAM CUNG LOAI</div>
            <div class="row boxcontent spcl">
                <?php
                foreach ($spcl as $cl) {
                    extract($cl);
                    $linksp = "index.php?action=ctietsp&id_sp=" . $id_sp;
                    echo '<li><a href="' . $linksp . '" id="a">' . $name . '</a></li>';
                }
                ?>
            </div>
        </div>
    </div>
  
</div> -->

<div class="container mt-5">
  <div class="row">
    <?php foreach($onesp as $ct):?>
    <div class="col-md-6">
      <img src="./upload/<?php echo $ct['image']?>" alt="Product Image" class="img-fluid">
    </div>
    <div class="col-md-6">
      <h2><?php echo $ct['name']?></h2>
      <p><strong>Giá:</strong> <?php echo $s['price']?></p>
      <p><strong>Mô tả:</strong> <?php echo $s['mota']?></p>

      <!-- Form Thêm vào Giỏ Hàng -->
      <form class="mb-4">
        
        <button type="submit" class="btn btn-primary">Thêm vào giỏ hàng</button>
      </form>
      <?php endforeach?>

      <!-- Form Bình Luận -->
      <form class="mb-4">
        <h3>Bình Luận</h3>
        <div class="mb-3">
          <label for="commentName" class="form-label">Tên:</label>
          <input type="text" class="form-control" id="commentName" placeholder="Nhập tên của bạn">
        </div>
        <div class="mb-3">
          <label for="commentText" class="form-label">Nội Dung Bình Luận:</label>
          <textarea class="form-control" id="commentText" rows="4" placeholder="Nhập bình luận của bạn"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Gửi Bình Luận</button>
      </form>

      <!-- Form Đặt Lịch -->
      <form class="mb-4">
        <h3>Đặt Lịch</h3>
        <div class="mb-3">
          <label for="appointmentDate" class="form-label">Ngày Đặt:</label>
          <input type="date" class="form-control" id="appointmentDate">
        </div>
        <div class="mb-3">
          <label for="appointmentTime" class="form-label">Thời Gian:</label>
          <input type="time" class="form-control" id="appointmentTime">
        </div>
        <button type="submit" class="btn btn-primary">Đặt Lịch</button>
      </form>

      <!-- Form Sản Phẩm Cùng Loại -->
      <form class="mb-4">
        <h3>Sản Phẩm Cùng Loại</h3>
        <!-- Thêm các trường thông tin sản phẩm cùng loại -->
      </form>
    </div>
  </div>

  <div class="row mt-5">
    <div class="col-md-12">
      <h3>Mô tả chi tiết sản phẩm</h3>
      <p>
        Mô tả chi tiết và thông tin khác về sản phẩm sẽ được hiển thị ở đây. Bạn có thể sử dụng các thẻ HTML thông thường để định dạng văn bản và hình ảnh.
      </p>
    </div>
  </div>
</div>