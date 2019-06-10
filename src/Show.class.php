<?php
namespace App;

class Show
{
  /**
 * Formats the output on the console
 *
 * @author Jorge Rafael 'jorrafoliver@gmail.com'
 *
 * @param  @mixed
 * @return 
 */
    public function start($value)
    {
        printf($value." | ");
    }

    public function end()
    {
        printf("\n");
    }

}
?>
