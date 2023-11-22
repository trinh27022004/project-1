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
                "email": {
                    required: true,
                    email: true
                }

            },
            messages: {

                "email": {
                    required: "Bắt buộc nhập email",
                    email: "Hãy nhập dúng định dạng email"
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
                <form action="index.php?action=quenmk" method="post" id="demoForm">
            <div class="boxtitle">Quên Mật Khẩu</div>
                    <p>
                        <label for="">Email:</label><br />
                        <input type="email" class="dkf" name="email" id="">
                    </p>

                    <input class="smf qpas" type="submit" value="Gửi" name="guiemail">
                    <input class="smf qpas" type="reset" value="Nhập lại">
                </form>
            </div>
           
        </div>


    </div>
  
</div>
</div>