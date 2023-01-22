<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
        <h4 align="center">Them nhan vien</h4>
                <form align="center" action="C_NV.php" method="post">
                    
                        <input type="number"  name="IDNV" placeholder="Nhap ID" />
                        <br>
                        <br>
                        <input type="text"  name="HoTen" placeholder="Nhap ho ten" />
                        <br>
                        <br>
                        <select class="form-select mb-3" name="IDPB">
                            <option selected>Chon IDPB</option>
                            <?php
                            foreach($PBList as $pb) {
                            ?>
                                <option value="<?php echo $pb->idpb; ?>">
                                    <?php echo $pb->idpb; ?>
                                </option>
                            <?php } ?>
                        </select>
                        <br>
                        <br>
                        <input type="text"  name="DiaChi" placeholder="Nhap dia chi" />
                        <br>
                        <br>
                        <input type="submit" name ="add" value="Thêm" onclick="myFunction()"/>
                        
                </form>
                <p><a href ="../f3.php">HomePage</a></p>
                <script>
function myFunction() {
  alert("Thêm nhân viên thành công");
}
</script>
</body>

</html>