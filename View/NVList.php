<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sach sinh vien</title>
</head>
<body>
    <h2>Danh sach nhan vien</h2>
    <?php 
    $i = 1;
    foreach($NVList as $nv)
    {
        echo "<p>" .$i++ .". <a href = '?id=" .$nv->id ."'>" .$nv->name ."</a></p>";


    } ?>
    <br>
    <input type="button" value="Back" onclick="history.back()">
</body>
</html>