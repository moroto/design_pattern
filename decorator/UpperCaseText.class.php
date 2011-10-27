<?php
require_once('TextDecorator.class.php');

/**
 * TextDecoratorの実装クラス
 * ConcreteDecorator
 */
class UpperCaseText extends TextDecorator {
  public function __construct(Text $target) {
    parent::__construct($target);
  }

  /**
   * 半角小文字を半角大文字に変換
   */
  public function getText() {
    $str = parent::getText();
    $str = strtoupper($str);
    return $str;
  }
}
