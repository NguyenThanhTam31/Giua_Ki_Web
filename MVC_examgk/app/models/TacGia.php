<?php
class TacGia{
    private $id;
    private $tenTacGia;

    public function __construct($id, $tenTacGia)
    {
        $this->id = $id;
        $this->tenTacGia = $tenTacGia;
    }

    //Dinh nghia cac setter/getter
    public function getId(){
        return $this->id;
    }
    public function getTenTacGia(){
        return $this->tenTacGia;
    }
    public function setId($id){
        $this->id=$id;
    }
    public function setTenTacGia($tenTacGia){
        $this->tenTacGia=$tenTacGia;
    }
}