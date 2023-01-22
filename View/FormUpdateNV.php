
<HTML>
    <body>
        <form action = 'C_NV.php?IDNV=<?php echo $NV->id;?>' method = 'post'>
        <table width ="100%" boder ="0">
            <tr>
                <td>IDNV</td>
                <td><input type="Text" size ='20' readonly value = '<?php echo $NV->id;?>'></td>
            </tr>
            <tr>
                <td>IDPB</td>
                <td><select name="IDPB">
                            <option selected><?php echo $NV->pb?></option>
                            <?php
                            foreach($PBList as $pb) {
                            ?>
                                <option value="<?php echo $pb->idpb; ?>">
                                    <?php echo $pb->idpb; ?>
                                </option>
                            <?php } ?>
                        </select></td>
            </tr>
            <tr>
                <td>Ho Ten</td>
                <td><input type="text" size ='20' name ='HoTen' value ='<?php echo $NV->name;?>'></td>

            </tr>
            <tr>
                <td>Dia Chi</td>
                <td><input type="text" size="20" name ="DiaChi" value='<?php echo $NV->address;?>'></td>
            </tr>
            <tr align = 'center'>
                <td colspan="2"><input type="Submit" name ="update" value="UPDATE"><input type="Reset" value ="RESET"></td>
            </tr>
        </table>
    </form>
    <br>
    <br>
    <p><a href ="../f3.php">HomePage</a></p>
    </body>
</HTML>