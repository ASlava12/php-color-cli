#!/usr/bin/php7.2
<?php

  require_once(__DIR__ . "/src/Format.php");

//  use Aslava12\ColorCLI;

  $fm = new \Aslava12\ColorCLI\Format();

  echo $fm->to([
            $fm->color->bgRed,
            $fm->color->fgdarkblack,
            $fm->style->italic,
            $fm->style->bold,
            $fm->style->flash,
        ]) . "testing" . $fm->to([
            $fm->style->default
        ]) . PHP_EOL;

?>
