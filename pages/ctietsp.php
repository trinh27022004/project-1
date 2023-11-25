

<div class="container mt-5">
  <div class="row">
    <div class="col-md-6">
      <img src="./upload/<?php echo $onesp['image']?>" alt="Product Image" class="img-fluid">
    </div>
    <div class="col-md-6">
      <h2><?php echo $onesp['name']?></h2>
      <p><strong>Giá:</strong> <?php echo $onesp['price']?></p>
      <p><strong>Mô tả:</strong> <?php echo $onesp['mota']?></p>

      <!-- Form Thêm vào Giỏ Hàng -->
      <form class="mb-4">
        
        <button type="submit" class="btn btn-primary">Thêm vào giỏ hàng</button>
      </form>

      <!-- Form Bình Luận -->
      <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script>
            $(document).ready(function() {
                $("#bl").load("pages/comment/binhluanform.php", {
                    id_sp: <?= $id_sp ?>
                });
            });
        </script> -->
        <iframe src="../pages/comment/binhluanform.php?id_sp=<?= $id_sp ?>" width="100%" height="300px" frameborder="0"></iframe>
      <div class="row mb" id="bl">
            <div class="boxtitle">BINH LUAN</div>
            <div class="row boxcontent">

            </div>

        </div>
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