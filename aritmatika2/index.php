<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aritmatika</title>
    <?php require("aritmatika.php"); ?>
</head>
<body>
    <h1>Aritmatika</h1>
    <form action="index.php" method="POST">
        <input type="text" name="x" placeholder="Input" size="3">
        <select name="operator">
            <option>+</option>
            <option>-</option>
            <option>/</option>
            <option>*</option>
        </select>
        <input type="text" name="y" placeholder="Input" size="3">
        <input type="submit" name ="submit" value="Count">
    </form>

    <?php 
    
    $Kalku = new Kalkulator();
    if(isset($_POST['submit'])){
        // untuk menangkap inputan dan memasukkan ke variabel
        $x = $_POST['x'];
        $y = $_POST['y'];
        $opr = $_POST['operator'];
        if($opr == '+'){
            echo "Hasil dari " . $x . " " . $opr . " " . $y . " = " . $Kalku->setTambah($x, $y);
        
        } else if($opr == '-'){
            echo "Hasil dari " . $x . " " . $opr . " " . $y . " = " . $Kalku->setKurang($x, $y);
       
        } else if($opr == '/'){
            echo "Hasil dari " . $x . " " . $opr . " " . $y . " = " . $Kalku->setBagi($x, $y);
            
        } else if($opr == '*'){
            echo "Hasil dari " . $x . " " . $opr . " " . $y . " = " . $Kalku->setKali($x, $y);
           
        }
        
    }
    
    ?>
</body>
</html>