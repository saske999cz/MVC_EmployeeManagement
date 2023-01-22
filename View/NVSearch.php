<HTML>
    <body>
    <p align="center">Tim kiem nhan vien</p>
        <div>
            <div>
                <form align="center" method = "post"action="C_NV.php">
                    <div>
                        <div>
                            <br>
                            <input type="radio" name="search" value="IDPB">
                            <label>IDPB</label>
                        </div>
                        <div>
                            <br>
                            <input type="radio" name="search" value="HoTen">
                            <label>Ho ten</label>
                        </div>
                        <div>
                            <br>
                            <input type="radio" name="search" value="DiaChi">
                            <label>Dia chi</label>
                        </div>
                    </div>
                    <div>
                        <br>
                        <input type="text" name="value" placeholder="Nhap noi dung tim kiem" />
                    </div>
                    <div>
                        <br>
                        <input type="submit" value ="Search"/>
                    </div>
                </form>
            </div>
        </div>
        <br>
        <br>
        <form><input type="button" value="Back" onclick="history.back()"></form>
    </body>
</HTML>