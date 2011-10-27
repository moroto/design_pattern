<?php
require_once('TextDecorator.class.php');

/**
 * TextDecoratorの実装クラス
 * ConcreteDecorator
 */
class DoubleByteText extends TextDecorator {
  public function __construct(Text $target) {
    parent::__construct($target);
  }

  /**
   * テキストを全角文字に変換して返します
   */
  public function getText() {
    $str = parent::getText();
    $str = mb_convert_kana($str, "RANSKV");
    return $str;
  }
}

