<?php
class Entity_VacXin
{
    public $idvx;
    public $tenvx;
    public $somuitiem;
    public $mota;
    public $gia;
    public $nhasanxuat;

    public function __construct($_idvx, $_tenvx, $_somuitiem, $_mota, $_gia, $_nhasanxuat)
    {
        $this->idvx = $_idvx;
        $this->tenvx = $_tenvx;
        $this->somuitiem =  $_somuitiem;
        $this->mota = $_mota;
        $this->gia = $_gia;
        $this->nhasanxuat = $_nhasanxuat;
    }
};
