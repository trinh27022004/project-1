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
                    maxlength: 10
                },
                "password": {
                    required: true,
                    minlength: 3
                },
                "re-password": {
                    equalTo: "#password",
                    minlength: 3

                },
                "hoten": {
                    required: true,
                    minlength: 5
                },
                "email": {
                    required: true,
                    email: true
                },
                "address": {
                    required: true,
                },
                "tel": {
                    required: true,
                }
            },
            messages: {
                "username": {
                    required: "Bắt buộc nhập tài khoản",
                    maxlength: "Hãy nhập tối đa 10 ký tự"
                },
                "password": {
                    required: "Bắt buộc nhập mật khẩu",
                    minlength: "Hãy nhập ít nhất 3 ký tự"
                },
                "re-password": {
                    equalTo: " Mật khẩu không trùng khớp ",
                    minlength: "Hãy nhập ít nhất 3 ký tự"
                },
                "hoten": {
                    required: "Bắt buộc nhập họ và tên",
                    maxlength: "Hãy nhập ít nhất 5 ký tự"
                },
                "email": {
                    required: "Bắt buộc nhập email",
                    email: "Hãy nhập dúng định dạng email"
                },
                "address": {
                    required: "Bắt buộc nhập địa chỉ",
                },
                "tel": {
                    required: "Bắt buộc nhập SĐT",
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
<div class="row">
    <div class="row formtitle">
        <h1>THÊM TÀI KHOẢN</h1>
    </div>
    <div class=" row formct">
        <div style="color: red;">
            <?php
            if (isset($tbao) && $tbao != "")
                echo $tbao;
            ?>
        </div>

        <form action="index.php?action=add_user" method="post" enctype="multipart/form-data" id="demoForm">

            <div class=" row mb10">
                <p>TÊN ĐĂNG NHẬP <br>
                    <input type="text" name="username" />
                </p>
            </div>
            <div class="row mb10">
                <p> MẬT KHẨU <br>
                    <input type="text" name="password" id="password" />
                </p>
            </div>
            <div class="row mb10">
                <p> XÁC NHẬN MẬT KHẨU <br>
                    <input type="text" name="re-password" />
                </p>
            </div>
            <div class="row mb10">
                <p>HỌ VÀ TÊN <br>
                    <input type="text" name="hoten" />
                </p>
            </div>
            <div class="row mb10">
                <p>HÌNH<br>
                    <input type="file" name="hinh" />
                </p>
            </div>
            <div class=" row mb10">
                <p class="mhh"> EMAIL <br>
                    <input type="text" name="email" width="100px" />
                </p>
            </div>
            <div class=" row mb10">
                <p class="mhh"> ĐỊA CHỈ <br>
                    <input type="text" name="address" width="100px" />
                </p>
            </div>
            <div class="row mb10">
                <p> SĐT <br>
                    <input type="text" name="tel" />
                </p>
            </div>

            <!-- <div class="mb10">
                 <p>NGAY NHAP <br>
                     <input type="text" name="date" id="">
                 </p>
             </div> -->

            <input type="submit" value="THÊM" name="them">

            <input type="submit" value="NHẬP LẠI" name="nl">
            <a href="index.php?action=load_user">
                <input class="btn" type="button" value="DANH SÁCH">
            </a>
            <br>
        </form>
    </div>

    <br>

</div>
</div>