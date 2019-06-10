<?php
namespace App;

class Tools
{
  /**
 * Get an array and replace all values ​​with a string
 *
 * @author Jorge Rafael 'jorrafoliver@gmail.com'
 *
 * @param  @array, @string
 * @return string @array
 */
  public function replace($array, $alias)
  {
      foreach ($array as $key =>$value) {
          $array[$key] = $alias;
      }

      return $array;
  }
  
}
