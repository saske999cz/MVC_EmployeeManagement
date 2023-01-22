<?php
class Entity_PB{
    public $idpb;
    public $name;
    public $mota;

    public function __construct($_id, $_name, $_mota)
    {   $this->idpb = $_id;
        $this->name = $_name;
        $this->mota =$_mota;
        

        
    }
}

?>