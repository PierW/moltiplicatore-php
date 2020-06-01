<?php
require_once 'bootstrap.php';
include "includes/index.inc.php";


$data = [
  "title"=>"Calcolatore",
  "titleForm"=>"MY OWN CALCULATOR",
  "result" => (isset($result)) ? $result : null,
  "sconto" => (isset($discount)) ? $discount : null
];

  echo $blade->run("index", $data);
?>
