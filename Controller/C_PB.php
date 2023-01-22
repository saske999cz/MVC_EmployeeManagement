<?php
include_once("../Model/M_NV.php");
include_once("../Model/M_PB.php");
class Ctrl_phongban
{
    public function invoke()
    {
        
         if (isset($_GET['IDPhongBan'])) {
            $modelNV = new Model_NV();
            $NVList = $modelNV->getNVPB($_GET['IDPhongBan']);
            include_once("../View/NVPB.php");
        } else {
            $modelPB = new Model_PB();
            $PBList = $modelPB->getAllPB();
            include_once("../View/PBList.php");
        }
    }
};
$C_PhongBan = new Ctrl_phongban();
$C_PhongBan->invoke();
?>
