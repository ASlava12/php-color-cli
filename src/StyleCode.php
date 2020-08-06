<?php

namespace Aslava12\ColorCLI;

/**
 * Коды стилей
 * overline, oline - черта над текстом
 * doubleunderline, duline - двойное подчеркивание
 * bold - жирный текст
 * halfbold, hbold - полужирный / полуяркий
 * italic - курсив
 * underline, uline - подчеркивание
 * flash - мигание текста
 * revers - цвет фона и текста меняются местами
 * onecolorise, ocolor - цвет текста окрашивается в тот же, что и фона
 * cross - перечеркивание фона
 * default - по умолчанию, отмена форматирования
 */
class StyleCode {

  private $cacheCode = [];

  function __get($name) {
    $name = "_" . strtolower($name);
    $code = 0;

    if (!isset($this->cacheCode[$name])) {

      if (strpos($name,"overline") or strpos($name,"oline")) {
        $code = 52;
      } else if (strpos($name,"doubleunderline") or strpos($name,"duline")) {
        $code = 21;
      } else if (strpos($name,"bold")) {
        $code = 1;
      } else if (strpos($name,"halfbold") or strpos($name,"hbold")) {
        $code = 2;
      } else if (strpos($name,"italic")) {
        $code = 3;
      } else if (strpos($name,"underline") or strpos($name,"uline")) {
        $code = 4;
      } else if (strpos($name,"flash")) {
        $code = 5;
      } else if (strpos($name,"revers")) {
        $code = 7;
      } else if (strpos($name,"onecolorise") or strpos($name,"ocolor")) {
        $code = 8;
      } else if (strpos($name,"cross")) {
        $code = 9;
      } else {
        $code = 0;
      }
      $this->cacheCode[$name] = $code;
    }
    return $this->cacheCode[$name];

  }

  function __call($name,$param){
    return $this->__get($name . implode('',$param));
  }

}


?>
