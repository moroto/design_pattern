<?php
require_once 'Employee.class.php';
require_once 'Employees.class.php';
require_once 'SalesmanIterator.class.php';

function dumpWithForeach($iterator) {
  echo '<ul>';
  foreach ($iterator as $employee) {
    printf('<li>%s (%d, %s)</li>', $employee->getName(), $employee->getAge(), $employee->getJob());
  }
  echo '</ul>';
  echo '<hr>';
}

$employees = new Employees();
$employees->add(new Employee('SMITH', 32, 'CLERK'));
$employees->add(new Employee('ALLEN', 26, 'SALESMAN'));
$employees->add(new Employee('MARTIN', 50, 'SALESMAN'));
$employees->add(new Employee('CLARK', 45, 'MANAGER'));
$employees->add(new Employee('KING', 58, 'PRESIDENT'));

$iterator = $employees->getIterator();

// iteratorのメソッドを利用する
echo '<ul>';
while ($iterator->valid()) {
  $employee = $iterator->current();
  printf('<li>%s (%d, %s)</li>', $employee->getName(), $employee->getAge(), $employee->getJob());
  
  $iterator->next();
}
echo '</ul>';
echo '<hr>';

// foreach文を利用する
dumpWithForeach($iterator);

// 異なるiteratorで要素を取得する
dumpWithForeach(new SalesmanIterator($iterator));

