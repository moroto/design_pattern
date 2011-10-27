<?php
require_once 'OrganizationEntry.class.php';

/**
 * Leaf
 *
 */
class Employee extends OrganizationEntry {
  public function __construct($code, $name) {
    parent::__construct($code, $name);
  }

  public function add(OrganizationEntry $entry) {
    // Leafは子を持たない
    throw new Exception('method not allowed');
  }
}

