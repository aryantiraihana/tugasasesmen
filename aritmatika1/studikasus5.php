<?php 

class Aritmatika{
    public $x;
    protected $y;
    private $z;

    public function __construct ($x, $y, $z){
        $this->x = $x;
        $this->y = $y;
        $this->z = $z;
    }

    public function getX(){
        return $this->x;
    }
    public function getY(){
        return $this->y;
    }
    public function getZ(){
        return $this->z;
    }

    public function Penjumlahan(){
        return $this->x + $this->y + $this->z;
    }
    public function Pengurangan(){
        return $this->x - $this->y - $this->z;
    }
  
    public function Perkalian(){
        return $this->x * $this->y * $this->z;
    }
    public function Pembagian(){
        if($this->x != 0 && $this->y != 0){
            return $this->x / $this->y / $this->z;
       } else {
            return "Pembagian tidak bisa nol!";
       }
    
    }

}

 $arit = new Aritmatika(2, 3, 5);

 echo "Hasil Operasi Aritmatika <br>";
 echo "Bilangan x yaitu " . $arit->getX() . "<br>";
 echo "Bilangan y yaitu " . $arit->getY() . "<br>";
 echo "Bilangan z yaitu " . $arit->getZ() . "<br>";
 echo "Hasil Penjumlahan : " . $arit->Penjumlahan() . "<br>";
 echo "Hasil Pengurangan : " . $arit->Pengurangan() . "<br>";
 echo "Hasil Perkalian : " . $arit->Perkalian() . "<br>";
 echo "Hasil Pembagian : " . $arit->Pembagian();

?>