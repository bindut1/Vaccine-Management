<?php
class Entity_KhachHang
{
    public $idkh;
    public $tenkh;
    public $sdt;
    public $diachi;
    public $ngaysinh;
    public $gioitinh;

    public function __construct($_idkh, $_tenkh, $_sdt, $_diachi, $_ngaysinh, $_gioitinh)
    {
        $this->idkh = $_idkh;
        $this->tenkh = $_tenkh;
        $this->sdt =  $_sdt;
        $this->diachi = $_diachi;
        $this->ngaysinh = $_ngaysinh;
        $this->gioitinh = $_gioitinh;
    }
};
