<?php
/**
 * 
 */
require 'sizu.class.php';
$person = new sizu("二班");
$string = serialize($person);
file_put_contents("person.txt",$string);