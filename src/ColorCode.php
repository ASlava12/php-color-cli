<?php

namespace format\color;

  /**
   * цвета для текста и фона
   * по умолчанию, возвращает яркие цвета для переднего плана
   * Можно задать до 3-х параметров кода цвета:
   *   bg, background - указывают, что нужно подстроить код для фона
   *   fg, foreground - указывают, что нужно подстроитькод для текста
   *   dark - темная версия цвета
   *   light - светлая
   *   black,red,green,yellow,blue,magenta,cyan,white - поддерживаемые цвета
   */
  class ColorCode {

    function __get($name) {
      $isLight = 1;
      $color = Null;
      $name = "_".strtolower($name);
      $isBG = 0;

      if (strpos($name,"dark")) {
        $isLight=0;
      }

      if (strpos($name,"black")) {
        $color = 0;
      } else if (strpos($name,"red")) {
        $color = 1;
      } else if (strpos($name,"green")) {
        $color = 2;
      } else if (strpos($name,"yellow")) {
        $color = 3;
      } else if (strpos($name,"blue")) {
        $color = 4;
      } else if (strpos($name,"magenta")) {
        $color = 5;
      } else if (strpos($name,"cyan")) {
        $color = 6;
      } else if (strpos($name,"white")) {
        $color = 7;
      } else {
        return 0;
      }

      if (strpos($name,"bg") or strpos($name,"background")) {
        $isBG = 1;
      }

      return 30 + $isLight * 60 + $isBG * 10 + $color;

    }

    function __call($name,$param){
      return $this->__get($name . implode('',$param));
    }

  }


?>
