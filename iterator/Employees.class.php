<?php
require_once 'Employee.class.php';

class Employees implements IteratorAggregate {
  private $employees;

  public function __construct() {
    $this->employees = new ArrayObject();
  }

  public function add(Employee $employee) {
    $this->employees[] = $employee;
  }

  public function getIterator() {
    return $this->employees->getIterator();
  }
}
