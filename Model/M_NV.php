<?php
include_once("../Model/E_NV.php");
class Model_NV
{
    public function __construct()
    {
    }
    public function getAllNV()
    {
        $link = mysqli_connect('localhost', 'root', '') or die('Could not connect: ' . mysqli_error($link));
        mysqli_select_db($link, 'DULIEU');
        $rs = mysqli_query($link, "SELECT * FROM nhanvien");
        $i = 0;
        while ($row = mysqli_fetch_array($rs)) {
            $id = $row['IDNV'];
            $name = $row['HoTen'];
            $pb = $row['IDPB'];
            $address = $row['DiaChi'];
            while($i!=$id) $i++;
            $nhanvien[$i++] = new Entity_NV($id, $name, $pb, $address);}
            return $nhanvien;

        }
    public function getNVDetail($id){
        $allNV = $this->getAllNV();
        return $allNV[$id];
    }

    public function addNV($ID, $Name, $PB, $Address){
        $link = mysqli_connect('localhost', 'root', '') or die('Could not connect: ' . mysqli_error($link));
        mysqli_select_db($link, 'DULIEU');
        $rs = mysqli_query($link, "INSERT INTO nhanvien (IDNV, HoTen, IDPB, DiaChi)
        VALUES ('$ID','$Name','$PB','$Address')");
        
    }

    public function deleteNV($id){
        $link = mysqli_connect('localhost', 'root', '') or die('Could not connect: '.mysqli_error($link));
        $db_selected = mysqli_select_db($link,'DULIEU');
        $rs = mysqli_query($link, "SELECT IDNV FROM nhanvien");
        while($row = mysqli_fetch_array($rs,MYSQLI_BOTH)){
        $rs1 = mysqli_query($link, "DELETE FROM nhanvien WHERE IDNV = '$id'");
        }
    }

    public function searchNV($search){
            $link = mysqli_connect("localhost", "root", "") or die('Could not connect: '.mysqli_error($link));
            mysqli_select_db($link, "DULIEU");
            if ($search == "") {
                header("Location:NVSearch.php");
            }
            if ($search == "IDPB") {
                $value = $_REQUEST['value'];
                $rs = mysqli_query($link, "SELECT * FROM nhanvien where IDPB = '$value'");
                $i = 0;
            while ($row = mysqli_fetch_array($rs)) {
            $id = $row['IDNV'];
            $name = $row['HoTen'];
            $PB = $row['IDPB'];
            $Address = $row['DiaChi'];
            while($i!=$id) $i++;
            $nhanvien[$i++] = new Entity_NV($id, $name, $PB, $Address);}
            return $nhanvien;
            }
            if ($search == "HoTen") {
                $value = $_REQUEST['value'];
                $rs = mysqli_query($link, "SELECT * FROM nhanvien where HoTen like '%$value%'");
                $i = 0;
            while ($row = mysqli_fetch_array($rs)) {
            $id = $row['IDNV'];
            $name = $row['HoTen'];
            $PB = $row['IDPB'];
            $Address = $row['DiaChi'];
            while($i!=$id) $i++;
            $nhanvien[$i++] = new Entity_NV($id, $name, $PB, $Address);}
            return $nhanvien;
            }
            if ($search == "DiaChi") {
                $value = $_REQUEST['value'];
                $rs = mysqli_query($link, "SELECT * FROM nhanvien where DiaChi like '%$value%'");
                $i = 0;
            while ($row = mysqli_fetch_array($rs)) {
            $id = $row['IDNV'];
            $name = $row['HoTen'];
            $PB = $row['IDPB'];
            $Address = $row['DiaChi'];
            while($i!=$id) $i++;
            $nhanvien[$i++] = new Entity_NV($id, $name, $PB, $Address);}
            return $nhanvien;
            }
           
            
    }

    public function updateNV($id){
        $Find = $this->getNVDetail($id);
        $name = $_REQUEST['HoTen'];
        $pb = $_REQUEST['IDPB'];
        $address = $_REQUEST['DiaChi'];
        $link = mysqli_connect('localhost', 'root', '') or die('Could not connect: '.mysqli_error($link));
        $db_selected = mysqli_select_db($link,'DULIEU');
        $rs = mysqli_query($link, "UPDATE nhanvien SET IDPB ='$pb', HoTen = '$name', DiaChi ='$address' WHERE IDNV ='$id'");
        
    }

    public function getNVPB($pb){
        $link = mysqli_connect('localhost', 'root', '') or die('Could not connect: ' . mysqli_error($link));
        mysqli_select_db($link, 'DULIEU');
        $rs = mysqli_query($link, "SELECT * FROM nhanvien WHERE IDPB = '$pb'");
        $i = 0;
        while ($row = mysqli_fetch_array($rs)) {
            $id = $row['IDNV'];
            $name = $row['HoTen'];
            $pb = $row['IDPB'];
            $address = $row['DiaChi'];
            while($i!=$id) $i++;
            $nhanvien[$i++] = new Entity_NV($id, $name, $pb, $address);}
            return $nhanvien;
    }


    }

?>