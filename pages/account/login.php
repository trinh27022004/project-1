
<h2 class="tbao">
                <?php
                if (isset($tbao) && ($tbao) != "") {
                    echo $tbao;
                }
                ?>
            </h2>
  <div class="loginfm">

<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js" type="text/javascript"></script>
<script>
  $().ready(function() {
    $("#demoForm").validate({
      onfocusout: false,
      onkeyup: false,
      onclick: false,
      rules: {
        "username": {
          required: true,
        },
        "password": {
          required: true,
        }

      },
      messages: {
        "username": {
          required: "Bắt buộc nhập username",
        },
        "password": {
          required: "Bắt buộc nhập password",
        }
      }
    });
  });
</script>
<style>
  label.error {
    color: red;
  }
</style>

<div class="row mb loginform">
  <div class="boxcontent formtk">
    <?php

    if (isset($_SESSION['user'])) {
      extract($_SESSION['user']);
    ?>
    <div id="demoForm">
      <div class="row mb10 xc ">
        XIN CHAO <br />
        <?= $username ?>
      </div>
      <div class="row hinh mb10">
        <?php
        $hinhpath = "./upload/" . $hinh;
        if (is_file($hinhpath)) {
          $hinh = "<img src='" . $hinhpath . "' height='70' width='70'>";
        } else {
          $hinh = "No photo";
        }
        ?>
        <?= $hinh ?>
      </div>
      <div class="row mb10 tinhnangt">
        <li><a href="index.php?action=quenmk">Quên mật khẩu</a></li>
        <li><a href="index.php?action=edit_taikhoan">Cập nhập tài khoản </a></li>
        <?php if ($role == 2) { ?>
          <li><a href="../../admin/index.php">Đăng nhập admin</a></li>
        <?php } ?>
        <li><a href="index.php?action=thoat">Thoát</a></li>
      </div>
      </div>
    <?php
    } else {


    ?>
  
      <form action="index.php?action=dangnhap" method="post" id="demoForm">
  <div class="boxtitle">Đăng Nhập</div>

        <div class="row mb10">
          Tên Đăng Nhập <br />
          <input type="text" name="username" id="" />
        </div>
        <div class="row mb10">
          Password <br />
          <input type="password" name="password" id="" />
        </div>

        <div class="mb10" >
          <input type="checkbox"  name="ghinho" id="" /> Ghi nhớ tài khoản?
        </div>

        <div class="row mb10">
          <input class="smf" name="dangnhap" type="submit" value="Đăng Nhập" />
        </div>
        
      <div class="tinhnangt" ><a href="index.php?action=quenmk">Quên mật khẩu</a>
      <a href="index.php?action=dky">Đăng ký thành viên ?</a></div>
      </form>
  
    <?php  } ?>
  </div>
</div>
</div>