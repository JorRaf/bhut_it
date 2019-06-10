<?php
namespace Test;

require(dirname(__FILE__)."/../autoload.php");
require(dirname(__FILE__)."/../src/Calc.class.php");
require(dirname(__FILE__)."/../src/Tools.class.php");

use PHPUnit\Framework\TestCase;
use App\Calc;

class MultiplosTest extends TestCase
{
    private $mdc_3;
    private $mdc_5;
    private $mdc_15;
    private $length;
    private $alias_3;
    private $alias_5;
    private $alias_15;

    public function setUp()
    {

      $this->mdc_3 = env('MDC_1', 3);
      $this->mdc_5 = env('MDC_2', 5);
      $this->mdc_15 = env('MDC_3', 15);
      $this->length = env('LENGTH', 100);
      $this->alias_3 = env('ALIAS_MULTIPLES_3','BHUT');
      $this->alias_5 = env('ALIAS_MULTIPLES_5','IT');
      $this->alias_15 = env('ALIAS_MULTIPLES_15','BHUT IT');

    }

    /** @test */
    public function searc_multiple_3()
    {
      $calc = new Calc;

      $multiplos_3 = $calc->searc_multiple($this->length, $this->mdc_3);

      foreach ($multiplos_3 as $key => $value) {
          $this->assertEquals(0, $value%$this->mdc_3);
      }

    }

    /** @test */
    public function searc_multiple_5()
    {
      $calc = new Calc;

      $multiplos_5 = $calc->searc_multiple($this->length, $this->mdc_5);

      foreach ($multiplos_5 as $key => $value) {
          $this->assertEquals(0, $value%$this->mdc_5);
      }

    }

    /** @test */
    public function searc_multiple_3_and_5()
    {
      $calc = new Calc;

      $multiplos_3_5 = $calc->searc_multiple($this->length, $this->mdc_15);

      foreach ($multiplos_3_5 as $key => $value) {
          $this->assertEquals(0, $value%$this->mdc_15);
      }

    }

}
 ?>
