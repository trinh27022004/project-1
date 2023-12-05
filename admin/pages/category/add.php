<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js" type="text/javascript"></script> -->
<script>
    $().ready(function() {
        $("#demoForm").validate({
            onfocusout: false,
            onkeyup: false,
            onclick: false,
            rules: {
                "nameloai": {
                    required: true,
                    nameloai:true
                }

            },
            messages: {

                "nameloai": {
                    required: "Bắt buộc nhập tên danh mục ",
                    nameloai: "Không được trùng tên danh mục đã có"
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
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<div class="row">
  <div class="row formtitle">
    <h1>QUẢN LÝ DANH MỤC</h1>
  </div>
  <div class="row formct">
    <form action="index.php?action=add_category" method="post" id="demoForm">
      <div class="row mb10">
        Mã loại <br />
        <input type="text" name="idloai" disabled placeholder="auto number" />
      </div>
      <div class="row mb10">
        Tên loại <br />
        <input type="text" name="nameloai" />
      </div>

      <input type="submit" value="THÊM" name="them">

      <input type="submit" value="NHẬP LẠI" name="nl">
      <a href="index.php?action=load_category">
        <input class="btn" type="button" value="DANH SÁCH">
      </a>
      <br>
    </form>

  </div>
</div>
</div>
</body>
</html>
