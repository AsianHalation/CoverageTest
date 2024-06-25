<?php

require_once __DIR__ . '\..\..\src\Calculator.php';

class CalculatorTest extends TestCase {
    public function testAdd() {
        
        $calculator = new Calculator();
        print("Testing addition...\n");

        
        $result = $calculator->add(2, 3);
        print($result);

        
        $this->assertEquals(5, $result);
        
    }

    public function testAddWithNegativeNumbers() {

        $calculator = new Calculator();
        print("Testing negative \n");

        $this->expectException(InvalidArgumentException::class);
        $calculator->add(-2, 3);
        print("\n");
    }

    public function testSubtract() {
        // Arrange
        $calculator = new Calculator();
        print("Testing subtract\n");

        // Act
        $result = $calculator->subtract(8, 3);
        print("8 - 3 = $result\n");

        // Assert
        $this->assertEquals(5, $result);
        print("Subtraction test passed.\n");
    }

    // Additional tests with detailed output
    public function testMultiply() {
        // Arrange
        $calculator = new Calculator();
        print("Testing multiply\n");

        // Act
        $result = $calculator->multiply(4, 5);
        print($result);

        // Assert
        $this->assertEquals(20, $result);
        print("multiply");
    }

    public function testDivide() {
        // Arrange
        $calculator = new Calculator();
        print("Testing divide\n");

        // Act
        $result = $calculator->divide(10, 2);
        print($result);

        // Assert
        $this->assertEquals(5, $result);
    }

    public function testDivideByZero() {
        // Arrange
        $calculator = new Calculator();
        print("Testing divide zero");

        // Act & Assert
        $this->expectException(InvalidArgumentException::class);
        $calculator->divide(10, 0);
    }
}