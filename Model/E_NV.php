<?php
class Entity_NV{
    public $id;
    public $name;
    public $pb;
    public $address;

    public function __construct($_id, $_name, $_pb, $_address)
    {   $this->id = $_id;
        $this->name = $_name;
        $this->pb = $_pb;
        $this->address = $_address;

        
    }
}

?>