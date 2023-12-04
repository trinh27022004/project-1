
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
                    }
                },
                messages: {
                    "username": {
                        required: "Bắt buộc nhập username",
                        maxlength: "Hãy nhập tối đa 10 ký tự"
                    },
                    "password": {
                        required: "Bắt buộc nhập password",
                        minlength: "Hãy nhập ít nhất 3 ký tự"
                    },
                    "re-password": {
                        equalTo: "Hai password phải giống nhau",
                        minlength: "Hãy nhập ít nhất 3 ký tự"
                    },
                    "hoten": {
                        required: "Bắt buộc nhập ho ten",
                        maxlength: "Hãy nhập ít nhất 5 ký tự"
                    },
                    "email": {
                        required: "Bắt buộc nhập email",
                        email: "Hãy nhập dúng định dạng email"
                    },
                    "address": {
                        required: "Bắt buộc nhập address",
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
    <div class="row mb">
        <div class="boxtrai mr">
            <div class="row mb">

                <div class="row boxcontent formdky">
                    <form action="index.php?action=dky" method="post" enctype="multipart/form-data" id="demoForm">
                        <div class="boxtitle">ĐĂNG KÝ THÀNH VIÊN</div>

                        <p>
                            <label for=""> UserName:</label><br />
                            <input class="dkf" type="text" name="username" id="">
                        </p>
                        <p>
                            <label for="">password:</label><br />
                            <input class="dkf" type="password" name="password" id="password">
                        </p>
                        <p>
                            <label for="">Re-password: </label><br />
                            <input class="dkf" type="password" name="re-password">

                        </p>
                        <p>
                            <label for="">Họ & Tên:</label><br />
                            <input class="dkf" type="text" name="hoten" id="">
                        </p>

                        Hình Ảnh :<input type="file" name="hinh" id="">
                        <p>
                            <label for="">Email: </label><br />
                            <input class="dkf" type="email" name="email" id="">
                        </p>
                        <p>
                            <label for="">Địa Chỉ:</label><br />
                            <input class="dkf" type="text" name="address" id="">
                        </p>

                        <p>
                            <label for=""> Số Điện Thoại:</label><br />
                            <input class="dkf" type="text" name="tel" id="">
                        </p>

                        <div>
                            <?php
                            if (isset($tbao) && ($tbao) != "") {
                                echo '<script>var tbao = "' . $tbao . '";</script>';
                            }
                            ?>
                            <input class="smf" type="submit" value="Đăng Ký" name="dangky">
                            <input class="smf" type="reset" value="Nhập lại ">
                        </div>
                    </form>
                </div>

            </div>


        </div>

    </div>
</div>