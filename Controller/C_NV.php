<?php
include_once("../Model/M_NV.php");
include_once("../Model/M_PB.php");
class Ctrl_nhanvien
{
    public function invoke()
    {
        if (isset($_GET['mod1'])) {
            $modelNV = new Model_NV();
            $modelPB = new Model_PB();
            $PBList = $modelPB->getAllPB();
            include_once("../View/NVAdd.php");
        } else if (isset($_POST['add'])) {
            $modelNV = new Model_NV();
            $ID = $_REQUEST['IDNV'];
            $Name = $_REQUEST['HoTen'];
            $PB = $_REQUEST['IDPB'];
            $Address = $_REQUEST['DiaChi'];
            $modelNV->addNV($ID, $Name, $PB, $Address);
            include_once("../View/NVAdd.php");
            
        } else if(isset($_GET['mod2'])){
            $modelNV = new Model_NV();
            $NVList = $modelNV->getAllNV();
            include_once("../View/NVUpdate.php");

        }
        else if(isset($_GET['idnv'])){
            $modelNV = new Model_NV();
            $modelPB = new Model_PB();
            $PBList = $modelPB->getAllPB();
            $NV = $modelNV->getNVDetail($_GET['idnv']);
            include_once("../View/FormUpdateNV.php");
        }
        else if (isset($_GET['IDNV'])){
            $modelNV = new Model_NV();
            $modelNV->updateNV($_GET['IDNV']);
            $nv = $modelNV->getNVDetail($_GET['IDNV']);
            include_once("../View/NVDetail.php");

        }
        else if (isset($_GET['mod3'])) {
            $modelNV = new Model_NV();
            $NVList = $modelNV->getAllNV();
            include_once("../View/NVDelete.php");
        } else if (isset($_POST['delete'])) {
            $modelNV = new Model_NV();
            $NVList = $modelNV->getAllNV();
            foreach ($NVList as $nv) {
                if (isset($_REQUEST[$nv->id])) {
                    $ID = $_REQUEST[$nv->id];
                    $modelNV->deleteNV($ID);
                }
                header("Location:../View/NVDelete.php");
            }
        }
        else if(isset($_GET['mod4'])) {
            $modelNV = new Model_NV();
            include_once("../View/NVSearch.php");
        }
        else if(isset($_POST['search'])){
            $modelNV = new Model_NV();
           $NVreq = $modelNV->searchNV($_POST['search']);
           include_once("../View/NVAfterSearch.php");
        }
        else if (isset($_GET['id'])) {
            $modelNV = new Model_NV();
            $nv = $modelNV->getNVDetail($_GET['id']);
            include_once("../View/NVDetail.php");
        } else {
            $modelNV = new Model_NV();
            $NVList = $modelNV->getAllNV();
            include_once("../View/NVList.php");
        }
    }
};
$C_NhanVien = new Ctrl_nhanvien();
$C_NhanVien->invoke();
?>
