<?php 
echo '<table border = "1" width = "100%">';
echo '<caption>Du lieu bang nhan vien </caption>';
echo '<tr><th>IDNV</th><th>Ho Ten</th><th>IDPB</th><th>Dia Chi</th></tr>';

foreach($NVList as $nv){
            echo '<tr><td>'.$nv->id.'</td><td>'.$nv->name.'</td><td>'.$nv->pb.'</td><td>'.$nv->address.'</td></tr>';
        }
        echo '</table>';
echo '<br><br></t><form><input type="button" value="Back" onclick="history.back()"></form>';
?>