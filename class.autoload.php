<?php

spl_autoload_register("myAutoLoader");

function myAutoLoader($classNamespace)
{
  $classNameToArray = explode('\\',$classNamespace);
  $className = end($classNameToArray);
  return require (__DIR__ . "/models/" . $className . ".php");
}
