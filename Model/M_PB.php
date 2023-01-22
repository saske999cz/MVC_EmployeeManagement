<?php
include_once("../Model/E_PB.php");
class Model_PB
{
    public function __construct()
    {
    }
    public function getAllPB()
    {
        $link = mysqli_connect('localhost', 'root', '') or die('Could not connect: ' . mysqli_error($link));
        mysqli_select_db($link, 'DULIEU');
        $rs = mysqli_query($link, "SELECT * FROM phongban");
        $i = 0;
        while ($row = mysqli_fetch_array($rs)) {
            $idpb = $row['IDPB'];
            $name = $row['TenPhongBan'];
            $mota = $row['MoTa'];
            while($i!=(int)trim($idpb,"PB0")) $i++;
            $phongban[$i++] = new Entity_PB($idpb, $name, $mota);}
            return $phongban;

        }
    public function getPBDetail($id){
        $allPB = $this->getAllPB();
        return $allPB[$id];
    }
}
?>