<?php
require_once 'Employee.class.php';

class SalesmanIterator extends FilterIterator {
  public function __construct($iterator) {
    parent::__construct($iterator);
  }

  public function accept() {
    $employee = $this->current();
    return $employee->getJob() === 'SALESMAN';
  }
}
