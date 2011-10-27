<?php
require_once 'Group.class.php';
require_once 'Employee.class.php';

// 木構造を作成
$rootEntry = new Group('001', '本社');
$rootEntry->add(new Employee('00101', 'CEO'));
$rootEntry->add(new Employee('00102', 'CTO'));

$group1 = new Group('010', '○○支店');
$group1->add(new Employee('01001', '支店長')); 
$group1->add(new Employee('01002', '佐々木')); 
$group1->add(new Employee('01003', '鈴木')); 
$rootEntry->add($group1);

$group2 = new Group('110', '△△営業所');
$group2->add(new Employee('11001', '川村')); 
$group1->add($group2);
$rootEntry->add($group1);

$group3 = new Group('020', '××支店');
$group3->add(new Employee('02001', '萩原')); 
$group3->add(new Employee('02002', '田島')); 
$group3->add(new Employee('02003', '白井')); 
$rootEntry->add($group3);

$rootEntry->dump();
