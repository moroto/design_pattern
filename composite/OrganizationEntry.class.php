<?php
/**
 * Component
 *
 */
abstract class OrganizationEntry {
  private $code;
  private $name;

  public function __construct($code, $name) {
    $this->code = $code;
    $this->name = $name;
  }

  public function getCode() {
    return $this->code;
  }

  public function getName() {
    return $this->name;
  }

  public abstract function add(OrganizationEntry $entry);
  
  public function dump() {
    echo $this->code.":".$this->name."<br>\n";
  }

}
