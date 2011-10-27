<?php
require_once('UpperCaseText.class.php');
require_once('DoubleByteText.class.php');
require_once('PlainText.class.php');

  $text = isset($_POST['text']) ? $_POST['text'] : '';
  $decorate = isset($_POST['decorate']) ? $_POST['decorate'] : array();
  if ($text !== '') {
    $textObj = new PlainText();
    $textObj->setText($text);

    foreach ($decorate as $val) {
      switch ($val) {
      case 'double':
        $textObj = new DoubleByteText($textObj);
        break;
      case 'upper':
        $textObj = new UpperCaseText($textObj);
        break;
      }
      echo $textObj->getText().'<br>';
    }
  }
?>

<hr>
<form action="" method="post">
  テキスト：<input type="text" name="text"><br>
  装飾：<input type="checkbox" name="decorate[]" value="upper">大文字に変換
  <input type="checkbox" name="decorate[]" value="double">２バイト文字に変換
  <input type="submit">
</form>
