<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sach sinh vien</title>
</head>
<body>
<table border="1" width = "100%">
            <thead>
                <tr>
                    <th>IDNV</th>
                    <th>Ho ten</th>
                    <th>Phong Ban</th>
                    <th>Dia chi</th>
                </tr>
            </thead>
            <?php
    
            foreach($NVreq as $nv) {
                echo '<tr><td>' . $nv->id . '</td><td>' . $nv->name . '</td><td>' . $nv->pb . '</td><td>'. $nv->address . '</td></tr>';
            }
            ?>
        </table>
        <br>
        <form><input type="button" value="Back" onclick="history.back()"></form>
</body>
</html>