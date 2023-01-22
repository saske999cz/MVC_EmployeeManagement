<?php 
echo '<form method ="post" action ="C_NV.php">';
echo '<table border ="1" width = "100%">';
echo '<caption>Du lieu bang nhan vien</caption>';
echo '<TR><TH>Ma Nhan Vien</TH><TH>Ten Nhan Vien</TH><TH>Phong Ban</TH><TH>Dia Chi</TH></TR>';
foreach($NVList as $nv){
    echo '<tr><td>'.$nv->id.'</td><td>'.$nv->name.'</td><td>'.$nv->pb.'</td><td>'.$nv->address.'</td><td><input type ="CHECKBOX"
    name = "'.$nv->id.'" value ="'.$nv->id.'"></td></tr>';
}
echo '<tr><td align ="right" colspan ="4"><input type ="submit" value ="Xoa cac nhan vien" name ="delete"></td></tr>';
echo '</table>';
echo '</form>';
echo '<p><a href ="../f3.php">HomePage</a></p>';
?>
