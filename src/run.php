#!/usr/bin/php
<?php

require('Show.class.php');
require('Calc.class.php');
require('Tools.class.php');
require('autoload.php');

use App\Calc;
use App\Show;
use App\Tools;

$mdc_3 = env('MDC_1', 3);
$mdc_5 = env('MDC_2', 5);
$mdc_15 = env('MDC_3', 15);
$length = env('LENGTH', 100);
$alias_3 = env('ALIAS_MULTIPLES_3','BHUT');
$alias_5 = env('ALIAS_MULTIPLES_5','IT');
$alias_15 = env('ALIAS_MULTIPLES_15','BHUT IT');



$show = new Show();
$calc = new Calc();
$tools = new Tools();

$multiplos_3 = $calc->searc_multiple($length, $mdc_3);
$multiplos_BHUT = $tools->replace($multiplos_3, $alias_3);

$multiplos_5 = $calc->searc_multiple($length, $mdc_5);
$multiplos_IT = $tools->replace($multiplos_5, $alias_5);

$multiplos_3_e_5 = $calc->searc_multiple($length, $mdc_15);
$multiplos_BHUT_IT = $tools->replace($multiplos_3_e_5, $alias_15);

$multiplos = $multiplos_BHUT_IT + $multiplos_IT + $multiplos_BHUT ;

$entrada = range(1, $length);

foreach ($entrada as $key => $value)
{
  if($value%3==0 || $value%5==0 )
  {
      $value = $multiplos[$value];
  }
    $show->start($value);

}

 $show->end();
