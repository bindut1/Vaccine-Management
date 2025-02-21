<?php
class Entity_LichSuTiemPhong
{
    public $tenbenh;
    public $tenvx;
    public $tongmui;
    public $sttmui;
    public $ngaytiem;
    public $ngaytiemtieptheo;

    public function __construct($_tenbenh, $_tenvx, $_tongmui, $_sttmui, $_ngaytiem, $_ngaytiemtieptheo)
    {
        $this->tenbenh = $_tenbenh;
        $this->tenvx = $_tenvx;
        $this->tongmui =  $_tongmui;
        $this->sttmui = $_sttmui;
        $this->ngaytiem = $_ngaytiem;
        $this->ngaytiemtieptheo = $_ngaytiemtieptheo;
    }
};
