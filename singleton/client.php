<?php
require_once 'SingletonSample.class.php';

$instance1 = SingletonSample::getInstance();
sleep(1);
$instance2 = SingletonSample::getInstance();

echo '<hr>';

// 2つのインスタンスが同一IDかどうかを確認
echo 'instance ID: ' . $instance1->getID() . '<br>';
echo '$instance1->getID() === $instance2->getID(): ' . ($instance1->getID() === $instance2->getID() ? 'true' : 'false');
echo '<hr>';

// 2つのインスタンスが同一かどうかを確認
echo '$instance1 === $instance2: ' . ($instance1 === $instance2 ? 'true' : 'false');
echo '<hr>';

// 複製できない事を確認
try {
  $instance1_clone = clone $instance1;
} catch (RuntimeException $e) {
  echo $e->getMessage();
}

