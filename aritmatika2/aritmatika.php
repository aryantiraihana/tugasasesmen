<?php 

class Kalkulator{
    public $x, $y;

    public function setTambah($x, $y){
        $this->x = $x;
        $this->y = $y;
        return $hasil = $this->x + $this->y;
    }
    public function setKurang($x, $y){
        $this->x = $x;
        $this->y = $y;
        return $hasil = $this->x - $this->y;
    }
    public function setBagi($x, $y, $z){
        if($this->x != 0 && $this->y != 0){
            return $this->x / $this->y;
       } else {
            return "Error Detected (Can't defined zero)!";
       }
    }
    public function setKali($x, $y){
        $this->x = $x;
        $this->y = $y;
        return $hasil = $this->x * $this->y;
    }

}

?>