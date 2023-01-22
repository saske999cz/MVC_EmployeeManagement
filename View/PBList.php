<?php 
echo '<table border = "1" width = "100%"';
echo '<caption>Du lieu bang phong ban</caption>';
echo '<tr><th>IDPB</th><th>Ten Phong Ban</th><th>Mo Ta</th><th>Thong tin nhan vien</th></tr>';
foreach($PBList as $pb){
    echo '<tr><td>'.$pb->idpb.'</td><td>'.$pb->name.'</td><td>'.$pb->mota.'</td><td><a href ="?IDPhongBan='.$pb->idpb.'">xxx</a></td></tr>';

}
echo '</table>';
echo '<br><br></t><form><input type="button" value="Back" onclick="history.back()">';
?>