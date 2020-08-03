<?php

namespace format;

require_once(__DIR__ . "/ColorCode.php");
require_once(__DIR__ . "/StyleCode.php");

/**
 *
 */
class Format
{
  public $color;
  public $style;

  public function __construct() {
    $this->color = new \format\color\ColorCode();
    $this->style = new \format\style\StyleCode();
  }

  public function to(array $codes) {
    return "\033[" . implode(';',$codes) . "m";
  }

}


?>
