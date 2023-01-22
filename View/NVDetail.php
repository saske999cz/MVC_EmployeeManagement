<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thong tin chi tiet nhan vien</title>
</head>
<body>
    <h2>Chi tiet nhan vien</h2>
    <?php 
    echo "<p>IDNV: <b>" .$nv->id ."</b></p>";
    echo "<p>Ho Ten: " .$nv->name ."</p>";
    echo "<p>Phong Ban: " .$nv->pb ."</p>";
    echo "<p>Dia Chi: " .$nv->address ."</p><br>";
     ?>
    <br>
    <p><a href ="javascript:history.back()">Back</a></p>
    <br>
    <br>
    <p><a href ="../f3.php">HomePage</a></p>
</body>
</html>