<?php

spl_autoload_register(function($name){
  
  $path = str_replace('\\', '/', $name) . '.php';

  if(!file_exists($path)){
    print_r('FUCK! Autoload is FUCK!');
  }

  include_once($path);

});
