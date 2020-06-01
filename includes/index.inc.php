<?php
declare(strict_types = 1);

use App\Models\Moltiplicator as Calculator;
use App\Models\Discount;

if (isset($_POST['submit'])) {

  $num1 = $_POST['num1'];
  $num2 = $_POST['num2'];
  $oper = $_POST['oper'];

  try{

    $calc = new Calculator((int)$num1, (string)$oper, (int)$num2);

    $discount =  Discount::getSale($calc);
    $result =  $calc -> calculate();

    return array($discount, $result);

    } catch(TypeError $e){
    echo "Errore di tipologia: " . $e -> getMessage();
  }

}

 ?>
