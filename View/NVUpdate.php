<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sach sinh vien</title>
</head>
<body>
    <Form action ="C_NV.php" method ="post">
        <table border = "1" width = "100%">
        <caption>Du lieu bang Nhan Vien</caption> 
        <TR><TH>IDNV</TH><TH>Ho Ten</TH><TH>IDPB</TH><TH>Dia Chi</TH><TH>Cap Nhat</TH></TR>
    <?php 
   
    foreach($NVList as $nv)
    {
        echo '<tr><td>'.$nv->id.'</td><td>'.$nv->name.'</td><td>'.$nv->pb.'</td><td>'.$nv->address.'</td><td><a href = ?idnv='. $nv->id .'>xxx</a></td></tr>';


    } ?>
    </table>
    </form>
    <br>
    <p><a href ="../f3.php">HomePage</a></p>
</body>
</html>






