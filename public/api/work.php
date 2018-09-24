<?php

echo '<pre>';
echo "foo\n"; //inside "", new line works
echo 'foo'; // \n doesn't work
echo "bar";

//echo works like print not print line

$n = 5;
echo "bar {$n}\n";
echo "bar".$n."\n"; //uses . to concat strings

class Animal
{
  public $type ='Pig';
}

$wilbur = new Animal();
echo $wilbur->type;

$arr = []; //diff from java and JS, could have numerical or string indices

$arr1 = [
  'first'=>'Tom',
  'last'=>'Gregory'
];

//Associative arrays is special to PHP
$arr2 = ['zero','blue','two'];

$id=0;
if (isset($_GET['id'])) {
  $id =$_GET['id'];
}

$id = isset($_GET['id'])?$_GET['id']:0;

$id = $_GET['id']??0; //PHP 7 addition

//all 3 id related pieces of code here are equivalent
