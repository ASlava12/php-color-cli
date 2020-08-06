<?php

namespace Aslava12\ColorCLI;

require_once(__DIR__ . "/ColorCode.php");
require_once(__DIR__ . "/StyleCode.php");

use \Aslava12\ColorCLI;

/**
 *
 */
class Format
{
  public $color;
  public $style;

  public function __construct() {
    $this->color = new ColorCode();
    $this->style = new StyleCode();
  }

  public function to(array $codes) {
    return "\033[" . implode(';',$codes) . "m";
  }

}


?>
