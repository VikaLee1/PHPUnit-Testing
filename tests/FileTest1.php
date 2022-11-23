<?php
namespace Exercise\Test;
// declare(strict_types=1);
use PHPUnit\Framework\TestCase; // imports PHPUnit core class called TestCase
use Exercise\SrcFile1; // imports SrcFile class
// Create Test Class

/*
* @covers  Exercise\SrcFile
*/
class FileTest extends  TestCase {
  
  public function  testSum() {

      $obj = new SrcFile(); // dummy object for testing
      $input = [ 0, 2, 5, 8]; // put the inputs in its own array
      $output = $obj->sum($input); // store the sum of the array within a $output variable
       $this->assertEquals( // Built-in assertEquals() method for defining the test. It accepts three parameters
           15, // 1st param is the expected value
          $output, // 2nd param is the $output variable
          'When summing the total should equal 15'// 3rd param is a message displayed in case of failure
      );
  }

}