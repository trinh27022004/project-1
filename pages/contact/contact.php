<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Liên Hệ</title>
  <!-- Link đến Bootstrap CSS -->
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"> -->
  <!-- Link đến Font Awesome CSS -->
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"> -->
  <style>
    /* Thêm các kiểu CSS tùy chỉnh của bạn ở đây */
    body {
      font-family: 'Arial', sans-serif;
      background-color: #f8f9fa;
    }

    .contact-info {
      padding: 20px;
      background-color: #fff;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .contact-image {
      border-radius: 5px;
      overflow: hidden;
    }

    .contact-image img {
      width: 100%;
      height: auto;
    }

    .company-info {
      margin-top: 20px;
    }

    .company-info i {
      margin-right: 10px;
    }

    .contact-buttons {
      margin-top: 20px;
    }

    .btn-call,
    .btn-message {
      width: 150px;
      margin-right: 10px;
    }

  </style>
</head>
<body>



  <div class="container mt-5">
    <div class="row">
      <!-- Bên thông tin mô tả về trang bất động sản -->
      <div class="col-md-6">
        <div class="contact-info">
          <h2>Thông Tin Liên Hệ</h2>
          <p>
            Mô tả về trang bất động sản và thông tin liên hệ có thể được đặt ở đây.
            Bạn có thể thêm các đoạn văn bản, liên kết, hoặc thông tin liên hệ khác tùy ý.
          </p>
          <!-- Thêm thông tin công ty với icon -->
          <div class="company-info">
            <p><i class="fas fa-map-marker-alt"></i> Địa chỉ công ty:123 Lý Thái Tông, Hòa Minh, Liên Chiểu, Đà Nẵng</p>
            <p><i class="fas fa-phone"></i>Điện thoại:<a href="">  0375950260</a></p>
            <p><i class="fas fa-envelope"></i>  Email:<a href="email:trinhhcpd09141@fpt.edu.vn"> trinhhcpd09141@fpt.edu.vn</a></p>
          </div>
          <!-- Thêm các nút gọi và nhắn tin -->
          <div class="contact-buttons">
            <a href="tel:0375950260" class="btn btn-primary btn-call"><i class="fas fa-phone"></i> Gọi</a>
            <a href="sms:0375950260" class="btn btn-secondary btn-message"><i class="fas fa-comment"></i> Nhắn tin</a>
          </div>
        </div>
      </div>

      <!-- Bên hình ảnh -->
      <div class="col-md-6">
        <div class="contact-image">
          <img src="../../image/Dich-vu-tong-dai-goi-tu-dong-870x520 (1).jpg"  alt="Hình ảnh liên quan">
        </div>
      </div>
    </div>
  </div>
  <br>
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3833.8562115876744!2d108.17188957586232!3d16.07294963933701!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314218e3918b461d%3A0x21027ebeefac9896!2zMTIzIEzDvSBUaMOhaSBUw7RuZywgVGhhbmggS2jDqiBUw6J5LCBMacOqbiBDaGnhu4N1LCDEkMOgIE7hurVuZywgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1702197521262!5m2!1svi!2s" width="100%" height="550px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  <!-- Link đến Bootstrap JS và Popper.js (cần thiết cho một số tính năng của Bootstrap) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
