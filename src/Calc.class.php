<?php
namespace App;

class Calc
{
  /**
 * Receives the size of an array and a prime number, returns all the existing multiples in the range
 *
 * @author Jorge Rafael 'jorrafoliver@gmail.com'
 *
 * @param  @int, @int
 * @return @array
 */
  public function searc_multiple($i,$mdc)
  {
    $fatores = range(1, intdiv($i,$mdc));

    for ($i=0;$i<count($fatores);$i++)
    {
      $multiplos[$fatores[$i]* $mdc] = $fatores[$i] * $mdc;
    }

    return $multiplos;
  }

}

?>
