<?php

namespace App\Models;

/**
 *
 */
class Discount extends Moltiplicator
{
  // const DISCOUNT = 20;
  public static $discount = 20;

  function __construct(int $val1, string $oper,int $val2)
  {
    parent::__construct($val1,$oper,$val2);
  }

  public static function getSale($calc)
  {
    return (($calc -> calculate() * self::$discount)/ 100); // self::DISCOUNT;
  }
}
