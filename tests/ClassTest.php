<?php
namespace Exercise\Test;
use PHPUnit\Framework\TestCase;
use Exercise\Class; 
require_once "src/Class.php";
class DogTest extends TestCase {
   public function testBark() {
        $this->assertTrue(class_exists("Dog"), "You must declare Dog class");
       $dog = new Dog();
       $this->assertEquals("woof woof", $dog->bark(), "bark() must return 'woof woof'");
   }

}