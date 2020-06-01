<?php
namespace App\Models;

class Moltiplicator{
  public $num1;
  public $operator;
  public $num2;

  public function __construct(int $val1, string $oper,int $val2)
  {

    $this -> num1 = $val1;
    $this -> operator = $oper;
    $this -> num2 = $val2;
    
  }

  public function calculate()
  {
    switch ($this -> operator) {
      case 'somm':
        return ($this -> num1 + $this -> num2);
        break;

      case 'sott';
        return ($this -> num1 - $this -> num2);
        break;

      case 'div';
        return ($this -> num1 / $this -> num2);
        break;

      case 'molt';
        return ($this -> num1 * $this -> num2);
        break;

      default:
        return "Nessun calcolatore associato.";
        break;
    }
  }
}
