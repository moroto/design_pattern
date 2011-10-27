<?php
require_once('Text.class.php');

/**
 * Textクラスを装飾
 * Decorator
 */
abstract class TextDecorator implements Text {
  private $text;

  public function __construct(Text $target) {
    $this->text = $target;
  }

  public function getText() {
    return $this->text->getText();
  }

  public function setText($str) {
    $this->text->setText($str);
  }
}


