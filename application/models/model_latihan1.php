<?php
class Model_latihan1 extends CI_Model
{
    //dibawah ini membuat variable untuk menampung nilai
    public $nilai1, $nilai2, $hasil;
    
    //dibawah ini membuat method penjumlahan
    public function jumlah($n1 = null, $n2 = null)
    {
        $this->nilai1 = $nl;
        $this->nilai2 = $n2;
        $this->hasil = $this->nilai1 + $this->nilai2;
        return $this->hasil;
    }
}