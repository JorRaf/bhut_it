<?php
namespace Test;

use PHPUnit\Framework\TestCase;
use App\Calc;
use App\Tools;

class ToolsTest extends TestCase
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
    public function check_string_replace_multiples_3()
    {

      $calc = new Calc();
      $tools = new Tools();

      $multiplos_3 = $calc->searc_multiple($this->length, $this->mdc_3);
      $multiplos_BHUT = $tools->replace($multiplos_3, $this->alias_3);

      foreach ($multiplos_BHUT as $key => $value)
      {
        $this->assertEquals($this->alias_3, $value);
      }

    }

    /** @test */
    public function check_string_replace_multiples_5()
    {

      $calc = new Calc();
      $tools = new Tools();

      $multiplos_5 = $calc->searc_multiple($this->length, $this->mdc_5);
      $multiplos_BHUT = $tools->replace($multiplos_5, $this->alias_5);

      foreach ($multiplos_BHUT as $key => $value)
      {
        $this->assertEquals($this->alias_5, $value);
      }

    }

    /** @test */
    public function check_string_replace_multiples_15()
    {

      $calc = new Calc();
      $tools = new Tools();

      $multiplos_15 = $calc->searc_multiple($this->length, $this->mdc_15);
      $multiplos_BHUT = $tools->replace($multiplos_15, $this->alias_15);

      foreach ($multiplos_BHUT as $key => $value)
      {
        $this->assertEquals($this->alias_15, $value);
      }

    }
}
?>
