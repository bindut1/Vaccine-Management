<?php
class Entity_ThongKe
{
    public $idkh;
    public $tenkh;
    public $diachi;
    public $tongtien;

    public function __construct($_idkh, $_tenkh, $_diachi, $_tongtien)
    {
        $this->idkh = $_idkh;
        $this->tenkh = $_tenkh;
        $this->diachi = $_diachi;
        $this->tongtien = $_tongtien;
    }
};
